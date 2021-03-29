<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

/**
 * @group Contact management
 *
 * APIs for managing contacts
 */
class ContactsApiController extends Controller {
    
    public function __construct() {
        $this->middleware( 'jwt.auth' )->except( [ 'store' ] );
    }
    
    /**
     * Fetch the list of all contacts
     *
     * This api route return all the contacts in the database without the deleted one
     *
     */
    public function index() {
        $contacts = Contact::all();
        
        return apiResponse( $contacts );
    }
    
    /**
     * Store a contact request inside the database and send email to the administrators
     *
     * The email functionality
     *
     * @bodyParam subject string required The subject of the contact form.
     * @bodyParam message string required The message of the contact form.
     * @bodyParam email string required The user email.
     * @bodyParam name string The user name.
     * @bodyParam address string The user address
     * @bodyParam phone_number string The user phone number
     *
     */
    public function store( StoreContactRequest $request ) {
        return apiResponse( Contact::create( $request->all() ) );
    }
    
    /**
     * Update a contact request inside the database
     *
     * This functionality is to be used in the admin panel <br/>
     * For the {contact} pass the contact id
     *
     * @bodyParam subject string required The subject of the contact form.
     * @bodyParam message string required The message of the contact form.
     * @bodyParam email required string The user email who submitted the contact form
     * @bodyParam name string The user name.
     * @bodyParam address string The user address
     * @bodyParam phone_number string The user phone number
     */
    public function update( UpdateContactRequest $request, Contact $contact ) {
        
        $update = $contact->update( $request->all() );
        
        return apiResponse( $contact, $update );
    }
    
    /**
     * Fetch 1 contact per contact id
     *
     * This functionality is to be used in the admin panel <br/>
     * For the {contact} pass the contact id
     *
     */
    public function show( $id ) {
        $contact = Contact::find( $id );
        
        if ( $contact === null ) {
            return apiResponse( null, false, array(
                'Id not found in the database'
            ) );
        } else {
            return apiResponse( $contact );
        }
    }
    
    /**
     * Completely delete a contact request inside the database
     *
     * This functionality is to be used in the admin panel <br/>
     * For the {contact} pass the contact id
     *
     */
    public function destroy( $id ) {
        $contact = Contact::find( $id );
        
        if ( $contact === null ) {
            return apiResponse( null, false, array(
                'Id not found in  the database'
            ) );
        } else {
            return apiResponse( null, $contact->delete() );
        }
    }
}
