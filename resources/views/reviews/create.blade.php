<x-nav
    id="blueNav">
</x-nav>

<h1>Write Review</h1>
<br>    

<form action="{{ route('reizen.review.store', $trip_id) }}" method="post">
    @csrf
    <x-trip-input
        type="text"
        name="title"
        field="title"
        label="Title"
        :value="@old('title')"
    ></x-trip-input>
    <x-textarea
        name="content"
        field="content"
        label="Content"
        rows="10"
        placeholder="Write your review here"
        :value="@old('content')"
    ></x-textarea>
    <button type="submit">Submit</button>
</form>