<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'book_category_create',
            ],
            [
                'id'    => 20,
                'title' => 'book_category_edit',
            ],
            [
                'id'    => 21,
                'title' => 'book_category_show',
            ],
            [
                'id'    => 22,
                'title' => 'book_category_delete',
            ],
            [
                'id'    => 23,
                'title' => 'book_category_access',
            ],
            [
                'id'    => 24,
                'title' => 'category_module_access',
            ],
            [
                'id'    => 25,
                'title' => 'address_create',
            ],
            [
                'id'    => 26,
                'title' => 'address_edit',
            ],
            [
                'id'    => 27,
                'title' => 'address_show',
            ],
            [
                'id'    => 28,
                'title' => 'address_delete',
            ],
            [
                'id'    => 29,
                'title' => 'address_access',
            ],
            [
                'id'    => 30,
                'title' => 'country_create',
            ],
            [
                'id'    => 31,
                'title' => 'country_edit',
            ],
            [
                'id'    => 32,
                'title' => 'country_show',
            ],
            [
                'id'    => 33,
                'title' => 'country_delete',
            ],
            [
                'id'    => 34,
                'title' => 'country_access',
            ],
            [
                'id'    => 35,
                'title' => 'zone_create',
            ],
            [
                'id'    => 36,
                'title' => 'zone_edit',
            ],
            [
                'id'    => 37,
                'title' => 'zone_show',
            ],
            [
                'id'    => 38,
                'title' => 'zone_delete',
            ],
            [
                'id'    => 39,
                'title' => 'zone_access',
            ],
            [
                'id'    => 40,
                'title' => 'location_module_access',
            ],
            [
                'id'    => 41,
                'title' => 'login_ip_create',
            ],
            [
                'id'    => 42,
                'title' => 'login_ip_edit',
            ],
            [
                'id'    => 43,
                'title' => 'login_ip_show',
            ],
            [
                'id'    => 44,
                'title' => 'login_ip_delete',
            ],
            [
                'id'    => 45,
                'title' => 'login_ip_access',
            ],
            [
                'id'    => 46,
                'title' => 'book_module_access',
            ],
            [
                'id'    => 47,
                'title' => 'language_create',
            ],
            [
                'id'    => 48,
                'title' => 'language_edit',
            ],
            [
                'id'    => 49,
                'title' => 'language_show',
            ],
            [
                'id'    => 50,
                'title' => 'language_delete',
            ],
            [
                'id'    => 51,
                'title' => 'language_access',
            ],
            [
                'id'    => 52,
                'title' => 'email_subscriber_create',
            ],
            [
                'id'    => 53,
                'title' => 'email_subscriber_edit',
            ],
            [
                'id'    => 54,
                'title' => 'email_subscriber_show',
            ],
            [
                'id'    => 55,
                'title' => 'email_subscriber_delete',
            ],
            [
                'id'    => 56,
                'title' => 'email_subscriber_access',
            ],
            [
                'id'    => 57,
                'title' => 'search_keyword_edit',
            ],
            [
                'id'    => 58,
                'title' => 'search_keyword_show',
            ],
            [
                'id'    => 59,
                'title' => 'search_keyword_delete',
            ],
            [
                'id'    => 60,
                'title' => 'search_keyword_access',
            ],
            [
                'id'    => 61,
                'title' => 'slider_create',
            ],
            [
                'id'    => 62,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 63,
                'title' => 'slider_show',
            ],
            [
                'id'    => 64,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 65,
                'title' => 'slider_access',
            ],
            [
                'id'    => 66,
                'title' => 'cms_module_access',
            ],
            [
                'id'    => 67,
                'title' => 'author_create',
            ],
            [
                'id'    => 68,
                'title' => 'author_edit',
            ],
            [
                'id'    => 69,
                'title' => 'author_show',
            ],
            [
                'id'    => 70,
                'title' => 'author_delete',
            ],
            [
                'id'    => 71,
                'title' => 'author_access',
            ],
            [
                'id'    => 72,
                'title' => 'order_module_access',
            ],
            [
                'id'    => 73,
                'title' => 'static_page_type_create',
            ],
            [
                'id'    => 74,
                'title' => 'static_page_type_edit',
            ],
            [
                'id'    => 75,
                'title' => 'static_page_type_show',
            ],
            [
                'id'    => 76,
                'title' => 'static_page_type_delete',
            ],
            [
                'id'    => 77,
                'title' => 'static_page_type_access',
            ],
            [
                'id'    => 78,
                'title' => 'static_page_create',
            ],
            [
                'id'    => 79,
                'title' => 'static_page_edit',
            ],
            [
                'id'    => 80,
                'title' => 'static_page_show',
            ],
            [
                'id'    => 81,
                'title' => 'static_page_delete',
            ],
            [
                'id'    => 82,
                'title' => 'static_page_access',
            ],
            [
                'id'    => 83,
                'title' => 'stock_status_create',
            ],
            [
                'id'    => 84,
                'title' => 'stock_status_edit',
            ],
            [
                'id'    => 85,
                'title' => 'stock_status_show',
            ],
            [
                'id'    => 86,
                'title' => 'stock_status_delete',
            ],
            [
                'id'    => 87,
                'title' => 'stock_status_access',
            ],
            [
                'id'    => 88,
                'title' => 'publisher_create',
            ],
            [
                'id'    => 89,
                'title' => 'publisher_edit',
            ],
            [
                'id'    => 90,
                'title' => 'publisher_show',
            ],
            [
                'id'    => 91,
                'title' => 'publisher_delete',
            ],
            [
                'id'    => 92,
                'title' => 'publisher_access',
            ],
            [
                'id'    => 93,
                'title' => 'binding_create',
            ],
            [
                'id'    => 94,
                'title' => 'binding_edit',
            ],
            [
                'id'    => 95,
                'title' => 'binding_show',
            ],
            [
                'id'    => 96,
                'title' => 'binding_delete',
            ],
            [
                'id'    => 97,
                'title' => 'binding_access',
            ],
            [
                'id'    => 98,
                'title' => 'book_create',
            ],
            [
                'id'    => 99,
                'title' => 'book_edit',
            ],
            [
                'id'    => 100,
                'title' => 'book_show',
            ],
            [
                'id'    => 101,
                'title' => 'book_delete',
            ],
            [
                'id'    => 102,
                'title' => 'book_access',
            ],
            [
                'id'    => 103,
                'title' => 'book_review_create',
            ],
            [
                'id'    => 104,
                'title' => 'book_review_edit',
            ],
            [
                'id'    => 105,
                'title' => 'book_review_show',
            ],
            [
                'id'    => 106,
                'title' => 'book_review_delete',
            ],
            [
                'id'    => 107,
                'title' => 'book_review_access',
            ],
            [
                'id'    => 108,
                'title' => 'coupon_create',
            ],
            [
                'id'    => 109,
                'title' => 'coupon_edit',
            ],
            [
                'id'    => 110,
                'title' => 'coupon_show',
            ],
            [
                'id'    => 111,
                'title' => 'coupon_delete',
            ],
            [
                'id'    => 112,
                'title' => 'coupon_access',
            ],
            [
                'id'    => 113,
                'title' => 'order_create',
            ],
            [
                'id'    => 114,
                'title' => 'order_edit',
            ],
            [
                'id'    => 115,
                'title' => 'order_show',
            ],
            [
                'id'    => 116,
                'title' => 'order_delete',
            ],
            [
                'id'    => 117,
                'title' => 'order_access',
            ],
            [
                'id'    => 118,
                'title' => 'order_status_create',
            ],
            [
                'id'    => 119,
                'title' => 'order_status_edit',
            ],
            [
                'id'    => 120,
                'title' => 'order_status_show',
            ],
            [
                'id'    => 121,
                'title' => 'order_status_delete',
            ],
            [
                'id'    => 122,
                'title' => 'order_status_access',
            ],
            [
                'id'    => 123,
                'title' => 'order_item_create',
            ],
            [
                'id'    => 124,
                'title' => 'order_item_edit',
            ],
            [
                'id'    => 125,
                'title' => 'order_item_show',
            ],
            [
                'id'    => 126,
                'title' => 'order_item_delete',
            ],
            [
                'id'    => 127,
                'title' => 'order_item_access',
            ],
            [
                'id'    => 128,
                'title' => 'setting_create',
            ],
            [
                'id'    => 129,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 130,
                'title' => 'setting_show',
            ],
            [
                'id'    => 131,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 132,
                'title' => 'setting_access',
            ],
            [
                'id'    => 133,
                'title' => 'recently_viewed_edit',
            ],
            [
                'id'    => 134,
                'title' => 'recently_viewed_show',
            ],
            [
                'id'    => 135,
                'title' => 'recently_viewed_delete',
            ],
            [
                'id'    => 136,
                'title' => 'recently_viewed_access',
            ],
            [
                'id'    => 137,
                'title' => 'india_shipping_charge_create',
            ],
            [
                'id'    => 138,
                'title' => 'india_shipping_charge_edit',
            ],
            [
                'id'    => 139,
                'title' => 'india_shipping_charge_show',
            ],
            [
                'id'    => 140,
                'title' => 'india_shipping_charge_delete',
            ],
            [
                'id'    => 141,
                'title' => 'india_shipping_charge_access',
            ],
            [
                'id'    => 142,
                'title' => 'available_currency_create',
            ],
            [
                'id'    => 143,
                'title' => 'available_currency_edit',
            ],
            [
                'id'    => 144,
                'title' => 'available_currency_show',
            ],
            [
                'id'    => 145,
                'title' => 'available_currency_delete',
            ],
            [
                'id'    => 146,
                'title' => 'available_currency_access',
            ],
            [
                'id'    => 147,
                'title' => 'currency_conversion_create',
            ],
            [
                'id'    => 148,
                'title' => 'currency_conversion_edit',
            ],
            [
                'id'    => 149,
                'title' => 'currency_conversion_show',
            ],
            [
                'id'    => 150,
                'title' => 'currency_conversion_delete',
            ],
            [
                'id'    => 151,
                'title' => 'currency_conversion_access',
            ],
            [
                'id'    => 152,
                'title' => 'default_currency_create',
            ],
            [
                'id'    => 153,
                'title' => 'default_currency_edit',
            ],
            [
                'id'    => 154,
                'title' => 'default_currency_show',
            ],
            [
                'id'    => 155,
                'title' => 'default_currency_delete',
            ],
            [
                'id'    => 156,
                'title' => 'default_currency_access',
            ],
            [
                'id'    => 157,
                'title' => 'currency_module_access',
            ],
            [
                'id'    => 158,
                'title' => 'collection_create',
            ],
            [
                'id'    => 159,
                'title' => 'collection_edit',
            ],
            [
                'id'    => 160,
                'title' => 'collection_show',
            ],
            [
                'id'    => 161,
                'title' => 'collection_delete',
            ],
            [
                'id'    => 162,
                'title' => 'collection_access',
            ],
            [
                'id'    => 163,
                'title' => 'active_offer_create',
            ],
            [
                'id'    => 164,
                'title' => 'active_offer_edit',
            ],
            [
                'id'    => 165,
                'title' => 'active_offer_show',
            ],
            [
                'id'    => 166,
                'title' => 'active_offer_delete',
            ],
            [
                'id'    => 167,
                'title' => 'active_offer_access',
            ],
            [
                'id'    => 168,
                'title' => 'price_block_create',
            ],
            [
                'id'    => 169,
                'title' => 'price_block_edit',
            ],
            [
                'id'    => 170,
                'title' => 'price_block_show',
            ],
            [
                'id'    => 171,
                'title' => 'price_block_delete',
            ],
            [
                'id'    => 172,
                'title' => 'price_block_access',
            ],
            [
                'id'    => 173,
                'title' => 'block_offer_create',
            ],
            [
                'id'    => 174,
                'title' => 'block_offer_edit',
            ],
            [
                'id'    => 175,
                'title' => 'block_offer_show',
            ],
            [
                'id'    => 176,
                'title' => 'block_offer_delete',
            ],
            [
                'id'    => 177,
                'title' => 'block_offer_access',
            ],
            [
                'id'    => 178,
                'title' => 'combo_offer_create',
            ],
            [
                'id'    => 179,
                'title' => 'combo_offer_edit',
            ],
            [
                'id'    => 180,
                'title' => 'combo_offer_show',
            ],
            [
                'id'    => 181,
                'title' => 'combo_offer_delete',
            ],
            [
                'id'    => 182,
                'title' => 'combo_offer_access',
            ],
            [
                'id'    => 183,
                'title' => 'wish_list_create',
            ],
            [
                'id'    => 184,
                'title' => 'wish_list_edit',
            ],
            [
                'id'    => 185,
                'title' => 'wish_list_show',
            ],
            [
                'id'    => 186,
                'title' => 'wish_list_delete',
            ],
            [
                'id'    => 187,
                'title' => 'wish_list_access',
            ],
            [
                'id'    => 188,
                'title' => 'blog_category_create',
            ],
            [
                'id'    => 189,
                'title' => 'blog_category_edit',
            ],
            [
                'id'    => 190,
                'title' => 'blog_category_show',
            ],
            [
                'id'    => 191,
                'title' => 'blog_category_delete',
            ],
            [
                'id'    => 192,
                'title' => 'blog_category_access',
            ],
            [
                'id'    => 193,
                'title' => 'blog_create',
            ],
            [
                'id'    => 194,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 195,
                'title' => 'blog_show',
            ],
            [
                'id'    => 196,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 197,
                'title' => 'blog_access',
            ],
            [
                'id'    => 198,
                'title' => 'blog_module_access',
            ],
            [
                'id'    => 199,
                'title' => 'offers_module_access',
            ],
            [
                'id'    => 200,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 201,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 202,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 203,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 204,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 205,
                'title' => 'faq_module_access',
            ],
            [
                'id'    => 206,
                'title' => 'faq_create',
            ],
            [
                'id'    => 207,
                'title' => 'faq_edit',
            ],
            [
                'id'    => 208,
                'title' => 'faq_show',
            ],
            [
                'id'    => 209,
                'title' => 'faq_delete',
            ],
            [
                'id'    => 210,
                'title' => 'faq_access',
            ],
            [
                'id'    => 211,
                'title' => 'alert_module_access',
            ],
            [
                'id'    => 212,
                'title' => 'contact_us_create',
            ],
            [
                'id'    => 213,
                'title' => 'contact_us_edit',
            ],
            [
                'id'    => 214,
                'title' => 'contact_us_show',
            ],
            [
                'id'    => 215,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 216,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 217,
                'title' => 'bussiness_with_us_create',
            ],
            [
                'id'    => 218,
                'title' => 'bussiness_with_us_edit',
            ],
            [
                'id'    => 219,
                'title' => 'bussiness_with_us_show',
            ],
            [
                'id'    => 220,
                'title' => 'bussiness_with_us_delete',
            ],
            [
                'id'    => 221,
                'title' => 'bussiness_with_us_access',
            ],
            [
                'id'    => 222,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
