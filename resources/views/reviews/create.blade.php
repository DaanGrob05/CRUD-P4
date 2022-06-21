<x-nav
    id="blueNav">
</x-nav>

<h1>Write Review</h1>
<br>    

<form action="{{ route('reizen.review.store', $trip_id) }}" method="post">
    @csrf
    <x-input
        type="text"
        field="title"
        label="Title"
    ></x-input>
    <x-input
        type="text"
        field="content"
        label="Content"
    ></x-input>
    {{-- <input type="contect" name="contect" placeholder="Contect"> --}}

</form>