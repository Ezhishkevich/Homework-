@extends('layouts.base')
@section('page.titel')
Регистрация
@endsection
@section('content')
<section>
    <duv class="container">
        <div class="row">
            <div class="col-12 col-md-2 offset-md-5 py-5 ">
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

                        <form action="{{  route('contact-form')}}" method="post">
                            @csrf
                            <div class="mb-3 ">
                                <label>{{_('name')}}</label>
                                <input name="name" type="text" class=" form-control">
                            </div>
                            <div class="mb-3 ">
                                <label>{{_('password')}}</label>
                                <input name="password" type="text" class=" form-control">
                            </div>
                            <div class="mb-3">
                                <label>{{_('email')}}</label>
                                <input name="email" type="text" class=" form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">{{_('Зарегистрироваться')}} </button>

                        </form>

                    </div>
                </div>

            </div>
    </duv>
</section>
@endsection
