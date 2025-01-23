@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            商品一覧
        </a>
    </div>
</header>

<body>
    <div class="all-contents">
        <form action="/update" method ="POST">
            @csrf
            <div class="top-contents">
                <div class="left-content">
                    <img src="{{ asset($item->image) }}"  alt="商品画像" class="img-content"/>
                </div>
            </div>
            <div class="right-content">
                <label class="name-label">
                    商品名
                </label>
                <input type="text" placeholder="{{$item->name}}" name="item_name" class="text">
                <label class="price-label">
                    値段
                </label>
                <input type="text" placeholder="{{$item->price}}" name="item_price" class="text">
                <label class="condition-label">
                    状態
                </label>
                <input type="text" placeholder="{{$item->condition}}" name="item_condition" class="text">
            </div>
        </form>
    </div>
</body>
@endsection