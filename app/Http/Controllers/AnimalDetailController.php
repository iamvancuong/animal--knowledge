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
use Illuminate\Support\Facades\Cache;
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
        // Eager load tất cả relations cùng 1 lúc → tránh N+1
        $data = AnimalDetail::with([
            'images', 'areas', 'nations', 'oceans',
            'trend', 'status', 'biomes', 'climates', 'diet', 'multiImages'
        ])->findOrFail($id);

        $habitImage      = $data->multiImages->isNotEmpty() ? $data->multiImages->random() : null;
        $populationImage = $data->multiImages->isNotEmpty() ? $data->multiImages->random() : null;
        $conservationStatus = Cache::remember('conservation_status', 3600, fn() => ConservationStatus::all());
        $multiImages    = $data->multiImages;
        $dataRandom     = AnimalDetail::with(['images:id,detail_id,image_name'])->inRandomOrder()->take(5)->get();

        $funFact = $data->fun_fact;
        if ($funFact != "") {
            $funFact = explode('.', $funFact);
        }

        $nations = $data->nations;
        $newArrayCordinate = [];
        foreach ($nations as $nation) {
            $newArrayCordinate[] = [
                'name'   => $nation->nation_name,
                'coords' => [$nation->nation_latitude, $nation->nation_longitude],
            ];
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
        // Cache các dropdown data (1 giờ) → không query DB mỗi request
        $areas                = Cache::remember('areas', 3600, fn() => Area::all());
        $climates             = Cache::remember('climates', 3600, fn() => Climate::all());
        $biomes               = Cache::remember('biomes', 3600, fn() => Biome::all());
        $nations              = Cache::remember('nations', 3600, fn() => Nation::select('id', 'nation_name', 'nation_latitude', 'nation_longitude')->get());
        $colors               = Cache::remember('colors', 3600, fn() => Color::all());
        $oceans               = Cache::remember('oceans', 3600, fn() => Ocean::all());
        $status               = Cache::remember('conservation_status', 3600, fn() => ConservationStatus::all());
        $activity_times       = Cache::remember('activity_times', 3600, fn() => ActivityTime::all());
        $population_trendings = Cache::remember('population_trendings', 3600, fn() => PopulationTrending::all());
        $diet_types           = Cache::remember('diet_types', 3600, fn() => DietType::all());
        $categories           = Cache::remember('categories', 3600, fn() => Category::all());

        $arrayArea               = $request->input('area_array');
        $arrayNation             = $request->input('nation_array');
        $arrayClimate            = $request->input('climate_array');
        $arrayBiome              = $request->input('biome_array');
        $arrayColor              = $request->input('color_array');
        $arrayOcean              = $request->input('ocean_array');
        $arrayStatus             = $request->input('status_array');
        $arrayActivityTime       = $request->input('activity_time_array');
        $arrayPopulationTrending = $request->input('population_trending_array');
        $arrayDietType           = $request->input('diet_type_array');
        $arrayCategory           = $request->input('category_array');
        $keyWord                 = $request->input('keyword');

        $data = AnimalDetail::with(['images:id,detail_id,image_name'])
            ->when($arrayArea, fn($q) =>
                $q->whereHas('areas', fn($q2) => $q2->whereIn('area_id', $arrayArea))
            )
            ->when($arrayNation, fn($q) =>
                $q->whereHas('nations', fn($q2) => $q2->whereIn('nation_id', $arrayNation))
            )
            ->when($arrayClimate, fn($q) =>
                $q->whereHas('climates', fn($q2) => $q2->whereIn('climate_id', $arrayClimate))
            )
            ->when($arrayBiome, fn($q) =>
                $q->whereHas('biomes', fn($q2) => $q2->whereIn('biome_id', $arrayBiome))
            )
            ->when($arrayColor, fn($q) =>
                $q->whereHas('colors', fn($q2) => $q2->whereIn('color_id', $arrayColor))
            )
            ->when($arrayOcean, fn($q) =>
                $q->whereHas('oceans', fn($q2) => $q2->whereIn('ocean_id', $arrayOcean))
            )
            ->when($arrayStatus,             fn($q) => $q->whereIn('conservation_status_id', $arrayStatus))
            ->when($arrayActivityTime,       fn($q) => $q->whereIn('activity_time_id', $arrayActivityTime))
            ->when($arrayPopulationTrending, fn($q) => $q->whereIn('population_trending_id', $arrayPopulationTrending))
            ->when($arrayDietType,           fn($q) => $q->whereIn('diet_type_id', $arrayDietType))
            ->when($arrayCategory,           fn($q) => $q->whereIn('category_id', $arrayCategory))
            ->when($keyWord, fn($q) =>
                $q->where(fn($q2) =>
                    $q2->where('animal_name', 'like', '%' . $keyWord . '%')
                       ->orWhere('animal_scientific_name', 'like', '%' . $keyWord . '%')
                )
            )
            ->orderBy('id', 'desc')
            ->paginate(5)->withQueryString();

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
