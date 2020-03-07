@extends('layouts.frontend')


@section('content')

<div class="content-wrapper">

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">{{ $post->title}}</h1>
    </div>
</div>

<!-- End Stunning Header -->

<!-- Post Details -->


<div class="container">
    <div class="row medium-padding120">
        <main class="main">
            <div class="col-lg-10 col-lg-offset-1">
                <article class="hentry post post-standard-details">

                    <div class="post-thumb">
                        <img src="{{ $post->featured }}" alt="seo">
                    </div>

                    <div class="post__content">


                        <div class="post-additional-info">

                            <div class="post__author author vcard">
                                Posted by

                                <div class="post__author-name fn">
                                    <a href="#" class="post__author-link"></a>
                                </div>

                            </div>

                            <span class="post__date">

                                <i class="seoicon-clock"></i>

                                <time class="published" datetime="2016-03-20 12:00:00">
                                {{ $post->created_at->toFormattedDateString() }}
                                   
                                </time>

                            </span>

                            <span class="category">
                                <i class="seoicon-tags"></i>
                                <a href="#">"{{ $post->category->name }}"</a>
                               
                            </span>

                        </div>

                        <div class="post__content-info">

                           {{  $post->content  }}

                         
                </article>

               

                <div class="pagination-arrow">
                @if($next)

               
                    <a href="{{ route('post.single', $next->slug)}}" class="btn-prev-wrap">
                        <svg class="btn-prev">
                            <use xlink:href="#arrow-left"></use>
                        </svg>
                        <div class="btn-content">
                            <div class="btn-content-title">Next Post</div>
                            <p class="btn-content-subtitle">{{$next->title}}</p>
                        </div>
                    </a>
                    @endif

                    @if($prev)
                    <a href="{{ route('post.single', $prev->slug)}}" class="btn-next-wrap">
                        <div class="btn-content">
                            <div class="btn-content-title">Previous Post</div>
                            <p class="btn-content-subtitle">{{$prev->title}}</p>
                        </div>
                        <svg class="btn-next">
                            <use xlink:href="#arrow-right"></use>
                        </svg>
                    </a>
                  
                    @endif
                </div>
            </div>

            <!-- End Post Details -->

            <!-- Sidebar-->

            

        </main>
    </div>
</div>



</div>

@endsection
