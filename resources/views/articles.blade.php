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
            <div class="tag-button active">Newest</div>
            <div class="tag-button">Health and Wellness</div>
            <div class="tag-button">Recipes and Cooking Tips</div>
            <div class="tag-button">Sustainability Practices</div>
            <div class="tag-button">Community</div>
            <div class="tag-button">Education</div>
            <div class="tag-button">Innovations and Technology</div>
            <div class="tag-button">Events and Announcements</div>
            <div class="tag-button">Study Case</div>
        </div>
    </header>
    {{dd($data)}}
    <div class="row fadeInOnLoad">
        @foreach(range(1, 6) as $article)
            <div class="col-md-4 mb-4">
                <a href="/article/The-Journey-Behind-3CORsECO's-Cashew Nuts">
                    <div class="card h-100">
                        <img src="{{asset('3corseco_asset/article/art1.png')}}" style="width: 100%;" class="card-img-top" alt="Cashews">
                        <div class="card-body">
                            <h5 class="card-title">Article {{ $article }}</h5>
                            <p class="card-text text-success">Health and Wellness</p>
                            <p class="card-text text-muted">Feb 23</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>					
    <div class="d-flex justify-content-start my-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">&#x3C;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">&#x3E;</a></li>
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
