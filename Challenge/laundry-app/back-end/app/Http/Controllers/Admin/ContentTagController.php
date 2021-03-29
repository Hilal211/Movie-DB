<?php

namespace App\Http\Controllers\Admin;

use App\ContentTag;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContentTagRequest;
use App\Http\Requests\StoreContentTagRequest;
use App\Http\Requests\UpdateContentTagRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContentTagController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('content_tag_access'), 403);

        $contentTags = ContentTag::all();

        return view('admin.contentTags.index', compact('contentTags'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('content_tag_create'), 403);

        return view('admin.contentTags.create');
    }

    public function store(StoreContentTagRequest $request)
    {
        abort_unless(\Gate::allows('content_tag_create'), 403);

        $contentTag = ContentTag::create($request->all());

        return redirect()->route('admin.content-tags.index');
    }

    public function edit(ContentTag $contentTag)
    {
        abort_unless(\Gate::allows('content_tag_edit'), 403);

        return view('admin.contentTags.edit', compact('contentTag'));
    }

    public function update(UpdateContentTagRequest $request, ContentTag $contentTag)
    {
        abort_unless(\Gate::allows('content_tag_edit'), 403);

        $contentTag->update($request->all());

        return redirect()->route('admin.content-tags.index');
    }

    public function show(ContentTag $contentTag)
    {
        abort_unless(\Gate::allows('content_tag_show'), 403);

        return view('admin.contentTags.show', compact('contentTag'));
    }

    public function destroy(ContentTag $contentTag)
    {
        abort_unless(\Gate::allows('content_tag_delete'), 403);

        $contentTag->delete();

        return back();
    }

    public function massDestroy(MassDestroyContentTagRequest $request)
    {
        ContentTag::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
