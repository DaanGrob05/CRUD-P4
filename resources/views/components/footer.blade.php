<footer>
    <div class="footerCon">
        <div class="footerRowCon">
            <div class="footerRow">
                {{-- divs for socials --}}
                <div class="footerSocial">
                    <img src="{{ asset('images/facebookIcon.png') }}" alt="facebook">
                    <img src="{{ asset('images/instagramIcon.png') }}" alt="instagram">
                    <img src="{{ asset('images/twitterIcon.png') }}" alt="twitter">

                </div>

            </div>
            <div class="footerRow">
                <div class="legalCon">
                    <a class="legalA" href="{{ route('terms') }}">terms</a>
                    <a>/</a>
                    <a class="legalA" href="{{ route('privacy') }}">privacy</a>
                </div>
            </div>
            <div class="footerRow">

                <div class="copyright">
                    <p class="copyrightP">© 2022, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>