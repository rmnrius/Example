<x-layout>
    <x-slot:heading>
        Gallery
    </x-slot:heading>
    
    <div class="space-y-4">
        @foreach ($paintings as $item)
            <a href="/gallery/{{ $item['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-purple-400 text-sm"> {{  $item->artist->name }} </div>
                <div>
                    <strong>{{ $item['title'] }} <br></strong> ₱{{$item['price']}}
                </div>
            </a>
        @endforeach

        <div>
            {{ $paintings->links() }}
        </div>

    </div>

</x-layout>