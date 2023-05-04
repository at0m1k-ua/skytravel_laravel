@extends('page')

@section('content')

    <div class='center-container' style='height: auto'>
        <h1>{{ $travel->nameJapanese }}</h1>
        <h2 class='center-container-subtitle'>({{ $travel->name }})</h2>
        <div class='big-travel-image-container'>
            <img src='{{ $travel->pageImageUrl }}' class='big-travel-image' alt='Travel image'>
        </div>
        <div class='travel-details-and-map'>
            <div class='travel-details'>
                <p>Маршрут: {{ $travel->getCitiesString() }}</p>
                <p><b>Тривалість: </b>{{ $travel->getDatesIntervalDays() }} днів / {{ $travel->getDatesIntervalDays() - 1 }} ночей</p>
                {!! $travel->description !!}
                <h3>{{ $travel->price }} грн</h3>
                <a href='/order?id={{ $travel->id }}' class='order-button-light'><span>Замовити</span></a>
            </div>
            <div class='travel-map'>
                <img src='{{ asset('images/sakura-route.png') }}' alt="Travel image">
            </div>
        </div>
    </div>

@endsection
