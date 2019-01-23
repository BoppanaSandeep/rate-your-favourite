@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-8 col-xl-5 my-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                     @if (count($errors) > 0)
                    <ul style="list-style-type: none;padding-left: 0px;text-align: center;margin-bottom: 20px;">
                      @foreach($errors->all() as $error)
                        <li style="font-size:13px;color: #F44336;font-weight: bold;">{!! $error !!}</li>
                      @endforeach
                    </ul>
                  @else
                    <ul style="list-style-type: none;padding-left: 0px;text-align: center;margin-bottom: 20px;">
                        <li style="font-size:13px;color: rgb(245, 7, 51);font-weight: bold;">&nbsp;</li>
                    </ul>
                  @endif
                    <form method="POST" action="{{ URL('authen') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ URL('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
