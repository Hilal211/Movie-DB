<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('contact_access'), 403);

        $contacts = Contact::all();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('contact_create'), 403);

        return view('admin.contacts.create');
    }

    public function store(StoreContactRequest $request)
    {
        abort_unless(\Gate::allows('contact_create'), 403);

        $contact = Contact::create($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function edit(Contact $contact)
    {
        abort_unless(\Gate::allows('contact_edit'), 403);

        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        abort_unless(\Gate::allows('contact_edit'), 403);

        $contact->update($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function show(Contact $contact)
    {
        abort_unless(\Gate::allows('contact_show'), 403);

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        abort_unless(\Gate::allows('contact_delete'), 403);

        $contact->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactRequest $request)
    {
        Contact::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
