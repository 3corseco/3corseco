<!-- resources/views/articles.blade.php -->
@extends('layout')

@section('title', $title)

<style>
        .article-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            font-size: 1rem;
            color: #555;
            padding:10px;
            padding-bottom: 15px;
        }
        .article-meta i {
            margin-right: 5px;
        }
        .share-section{
            padding:15px 10px;
        }
        div.line-b{
            border-bottom: 1px solid #e0e0e0;
        }
        div.line-t{
            border-top: 1px solid #e0e0e0;
        }
        .article-tags a {
            color: #28a745;
            text-decoration: none;
        }
        .article-tags a:hover {
            text-decoration: underline;
        }
        .article-title {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .divider {
            border-bottom: 1px solid #e0e0e0;
            margin: 10px 0;
        }
        .share-section {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 20px;
        }
        .share-icons a {
            color: #8fc797;
            font-size: 1.5rem;
            text-decoration: none;
            transition: color 0.3s;
        }
        .share-icons a:hover {
            color: #6fa36b;
        }
</style>

@section('content')
    <div class="container mt-4" style="padding-top:10rem;">
        <h1 class="article-title">{{$article_reading->article_title}}</h1>
        <div class="divider"></div>
        @php
            // Unserialize the category_id array
             $category_ids = unserialize($article_reading->category_id);
        @endphp

        <div class="article-meta">
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>In 
                    @if($categories && is_array($category_ids))
                        @foreach($categories as $category)
                            @if(in_array($category->id, $category_ids))
                               <a class="article-tags" href="{{url('category-by',$category->slug)}}">{{ $category->name }}</a>,
                            @endif
                        @endforeach
                    @endif
                </span>
            </div>
            <div>
                <i class="fas fa-user"></i> 
                <span>{{$article_reading->creators}}</span>
            </div>
            <div>
                <i class="fas fa-book-reader"></i>
                <span>View 1200 times</span>
            </div>
        </div>
        <div class="post-banner" style="
            padding:200px 0; 
            background-image: url('{{ asset($article_reading->cover_picture) }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            ">
        </div>
        @php
            $keywords = json_decode($article_reading->keywords);
        @endphp
        <div class="driver" 
        style="
            border-bottom: 1px solid;
            padding-bottom: 5px;
        ">
            @if($keywords)
                    @foreach($keywords as $keyword)
                        <a class="badge card-text text-success" href="{{ url('articles?keyword=').$keyword }}"
                            style="
                                padding-bottom:8px; padding-top:8px;
                                margin-top:5px;
                              
                            ">#{{ $keyword }}</a>
                     @endforeach
            @endif 
        </div>
        <div class="content-body" style="padding:20px 15px;">
         {!!$article_reading->description_kh!!}
        </div>
        <div class="container comment-section" >
            <div id="disqus_thread"></div>
        </div>
    

        <div class="share-section line-t line-b">
            <span class="font-weight-bold">Share:</span>
            <div class="share-icons">
            <a href="#" class="text-success mx-2">
                <img src="{{ asset('3corseco_asset/article/icons/facebook.svg')}}" />
            </a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/twitter.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/linkedin.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/telegram.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/youtube.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/telegram.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/telegram.svg')}}" /></a>
            </div>
        </div>
        <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://cwb-world.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
@endsection
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
