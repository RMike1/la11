<section class="topics-section section-padding pb-0" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Topics</h4>
                </div>
            </div>

            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-overlay">
                    <a href="{{route('pod.category', $category->slug)}}" wire:navigate.hover class="custom-block-image-wrap">
                        <img src="{{asset('user/images/topics/physician-consulting-his-patient-clinic.jpg')}}"
                            class="custom-block-image img-fluid" alt="">
                    </a>

                    <div class="custom-block-info custom-block-overlay-info">
                        <h5 class="mb-1">
                            <a href="{{route('pod.category', $category->slug)}}" wire:navigate.hover>
                                {{$category->title}}
                            </a>
                        </h5>
                        @if($category->podcasts->count()==0)
                        <p class="badge mb-0"></p>
                        @else
                        <p class="badge mb-0">{{$category->podcasts->count()}} Episodes</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>