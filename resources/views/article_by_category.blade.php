<!-- resources/views/articles.blade.php -->
@extends('layout')

@section('title', 'Articles')

<style>
    .fadeInOnLoad {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    ul.pagination{
        margin: 0;
    }
    ul.pagination li a{
        border-radius: 0;
        background-color: #828282;
    }
    ul.pagination li.active a{
        border-radius: 0;
        background-color: #000;
    }
    ul.pagination li:first-child a, .pagination li:last-child a{
        border-radius: 0;
    }
    ul.pagination li:first-child a, .pagination li:last-child a{
        border-radius: 0;
    }
    ul.pagination>li:last-child>a, .pagination>li:last-child>span{
        border-radius: 0;
    }
    .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: start;
            align-items: center;
            padding: 10px;
        }
        .tag-button {
            padding: 10px 10px;
            border: 1px solid #cfcfcf;
            border-radius: 5px;
            background-color: #f8f8f8;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .tag-button:hover {
            background-color: #e0e0e0;
        }
        .tag-button.active {
            background-color: #28a745;
            color: white;
        }
</style>

@section('content')
<div class="container my-4" style="padding-top: 10rem;">
    <header class="mb-4">
        <h2 class="mb-4 text-center">Read our Article</h2>
            <div class="tags-container">
                @foreach($categories as $category)
                    <div class="tag-button text-capitalize @if($category->name === 'all') active @endif">
                        <a style="color: #000;" href="{{ url('articles', $category->slug) }}">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
    </header>
   
    <div class="row fadeInOnLoad">
        @foreach($carticle_listing as $article)
            <div class="col-md-4 mb-4">
                <a href="{{url('/read', $article->article_slug)}}">
                    <div class="card h-100">
                        @if (Str::startsWith($article->cover_picture, ['http://', 'https://']))
                            <img src="{{ $article->cover_picture }}" style="width: 100%; height: 250px;" class="card-img-top" alt="Cashews">
                        @else
                            <!-- Optionally, you can display a placeholder image or handle the case where the URL is not valid -->
                            <img src="{{ asset('$article->cover_picture') }}" style="width: 100%; height: 250px;" class="card-img-top" alt="Cashews">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->article_title }}</h5>
                            @php
                                $keywords = json_decode($article->keywords);
                            @endphp
                            @php
                                // Unserialize the category_id array
                                $category_ids = unserialize($article->category_id);
                            @endphp

                            @if($categories && is_array($category_ids))
                                @foreach($categories as $category)
                                    @if(in_array($category->id, $category_ids))
                                        <span class="card-text text-success"><a class="text-success text-capitalize" href="{{url('articles',$category->slug)}}">{{ $category->name }}</a></span>,
                                    @endif
                                @endforeach
                            @endif

                            <!-- @if($keywords)
                                @foreach($keywords as $keyword)
                                    <span class="badge card-text text-success">#{{ $keyword }}</span>
                                @endforeach
                            @endif -->
                           
                            @php
                                // Ensure $createdAt is a Carbon instance
                                $createdAt = \Carbon\Carbon::parse($article->created_at);
                                $now = \Carbon\Carbon::now();
                                $diffInDays = $createdAt->diffInDays($now);

                                if ($diffInDays < 3) {
                                    // Display as "Feb 23" format if less than 3 days ago
                                    $formattedDate = $createdAt->format('M d');
                                } else {
                                    // Display as "1 day ago", "1 hour ago", etc.
                                    $formattedDate = $createdAt->diffForHumans($now);
                                }
                            @endphp

                            <p class="card-text text-muted">{{ $formattedDate }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>					
    @php
        $currentPage = $carticle_listing->currentPage();
        $totalPages = $carticle_listing->lastPage();
        $paginationUrl = url()->current(); // Get the base URL for pagination links
    @endphp

    <div class="d-flex justify-content-start my-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($currentPage > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginationUrl }}?page={{ $currentPage - 1 }}">&#x3C;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&#x3C;</span>
                    </li>
                @endif

                {{-- Page Number Links --}}
                @for ($i = 1; $i <= $totalPages; $i++)
                    <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $paginationUrl }}?page={{ $i }}">{{ $i }}</a>
                    </li>
                @endfor

                {{-- Next Page Link --}}
                @if ($currentPage < $totalPages)
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginationUrl }}?page={{ $currentPage + 1 }}">&#x3E;</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link">&#x3E;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
    <footer class="text-center mt-4 pt-4 border-top">
        <div class="d-flex justify-content-center mb-2">
            <a href="#" class="text-success mx-2"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-success mx-2"><i class="fab fa-youtube fa-2x"></i></a>
            <a href="#" class="text-success mx-2"><i class="fab fa-instagram fa-2x"></i></a>
        </div>
        <p class="text-muted mb-1">Visit us on</p>
        <div>
            <a href="#" class="text-success mx-2">Term of Use</a>
            <span class="text-muted mx-1">&bull;</span>
            <a href="#" class="text-success mx-2">Privacy Policy</a>
        </div>
        <p class="text-muted mt-2">Copyright Reserved 2024. 3CORECO. All rights reserved</p>
    </footer>
</div>
@endsection
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
