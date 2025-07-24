<x-layout>
    <x-slot:heading>
        Create Artwork
    </x-slot:heading>
   
    <form method="POST" action="/gallery">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Post a New Artwork</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Share your creativity with the world, post your artwork on Gallery Pavillion and connect with art lovers and buyers today!</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input id="title" type="text" name="title" placeholder="Mona Lisa" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                    </div>
                    <div class="sm:col-span-2">
                    <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input id="price" type="text" name="price" placeholder="₱1,234" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                        </div>
                    </div>
                    </div>

                    
                </div>
            </div>

            

            
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>


    {{-- <h1 class="font-bold text-lg">{{ $painting['title']}}</h1>
    <h3>Artist: {{ $painting->artist->name }}</h3>
    <h3>Price: {{ $painting['price'] }}</h3> --}}

</x-layout>