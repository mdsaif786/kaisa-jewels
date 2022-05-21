<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ActiveOffer
 *
 * @property int $id
 * @property string $offer_title
 * @property string|null $banner_image
 * @property string|null $status
 * @property int|null $discount_bracket
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer newQuery()
 * @method static \Illuminate\Database\Query\Builder|ActiveOffer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereDiscountBracket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereOfferTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ActiveOffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ActiveOffer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ActiveOffer withoutTrashed()
 */
	class ActiveOffer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $alternate_phone
 * @property string $address_1
 * @property int $pincode
 * @property string $city
 * @property string|null $additional_note
 * @property string|null $address_2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $user_id
 * @property int|null $country_id
 * @property int|null $zone_id
 * @property-read \App\Models\Country|null $country
 * @property-read \App\Models\User|null $user
 * @property-read \App\Models\Zone|null $zone
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Query\Builder|Address onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAdditionalNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAlternatePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereZoneId($value)
 * @method static \Illuminate\Database\Query\Builder|Address withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Address withoutTrashed()
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AuditLog
 *
 * @property int $id
 * @property string $description
 * @property int|null $subject_id
 * @property string|null $subject_type
 * @property int|null $user_id
 * @property \Illuminate\Support\Collection|null $properties
 * @property string|null $host
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereSubjectType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuditLog whereUserId($value)
 */
	class AuditLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Author
 *
 * @property int $id
 * @property string $name
 * @property string|null $about_author
 * @property string|null $short_caption
 * @property string|null $profile_image
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Query\Builder|Author onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereAboutAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereProfileImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereShortCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Author withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Author withoutTrashed()
 */
	class Author extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AvailableCurrency
 *
 * @property int $id
 * @property string $country_name
 * @property string|null $currency_symbol
 * @property string $short_name
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency newQuery()
 * @method static \Illuminate\Database\Query\Builder|AvailableCurrency onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency query()
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereCountryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AvailableCurrency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|AvailableCurrency withTrashed()
 * @method static \Illuminate\Database\Query\Builder|AvailableCurrency withoutTrashed()
 */
	class AvailableCurrency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Binding
 *
 * @property int $id
 * @property string $name
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Binding newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Binding newQuery()
 * @method static \Illuminate\Database\Query\Builder|Binding onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Binding query()
 * @method static \Illuminate\Database\Eloquent\Builder|Binding whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Binding whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Binding whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Binding whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Binding whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Binding whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Binding withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Binding withoutTrashed()
 */
	class Binding extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlockOffer
 *
 * @property int $id
 * @property string $title
 * @property string $offer_type
 * @property int|null $general_discount
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlockOffer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereGeneralDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereOfferType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlockOffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BlockOffer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlockOffer withoutTrashed()
 */
	class BlockOffer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string|null $description
 * @property string|null $slug
 * @property string|null $meta_keyword
 * @property string|null $meta_description
 * @property string|null $status
 * @property int|null $no_of_view
 * @property int|null $no_of_likes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $blog_category_id
 * @property-read \App\Models\BlogCategory|null $blog_category
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Query\Builder|Blog onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBlogCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereMetaKeyword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereNoOfLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereNoOfView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Blog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Blog withoutTrashed()
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogCategory
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlogCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BlogCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogCategory withoutTrashed()
 */
	class BlogCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Book
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $mrp
 * @property string|null $price
 * @property string|null $discount
 * @property string|null $isbn
 * @property string $book_type
 * @property string|null $description
 * @property string|null $sku
 * @property string|null $weight
 * @property string|null $dimensions
 * @property int|null $no_of_pages
 * @property string|null $status
 * @property string|null $slug
 * @property string|null $meta_keywords
 * @property string|null $meta_description
 * @property string|null $coupon_discount
 * @property int|null $no_of_qty_for_discount
 * @property string|null $coupon_code
 * @property string|null $isbn_30
 * @property string|null $isbn_10
 * @property \Illuminate\Support\Carbon|null $publication_date
 * @property string|null $publication_city_or_country
 * @property int|null $handpicked
 * @property int|null $new_arrival
 * @property int|null $best_sellers
 * @property int|null $all_time_classic
 * @property int|null $no_of_viewed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $book_authors_id
 * @property int|null $publisher_id
 * @property int|null $stock_status_id
 * @property int|null $language_id
 * @property int|null $category_id
 * @property int|null $sub_category_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Binding[] $binding_types
 * @property-read int|null $binding_types_count
 * @property-read \App\Models\Author|null $book_authors
 * @property-read \App\Models\BookCategory|null $category
 * @property-read \App\Models\Language|null $language
 * @property-read \App\Models\Publisher|null $publisher
 * @property-read \App\Models\StockStatus|null $stock_status
 * @property-read \App\Models\BookCategory|null $sub_category
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Query\Builder|Book onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereAllTimeClassic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBestSellers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookAuthorsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereBookType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCouponCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereHandpicked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsbn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsbn10($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereIsbn30($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereMrp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereNewArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereNoOfPages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereNoOfQtyForDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereNoOfViewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublicationCityOrCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublicationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book wherePublisherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereStockStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereWeight($value)
 * @method static \Illuminate\Database\Query\Builder|Book withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Book withoutTrashed()
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookCategory
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $status
 * @property string|null $show_in_mega_menu
 * @property string|null $show_in_menu
 * @property string|null $slug
 * @property string|null $meta_keywords
 * @property string|null $meta_description
 * @property int|null $set_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $parent_category_id
 * @property-read BookCategory|null $parent_category
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|BookCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereParentCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereSetOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereShowInMegaMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereShowInMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BookCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BookCategory withoutTrashed()
 */
	class BookCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BookReview
 *
 * @property int $id
 * @property string|null $email
 * @property int|null $review_point
 * @property string|null $message
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $book_id
 * @property int|null $user_id
 * @property-read \App\Models\Book|null $book
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview newQuery()
 * @method static \Illuminate\Database\Query\Builder|BookReview onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereReviewPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookReview whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|BookReview withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BookReview withoutTrashed()
 */
	class BookReview extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BussinessWithUs
 *
 * @property int $id
 * @property string|null $full_name
 * @property string $email
 * @property string|null $mobile
 * @property string|null $message
 * @property string|null $city_name
 * @property string|null $company_name
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs newQuery()
 * @method static \Illuminate\Database\Query\Builder|BussinessWithUs onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereCityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BussinessWithUs whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|BussinessWithUs withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BussinessWithUs withoutTrashed()
 */
	class BussinessWithUs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Collection
 *
 * @property int $id
 * @property string $collection_name
 * @property string|null $banner_image
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $collection_books
 * @property-read int|null $collection_books_count
 * @method static \Illuminate\Database\Eloquent\Builder|Collection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection newQuery()
 * @method static \Illuminate\Database\Query\Builder|Collection onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection query()
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Collection whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Collection withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Collection withoutTrashed()
 */
	class Collection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CollectionBook
 *
 * @property-read \App\Models\BookCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $collection_books
 * @property-read int|null $collection_books_count
 * @property-read \App\Models\Language $language
 * @property-read \App\Models\StockStatus $stock_status
 * @property-read \App\Models\BookCategory $sub_category
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionBook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionBook newQuery()
 * @method static \Illuminate\Database\Query\Builder|CollectionBook onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CollectionBook query()
 * @method static \Illuminate\Database\Query\Builder|CollectionBook withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CollectionBook withoutTrashed()
 */
	class CollectionBook extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ComboOffer
 *
 * @property int $id
 * @property string $offer_title
 * @property string|null $price
 * @property string|null $discount_amount
 * @property int|null $discount_percentage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $category_id
 * @property int|null $sub_category_id
 * @property-read \App\Models\BookCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Book[] $combo_offer_books
 * @property-read int|null $combo_offer_books_count
 * @property-read \App\Models\BookCategory|null $sub_category
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer newQuery()
 * @method static \Illuminate\Database\Query\Builder|ComboOffer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereDiscountPercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereOfferTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereSubCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ComboOffer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ComboOffer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ComboOffer withoutTrashed()
 */
	class ComboOffer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactUs
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newQuery()
 * @method static \Illuminate\Database\Query\Builder|ContactUs onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ContactUs withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ContactUs withoutTrashed()
 */
	class ContactUs extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $short_code
 * @property string|null $shipping_allow
 * @property string|null $shipping_charge
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Query\Builder|Country onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereShippingAllow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereShippingCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Country withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Country withoutTrashed()
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $coupon_name
 * @property string $coupon_code
 * @property string $discount
 * @property string|null $minimum_amount
 * @property string $coupon_discount_type
 * @property string $status
 * @property int|null $is_flash_sale
 * @property string|null $coupon_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $book_category_id
 * @property-read \App\Models\BookCategory|null $book_category
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Query\Builder|Coupon onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereBookCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereIsFlashSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinimumAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Coupon withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Coupon withoutTrashed()
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CurrencyConversion
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $from_date
 * @property string $to_date
 * @property string $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $country_id
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion newQuery()
 * @method static \Illuminate\Database\Query\Builder|CurrencyConversion onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion query()
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereFromDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereToDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CurrencyConversion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|CurrencyConversion withTrashed()
 * @method static \Illuminate\Database\Query\Builder|CurrencyConversion withoutTrashed()
 */
	class CurrencyConversion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DefaultCurrency
 *
 * @property int $id
 * @property string|null $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $country_id
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency newQuery()
 * @method static \Illuminate\Database\Query\Builder|DefaultCurrency onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency query()
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DefaultCurrency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|DefaultCurrency withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DefaultCurrency withoutTrashed()
 */
	class DefaultCurrency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmailSubscriber
 *
 * @property int $id
 * @property string|null $name
 * @property string $email
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber newQuery()
 * @method static \Illuminate\Database\Query\Builder|EmailSubscriber onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmailSubscriber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|EmailSubscriber withTrashed()
 * @method static \Illuminate\Database\Query\Builder|EmailSubscriber withoutTrashed()
 */
	class EmailSubscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faq
 *
 * @property int $id
 * @property string $title
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $faq_category_id
 * @property-read \App\Models\FaqCategory|null $faq_category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Query\Builder|Faq onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereFaqCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Faq withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Faq withoutTrashed()
 */
	class Faq extends \Eloquent implements \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\FaqCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory newQuery()
 * @method static \Illuminate\Database\Query\Builder|FaqCategory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FaqCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|FaqCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|FaqCategory withoutTrashed()
 */
	class FaqCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IndiaShippingCharge
 *
 * @property int $id
 * @property string $pincode
 * @property string|null $circle_name
 * @property string|null $taluk
 * @property string|null $office_name
 * @property string|null $district_name
 * @property string|null $region_name
 * @property string|null $hq_rate_per_kg
 * @property string|null $other_rate
 * @property string|null $cod_rate
 * @property string|null $total_amount
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge newQuery()
 * @method static \Illuminate\Database\Query\Builder|IndiaShippingCharge onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge query()
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereCircleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereCodRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereDistrictName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereHqRatePerKg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereOfficeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereOtherRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge wherePincode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereTaluk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IndiaShippingCharge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|IndiaShippingCharge withTrashed()
 * @method static \Illuminate\Database\Query\Builder|IndiaShippingCharge withoutTrashed()
 */
	class IndiaShippingCharge extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property string|null $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Query\Builder|Language onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Language withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Language withoutTrashed()
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoginIp
 *
 * @property int $id
 * @property string|null $user
 * @property string|null $ip
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp newQuery()
 * @method static \Illuminate\Database\Query\Builder|LoginIp onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoginIp whereUser($value)
 * @method static \Illuminate\Database\Query\Builder|LoginIp withTrashed()
 * @method static \Illuminate\Database\Query\Builder|LoginIp withoutTrashed()
 */
	class LoginIp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property string|null $invoice_no
 * @property string|null $invoice_prefix
 * @property string|null $shipping_charge
 * @property string|null $gst_amount
 * @property string|null $coupon
 * @property string|null $coupon_discount
 * @property string|null $payment_reference
 * @property string|null $ip
 * @property int|null $is_completed
 * @property string $order_amount
 * @property string|null $user_agent
 * @property string|null $total_book_amount
 * @property string|null $payment_method
 * @property string|null $payment_status
 * @property string|null $order_date
 * @property string|null $order_key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $order_status_id
 * @property int|null $address_id
 * @property-read \App\Models\Address|null $address
 * @property-read \App\Models\OrderStatus|null $order_status
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Query\Builder|Order onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereGstAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereInvoicePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIsCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalBookAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserAgent($value)
 * @method static \Illuminate\Database\Query\Builder|Order withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Order withoutTrashed()
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderItem
 *
 * @property int $id
 * @property int $quantity
 * @property string|null $unit_price
 * @property string|null $price
 * @property string|null $gst_amount
 * @property string|null $total_amount
 * @property string|null $cart_item_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $order_id
 * @property int|null $book_id
 * @property int|null $combo_offer_id
 * @property-read \App\Models\Book|null $book
 * @property-read \App\Models\ComboOffer|null $combo_offer
 * @property-read \App\Models\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Query\Builder|OrderItem onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCartItemType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereComboOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereGstAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|OrderItem withTrashed()
 * @method static \Illuminate\Database\Query\Builder|OrderItem withoutTrashed()
 */
	class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderStatus
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus newQuery()
 * @method static \Illuminate\Database\Query\Builder|OrderStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|OrderStatus withTrashed()
 * @method static \Illuminate\Database\Query\Builder|OrderStatus withoutTrashed()
 */
	class OrderStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Query\Builder|Permission onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Permission withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Permission withoutTrashed()
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PriceBlock
 *
 * @property int $id
 * @property string|null $block_title
 * @property string|null $status
 * @property int|null $set_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock newQuery()
 * @method static \Illuminate\Database\Query\Builder|PriceBlock onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock query()
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereBlockTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereSetOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PriceBlock whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PriceBlock withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PriceBlock withoutTrashed()
 */
	class PriceBlock extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Publisher
 *
 * @property int $id
 * @property string $name
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher newQuery()
 * @method static \Illuminate\Database\Query\Builder|Publisher onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publisher whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Publisher withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Publisher withoutTrashed()
 */
	class Publisher extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RecentlyViewed
 *
 * @property int $id
 * @property string|null $date_time
 * @property string|null $url
 * @property string|null $ip
 * @property int|null $no_of_times
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $book_id
 * @property int|null $user_id
 * @property-read \App\Models\Book|null $book
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed newQuery()
 * @method static \Illuminate\Database\Query\Builder|RecentlyViewed onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed query()
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereNoOfTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RecentlyViewed whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|RecentlyViewed withTrashed()
 * @method static \Illuminate\Database\Query\Builder|RecentlyViewed withoutTrashed()
 */
	class RecentlyViewed extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Query\Builder|Role onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Role withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Role withoutTrashed()
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SearchKeyword
 *
 * @property int $id
 * @property string $keyword_name
 * @property string|null $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $user_id
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword query()
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword whereKeywordName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchKeyword whereUserId($value)
 */
	class SearchKeyword extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Query\Builder|Setting onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|Setting withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Setting withoutTrashed()
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string|null $slider_name
 * @property string|null $slider_image
 * @property string|null $target_url
 * @property string|null $slider_position
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Slider belowSlider()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Query\Builder|Slider onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider topSlider()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereSliderImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereSliderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereSliderPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTargetUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Slider withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Slider withoutTrashed()
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StaticModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|StaticModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticModel query()
 */
	class StaticModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StaticPage
 *
 * @property int $id
 * @property string|null $page_name
 * @property string|null $page_title
 * @property string|null $page_description
 * @property string|null $slug
 * @property string|null $meta_keywords
 * @property string|null $meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int $static_page_type_id
 * @property-read \App\Models\StaticPageType $static_page_type
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage newQuery()
 * @method static \Illuminate\Database\Query\Builder|StaticPage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage wherePageDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage wherePageName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage wherePageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereStaticPageTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|StaticPage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StaticPage withoutTrashed()
 */
	class StaticPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StaticPageType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType newQuery()
 * @method static \Illuminate\Database\Query\Builder|StaticPageType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType query()
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StaticPageType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|StaticPageType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StaticPageType withoutTrashed()
 */
	class StaticPageType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StockStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus newQuery()
 * @method static \Illuminate\Database\Query\Builder|StockStatus onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StockStatus whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|StockStatus withTrashed()
 * @method static \Illuminate\Database\Query\Builder|StockStatus withoutTrashed()
 */
	class StockStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $status
 * @property string|null $profile_photo
 * @property int|null $default_address
 * @property string|null $phone
 * @property string|null $is_online
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $country_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \App\Models\Country|null $country
 * @property-read mixed $is_admin
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDefaultAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WishList
 *
 * @property int $id
 * @property string|null $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $user_id
 * @property int|null $book_id
 * @property-read \App\Models\Book|null $book
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|WishList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WishList newQuery()
 * @method static \Illuminate\Database\Query\Builder|WishList onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|WishList query()
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WishList whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|WishList withTrashed()
 * @method static \Illuminate\Database\Query\Builder|WishList withoutTrashed()
 */
	class WishList extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Zone
 *
 * @property int $id
 * @property string $name
 * @property string|null $code
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $country_id
 * @property-read \App\Models\Country|null $country
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone newQuery()
 * @method static \Illuminate\Database\Query\Builder|Zone onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Zone whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Zone withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Zone withoutTrashed()
 */
	class Zone extends \Eloquent {}
}

