<!-- resources/views/articles.blade.php -->
@extends('layout')

@section('title', $title)

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
        <h2 class="mb-4 text-center">អានអត្ថបទអំពីយើង</h2>
            <div class="tags-container">
                @foreach($categories as $category)
                    <div class="tag-button text-capitalize @if($oncategory === $category->slug) active @endif">
                        @if($category->slug === 'all')
                            <a style="color: #000;" href="{{ url('articles')}}">{{ $category->name_in_khmer }}</a>
                        @else
                            <a style="color: #000;" href="{{ url('articles?category=').$category->slug }}">{{ $category->name_in_khmer }}</a>
                        @endif
                    </div>
                @endforeach
            </div>
    </header>
   
    <div class="container">
    @if($carticle_listing->isEmpty())
        <!-- No data found message -->
        <div class="text-center my-4" 
            style="
            padding: 50px;
            color: red;
            font-weight: 900;
            font-size: 3rem;
            "
        >
            <h1>No Found Post Data</h1>
        </div>
    @else
        <!-- Articles listing -->
        <div class="row fadeInOnLoad">
            @foreach($carticle_listing as $article)
                <div class="col-md-4 mb-4">
                    <a href="{{ url('/read', $article->article_slug) }}">
                        <div class="card h-100">
                            @if (Str::startsWith($article->cover_picture, ['http://', 'https://']))
                                <img src="{{ $article->cover_picture }}" style="width: 100%; height: 250px;" class="card-img-top" alt="Cashews">
                            @else
                                <img src="{{ asset($article->cover_picture) }}" style="width: 100%; height: 250px;" class="card-img-top" alt="Cashews">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->article_title }}</h5>
                                @php
                                    $keywords = json_decode($article->keywords);
                                    $category_ids = unserialize($article->category_id);
                                @endphp

                                @if($categories && is_array($category_ids))
                                    @foreach($categories as $category)
                                        @if(in_array($category->id, $category_ids))
                                            <span class="card-text text-success">
                                                <a class="text-success text-capitalize" href="{{ url('articles', $category->slug) }}">{{ $category->name }}</a>
                                            </span>,
                                        @endif
                                    @endforeach
                                @endif

                                @php
                                    $createdAt = \Carbon\Carbon::parse($article->created_at);
                                    $now = \Carbon\Carbon::now();
                                    $diffInDays = $createdAt->diffInDays($now);

                                    if ($diffInDays < 3) {
                                        $formattedDate = $createdAt->format('M d');
                                    } else {
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

        <!-- Pagination -->
        @php
            $currentPage = $carticle_listing->currentPage();
            $totalPages = $carticle_listing->lastPage();
            $paginationUrl = url()->current(); // Get the base URL for pagination links
        @endphp

        @if ($totalPages > 1)
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
        @endif
    @endif
</div>



    <footer class="text-center mt-4 pt-4 border-top">
        <div class="d-flex justify-content-center mb-2">
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/facebook.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/youtube.svg')}}" /></a>
            <a href="#" class="text-success mx-2"><img src="{{ asset('3corseco_asset/article/icons/instagram.svg')}}" /></a>
        </div>
        <p class="text-muted mb-1">Visit us on</p>
        <div>
            <span class="text-muted mx-1">&bull;</span>
            <a href="#" class="text-success mx-2">Privacy Policy</a>
        </div>
        <p class="text-muted mt-2">Copyright Reserved 2024. 3CORECO. All rights reserved</p>
    </footer>
</div>
@endsection

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
