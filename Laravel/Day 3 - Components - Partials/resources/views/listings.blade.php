{{-- we are extending the layout from the layout.blade.php --}}
@extends('layout')
{{-- we want to wrapped this code in a section directive  --}}
@section('content') 
{{-- ('content') needs to be the same as our yield('content') --}}
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @if(count($listings) == 0)
            <p>No listing found</p>
        @endif

        @foreach ($listings as $listing)

        <x-listing-card :listing="$listing" />

        @endforeach
    </div>
@endsection