@extends('layouts.base')
@section('page.titel')
Вход
@endsection
@section('content')
<section>
    <duv class="container">
        <div class="row">
            <div class="col-8 col-md-2 offset-md-5 py-5  ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-0">@yield('page.titel')</h4>
                    </div>
                    <div class="card-body">


                        <form action="{{  route('auth')}}" method="post">
                            @csrf
                            <div class="mb-3 ">
                                <label>{{_('password')}}</label>
                                <input name="password" type="text" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label>{{_('email')}}</label>
                                <input name="email" type="text" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">{{_('Вход')}} </button>
                            </div>

                        </form>



                    </div>

                </div>
            </div>
    </duv>
    </duv>
</section>
@endsection