<x-layout>
    <x-slot:heading>
        Painting
    </x-slot:heading>
    
    <h1 class="font-bold text-lg">{{ $painting['title']}}</h1>
    <h3>Artist: {{ $painting->artist->name }}</h3>
    <h3>Price: {{ $painting['price'] }}</h3>

    <p class="mt-6">
       <x-button href="">Edit Job</x-button>
    </p>



</x-layout>