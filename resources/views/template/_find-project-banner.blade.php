<section class=" h-96 py-10 px-2 flex-col bg-slate-800 flex items-center justify-center">
    <h1 class=" text-lora text-3xl text-white text-center">Explore the talent that you need</h1>
    <div class="flex mt-5 flex-row">
        {{-- <div class="search-icon text-white">
           <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
           <span class="fas fa-times"></span>
        </div> --}}
        <form action="/project" class=" flex flex-row gap-3">
            <input type="search" name="search" class=" w-96 bg-white pl-3 pr-5 py-2 rounded-full md:pl-10" placeholder="Search" required value="{{ $search ?? '' }}">
            <button type="submit" class="fas fa-search text-white bg-blue-500 py-3 px-4 rounded-full ease-in duration-150 hover:bg-blue-600"></button>
        </form>
     </div>
</section>
