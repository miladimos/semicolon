<?php


use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'webmaster', 'as' =>'webmaster.'], function () {
    Route::get('', [\App\Http\Controllers\Webmaster\WebmasterController::class, 'index'])->name('admin.index');
    Route::get('/statistics', [\App\Http\Controllers\Webmaster\Statistics\StatisticsController::class, 'index'])->name('statistics');
    Route::get('/users/account/setting', [\App\Http\Controllers\Webmaster\User\UserController::class, 'setting'])->name('users.setting');

    Route::resources([
        'users' =>  \App\Http\Controllers\Webmaster\User\UserController::class,
        'tags' => \App\Http\Controllers\Webmaster\Tag\TagController::class,
        'categories' => \App\Http\Controllers\Webmaster\Category\CategoryController::class,
        'books' => \App\Http\Controllers\Webmaster\Book\BookController::class,
        'publishers' => \App\Http\Controllers\Webmaster\Publisher\PublisherController::class,
        'podcasts' => \App\Http\Controllers\Webmaster\Podcast\PodcastController::class,
        'articles' => \App\Http\Controllers\Webmaster\Article\ArticleController::class,
        'chapters' => \App\Http\Controllers\Webmaster\Chapter\ChapterController::class,
        'courses' => \App\Http\Controllers\Webmaster\Course\CourseController::class,
        'course-types' => \App\Http\Controllers\Webmaster\Course\CourseTypeController::class,
        'course-levels' => \App\Http\Controllers\Webmaster\Course\CourseLevelController::class,
        'course-statuses' => \App\Http\Controllers\Webmaster\Course\CourseStatusController::class,
        'episodes' => \App\Http\Controllers\Webmaster\Episode\EpisodeController::class,
        'roles' => \App\Http\Controllers\Webmaster\Role\RoleController::class,
        'permissions' => \App\Http\Controllers\Webmaster\Permission\PermissionController::class,
        'todos' => \App\Http\Controllers\Webmaster\Todo\TodoController::class,
        'discounts' => \App\Http\Controllers\Webmaster\Discount\DiscountController::class,
        'newsletters' => \App\Http\Controllers\Webmaster\Newsletters\NewslettersController::class,
        'newsletter-subscribers' => \App\Http\Controllers\Webmaster\Newsletters\NewsletterSubscribersController::class,
        'payments' => \App\Http\Controllers\Webmaster\Payment\PaymentController::class,
        'faqs' => \App\Http\Controllers\Webmaster\Faq\FaqController::class,
        'countries' => \App\Http\Controllers\Webmaster\Country\CountryController::class,
        'provinces' => \App\Http\Controllers\Webmaster\Province\ProvinceController::class,
        'cities' => \App\Http\Controllers\Webmaster\City\CityController::class,
        'contacts' => \App\Http\Controllers\Webmaster\Contact\ContactController::class,
        'contact-subjects' => \App\Http\Controllers\Webmaster\Contact\ContactSubjectController::class,
    ]);

    Route::group([], function () {
        Route::post('comments/{comment}/approve', [\App\Http\Controllers\Webmaster\Comment\CommentController::class, 'approve'])->name('admin.comments.approve');
        Route::resource('comments', \App\Http\Controllers\Webmaster\Comment\CommentController::class);
    });

    Route::group([], function () {
        Route::post('tickets/{ticket}/done', [\App\Http\Controllers\Webmaster\Ticket\TicketController::class, 'approve'])->name('admin.tickets.approve');
        Route::resource('tickets', \App\Http\Controllers\Webmaster\Ticket\TicketController::class);
    });

    Route::group([], function () {
        Route::get('/backups', [\App\Http\Controllers\Webmaster\Backup\BackupController::class, 'index'])->name('backups');
        Route::post('/backups', [\App\Http\Controllers\Webmaster\Backup\BackupController::class, 'store'])->name('backups.store');
        Route::get('/backups/create', [\App\Http\Controllers\Webmaster\Backup\BackupController::class, 'create'])->name('backups.create');
    });

    // Route::resource('books', 'BookController')->only([
    //     'index', 'show'
    // ]);

    // Route::resource('books', 'BookController')->except([
    //     'create', 'store', 'update', 'destroy'
    // ]);

});
