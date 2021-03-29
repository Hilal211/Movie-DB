<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\ContentCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentCategoryRequest;
use App\Http\Requests\UpdateContentCategoryRequest;

class ContentCategoryApiController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.auth');
    }
    
    public function index()
    {
        $contentCategories = ContentCategory::all();

        return $contentCategories;
    }

    public function store(StoreContentCategoryRequest $request)
    {
        return ContentCategory::create($request->all());
    }

    public function update(UpdateContentCategoryRequest $request, ContentCategory $contentCategory)
    {
        return $contentCategory->update($request->all());
    }

    public function show(ContentCategory $contentCategory)
    {
        return $contentCategory;
    }

    public function destroy(ContentCategory $contentCategory)
    {
        return $contentCategory->delete();
    }
}
