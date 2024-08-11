
<style>
.header_mini {
    background-color: #000;
    color: #fff;
    padding: 5px 0;

}

.mini_header_wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

nav.navbar.is-scrolling{
    padding: 0;
    top: 0;
}
nav.navbar{
 padding: 0px;
}

ul, ol {
    
    padding-bottom: 0px;
}

.working-hours {
    display: flex;
    align-items: center;
}
div#main-navbar{
    padding-top: 0;
}

.working-hours i {
    margin-right: 10px;
    color: #00b33c; /* Change this color to match the clock icon color */
}
.working_block{
 color: #59BA47;
}

.contact-info {
    display: flex;
    align-items: center;
}

.contact-info span {
    margin-right: 20px;
}

.social-icons {
    display: flex;
    align-items: center;
    padding-left: 20px;
}

.social-icons a{
    height: 30px;
    width: 30px;
    border-radius: 50%;
    background-color: #59BA47;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    margin-left: 5px;
}


@media (max-width: 768px) {
    .container {
        flex-direction: column;
        text-align: center;
    }

    .working-hours,
    .contact-info {
        margin-bottom: 10px;
    }

    .contact-info {
        flex-direction: column;
    }

    .contact-info span {
        margin-right: 0;
        margin-bottom: 5px;
        color:#59BA47;
    }

    .social-icons {
        justify-content: center;
    }
}
    .corseco_nav{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    .corseco_nav li{
      list-style: none;
    }
    .corseco_nav li a{
       text-decoration: none;
       font-weight: 700;
       color:#BDBDBD;
    }
    a.btn{
        border: 0px;
        padding: 0;
    }
    a.btn:hover, a.btn:focus{
        background-color: transparent;
        color: #BDBDBD;
    }

</style>

<header class="row" id="header">
        <nav class="navbar navbar-default navbar-fixed-top" >
             <div class="header_mini">
        <div class="mini_header_wrapper">
            <div class="working-hours">
               
                <span><span class="working_block"> <i class="fa fa-work"></i><b>ម៉ោងធ្វើការ៖</b></span>  Mon - Fri, 8:00AM - 5:30PM</span>
            </div>
            <div class="contact-info">
                <span>info@3coresco.com</span>
                <span>+855 12 456 678</span>|
                <div class="social-icons">
                    <a href=""#ss><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
            <div class="container">
                <!--========== Brand and toggle get grouped for better mobile display ==========-->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#header"><img src="{{asset('3corseco_asset/img/logo.svg')}}" alt=""></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--========== Collect the nav links, forms, and other content for toggling ==========-->
                <div class="collapse navbar-collapse" id="main-navbar">
                  
                    <ul class="corseco_nav" style="padding:0;">
                        <li><a href="/">ទំព័រដើម</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ផលិតផល<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach ($product_cate as $category)
                                 <li><a href="{{ url('products?by=').$category->slug}}">{{ $category->name_kh}}</a></li>
                                 <li class="divider"></li>
                                @endforeach
                                <li><a href="/palm-fruit-powder">Palm Fruit Powder</a></li>
                                <li class="divider"></li>
                                <li><a href="/irvingia-malayana">Irvingia malayana</a></li>
                                <li class="divider"></li>
                                <li><a href="/banana-chips">Banana Chips</a></li>
                            
                            </ul>
                        </li>
                        <li><a href="/articles">អត្ថបទ</a></li>
                        <li><a href="/about">អំពីយើង</a></li>
                       
                        <li  class="dropdown show">
                            
                            <a class="btn dropdown-toggle" href="#" role="button" id="lang_change" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <img src="{{asset('3corseco_asset/img/Cambodia.svg')}}" >
                               <span>ភាសាខ្មែរ</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="lang_change">
                                <a class="dropdown-item" href="#">Khmer</a><br>
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </li>
                        <li style="background:#59BA47; padding-left: 5px; color:white;">
                            <a href="#contact" style="color: white;">
                                BUY NOW<br>
                                +855 12 678 789
                            </a>
                        </li>
                    </ul>
                </div>
                <!--========== /.navbar-collapse ==========-->
            </div>
            <!--========== /.container-fluid ==========-->
        </nav>

    </header>