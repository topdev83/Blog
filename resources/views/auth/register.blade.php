@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <img class="logo-image" src="/img/logo.jpeg" alt="logo image">
        </div>
    </div>
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="auth-header">{{ __('Join as Artist') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->

                        <div class="offset-md-3 col-md-6">
                            <input id="name" type="text" placeholder="Name"  class="rounded-form form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                        <div class="offset-md-3 col-md-6">
                            <input id="email" placeholder="Email"
                             type="email" class="rounded-form form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                        <div class="offset-md-3 col-md-6">
                            <input id="password" placeholder="Password" type="password" class="rounded-form form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->

                        <div class="offset-md-3 col-md-6">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="rounded-form form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="offset-md-3 col-md-6 d-flex justify-content-center w-100">
                            <button type="submit" class="btn btn-create">
                                {{ __('Create Account') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
