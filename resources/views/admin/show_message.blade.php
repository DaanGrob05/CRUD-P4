<x-nav
    id="blueNav">
</x-nav>
<x-nav
    id="blueNav">
</x-nav>
<div class="adminSpacer">
    <div class="adminTitleCon">
        <h1 class="adminTitle">Messages</h1>
        <h3 class="adminSubTitle">Look at messages here</h3>
    </div>
    <div class="sideBySideTable">
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Name</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <p>{{ $message->name }}</p>
            </div>
        </div>
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Content</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <p id="ContentP">{{ $message->message }}</p>
            </div>
        </div>
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Email</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                {{ $message->email }}
            </div>
        </div>
        <div class="sideBySideTableRow">
            <div class="sideBySideTableTitle">
                <h3 class="sideBySideTableTitleText">Delete</h3>
            </div>
            <div class="sideBySideTableItemInfo">
                <form action="{{ route('admin.messages.delete', $message->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="SgeneralButton" type="submit"><a>Delete</a></button>
                 </form>
            </div>
        </div>
    </div>
    <button class="generalButton">
        <a  href="{{ route('admin.messages') }}">Back</a>
    </button>   
</div>
