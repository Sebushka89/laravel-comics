@extends('templates.main')

@section('title','Product')

@section('content')
<div class="blue-band">
    <img src="{{$comic['thumb']}}" alt="">
</div>
<div class="container-comic">
    <div class="row">
        <div class="col-9">
            <h1>{{$comic['title']}}</h1>
            <div class="info">
                <span>U.S. Price:</span> <span class="price">{{$comic['price']}}</span>
            </div>
            <p class="description">{{$comic['description']}}</p>
        </div>
        <div class="col-3">
            <span>ADVERTISMENT</span>
            <img src="/img/adv.jpg" alt="">
        </div>
    </div>
</div>

<section class="grey-section">
    <div class="container flex">
        <div class="column left">
            <h2>Talent</h2>
            <div class="info-by flex">
                <div class="bold">Art by:</div>
                <p>
                @foreach ( $comic['artists'] as $artist )
                {{ $artist }}
                @if (!$loop->last)
                ,
                @endif
                @endforeach
                </p>
            </div>
            <div class="info-by flex">
                <div class="bold">Written by:</div>
                <p>
                @foreach ( $comic['writers'] as $writer )
                {{ $writer }}
                @if (!$loop->last)
                ,
                @endif
                @endforeach
                </p>
            </div>
        </div>
        <div class="column right">
            <h2>Specs</h2>
            <div class="info-by flex">
                <div class="bold">Series:</div>
                <p class="uppercase">
                    {{ $comic['series'] }}
                </p>
            </div>
            <div class="info-by flex">
                <div class="bold">U.S. Price:</div>
                <p>
                {{ $comic['price'] }}
                </p>
            </div>
            <div class="info-by flex">
                <div class="bold">On Sale Date:</div>
                <p>
                    {{ $comic['sale_date'] }}
                </p>
            </div>
        </div>
    </div>

</div>
<div class="options-stripe-grey">
    <nav class="container">
        <ul>
            <li>
                <div class="text">DIGITAL COMICS</div>
                <div class="img-container"><img src="/img/buy-comics-digital-comics.png" alt=""></div>
            </li>
            <li>
                <div class="text">SHOP DC</div>
                <div class="img-container"><img src="/img/buy-comics-merchandise.png" alt=""></div>
            </li>
            <li>
                <div class="text">COSMIC SHOP LOCATOR</div>
                <div class="img-container"><img src="/img/buy-comics-shop-locator.png" alt=""></div>
            </li>
            <li>
                <div class="text">SUBSCRIPTION</div>
                <div class="img-container"><img src="/img/buy-comics-subscriptions.png" alt=""></div>
            </li>
        </ul>
    </nav>
        
</section>



@endsection
