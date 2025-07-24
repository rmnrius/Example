<x-layout>
    <x-slot:heading>
        Painting
    </x-slot:heading>
    
    <h1 class="font-bold text-lg">{{ $painting['title']}}</h1>
    <h3>Artist: {{ $painting->artist->name }}</h3>
    <h3>Price: {{ $painting['price'] }}</h3>

</x-layout>