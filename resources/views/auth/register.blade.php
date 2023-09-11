<x-guest-layout>
 <!-- Register Tab Content -->
 <div class="account-content">
        <div class="row align-items-center justify-content-center">
            
            <div class="col-md-12 col-lg-6 login-right">
                <div class="login-header">
                    <h3>Register <span>Page</span></h3>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group form-focus">
                        <input type="name" class="form-control floating" name="name" required autofocus>
                        <label class="focus-label">{{__('Name')}}</label>
                    </div>
                    <div class="form-group form-focus">
                        <input type="email" class="form-control floating" name="email" required autofocus>
                        <label class="focus-label">{{__('Email')}}</label>
                    </div>
                    <div class="form-group form-focus">
                        <input type="password" class="form-control floating" name="password" required autofocus> 
                        <label class="focus-label">{{__('Password')}}</label>
                    </div>
                    <div class="form-group form-focus">
                        <input type="password" class="form-control floating" name="password_confirmation" required autofocus>
                        <label class="focus-label">{{__('Confirm Password')}}</label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">{{ __('Signup')}}</button>
                    <div class="login-or">
                        <span class="or-line"></span>  
                    </div>
                    <a class="btn btn-info btn-block btn-lg login-btn" href="{{ route('login') }}">{{ __('Already Have an Account?')}}</a>
                    </form>
            </div>
        </div>
    </div>
    <!-- Rergister Tab Content -->
</x-guest-layout>
