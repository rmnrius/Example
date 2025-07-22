<x-layout>
    <x-slot:heading>
        Gallery
    </x-slot:heading>
    
    <ul>
        @foreach ($paintings as $item)
            <li>
                <a href="/gallery/{{ $item['id'] }}">
                    <strong>{{ $item['title'] }}:</strong> Artist: {{$item['artist']}}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>