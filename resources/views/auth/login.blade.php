<x-guest-layout>
    <!-- Login Tab Content -->
    <div class="account-content">
        <div class="row align-items-center justify-content-center">
            
            <div class="col-md-12 col-lg-6 login-right">
                <div class="login-header">
                    <h3>Login <span>Page</span></h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group form-focus">
                        <input type="email" class="form-control floating" name="email" required autofocus>
                        <label class="focus-label">{{__('Email')}}</label>
                    </div>
                    <div class="form-group form-focus">
                        <input type="password" class="form-control floating" name="password" required autofocus>
                        <label class="focus-label">{{__('Password')}}</label>
                    </div>
                    <div class="text-right">
                    @if (Route::has('password.request'))
                    <a class="forgot-link" href="{{ route('password.request') }}">{{ __('Forgot Password ?')}}</a>
                    @endif
                    </div>
                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                    <div class="login-or">
                        <span class="or-line"></span>  
                    </div>
                    @if (Route::has('register'))
                    <a class="btn btn-info btn-block btn-lg login-btn" href="{{ route('register') }}">Create New Account</a>
                    @endif
                    </form>
            </div>
        </div>
    </div>
    <!-- /Login Tab Content -->
</x-guest-layout>
