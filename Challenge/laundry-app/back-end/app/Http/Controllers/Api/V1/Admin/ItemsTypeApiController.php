<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreItemsTypeRequest;
use App\Http\Requests\UpdateItemsTypeRequest;
use App\ItemsType;
use stdClass;

/**
 * @group Items type management
 *
 * APIs for managing items type
 */
class ItemsTypeApiController extends Controller
{
    use MediaUploadingTrait;
    
    public function __construct() {
        $this->middleware('jwt.auth');
    }
    
    /**
     * Fetch the list of all the available item types
     *
     * This api route return all the available item types in the database.
     *
     */
    public function index()
    {
        $itemsTypes    = ItemsType::all();
        $new_itemTypes = [];
        foreach ( $itemsTypes as $items_type ) {
            $new_itemType             = new stdClass();
            $new_itemType->id         = $items_type->id;
            $new_itemType->title      = $items_type->title;
            $new_itemType->price      = $items_type->price;
            $new_itemType->image      = $items_type->image;
            $new_itemType->created_at = $items_type->created_at;
            $new_itemType->updated_at = $items_type->updated_at;
            $new_itemType->deleted_at = $items_type->deleted_at;
    
            if ( $items_type->hasImageAttribute() ) {
                $image                   = $items_type->getImageAttribute()->url;
                $new_itemType->image_url = url( $image );
            }
    
            $new_itemTypes[] = $new_itemType;
    
        }

//
        return apiResponse( $new_itemTypes );
    }
    
    /**
     * Store a new order inside the database
     *
     * @bodyParam title string required The item type title.
     * @bodyParam price money required The item type title, number format should be with no more than 2 leading number after the decimal, 12.22 222,22.
     *
     */
    public function store( StoreItemsTypeRequest $request )
    {
        $itemsType = ItemsType::create( $request->all() );
        if ( $request->hasFile( 'image' ) ) {
        
            $media = $this->storeMediaFromAPI( $request, 'image' );
            if ( $media ) {
                $itemsType->addMedia( storage_path( 'tmp/uploads/' . $media['name'] ) )->toMediaCollection( 'image' );
            }
        }
    
        $new_itemType             = new stdClass();
        $new_itemType->id         = $itemsType->id;
        $new_itemType->title      = $itemsType->title;
        $new_itemType->price      = $itemsType->price;
        $new_itemType->image      = $itemsType->image;
        $new_itemType->created_at = $itemsType->created_at;
        $new_itemType->updated_at = $itemsType->updated_at;
        $new_itemType->deleted_at = $itemsType->deleted_at;
    
        if ( $itemsType->hasImageAttribute() ) {
            $image                   = $itemsType->getImageAttribute()->url;
            $new_itemType->image_url = url( $image );
        }
    
    
        return apiResponse( $new_itemType );
    }
    
    /**
     * Update am existing item type inside the database
     *
     * @bodyParam title string required The item type title.
     * @bodyParam price money required The item type title, number format should be with no more than 2 leading number after the decimal, 12.22 222,22.
     *
     */
    public function update(UpdateItemsTypeRequest $request, ItemsType $itemsType)
    {
//        dd( );
        return apiResponse( $request->all() );
        $update = $itemsType->update( $request->all() );

//        dd($request->files);
        if ( $request->hasFile( 'image' ) ) {
        
            $media = $this->storeMediaFromAPI( $request, 'image' );
            if ( $media ) {
                $itemsType->addMedia( storage_path( 'tmp/uploads/' . $media['name'] ) )->toMediaCollection( 'image' );
            }
        }
    
    
        $new_itemType             = new stdClass();
        $new_itemType->id         = $itemsType->id;
        $new_itemType->title      = $itemsType->title;
        $new_itemType->price      = $itemsType->price;
        $new_itemType->image      = $itemsType->image;
        $new_itemType->created_at = $itemsType->created_at;
        $new_itemType->updated_at = $itemsType->updated_at;
        $new_itemType->deleted_at = $itemsType->deleted_at;
    
        if ( $itemsType->hasImageAttribute() ) {
            $image                   = $itemsType->getImageAttribute()->url;
            $new_itemType->image_url = url( $image );
        }
    
        return apiResponse( $new_itemType, $update );
    }
    
    /**
     * List the details of 1 item type<br/>
     */
    public function show( $id )
    {
        $itemsType = ItemsType::find( $id );
    
        if ( $itemsType === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database'
            ) );
        } else {
            $new_itemType             = new stdClass();
            $new_itemType->id         = $itemsType->id;
            $new_itemType->title      = $itemsType->title;
            $new_itemType->price      = $itemsType->price;
            $new_itemType->image      = $itemsType->image;
            $new_itemType->created_at = $itemsType->created_at;
            $new_itemType->updated_at = $itemsType->updated_at;
            $new_itemType->deleted_at = $itemsType->deleted_at;
    
            if ( $itemsType->hasImageAttribute() ) {
                $image                   = $itemsType->getImageAttribute()->url;
                $new_itemType->image_url = url( $image );
            }
    
    
            return apiResponse( $new_itemType );
        }
    }
    
    /**
     * Completely delete an item type by providing the item type id
     */
    public function destroy( $id )
    {
        $itemsType = ItemsType::find( $id );
    
        if ( $itemsType === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database',
            ) );
        } else {
            return apiResponse( null, $itemsType->delete() );
        }
    }
}
