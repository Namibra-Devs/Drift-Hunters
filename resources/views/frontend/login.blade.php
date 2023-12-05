@extends('frontend.layout')

@section('content')


    <!--   hero area start    -->
    <div class="login-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {{-- <a href="{{ route('front.checkout', ['type' => 'guest']) }}"
                        class="btn btn-block btn-primary mb-4 base-bg py-3 border-0">Checkout as Guest</a>

                    <div class="mt-4 mb-3 text-center">
                        <h3 class="mb-0"><strong>{{ __('OR') }},</strong></h3>
                    </div> --}}
                    {{-- <a href="{{session()->get('link') . '?type=guest'}}" class="btn btn-block btn-primary mb-4 base-bg py-3 border-0">Checkout as Guest</a>

                    <div class="mt-4 mb-3 text-center">
                        <h3 class="mb-0"><strong>{{__('OR')}},</strong></h3>
                    </div> --}}
                    <div class="login-content">
                        <div class="login-title text-center">
                            <h3 class="title">LOGIN</h3>
                        </div>
                        <form id="loginForm" action="{{ route('user.login') }}" method="POST">
                            @csrf
                            <div class="input-box">
                                <span>{{ __('Email') }} *</span>
                                <input type="email" name="email" value="{{ Request::old('email') }}" placeholder="Enter your user email">
                                @if (Session::has('err'))
                                    <p class="text-danger mb-2 mt-2">{{ Session::get('err') }}</p>
                                @endif
                                @error('email')
                                    <p class="text-danger mb-2 mt-2">{{ convertUtf8($message) }}</p>
                                @enderror
                            </div>
                            <div class="input-box mb-4">
                                <span>{{ __('Password') }} *</span>
                                <input type="password" name="password" value="{{ Request::old('password') }}" placeholder="Enter your user password">
                                @error('password')
                                    <p class="text-danger mb-2 mt-2">{{ convertUtf8($message) }}</p>
                                @enderror
                            </div>

                            <div class="input-btn">
                                <button type="submit" class="get-ticket-btn">{{ __('LOG IN') }}</button><br>
                                <p class="float-lg-right float-left">{{ __("Don't have an account ?") }} <a
                                        href="{{ route('user-register') }}">{{ __('Click Here') }}</a>
                                    {{ __('to create one.') }}</p>
                                <a class="mr-3" href="{{ route('user-forgot') }}">{{ __('Lost your password?') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   hero area end    -->
@endsection
