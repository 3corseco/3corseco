@extends('layout')

@section('title', '3corseco.com')
<style>
.row.m0.text-center.fadeInOnLoad{
    padding-top: 70px;
}
.branding_name {
    padding: 15px 0;
}
.branding_name ul{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content:center;
    gap: 4px;
}
    .branding_name ul li{
    font-size: 100px;
    list-style: none;
    text-transform: uppercase;
    font-weight: 900;
    color: white;
    text-shadow: 5px 6px 3px #000000;
    }
    .branding_name ul li:nth-child(6), .branding_name ul li:nth-child(7), .branding_name ul li:nth-child(8){
        color: #24E880;
    }
    a.btn-lg.video{
    background-color: #231F20;
    color: white;
    }
    a > .video_play_icon{
        transform: scale(.4);
    }
    .company_slug > p{
        color: white;
        font-weight: 600;
        text-indent: 20px;
        letter-spacing: 15px;
        margin-top: 10px;
        margin-bottom: 25px;
    }
    .title {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .grid-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }
        .grid-item img {
            width: 100%;
            height: auto;
            display: block;
        }
        .grid-item .text-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            font-size: 1.2em;
        }
        .grid-item .button-container {
            position: absolute;
            bottom: 10px;
            left: 10px;
        }
        .grid-item .button-container button {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1em;
            border-radius: 5px;
        }
        @media (max-width: 768px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }



        :root {
  --n: 4;
  --wmax: 12.5em;
  --wmin: 7.5em;
  --hgap: 2em;
  --ring: 0.625em;
  --wbar: 0.375em;
  --dosc: 2.875em;
  --line: 2px;
  --rad0: 0.5em;
  --rad1: 0.375em;
  --rad2: 0.625em;
  --rad3: 0.25em;
  --aamp: 8deg;
}


#products_model {
  --narr: 1;
  --notnarr: calc(1 - var(--narr));
  --wide: 0;
  --notwide: calc(1 - var(--wide));
  --nor: calc(var(--notnarr) * var(--notwide));
  --or: calc(1 - var(--nor));
  --sum: calc(1 + var(--narr));
  display: flex;
  align-items: center;
  justify-content: space-around;
  flex-wrap: wrap;
  overflow-x: hidden;
  min-height: 100vh;
  background: linear-gradient(
    to right top,
    #ebedec,
    #e3e7e6,
    #dbe1e0,
    #d3dadb,
    #ccd4d6
  );
}

#products_model:before {
  --uw: calc(
    var(--nor) * (100% - var(--n) * var(--hgap)) / var(--n) + var(--or) * var(--wmax)
  );
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  height: calc(var(--sum) * 2 * var(--uw));
  transform: translate(calc(var(--sum) * 50% / var(--n)), -50%);
  background: radial-gradient(
      circle at calc(50% - 1em) calc(39% - 1em),
      #fff calc(var(--rad3) - 1px),
      rgba(#fff, 0) var(--rad3)
    ),
    radial-gradient(
      circle at calc(50% + 1em) calc(39% - 1em),
      #fff calc(var(--rad3) - 1px),
      rgba(#fff, 0) var(--rad3)
    ),
    radial-gradient(
      circle at 50% 39%,
      #fff calc(var(--rad2) - 1px),
      rgba(#fff, 0) var(--rad2)
    );
  background-size: calc(50% / (2 - var(--narr)))
    calc(100% / (1 + var(--narr)));
  clip-path: inset(0 calc(var(--sum) * 25%) 0 0);
  filter: drop-shadow(5px 5px 4px rgba(0, 0, 0, 0.2));
  content: "";
}

@media (max-width: 480px) {
    #products_model:before {
    display: none;
  }
}

@media (min-width: calc(var(--n) * (var(--wmin) + var(--hgap)))) {
    #products_model {
    --narr: 0;
  }
}

@media (min-width: calc(var(--n) * (var(--wmax) + var(--hgap)))) {
    #products_model {
    --wide: 1;
  }
}

.hid {
  position: absolute;
  clip-path: inset(50%);
}

path {
  --s: 2;
  fill: none;
  stroke: currentcolor;
  stroke-width: var(--s);
  stroke-linecap: round;
}

path.d {
  stroke-dasharray: 0 calc(2 * var(--s));
}

path.t {
  --s: 4;
}

section {
  display: flex;
  flex-direction: column;
  padding: 1em calc(0.5 * var(--hgap));
  min-width: var(--wmin);
  width: calc(
    var(--nor) * (100% - var(--n) * var(--hgap)) / var(--n) + var(--or) * var(--wmax)
  );
  font-family: sans-serif;
  text-align: center;
  text-transform: uppercase;
}

h3,
a {
  color: var(--c0);
}

h3 {
  padding: 1em 0 0.5em;
  font-size: calc(var(--nor) * 2vw + var(--or) * 1.16em);
}

p {
  height: 3em;
  font-size: 0.75em;
}

.ico {
  order: -1;
  position: relative;
  margin-bottom: calc(100% + var(--dosc) + var(--line));
  border-radius: 50%;
  box-shadow: inset 0 0 0 var(--ring) #fff,
    11px 11px 12px -9px rgba(27, 14, 0, 0.28);
  background: linear-gradient(135deg, var(--c0), var(--c1)) padding-box;
}
div.con_wrapper{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}

.process-container {
            padding: 50px 0;
            background-color: #f5f5f5;
            text-align: center;
        }
        .process-title {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        .swiper-container {
            width: 100%;
            padding: 20px 0;
        }
        .swiper-slide {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 250px;
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .process-icon {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 15px;
        }
        .process-description {
            font-size: 1rem;
            color: #333;
        }

.ico a {
  --sgn: 1;
  box-sizing: border-box;
  display: grid;
  place-content: center;
  padding: 50%;
  width: 0;
  height: 0;
  border-radius: 50%;
  clip-path: circle(calc(50% - var(--ring)));
}

.ico a:hover {
  --sgn: -1;
}

.ico svg {
  --w: calc(100% - 2 * var(--hgap));
  box-sizing: border-box;
  position: absolute;
  margin: calc(-0.5 * var(--w));
  border: solid calc(0.5 * var(--hgap)) transparent;
  width: var(--w);
  height: var(--w);
  border-radius: 50%;
  transform-origin: 50% 0;
  transform: rotate(calc(-1 * var(--aamp)));
  animation: osc 0.3s ease-in-out infinite alternate;
  box-shadow: calc(var(--sgn) * 36px) 27px 11px -5px rgba(27, 14, 0, 0.16);
  background: linear-gradient(135deg, #fff, #d2d2d2) border-box;
  transition: 0.3s ease-out;
}

@keyframes osc {
  to {
    transform: rotate(var(--aamp));
  }
}

.ico:before,
.ico:after {
  position: absolute;
  content: "";
}

.ico:before {
  box-sizing: border-box;
  top: calc(200% + 1px);
  left: calc(50% - 1.4375em);
  border: solid var(--ring) transparent;
  width: var(--dosc);
  height: var(--dosc);
  border-radius: 50%;
  transform-origin: 50% 0;
  transform: rotate(calc(-1 * var(--aamp)));
  animation: osc 0.3s ease-in-out infinite alternate;
  box-shadow: 0 0 0 var(--line) #fff;
  background: inherit;
  filter: drop-shadow(1px 3px 2px rgba(0, 0, 0, 0.32));
}

.ico:after {
  width: var(--wbar);
  top: calc(100% - 0.5em);
  left: calc(50% - 0.5em);
  border: solid 0 transparent;
  border-width: var(--rad0) var(--rad0) calc(-0.1875em);
  padding-top: 100%;
  background: linear-gradient(#fff, #fff) padding-box,
    radial-gradient(
      circle at 50% var(--rad0),
      #fff calc(var(--rad0) - 1px),
      rgba(#fff, 0) var(--rad0)
    ) border-box,
    radial-gradient(
      circle at 50% calc(100% - var(--rad0)),
      #fff calc(var(--rad1) - 1px),
      rgba(#fff, 0) var(--rad1)
    ) border-box;
}
.bg-map {
            position: relative;
            height: 100%;
            background: url('path/to/your/map-image.jpg') no-repeat center center;
            background-size: cover;
            padding: 30px 0;
        }
        .contact-card {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            background: rgba(255, 255, 255, 10);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .bg-banner {
            position: relative;
            height: 60vh;
            background: url('{{asset("3corseco_asset/img/footer_banner_bg.png")}}') no-repeat center center;
            background-size: cover;
            color: white;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .content {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: left;
            padding: 20px;
        }
        .content h1 {
            font-size: 3rem;
        }
        .content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: white;
        }
        .btn-custom {
            background-color: #59BA47;
            border: none;
            padding: 10px 30px;
            font-size: 1.2rem;
            margin-top: 20px;
            color: white;
        }
        .product-img {
            max-width: 100px;
            margin: 10px;
            transform: scale(2.5);
        }
</style>

@section('content')
            <div class=" row m0 text-center fadeInOnLoad" >
                <div class="" style="
                    background-image: url('{{asset("3corseco_asset/img/home_banner.jpg")}}'); 
                    padding-bottom: 50px;    
                    background-position: center;
                    background-size: cover;"
                >
                    <div>
                        <img src="{{asset('3corseco_asset/img/green_logo_png.png')}}">
                    </div>
                    <div class="branding_name">
                        <ul>
                            <li>3</li>
                            <li>C</li>
                            <li>O</li>
                            <li>r</li>
                            <li>s</li>
                            <li>e</li>
                            <li>c</li>
                            <li>o</li>
                        </ul>
                    </div>
                    <div class="company_slug">
                        <p>
                            និរន្ដរភាព .​​​ គុណភាព .​ សហគមន៍ .​ បរិស្ថាន
                        </p>
                    </div>
                    <a href="https://www.youtube.com/watch?v=m5G0BJETr30" class="btn-lg video">Play <img class="video_play_icon" src="{{asset('images/play-btn-icon.png')}}" alt=""> Video</a>
                    <br>
                    <a href="#product-choose" class="btn btn-warning btn-lg visible-sm-inline-block visible-xs-inline-block">pre-order now</a>
                    <!-- <div class="row apple-watch">
                        <img src="{{asset('3corseco_asset/img/home_banner.jpg')}}" alt="" class="watch_img">
                    </div> -->
                </div>
            </div>
 
            <!--==========The Watch==========-->
            <section class="row the-watch">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 text-center the-watch-img wow zoomIn">
                            <img src="{{asset('3corseco_asset/img/intro_img.png')}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <div class="row v3 wow fadeIn">
                                <h2>គ្រាប់ស្វាយចន្ទីកម្ពុជា គុណភាពលេខ១លើពិភពលោក</h2>
                                <p style="text-align: justify;" class="custom_font_famaly">
                                គ្រាប់ស្វាយចន្ទីកម្ពុជាត្រូវបានរកឃើញថាជាគ្រាប់ដែលជាប់លេខ១   នៅលើពិភពលោកដោយ​សារ​​ទំហំគ្រាប់ធំ  មានគុណភាពល្អ
                                សម្បុរ ស និងសារធាតុចិញ្ចឹមខ្ពស់។ GIZ យកគ្រាប់ស្វាយចន្ទីកម្ពុជាទៅវិភាគចំនួន ២ប្រភេទគឺពូជ 23, និង09 ក្នុងចំណោម៤ប្រភេទ  
                                ដែល​​បានចុះបញ្ជី នៅក្រសួងកសិកម្ម គឺមានពូជ M23, 09, 19, -04 ។  តាមឯកសាររកឃើញថាគ្រាប់ស្វាយចន្ទីកម្ពុជាមានគុណភាពលេខ១ 
                                នៅលើពិភពលោក​ដោយ​ពូជ 23 មានទំហំធំជាងគេនៅ  លើពិភពលោក ហើយរសជាតិទន់ ផ្អែមឆ្ងាញ់។ សារធាតុ​គ្រាប់ស្វាយចន្ទីកម្ពុជា 
                                ប្រៀបធៀបជាមួយបណ្ដា ប្រទេសផ្សេងៗដូចជាប្រទេស ប្រេស៊ីល វៀតណាម   កេនយ៉ា និង ឥណ្ឌា     
                                គឺកម្ពុជា​មាន​សារ​ធាតុចិញ្ចឹមច្រើនជាងគេ     ហើយបើគិតពីកាបូន អ៊ីដ្រាត(carbohydrate) មាន ៣៣ក្រាម   
                                លើសគេ សូដ្យូម(Sodium)   ១៦ ក្រាម និងវីតាមីន K ៣៤ ក្រាម។ នៅឆ្នាំ ២០១៩  សាកល​វិទ្យាល័យតូក្យូ នៅប្រទេសជប៉ុន   
                                ក៏បានយកសំណាកពូជគ្រាប់ស្វាយចន្ទី   M23ទៅពិសោធន៍ផងដែរ ហើយបានរក ឃើញថា មាន​សារ​ធាតុ Omega3 ឈ្មោះ​ Oleic Acid 
                                ដែលជំនួយដល់បេះដូងមានលើសគេ៕
                                </p>
                            </div>
                            <!-- <ul class="nav">
                                <li class="wow fadeIn" data-wow-delay="0.2s">Compatible with all devices</li>
                                <li class="wow fadeIn" data-wow-delay="0.4s">Android and iOS Support</li>
                                <li class="wow fadeIn" data-wow-delay="0.6s">Activity &amp; Health Tracker</li>
                                <li class="wow fadeIn" data-wow-delay="0.8s">Read &amp; reply to messages</li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </section>
            <!--========== Gallary ==========-->
            <div class="container">
                <h2 style="text-align: center;">PRODUCT STORIES</h2>
                <div style="position:relative;">
                    <swiper-container class="mySwiper" navigation="true" style="height:350px; padding:0 100px; position:relative;">
                        <swiper-slide style="
                            background-image: url('3corseco_asset/products/Pandan flavor1.jpg'); border-radius:50px;
                            background-repeat: no-repeat;
                            background-size: 80%;
                            background-position: center;
                        ">
                        </swiper-slide>
                        <swiper-slide style="
                            background-image: url('3corseco_asset/products/photo_2024-03-06_10-51-24.jpg'); border-radius:50px;
                            background-repeat: no-repeat;
                            background-size: 80%;
                            
                            background-position: center;
                        ">
                        </swiper-slide>
                        <swiper-slide style="
                            background-image: url('3corseco_asset/products/Cashew Testa.jpg'); border-radius:50px;
                            background-repeat: no-repeat;
                            background-size: 80%;
                            background-position: center;
                        ">
                        </swiper-slide>
                        <swiper-slide style="
                            background-image: url('3corseco_asset/products/Spicy Flavor1.jpg'); border-radius:50px;
                            background-repeat: no-repeat;
                            background-size: 80%;
                            background-position: center;
                        ">
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>


            <!--TIMELINE ********************************************************************************************-->
            <div  id="our-life-sotry" class="container ts-block ts-separate-bg-element ts-background-repeat" data-bg-image-opacity=".1">
                <div class="text-center ts-title">
                    <h2>ដំណើរការផលិត</h2>
                </div>
                <!--end ts-title-->
                <div class="ts-time-line__horizontal">
                    <ul class="pt-5 owl-carousel" data-owl-items="99" data-owl-auto-width="1">
                        <li class="ts-time-line__item">
                            <div class="ts-box">
                                <div
                                    style="
                                    display: flex;
                                    flex-direction: row;
                                    align-items: center;
                                    justify-content: start;
                                    gap: 10px;
                                    flex-wrap: nowrap;
                                    "
                                    >
                                    <div
                                        style="
                                        width: 40px;
                                        height: 40px;
                                        padding:5px;
                                        background-color: #2964B6;
                                        border-radius: 50%;
                                        display: flex;
                                        flex-direction: row;
                                        align-items: center;
                                        justify-content: center;
                                        "
                                        >
                                        <image src="{{asset('3corseco_asset/icons/person.svg')}}" style="width: 40px;">
                                    </div>
                                    <h5>
                                        បណ្ដាញកសិករផ្គត់ផ្គង់គ្រាប់
                                    </h5>
                                </div>
                                <p>
                                    ចងក្រងកសិករផ្គត់ផ្គង់គ្រាប់ស្រស់ ដែលមានសហគមន៍ 
                                    ជនជាតិដើមភាគតិចកួយ ក្រុមកសិករវ័យក្មេងស្រុក ប្រាសាទសំបូរ
                                </p>
                                <!-- <a href="#" class="btn btn-dark btn-sm">Read More</a> -->
                            </div>
                            <!--end ts-box-->
                            <!-- <figure>
                                <small>Mar</small>
                                <h6>2017</h6>
                            </figure> -->
                            <!--end date-->
                        </li>
                        <li class="ts-time-line__item">
                            <div class="ts-box">
                                <h5>ចំការគម្រូផ្ទាល់ និងសម្រាប់ផ្គត់ផ្គង់ ៦០ហ</h5>
                                <p>
                                    ផ្ទៃដី៦០ ហិកតាដែលកំពុងសាកល្បងធ្វើកសិកម្មបែប Regeneration Farming 
                                    ដែលបង្ហាញពីជម្រើស កសិកម្មបែបថ្មី ឆ្លើយតបនឹងបំរែបំរួលអាកាសធាតុ
                                </p>
                            </div>
                        </li>
                        <li class="ts-time-line__item">
                            <div class="ts-box">
                                <h5>ប្រមូលគ្រាប់ លាងសម្អាតហាលនិងស្តុក</h5>
                                <p>
                                ដើម្បីធានាបានគ្រាប់ស្វាយចន្ទីដែលមានគុណភាពល្អ 
                                គ្រាប់ត្រូវលាងសម្អាតឲ្យបានស្អាត ហាលដោយទុកសំណើមត្រឹម ៩%
                                </p>
                            </div>
                        </li>
                        <li class="ts-time-line__item">
                            <div class="ts-box">
                                <h5>Next 8 developers join our team</h5>
                                <p>
                                    Integer eu ultrices lacus, at laoreet nunc. In tincidunt
                                </p>
                            </div>
                        </li>
                        <li class="ts-time-line__item">
                            <div class="ts-box">
                                <h5>First Prototype is here</h5>
                                <p>
                                    Integer eu ultrices lacus, at laoreet nunc. In tincidunt nisi lorem, eu tempor ligula pulvinar at.
                                </p>
                            </div>
                        </li>
                        <li class="ts-time-line__item">
                            <div class="ts-box">
                                <h5>Solution for slow money transfers</h5>
                                <p>
                                    Phasellus in iaculis ante. Fusce odio justo, pulvinar sit amet nisl sed, lacinia laoreet
                                    augue. Integer eu ultrices lacus, at laoreet
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const processSteps = [
                        {
                            icon: 'fas fa-seedling',
                            description: 'ចុះផ្សារក្នុងវិស័យកសិកម្ម'
                        },
                        {
                            icon: 'fas fa-tractor',
                            description: 'កាត់ថ្លៃបញ្ចុះ បន្ថែមតម្លៃ'
                        },
                        {
                            icon: 'fas fa-recycle',
                            description: 'ពង្រីកផលិតកម្ម'
                        },
                        {
                            icon: 'fas fa-hand-holding-water',
                            description: 'ការរុងរឿងនៃសហគមន៍'
                        }
                    ];

                    const processStepsContainer = document.getElementById('process-steps');

                    processSteps.forEach(step => {
                        const stepElement = document.createElement('div');
                        stepElement.classList.add('swiper-slide');

                        stepElement.innerHTML = `
                            <div class="process-icon"><i class="${step.icon}"></i></div>
                            <div class="process-description">${step.description}</div>
                        `;

                        processStepsContainer.appendChild(stepElement);
                    });

                    const swiper = new Swiper('.swiper-container', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                            1024: {
                                slidesPerView: 4,
                                spaceBetween: 40,
                            },
                        },
                    });
                });
            </script>

    <!-- featured post -->
        <div class="container my-5">
            <h1 class="text-center mb-4">FEATURED POST</h1>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{asset('3corseco_asset/img/post1.png')}}" alt="Article 1" class="img-fluid rounded">
                    <p class="text-muted" style="text-align: left;">សហគ្រាសកែច្នៃស្វាយចន្ទីក្មេងខ្ចី«៣កូអេកូ»ដាក់ផែនការ ពង្រីកផលិតកម្ម នាំចេញទៅបរទេស</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('3corseco_asset/img/post2.png')}}" alt="Article 2" class="img-fluid rounded">
                    <p class="text-muted" style="text-align: left;">សហគ្រាស ៣កូអេកូ ឈ្នះការប្រកួតអ្នកកែច្នៃស្វាយចន្ទី ឆ្នើមលេខ២ ឆ្នាំ២០២៤</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('3corseco_asset/img/post3.png')}}" alt="Article 3" class="img-fluid rounded">
                    <!-- <h2 class="mt-3">Article 3</h2> -->
                    <p class="text-muted" style="text-align: left;">ម្សៅត្នោតទុំ របស់សហគ្រាស ៣កូអេកូ ឈ្នះជ័យលេភី ប្រកួតផែនការណ៍អាជីវកម្ម អាជីវកម្មខ្ញុំ</p>
                </div>
            </div>
        </div>
    <div class="text-center mt-5 mb-4" style="padding-bottom: 2rem;">
            <h3 class="mb-4">AS FEATURES ON</h3>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="{{asset('3corseco_asset/puporter/image 5.png')}}" alt="CNN" class="mx-2 my-2">
                <img src="{{asset('3corseco_asset/puporter/image 6.png')}}" alt="Forbes" class="mx-2 my-2">
                <img src="{{asset('3corseco_asset/puporter/image 7.png')}}" alt="Lonely Planet" class="mx-2 my-2">
                <img src="{{asset('3corseco_asset/puporter/image 8.png')}}" alt="Inc" class="mx-2 my-2">
                <img src="{{asset('3corseco_asset/puporter/image 9.png')}}" alt="Red Herring" class="mx-2 my-2">
                <img src="{{asset('3corseco_asset/puporter/image 10.png')}}" alt="VOA" class="mx-2 my-2">
            </div>
    </div>

    <!-- footer banner section -->
    <div class="bg-banner mt-4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row content">
                <div class="col-lg-6 col-md-4 col-sm-12 d-flex align-items-center justify-content-center">
                    <img src="{{asset('3corseco_asset/products/home_product.jpg')}}" class="product-img" alt="Product 1">
                </div>
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h1>Buy now to Support Local Products</h1>
                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                    <a href="#" class="btn-custom">
                        <img src="{{asset('3corseco_asset/img/shopping-cart.png')}}" >
                        Check out our product now
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="row contact" id="contact" style="padding: 0;">
        <!-- ================== GOOGLE MAP (Change data-lat & data-lon values) ====================== -->
        <!-- TIP : To change the map style, Visit /js/plugins/google-map.js -->
        <div id="mapBox" class="row m0" data-lat="37.3818288" data-lon="-122.0636325" data-zoom="15"></div>
        <!-- Flippable Contact Box -->
        <div class="flip-box-container row m0">
            <div class="flip-box row m0 wow fadeIn">
                <!-- Contact Address (front Side) -->
                <div class="row contact-box flip-box-part">
                    <h2>get in touch</h2>
                    <p class="text-center">អាសយដ្ឋាន: ស្រុកស្ទោង ខេត្តកំពង់ធំ</p>
                    <p class="text-center"><i class="fas fa-phone"></i> +855 10 500660 &nbsp;&nbsp; +855 92654327</p>
                    <div class="text-center">
                        <a href="#"><img src="{{asset('3corseco_asset/img/whatsapp.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('3corseco_asset/img/weechat.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('3corseco_asset/img/line.svg')}}" alt=""></a>
                        <a href="#"><img src="{{asset('3corseco_asset/img/telegram.svg')}}" alt=""></a>
                        <a href="#">+855 92654327</a>
                    </div>
                    <p class="text-center"><i class="fas fa-envelope"></i> info@3corseco.com</p>
                    <!-- <button class="flip-contact-box btn btn-block">contact us</button> -->
                </div>
                <!-- Contact Form (back Side) -->
                <div class="row contact-form flip-box-part">
                    <a href="javascript:void(0);" class="js-close-flip">&times;</a>
                    <!-- Contact Form Starts here -->
                    <form action="php/contact.php" id="phpcontactform" method="POST">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" id="js-contact-btn" class="btn btn-block">Send Message</button>
                        <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>
                    </form>
                    <!-- // End Contact form -->
                </div>
                <!-- // End back Side -->
            </div>
        </div>
        <!-- // End Contact Box -->
    </section>
    
@endsection