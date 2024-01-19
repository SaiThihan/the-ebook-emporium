@extends('user.layouts.master')
@section('content')
    <div class="app-content">
    
        <!--====== Primary Slider ======-->
        <div class="s-skeleton s-skeleton--h-640 s-skeleton--bg-grey">
            <div class="owl-carousel primary-style-3" id="hero-slider">
                <div class="hero-slide" style="background-image:url('{{ asset('storage/img-1.jpg') }}')">
                    <div class="primary-style-3-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-white">Buy Once, Read Anywhere</span>

                                    <span class="content-span-2 u-c-white">10% Off For First Purchases</span>

                                    <a class="shop-now-link btn--e-brand" href="{{route('user#shop')}}">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="hero-slide"
                    style="background-image:url('{{ asset('storage/img-2.jpg') }}')">
                    <div class="primary-style-3-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-white">Buy Once, Read Anywhere</span>

                                        <span class="content-span-2 u-c-white">10% Off For First Purchases</span>

                                        <span class="content-span-3 u-c-white">Find intimates on best prices</span>

                                        <span class="content-span-4 u-c-white">Starting At

                                            <span class="u-c-brand"><h1>5000 mmk</h1></span></span>

                                        <a class="shop-now-link btn--e-brand" href="shop">SHOP NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide"
                    style="background-image:url('{{ asset('storage/img-3.jpg') }}')">
                    <div class="primary-style-3-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                <div class="slider-content slider-content--animation">

                                    <span class="content-span-1 u-c-white">Buy Once, Read Anywhere</span>

                                    <span class="content-span-2 u-c-white">10% Off For First Purchases</span>

                                    <span class="content-span-3 u-c-white">Find intimates on best prices</span>

                                    <span class="content-span-4 u-c-white">Starting At

                                        <h1 class="u-c-brand">5000 mmk</h1>
                                    </span>

                                    <a class="shop-now-link btn--e-brand" href="shop">SHOP NOW</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--====== End - Primary Slider ======-->

        <!--====== Section 2 ======-->
        <div class="u-s-p-y-60">

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
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">RECENT PRODUCTS</h1>

                                <span class="section__span u-c-silver">NEWLY ADDED PRODUCTS</span>
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
                    @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">

                                    <div class="product-r__info-wrap">
                                        <div class="product-r__container">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                href="{{route('user#product#detail',$product->id)}}">

                                                <img class="aspect__img"
                                                    src="{{ asset('storage/book_image/' . $product->image) }}"
                                                    alt="">
                                                </a>
                                            
                                        </div>
                                        <span class="product-r__category">
                                            <a href="shop-side-version-2.html" style="display: block;">
                                                <strong>{{ $product->category->name }}</strong>
                                            </a>
                                        </span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="{{route('user#product#detail',$product->id)}}">{{ $product->title }}</a>
                                            </span>

                                            
                                        </div>

                                        <span
                                            class="product-r__description">{{ Str::words($product->description, 20, '....') }}</span>
                                            <span class="product-r__price" style="margin-left:140px">{{ number_format($product->price, 0, '.', ',') }}mmk</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->


        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">TOP TRENDING</h1>

                                <span class="section__span u-c-silver">CHOOSE CATEGORY</span>
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
                        <div class="col-lg-12">
                            <div class="filter-category-container">
                                <div class="filter__category-wrapper">

                                    <button class="btn filter__btn filter__btn--style-1 js-checked" type="button"
                                        data-filter="*">ALL</button>
                                </div>
                                @foreach ($categories as $category)
                                <div class="filter__category-wrapper">
                                    <button class="btn filter__btn filter__btn--style-1" type="button"
                                        data-filter=".{{ $category->id }}">{{ strtoupper($category->name) }}</button>
                                </div>
                                @endforeach
                            </div>
                            <div class="filter__grid-wrapper u-s-m-t-30">
                                <div class="row">
                                    @foreach ($books as $book)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item {{ $book->category_id }}">
                                        <div class="product-o product-o--hover-on product-o--radius">
                                            <div class="product-o__wrap">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">
                                                    <img class="aspect__img"
                                                        src="{{ asset('storage/book_image/' . $book->image) }}"
                                                        alt=""></a>
                                                        <div class="product-o__action-wrap">
                                                            <ul class="product-o__action-list">
                                                                <li>
                                                                    <a href="{{ route('user#product#detail', $product->id) }}" data-modal="modal" data-modal-id="#quick-look"
                                                                        data-tooltip="tooltip" data-placement="top"
                                                                        title="" data-original-title="Quick View"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                            </div>

                                            <span class="product-o__category">

                                                <a href="shop-side-version-2.html">{{ $book->category_name }}</a></span>

                                            <span class="product-o__name">

                                                <a href="{{route('user#product#detail',$product->id)}}">{{ $book->book_title }}</a></span>

                                            <div></div>
                                            <div></div>
                                            <span class="product-o__price">{{ number_format($product->price, 0, '.', ',') }} mmk </span>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="{{ route('user#shop') }}">
                                <div class="load-more">
                                    <button class="btn btn--e-brand-b-2" type="submit">Load More</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->

    </div>
@endsection