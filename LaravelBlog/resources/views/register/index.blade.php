@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration  w-100 m-auto">
            <form>
                <div class="row justify-content-center">
                    <img class="col-md-7 text-center" src="img/img2.jpg" alt="">
                    <h3 class="h3 mb-2 fw-normal text-center">Registration Form</h3>
                </div>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control" id="username" placeholder="username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="w-100 mt-4 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">All ready registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection
