@extends('layouts.base')
@section('page.titel')
Объявление
@endsection
@section('content')
<section>
    <duv class="container">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-3 py-5 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-0">@yield('page.titel')</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert-dang">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('updatesubmit', $article->id) }}" method="post">
                            @csrf
                            <div class="mb-3 ">
                                <label>{{_('Заголовак')}}</label>
                                <input name="heading" value="{{$article->heading}}" type="text" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label>{{_('Ссылка на изображения')}}</label>
                                <input name="img" value="{{$article->img}}" class=" form-control">

                            </div>
                            <div class="mb-3">
                                <label>{{_('Текст')}}</label>
                                <textarea name="text" class=" form-control" rows="10">"{{$article->text}}"</textarea>

                            </div>
                            <div class=" mb-3">
                                <label>{{_('Автор')}}</label>
                                <input name="author" value="{{ $article->author}}" class=" form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">{{_('Редактировать')}} </button>
                    </div>
                </div>
                </form>
            </div>
    </duv>
</section>
@endsection