<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Books
    Route::apiResource('books', 'BookApiController');

    // Settings
    Route::apiResource('settings', 'SettingApiController');

    // India Shipping Charges
    Route::apiResource('india-shipping-charges', 'IndiaShippingChargeApiController');
});
