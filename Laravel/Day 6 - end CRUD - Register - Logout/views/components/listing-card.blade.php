@props(['listing'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
             {{-- lets use the asset() --}}
            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
           
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                {{-- we are now ading data from DB --}}
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

            {{-- :tagsCsv is our @props name
                ":" is to pass a variable inside our attribute --}}
            <x-listing-tags :tagsCsv="$listing->tags"  />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>