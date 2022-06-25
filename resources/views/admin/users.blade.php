<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Users</h1>
        <h3 class="adminSubTitle">All users are stated here</h3>
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
                    <h3 class="usersColumnTitle">Edit</h3>
                </div>
                <div class="usersColumn">
                    <h3 class="usersColumnTitle">Delete</h3>
                </div>
            </div>
            <div class="userItemsCon">
                @foreach ($users as $user)
                <div class="userItemCon">
                    <div class="userInfoCon">
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="userInfoCon">
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="userInfoCon">
                        <button class="SgeneralButton">
                            <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                        </button>
                    </div>
                    <div class="userInfoCon">
                        <form action="{{ route('admin.users.delete', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="SgeneralButton" type="submit" onclick="return confirm('Are you sure you want to delete this user?')"><a>Delete</a></button>
                        </form>
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
