@extends('master')

@section('title', 'товар')

@section('content')
    <div class="container">
        <div class="starter-template">
            <h1>iPhone X 64GB</h1>
            {{--        <h1>{{$product}}</h1>--}}
            <h2>Мобильные телефоны</h2>
            <p>Цена: <b>21999 ₴</b></p>
            <img src="">
            <p>Отличный продвинутый телефон с памятью на 64 gb</p>

            <form action="/basket/add/1" method="POST">
                <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

                <input type="hidden" name="_token" value="SmI6JGA4li0VxilPE0NGUtqUf8T276HyQHaN9kF1"></form>
        </div>
    </div>
@endsection
