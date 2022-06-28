<x-nav
    id="blueNav">
</x-nav>
<div class="contactSpacer">
    <div class="contactContentSpacer">
        <div class="contactTitle">
            <h1>Contact us</h1>
            <h3>If you have any questions about our products or services, please contact us.</h3>
            <h4>You could also E-mail us at EXAMPLE@gmail.com</h4>
        </div>
        <div class="contactUsFormCon">
            <div class="contactUsForm">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('contact.store') }}" id="contact" method="POST">
                    @csrf
                    <div class="contactInput_Label">
                        <label class="contactLabel" for="name">Name *</label>
                            <x-contact-input 
                            class="contactInput"
                            id="name"
                            type="text"
                            name="name"
                            field="name"
                            label=""
                            :value="@old('name', $contact->name)"
                        ></x-contact-input>
                    </div>
                    <div class="contactInput_Label">
                        <label class="contactLabel" for="email">Email *</label>
                        <x-contact-input
                            class="contactInput"
                            id="email"
                            type="text"
                            name="email"
                            field="email"
                            label=""
                            :value="@old('email', $contact->email)"
                        ></x-contact-input>
                    </div>
                    <div class="contactInput_Label">
                        <label class="contactLabel" for="message">Company</label>
                        <x-contact-input
                            class="contactInput" 
                            type="text"
                            name="company"
                            field="company"
                            label=""
                            :value="@old('company', $contact->company)"
                        ></x-contact-input>
                    </div>
                    <div class="contactInput_Label">
                        <label class="contactLabel" for="message">Message *</label>
                        <x-contact-input
                            class="contactInput" 
                            id="message"
                            type="text"
                            name="message"
                            field="message"
                            label=""
                            :value="@old('message', $contact->message)"
                        ></x-contact-input>
                    </div>
                    <button type="submit" class="SgeneralButton"><a>Submit</a></button>
                </form>
            </div> 
        </div> 
    </div>
</div>
<x-footer></x-footer>

<script src="{{ asset('js/formValidation.js') }}"></script>
