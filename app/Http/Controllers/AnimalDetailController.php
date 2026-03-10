<?php

namespace App\Http\Controllers;

use App\Models\ActivityTime;
use App\Models\Biome;
use App\Models\Category;
use App\Models\Climate;
use App\Models\DietType;
use App\Models\Image;
use App\Models\PopulationTrending;
use Illuminate\Http\Request;
use App\Models\AnimalDetail;
use Str;
use App\Models\Area;
use App\Http\MessageContent;
use App\Models\ConservationStatus;
use App\Models\Color;
use App\Models\Ocean;
use App\Models\Post;
use App\Models\Nation;

class AnimalDetailController extends Controller
{
    public function viewAnimalPage()
    {
        $areas = Area::all();
        $tropical = Climate::where('id', Climate::TROPICAL)->first();
        $arid = Climate::where('id', Climate::ARID)->first();
        $temperate = Climate::where('id', Climate::TEMPERATE)->first();
        $cold = Climate::where('id', Climate::COLD)->first();
        $polar = Climate::where('id', Climate::POLAR)->first();
        $green = Color::where('id', Color::GREEN)->first();
        $blue = Color::where('id', Color::BLUE)->first();
        $red = Color::where('id', Color::RED)->first();
        $yellow = Color::where('id', Color::YELLOW)->first();
        $orange = Color::where('id', Color::ORANGE)->first();
        $brown = Color::where('id', Color::BROWN)->first();
        $white = Color::where('id', Color::WHITE)->first();
        $black = Color::where('id', Color::BLACK)->first();
        $gray = Color::where('id', Color::GRAY)->first();
        $purple = Color::where('id', Color::PURPLE)->first();
        $pacific = OCEAN::where('id', Ocean::PACIFIC)->first();
        $indian = OCEAN::where('id', Ocean::INDIAN)->first();
        $atlantic = OCEAN::where('id', Ocean::ATLANTIC)->first();
        $arctic = OCEAN::where('id', Ocean::ARCTIC)->first();
        $activityTime = ActivityTime::all();
        $dietType1 = DietType::where('id', DietType::HERBIVOROUS)->first();
        $dietType2 = DietType::where('id', DietType::CARNIVORES)->first();
        $dietType3 = DietType::where('id', DietType::OMNIVORES)->first();
        $dietType4 = DietType::where('id', DietType::FOLIVORES)->first();
        $dietType5 = DietType::where('id', DietType::INSECTIVORES)->first();

        return view('user.home', compact('areas', 'tropical', 'arid', 'temperate', 'cold', 'polar', 'green', 'blue', 'red', 'yellow', 'orange', 'brown', 'white', 'black', 'gray', 'purple', 'pacific', 'indian', 'atlantic', 'arctic', 'activityTime', 'dietType1', 'dietType2', 'dietType3', 'dietType4', 'dietType5'));
    }

    public function viewAnimalBlog()
    {
        $posts = Post::where('status', Post::APPROVAL)->paginate(5);
        return view('user.list-blog-2', compact('posts'));
    }

    public function viewDetailBlog($id)
    {
        $post = Post::where('id', $id)->first();
        return view('user.blog-detail', compact('post'));
    }

    public function color($id)
    {
        $data = AnimalDetail::whereHas('colors', function ($query) use ($id) {
            $query->where('color_id', $id);
        })->with(['images' => function ($query) {}])->paginate(5);
        $data1 = Color::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }
    public function getAnimalDetailInfor($id)
    {
        $data = AnimalDetail::find($id);
        $data->images;
        $data->areas;
        $data->nations;
        $data->oceans;
        $data->trend;
        $data->status;
        $data->biomes;
        $data->climates;
        $data->diet;
        $habitImage = Image::where('detail_id', $data->id)->inRandomOrder()->first();
        $populationImage = Image::where('detail_id', $data->id)->inRandomOrder()->first();
        $conservationStatus = ConservationStatus::all();
        $multiImages = $data->multiImages;
        $dataRandom = AnimalDetail::with('images')->inRandomOrder()->take(5)->get();
        $funFact = $data->fun_fact;
        if ($funFact != "") {
            $funFact = explode('.', $funFact);
        }
        $nations = $data->nations;
        $newArrayCordinate = array();
        foreach ($nations as $nation) {
            $arrayCordinate = array($nation->nation_latitude, $nation->nation_longitude);
            array_push($newArrayCordinate, array("name" => $nation->nation_name, "coords" => $arrayCordinate));
        }
        return view('user.animal-detail', compact('data', 'habitImage', 'populationImage', 'conservationStatus', 'multiImages', 'dataRandom', 'funFact', 'newArrayCordinate'));
    }

    public function viewSearchFilter()
    {
        $areas = Area::all();
        $climates = Climate::all();
        $biomes = Biome::all();
        $nations = Nation::all();
        $colors = Color::all();
        $oceans = Ocean::all();
        $status = ConservationStatus::all();
        $activity_times = ActivityTime::all();
        $population_trendings = PopulationTrending::all();
        $diet_types = DietType::all();
        $categories = Category::all();
        $data = AnimalDetail::with('images')->paginate(5);
        return view('user.search_filter', compact('areas', 'climates', 'biomes', 'nations', 'colors', 'oceans', 'status', 'activity_times', 'population_trendings', 'diet_types', 'categories', 'data'));
    }

