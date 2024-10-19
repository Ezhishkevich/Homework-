@extends('layouts.base')
@section('page.titel')
Создание Объявлений
@endsection
@section('content')


<section>
    <duv class="container">
        <div class="row">
            <div class="col-8 col-md-5 offset-md-3 py-5 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-0">@yield('page.titel')</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('сreatesubmit') }}" method="post">
                            @csrf
                            <div class="mb-3 ">
                                <label>{{_('Заголовок')}}</label>
                                <input name="heading" type="text" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label>{{_('Текст')}}</label>
                                <textarea name="text" class=" form-control"></textarea>
                                <div class=" mb-3">
                                    <label>{{_('Автор')}}</label>
                                    <input name="author" class=" form-control">
                                </div>
                                <div class=" mb-3">
                                    <label>{{_('Cсылка на изображение')}}</label>
                                    <input name="img" class=" form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">{{_('Создать')}} </button>



                        </form>
                    </div>
                </div>

            </div>
    </duv>
    @endsection
    @push('css')
    <link rel="stylesheet" href="\css\trix.css">
    @endpush
    @push('js')
    <script src="\js\trix.js">
    </script>

    @endpush
