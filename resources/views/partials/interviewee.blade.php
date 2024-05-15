@foreach($intervieweeData as $interviewee)
                    <div class="owl-carousel-info-wrap item">
                        <img src="{{asset('user/images/profile/man-portrait.jpg')}}"
                            class="owl-carousel-image img-fluid" alt="">

                        <div class="owl-carousel-info">
                            <h4 class="mb-2">
                                {{$interviewee->firstName}}
                                @if($interviewee->is_verified)
                                <img src="{{asset('user/images/verified.png')}}" class="owl-carousel-verified-image img-fluid" alt="">
                                @endif
                            </h4>

                            @if($interviewee->categoryRelation)

                            @foreach($interviewee->categoryRelation as $data)
                            <span class="badge">{{$data->title}}</span>
                            @endforeach
                            @endif
                        </div>

                        <div class="social-share">
                            <ul class="social-icon">
                                @if($interviewee->socialMediaRelation)
                                @foreach($interviewee->socialMediaRelation as $info)
                                <li class="social-icon-item">
                                    <a href="{{$info->url}}" class="social-icon-link bi-{{$info->name}}"></a>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    @endforeach