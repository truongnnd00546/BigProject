@extends('layout.client-layout-v2',['page_title'=>'Bộ sưu tập','active'=>''])
@section('content')
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(https://cdn.shopify.com/s/files/1/0476/6585/files/DS_MAINE-213.jpg?v=1532566470);">
        <h2 class="l-text2 t-center">
            Bộ sưu tập {{$collections_type->name}}
        </h2>
        <p class="m-text13 t-center">
            {{--New Arrivals Women Collection 2018--}}
        </p>
    </section>

    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="row">
                        @foreach($list_collection as $collection)
                            <div class="col-sm-12 col-md-6 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative {{$collection->blockStyle}}">
                                        <img src="{{$collection->images}}" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="block2-overlay trans-0-4">
                                        {{--<a href="/them-gio-hang?id={{$product->id}}&quantity=1">--}}
                                        <div class="block2-btn-addcart w-size1 trans-0-4"
                                             id="add-cart-{{$collection->id}}">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1-small trans-0-4">
                                                Mua
                                            </button>
                                        </div>
                                        <a href="/detail/{{'?id='.$collection->id}}">
                                            <button style="border-radius: 50px; width: 50px; height: 50px; float: right"
                                                    class=" hov1 s-text1-small trans-0-4">
                                                Xem
                                            </button>
                                        </a>
                                        {{--</a>--}}
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            {{$collection->name}}
                                        </a>
                                        <span class="block2-newprice m-text8 p-r-5">
                                            {{$collection->discountPriceString}}
                                        </span>
                                        <span class="block2-oldprice m-text7 p-r-5">
                                            {{$collection->originalPriceString}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    {{--<div class="pagination flex-m flex-w p-t-26">--}}
                    {{--<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>--}}
                    {{--<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>--}}
                    {{--</div>--}}
                    {{--{{$list_product -> links()}}--}}
                </div>
            </div>
        </div>
    </section>
@endsection