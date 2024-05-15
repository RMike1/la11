@foreach($podcastData as $podcast)
            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block d-flex">
                    <div class="">
                        <div class="custom-block-icon-wrap">
                            <div class="section-overlay"></div>
                            <a href="detail-page.html" class="custom-block-image-wrap">
                                <img src="{{asset('user/images/podcast/11683425_4790593.jpg')}}"
                                    class="custom-block-image img-fluid" alt="">

                                <a href="#" class="custom-block-icon">
                                    <i class="bi-play-fill"></i>
                                </a>
                            </a>
                        </div>

                        <div class="mt-2">
                            <a href="#" class="btn custom-btn">
                                Subscribe
                            </a>
                        </div>
                    </div>

                    <div class="custom-block-info">
                        <div class="custom-block-top d-flex mb-1">
                            <small class="me-4">
                                <i class="bi-clock-fill custom-icon"></i>
                                50 Minutes
                            </small>

                            <small>Episode <span class="badge">15</span></small>
                        </div>

                        <h5 class="mb-2">
                            <a href="detail-page.html">
                                {{$podcast->title}}
                            </a>
                        </h5>

                        <div class="profile-block d-flex">
                            <img src="{{asset('user/images/profile/woman-posing-black-dress-medium-shot.jpg')}}"
                                class="profile-block-image img-fluid" alt="">

                            @if($podcast->getIntervieweeRelation || $podcast->getCategoryRelation)
                            <p>
                                {{$podcast->getIntervieweeRelation->firstName}}
                                <img src="{{asset('user/images/verified.png')}}" class="verified-image img-fluid" alt="">
                                <strong>{{$podcast->getCategoryRelation->title}}</strong>
                            </p>
                            @endif
                        </div>

                        <p class="mb-0">{{Str::limit($podcast->description,55)}}</p>

                        <div class="custom-block-bottom d-flex justify-content-between mt-3">
                            <a href="#" class="bi-headphones me-1">
                                <span>120k</span>
                            </a>

                            <a href="#" class="bi-heart me-1">
                                <span>42.5k</span>
                            </a>

                            <a href="#" class="bi-chat me-1">
                                <span>11k</span>
                            </a>

                            <a href="#" class="bi-download">
                                <span>50k</span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex flex-column ms-auto">
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
