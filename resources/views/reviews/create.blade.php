<x-nav
    id="blueNav">
</x-nav>
<div class="reviewSpacer">
    <div class="reviewCon">
        <div class="reviewForms">
            <div class="reviewHeader">
                    <h1>Review</h1>
            </div>
            <div class="reviewFormCon">
                <form action="{{ route('reizen.review.store', $trip_id) }}" method="post">
                @csrf
                    <div class="reviewFormItem">
                        <x-trip-input
                            class="reviewFormItemInput"
                            type="text"
                            name="title"
                            field="title"
                            label=""
                            placeholder="Title review"
                            :value="@old('title')"
                        ></x-trip-input>
                    </div>
                    <div class="reviewFormItem">
                        <x-textarea
                            class="reviewFormItemTextarea"
                            name="content"
                            field="content"
                            label="Content"
                            rows="10"
                            placeholder="Write your review here"
                            :value="@old('content')"
                        ></x-textarea>
                    </div>
                    <div class="loginButtonCon">
                        <button class="loginButton">
                            <a>Submit</a>
                        </button>
                    </div>

            </div>
        </div>
    </div>

    <button class="generalButton">
        <a  href="{{ route('reizen.show', $trip_id ) }}">Back</a>
    </button>   
    
</div>
<x-footer></x-footer>
