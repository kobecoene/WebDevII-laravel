@extends('layout')


@section('content')

<div class="homeContainer">
    <div class="homeWrapper">
        <div class="homeContentWrapper">
            <h1>{{ $title }}</h1>
            <p> {!! $content !!}</p>
            <div class="homePlaystoreButtons">
                <a href='https://play.google.com/store/apps/details?id=com.facebook.orca&hl=en_US&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blanc"><img class="playstoreButton" alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>
                <a href='https://apps.apple.com/nl/app/messenger/id454638411' target="_blanc"><img class="appstoreButton" alt='Get it on AppStore' src='https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg'/></a>

            </div>
        </div>
        <div class="homeImagePhone">
            <img class="mockup_image img" src="{{ asset($image) }}" alt="mockup">
        </div>
    </div>

</div>

@endsection
