@extends('layouts.main')
@section('page.titel')
Объявление
@endsection
@section('main.content')
<div class="card mb-2 col-8 offset-md-1 ">
    <div class="card-body">
        <h1 class="title pt-3 ">@yield('page.titel')</h1>
        <h2 class="h4 pt-3  ">{{ $article->heading}}</h2>
        <div class="card-body">
            <div class="pt-3 ">
                <img src=" {{ asset($article->img) }}" class="w-50 p-3 h-25" />
            </div>
            <div class="pt-3">
                {{ $article->text}}
            </div>
            <div class="pt-3"><a href="{{ route('message', $article->id) }}"></a></div>
            <div class="text-right">{{ $article->author}}</div>
        </div>


        <div class="d-flex col-3 ">
            <div class="btn"><a href="{{ route('update', $article->id) }}"><button type="submit" class="btn btn-primary">Обнавить</button></a></div>
            <div class="btn mx-1"><a href="{{ route('list')}}"><button type="submit" class="btn btn-primary">назад</button></a></div>
        </div>
    </div>
    @endsection