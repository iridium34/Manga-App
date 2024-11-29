<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-secondary leading-tight">
            {{ __('Manga Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-primary overflow-hidden shadow-xl p-6">
                <ul>
                    @foreach ($genres as $genre)
                    <li class="text-white">
                        {{$genre['name'] }} {{$genre['count'] }} 
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
