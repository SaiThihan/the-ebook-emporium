@extends('user.layouts.master') 
@section('content')
<div class="app-content">
    <!--====== Section 1 ======-->
    <div class="u-s-p-y-20">
        
    </div>
    <!--====== End - Section 1 ======-->

    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about">
                            <div class="about__container">
                                <div class="about__info">
                                    <h2 class="about__h2">
                                        Welcome to
                                        <b style="color: #0d122c"
                                            >Ebook Emporium</b
                                        >
                                    </h2>
                                    <div class="about__p-wrap">
                                        <p class="about__p">
                                            Welcome to our ebook ecommerce
                                            store, where we offer a wide
                                            selection of informative and
                                            inspiring ebooks that will enrich
                                            your life and expand your knowledge.
                                            We believe that everyone should have
                                            access to the wisdom of the world's
                                            most accomplished authors, and
                                            that's why we've curated a
                                            collection of the best ebooks on a
                                            variety of topics, from
                                            self-improvement to business, from
                                            health to personal finance, and much
                                            more.With the convenience of digital
                                            downloads, you can start reading
                                            your new ebook in just minutes, and
                                            enjoy it on your smartphone, tablet,
                                            or e-reader, anytime and anywhere.
                                            Plus, we offer a hassle-free refund
                                            policy, so you can shop with
                                            confidence and know that your
                                            satisfaction is guaranteed.
                                        </p>
                                    </div>

                                    <a
                                        class="about__link btn--e-secondary"
                                        href="{{route('user#home')}}"
                                        style="background-color: #0d122c"
                                        >Shop Now</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 2 ======-->

    <!--====== Section 3 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary">
                                Our Team Members
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30"></div>
                    <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                        <div class="team-member u-h-100">
                            <div class="team-member__wrap">
                                <div
                                    class="aspect aspect--bg-grey-fb aspect--square"
                                >
                                    <img
                                        class="aspect__img team-member__img"
                                        src="{{asset('storage/profile1.jpg')}}"
                                        alt=""
                                    />
                                </div>
                                <div class="team-member__social-wrap">
                                    <ul class="team-member__social-list">
                                        <li>
                                            <a
                                                class="s-insta--bgcolor-hover"
                                                href="https://github.com/SaiThihan"
                                                ><i class="fab fa-github"></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-member__info">
                                <h3 style="text-align:center"
                                    >Sai Thi Han</h3
                                >

                                <h4 style="text-align:center"
                                    >3CS - 12</
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                        <div class="team-member u-h-100">
                            <div class="team-member__wrap">
                                <div
                                    class="aspect aspect--bg-grey-fb aspect--square"
                                >
                                    <img
                                        class="aspect__img team-member__img"
                                        src="{{asset('storage/profile2.jpg')}}"
                                        alt=""
                                    />
                                </div>
                                <div class="team-member__social-wrap">
                                    <ul class="team-member__social-list">
                                        
                                        <li>
                                            <a
                                                class="s-insta--bgcolor-hover"
                                                href="https://github.com/Aung-Pyae-Sone8/"
                                                ><i class="fab fa-github"></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-member__info">
                                <h3 class="team-member__name" style="text-align:center" 
                                    >Aung Pyae Sone</h3
                                >

                                <h4 style="text-align:center"
                                    >3CS - 22</h4
                                >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30"></div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->

    <!--====== Section 4 ======-->
    <div class="u-s-p-b-90 u-s-m-b-30">
        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-46">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1
                                class="section__heading u-c-secondary u-s-m-b-12"
                            >
                                CLIENTS FEEDBACK
                            </h1>

                            <span class="section__span u-c-silver"
                                >WHAT OUR CLIENTS SAY</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Intro ======-->

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <!--====== Testimonial Slider ======-->
                <div>
                    <div
                        class="owl-carousel owl-loaded owl-drag"
                        id="testimonial-slider"
                    >
                        <div class="owl-stage-outer">
                            <div
                                class="owl-stage"
                                style="
                                    transform: translate3d(-3330px, 0px, 0px);
                                    transition: all 1.5s ease 0s;
                                    width: 4440px;
                                "
                            >
                                <div class="owl-item" style="width: 1110px">
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">
                                            <img
                                                class="testimonial__img"
                                                src="{{asset('storage/testimonial.jpg');}}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="testimonial__content-wrap">
                                            <span
                                                class="testimonial__double-quote"
                                                ><i
                                                    class="fas fa-quote-right"
                                                    style="color: #0d122c"
                                                ></i
                                            ></span>
                                            <blockquote
                                                class="testimonial__block-quote"
                                            >
                                                <p>
                                                    "Far far away, behind the
                                                    word mountains, far from the
                                                    countries Vokalia and
                                                    Consonantia, there live the
                                                    blind texts. Separated they
                                                    live in Bookmarksgrove right
                                                    at the coast of the
                                                    Semantics, a large language
                                                    ocean."
                                                </p>
                                            </blockquote>

                                            <span class="testimonial__author"
                                                >John D. / DVNTR Inc.</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 1110px">
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">
                                            <img
                                                class="testimonial__img"
                                                src="{{asset('storage/testimonial.jpg');}}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="testimonial__content-wrap">
                                            <span
                                                class="testimonial__double-quote"
                                                ><i
                                                    class="fas fa-quote-right"
                                                ></i
                                            ></span>
                                            <blockquote
                                                class="testimonial__block-quote"
                                            >
                                                <p>
                                                    "Far far away, behind the
                                                    word mountains, far from the
                                                    countries Vokalia and
                                                    Consonantia, there live the
                                                    blind texts. Separated they
                                                    live in Bookmarksgrove right
                                                    at the coast of the
                                                    Semantics, a large language
                                                    ocean."
                                                </p>
                                            </blockquote>

                                            <span class="testimonial__author"
                                                >John D. / DVNTR Inc.</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 1110px">
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">
                                            <img
                                                class="testimonial__img"
                                                src="{{asset('storage/testimonial.jpg');}}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="testimonial__content-wrap">
                                            <span
                                                class="testimonial__double-quote"
                                                ><i
                                                    class="fas fa-quote-right"
                                                ></i
                                            ></span>
                                            <blockquote
                                                class="testimonial__block-quote"
                                            >
                                                <p>
                                                    "Far far away, behind the
                                                    word mountains, far from the
                                                    countries Vokalia and
                                                    Consonantia, there live the
                                                    blind texts. Separated they
                                                    live in Bookmarksgrove right
                                                    at the coast of the
                                                    Semantics, a large language
                                                    ocean."
                                                </p>
                                            </blockquote>

                                            <span class="testimonial__author"
                                                >John D. / DVNTR Inc.</span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="owl-item active"
                                    style="width: 1110px"
                                >
                                    <div class="testimonial">
                                        <div class="testimonial__img-wrap">
                                            <img
                                                class="testimonial__img"
                                                src="{{asset('storage/testimonial.jpg');}}"
                                                alt=""
                                            />
                                        </div>
                                        <div class="testimonial__content-wrap">
                                            <span
                                                class="testimonial__double-quote"
                                                ><i
                                                    class="fas fa-quote-right"
                                                ></i
                                            ></span>
                                            <blockquote
                                                class="testimonial__block-quote"
                                            >
                                                <p>
                                                    "Far far away, behind the
                                                    word mountains, far from the
                                                    countries Vokalia and
                                                    Consonantia, there live the
                                                    blind texts. Separated they
                                                    live in Bookmarksgrove right
                                                    at the coast of the
                                                    Semantics, a large language
                                                    ocean."
                                                </p>
                                            </blockquote>

                                            <span class="testimonial__author"
                                                >John D. / DVNTR Inc.</span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button
                                type="button"
                                role="presentation"
                                class="owl-prev"
                            >
                                <span aria-label="Previous">‹</span></button
                            ><button
                                type="button"
                                role="presentation"
                                class="owl-next"
                            >
                                <span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot">
                                <span></span></button
                            ><button role="button" class="owl-dot">
                                <span></span></button
                            ><button role="button" class="owl-dot">
                                <span></span></button
                            ><button role="button" class="owl-dot active">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--====== End - Testimonial Slider ======-->
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 4 ======-->
</div>
@endsection
