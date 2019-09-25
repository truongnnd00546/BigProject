@extends('layout.master', [
    'page_title' => 'Tạo mới sản phẩm | Seafashion Admin Page',
    'current_menu' => 'product_manager',
    'current_sub_menu' => 'create_new',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">add</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">TẠO MỚI SẢN PHẨM</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/admin/product" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Bộ sưu tập</h6>
                                <select type="text" name="collectionId">
                                    @foreach($collection as $co)
                                        <option value="{{$co->id}}">{{$co->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h6>Danh mục</h6>
                                <select type="text" name="categoryId">
                                    @foreach($category as $ca)
                                        <option value="{{$ca->id}}">{{$ca->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Tên sản phẩm</h6>
                                <input type="text" name="name" class="{{$errors->has('name')?'error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Ảnh sản phẩm</h6>
                                <input type="text" name="images" class="{{$errors->has('images')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Giá</h6>
                                <input type="number" name="price" class="{{$errors->has('price')?' error':''}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Khuyến mãi (%)</h6>
                                <input type="number" name="discount" class="{{$errors->has('discount')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Mô tả</h6>
                                <input type="text" name="description"
                                       class="{{$errors->has('description')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Chi tiết</h6>
                                <input type="text" name="detail" class="{{$errors->has('detail')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Màu</h6>
                                <input type="text" name="colors" class="{{$errors->has('colors')?' error':''}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Cỡ</h6>
                                <input type="text" name="sizes" class="{{$errors->has('sizes')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" value="Submit" class="btn btn-fill btn-success">Lưu
                                    <div class="ripple-container"></div>
                                </button>
                                <button type="reset" value="Reset" class="btn btn-fill btn-rose">Làm lại
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
