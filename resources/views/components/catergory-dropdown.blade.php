<x-dropdown>
    {{-- Trigger --}}
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold lg:w-32 lg:inline-flex flex w-full">

            {{
                isset($currentCatergory) ? ucwords($currentCatergory->name) : 'Categories'
            }}
            <x-icon name="arrow-down" class="absolute pointer-events-none" style="right: 12px" />
        </button>
    </x-slot>

    {{-- Links --}}

       <x-dropdown-item href="/?{{ http_build_query(request()->except('catergory','page'))}}"
        :active="request()->routeIs('home')">All
    </x-dropdown-item>
        @foreach ($catergories as $catergory)
        <x-dropdown-item href="/?catergory={{$catergory->slug}}&{{ http_build_query(request()->except('catergory','page'))}}" :active="request()->is('categories/'.$catergory->slug)">{{ ucwords($catergory->name) }}</x-dropdown-item>
        @endforeach

</x-dropdown>
