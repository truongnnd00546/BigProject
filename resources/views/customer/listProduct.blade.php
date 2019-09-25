@extends('layout.master-Home')
@section('content')
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 products-left">

                <div class="css-treeview">
                    <h4>Danh mục sản phẩm</h4>
                    <ul class="tree-list-pad">
                        <li><a href="{{url()->current().'?categoryId=0'}}"><label><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span class="{{$selected_categoryId==0?'text-danger':''}}"> Tất cả</span></label></a></li>
                        @foreach($categories as $category)
                        <li>
                            <a href="{{url()->current().'?categoryId='.$category->id}}"><label><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span class="{{$category->id==$selected_categoryId?'text-danger':''}}">{{$category->name}}</span></label></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Product <span class="text-muted">{{$selected_categoryId!=0?'Danh mục "'.$selected_category->name . '"':''}}</span></h5>
                {{--<div class="sort-grid">--}}
                    {{--<div class="sorting">--}}
                        {{--<h6>Sort By</h6>--}}
                        {{--<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">--}}
                            {{--<option value="null">Default</option>--}}
                            {{--<option value="null">Name(A - Z)</option>--}}
                            {{--<option value="null">Name(Z - A)</option>--}}
                            {{--<option value="null">Price(High - Low)</option>--}}
                            {{--<option value="null">Price(Low - High)</option>--}}
                            {{--<option value="null">Model(A - Z)</option>--}}
                            {{--<option value="null">Model(Z - A)</option>--}}
                        {{--</select>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="sorting">--}}
                        {{--<h6>Showing</h6>--}}
                        {{--<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">--}}
                            {{--<option value="null">7</option>--}}
                            {{--<option value="null">14</option>--}}
                            {{--<option value="null">28</option>--}}
                            {{--<option value="null">35</option>--}}
                        {{--</select>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
                @foreach($list_product as $product)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{$product->images}}" alt="" class="pro-image-front">
                                <img src="{{$product->images}}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                @if($product->isNew())
                                <span class="product-new-top">New</span>
                                @endif
                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">{{$product->name}}</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">{{$product->discountPrice}}</span>
                                    <del>{{$product->originalPrice}}</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="/them-gio-hang" method="get">
                                        <fieldset>
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection