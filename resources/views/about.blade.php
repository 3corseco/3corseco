<!-- resources/views/articles.blade.php -->
@extends('layout')

@section('title', 'Articles')

<style>
    .hero-section {
        position: relative;
    }

    .hero-section img {
        height: auto;
        width: 100%;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(0, 0, 0, 0.5); semi-transparent background */
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    .overlay-content {
        background-color: rgb(111 119 127 / 63%); /* darker transparent background */
        padding: 20px;
        margin-right: 15px;
        border-radius: 10px;
        text-align: left;
        width: 60%;
        color: white;
    }
    .list-unstyled li{
        color: white;
    }
    swiper-container {
      width: 100%;
      height: 100%;
    }

.main {
    position: relative;
    width: calc(min(90rem, 90%));
    margin: 0 auto;
    display: flex;
    align-items: center;
    min-height: 40vh;
    min-height: 50svh;
    column-gap: 3rem;
    /* padding-block: min(20vh, 3rem); */
    overflow: hidden; /* Hide scrollbars */
}

.swiper_about {
    width: 100%;
    padding: 1.875rem 0;
}

.swiper-slide {
    width: 18.75rem;
    height: 35rem;
    display: flex;
    flex-direction: column;
    justify-content: end;
    align-items: self-start;
    box-shadow: 0.063rem 0.5rem 1.25rem hsl(0deg 0% 0% / 12.16%);
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}

.swiper-slide-img {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    transform: rotate(180deg);
    line-height: 0;
    bottom: -0.063rem;
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
}

.swiper-slide-img img {
    width: 100%;
    height: 100%;
    position: absolute;
    inset: 0;
    object-fit: cover;
    z-index: -1;
    transition: 0.3s ease-in-out;
    transform: rotate(-180deg);
}

.swiper-slide-img svg {
    position: relative;
    display: block;
    width: calc(300% + 1.3px);
    height: 5rem;
    transform: rotateY(180deg);
}

.shape-fill {
    fill: #ffffff;
}

.swiper-slide-content {
    background: #fff;
    padding: 0 1.65rem;
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    width: 100%;
}

.swiper-slide-content > div {
    transform: translateY(-1.25rem);
}

.swiper-slide-content h2 {
    color: #000;
    font-family: "Raleway", sans-serif;
    font-weight: 700;
    font-size: 1.4rem;
    line-height: 1.4;
    margin-bottom: 0.425rem;
    text-transform: capitalize;
    letter-spacing: 0.02rem;
}

.swiper-slide-content p {
    color: #000;
    line-height: 1.6;
    font-size: 0.9rem;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.swiper-slide-content .show-more {
    width: 3.125rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #24aad9;
    border-radius: 50%;
    box-shadow: 0px 0.125rem 0.875rem #24aad96b;
    margin-top: 1em;
    margin-bottom: 0.2em;
    height: 0;
    opacity: 0;
    transition: opacity 0.3s ease-in;
    margin-left: auto;
}

.swiper-slide-content .show-more:hover {
    background: #1184ac;
}

.swiper-slide-content .show-more svg {
    width: 1.75rem;
    color: #fff;
}

.swiper-slide-active:hover img {
    transform: scale(1.2) rotate(-185deg);
}

.swiper-slide-active:hover .show-more {
    opacity: 1;
    height: 3.125rem;
}

.swiper-slide-active:hover p {
    display: block;
    overflow: visible;
}

.swiper-3d .swiper-slide-shadow-left,
.swiper-3d .swiper-slide-shadow-right {
    background-image: none;
}

@media screen and (min-width: 93.75rem) {
    .swiper {
        width: 85%;
    }
}
/* our team style section */
section.timeline .timeline-row:before{
    background: rgb(190 191 190);
    background: linear-gradient(0deg, rgba(16, 187, 70, 1) 40%, rgb(208 208 208) 10%);
}
.team-section {
            padding: 50px 0;
            text-align: center;
            background-color: #e8f5e9;
        }
.team-member p {
            color: #59BA47;
        }
        .team-member .experience-link {
            display: block;
            margin-top: 10px;
            color: #4F4F4F;
            text-decoration: none;
        }
    /* timeline section */
    div.timeline-post .half-side.content .inner p{
        width: unset;
    }
    div.timeline-post.has-content.odd .half-side + .half-side{
        text-align: left;
    }
    div.active.timeline-post.has-content.odd .half-side:before{
        border-color: #59BA47;
    }
    div.inactive.timeline-post.has-content.odd .half-side:before{
        border-color: #dee0e2;
    }
    div.active.timeline-post .half-side + .half-side:before{
        border-color: #59BA47;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="hero-section">
                    <img src="{{ asset('3corseco_asset/about/banner.png') }}" alt="Cashew" class="img-fluid w-100">
                    <div class="overlay">
                        <div class="overlay-content text-white">
                            <h2>ក្រុមហ៊ុន សាមគ្គីឧស្សាហកម្ម</h2>
                            <h4>About Enterprise</h4>
                            <ul class="list-unstyled">
                                <li>• ក្រុមហ៊ុនចំណូលឧស្សាហកម្មនៅកម្ពុជា</li>
                                <li>• បញ្ជុះតម្លៃសំរាប់ផលិតផលសំរាប់កសិករ</li>
                                <li>• ទទួលផ្គត់ផ្គង់ធនធានពីកសិករ</li>
                                <li>• សម្រស់ផលិតផលស្តង់ដារសាកល</li>
                                <li>• ផលិតផលធានាអនាម័យ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <h2 class="text-center">OUR FACTORY</h2>
    <div class="container main">
        <div class="swiper_about" style="height:350px;">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide-img">
                <img src="{{ asset('3corseco_asset/about/slider2.png') }}" alt="">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-img">
                <img src="{{ asset('3corseco_asset/about/slider1.png') }}" alt="">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
                </div>
                <div class="swiper-slide-content">
                <div>
                    <h2>seychelles</h2>
                    <p>Officially the Republic of Seychelles is an island country and archipelagic state consisting of 155 islands in the Indian Ocean.</p>
                    <a class="show-more" href="https://en.wikipedia.org/wiki/Seychelles" target="_blank"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg></a>
                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-img">
                <img src="{{ asset('3corseco_asset/about/slider3.png') }}" alt="">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
                </div>
                <div class="swiper-slide-content">
                <div>
                    <h2>london</h2>
                    <p>The capital and largest city of England and the United Kingdom, with a population of around 8.8 million. It stands on the River Thames in south-east England at the head of a 50-mile (80 km) estuary down to the North Sea and has been a major settlement for nearly two millennia.</p>
                    <a class="show-more" href="https://en.wikipedia.org/wiki/London" target="_blank"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg></a>
                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-img">
                <img src="https://images.unsplash.com/photo-1512100356356-de1b84283e18?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1975&q=80" alt="">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
                </div>
                <div class="swiper-slide-content">
                <div>
                    <h2>maldives</h2>
                    <p>Officially the Republic of Maldives is an archipelagic state and country in South Asia, situated in the Indian Ocean.</p>
                    <a class="show-more" href="https://en.wikipedia.org/wiki/Maldives" target="_blank"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg></a>
                </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide-img">
                <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80" alt="">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
                </div>
                <div class="swiper-slide-content">
                <div>
                    <h2>Italy</h2>
                    <p>Located in the middle of the Mediterranean Sea, it consists of a peninsula delimited by the Alps and surrounded by several islands. Italy shares land borders with France, Switzerland, Austria, Slovenia and the enclaved microstates of Vatican City and San Marino.</p>
                    <a class="show-more" href="https://en.wikipedia.org/wiki/Italy" target="_blank"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg></a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center">Our <span class="text-success">Mission & Vision</span></h2>
        
        <div class="row my-4">
            <div class="col-md-6">
                <img src="{{ asset('3corseco_asset/about/vision.png') }}" alt="Mission Image" class="img-fluid mb-3">
                <h5>ចក្ខុវិស័យ</h5>
                <p>តែងតែមានក្រុមការងារដែលមានសុទិដ្ឋិនិយមចំពោះភពផែនដី។ យើងមានគោលបំណងផ្តល់ជូនផលិតផលប្រកបដោយគុណភាពល្អបំផុត។ វិនិយោគកំណើនដោយមិនបំផ្លាញធម្មជាតិ។</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('3corseco_asset/about/mission.png') }}" alt="Vision Image" class="img-fluid mb-3">
                <h5>បេសកកម្ម</h5>
                <p>យើងមានក្រុមការងារដែលទទួលខុសត្រូវក្នុងការផ្តល់ជូនផលិតផលល្អបំផុត។ ការងារដែលធ្វើដោយចិត្តអំណត់ និងការយកចិត្តទុកដាក់ក្នុងគ្រប់ដំណាក់កាល។</p>
            </div>
        </div>
        
        <div class="text-center my-4">
            <h2>PARTNERSHIP & SUPPORTED BY</h2>
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('3corseco_asset/about/khmer__en.png') }}" alt="Partner Logo 1" class="img-fluid mx-3" style="max-height: 50px;">
                <img src="{{ asset('3corseco_asset/about/cambodia_cash.png') }}" alt="Partner Logo 2" class="img-fluid mx-3" style="max-height: 50px;">
                <img src="{{ asset('3corseco_asset/about/imp_hub.png') }}" alt="Partner Logo 3" class="img-fluid mx-3" style="max-height: 50px;">
                <img src="{{ asset('3corseco_asset/about/bridge_logo.png') }}" alt="Partner Logo 4" class="img-fluid mx-3" style="max-height: 50px;">
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var swiper = new Swiper(".swiper_about", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 100,
                    modifier: 2.5
                },
                keyboard: {
                    enabled: true
                },
                mousewheel: {
                    thresholdDelta: 70
                },
                spaceBetween: 30,
                loop: false,
                breakpoints: {
                    640: {
                        slidesPerView: 2
                    },
                    1024: {
                        slidesPerView: 3
                    }
                }
            });

            swiper.slideTo(1, false, false);
        });
    </script>

    <!-- our teams section -->
    <div class="team-section" style="margin-top: 2rem;">
        <div class="container">
            <h3 class="text-center">MEET OUR TEAM</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="{{ asset('3corseco_asset/about/den.png') }}" alt="Mr. Chhim Chhouden" style="width:100%;">
                        <h5>Mr. Chhim Chhouden</h5>
                        <p>Founder & CEO</p>
                        <a href="#" class="experience-link">My Experiences →</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="{{ asset('3corseco_asset/about/chem_thida.png') }}" alt="Ms. Chem Thida" style="width:100%;">
                        <h5>Ms. Chem Thida</h5>
                        <p>Co-founder & R&D Department Manager</p>
                        <a href="#" class="experience-link">My Experiences →</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-member">
                        <img src="{{ asset('3corseco_asset/about/ngo_kokchor.png') }}" alt="Mr. Ngo Kokchor" style="width:100%;">
                        <h5>Mr. Ngo Kokchor</h5>
                        <p>Co-founder & Production Manager</p>
                        <a href="#" class="experience-link">My Experiences →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!--==========Timeline==========-->
    <section class="row timeline">
        <div class="container">
            <div class="row section-header wow fadeInUp">
                <h2>COMPANY TIMELINE</h2>
            </div>
            <div class="row timeline-row">
                <div class="row m0 timeline-post">
                    <div class="bar-content">
                        <div class="inner">
                            <img src="{{ asset('3corseco_asset/about/emoji.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        2027
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">ជំរុញការនាំចេញទៅកាន់ទៅផ្សារអារ៉ាប់ និងសហរដ្ឋអាមេរិក</h4>
                            <p>
                            បង្កើនទីផ្សារនាំចេញដោយដាក់ទិសដៅនាំចេញទៅកាន់ទីផ្សារអារ៉ាប់ដែលជាទីផ្សារប្រើប្រាស់គ្រាប់ស្វាយចន្ទីដ៏មានសក្ដានុពលនិងទីផ្សារសហរដ្ឋអាមេរិក
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content odd inactive wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                    2026
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">បណ្ដាញផ្គត់ផ្គង់គ្រាប់ពាក់កណ្ដាលសម្រច</h4>
                            <p >
                                បង្កើនផលិតផលគ្រាប់សម្រេចនាំចេញទៅកាន់ទីផ្សារអ៊ឺរ៉ុប 
                                (តួគីនិងបារាំង)ឲ្យបានប្រមាណ៦០០០តោនក្នុងមួយឆ្នាំ 
                                និងសហការណ៍ជាមួយក្រុមអ្នកផលិតសិប្បកម្មដើម្បីធ្វើការរួមគ្នាផ្គត់ផ្គង់​
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        2025
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">បង្កើនផលិតកម្ម និងទីផ្សា កាត់បន្ថយថ្លៃដើម</h4>
                            <p style="width: unset;">ពង្រីកច្រវ៉ាក់ផលិតកម្ម៥តោនក្នុងមួយឆ្នាំ ស្មើនឹងប្រមាណ២០០តោនគ្រាប់ក្នុងមួយឆ្នាំ និងសិក្សាប្រើប្រាស់ថាមពលស្អាតក្នុងច្រវ៉ាក់ផលិតកម្ម</p>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content odd active wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                        2024
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">ពង្រីកបណ្ដាញ និងទីផ្សារ</h4>
                            <p>
                            បង្កើតបណ្ដាញផ្គត់ផ្គង់គ្រាប់ស្រស់សម្រាប់ឆ្នាំ២០២៥ ដោយសហការណ៍ជាមួយ៣ 
                            សហគមន៍ជនជាតិដើមភាគតិចកួយនិងសហគមន៍កសិករវ័យក្មេងស្រុកប្រាសាទសំបូរនិងផលិតកែច្នៃគ្រាប់ស្វាយចន្ទីស្រស់ 
                            ៦០តោន
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row m0 timeline-post has-content active wow fadeInUp">
                    <div class="col-sm-6 half-side date">
                    2023
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <h4 class="title">បង្កើតសហគ្រាស</h4>
                            <p>
                            បង្កើតឡើងក្នុងឆ្នាំ២០២៣ ដោយចាប់ផ្ដើមផលិតគ្រាប់ស្វាយចន្ទីប្រមាណ១០តោន សម្រាប់សិក្សាទីផ្សារ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row m0 timeline-post has-content odd active fadeInUp">
                    <div class="col-sm-6 half-side date">
                        2012
                    </div>
                    <div class="col-sm-6 half-side content">
                        <div class="inner">
                            <p>ចាប់ផ្ដើមផលិតស្វាយចន្ទីតាំងពីឆ្នាំ ២០១២ ជាលក្ខណៈសហ គមន៍ដោយចាប់ផ្ដើមពីសហគមន៍យុវជនសំបូរព្រៃគុក និង សហគមន៍ជនជាតិដើមភាគតិចកួយ</p>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
@endsection

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
