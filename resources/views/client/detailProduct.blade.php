@extends('layout.client-layout-v2',['page_title'=>'Chi tiết','active'=>''])
@section('content')
    <section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
             style="background-image: url(https://cdn.shopify.com/s/files/1/0476/6585/files/322A9991.jpg?v=1531778253);">
        <h2 class="l-text2 t-center">
            Chi tiết sản phẩm
        </h2>
        <p class="m-text13 t-center">
            {{--New Arrivals Women Collection 2018--}}
        </p>
    </section>
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">

                    <div class="slick3 slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 1503px;">
                                <div class="item-slick3 slick-slide slick-current slick-active"
                                     data-thumb="images/thumb-item-01.jpg" data-slick-index="0" aria-hidden="false"
                                     tabindex="0" role="tabpanel" id="slick-slide10"
                                     aria-describedby="slick-slide-control10"
                                     style="width: 501px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                    <div class="wrap-pic-w">
                                        <img src="{{$obj->images}}" alt="IMG-PRODUCT">
                                    </div>
                                </div>
                                <div class="item-slick3 slick-slide" data-thumb="images/thumb-item-02.jpg"
                                     data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel"
                                     id="slick-slide11" aria-describedby="slick-slide-control11"
                                     style="width: 501px; position: relative; left: -501px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="wrap-pic-w">
                                        <img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </div>
                                <div class="item-slick3 slick-slide" data-thumb="images/thumb-item-03.jpg"
                                     data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel"
                                     id="slick-slide12" aria-describedby="slick-slide-control12"
                                     style="width: 501px; position: relative; left: -1002px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="wrap-pic-w">
                                        <img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    {{$obj->name}}
                </h4>
                <span class="block2-newprice m-text8 p-r-5">
                                            {{$obj->discountPriceString}}
                                        </span>
                <span class="block2-oldprice m-text7 p-r-5">
                                            {{$obj->originalPriceString}}
                                        </span>
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Mô tả
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23" style="display: none;">
                        <p class="s-text8">
                            {{$obj->detail}}
                        </p>
                    </div>
                </div>

                <!--  -->
                <div class="w-size16 flex-m flex-w">

                    <div class="block2-btn-addcart2 btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10" id="add-cart-{{$obj->id}}">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Mua hàng
                        </button>
                    </div>
                </div>
                <p class="s-text8 p-t-10">
                    {{$obj->description}}
                </p>
            </div>

            <!--  -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6 style="font-weight: bold;color: black;margin-bottom: 20px;text-transform: uppercase">Thông tin chi tiết</h6>
                <div class="white-panel">
                    <div class="attribute-table single-table"></div>
                    <table id="chi-tiet" cellspacing="0" class="table table-bordered table-detail table-striped">
                        <colgroup>
                            <col style="width: 25%;"><col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td rel="brand">Thương hiệu</td>
                            <td class="last">
                                <a href="http://tiki.vn/thuong-hieu/oem.html?_lc=Vk4wMzQwMjAwMDI%3D">{{$obj->name}}</a>

                            </td>
                        </tr>
                        <tr>
                            <td rel="brand_country">Xuất xứ thương hiệu</td>
                            <td class="last">
                                Nhật Bản
                            </td>
                        </tr>
                        <tr>
                            <td rel="sku">Mã sản phẩm</td>
                            <td class="last">
                                {{$obj->id}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
