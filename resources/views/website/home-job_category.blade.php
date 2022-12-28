@php
    $slug_detail = app\Models\Navigation::find(2471)->childs->take(6);
@endphp

<div class="jobs">
    <div class="container">
        <h1 class="all_title_h2  text-center">JOBS & UPDATE</h1>
        <div class="job-area">
            <div class="row">
                @foreach ($slug_detail as $home_job_cat_item)
                    <div class=" col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <div class="row ">
                                <div class="col-md-4">
                                    <img src="{{ $home_job_cat_item->banner_image }}" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $home_job_cat_item->caption }}</h5>
                                        <p class="card-text">
                                            {{ Str::limit($home_job_cat_item->short_content, 40) }}
                                        </p>
                                        <p class="card-text1"><small class="text-muted"><a
                                                    href="/job/{{ $home_job_cat_item->nav_name }}">READ
                                                    MORE
                                                    >></a></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</div>
