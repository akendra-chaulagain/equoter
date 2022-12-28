<div class="counter">
    <div class="container">
        <h1 class="all_title_h2 processdural-tittle text-center text-uppercase">Recruitment Process</h1>
        <div class="recruitment">
            <div class="row">
                @foreach ($process as $process_item)
                    <div class="col-md-3">
                        <div class="processdural">
                            <div>
                                <i class="fa-solid fa-{{ $process_item->caption }}"></i>
                                <h5>{!! $process_item->short_content !!}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
