<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroypagesWithNoRepeatedFieldRequest;
use App\Http\Requests\StorePagesWithNoRepeatedFieldRequest;
use App\Http\Requests\UpdatepagesWithNoRepeatedFieldRequest;
use App\PagesWithNoRepeatedFields;
use Gate;

class PagesWithNoRepeatedFieldsController extends Controller
{
    public function index()
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_access'), 403);

        $pagesWithNoRepeatedFields = PagesWithNoRepeatedFields::all();

        return view('admin.pagesWithNoRepeatedFields.index', compact('pagesWithNoRepeatedFields'));
    }

    public function create()
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_create'), 403);

        return view('admin.pagesWithNoRepeatedFields.create');
    }

    public function store(StorePagesWithNoRepeatedFieldRequest $request)
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_create'), 403);

        PagesWithNoRepeatedFields::create($request->all());

        return redirect()->route('admin.pages-with-no-repeated-fields.index');
    }

    public function edit(PagesWithNoRepeatedFields $pagesWithNoRepeatedFields)
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_edit'), 403);

        return view('admin.pagesWithNoRepeatedFields.edit', compact('pagesWithNoRepeatedFields'));
    }

    public function update(UpdatepagesWithNoRepeatedFieldRequest $request, PagesWithNoRepeatedFields $pagesWithNoRepeatedFields)
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_edit'), 403);

        $pagesWithNoRepeatedFields->update($request->all());

        return redirect()->route('admin.pages-with-no-repeated-fields.index');
    }

    public function show(PagesWithNoRepeatedFields $pagesWithNoRepeatedFields)
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_show'), 403);

        return view('admin.pagesWithNoRepeatedFields.show', compact('pagesWithNoRepeatedFields'));
    }

    public function destroy(PagesWithNoRepeatedFields $pagesWithNoRepeatedFields)
    {
        abort_unless(Gate::allows('pages_with_no_repeated_field_delete'), 403);

        $pagesWithNoRepeatedFields->delete();

        return back();
    }

    public function massDestroy(MassDestroypagesWithNoRepeatedFieldRequest $request)
    {
        PagesWithNoRepeatedFields::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
