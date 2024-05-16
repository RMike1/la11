<x-home-layout>
    <main>

        @include('partials.nav-bar')


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Listen to Pod Talk</h1>

                            <p class="text-white">Listen it everywhere. Explore your fav podcasts.</p>

                            <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Start listening</a>
                        </div>

                        <div class="owl-carousel owl-theme">
                            @include('partials.interviewee')
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Lastest episodes</h4>
                        </div>
                    </div>
                    @include('partials.latestEpisode')
                </div>
            </div>
        </section>

        @include('partials.topics')

        @include('partials.trendings')

    </main>
</x-home-layout>