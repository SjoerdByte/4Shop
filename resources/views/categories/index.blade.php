@extends('layouts.app')

@section('content')

    <div class="category">

        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                @foreach($categories as $category)
                    <li class="nav-item" style="padding-left: 5%">
                        <a  style="color: black!important;" class="nav-link" href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

        @foreach($products as $product)
            <a class="product-row no-link" href="{{ route('products.show', $product) }}">
                <img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
                <div class="product-body">
                    <div>
                        <h5 class="product-title"><span>{{ $product->title }}</span></h5>
                        <h5 class="product-title"><em>&euro;{{ $product->price }}</em></h5>

                        @unless(empty($product->description))
                            <p>{{ $product->description }}</p>
                        @endunless

                        @if($product->discount > 0)
                            <p class="discount">Nu <span class="discountPercentage">{{ $product->discount }}%</span> korting!</p>
                            <h6>Originele prijs was &euro;{{$product->getRawOriginal('price')}}</h6>
                        @endif

                    </div>
                    <button style="margin-top: 55%" class="btn btn-primary">Meer info &amp; bestellen</button>
                </div>
            </a>
        @endforeach
    </div>

@endsection
