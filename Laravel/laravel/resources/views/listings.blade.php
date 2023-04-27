<h2>Listings</h2>

<h2>{{ $heading }} </h2>

@if (count($listings) == 0)
    <p>No listing found</p>
@endif

{{-- other example of directive  --}}
{{-- there is the php directive  --}}

@php
    $test = 123;
@endphp

{{ $test }}

@foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
    </h2>
    <p>{{ $listing['description'] }} </p>
@endforeach
