@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.contacts.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                <label for="subject">{{ trans('cruds.contact.fields.subject') }}*</label>
                <input type="text" id="subject" name="subject" class="form-control" value="{{ old('subject', isset($contact) ? $contact->subject : '') }}" required>
                @if($errors->has('subject'))
                    <em class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.subject_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                <label for="message">{{ trans('cruds.contact.fields.message') }}*</label>
                <textarea id="message" name="message" class="form-control " required>{{ old('message', isset($contact) ? $contact->message : '') }}</textarea>
                @if($errors->has('message'))
                    <em class="invalid-feedback">
                        {{ $errors->first('message') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.message_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">{{ trans('cruds.contact.fields.email') }}*</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', isset($contact) ? $contact->email : '') }}" required>
                @if($errors->has('email'))
                    <em class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.contact.fields.email_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection