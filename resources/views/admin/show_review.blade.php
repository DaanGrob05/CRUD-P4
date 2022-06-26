<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Reviews</h1>
        <h3 class="adminSubTitle">Manage reviews here</h3>
    </div>
    <div class="sideBySideTable">
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Title</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <p>{{ $review->title }}</p>
            </div>
        </div>
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Content</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <p id="ContentP">{{ $review->content }}</p>
            </div>
        </div>
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Validation</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <form id="validateReview" action="{{ route('admin.reviews.update', $review->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <select class="validateReviewSelect" name="validation">
                        <option value=0>Not Verified</option>
                        <option value=1>Verified</option>
                        <option value=2>Rejected</option>
                    </select>
                    <button class="SgeneralButton" type="submit"><a>Submit</a></button>
                </form>
            </div>
        </div>
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Delete</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <form action="{{ route('admin.reviews.delete', $review->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="SgeneralButton" type="submit"><a>Delete</a></button>
                 </form>
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('admin.reviews') }}">Back</a>
    </button>   
</div>
