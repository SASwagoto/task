<x-guest-layout>
    <!-- Forgot Password Tab Content -->
    <div class="account-content">
        <div class="row align-items-center justify-content-center">
            
            <div class="col-md-12 col-lg-6 login-right">
                <div class="login-header">
                    <h3>Forgot Password?</h3>
                    <p>No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group form-focus">
                        <input type="email" class="form-control floating" name="email" required autofocus>
                        <label class="focus-label">{{__('Email')}}</label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">{{ __('Email Password Reset Link') }}</button>
                    <div class="login-or">
                        <span class="or-line"></span>  
                    </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- /Forgot Password Tab Content -->
</x-guest-layout>
