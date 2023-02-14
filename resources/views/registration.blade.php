@extends('layouts.app')

@section('title-block')
Registration

@endsection

@section('content')

<main class="form-signin  m-5 p-5">
    <h3>Registration !!!</h3>
    <form method="post" action="{{route('user.registration')}}">
        @csrf

        <img class="mb-4"
            src="https://avatars.mds.yandex.net/i?id=6c54a9bdeef48fc71e31ac0582589cb6-5344335-images-thumbs&n=13" alt=""
            width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control  border-success" id="floatingInput" placeholder="name@example.com" >
            <label for="floatingInput"> Email address</label>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-floating">
            <input type="password" class="form-control  border-success" id="floatingPassword" placeholder="Password" >
            <label for="floatingPassword"> Password</label>
            @error('password')
   
            <div class="alert alert-danger">{{$message}}</div>                       
            @enderror

        </div>
        <br>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">© 2023</p>
    </form>
</main>
@endsection