@extends('layouts.admin')
@section('content')
@can('pages_with_no_repeated_field_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.pages-with-no-repeated-fields.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.pagesWithNoRepeatedField.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.pagesWithNoRepeatedField.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.short_history') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.about_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.about_subtitle') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.footer_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.social_media_facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.social_media_twitter') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.social_media_instagram') }}
                        </th>
                        <th>
                            {{ trans('cruds.pagesWithNoRepeatedField.fields.social_media_youtube') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagesWithNoRepeatedFields as $key => $pagesWithNoRepeatedField)
                        <tr data-entry-id="{{ $pagesWithNoRepeatedField->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->short_history ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->about_title ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->about_subtitle ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->footer_description ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->social_media_facebook ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->social_media_twitter ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->social_media_instagram ?? '' }}
                            </td>
                            <td>
                                {{ $pagesWithNoRepeatedField->social_media_youtube ?? '' }}
                            </td>
                            <td>
                                @can('pages_with_no_repeated_field_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.pages-with-no-repeated-fields.show', $pagesWithNoRepeatedField->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('pages_with_no_repeated_field_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.pages-with-no-repeated-fields.edit', $pagesWithNoRepeatedField->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('pages_with_no_repeated_field_delete')
                                    <form action="{{ route('admin.pages-with-no-repeated-fields.destroy', $pagesWithNoRepeatedField->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.pages-with-no-repeated-fields.massDestroy') }}",
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
@can('pages_with_no_repeated_field_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
