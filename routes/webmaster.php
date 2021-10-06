<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Webmaster\Faq\FaqController;
use App\Http\Controllers\Webmaster\Tag\TagController;
use App\Http\Controllers\Webmaster\City\CityController;
use App\Http\Controllers\Webmaster\Role\RoleController;
use App\Http\Controllers\Webmaster\User\UserController;
use App\Http\Controllers\Webmaster\WebmasterController;
use App\Http\Controllers\Webmaster\Backup\BackupController;
use App\Http\Controllers\Webmaster\Ticket\TicketController;
use App\Http\Controllers\Webmaster\Article\ArticleController;
use App\Http\Controllers\Webmaster\Comment\CommentController;
use App\Http\Controllers\Webmaster\Contact\ContactController;
use App\Http\Controllers\Webmaster\Country\CountryController;
use App\Http\Controllers\Webmaster\Payment\PaymentController;
use App\Http\Controllers\Webmaster\Category\CategoryController;
use App\Http\Controllers\Webmaster\Discount\DiscountController;
use App\Http\Controllers\Webmaster\Province\ProvinceController;
use App\Http\Controllers\Webmaster\Publisher\PublisherController;
use App\Http\Controllers\Webmaster\Permission\PermissionController;
use App\Http\Controllers\Webmaster\Statistics\StatisticsController;
use App\Http\Controllers\Webmaster\Contact\ContactSubjectController;
use App\Http\Controllers\Webmaster\Newsletters\NewslettersController;
use App\Http\Controllers\Webmaster\Newsletters\NewsletterSubscribersController;


Route::group(['prefix' => 'webmaster', 'as' => 'webmaster.', 'middleware' => ['web']], function () {
    Route::get('', [WebmasterController::class, 'index'])->name('index');
    Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics');
    Route::get('/users/account/setting', [UserController::class, 'setting'])->name('users.setting');


    Route::resources([
        'users' =>  UserController::class,
        'tags' => TagController::class,
        'categories' => CategoryController::class,
        'publishers' => PublisherController::class,
        'articles' => ArticleController::class,
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'discounts' => DiscountController::class,
        'newsletters' => NewslettersController::class,
        'newsletter-subscribers' =>  NewsletterSubscribersController::class,
        'payments' => PaymentController::class,
        'faqs' => FaqController::class,
        'countries' => CountryController::class,
        'provinces' => ProvinceController::class,
        'cities' => CityController::class,
        'contacts' => ContactController::class,
        'contact-subjects' => ContactSubjectController::class,
    ]);

    Route::group([], function () {
        Route::post('comments/{comment}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
        Route::resource('comments', CommentController::class);
    });

    Route::group([], function () {
        Route::post('tickets/{ticket}/done', [TicketController::class, 'approve'])->name('admin.tickets.approve');
        Route::resource('tickets', TicketController::class);
    });

    Route::group([], function () {
        Route::get('/backups', [BackupController::class, 'index'])->name('backups');
        Route::post('/backups', [BackupController::class, 'store'])->name('backups.store');
        Route::get('/backups/create', [BackupController::class, 'create'])->name('backups.create');
    });
});
