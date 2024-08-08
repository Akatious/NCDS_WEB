<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\cdsvisitController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\ersafricaController;
use App\Http\Controllers\ersghanaController;
use App\Http\Controllers\erstafricaController;
use App\Http\Controllers\erstghanaController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CommandantController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\Participant;
use App\Models\Staff;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $staffs = Staff::all();
    $participant = Participant::all();
    return view('website.layouts.index', compact('staffs', 'participant'));
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.layouts.index');
})->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('backend.layouts.index');
// })->middleware(['auth:sanctum'])->name('dashboard');

Route::get('/courses', function () {
    return view('website.layouts.courses');
})->name('Courses');

Route::get('/contact', function () {
    return view('website.layouts.contact');
})->name('contact');

Route::get('/articles', function () {
    return view('website.layouts.articles');
})->name('articles');

Route::get('/article-details/{uuid}', function ($uuid) {
    $article_details = Article::where('uuid', $uuid)->firstOrFail();
    return view('website.layouts.articledetails', compact('article_details'));
})->name('article-detail');

Route::get('/article/{uuid}', function ($uuid) {
    $article = Article::where('uuid', $uuid)->firstOrFail();
    return view('website.layouts.articles', compact('article'));
})->name('article');

Route::get('/matriculation', function () {
    return view('website.layouts.matriculation');
})->name('matriculation');

Route::get('/join', function () {
    return view('website.layouts.join');
})->name('join');

Route::get('/admission', function () {
    return view('website.layouts.admission');
})->name('admission');

Route::get('/participant', function () {
    $participant = Participant::all();
    return view('website.layouts.participant', compact('participant'));
})->name('participant');

Route::get('/gallery', function () {
    return view('website.layouts.gallery');
})->name('gallery');

Route::get('/detail-staff', function () {
    $staffs = Staff::all();
    return view('website.layouts.detail_staff', compact('staffs'));
})->name('detail_staff');

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');

});

Route::prefix('commandant')->group(function () {
    Route::get('/', [CommandantController::class, 'index'])->name('commandant');
});

 Route::prefix('cdsvisit')->group(function (){
        Route::get('/cdsvisit', [cdsvisitController::class, 'cdsvisit'])->name('cdsvisit');
});

Route::prefix('erstghana')->group(function (){
        Route::get('/erstghana', [erstghanaController::class, 'erstghana'])->name('erstghana');
});

Route::prefix('erstghana')->group(function (){
        Route::get('/erstafrica', [erstafricaController::class, 'erstafrica'])->name('erstafrica');
});


