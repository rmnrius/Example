<x-layout>
    <x-slot:heading>
        Edit Artwork: {{ $painting->title }}
    </x-slot:heading>
   
    <form method="POST" action="/gallery/{{ $painting->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input id="title" type="text" name="title" value="{{ $painting->title }}" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"  required/>
                            </div>
                            @error('title')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input id="price" type="text" name="price" value="{{ $painting->price }}" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required/>
                            </div>
                            @error('price')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            

            
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center gap-x-6">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>

            </div>
            <div class="flex items-center gap-x-6">
                <a href="/gallery/{{ $painting->id }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium hover:text-white hover:bg-purple-300 border border-purple-300 rounded-md leading-5 text-black bg-white focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-900ms dark:bg-gray-800 dark:border-gray-600 dark:active:bg-gray-700 dark:focus:border-blue-800 cursor-pointer">Update</button>
            </div>
        </div>
    </form>
    <form method="POST" action="/gallery/{{ $painting->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>