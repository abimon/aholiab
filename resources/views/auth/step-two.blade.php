@extends('layouts.app',['title'=>'Bio Data'])

@section('content')
<div class="container-fluid m-3 row d-flex justify-content-center">
    <div class="col-10 card">
        <h1 class="card-header text-center">{{ __('Register') }}</h1>

        <div class="card-body">
            <form method="POST" action="{{ route('user.update',Auth()->user()->id) }}" class="row">
                @csrf
                @method('PUT')
                <p class="text-center">* Required Fields</p>
                <div class="col-md-6 row mb-3">
                    <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name*') }}</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                        @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="mname" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                    <div class="col-md-8">
                        <input id="name" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" autocomplete="mname" autofocus>

                        @error('mname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name*') }}</label>

                    <div class="col-md-8">
                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                        @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number*') }}</label>

                    <div class="col-md-8">
                        <input id="contact" type="contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact">

                        @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="facebook" class="col-md-4 col-form-label text-md-end">{{ __('Facebook URL') }}</label>

                    <div class="col-md-8">
                        <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" autocomplete="facebook">

                        @error('facebook')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="linkedin" class="col-md-4 col-form-label text-md-end">{{ __('Linkedin URL') }}</label>

                    <div class="col-md-8">
                        <input id="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ old('linkedin') }}" autocomplete="linkedin">

                        @error('linkedin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="twitter" class="col-md-4 col-form-label text-md-end">{{ __('Twitter URL') }}</label>

                    <div class="col-md-8">
                        <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}" autocomplete="twitter">

                        @error('twitter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 row mb-3">
                    <label for="instagram" class="col-md-4 col-form-label text-md-end">{{ __('Instagram URL') }}</label>

                    <div class="col-md-8">
                        <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}" autocomplete="instagram">

                        @error('instagram')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save & Proceed') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection