@extends('layout.master', [
    'page_title' => 'Sửa thông tin sản phẩm | Seafashion Admin Page',
    'current_menu' => 'product_manager',
    'current_sub_menu' => 'edit',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">edit</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">SỬA SẢN PHẨM</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/admin/product/{{$obj->id}}" class="form-horizontal">
                        @method('PUT')
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Bộ sưu tập</h6>
                                <input type="text" name="collectionId"
                                       class="{{$errors->has('collectionId')?'error':''}}"
                                       value="{{$obj->collectionId}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Danh mục</h6>
                                <input type="text" name="categoryId" class="{{$errors->has('categoryId')?'error':''}}"
                                       value="{{$obj->categoryId}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Tên sản phẩm</h6>
                                <input type="text" name="name" class="{{$errors->has('name')?'error':''}}"
                                       value="{{$obj->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Ảnh sản phẩm</h6>
                                <input type="text" name="images" class="{{$errors->has('images')?' error':''}}" value="{{$obj->images}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Giá</h6>
                                <input type="text" name="price" class="{{$errors->has('price')?' error':''}}" value="{{$obj->price}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Khuyến mãi (%)</h6>
                                <input type="text" name="discount" class="{{$errors->has('discount')?' error':''}}" value="{{$obj->discount}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Mô tả</h6>
                                <input type="text" name="description"
                                       class="{{$errors->has('description')?' error':''}}" value="{{$obj->description}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Chi tiết</h6>
                                <input type="text" name="detail" class="{{$errors->has('detail')?' error':''}}" value="{{$obj->detail}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Màu</h6>
                                <input type="text" name="colors" class="{{$errors->has('colors')?' error':''}}" value="{{$obj->colors}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Cỡ</h6>
                                <input type="text" name="sizes" class="{{$errors->has('sizes')?' error':''}}" value="{{$obj->sizes}}">
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
