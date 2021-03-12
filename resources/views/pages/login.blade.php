@extends('layouts.main')

@section('title', 'Login - Divesio')

@section('section')

    <section class="section-gap info-area " id="artikel ">
            <div class="container d-flex text-center">
            <main class="form-signin login-wrapper">
        <form>
            <h1 class="h3 mb-5">Login</h1>
            <label for="inputEmail" class="visually-hidden">Email</label>
            <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
        <input type="checkbox" value="remember-me">Remember me
      </label>
            </div>
            <button class="w-100 mb-3 btn btn-lg btn-primary" type="submit">Login</button>
            <hr>
            <p>Or</p>
            <a class="w-60 mb-3 btn btn-lg btn-success" href="{{url('/register')}}">Create New Account</a>
            <p class="mt-5 mb-3 text-muted">&copy; Divesio, 2021</p>
        </form>
    </main>
            </div>
        </section>
        <!-- End about Area -->

@endsection