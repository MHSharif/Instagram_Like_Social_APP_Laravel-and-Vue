@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="Title" class="col-md-4 col-form-label">Title</label>

                    <input id="Title" type="text" class="form-control{{ $errors->has('Title') ? ' is-invalid' : '' }}" name="title" value="{{ old('Title') ?? $user->profile->title }}" autocomplete="Title" autofocus>

                    @if ($errors->has('Title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Title') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="Description" class="col-md-4 col-form-label">Description</label>

                    <input id="Description" type="text" class="form-control{{ $errors->has('Description') ? ' is-invalid' : '' }}" name="description" value="{{ old('Description')?? $user->profile->description }}" autocomplete="Description" autofocus>

                    @if ($errors->has('Description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Description') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="URL" class="col-md-4 col-form-label">URL</label>

                    <input id="URL" type="text" class="form-control{{ $errors->has('URL') ? ' is-invalid' : '' }}" name="url" value="{{ old('URL')?? $user->profile->url }}" autocomplete="URL" autofocus>

                    @if ($errors->has('URL'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('URL') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Picture</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                    <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>





                <div class="row pt-4">
                    <button class="btn btn-primary">Save Update</button>
                </div>

            </div>
        </div>
    </form>

</div>
@endsection