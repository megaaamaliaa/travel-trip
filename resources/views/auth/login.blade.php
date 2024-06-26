@extends('layouts.login')

@section('content')

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                        {{-- <div class="row mb-0"> --}}
                            <div class="col-md-8 offset-md-4 mt-5">
                                <button type="submit" class="btn btn-login">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        {{-- </div> --}}
                    </form>

                     <form class="col-md-8 offset-md-4 mt-5">
                        @csrf
                        <a
                        onclick="event.preventDefault(); location.href='{{url('register') }}';">
                        Don't have account?
                     </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
 </main>

@endsection
