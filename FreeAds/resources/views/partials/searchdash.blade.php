<form action="{{ route('posts.search') }}" class="d-flex mr-3 pb-3">
    <div class="form-group mb-0 ml-2 mr-2">
        <div class="searchsh">
        <input type="text" class="form-control" name="search" placeholder="Search title" value={{ request()->search ?? ''}}>
    </div>
</div>
    <button type="submit" class="btnsea2">SEARCH</button>

</form>