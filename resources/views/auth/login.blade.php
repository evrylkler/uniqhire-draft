@extends('mainLayout')

@section('page-title', 'UniqHire Login')

@section('auth-content')
<div class="main-content container">
    <div class="row custom-row">
        <div class="col left">
            <div class="d-flex justify-content-center mb-5">
                <img src="../images/logo.png" alt="Logo" class="logo-img">
            </div>
            <div>
                <h1>Sign in.</h1>
            </div>
            <div class="mb-3">
                Don't have an account?
                <a href="{{ route('register') }}" class="link-underline link-underline-opacity-0">Create Account</a>
            </div>
            <form action="">
                <div class="form-floating mb-3">
                    <input type="email" class="auth-labels form-control" id="floatingInput" placeholder="Email">
                    <label for="floatingInput">Email Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="auth-labels form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="" class="link-underline link-underline-opacity-0">Forget Password?</a>
                    </div>
                </div>
                <div class="">
                    <button class="btn-color border-0">Sign In</button>
                </div>            
            </form>
            
        </div>
        <div class="col side-image">
            <!-- <img src="../images/login-img.jpg" alt="Login Page" class="login-img"> -->
        </div>
        
    </div>
</div>

@endsection