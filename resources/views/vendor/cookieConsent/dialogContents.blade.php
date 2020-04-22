<div class="js-cookie-consent cookie-consent fixed-bottom bg-primary p-2 text-light text-center">

    <span class="cookie-consent__message">
        <!--{!! trans('cookieConsent::texts.message') !!}-->
        This website uses cookies to optimize your experience and to provide us insight on how you interact with the Site. A Cookie is a small text file sent to your device, to allow our website to recognise your device and save preferences, as well as provide the website with information on your use of the website. All information shared with us through Cookies is secure and covered by our Data Privacy obligations. Follow the link to access our <a href="{{ route('privacy') }}">Data Privacy Policy</a>.
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree btn btn-sm btn-secondary">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>
