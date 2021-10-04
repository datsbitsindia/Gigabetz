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
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container px-md-0">
            <div class="row d-flex no-gutters">
                @if(!empty($data_users))
                @foreach($data_users as $k => $f)
                <div class="col-md-4 portfolio-wrap-2">
                    <div class="row no-gutters align-items-center">
                        <div href="{{route('gallerydetails', $f->id)}}" class="img w-100 js-fullheight d-flex align-items-center" style="background-image: url({{ asset('public/frontend/images/gallery/'.$f->gallery_image) }});">
                            <div class="text p-4 p-md-5 ftco-animate">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">{{$f->image_size}}</span>
                                        <h2 class="mb-4"><a href="{{route('gallerydetails', $f->id)}}">{{$f->title}}</a></h2>
                                        <p><a href="{{route('gallerydetails', $f->id)}}" class="custom-btn">View Portfolio</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif                

            </div>
            <div class="row d-flex">
                <div class="col-md-12">
                    <a href="#" class="btn-custom-load d-block w-100 text-center py-4">Load more <span class="fa fa-refresh"></span></a>
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