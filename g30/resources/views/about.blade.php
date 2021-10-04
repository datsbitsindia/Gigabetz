@extends('main')

@section('stylesheet')
    
@stop

@section('title')
ABOUT
@stop

@section('header')
@include('partials._header')
@stop

@section('content')

<div id="colorlib-main">
    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container-fluid px-0">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch align-items-center js-fullheight" style="background-image:url({{ asset('public/frontend/images/about.jpg') }});">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="text px-4 pt-5 pt-md-0 px-md-4 pr-md-5 ftco-animate">
                        <h2 class="mb-4">Hello! I'm<span> Jeffrey White</span> the CEO of a Mostudio Photography</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <div class="team-wrap row mt-4">
                            <div class="col-md-4 team">
                                <div class="img" style="background-image: url({{ asset('public/frontend/images/team-1.jpg') }});"></div>
                                <h3>John Doe</h3>
                                <span>Photographer</span>
                            </div>
                            <div class="col-md-4 team">
                                <div class="img" style="background-image: url({{ asset('public/frontend/images/team-2.jpg') }});"></div>
                                <h3>John Flex</h3>
                                <span>Photographer</span>
                            </div>
                            <div class="col-md-4 team">
                                <div class="img" style="background-image: url({{ asset('public/frontend/images/team-3.jpg') }});"></div>
                                <h3>John Flex</h3>
                                <span>Photographer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- END COLORLIB-MAIN -->

@endsection

@section('scripts')
<script>

</script>
@stop