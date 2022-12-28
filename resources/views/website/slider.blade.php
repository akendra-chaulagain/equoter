<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner slider_curosel_img">
        @foreach ($sliders as $key => $sliders_item)
            <div class="carousel-item  @if ($key == 0) active
    @else @endif">
                <img src="{{ $sliders_item->banner_image }}" class="d-block w-100" alt="slider_image">
            </div>
        @endforeach



    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
