<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Reviews</h1>
        <h3 class="adminSubTitle">All reviews are stated here</h3>
    </div>
    <div class="adminUsersCon">
        <div class="usersCon">
            <div class="usersColumns">
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Title</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Validation</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">More</h3>
                </div>
            </div>
            <div class="userItemsCon">
                @foreach ($reviews as $review)
                <div class="userItemCon">
                    <div class="userInfoCon">
                        <p>{{ $review->title }}</p>
                    </div>
                    <div class="userInfoCon">
                        <p>{{ $review->validation }}</p>
                    </div>
                    <div class="userInfoCon">
                        <button class="SgeneralButton">
                            <a href="{{ route('admin.reviews.show', $review->id) }}">More</a>
                        </button>
                    </div>
                </div>
                @endforeach   
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('admin') }}">Back</a>
    </button>   
</div>
