@extends('layouts.base')
@section('page.titel')
Список обЪявлений
@endsection
@section('content')
<section>
    <duv class="container">
        <div class="row ">
            <div class="card-body">
                <div class="col-8 offset-md-3 mb-3">
                    <h4 class="h2 mb-5 text-light">@yield('page.titel')</h4>
                </div>
            </div>
            @foreach( $articl as $el)

            <div class="card mb-3 col-8 offset-md-2">
                <div class="card-body  ">
                    <div class="mb-4">

                        {{$el->heading}}

                        <div class="btn"><a href=" {{ route('message',$el->id) }}"><button type="submit" class="btn btn-primary">Подробнее</button></a></div>
                    </div>


                    <div class="btn"><a href="{{ route('messagedelete', $el->id) }}"><button type="submit" class="btn btn-primary">Удалить</button></a></div>
                </div>
            </div>


            @endforeach


        </div>





        </div>
    </duv>
</section>
@endsection
