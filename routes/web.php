<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

// Homepage Variations
Route::get('/wind', function () {
    return view('frontend.pages.home-wind');
})->name('home.wind');

Route::get('/renewable', function () {
    return view('frontend.pages.home-renewable');
})->name('home.renewable');

// About
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

// Services
Route::get('/services', function () {
    return view('frontend.pages.services.index');
})->name('services.index');

Route::get('/services/grid', function () {
    return view('frontend.pages.services.grid');
})->name('services.grid');

// Pricing
Route::get('/pricing', function () {
    return view('frontend.pages.pricing');
})->name('pricing');

// FAQ
Route::get('/faq', function () {
    return view('frontend.pages.faq');
})->name('faq');

// Testimonials
Route::get('/testimonials', function () {
    return view('frontend.pages.testimonials');
})->name('testimonials');

// Team
Route::get('/team', function () {
    return view('frontend.pages.team.index');
})->name('team.index');

Route::get('/team/grid-2', function () {
    return view('frontend.pages.team.grid2');
})->name('team.grid2');

Route::get('/team/grid-3', function () {
    return view('frontend.pages.team.grid3');
})->name('team.grid3');

// Projects
Route::get('/projects/2-columns', function () {
    return view('frontend.pages.projects.grid2');
})->name('projects.grid2');

Route::get('/projects/3-columns', function () {
    return view('frontend.pages.projects.grid3');
})->name('projects.grid3');

Route::get('/projects/4-columns', function () {
    return view('frontend.pages.projects.grid4');
})->name('projects.grid4');

// Blog
Route::get('/blog', function () {
    return view('frontend.pages.blog.index');
})->name('blog.index');

Route::get('/blog/grid-2', function () {
    return view('frontend.pages.blog.grid2');
})->name('blog.grid2');

Route::get('/blog/grid-3', function () {
    return view('frontend.pages.blog.grid3');
})->name('blog.grid3');

Route::get('/blog/left-sidebar', function () {
    return view('frontend.pages.blog.left');
})->name('blog.left');

Route::get('/blog/full-width', function () {
    return view('frontend.pages.blog.full');
})->name('blog.full');

Route::get('/blog/right-sidebar', function () {
    return view('frontend.pages.blog.right');
})->name('blog.right');

// Contact
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Route::get('/contact-alt', function () {
    return view('frontend.pages.contact-alt');
})->name('contact.alt');

// Quote
Route::get('/quote', function () {
    return view('frontend.pages.quote');
})->name('quote');

// Search
Route::get('/search', function () {
    return view('frontend.pages.search');
})->name('search');

// Newsletter
Route::post('/newsletter/subscribe', function () {
    return redirect()->back()->with('success', 'Thank you for subscribing!');
})->name('newsletter.subscribe');

// Privacy & Terms
Route::get('/privacy', function () {
    return view('frontend.pages.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('frontend.pages.terms');
})->name('terms');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('admin')->name('admin.')->group(function () {
    // Login routes (guest only)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
    });

    // Logout route (auth only)
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});

/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Pages (Resource Routes)
    Route::resource('pages', PageController::class);

    // Homepage Sections
    Route::get('/homepage-sections', function () {
        return view('admin.homepage-sections.index');
    })->name('homepage-sections.index');

    // Menus
    Route::get('/menus', function () {
        return view('admin.menus.index');
    })->name('menus.index');

    // Sliders
    Route::get('/sliders', function () {
        return view('admin.sliders.index');
    })->name('sliders.index');

    // Product Categories (Resource Routes)
    Route::resource('product-categories', ProductCategoryController::class);

    // Products (Resource Routes)
    Route::resource('products', ProductController::class);

    // Services
    Route::get('/services', function () {
        return view('admin.services.index');
    })->name('services.index');

    // Projects
    Route::get('/projects', function () {
        return view('admin.projects.index');
    })->name('projects.index');

    // Pricing
    Route::get('/pricing', function () {
        return view('admin.pricing.index');
    })->name('pricing.index');

    // Blog
    Route::get('/blog', function () {
        return view('admin.blog.index');
    })->name('blog.index');

    // Team
    Route::get('/team', function () {
        return view('admin.team.index');
    })->name('team.index');

    // Testimonials
    Route::get('/testimonials', function () {
        return view('admin.testimonials.index');
    })->name('testimonials.index');

    // Partners
    Route::get('/partners', function () {
        return view('admin.partners.index');
    })->name('partners.index');

    // FAQs
    Route::get('/faqs', function () {
        return view('admin.faqs.index');
    })->name('faqs.index');

    // Contacts
    Route::get('/contacts', function () {
        return view('admin.contacts.index');
    })->name('contacts.index');

    // Quotes
    Route::get('/quotes', function () {
        return view('admin.quotes.index');
    })->name('quotes.index');

    // Newsletter
    Route::get('/newsletter', function () {
        return view('admin.newsletter.index');
    })->name('newsletter.index');

    // Media
    Route::get('/media', function () {
        return view('admin.media.index');
    })->name('media.index');

    // Settings
    Route::get('/settings/general', function () {
        return view('admin.settings.general');
    })->name('settings.general');

    Route::get('/settings/seo', function () {
        return view('admin.settings.seo');
    })->name('settings.seo');

    // Users Management (Resource Routes)
    Route::resource('users', UserController::class);

    // Roles Management (Resource Routes)
    Route::resource('roles', RoleController::class);

    // Profile
    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');
});
