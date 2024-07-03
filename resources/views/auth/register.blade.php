@extends('mainLayout')

@section('page-title', 'Create Account')

@section('auth-content')
<div class="container">
    <div class="row">
        <div class="col left">
            <div class="d-flex justify-content-center mb-5">
                <img src="../images/logo.png" alt="Logo" class="logo-img">
            </div>
            <div class="row">
                <div class="col text-start">
                    <h1>Create Account.</h1>
                </div>
                <div class="col text-end">
                    <label for="role-name">Register As</label>
                    <select name="role-name" id="">
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="col side-image">
                <!-- <img src="../images/login-img.jpg" alt="Login Page" class="login-img"> -->
        </div>
    </div>
</div>
@endsection
