<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-secondary leading-tight">
            {{ __('Manga Search') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-primary overflow-hidden shadow-xl p-6">

                <div class="grid grid-cols-4 py-4 gap-8">
                    @foreach ($mangas as $manga)
                    <div class="text-black">
                        <div class="">
                            <img class="w-full" src="{{ $manga['images']['webp']['image_url'] }}" alt="{{ $manga['title'] }}">
                        </div>
                        <div class="bg-secondary p-2">
                            <p class="text-lg font-bold">{{$manga['title'] }}</p>
                            <p>Bänder: {{$manga['volumes'] }}</p>
                            <p>Kapitel: {{$manga['chapters'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            
            </div>
        </div>
    </div>

</x-app-layout>
