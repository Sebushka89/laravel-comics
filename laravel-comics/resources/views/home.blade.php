@extends('templates.main')

@section('title','Homepage')

@section('content')
    <div class="bg-fluid">
        <div class="container">
            <div class="button-container-top">
                <button class="btn">CURRENT SERIES</button>
            </div>
            <div class="row">
                @foreach($comic as $comicSingle) 
                <div class="custom-col">
                    <!--<a href="/product/{{ $loop->iteration }}">-->
                    <a href="{{ route('product', [ 'id' => $loop->iteration ]) }}">
                        <div class="comic-item-content">
                            <img src="{{ $comicSingle['thumb'] }}" />
                            <h5>{{ $comicSingle["series"] }}</h5>
                        </div>
                    </a>
                </div>            
                @endforeach
            </div>
            <div class="btn-container">
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
    <div class="options-stripe">
        <nav class="container">
            <ul>
                <li>
                    <div class="img-container"><img src="/img/buy-comics-digital-comics.png" alt=""></div>
                    <div class="text">DIGITAL COMICS</div>
                </li>
                <li>
                    <div class="img-container"><img src="/img/buy-comics-merchandise.png" alt=""></div>
                    <div class="text">DC MECHANDISE</div>
                </li>
                <li>
                    <div class="img-container"><img src="/img/buy-comics-subscriptions.png" alt=""></div>
                    <div class="text">SUBSCRIPTION</div>
                </li>
                <li>
                    <div class="img-container"><img src="/img/buy-comics-shop-locator.png" alt=""></div>
                    <div class="text">COSMIC SHOP LOCATOR</div>
                </li>
                <li>
                    <div class="img-container"><img src="/img/buy-dc-power-visa.svg" alt=""></div>
                    <div class="text">DC POWER VISA</div>
                </li>
            </ul>
        </nav>
    </div>
@endsection
