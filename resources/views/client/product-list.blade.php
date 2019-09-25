@extends('layout.client-layout-v2',['page_title'=>'Danh Sách','active'=>'list'])
@section('content')
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(https://cdn.shopify.com/s/files/1/0476/6585/files/Su18_Lookbook_12.jpg?v=1525801572);">
        <h2 class="l-text2 t-center">
            DANH SÁCH SẢN PHẨM
        </h2>
        <p class="m-text13 t-center">
            {{--New Arrivals Women Collection 2018--}}
        </p>
    </section>


    <!-- Content page -->
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <!--  -->
                        <h4 class="m-text14 p-b-7">
                            Danh mục
                        </h4>

                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="{{url()->current().'?categoryId=0'}}"
                                   class="s-text13{{$selected_categoryId==0?' active1':''}}">
                                    Tất cả
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li class="p-t-4">
                                    <a href="{{url()->current().'?categoryId='.$category->id}}"
                                       class="s-text13{{$category->id==$selected_categoryId?' active1':''}}">
                                        {{$category->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!--  -->
                    <div class="flex-sb-m flex-w p-b-35">
                        <div class="flex-w">
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="row">
                        @foreach($list_product as $product)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative {{$product->blockStyle}}">
                                        <img src="{{$product->images}}" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="block2-overlay trans-0-4">
                                        {{--<a href="/them-gio-hang?id={{$product->id}}&quantity=1">--}}
                                        <div class="block2-btn-addcart w-size1 trans-0-4"
                                             id="add-cart-{{$product->id}}">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1-small trans-0-4">
                                                Mua
                                            </button>
                                        </div>
                                        <a href="/detail/{{'?id='.$product->id}}">
                                            <button style="border-radius: 50px; width: 50px; height: 50px; float: right"
                                                    class=" hov1 s-text1-small trans-0-4">
                                                Xem
                                            </button>
                                        </a>
                                        {{--</a>--}}
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            {{$product->name}}
                                        </a>
                                        <span class="block2-newprice m-text8 p-r-5">
                                            {{$product->discountPriceString}}
                                        </span>
                                        <span class="block2-oldprice m-text7 p-r-5">
                                            {{$product->originalPriceString}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="row" id="pagination">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10 parent-paginate">
                            {{ $list_product->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection