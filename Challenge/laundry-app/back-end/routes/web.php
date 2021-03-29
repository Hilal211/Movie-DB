<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => true]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('orders/destroy', 'OrdersController@massDestroy')->name('orders.massDestroy');

    Route::resource('orders', 'OrdersController');

    Route::delete('items-types/destroy', 'ItemsTypeController@massDestroy')->name('items-types.massDestroy');

    Route::resource('items-types', 'ItemsTypeController');
    
    Route::post('items-types/media', 'ItemsTypeController@storeMedia')->name('items-types.storeMedia');

    Route::delete('order-items/destroy', 'OrderItemsController@massDestroy')->name('order-items.massDestroy');

    Route::resource('order-items', 'OrderItemsController');

    Route::delete('audit-logs/destroy', 'AuditLogsController@massDestroy')->name('audit-logs.massDestroy');

    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');

    Route::resource('content-categories', 'ContentCategoryController');

    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');

    Route::resource('content-tags', 'ContentTagController');

    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');

    Route::resource('content-pages', 'ContentPageController');

    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');

    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');

    Route::resource('contacts', 'ContactsController');
    
    Route::delete('services/destroy', 'ServicesController@massDestroy')->name('services.massDestroy');
    
    Route::resource('services', 'ServicesController');
    
    Route::post('services/media', 'ServicesController@storeMedia')->name('services.storeMedia');
    
    Route::delete('sliders/destroy', 'SlidersController@massDestroy')->name('sliders.massDestroy');
    
    Route::resource('sliders', 'SlidersController');
    
    Route::post('sliders/media', 'SlidersController@storeMedia')->name('sliders.storeMedia');
    
    Route::delete('pages-with-no-repeated-fields/destroy', 'PagesWithNoRepeatedFieldsController@massDestroy')->name('pages-with-no-repeated-fields.massDestroy');
    
    Route::resource('pages-with-no-repeated-fields', 'PagesWithNoRepeatedFieldsController');
});
