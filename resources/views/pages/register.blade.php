@extends('layouts.main')

@section('title', 'Register - Divesio')

@section('section')

    <section class="section-gap info-area ">
            <div class="container d-flex text-center">
            <main class="form-signin login-wrapper">
        <form>
            <h1 class="h3 mb-5">Register</h1>
            <label for="inputEmail" class="visually-hidden">Name</label>
            <input type="text" id="inputEmail" class="form-control mb-3" placeholder="Full Name" required autofocus>
            <label for="inputEmail" class="visually-hidden">Email</label>
            <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="visually-hidden">Confirm Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="w-100 mt-30 mb-3 btn btn-lg btn-primary" type="submit">Register</button>
            <hr>
            <p>Already have account? <a href="{{url('/login')}}">Login</a></p>
            <p class="mt-5 mb-3 text-muted">&copy; Divesio, 2021</p>
        </form>
    </main>
            </div>
        </section>
        <!-- End about Area -->

        @endsection