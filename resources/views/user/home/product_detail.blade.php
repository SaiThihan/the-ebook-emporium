@extends('user.layouts.master') @section('content')
    <div class="app-content">
    @if (session('order'))
        <script>alert('{{ addslashes(session('order')) }}')</script>
    @endif
        <!--====== Section 1 ======-->
        <div class="u-s-p-t-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!--====== Product Detail Zoom ======-->
                        <div class="pd u-s-m-b-30">
                            <div>
                                <img class="u-img-fluid" src="{{ asset('storage/book_image/' . $products->image) }}"
                                    style="width:70%;margin-left:50px" alt="" />
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                    <div class="col-lg-7">
                            <!--====== Product Right Side Details ======-->
                            <div class="pd-detail">
                            <div>
                                <span class="pd-detail__name">{{ $products->title }}</span>
                            </div>
                            <div>
                                <div class="pd-detail__inline">
                                    <span class="pd-detail__price">{{ number_format($products->price, 0, '.', ',') }}mmk</span>
                                </div>
                            </div>
                            <div>
                                <div class="pd-detail__inline">
                                    <span>By -{{ $products->author }}</span>
                                </div>
                                <div class="pd-detail__inline">
                                    <span>Category -{{ $products->category->name }}</span>
                                </div>
                                
                                
                            </div>
                            <div class="u-s-m-b-15"></div>

                            <div class="u-s-m-b-15">
                                <span class="pd-detail__preview-desc">{{ $products->description }}</span>
                            </div>
                            <div class="u-s-m-b-30">
                            </div>
                            <div class="u-s-m-b-15"></div>
                            <div class="u-s-m-b-15">
                                <form class="pd-detail__form" method="get" action="{{ route('user#product#payment',$book_id) }}">
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">
                                            <button class="btn btn--e-brand-b-2" type="submit">
                                                Buy Now
                                            </button>
                                            <a href="{{route('user#shop')}}" class="btn btn--e-brand-b-3">
                                                Back
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15"></div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>

        <div class="u-s-p-b-90">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">
                                    CUSTOMER ALSO VIEWED
                                </h1>

                                <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div>
                        <div class="owl-carousel product-slider owl-loaded owl-drag" data-item="4">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="
                                    transform: translate3d(0px, 0px, 0px);
                                    transition: all 0s ease 0s;
                                    width: 1665px;
                                ">
                                @foreach ($books as $book)
                                <div class="owl-item active" style="width: 277.5px">
                                    <div class="u-s-m-b-30">
                                        <div class="product-o product-o--hover-on">
                                            <div class="product-o__wrap">
                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="{{route('user#product#detail',$book->id)}}">
                                                    <img class="aspect__img"
                                                        src="{{ asset('storage/book_image/' . $book->image ) }}"
                                                        alt="" /></a>
                                                <div class="product-o__action-wrap">
                                                    <ul class="product-o__action-list">
                                                        <li>
                                                            <a data-modal="modal" href="{{route('user#product#detail',$book->id)}}" data-modal-id="#quick-look"
                                                                data-tooltip="tooltip" data-placement="top"
                                                                title="" data-original-title="Quick View"><i
                                                                    class="fas fa-search-plus"></i></a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>

                                            <span class="product-o__category">
                                                <a href="shop-side-version-2.html">{{ $book->category->name }}</a></span>

                                            <span class="product-o__name">
                                                <a href="{{route('user#product#detail',$book->id)}}">{{ $book->title }}</a></span>
                                            <div class="product-o__rating gl-rating-style"></div>

                                            <span class="product-o__price">{{ number_format($book->price, 0, '.', ',') }}mmk
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                    
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="p-prev">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                </div>
                                <div class="p-next">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </div>
                            </div>
                            <div class="owl-dots disabled"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
    </div>
@endsection

                            <!-- <div class="u-s-m-b-15">
                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li>
                                        <i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Buyer Protection.</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Full Refund if you don't receive your
                                            order.</span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as
                                            described.</span>
                                    </li>
                                </ul>
                            </div>       -->

                        