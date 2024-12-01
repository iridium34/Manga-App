<form class="flex items-center max-w-sm mx-auto" method="get" action="{{ url("search/{{ id }}") }}">
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <input type="text" id="simple-search" class="h-10 bg-gray-50 border border-r-0 dark:border-r-0 border-gray-300 text-gray-900 text-sm rounded-s-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-pickled-bluewood-950 dark:border-pickled-bluewood-800 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gold-500 dark:focus:border-gold-500" placeholder="Search ..." required />
    </div>
    <button type="submit" class="h-10 p-2.5 text-sm font-medium text-white bg-primary rounded-e-lg border border-primary hover:bg-gold-500 hover:border-gold-500 focus:ring-4 focus:outline-none focus:ring-gold-300 dark:bg-secondary dark:border-pickled-bluewood-800 dark:hover:border-pickled-bluewood-800 dark:focus:ring-gold-700 dark:text-black">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
    </button>
</form>