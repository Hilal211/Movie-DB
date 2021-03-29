<?php

namespace App\Http\Controllers\Admin;

use App\ContentCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContentCategoryRequest;
use App\Http\Requests\StoreContentCategoryRequest;
use App\Http\Requests\UpdateContentCategoryRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContentCategoryController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('content_category_access'), 403);

        $contentCategories = ContentCategory::all();

        return view('admin.contentCategories.index', compact('contentCategories'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('content_category_create'), 403);

        return view('admin.contentCategories.create');
    }

    public function store(StoreContentCategoryRequest $request)
    {
        abort_unless(\Gate::allows('content_category_create'), 403);

        $contentCategory = ContentCategory::create($request->all());

        return redirect()->route('admin.content-categories.index');
    }

    public function edit(ContentCategory $contentCategory)
    {
        abort_unless(\Gate::allows('content_category_edit'), 403);

        return view('admin.contentCategories.edit', compact('contentCategory'));
    }

    public function update(UpdateContentCategoryRequest $request, ContentCategory $contentCategory)
    {
        abort_unless(\Gate::allows('content_category_edit'), 403);

        $contentCategory->update($request->all());

        return redirect()->route('admin.content-categories.index');
    }

    public function show(ContentCategory $contentCategory)
    {
        abort_unless(\Gate::allows('content_category_show'), 403);

        return view('admin.contentCategories.show', compact('contentCategory'));
    }

    public function destroy(ContentCategory $contentCategory)
    {
        abort_unless(\Gate::allows('content_category_delete'), 403);

        $contentCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyContentCategoryRequest $request)
    {
        ContentCategory::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
