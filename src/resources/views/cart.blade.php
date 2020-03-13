<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="https://i.citrus.ua/uploads/shop/a/c/ac6b4ca704f3a6ac7e7cd51bae6da035.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>{{$product->price}} грн.</p>
            <p>
                <form action="{{  route('basket-add', $product) }}" method="post">
                <button type="submit" class="btn btn-default" role="button">В корзину </button>
                <a href="{{route('product', [$product->category->code, $product->code])}}" class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>

            </p>
        </div>
    </div>
</div>

