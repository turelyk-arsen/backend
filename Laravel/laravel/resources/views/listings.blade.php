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
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="{{asset('images/no-image.png')}}" alt="" />
                    {{-- lets use the asset() --}}
                    <div>
                        <h3 class="text-2xl">
                            {{-- we are now adding data from DB --}}
                            <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                        <ul class="flex">
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Laravel</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">API</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Backend</a>
                            </li>
                            <li
                                class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">Vue</a>
                            </li>
                        </ul>
                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <h2>
                <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </h2>
            <p>{{ $listing['description'] }} </p> --}}
        @endforeach

    </div>
@endsection
