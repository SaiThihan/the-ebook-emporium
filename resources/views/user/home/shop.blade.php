@extends('user.layouts.master') @section('content')
    <div class="app-content">
        <!--====== Section 1 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">Ebook Emporium</h1>

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
                                                                    <a href="{{ route('user#product#detail', $book->id) }}" data-modal="modal" data-modal-id="#quick-look"
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

                                                <a href="{{route('user#product#detail',$book->id)}}">{{ $book->book_title }}</a></span>

                                            <div></div>
                                            <div></div>
                                            <span class="product-o__price">{{ $book->price }} Ks </span>

                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
    </div>
@endsection
