<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }} {{ request()->is("admin/addresses*") ? "c-show" : "" }} {{ request()->is("admin/login-ips*") ? "c-show" : "" }} {{ request()->is("admin/email-subscribers*") ? "c-show" : "" }} {{ request()->is("admin/search-keywords*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('address_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.addresses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/addresses") || request()->is("admin/addresses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-map-marked-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.address.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('login_ip_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.login-ips.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/login-ips") || request()->is("admin/login-ips/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-mobile c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.loginIp.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('email_subscriber_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.email-subscribers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/email-subscribers") || request()->is("admin/email-subscribers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-envelope c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.emailSubscriber.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('search_keyword_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.search-keywords.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/search-keywords") || request()->is("admin/search-keywords/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-search c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.searchKeyword.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('alert_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/contactuses*") ? "c-show" : "" }} {{ request()->is("admin/bussiness-withuses*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.alertModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('contact_us_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contactuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contactuses") || request()->is("admin/contactuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-phone-volume c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contactUs.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('bussiness_with_us_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.bussiness-withuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/bussiness-withuses") || request()->is("admin/bussiness-withuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hands-helping c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.bussinessWithUs.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('category_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/book-categories*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.categoryModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('book_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.book-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/book-categories") || request()->is("admin/book-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-bezier-curve c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.bookCategory.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('book_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/languages*") ? "c-show" : "" }} {{ request()->is("admin/authors*") ? "c-show" : "" }} {{ request()->is("admin/stock-statuses*") ? "c-show" : "" }} {{ request()->is("admin/publishers*") ? "c-show" : "" }} {{ request()->is("admin/bindings*") ? "c-show" : "" }} {{ request()->is("admin/books*") ? "c-show" : "" }} {{ request()->is("admin/book-reviews*") ? "c-show" : "" }} {{ request()->is("admin/recently-vieweds*") ? "c-show" : "" }} {{ request()->is("admin/price-blocks*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-book-open c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.bookModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('language_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.languages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/languages") || request()->is("admin/languages/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-language c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.language.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('author_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.authors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/authors") || request()->is("admin/authors/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-autoprefixer c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.author.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('stock_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.stock-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/stock-statuses") || request()->is("admin/stock-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-signal c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.stockStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('publisher_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.publishers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/publishers") || request()->is("admin/publishers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-product-hunt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.publisher.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('binding_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.bindings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/bindings") || request()->is("admin/bindings/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-contract c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.binding.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('book_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.books.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/books") || request()->is("admin/books/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-book c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.book.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('book_review_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.book-reviews.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/book-reviews") || request()->is("admin/book-reviews/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-bars c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.bookReview.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('recently_viewed_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.recently-vieweds.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/recently-vieweds") || request()->is("admin/recently-vieweds/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-eye c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.recentlyViewed.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('price_block_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.price-blocks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/price-blocks") || request()->is("admin/price-blocks/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-credit-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.priceBlock.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('order_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/coupons*") ? "c-show" : "" }} {{ request()->is("admin/orders*") ? "c-show" : "" }} {{ request()->is("admin/order-statuses*") ? "c-show" : "" }} {{ request()->is("admin/order-items*") ? "c-show" : "" }} {{ request()->is("admin/india-shipping-charges*") ? "c-show" : "" }} {{ request()->is("admin/wish-lists*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fab fa-first-order c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.orderModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('coupon_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.coupons.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/coupons") || request()->is("admin/coupons/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.coupon.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('order_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-first-order c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.order.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('order_status_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.order-statuses.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-statuses") || request()->is("admin/order-statuses/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-first-order-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.orderStatus.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('order_item_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.order-items.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/order-items") || request()->is("admin/order-items/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-first-order-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.orderItem.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('india_shipping_charge_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.india-shipping-charges.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/india-shipping-charges") || request()->is("admin/india-shipping-charges/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-truck c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.indiaShippingCharge.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('wish_list_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.wish-lists.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/wish-lists") || request()->is("admin/wish-lists/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-blind c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.wishList.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('offers_module_access1')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/active-offers*") ? "c-show" : "" }} {{ request()->is("admin/block-offers*") ? "c-show" : "" }} {{ request()->is("admin/combo-offers*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.offersModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('active_offer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.active-offers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/active-offers") || request()->is("admin/active-offers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-discourse c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.activeOffer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('block_offer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.block-offers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/block-offers") || request()->is("admin/block-offers/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-credit-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blockOffer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('combo_offer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.combo-offers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/combo-offers") || request()->is("admin/combo-offers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-money-bill-wave-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.comboOffer.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('slider_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-sliders-h c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.slider.title') }}
                </a>
            </li>
        @endcan
        @can('collection_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.collections.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/collections") || request()->is("admin/collections/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-align-left c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.collection.title') }}
                </a>
            </li>
        @endcan
        @can('currency_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/available-currencies*") ? "c-show" : "" }} {{ request()->is("admin/currency-conversions*") ? "c-show" : "" }} {{ request()->is("admin/default-currencies*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-dollar-sign c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.currencyModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('available_currency_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.available-currencies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/available-currencies") || request()->is("admin/available-currencies/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-credit-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.availableCurrency.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('currency_conversion_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.currency-conversions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/currency-conversions") || request()->is("admin/currency-conversions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-dolly c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.currencyConversion.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('default_currency_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.default-currencies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/default-currencies") || request()->is("admin/default-currencies/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-invoice-dollar c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.defaultCurrency.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('blog_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/blog-categories*") ? "c-show" : "" }} {{ request()->is("admin/blogs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fab fa-blogger-b c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.blogModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('blog_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.blog-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blog-categories") || request()->is("admin/blog-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-rss-square c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blogCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('blog_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.blogs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/blogs") || request()->is("admin/blogs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-blogger c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.blog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('location_module_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/countries*") ? "c-show" : "" }} {{ request()->is("admin/zones*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-map-marker c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.locationModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('country_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.countries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/countries") || request()->is("admin/countries/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-flag c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.country.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('zone_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.zones.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/zones") || request()->is("admin/zones/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-map c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.zone.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('cms_module_access1')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/static-page-types*") ? "c-show" : "" }} {{ request()->is("admin/static-pages*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-align-left c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.cmsModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('static_page_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.static-page-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/static-page-types") || request()->is("admin/static-page-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-typo3 c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.staticPageType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('static_page_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.static-pages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/static-pages") || request()->is("admin/static-pages/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-file c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.staticPage.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('setting_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.settings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.setting.title') }}
                </a>
            </li>
        @endcan
        @can('faq_module_access1')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/faq-categories*") ? "c-show" : "" }} {{ request()->is("admin/faqs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-question-circle c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.faqModule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('faq_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faq-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-info-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faqCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('faq_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faqs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faqs") || request()->is("admin/faqs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-info c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faq.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