    public function searchFilter(Request $request)
    {
        $areas = Area::all();
        $climates = Climate::all();
        $biomes = Biome::all();
        $nations = Nation::all();
        $colors = Color::all();
        $oceans = Ocean::all();
        $status = ConservationStatus::all();
        $activity_times = ActivityTime::all();
        $population_trendings = PopulationTrending::all();
        $diet_types = DietType::all();
        $categories = Category::all();

        $data = $request->all();
        $arrayArea = isset($data['area_array']) ? $data['area_array'] : null;
        $arrayNation = isset($data['nation_array']) ? $data['nation_array'] : null;
        $arrayClimate = isset($data['climate_array']) ? $data['climate_array'] : null;
        $arrayBiome = isset($data['biome_array']) ? $data['biome_array'] : null;
        $arrayColor = isset($data['color_array']) ? $data['color_array'] : null;
        $arrayOcean = isset($data['ocean_array']) ? $data['ocean_array'] : null;
        $arrayStatus = isset($data['status_array']) ? $data['status_array'] : null;
        $arrayActivityTime = isset($data['activity_time_array']) ? $data['activity_time_array'] : null;
        $arrayPopulationTrending = isset($data['population_trending_array']) ? $data['population_trending_array'] : null;
        $arrayDietType = isset($data['diet_type_array']) ? $data['diet_type_array'] : null;
        $arrayCategory = isset($data['category_array']) ? $data['category_array'] : null;
        $keyWord = isset($data['keyword']) ? $data['keyword'] : null;


        $query = AnimalDetail::with('images');
        if ($arrayArea !== null) {
            $query->whereHas('areas', function ($q) use ($arrayArea) {
                $q->whereIn('area_id', $arrayArea);
            });
        }

        if ($arrayNation !== null) {
            $query->whereHas('nations', function ($q) use ($arrayNation) {
                $q->whereIn('nation_id', $arrayNation);
            });
        }

        if ($arrayClimate !== null) {
            $query->whereHas('climates', function ($q) use ($arrayClimate) {
                $q->whereIn('climate_id', $arrayClimate);
            });
        }

        if ($arrayBiome !== null) {
            $query->whereHas('biomes', function ($q) use ($arrayBiome) {
                $q->whereIn('biome_id', $arrayBiome);
            });
        }

        if ($arrayColor !== null) {
            $query->whereHas('colors', function ($q) use ($arrayColor) {
                $q->whereIn('color_id', $arrayColor);
            });
        }

        if ($arrayOcean !== null) {
            $query->whereHas('oceans', function ($q) use ($arrayOcean) {
                $q->whereIn('ocean_id', $arrayOcean);
            });
        }

        if ($arrayStatus !== null) {
            $query->whereIn('conservation_status_id', $arrayStatus);
        }

        if ($arrayActivityTime !== null) {
            $query->whereIn('activity_time_id', $arrayActivityTime);
        }

        if ($arrayPopulationTrending !== null) {
            $query->whereIn('population_trending_id', $arrayPopulationTrending);
        }

        if ($arrayDietType !== null) {
            $query->whereIn('diet_type_id', $arrayDietType);
        }

        if ($arrayCategory !== null) {
            $query->whereIn('category_id', $arrayCategory);
        }

        if ($keyWord !== null) {
            $query->where('animal_name', 'like', '%' . $keyWord . '%')
                ->orWhere('animal_scientific_name', 'like', '%' . $keyWord . '%');
        }

        $data = $query->paginate(5);
        return view('user.search_filter', compact('areas', 'climates', 'biomes', 'nations', 'colors', 'oceans', 'status', 'activity_times', 'population_trendings', 'diet_types', 'categories', 'data'));
    }

    public function getAnimalDetailAreas($id)
    {
        $data = AnimalDetail::whereHas('areas', function ($query) use ($id) {
            $query->where('area_id', $id);
        })->with(['images' => function ($query) {}])->paginate(5);
        $data1 = Area::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function climateZone($id)
    {
        $data = AnimalDetail::whereHas('climates', function ($query) use ($id) {
            $query->where('climate_id', $id);
        })->with(['images' => function ($query) {}])->paginate(5);
        $count = $data->count();
        $data1 = Climate::where('id', $id)->first();
        return view('user.filter-list-animal', compact('data', 'data1', 'count'));
    }

    public function biome($id)
    {
        $data = AnimalDetail::whereHas('biomes', function ($query) use ($id) {
            $query->where('biome_id', $id);
        })->with(['images' => function ($query) {}])->paginate(5);
        $count = $data->count();
        $data1 = Biome::where('id', $id)->first();
        return view('user.filter-list-animal', compact('data', 'data1', 'count'));
    }

    public function conservationStatus($id)
    {
        $data = AnimalDetail::where('conservation_status_id', $id)->paginate(5);
        $data1 = ConservationStatus::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function populationTrending($id)
    {
        $data = AnimalDetail::where('population_trending_id', $id)->paginate(5);
        $data1 = PopulationTrending::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function nation($id)
    {
        $data = AnimalDetail::whereHas('nations', function ($query) use ($id) {
            $query->where('nation_id', $id);
        })->paginate(5);
        $data1 = Nation::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function ocean($id)
    {
        $data = AnimalDetail::whereHas('oceans', function ($query) use ($id) {
            $query->where('ocean_id', $id);
        })->paginate(5);
        $data1 = Ocean::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function dietType($id)
    {
        $data = AnimalDetail::where('diet_type_id', $id)->paginate(5);
        $data1 = DietType::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }

    public function activityTime($id)
    {
        $data = AnimalDetail::where('activity_time_id', $id)->paginate(5);
        $data1 = ActivityTime::where('id', $id)->first();
        return view('user.categories-animal', compact('data', 'data1'));
    }
}
