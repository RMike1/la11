<x-page-layout>
<main>

@include('partials.nav-bar')


<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">

                <h2 class="mb-0">Detail Page</h2>
            </div>

        </div>
    </div>
</header>


<section class="latest-podcast-section section-padding pb-0" id="section_2">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Daily talk</h4>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="custom-block-icon-wrap">
                            <div class="custom-block-image-wrap custom-block-image-detail-page">
                                <img src="{{asset('user/images/podcast/11683425_4790593.jpg')}}"
                                    class="custom-block-image img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-12">
                        <div class="custom-block-info">
                            <div class="custom-block-top d-flex mb-1">
                                <small class="me-4">
                                    <a href="#">
                                        <i class="bi-play"></i>
                                        Play now
                                    </a>
                                </small>

                                <small>
                                    <i class="bi-clock-fill custom-icon"></i>
                                    50 Minutes
                                </small>

                                <small class="ms-auto">Episode <span class="badge">15</span></small>
                            </div>

                            <h2 class="mb-2">{{$pod->title}}</h2>

                            <p>{{$pod->description}}</p>

                           

                            <div
                                class="profile-block profile-detail-block d-flex flex-wrap align-items-center mt-5">
                                <div class="d-flex mb-3 mb-lg-0 mb-md-0">
                                    <img src="{{asset('user/images/profile/woman-posing-black-dress-medium-shot.jpg')}}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        {{$pod->getIntervieweeRelation->firstName}}
                                        <img src="{{asset('user/images/verified.png')}}" class="verified-image img-fluid" alt="">
                                        <strong>{{$pod->getCategoryRelation->title}}</strong>
                                        
                                    </p>
                                </div>

                                <ul class="social-icon ms-lg-auto ms-md-auto">
                                    @foreach($pod->getIntervieweeRelation->socialMediaRelation as $pods_social)
                                    <li class="social-icon-item">
                                        <a href="{{$pods_social->url}}" class="social-icon-link bi-{{$pods_social->name}}"></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="related-podcast-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Related episodes</h4>
                </div>
            </div>
            @foreach($relatedEpisodes as $relatedEpisode)
            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <div class="custom-block custom-block-full">
                    <div class="custom-block-image-wrap">
                        <a href="{{route('pod.details',$relatedEpisode->slug)}}" wire:navigate.hover>
                            <img src="{{asset('user/images/podcast/27376480_7326766.jpg')}}" class="custom-block-image img-fluid"
                                alt="">
                        </a>
                    </div>

                    <div class="custom-block-info">
                        <h5 class="mb-2">
                            <a href="{{route('pod.details',$relatedEpisode->slug)}}" wire:navigate.hover>
                                {{$relatedEpisode->title}}
                            </a>
                        </h5>

                        <div class="profile-block d-flex">
                            <img src="{{asset('user/images/profile/woman-posing-black-dress-medium-shot.jpg')}}"
                                class="profile-block-image img-fluid" alt="">

                            <p>{{$relatedEpisode->getIntervieweeRelation->firstName}}
                                <strong>{{$relatedEpisode->getCategoryRelation->title}}</strong>
                            </p>
                        </div>

                        <p class="mb-0">{{Str::limit($relatedEpisode->description,50)}}</p>

                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                            <a href="#" class="bi-headphones me-1">
                                <span>100k</span>
                            </a>

                            <a href="#" class="bi-heart me-1">
                                <span>2.5k</span>
                            </a>

                            <a href="#" class="bi-chat me-1">
                                <span>924k</span>
                            </a>
                        </div>
                    </div>

                    <div class="social-share d-flex flex-column ms-auto">
                        <a href="#" class="badge ms-auto">
                            <i class="bi-heart"></i>
                        </a>

                        <a href="#" class="badge ms-auto">
                            <i class="bi-bookmark"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
</main>
</x-page-layout>