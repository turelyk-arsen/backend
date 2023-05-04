{{-- we are extending the layout from the layout.blade.php --}}
@extends('layout')

{{-- we want to wrapped this code in a section directive --}}
@section('content')
    {{-- ('content') need to be the same as out yield('content') --}}
    @include('partials._hero')
    @include('partials._search')
    {{-- <h2>Listings</h2>

<h2>{{ $heading }} </h2> --}}

    {{-- other example of directive  --}}
    {{-- there is the php directive  --}}

    {{-- @php
            $test = 123;
        @endphp --}}

    {{-- {{ $test }} --}}

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if (count($listings) == 0)
            <p>No listing found</p>
        @endif

        @foreach ($listings as $listing)
            {{-- @include('component.listing-component') --}}

            <x-listing-card :listing="$listing"/>
        @endforeach

    </div>
@endsection
{{-- <h2>
                <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </h2>
            <p>{{ $listing['description'] }} </p> --}}
