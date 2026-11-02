<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\SearchController;

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

// Products
Route::get('/products', [FrontendProductController::class, 'index'])->name('products.index');
Route::get('/products/category/{slug}', [FrontendProductController::class, 'category'])->name('products.category');
Route::get('/products/{slug}', [FrontendProductController::class, 'show'])->name('products.show');

// Services
Route::get('/services', [FrontendServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [FrontendServiceController::class, 'show'])->name('services.show');

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
Route::get('/blog', [FrontendBlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{slug}', [FrontendBlogController::class, 'category'])->name('blog.category');
Route::get('/blog/tag/{slug}', [FrontendBlogController::class, 'tag'])->name('blog.tag');
Route::get('/blog/{slug}', [FrontendBlogController::class, 'show'])->name('blog.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact-alt', function () {
    return view('frontend.pages.contact-alt');
})->name('contact.alt');

// Quote
Route::get('/quote', [ContactController::class, 'quote'])->name('quote');
Route::post('/quote', [ContactController::class, 'storeQuote'])->name('quote.store');

// Search
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Newsletter
Route::post('/newsletter/subscribe', [ContactController::class, 'subscribe'])->name('newsletter.subscribe');

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
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\SliderController;

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

    // Sliders (Resource Routes)
    Route::resource('sliders', SliderController::class);

    // Product Categories (Resource Routes)
    Route::resource('product-categories', ProductCategoryController::class);

    // Products (Resource Routes)
    Route::resource('products', ProductController::class);

    // Service Categories (Resource Routes)
    Route::resource('service-categories', ServiceCategoryController::class)->except(['show', 'create']);

    // Services (Resource Routes)
    Route::resource('services', ServiceController::class);

    // Projects
    Route::get('/projects', function () {
        return view('admin.projects.index');
    })->name('projects.index');

    // Pricing
    Route::get('/pricing', function () {
        return view('admin.pricing.index');
    })->name('pricing.index');

    // Blog Categories (Inline Routes)
    Route::get('/blog-categories', [BlogCategoryController::class, 'index'])->name('blog-categories.index');
    Route::post('/blog-categories', [BlogCategoryController::class, 'store'])->name('blog-categories.store');
    Route::put('/blog-categories/{blogCategory}', [BlogCategoryController::class, 'update'])->name('blog-categories.update');
    Route::delete('/blog-categories/{blogCategory}', [BlogCategoryController::class, 'destroy'])->name('blog-categories.destroy');

    // Blog Posts (Resource Routes)
    Route::resource('blog-posts', BlogPostController::class);

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

// Dynamic Pages (must be last so it does not capture /admin and other defined routes)
Route::get('/{slug}', [FrontendPageController::class, 'show'])->name('pages.show');
