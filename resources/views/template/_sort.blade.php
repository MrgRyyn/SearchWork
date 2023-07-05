<section id="sort-pro">
    <div class="sort-fliter">
        <form action="{{ route('products.sort') }}" method="get">
            <input type="hidden" name="search" class="search-data" placeholder="Search" required value="{{ $search ?? '' }}">
            <label for="sort" class="label">Sort By:</label>
            <select name="sort" id="sort">
                <option value="">Most suitable</option>
                <option value="price_asc" {{ Request::get('sort') == 'price_asc' ? 'selected' : '' }}>Price (Low to High)</option>
                <option value="price_desc" {{ Request::get('sort') == 'price_desc' ? 'selected' : '' }}>Price (High to Low)</option>
                <option value="created_at_asc" {{ Request::get('sort') == 'created_at_asc' ? 'selected' : '' }}>Date (Oldest to Newest)</option>
                <option value="created_at_desc" {{ Request::get('sort') == 'created_at_desc' ? 'selected' : '' }}>Date (Newest to Oldest)</option>
            </select>
            <button type="submit" class="sort-btn">Sort</button>
        </form>
    </div>
</section>
