@extends('layout.client-layout-v2',['page_title'=>'Tìm kiếm','active'=>''])
@section('content')
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(https://cdn.shopify.com/s/files/1/0476/6585/files/DS_Maine-52.jpg?v=1532566790);">
        <h2 class="l-text2 t-center">
            Tìm kiếm
        </h2>
    </section>
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-12 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <span class="s-text8 p-t-5 p-b-5">
                        <h3>Tìm kiếm được {{$product->count()}} sản phẩm</h3>
						</span>


                    </div>
                    <!-- Product -->
                    <div class="row">
                        @foreach($product as $item)
                            <div class="col-sm-12 col-md-6 col-lg-3 p-b-50">
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">
                                        <img src="{{$item->images}}" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="block2-overlay trans-0-4">
                                        {{--<a href="/them-gio-hang?id={{$product->id}}&quantity=1">--}}
                                        <div class="block2-btn-addcart w-size1 trans-0-4"
                                             id="add-cart-{{$item->id}}">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1-small trans-0-4">
                                                Mua
                                            </button>
                                        </div>
                                        {{--</a>--}}
                                    </div>
                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            {{$item->name}}
                                        </a>
                                        <span class="block2-newprice m-text8 p-r-5">
                                            {{$item->discountPriceString}}
                                        </span>
                                        <span class="block2-oldprice m-text7 p-r-5">
                                            {{$item->originalPriceString}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{--@foreach($category as $item)--}}
                        {{--<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">--}}
                        {{--<!-- Block2 -->--}}
                        {{--<div class="block2">--}}
                        {{--<div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">--}}
                        {{--<img src="{{$item->images}}" alt="IMG-PRODUCT">--}}
                        {{--</div>--}}
                        {{--<div class="block2-overlay trans-0-4">--}}
                        {{--<a href="/them-gio-hang?id={{$product->id}}&quantity=1">--}}
                        {{--<div class="block2-btn-addcart w-size1 trans-0-4"--}}
                        {{--id="add-cart-{{$item->id}}">--}}
                        {{--<!-- Button -->--}}
                        {{--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1-small trans-0-4">--}}
                        {{--Mua--}}
                        {{--</button>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="block2-txt p-t-20">--}}
                        {{--<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">--}}
                        {{--{{$item->name}}--}}
                        {{--</a>--}}
                        {{--<span class="block2-newprice m-text8 p-r-5">--}}
                        {{--{{$item->discountPriceString}}--}}
                        {{--</span>--}}
                        {{--<span class="block2-oldprice m-text7 p-r-5">--}}
                        {{--{{$item->originalPriceString}}--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--@endforeach--}}
                    </div>
                    <!-- Pagination -->
                    {{--<div class="pagination flex-m flex-w p-t-26">--}}
                    {{--<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>--}}
                    {{--<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection