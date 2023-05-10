@props(['listing'])
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}" alt="" />
        {{-- src="{{ asset('images/no-image.png') }}" --}}
        {{-- lets use the asset() --}}
        <div>
            <h3 class="text-2xl">
                {{-- we are now adding data from DB --}}
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            {{-- tagsCsv is out @props
                : is to pass a variable inside our attribute --}}
            <x-listing-tags :tagsCsv="$listing->tags" />

            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
