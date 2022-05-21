<?php

Route::get('/clear', function () {
    \Artisan::call('view:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('debugbar:clear');
    \Artisan::call('optimize:clear');
    \Artisan::call('clear-compiled');
    \Artisan::call('key:generate');
    return true;
});

Route::group(['as' => 'client.', 'middleware' => ['auth'], 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('home', 'HomeController@redirect');
    Route::get('dashboard2', 'HomeController@index')->name('home');
    Route::get('change-password', 'ChangePasswordController@create')->name('password.create');
    Route::post('change-password', 'ChangePasswordController@update')->name('password.update');
});
Route::get('/', App\Http\Livewire\Frontend\Welcome::class)->name('frontend.welcome');

Route::get('/listing/{slug?}', App\Http\Livewire\Frontend\Book\Listing::class)
            ->name('book.listing');
Route::get('/new-arrivals', App\Http\Livewire\Frontend\Book\Listing::class)
                ->name('book.new-arrival');
Route::get('/collections', App\Http\Livewire\Frontend\Collections\Index::class)
    ->name('collections');
Route::get('/book/{slug}', App\Http\Livewire\Frontend\Book\Detail::class)->name('book_detail');
Route::get('/about', App\Http\Livewire\Frontend\AboutUs::class)
                ->name('about-us');
Route::get('/contact', App\Http\Livewire\Frontend\Contact::class)
    ->name('contact');

Route::get('/register1', App\Http\Livewire\Frontend\Register::class)
        ->name('register1');
Route::get('/login1', App\Http\Livewire\Frontend\Login::class)->name('login1');
Route::get('/forgot-password', App\Http\Livewire\Frontend\ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password', App\Http\Livewire\Frontend\ResetPassword::class)->name('reset-password');

   
    Route::get('/privacy-policy', App\Http\Livewire\Frontend\Legal\PrivacyPolicy::class)->name('privacy-policy');
    Route::get('/terms-and-condition', App\Http\Livewire\Frontend\Legal\Terms::class)->name('toc');
    Route::get('/terms', App\Http\Livewire\Frontend\Legal\Terms::class)->name('toc');
    Route::get('/user-guidelines', App\Http\Livewire\Frontend\Legal\UserGuidelines::class)->name('user-guidelines');
    Route::get('/return-policy', App\Http\Livewire\Frontend\Legal\RefundPolicies::class)->name('refund-policies');
    Route::get('/gdpr', App\Http\Livewire\Frontend\Legal\Gdpr::class)->name('gdpr');
    Route::get('/cookies-policies', App\Http\Livewire\Frontend\Legal\CookiesPolicies::class)->name('cookies-policies');

    Route::get('/shipping-policy', App\Http\Livewire\Frontend\Legal\ShippingPolicy::class)->name('shippingPolcy');


Route::get('/cart', App\Http\Livewire\Frontend\User\Cart::class)->name('cart');
Route::get('/checkout', App\Http\Livewire\Frontend\User\Checkout::class)->name('checkout')->middleware('auth');

Route::get('/invoice/{id}', App\Http\Livewire\Frontend\User\Invoice::class)->name('invoice'); //need to work

Route::get('/invoice1/{id}', [App\Http\Controllers\SiteController::class,'invoice'])->name('invoice'); //need to work
Route::get('/order/{id}', App\Http\Livewire\Frontend\User\Orders::class)->name('order')->middleware('auth');

Route::get('/wishlist', App\Http\Livewire\Frontend\User\WishList::class)->name('wihslist')->middleware('auth');

 Route::get('/dashboard', App\Http\Livewire\Frontend\User\Dashboard::class)->name('dashboard')->middleware('auth');
 Route::get('/address', App\Http\Livewire\Frontend\User\Address::class)->name('address');

Route::get('/setting', App\Http\Livewire\Frontend\User\Setting::class)->name('setting');
Route::get('/thankyou', App\Http\Livewire\Frontend\User\Thankyou::class)->name('thankyou');
Route::get('/orderdetail', App\Http\Livewire\Frontend\User\OrderDetail::class)->name('orderdetail');
Route::get('/orderlist/', App\Http\Livewire\Frontend\User\OrderList::class)->name('orderlist')->middleware('auth');

Route::get('/search', App\Http\Livewire\Frontend\Search::class)->name('sitesearh');


Route::get('/business-with-us', App\Http\Livewire\Frontend\Partner\BusinessWithUs::class)->name('business-with-us');


    Route::get('/faq', App\Http\Livewire\Frontend\Faq\Index::class)->name('faq');
    Route::get('/testimonial', App\Http\Livewire\Frontend\Testimonial\Index::class)->name('testimonial');

    Route::get('/blogs', App\Http\Livewire\Blog\Blogs::class)->name('blogs');
 
    Route::get('/blog/{slug}', App\Http\Livewire\Blog\BlogDetail::class)->name('blogdetail');




// Route::layout('layouts.master')->name('frontend.')->group(function () {

//     Route::livewire('/reset-password', 'frontend.reset-password')->name('reset-password');

//     Route::livewire('/offers', 'frontend.offers.index')->name('offers');
//
// });

Route::fallback(function () {
    return 'Looks like you landed on wrong page Somehow!! ';
});


Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth.admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Book Categories
    Route::delete('book-categories/destroy', 'BookCategoryController@massDestroy')->name('book-categories.massDestroy');
    Route::resource('book-categories', 'BookCategoryController');

    // Addresses
    Route::delete('addresses/destroy', 'AddressController@massDestroy')->name('addresses.massDestroy');
    Route::resource('addresses', 'AddressController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Zones
    Route::delete('zones/destroy', 'ZoneController@massDestroy')->name('zones.massDestroy');
    Route::post('zones/parse-csv-import', 'ZoneController@parseCsvImport')->name('zones.parseCsvImport');
    Route::post('zones/process-csv-import', 'ZoneController@processCsvImport')->name('zones.processCsvImport');
    Route::resource('zones', 'ZoneController');

    // Login Ips
    Route::delete('login-ips/destroy', 'LoginIpController@massDestroy')->name('login-ips.massDestroy');
    Route::resource('login-ips', 'LoginIpController');

    // Languages
    Route::delete('languages/destroy', 'LanguageController@massDestroy')->name('languages.massDestroy');
    Route::resource('languages', 'LanguageController');

    // Email Subscribers
    Route::delete('email-subscribers/destroy', 'EmailSubscribersController@massDestroy')->name('email-subscribers.massDestroy');
    Route::resource('email-subscribers', 'EmailSubscribersController');

    // Search Keywords
    Route::delete('search-keywords/destroy', 'SearchKeywordController@massDestroy')->name('search-keywords.massDestroy');
    Route::resource('search-keywords', 'SearchKeywordController', ['except' => ['create', 'store']]);

    // Sliders
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::resource('sliders', 'SliderController');

    // Authors
    Route::delete('authors/destroy', 'AuthorController@massDestroy')->name('authors.massDestroy');
    Route::resource('authors', 'AuthorController');

    // Static Page Types
    Route::delete('static-page-types/destroy', 'StaticPageTypeController@massDestroy')->name('static-page-types.massDestroy');
    Route::resource('static-page-types', 'StaticPageTypeController');

    // Static Pages
    Route::delete('static-pages/destroy', 'StaticPageController@massDestroy')->name('static-pages.massDestroy');
    Route::resource('static-pages', 'StaticPageController');

    // Stock Statuses
    Route::delete('stock-statuses/destroy', 'StockStatusController@massDestroy')->name('stock-statuses.massDestroy');
    Route::resource('stock-statuses', 'StockStatusController');

    // Publishers
    Route::delete('publishers/destroy', 'PublisherController@massDestroy')->name('publishers.massDestroy');
    Route::resource('publishers', 'PublisherController');

    // Bindings
    Route::delete('bindings/destroy', 'BindingController@massDestroy')->name('bindings.massDestroy');
    Route::resource('bindings', 'BindingController');

    // Books
    Route::post('books/imageupload', 'BookController@imageUpload');

    Route::post('books/excelsupload', 'BookController@excelUpload');
    Route::delete('books/destroy', 'BookController@massDestroy')->name('books.massDestroy');
    Route::resource('books', 'BookController');

    // Book Reviews
    Route::delete('book-reviews/destroy', 'BookReviewController@massDestroy')->name('book-reviews.massDestroy');
    Route::resource('book-reviews', 'BookReviewController');

    // Coupons
    Route::delete('coupons/destroy', 'CouponController@massDestroy')->name('coupons.massDestroy');
    Route::resource('coupons', 'CouponController');

    // Orders
    Route::delete('orders/destroy', 'OrderController@massDestroy')->name('orders.massDestroy');
    Route::resource('orders', 'OrderController');

    // Order Statuses
    Route::delete('order-statuses/destroy', 'OrderStatusController@massDestroy')->name('order-statuses.massDestroy');
    Route::resource('order-statuses', 'OrderStatusController');

    // Order Items
    Route::delete('order-items/destroy', 'OrderItemController@massDestroy')->name('order-items.massDestroy');
    Route::resource('order-items', 'OrderItemController');

    // Settings
    Route::delete('settings/destroy', 'SettingController@massDestroy')->name('settings.massDestroy');
    Route::resource('settings', 'SettingController');

    // Recently Vieweds
    Route::delete('recently-vieweds/destroy', 'RecentlyViewedController@massDestroy')->name('recently-vieweds.massDestroy');
    Route::resource('recently-vieweds', 'RecentlyViewedController', ['except' => ['create', 'store']]);

    // India Shipping Charges
    Route::delete('india-shipping-charges/destroy', 'IndiaShippingChargeController@massDestroy')->name('india-shipping-charges.massDestroy');
    Route::post('india-shipping-charges/parse-csv-import', 'IndiaShippingChargeController@parseCsvImport')->name('india-shipping-charges.parseCsvImport');
    Route::post('india-shipping-charges/process-csv-import', 'IndiaShippingChargeController@processCsvImport')->name('india-shipping-charges.processCsvImport');
    Route::resource('india-shipping-charges', 'IndiaShippingChargeController');

    // Available Currencies
    Route::delete('available-currencies/destroy', 'AvailableCurrencyController@massDestroy')->name('available-currencies.massDestroy');
    Route::resource('available-currencies', 'AvailableCurrencyController');

    // Currency Conversions
    Route::delete('currency-conversions/destroy', 'CurrencyConversionController@massDestroy')->name('currency-conversions.massDestroy');
    Route::resource('currency-conversions', 'CurrencyConversionController');

    // Default Currencies
    Route::delete('default-currencies/destroy', 'DefaultCurrencyController@massDestroy')->name('default-currencies.massDestroy');
    Route::resource('default-currencies', 'DefaultCurrencyController');

    // Collections
    Route::delete('collections/destroy', 'CollectionsController@massDestroy')->name('collections.massDestroy');
    Route::resource('collections', 'CollectionsController');

    // Active Offers
    Route::delete('active-offers/destroy', 'ActiveOfferController@massDestroy')->name('active-offers.massDestroy');
    Route::resource('active-offers', 'ActiveOfferController');

    // Price Blocks
    Route::delete('price-blocks/destroy', 'PriceBlockController@massDestroy')->name('price-blocks.massDestroy');
    Route::resource('price-blocks', 'PriceBlockController');

    // Block Offers
    Route::delete('block-offers/destroy', 'BlockOfferController@massDestroy')->name('block-offers.massDestroy');
    Route::resource('block-offers', 'BlockOfferController');

    // Combo Offers
    Route::delete('combo-offers/destroy', 'ComboOfferController@massDestroy')->name('combo-offers.massDestroy');
    Route::resource('combo-offers', 'ComboOfferController');

    // Wish Lists
    Route::delete('wish-lists/destroy', 'WishListController@massDestroy')->name('wish-lists.massDestroy');
    Route::resource('wish-lists', 'WishListController');

    // Blog Categories
    Route::delete('blog-categories/destroy', 'BlogCategoryController@massDestroy')->name('blog-categories.massDestroy');
    Route::resource('blog-categories', 'BlogCategoryController');

    // Blogs
    Route::delete('blogs/destroy', 'BlogController@massDestroy')->name('blogs.massDestroy');
    Route::resource('blogs', 'BlogController');

    // Faq Categories
    Route::delete('faq-categories/destroy', 'FaqCategoryController@massDestroy')->name('faq-categories.massDestroy');
    Route::resource('faq-categories', 'FaqCategoryController');

    // Faqs
    Route::delete('faqs/destroy', 'FaqController@massDestroy')->name('faqs.massDestroy');
    Route::post('faqs/media', 'FaqController@storeMedia')->name('faqs.storeMedia');
    Route::post('faqs/ckmedia', 'FaqController@storeCKEditorImages')->name('faqs.storeCKEditorImages');
    Route::resource('faqs', 'FaqController');

    // Contactuses
    Route::delete('contactuses/destroy', 'ContactUsController@massDestroy')->name('contactuses.massDestroy');
    Route::post('contactuses/media', 'ContactUsController@storeMedia')->name('contactuses.storeMedia');
    Route::post('contactuses/ckmedia', 'ContactUsController@storeCKEditorImages')->name('contactuses.storeCKEditorImages');
    Route::resource('contactuses', 'ContactUsController');

    // Bussiness Withuses
    Route::delete('bussiness-withuses/destroy', 'BussinessWithUsController@massDestroy')->name('bussiness-withuses.massDestroy');
    Route::resource('bussiness-withuses', 'BussinessWithUsController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
