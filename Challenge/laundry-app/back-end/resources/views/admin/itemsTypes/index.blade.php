@extends('layouts.admin')
@section('content')
@can('items_type_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.items-types.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.itemsType.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.itemsType.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.itemsType.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.itemsType.fields.price') }}
                        </th>
                        <th>
                              {{ trans('cruds.itemsType.fields.image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($itemsTypes as $key => $itemsType)
                        <tr data-entry-id="{{ $itemsType->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $itemsType->title ?? '' }}
                            </td>
                            <td>
                                {{ $itemsType->price ?? '' }}
                            </td>
                            <td>
                                @if($itemsType->image)
                                    <a href="{{ $itemsType->image->getUrl() }}" target="_blank">
                                        <img src="{{ $itemsType->image->getUrl('thumb') }}" width="50px" height="50px">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('items_type_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.items-types.show', $itemsType->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('items_type_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.items-types.edit', $itemsType->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('items_type_delete')
                                    <form action="{{ route('admin.items-types.destroy', $itemsType->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.items-types.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('items_type_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection

