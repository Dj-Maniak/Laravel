@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <p class="alert alert-success">Добавлен товар iPhone X 256GB</p>
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <a href="/mobiles/iphone_x_256">
                            <img height="56px" src="">
                            iPhone X 256GB
                        </a>
                    </td>
                    <td><span class="badge">1</span>
                        <div class="btn-group form-inline">
                            <form action="" method="POST">
                                <button type="submit" class="btn btn-danger" href=""><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="7LTBiQin4RRoS9baiwW9b1cPXCfvUVaIa5XOpMGH">
                            </form>
                            <form action="/basket/add/2" method="POST">
                                <button type="submit" class="btn btn-success"
                                        href=""><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                <input type="hidden" name="_token" value="7LTBiQin4RRoS9baiwW9b1cPXCfvUVaIa5XOpMGH">
                            </form>
                        </div>
                    </td>
                    <td>89990 ₴</td>
                    <td>89990 ₴</td>
                </tr>
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>89990 ₴</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="basket/place">Оформить заказ</a>
            </div>
        </div>

@endsection
