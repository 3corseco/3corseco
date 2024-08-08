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
        <h1 class="article-title">The Journey Behind 3CORsECO's Cashew Nuts</h1>
        <div class="divider"></div>
        <div class="article-meta">
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>In <a href="#" class="article-tags">Health and Wellness, Cooking</a></span>
            </div>
            <div>
                <i class="fas fa-user"></i> 
                <span>By Heang Menghorng</span>
            </div>
            <div>
                <i class="fas fa-book-reader"></i>
                <span>View 1200 times</span>
            </div>
        </div>
        <div class="post-banner" style="padding:200px 0; background-image: url('{{ asset("3corseco_asset/artcle_banner/banner1.png") }}');">
        </div>
        <div class="content-body">
         <p class="text-justify">
            In the heart of Cambodia, where fertile lands and resilient communities abound, the story of 3CORsECO began to unfold. This is not merely a narrative about cashew nuts but a tale of innovation, collaboration, and sustainable development aimed at transforming lives and bolstering local economies.
             Origins and Vision 3CORsECO was established on the principles of Collaboration, Co-working, and Community. Our vision is to create a model community-driven enterprise that produces high-quality agricultural products while fostering sustainable development and social responsibility. We are committed to empowering local communities, especially the youth, by providing employment opportunities and skills training.
             Our journey started with a deep connection to the land and the people. Partnering with the Kouy indigenous community and young farmers, we embarked on a mission to cultivate and process cashew nuts, Chombok seeds (wild almonds), and palm fruit powder. Our mission is clear: to create value for community products and promote sustainable agricultural practices.
             Addressing Economic Challenges Cambodia's agricultural sector has long faced the challenge of dependency on exporting raw crops to neighboring countries like Vietnam. This reliance often left local farmers vulnerable to market fluctuations and limited their economic growth. Determined to change this narrative, 3CORsECO sought to reduce Cambodia's dependence on the Vietnamese market by creating a robust local market for cashew nuts. By focusing on the sustainable cultivation and processing of cashews, we aim to empower local farmers, provide stable income sources, and enhance the value of Cambodian agricultural products. Our efforts are aligned with government initiatives to strengthen the domestic market and ensure economic independence. 
            Innovation and Sustainability Our approach to cashew nut processing is rooted in innovation and sustainability. We employ advanced technology and traditional knowledge to ensure the highest quality of our products. The journey of our cashew nuts involves several meticulous steps:
            Harvesting and Selection: Local farmers, trained by 3CORsECO, harvest the cashew nuts with great care. Only the best nuts are selected to ensure premium quality.
            Processing and Quality Control: The selected cashew nuts undergo rigorous processing to remove shells and testa (skin). This labor-intensive process is conducted with precision to preserve the nut’s natural flavor and nutritional value.
            Flavoring and Packaging: Our cashew nuts are available in various delicious flavors, including Pandan, Spicy, Plain, Tom Yam, Milk, and Salty Roasted with Testa. Each 150g pack is carefully packaged to maintain freshness and quality.

            Economic Empowerment and Community Support 3CORsECO’s efforts extend beyond just producing high-quality cashew nuts. We are deeply committed to economic empowerment and community support. Our initiatives have created approximately 100 jobs, integrating community youth into the workforce and supporting local farmers. By promoting sustainable agricultural practices and enhancing the value of local crops, we are helping to build a stronger, more resilient economy. Our collaboration with the government aims to reduce Cambodia's dependency on the Vietnamese market and create new opportunities for local farmers. 
            A Sustainable Future The journey of 3CORsECO is one of resilience and innovation. We believe that through sustainable practices and community collaboration, we can create a brighter future for Cambodia’s agricultural sector. Our cashew nuts are more than just a product; they are a symbol of hope, empowerment, and sustainable development. When you choose 3CORsECO’s cashew nuts, you are not only enjoying a delicious and nutritious snack but also supporting a mission that values people, the planet, and progress. Join us in this journey towards economic independence and community empowerment, one cashew nut at a time
         </p>
        </div>
        <div class="container comment-section">
            <div class="comment-header">LEAVE COMMENT</div>
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
