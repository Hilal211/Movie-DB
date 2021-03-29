@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.itemsType.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.items-types.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('cruds.itemsType.fields.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($itemsType) ? $itemsType->title : '') }}" required>
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.itemsType.fields.title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">{{ trans('cruds.itemsType.fields.price') }}*</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', isset($itemsType) ? $itemsType->price : '') }}" step="0.01" required>
                @if($errors->has('price'))
                    <em class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.itemsType.fields.price_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label for="image">{{ trans('cruds.itemsType.fields.image') }}*</label>
                <div class="needsclick dropzone" id="image-dropzone">

                </div>
                @if($errors->has('image'))
                    <em class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.itemsType.fields.image_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection


@section('scripts')
    <script>
    Dropzone.options.imageDropzone = {
        url: '{{ route('admin.items-types.storeMedia') }}',
        maxFilesize: 2, // MB
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        maxFiles: 1,
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        params: {
            size: 2,
            width: 4096,
            height: 4096
        },
        success: function (file, response) {
            $('form').find('input[name="image"]').remove()
            $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
        },
        removedfile: function (file) {
            file.previewElement.remove()
            $('form').find('input[name="image"]').remove()
            this.options.maxFiles = this.options.maxFiles + 1
        },
        init: function () {
                @if(isset($itemsType) && $itemsType->image)
            var file = {!! json_encode($itemsType->image) !!}
                    this.options.addedfile.call(this, file)
            this.options.thumbnail.call(this, file, file.url)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
            this.options.maxFiles = this.options.maxFiles - 1
            @endif
        },
        error: function (file, response) {
            if ($.type(response) === 'string') {
                var message = response //dropzone sends it's own error messages in string
            } else {
                var message = response.errors.file
            }
            file.previewElement.classList.add('dz-error')
            _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
            _results = []
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i]
                _results.push(node.textContent = message)
            }
        
            return _results
        }
    }
</script>
@stop
