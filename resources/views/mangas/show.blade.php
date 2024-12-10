<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-secondary leading-tight">
            {{ __('Manga Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-primary overflow-hidden shadow-xl p-6">

                <div class="grid grid-cols-4 py-4 gap-8">
                    @foreach ($mangas as $manga)
                    <div class="text-black">
                        <div class="bg-secondary p-2">
                            
                            <p class="text-lg font-bold">{{ $mangas }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            
            </div>
        </div>
    </div>

</x-app-layout>
