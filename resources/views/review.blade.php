@extends('layouts.app')

@section('title-block')
Review

@endsection

@section('content')
<div class="container p-5 m-5">
    <h1>Form send review !</h1>
    <!-- Check -->
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors ->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- form -->
    <form action="/review/check" method="post">
        @csrf

        <input class="form-control border-success" type="email" name="email" id="email" placeholder="Enter email"
            class="form-control"><br>

        <input class="form-control border-success" type="text" name="subject" id="subject" placeholder="Enter review"
            class="form-control"><br>

        <textarea class="form-control border-success" name="message" id="message" cols="80" rows="10"
            class="form-control" placeholder="Enter your text"></textarea><br>

        <button type="submit" class="btn btn-success w-2">Send</button>
    </form>

</div class="container p-5 ms-5">
<h1 >All Reviews: </h1>
@foreach($reviews as $element)
<div class="alert alert-warning p-4 m-4">
    <h3>{{ $element->subject}}</h3>
    <b>{{$element->email}}</b><br>
    <b>{{$element->message}}</b><br>
</div>

@endforeach
@endsection