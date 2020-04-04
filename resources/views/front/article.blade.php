@extends('front.master.master')

@section('content')


<div class="jumbotron jumbotron-single d-flex align-items-center" style="background-image: url(img/bg.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4">Artigo</h1>
  </div>
</div>	<!-- Blog Section -->
<section id="blog" class="bg-grey">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap mb-5" data-aos="fade-up">
                <h2 class="section-title">Latest <b>news</b></h2>
                <p class="section-sub-title">Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            <div class="row">
                <!-- Blog -->
                <div class="col-md-12 blog-holder">
                    <div class="row">
                        <!-- Blog Item -->
                        @isset($post)                            
                            <!-- Blog Item -->
                            <div class="col-md-12 blog-item-wrapper" data-aos="fade-up" data-aos-delay="200">
                                <div class="blog-item">
                                    <div class="blog-img">
                                        <a href=""><img src="{{ \Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 1200)) }}" alt=""></a>
                                    </div>
                                    <div class="blog-text">
                                        <div class="blog-tag">
                                            <a href="#"><h6><small>{{ $post->name }}</small></h6></a>
                                        </div>
                                        <div class="blog-title">
                                            <a href="#"><h4>{{ $post->title }}</h4></a>
                                        </div>
                                        <div class="blog-meta">
                                            <p class="blog-date">{{ date('d/m/Y', strtotime($post->created_at)) }}</p> /
                                            <p class="blog-comment"><a href="">{{ $post->views }} Comments</a></p>
                                        </div>
                                        <div class="blog-desc">
                                            <p>{{ $post->content }}</p>
                                        </div>
                                        <div class="blog-author">
                                            <p>by Raphael Moraes</p>
                                        </div>
                                        <div class="blog-share-wrapper">
                                            <a class="blog-share" href="{{ route('article', $post->uri) }}">
                                                <i class="fab fa-facebook-square"></i>
                                            </a>
                                            <a class="blog-share" href="{{ route('article', $post->uri) }}">
                                                <i class="fab fa-twitter-square"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Blog Item -->
                        @endisset                        
                    </div>
                </div>
                <!-- End of Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Section -->
@endsection