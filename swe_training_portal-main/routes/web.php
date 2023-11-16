<?php

use Illuminate\Support\Facades\Route;

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

////Routes for English FrontEnd







Route::get('/home_en', \App\Http\Livewire\Index::class);
Route::get('/about-us', \App\Http\Livewire\AboutUs::class);
Route::get('/documents', \App\Http\Livewire\Doc::class);
Route::get('/notices', \App\Http\Livewire\Notice::class);
Route::get('/upcoming-news', \App\Http\Livewire\News::class);
Route::get('/awards', \App\Http\Livewire\Awards::class);
Route::get('/upcoming_trainings', \App\Http\Livewire\Uptraining::class);
Route::get('/trainings', \App\Http\Livewire\Traininglist::class);
Route::get('/training_category/{category_id}','App\Http\Controllers\TrainingController@searchTraining');
Route::get('/training_details/{id}','App\Http\Controllers\TrainingController@searchdetails');
Route::get('/district_training/{id}','App\Http\Controllers\TrainingController@districttraining');
Route::post('/find_training','App\Http\Controllers\TrainingController@searchcategory');
Route::get('/award/{id}','App\Http\Controllers\TrainingController@award');
Route::get('/news/{id}','App\Http\Controllers\TrainingController@news');
Route::get('/gallery', \App\Http\Livewire\Gallery::class);
Route::get('/faq', \App\Http\Livewire\Faq::class);
Route::get('/contact-us', \App\Http\Livewire\Contact::class);
Route::get('/ambassador_list_en', \App\Http\Livewire\Listambassador::class);
Route::get('/district-ambassadors', \App\Http\Livewire\Listambassador::class);
Route::get('/video_gallery', \App\Http\Livewire\Videogaller::class);
Route::get('/our_friends', \App\Http\Livewire\Frien::class);
Route::get('/activities{id}','App\Http\Controllers\SectorController@index');
Route::get('/content/{id}','App\Http\Controllers\TrainingController@content');
Route::get('/content_bangla/{id}','App\Http\Controllers\TrainingController@contentbangla');
Route::Resource('/contact_us','App\Http\Controllers\ContactController');

///end of english


Route::get('/activities_bangla','App\Http\Controllers\SectorBanglaController@index');
Route::resource('/','App\Http\Controllers\IndexController');
Route::Resource('about_us','App\Http\Controllers\AboutController');
Route::Resource('notice_bn','App\Http\Controllers\NoticeBanglaController');
Route::Resource('document_bn','App\Http\Controllers\DocumentBanglaController');
Route::Resource('trainiglist_bn','App\Http\Controllers\TrainingBanglaController');
Route::Resource('gallery_bn','App\Http\Controllers\PhotoGalleryBanglaController');
Route::Resource('video_gallery_bn','App\Http\Controllers\VideoBanglaController');
Route::Resource('contact_us_bn','App\Http\Controllers\ContactBanglaController');
Route::get('/training_bangla/{id}','App\Http\Controllers\TrainingController@search');
Route::get('/award_bangla/{id}','App\Http\Controllers\TrainingController@award_bangla');
Route::get('/news_bangla/{id}','App\Http\Controllers\TrainingController@news_bangla');
Route::Resource('/awards_bangla','App\Http\Controllers\AwardBanglaController');
Route::Resource('/news_bangla','App\Http\Controllers\NewsBanglaController');
Route::Resource('upcoming_training_bn','App\Http\Controllers\UpTranController');
Route::Resource('/registration','App\Http\Controllers\ApplyController');
Route::Resource('/registration_bn','App\Http\Controllers\RegistrationController');
Route::Resource('/ambassadors_of_districts','App\Http\Controllers\AmbassadorController');





/*   start Bangla  */
///Route::get('/','App\Http\Controllers\WebBangla\HomeController@index');
/*   end Bangla  */
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

///Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'super_admin']], function() {


    Route::Resource('home','App\Http\Controllers\super_admin\SuperAdminController');
    Route::Resource('upcoming_training','App\Http\Controllers\super_admin\UpcomingTrainingController');
    Route::Resource('upcoming_training_list','App\Http\Controllers\super_admin\UpcomingTrainingListController');
    Route::Resource('content','App\Http\Controllers\super_admin\StoreController');
    Route::Resource('content_list','App\Http\Controllers\super_admin\StoreListController');
   
    Route::Resource('banner','App\Http\Controllers\super_admin\BannerController');
    Route::Resource('banner_list','App\Http\Controllers\super_admin\BannerListController');
    Route::Resource('menu','App\Http\Controllers\super_admin\MenuController');
    Route::Resource('menu_list','App\Http\Controllers\super_admin\MenuListController');
    Route::Resource('sub_menu','App\Http\Controllers\super_admin\SubMenuController');
    Route::Resource('submenu_list','App\Http\Controllers\super_admin\SubMenuListController');
    Route::Resource('notice','App\Http\Controllers\super_admin\NoticeController');
    Route::Resource('notice_list','App\Http\Controllers\super_admin\NoticeListController');
    Route::Resource('document','App\Http\Controllers\super_admin\DocumentController');
    Route::Resource('document_list','App\Http\Controllers\super_admin\DocumentListController');
    Route::Resource('district','App\Http\Controllers\super_admin\DistrictController');
    Route::Resource('district_list','App\Http\Controllers\super_admin\DistrictListController');
    Route::Resource('photo','App\Http\Controllers\super_admin\PhotoGalleryController');
    Route::Resource('photo_list','App\Http\Controllers\super_admin\PhotoGalleryListController');
    Route::Resource('video','App\Http\Controllers\super_admin\VideoController');
    Route::Resource('video_list','App\Http\Controllers\super_admin\VideoListController');

    Route::Resource('ambassador','App\Http\Controllers\super_admin\AmbassadorController');
    Route::Resource('ambassador_list','App\Http\Controllers\super_admin\AmbassadorListController');
    Route::Resource('district_ambassador','App\Http\Controllers\super_admin\AmbassadorDistrictController');
    Route::get('/ambassador_district/{id}','App\Http\Controllers\super_admin\SearchController@index');
    
    Route::Resource('/change_password','App\Http\Controllers\super_admin\ChangePasswordController');
    Route::Resource('/profile','App\Http\Controllers\super_admin\ProfileController');
    Route::Resource('/admin_dashboard','App\Http\Controllers\super_admin\SuperAdminController');
    Route::Resource('pending_appplicants','App\Http\Controllers\super_admin\PendingApplicantController');
    Route::get('/approve/{id}','App\Http\Controllers\super_admin\SearchController@accept');
    Route::Resource('/sector','App\Http\Controllers\super_admin\SectorController');
    Route::Resource('/sector_list','App\Http\Controllers\super_admin\SectorListController');
    Route::Resource('/speech','App\Http\Controllers\super_admin\SpeechController');
    Route::Resource('/speech_list','App\Http\Controllers\super_admin\SpeechListController');
    Route::Resource('/student_list','App\Http\Controllers\super_admin\StudentListController');
    Route::get('/student/{id}','App\Http\Controllers\super_admin\SearchController@student');
    Route::get('/reject/{id}','App\Http\Controllers\super_admin\SearchController@reject');
    Route::Resource('/student_questions','App\Http\Controllers\super_admin\AnswerListController');
    Route::Resource('/question_answer','App\Http\Controllers\super_admin\AnswerController');
    Route::Resource('/add_admin','App\Http\Controllers\super_admin\AdminController');
    Route::Resource('/admin_list','App\Http\Controllers\super_admin\AdminListController');
    Route::Resource('/data_search','App\Http\Controllers\super_admin\DataController');
    Route::Resource('/friend','App\Http\Controllers\super_admin\FriendController');
    Route::Resource('/friend_list','App\Http\Controllers\super_admin\FriendListController');
    
 });


 Route::group(['middleware' => ['auth', 'bay']], function() {

    /// Route::Resource('super-admin','SuperAdmin');
    Route::Resource('user_dashboard','App\Http\Controllers\client\DashboardController');

    Route::Resource('question','App\Http\Controllers\client\QuestionController');

    Route::Resource('question_list','App\Http\Controllers\client\QuestionListController');

    Route::Resource('baybd_dashboard','App\Http\Controllers\baybd\BayBDController');

    Route::Resource('/password_reset','App\Http\Controllers\client\ChangePasswordController');

    Route::Resource('/user_profile','App\Http\Controllers\client\ProfileController');

    Route::Resource('training','App\Http\Controllers\super_admin\TrainingController');
    
    Route::Resource('training_list','App\Http\Controllers\super_admin\TrainingListController');
   
    Route::Resource('create_special_training','App\Http\Controllers\super_admin\SpecialController');

    Route::Resource('special_training_list','App\Http\Controllers\super_admin\SpecialListController');


  });

  




  

  ?>