<x-nav
    id="blueNav">
</x-nav>

<h1>Title</h1>
<p>{{ $review->title }}</p>

<h2>Content</h2>
<p>{{ $review->content }}</p>

<h3>Edit Rating</h3>
<form action="{{ route('admin.reviews.update', $review->id) }}" method="post">
    @csrf
    @method('PUT')
    {{-- input with 3 options --}}
    <select name="validation">
        <option value=0>Not Verified</option>
        <option value=1>Verified</option>
        <option value=2>Rejected</option>
    </select>
    <br>
    <button type="submit">Submit</button>
</form>

{{-- Delete --}}
<form action="{{ route('admin.reviews.delete', $review->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<a href="{{ route('admin.reizen.show', $review->trip_id) }}">Go to Trip</a>