Route::post('login', [LogsController::class, 'Log_in'])->name('log-in');
Route::get('logout', [LogsController::class, 'Logout'])->name('logout')->middleware('auth');
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'settings'], function () {
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'ProfileView'])->name('profileview');
            Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
            Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
            Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
            Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
            Route::get('/inactivation{id}', [ProfileController::class, 'Inactive'])->name('user.inactive');
            Route::get('/activation{id}', [ProfileController::class, 'Active'])->name('user.active');
        });
    });
    Route::prefix('rank')->group(function () {
        Route::get('/', [RankController::class, 'View'])->name('view-rank');
        Route::get('/mech', [RankController::class, 'RankAdd'])->name('rank-add');
        Route::post('/store', [RankController::class, 'Store'])->name('rank-store');
        Route::get('/edit/{uuid}', [RankController::class, 'Edit'])->name('rank-edit');
        Route::post('/update{uuid}', [RankController::class, 'Update'])->name('rank-update');
        Route::get('/delete{uuid}', [RankController::class, 'Delete'])->name('rank-delete');
    });
    Route::prefix('appointment')->group(function () {
        Route::get('/', [AppointmentController::class, 'View'])->name('view-appointment');
        Route::get('/mech', [AppointmentController::class, 'Add'])->name('appointment-add');
        Route::post('/store', [AppointmentController::class, 'Store'])->name('appointment-store');
        Route::get('/edit/{uuid}', [AppointmentController::class, 'Edit'])->name('appointment-edit');
        Route::post('/update{uuid}', [AppointmentController::class, 'Update'])->name('appointment-update');
        Route::get('/delete{uuid}', [AppointmentController::class, 'Delete'])->name('appointment-delete');
    });
    Route::prefix('participants')->group(function () {
        Route::get('/', [ParticipantController::class, 'View'])->name('view-participant');
        Route::get('/mech', [ParticipantController::class, 'Add'])->name('participant-add');
        Route::post('/store', [ParticipantController::class, 'Store'])->name('participant-store');
        Route::get('/edit/{uuid}', [ParticipantController::class, 'Edit'])->name('participant-edit');
        Route::post('/update', [ParticipantController::class, 'Update'])->name('participant-update');
        Route::get('/delete/{uuid}', [ParticipantController::class, 'Delete'])->name('participant-delete');
    });
    Route::prefix('staffs')->group(function () {
        Route::get('/', [StaffController::class, 'View'])->name('view-staff');
        Route::get('/mech', [StaffController::class, 'Add'])->name('staff-add');
        Route::post('/store', [StaffController::class, 'Store'])->name('staff-store');
        Route::get('/edit/{uuid}', [StaffController::class, 'Edit'])->name('staff-edit');
        Route::post('/update', [StaffController::class, 'Update'])->name('staff-update');
        Route::get('/delete/{uuid}', [StaffController::class, 'Delete'])->name('staff-delete');
    });
    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'View'])->name('view-news');
        Route::get('/mech', [NewsController::class, 'Add'])->name('news-add');
        Route::post('/store', [NewsController::class, 'Store'])->name('news-store');
        Route::get('/edit/{uuid}', [NewsController::class, 'Edit'])->name('news-edit');
        Route::post('/update', [NewsController::class, 'Update'])->name('news-update');
        Route::get('/delete/{uuid}', [NewsController::class, 'Delete'])->name('news-delete');
    });
    Route::prefix('events')->group(function () {
        Route::get('/', [EventsController::class, 'View'])->name('view-events');
        Route::get('/mech', [EventsController::class, 'Add'])->name('events-add');
        Route::post('/store', [EventsController::class, 'Store'])->name('events-store');
        Route::get('/edit/{uuid}', [EventsController::class, 'Edit'])->name('events-edit');
        Route::post('/update', [EventsController::class, 'Update'])->name('events-update');
        Route::get('/delete/{uuid}', [EventsController::class, 'Delete'])->name('events-delete');
    });
    Route::prefix('article')->group(function () {
        Route::get('/', [ArticleController::class, 'View'])->name('view-article');
        Route::get('/mech', [ArticleController::class, 'Add'])->name('article-add');
        Route::post('/store', [ArticleController::class, 'Store'])->name('article-store');
        Route::get('/edit/{uuid}', [ArticleController::class, 'Edit'])->name('article-edit');
        Route::post('/update', [ArticleController::class, 'Update'])->name('article-update');
        Route::get('/delete/{uuid}', [ArticleController::class, 'Delete'])->name('article-delete');
    });
    Route::prefix('gallery')->group(function () {
        Route::get('/', [GalleryController::class, 'View'])->name('view-gallery');
        Route::get('/mech', [GalleryController::class, 'Add'])->name('gallery-add');
        Route::get('/view', [GalleryController::class, 'view_gallery'])->name('gallery-view');
        Route::post('/store', [GalleryController::class, 'Store'])->name('gallery-store');
        Route::get('/delete/{uuid}', [GalleryController::class, 'Delete'])->name('gallery-delete');
    });

    Route::prefix('banner')->group(function () {
        Route::get('/', [BannerController::class, 'View'])->name('view-banner');
        Route::get('/mech', [BannerController::class, 'Add'])->name('banner-add');
        Route::get('/view', [BannerController::class, 'view_banner'])->name('banner-view');
        Route::post('/store', [BannerController::class, 'Store'])->name('banner-store');
        Route::get('/delete/{uuid}', [BannerController::class, 'Delete'])->name('banner-delete');
    });
    Route::prefix('commandant')->group(function () {
        Route::get('/', [CommandController::class, 'View'])->name('view-commandants');
        Route::get('/mech', [CommandController::class, 'Add'])->name('commandants-add');
        Route::post('/store', [CommandController::class, 'Store'])->name('commandants-store');
        Route::get('/edit/{uuid}', [CommandController::class, 'Edit'])->name('commandants-edit');
        Route::post('/update', [CommandController::class, 'Update'])->name('commandants-update');
        Route::get('/delete/{uuid}', [CommandController::class, 'Delete'])->name('commandants-delete');
    });
});