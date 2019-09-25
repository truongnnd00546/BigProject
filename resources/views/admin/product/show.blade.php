@extends('layout.master',[
    'page_title'=>'Danh sách sản phẩm | Seafashion Admin Page',
    'current_menu'=>'product_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <style>
        .card-body{
            padding: 60px;
        }
        .card-body label{
            color: #32322C;
            font-size: 20px;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">art_track</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">THÔNG TIN CHI TIẾT</h4>
                    <div class="card-body">
                        <div class="row">
                            <label>Tên sản phẩm : {{$obj->name}}</label>
                        </div>
                        <div class="row">
                            <label>Ảnh sản phẩm :</label>
                            <div
                                style="width: 350px;height: 300px;background-image: url('{{$obj->images}}'); background-size: cover">
                            </div>
                        </div>
                        <div class="row">
                            <label>Giá sản phẩm : <font color="red">{{$obj->price}} (VND)</font></label>
                        </div>
                        <div class="row">
                            <label>Khuyến mãi : {{$obj->discount}} (%)</label>
                        </div>
                        <div class="row">
                            <label>Màu : {{$obj->colors}}</label>
                        </div>
                        <div class="row">
                            <label>Cỡ : {{$obj->sizes}}</label>
                        </div>

                        <div class="row mt-3" style="padding-top: 20px;">
                            <a href="/admin/product" class="btn btn-success mr-2">Về danh sách</a>
                            <a href="/admin/product/{{$obj->id}}/edit" class="btn btn-warning  mr-2">Sửa</a>
                            <a href="{{$obj->id}}" class="btn btn-danger btn-delete">Xóa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.btn-delete').click(function () {
            var thisButton = $(this);
            swal({
                text: "Bạn có chắc muốn xoá danh mục này không?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function() {
                var id = thisButton.attr('href');
                $.ajax({
                    'url': '/admin/product/' + id,
                    'method': 'DELETE',
                    'data':{
                        '_token':$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        swal({
                            text: 'Danh mục đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })
                        setTimeout(function () {
                            window.location.href=("http://127.0.0.1:8000/admin/product");
                        }, 2*1000);
                    },
                    error: function () {
                        swal({
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });

            });
            return false;
        })
    </script>
@endsection
