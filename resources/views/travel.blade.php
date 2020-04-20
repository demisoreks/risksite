@extends('app', ['page_title' => 'Travel Advisory'])

@section('content')
<div class="row">
    <div class="col-md-12">
        <p align="justify">
            We issue a Travel Advisory for each state in Nigeria. Travel Advisories follow a consistent format and use plain language to help citizens find and use important security information. Travel Advisories apply up to four standard levels of advice, describe the risks, and provide clear actions citizens or non-citizens, should take to help ensure their safety.
        </p>
        <p align="justify">
            To see a state's Travel Advisory, visit our <a href="{{ route('profile') }}">Risk Profile</a> and click the desired state.<p>
        </p>
    </div>
</div>
@endsection