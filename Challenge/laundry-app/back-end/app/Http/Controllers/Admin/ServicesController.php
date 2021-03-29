<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyServiceRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Service;
use Gate;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServicesController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Service::query()->select('*');

            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'service_show';
                $editGate      = 'service_edit';
                $deleteGate    = 'service_delete';
                $crudRoutePart = 'services';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : "";
            });
            $table->editColumn('image', function ($row) {
                return $row->image ? '<a href="' . $row->image->getUrl() . '" target="_blank"><img src="' . $row->image->getUrl('thumb') . '" width="50px" height="50px"></a>' : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->rawColumns(['actions', 'placeholder', 'image']);

            return $table->make(true);
        }

        return view('admin.services.index');
    }

    public function create()
    {
        abort_unless(Gate::allows('service_create'), 403);

        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        abort_unless(Gate::allows('service_create'), 403);

        $service = Service::create($request->all());

        if ($request->input('image', false)) {
            $service->addMedia(storage_path('tmp/uploads/' . $request->input('image')))->toMediaCollection('image');
        }

        return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
        abort_unless(Gate::allows('service_edit'), 403);

        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        abort_unless(Gate::allows('service_edit'), 403);

        $service->update($request->all());

        if ($request->input('image', false)) {
            if (!$service->image || $request->input('image') !== $service->image->file_name) {
                $service->addMedia(storage_path('tmp/uploads/' . $request->input('image')))->toMediaCollection('image');
            }
        } elseif ($service->image) {
            $service->image->delete();
        }

        return redirect()->route('admin.services.index');
    }

    public function show(Service $service)
    {
        abort_unless(Gate::allows('service_show'), 403);

        return view('admin.services.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        abort_unless(Gate::allows('service_delete'), 403);
    
        try {
            $service->delete();
        } catch ( \Exception $e ) {
        }
    
        return back();
    }

    public function massDestroy(MassDestroyServiceRequest $request)
    {
        Service::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
