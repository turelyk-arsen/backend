<h2>
    {{$heading}}
</h2>

@if(count($listings) == 0)
    <p>No listing found</p>
@endif

{{-- other example of directive  --}}
{{-- there is the php directive --}}

{{-- @php
    $test = 'Paulo and Reaphael are the best, and sure they are.'
@endphp

    {{$test}} --}}

@foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}"   >{{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
@endforeach