<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\BotManChatController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QatariLawsController;
use App\Http\Controllers\JudicialSystemsController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PublicArticleController;
use App\Http\Controllers\PublicPublicationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('language', [LangController::class, 'change'])->name('changeLang');
Route::get('language/{locale}', function ($locale) {
    if (array_key_exists($locale, config('languages'))) {
        app()->setLocale($locale);
        session()->put('locale', $locale);
    }
    return redirect()->back();
});

Route::view('/about-us', 'aboutus');
Route::view('/careers', 'careers');
Route::get('/careers', [VacancyController::class, 'show'])->name('admin.vacancies.show');
Route::view('/contact-us', 'schedule-consultation');
Route::view('/add-off-date', 'offDate');

Route::view('/our-team', 'our-team');
Route::view('/our-team/ms-mashael-mohammad-alsulaiti', 'our-team-members.ms-mashael-mohammad-alsulaiti');
Route::view('/our-team/mr-monir-abdulAziz-shalaby', 'our-team-members.mr-monir-abdulAziz-shalaby');
Route::view('/our-team/mr-yasser-assed-yousef-mohammad', 'our-team-members.mr-yasser-assed-yousef-yohammad');
Route::view('/our-team/mr-abdelRaouf-mohd-gharibeh', 'our-team-members.mr-abdelRaouf-mohd-gharibeh');
Route::view('/our-team/mr-mohamed-ibrahim', 'our-team-members.mr-mohamed-ibrahim');
Route::view('/our-team/ms-soha-dammak', 'our-team-members.ms-soha-dammak');
Route::view('/our-team/mr-sherif-abdel-galil-neam', 'our-team-members.mr-sherif-abdel-galil-neam');
Route::view('/our-team/mr-emil-sebastian', 'our-team-members.mr-emil-sebastian');






Route::view('/practice-areas', 'practice-areas');
Route::get('/news-and-articles', [InsightsController::class, 'latestNews'])->name('news-and-articles.latestNews');
Route::get('/events', [InsightsController::class, 'latestEvent'])->name('events.latestEvent');
// Route::get('/articles', [PublicArticleController::class, 'index'])->name('articles.index');
Route::get('/articles', [PublicArticleController::class, 'index'])->name('articles.index');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/articles/{slug}', [\App\Http\Controllers\PublicArticleController::class, 'show'])->name('articles.show');
Route::get('/publications', [PublicPublicationController::class, 'index'])->name('publications.index');
Route::get('/publications/{slug}', [\App\Http\Controllers\PublicPublicationController::class, 'show'])->name('publications.show');
Route::view('/our-strategy', 'our-strategies');

// ============== practice areas routes =================
Route::view('/practice-areas/banking-and-finance', 'expertises-Individual-pages.banking-and-finance');
Route::view('/practice-areas/construction-and-real-estate', 'expertises-Individual-pages.construction-and-real-estate');
Route::view('/practice-areas/corporate-and-commercial', 'expertises-Individual-pages.corporate-and-commercial');
Route::view('/practice-areas/criminal', 'expertises-Individual-pages.criminal');
Route::view('/practice-areas/dispute-resolution-and-litigation', 'expertises-Individual-pages.dispute-resolution-and-litigation');
Route::view('/practice-areas/education', 'expertises-Individual-pages.education');
Route::view('/practice-areas/employment-and-labor', 'expertises-Individual-pages.employment-and-labor');
Route::view('/practice-areas/energy-and-natural-resources', 'expertises-Individual-pages.energy-and-natural-resources');
Route::view('/practice-areas/environment', 'expertises-Individual-pages.environment');
Route::view('/practice-areas/family', 'expertises-Individual-pages.family');
Route::view('/practice-areas/government-and-public-sector', 'expertises-Individual-pages.government-and-public-sector');
Route::view('/practice-areas/healthcare-and-pharmaceuticals', 'expertises-Individual-pages.healthcare-and-pharmaceuticals');
Route::view('/practice-areas/intellectual-property', 'expertises-Individual-pages.intellectual-property');
Route::view('/practice-areas/international-trade-and-customs', 'expertises-Individual-pages.international-trade-and-customs');
Route::view('/practice-areas/investment', 'expertises-Individual-pages.investment');
Route::view('/practice-areas/maritime-and-aviation', 'expertises-Individual-pages.maritime-and-aviation');
Route::view('/practice-areas/regulatory-and-compliance', 'expertises-Individual-pages.regulatory-and-compliance');
Route::view('/practice-areas/sports-and-entertainment', 'expertises-Individual-pages.sports-and-entertainment');
Route::view('/practice-areas/technology-and-innovation', 'expertises-Individual-pages.technology-and-innovation');
Route::view('/practice-areas/tourism', 'expertises-Individual-pages.tourism');
// ============== practice areas routes =================


Route::get('/news', [NewsController::class, 'publicNews']);
Route::get('/news/{slug}', [NewsController::class, 'publicNewsDetails']);
Route::get('/qatari-laws', [QatariLawsController::class, 'publicQatariLaws']);
Route::get('/qatari-law/{slug}', [QatariLawsController::class, 'publicQatariLawDetails']);
Route::get('/judicial-systems', [JudicialSystemsController::class, 'publicJudicialsystems']);
Route::get('/judicial-system/{slug}', [JudicialSystemsController::class, 'publicJudicialsystemDetails']);

// Route::get('contact-us', [ContactController::class, 'index']);
// Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe.store');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin',]], function () {
        Route::resource('/manage/users', UserController::class, ['names' => 'admin.users']);
        Route::put('/users/{id}/update-password', [UserController::class, 'updatePassword'])->name('admin.users.update-password');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => ['role:admin|publisher',]], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/manage/article-categories', ArticleCategoryController::class, ['names' => 'admin.article-categories']);
        Route::resource('/manage/articles', ArticleController::class, ['names' => 'admin.articles']);
        Route::resource('/manage/publications', PublicationController::class, ['names' => 'admin.publications']);
        Route::resource('/manage/news', NewsController::class, ['names' => 'admin.news']);
        Route::resource('/manage/qatari-laws', QatariLawsController::class, ['names' => 'admin.qatari-laws']);
        Route::resource('/manage/judicial-systems', JudicialSystemsController::class, ['names' => 'admin.judicial-systems']);
        Route::resource('/manage/vacancies', VacancyController::class, ['names' => 'admin.vacancies']);
        Route::get('/manage/subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');
        Route::delete('/subscribers/{id}', [SubscriberController::class, 'unSubscribe'])->name('subscribers.unSubscribe');
    });
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::match(['get', 'post'], '/botman', [BotManChatController::class, 'invoke']);
