


                                                    @php
    $slug_detail = app\Models\Navigation::find(2471)->childs->take(8);
@endphp

<div class="jobs">
    <div class="container">
        <h1 class="all_title_h2  text-center">JOBS & UPDATE</h1>
        <div class="job-area">
            <div class="row">
                @foreach ($slug_detail as $home_job_cat_item)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="card-sl">
                            <div class="card-image">
                                <img src="{{ $home_job_cat_item->banner_image }}" />
                            </div>
                            <div class="card-heading">
                                {{-- {{ $home_job_cat_item->caption }} --}}
                                 {{ Str::limit($home_job_cat_item->caption, 23) }}
                            </div>
                            <div class="card-text">
                                {!! Str::limit($home_job_cat_item->short_content, 100) !!}
                            </div>
                         

                            <a style="text-decoration: none" href="/job/{{ $home_job_cat_item->nav_name }}"" class="card-button"> Read More</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</div>
