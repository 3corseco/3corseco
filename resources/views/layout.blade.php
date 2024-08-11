<html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--========== Page Ttile ==========-->
    @include('plugin.css')
    <script src="https://kit.fontawesome.com/a4151a8a5e.js" crossorigin="anonymous"></script>
    
    <head>
        <title>3corseco | @yield('title')</title>
        <style>
            .scroll_to_top {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                display: none; /* Initially hidden */
            }

            .scroll_to_top > .icon_wrapper {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background-color: #59BA47;
                color: white;
                display: flex;
                flex-direction: column;
                align-content: center;
                justify-content: center;
                text-align: center;
                font-size: 16px;
            }

            .scroll_to_top i {
                font-size: 1.5em;
            }

            .scroll_to_top p {
                margin: 0;
                margin-top: 5px;
                font-size: 14px;
                color: #333;
            }
        </style>
    </head>
    <body class="home" data-scroll-animation="true" data-spy="scroll" data-target="#main-navbar">
        <header>
            @include('header')
        </header>
        @yield('content')
        <footer>
            @include('footer')
        </footer>
       @include('plugin.scripts')
       <div class="scroll_to_top" id="scrollToTopButton">
        <div class="icon_wrapper">
                <i class="fa-regular fa-circle-up"></i>
            </div>
            <p>Go to Top</p>
        </div>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollToTopButton = document.getElementById('scrollToTopButton');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    scrollToTopButton.style.display = 'flex';
                    scrollToTopButton.style.opacity = '1';
                } else {
                    scrollToTopButton.style.display = 'none';
                    scrollToTopButton.style.opacity = '0';
                }
            });

            scrollToTopButton.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</html>