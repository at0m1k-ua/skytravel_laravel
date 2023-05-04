<a href='/travel?id={{ $travel->id }}' class='travel-link'>
    <div class='travel-item'>
        <h3 class='travel-name'>• {{ $travel->name }}</h3>
        <p class='travel-cities'>{{ $travel->getCitiesString() }}</p>
        <div class='travel-image-container'>
            @if($travel->isPremiere)
                <div class='premiere'>
                    <span>Прем'єра</span>
                </div>
            @endif
            <img src='{{ $travel->cardImageUrl }}' class='travel-image' alt='Card image'>
        </div>
        <div class='travel-info'>
            <img src='{{ asset('images/home.svg') }}' alt='Home'>
            <span>{{ $travel->getDatesIntervalDays() }} днів</span>
            <img src='{{ asset('images/calendar.svg') }}' alt='Home'>
            <span>{{ $travel->getDatesString() }}</span>
        </div>
        <h3>{{ $travel->price }} грн</h3>
    </div>
</a>
