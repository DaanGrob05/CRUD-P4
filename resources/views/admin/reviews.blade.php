<x-nav
    id="blueNav">
</x-nav>

@foreach ($reviews as $review)
    <div class="">
        <a href="{{ route('admin.reviews.show', $review->id) }}">
            <p>{{ $review->title }}</p>
            <p>{{ $review->content }}</p>
            <br>    
        </a>
    </div>
@endforeach