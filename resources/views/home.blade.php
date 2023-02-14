@extends('layouts.app')

@section('title-block')
Home

@endsection

@section('content')
<div class="conteiner p-5 m-5 ">
    <h1>Home</h1>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis maxime fugit cumque quaerat, voluptatum
        sapiente,
        quos suscipit aspernatur error dolore veniam atque voluptate optio a sunt amet ipsum iure illum?</p>

</div>


@endsection

@section('aside')
@parent
<p>Дополнительный текст</p>
@endsection