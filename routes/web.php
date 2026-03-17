<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnimalDetailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






// ----------- User -----------
// Route::get('/', function () {
//     return view('user.home');
// })->name('user.home');
Route::get('/', [AnimalDetailController::class, 'viewAnimalPage'])->name('user.home');


Route::get('/about', function () {
    return view('user.about');
})->name('user.about');
Route::get('/contact', function () {
    return view('user.contact');
})->name('user.contact');

// fillter list animal
Route::get('/fillter-list-animal', function () {
    return view('user.filter-list-animal');
})->name('user.fillter-list-animal');

// Game
// Route::get('/list-game', function () {
//     return view('user.list-game');
// })->name('user.list-game');
// Route::get('/game', function () {
//     return view('user.game');
// })->name('user.game');
// Route::get('/game-over', function () {
//     return view('user.game-over');
// })->name('user.game-over');
// Route::get('/gift', function () {
//     return view('user.gift');
// })->name('user.gift');
// Route::get('/history-game', function () {
//     return view('user.history-game');
// })->name('user.history-game');
// Route::get('/history-gift', function () {
//     return view('user.history-gift');
// })->name('user.history-gift');



// Có 3 list blog tham khảo thử
// list blog
// Route::get('/list-blog', function () {
//     return view('user.list-blog');
// })->name('user.list-blog');
// list blog
Route::get('/list-blog-3', function () {
    return view('user.list-blog-3');
})->name('user.list-blog-3');

// blog detail
// Route::get('/blog-detail', function () {
//     return view('user.blog-detail');
// })->name('user.blog-detail');

// social
// Route::get('/social', function () {
//     return view('user.social');
// })->name('user.social');

// Route::get('/categories-list', function () {
//     return view('user.categories-animal');
// })->name('user.cate-list');
// Route::get('/animal-detail', function () {
//     return view('user.animal-detail');
// })->name('user.animal-detail');


// Route::get('/mail', function () {
//     return view('user.includes.mail');
// })->name('user.blog-detail');





// ----------- Admin -----------


// Animal
Route::get('/animals/list', function () {
    return view('admin.animals.list-animal');
})->name('admin.list-animal');

// User
// Route::get('/users/list', function () {
//     return view('admin.users.list-user');
// })->name('admin.list-user');

Route::get('/view_login', [LoginController::class, 'viewLogin'])->name('view_login');
Route::get('/view_register', [LoginController::class, 'viewRegister'])->name('view_register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::prefix('animal_detail')->group(function () {
    Route::get('/view_animal_page', [AnimalDetailController::class, 'viewAnimalPage'])->name('user.home');
    Route::get('/view_search_filter', [AnimalDetailController::class, 'viewSearchFilter'])->name('user.view_search_filter');
    Route::match(['get', 'post'], '/search_filter', [AnimalDetailController::class, 'searchFilter'])->name('user.search_filter');
    Route::get('/color/{id}', [AnimalDetailController::class, 'color'])->name('color');
    Route::get('/climate/{id}', [AnimalDetailController::class, 'climateZone'])->name('climate');
    Route::get('/nation/{id}', [AnimalDetailController::class, 'nation'])->name('user.nation');
    Route::get('/ocean/{id}', [AnimalDetailController::class, 'ocean'])->name('user.ocean');
    Route::get('/conservation_status/{id}', [AnimalDetailController::class, 'conservationStatus'])->name('user.conservation_status');
    Route::get('/population_trending/{id}', [AnimalDetailController::class, 'populationTrending'])->name('user.population_trending');
    Route::get('/diet_type/{id}', [AnimalDetailController::class, 'dietType'])->name('user.diet_type');
    Route::get('/activity_time/{id}', [AnimalDetailController::class, 'activityTime'])->name('user.activity_time');

    Route::get('/get_animal_detail_infor/{id}', [AnimalDetailController::class, 'getAnimalDetailInfor'])->name('user.animal-detail');
    Route::get('/get_animal_detail_areas/{id}', [AnimalDetailController::class, 'getAnimalDetailAreas'])->name('user.cate-list');
    Route::get('/get_animal_detail/{id}', [AnimalDetailController::class, 'getAnimalDetail']);
    Route::get('/fillter-climate/{id}', [AnimalDetailController::class, 'climateZone'])->name('climate-zone');
    Route::get('/fillter-biome/{id}', [AnimalDetailController::class, 'biome'])->name('biome');
    Route::get('/list-blog', [AnimalDetailController::class, 'viewAnimalBlog'])->name('user.list-blog');
    Route::get('/detail-blog/{id}', [AnimalDetailController::class, 'viewDetailBlog'])->name('user.detail-blog');
});

