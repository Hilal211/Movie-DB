<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorepagesWithNoRepeatedFieldRequest;
use App\Http\Requests\UpdatepagesWithNoRepeatedFieldRequest;
use App\PagesWithNoRepeatedFields;

/**
 * @group Pages with no Repeated field management
 *
 * APIs for managing Page with no Repeated fields
 */
class pagesWithNoRepeatedFieldsApiController extends Controller {
    /**
     * Fetch the list of all pages with no Repeated fields
     *
     * This api route return all the pages with no repeated fields in the database.
     *
     */
    public function index() {
        $pagesWithNoRepeatedFields = PagesWithNoRepeatedFields::all();
        
        return $pagesWithNoRepeatedFields;
    }
    
    /**
     * Store a new pages with no repeated fields inside the database
     *
     * @bodyParam history string The history field.
     * @bodyParam short_history string The short history field.
     * @bodyParam short_history string The short history field.
     * @bodyParam about_title string The about title field.
     * @bodyParam about_subtitle string The about sub-title field.
     * @bodyParam footer_description string The footer description field.
     * @bodyParam social_media_facebook string The facebook link field.
     * @bodyParam social_media_twitter string The twitter link field.
     * @bodyParam social_media_instagram string The instagram link field.
     * @bodyParam social_media_youtube string The youtube link field.
     *
     */
    public function store( StorepagesWithNoRepeatedFieldRequest $request ) {
        return PagesWithNoRepeatedFields::create( $request->all() );
    }
    
    /**
     * Update an existing pages with no repeated fields inside the database
     *
     * @bodyParam history string The history field.
     * @bodyParam short_history string The short history field.
     * @bodyParam short_history string The short history field.
     * @bodyParam about_title string The about title field.
     * @bodyParam about_subtitle string The about sub-title field.
     * @bodyParam footer_description string The footer description field.
     * @bodyParam social_media_facebook string The facebook link field.
     * @bodyParam social_media_twitter string The twitter link field.
     * @bodyParam social_media_instagram string The instagram link field.
     * @bodyParam social_media_youtube string The youtube link field.
     *
     */
    public function update( UpdatepagesWithNoRepeatedFieldRequest $request, PagesWithNoRepeatedFields $pagesWithNoRepeatedFields ) {
        return $pagesWithNoRepeatedFields->update( $request->all() );
    }
    
    /**
     * List the details of 1 pages with no repeated fields by providing the page id <br/>
     */
    public function show( PagesWithNoRepeatedFields $pagesWithNoRepeatedFields ) {
        return $pagesWithNoRepeatedFields;
    }
    
    /**
     * Completely delete pages with no repeated fields by providing 1 page id per time
     *  /api/v1/services/{service} where service is an integer
     */
    public function destroy( PagesWithNoRepeatedFields $pagesWithNoRepeatedFields ) {
        $pagesWithNoRepeatedFields->delete();
        
        return response( "OK", 200 );
    }
}
