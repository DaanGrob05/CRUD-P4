<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Messages</h1>
        <h3 class="adminSubTitle">All messages are stated here</h3>
    </div>
    <div class="adminUsersCon">
        <div class="usersCon">
            <div class="usersColumns">
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Name</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Email</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">More</h3>
                </div>
            </div>
            <div class="userItemsCon">
                @forelse ($messages as $message)
                <div class="userItemCon">
                    <div class="userInfoCon">
                        <p><p>{{ $message->name }}</p></p>
                    </div>
                    <div class="userInfoCon">
                        <p>{{ $message->email}}</p>
                    </div>
                    <div class="userInfoCon">
                        <button class="SgeneralButton">
                            <a href="{{ route('admin.messages.show', $message->id) }}">More</a>
                        </button>
                    </div>
                </div>
                    @empty
                        <p>No messages yet</p>
                @endforelse  
                
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('admin') }}">Back</a>
    </button>   
</div>