Route::prefix('animal_post')->middleware('checklogin')->group(function () {
    Route::get('/list_post_social', [PostController::class, 'listPostSocial'])->name('user.list_post_social');
    Route::post('/get_list_comment', [PostController::class, 'getListComment'])->name('user.get_list_comment');
    Route::post('/create_animal_post', [PostController::class, 'createPost'])->name('user.create_animal_post');
    Route::post('/edit_animal_post', [PostController::class, 'editPost']);
    Route::post('/delete_animal_post', [PostController::class, 'deletePost']);
    Route::post('/create_animal_comment', [PostController::class, 'createComment'])->name('user.create_animal_comment');
    Route::post('/edit_animal_comment', [PostController::class, 'editComment']);
    Route::post('/delete_animal_comment', [PostController::class, 'deleteComment']);
    Route::post('/post_like_or_dislike', [PostController::class, 'likeOrDislike'])->name('user.post_like_or_dislike');
    Route::post('/list_notification', [PostController::class, 'listNotification'])->name('user.list_notification');
    Route::post('/get_number_noti', [PostController::class, 'getNumberNoti'])->name('user.get_number_noti');
    Route::get('/view_list_topic', [PostController::class, 'viewListTopic'])->name('user.view_list_topic');
    Route::get('/play_game/{id}', [PostController::class, 'playGame'])->name('user.play_game');
    Route::post('/check_answer', [PostController::class, 'checkAnswer'])->name('user.check_answer');
    Route::get('/view_get_reward', [PostController::class, 'viewGetReward'])->name('user.view_get_reward');
    Route::get('/history_game', [PostController::class, 'historyGame'])->name('user.history_game');
    Route::get('/get_reward/{id}', [PostController::class, 'getReward'])->name('user.get_reward');
    Route::get('/history_get_reward', [PostController::class, 'historyGetReward'])->name('user.history_get_reward');
    Route::post('/update_user', [PostController::class, 'updateUser'])->name('user.update_user');
});

