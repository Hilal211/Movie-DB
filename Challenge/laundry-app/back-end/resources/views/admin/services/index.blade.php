@extends('layouts.admin')
@section('content')
    @can('service_create')
        <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.services.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.service.title_singular') }}
            </a>
        </div>
    </div>
    @endcan
    <div class="card">
    <div class="card-header">
        {{ trans('cruds.service.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable">
            <thead>
                <tr>
                    <th style="width: 10px;">

                    </th>
                    <th>
                        {{ trans('cruds.service.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.image') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.description') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection
@section('scripts')
    @parent
    <script>
    $(function () {
        let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
        let deleteButton = {
            text: deleteButtonTrans,
            url: "{{ route('admin.services.massDestroy') }}",
            className: 'btn-danger',
            action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({selected: true}).data(), function (entry) {
                    return entry.id
                });
            
                if (ids.length === 0) {
                    alert('{{ trans('global.datatables.zero_selected') }}');
                
                    return
                }
            
                if (confirm('{{ trans('global.areYouSure') }}')) {
                    $.ajax({
                        headers: {'x-csrf-token': _token},
                        method: 'POST',
                        url: config.url,
                        data: {ids: ids, _method: 'DELETE'}
                    })
                        .done(function () {
                            location.reload()
                        })
                }
            }
        }
    
        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);
        @can('service_delete')
        dtButtons.push(deleteButton)
            @endcan
    
        let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.services.index') }}",
                columns: [
                    {data: 'placeholder', name: 'placeholder'},
                    {data: 'title', name: 'title'},
                    {data: 'image', name: 'image'},
                    {data: 'description', name: 'description'},
                    {data: 'actions', name: '{{ trans('global.actions') }}'}
                ],
            };
    
        $('.datatable').DataTable(dtOverrideGlobals);
    
    });

</script>
@endsection
