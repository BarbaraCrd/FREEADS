<form action="{{ route('searchglobal') }}">
    <div class="searchsh">
    <div class="row-lg-2 form-group mb-2 ">
        <input type="text" class="form-control" name="search" placeholder="Search title" value={{ request()->search ?? ''}}>
    </div>
    </div>
        
    <div class="searchsh">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-2 shadow-sm-h-md-250 position-relative">
        <div class="d-flex col p-3 d-flex flex-column position-static">
            <div class="titlec">
                <div class="btnloc">FILTER BY LOCATION</div>
            </div>
            <div class="filter ">
                @foreach ($locations as $location)
                @php
                    $checkedl = [];
                    if(isset($_GET['locationsfilter']))
                    {
                        $checkedl = $_GET['locationsfilter'];
                    }
                    @endphp
                <input type="checkbox" name="locationsfilter[]" value="{{ $location->location_name }}"
                    @if(in_array($location->location_name, $checkedl)) checked @endif/>
                        {{ $location->location_name }}
                    @endforeach
            </div>
         </div>
     </div>
    </div>
  
     <div class="searchsh">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-2 shadow-sm-h-md-250 position-relative">
         <div class="d-flex col p-3 d-flex flex-column position-static">
                <div class="titlec">
                    <div class="btncat">FILTER BY CATEGORY</div>
                </div>
                <div class="filter">
                    @foreach ($categories as $category)
                    @php
                        $checkedc = [];
                        if(isset($_GET['categoriesfilter']))
                        {
                            $checkedc = $_GET['categoriesfilter'];
                        }
                    @endphp
                <input type="checkbox" name="categoriesfilter[]" value="{{ $category->category_name }}"
                    @if(in_array($category->category_name, $checkedc)) checked @endif/>
                        {{ $category->category_name }}
                    @endforeach
            </div>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <button type="submit" class="btnsea">SEARCH</button>
</div>
</form>