Route::prefix('admin')->middleware(['checklogin', 'checkrole'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashBoard'])->name('admin.dashboard');
    Route::get('/list_user', [AdminController::class, 'listUser'])->name('admin.list_user');
    Route::post('/search_user', [AdminController::class, 'searchUser'])->name('admin.search_user');
    Route::get('/view_create_user', [AdminController::class, 'viewCreateUser'])->name('admin.view_add_user');
    Route::post('/create-user', [AdminController::class, 'createUser'])->name('admin.create_user');
    Route::get('/view_edit_user/{id}', [AdminController::class, 'viewEditUser'])->name('admin.view_edit_user');
    Route::post('/update_user/{id}', [AdminController::class, 'updateUser'])->name('admin.update_user');
    Route::delete('/delete_user/{id}', [AdminController::class, 'deleteUser'])->name('delete_user');

    // Animal
    Route::get('/list_animal', [AdminController::class, 'listAnimal'])->name('list_animal');
    Route::post('/search_animal', [AdminController::class, 'searchAnimal'])->name('admin.search_animal');
    Route::get('/detail_animal/{id}', [AdminController::class, 'detailAnimal'])->name('detail_animal');
    Route::get('/animals/add', [AdminController::class, 'viewAddAnimal'])->name('admin.add-animal');
    Route::post('/create_animal_detail', [AdminController::class, 'createAnimalDetail'])->name('admin.create-animal');
    Route::get('/animals/edit/{id}', [AdminController::class, 'viewEditAnimal'])->name('admin.edit-animal');
    Route::post('/update_animal_detail/{id}', [AdminController::class, 'updateAnimalDetail'])->name('admin.update-animal');
    Route::delete('/delete_detail_animal/{id}', [AdminController::class, 'deleteAnimalDetail'])->name('admin.delete-animal');
    // Animal Image
    Route::get('/list_animal_image/{id}', [AdminController::class, 'listAnimalImage'])->name('list_animal_image');
    Route::post('/add_image_animal/{id}', [AdminController::class, 'addAnimalImage'])->name('admin.add_image_animal');
    Route::delete('/delete_image_animal/{id}', [AdminController::class, 'deleteImageAnimal'])->name('admin.delete_image_animal');
    //Animal characteristic
    Route::get('/list_animal_area/{id}', [AdminController::class, 'listAnimalArea'])->name('list_animal_area');
    Route::post('/add_area_animal/{id}', [AdminController::class, 'addAreaAnimal'])->name('admin.add_area_animal');
    Route::delete('/delete_area_animal/{id}/{id2}', [AdminController::class, 'deleteAreaAnimal'])->name('admin.delete_area_animal');

    Route::get('/list_animal_climate/{id}', [AdminController::class, 'listAnimalClimate'])->name('list_animal_climate');
    Route::post('/add_climate_animal/{id}', [AdminController::class, 'addClimateAnimal'])->name('admin.add_climate_animal');
    Route::delete('/delete_climate_animal/{id}/{id2}', [AdminController::class, 'deleteClimateAnimal'])->name('admin.delete_climate_animal');

    Route::get('/list_animal_nation/{id}', [AdminController::class, 'listAnimalNation'])->name('list_animal_nation');
    Route::post('/add_nation_animal/{id}', [AdminController::class, 'addNationAnimal'])->name('admin.add_nation_animal');
    Route::delete('/delete_nation_animal/{id}/{id2}', [AdminController::class, 'deleteNationAnimal'])->name('admin.delete_nation_animal');


    Route::get('/list_animal_color/{id}', [AdminController::class, 'listAnimalColor'])->name('list_animal_color');
    Route::post('/add_color_animal/{id}', [AdminController::class, 'addColorAnimal'])->name('admin.add_color_animal');
    Route::delete('/delete_color_animal/{id}/{id2}', [AdminController::class, 'deleteColorAnimal'])->name('admin.delete_color_animal');

    Route::get('/list_animal_biome/{id}', [AdminController::class, 'listAnimalBiome'])->name('list_animal_biome');
    Route::post('/add_biome_animal/{id}', [AdminController::class, 'addBiomeAnimal'])->name('admin.add_biome_animal');
    Route::delete('/delete_biome_animal/{id}/{id2}', [AdminController::class, 'deleteBiomeAnimal'])->name('admin.delete_biome_animal');

    Route::get('/list_animal_ocean/{id}', [AdminController::class, 'listAnimalOcean'])->name('list_animal_ocean');
    Route::post('/add_ocean_animal/{id}', [AdminController::class, 'addOceanAnimal'])->name('admin.add_ocean_animal');
    Route::delete('/delete_ocean_animal/{id}/{id2}', [AdminController::class, 'deleteOceanAnimal'])->name('admin.delete_ocean_animal');


    Route::get('/create_img_animal_detail', [AdminController::class, 'addImgAnimalView'])->name('admin.add-image-animal');
    Route::post('/create_img_animal_detail', [AdminController::class, 'addImgAnimalStore'])->name('admin.add-image-animal-store');
    Route::get('/classification_animal', [AdminController::class, 'classificationView'])->name('admin.classification-animal');
    Route::post('/classification_animal', [AdminController::class, 'classificationStore'])->name('admin.classification-animal-store');

    // List posts
    Route::get('/list_posts', [AdminController::class, 'listPostsView'])->name('admin.list_posts');
    Route::post('/search_posts', [AdminController::class, 'searchPost'])->name('admin.search_posts');
    Route::delete('/delete_posts/{id}', [AdminController::class, 'deletePost'])->name('admin.delete-posts');
    Route::post('/approval_posts/{id}', [AdminController::class, 'approvalPost'])->name('admin.approval-posts');
    // List topics
    Route::get('/list_topic', [AdminController::class, 'listTopicsView'])->name('admin.list_topic');
    Route::get('/view_create_topic', [AdminController::class, 'viewCreateTopic'])->name('admin.view_add_topic');
    Route::post('/create_topic', [AdminController::class, 'createTopic'])->name('admin.create_topic');
    Route::get('/view_edit_topic/{id}', [AdminController::class, 'viewEditTopic'])->name('admin.view_edit_topic');
    Route::post('/update_topic/{id}', [AdminController::class, 'updateTopic'])->name('admin.update_topic');
    //list questions
    Route::get('/list_question/{id}', [AdminController::class, 'listQuestionsView'])->name('admin.list_question');
    Route::post('/create_question/{id}', [AdminController::class, 'createQuestionAnswer'])->name('admin.create_question_answer');
    Route::post('/update_question/{id}', [AdminController::class, 'updateQuestionAnswer'])->name('admin.update_question_answer');
    Route::delete('/delete_question/{id}/{topic_id}', [AdminController::class, 'deleteQuestion'])->name('admin.delete_question');
    //list rewards
    Route::get('/list_reward', [AdminController::class, 'listRewardsView'])->name('admin.list_reward');
    Route::post('/create_reward', [AdminController::class, 'createReward'])->name('admin.create_reward');
    Route::post('/update_reward/{id}', [AdminController::class, 'updateReward'])->name('admin.update_reward');
    Route::delete('/delete_reward/{id}', [AdminController::class, 'deleteReward'])->name('admin.delete_reward');
    Route::get('/get_history_reward', [AdminController::class, 'getHistoryReward'])->name('admin.get_history_reward');
    Route::post('/search_history_reward', [AdminController::class, 'searchHistoryReward'])->name('admin.search_history_reward');

});
