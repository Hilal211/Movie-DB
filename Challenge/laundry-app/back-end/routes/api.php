<?php

Route::group( [ 'prefix' => 'v1', 'as' => 'admin.', 'namespace' => 'Api\V1\Admin' ], function () {
    Route::apiResource( 'permissions', 'PermissionsApiController' );
    
    Route::apiResource( 'roles', 'RolesApiController' );
    
    Route::apiResource( 'users', 'UsersApiController' );
    
    Route::apiResource( 'orders', 'OrdersApiController' );
    
    Route::apiResource( 'items-types', 'ItemsTypeApiController' );
    
    Route::apiResource( 'order-items', 'OrderItemsApiController' );
    
    Route::apiResource( 'content-categories', 'ContentCategoryApiController' );
    
    Route::apiResource( 'content-tags', 'ContentTagApiController' );
    
    Route::apiResource( 'content-pages', 'ContentPageApiController' );
    
    Route::apiResource( 'contacts', 'ContactsApiController' );
    
    
    Route::apiResource( 'services', 'ServicesApiController' );
    
    Route::apiResource( 'sliders', 'SlidersApiController' );
    
    Route::apiResource( 'pages-with-no-repeated-fields', 'PagesWithNoRepeatedFieldsApiController' );
    
    Route::get('customer/orders', 'CustomerOrdersApiController@index');
    Route::get('customer/orders/{id}', 'CustomerOrdersApiController@show');
    Route::get('customer/{customer_id}/orders', 'CustomerOrdersApiController@selectCustomerOrders');
    
    
    
    Route::fallback(function(){
        return response()->json([
            'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
    });
} );

Route::group(['middleware' => 'jwt.auth'], function(){
    Route::get('logout', 'APILoginController@logout');
    // users is a route protected by jwt
    Route::middleware('jwt.auth')->get('users', function () {
        return auth('api')->user();
    });
    Route::get('refresh', 'APILoginController@refresh')->name('api.jwt.refresh');
});
Route::post('login', 'APILoginController@login');

