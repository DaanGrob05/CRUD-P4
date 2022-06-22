<x-nav
    id="blueNav">
</x-nav>
<div class="contactSpacer">
    <div class="formCon">
        <div class="formHeader">

        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{route('contact.store') }}" method="POST">
            @csrf
            <x-contact-input 
                type="text"
                name="name"
                field="name"
                label="Name *"
                :value="@old('name', $contact->name)"
            ></x-contact-input>
            <x-contact-input 
                type="text"
                name="email"
                field="email"
                label="Email *"
                :value="@old('email', $contact->email)"
            ></x-contact-input>
            <x-contact-input 
                type="text"
                name="company"
                field="company"
                label="Company"
                :value="@old('company', $contact->company)"
            ></x-contact-input>

            <x-contact-input 
                type="text"
                name="message"
                field="message"
                label="Message *"
                :value="@old('message', $contact->message)"
            ></x-contact-input>
            <button type="submit">Verstuur Bericht</button>
        </form>
    </div>
</div>