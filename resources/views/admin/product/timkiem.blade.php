@extends('layout.master',[
    'page_title'=>'Danh sách sản phẩm | Seafashion Admin Page',
    'current_menu'=>'product_manager',
    'current_sub_menu'=>'search_item'
])
@section('content')
    <div class="col-md-12">
        <div style="margin-top: -50px">
            <div class="card">
                <div class="row">
                    <div class="col-md-3">
                        <div style="padding: 10px">
                            <h6>Tìm kiếm</h6>
                            <form method="get" action="/timkiem">
                                <input type="text" name="tukhoa" placeholder="Tìm kiếm ...">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="padding: 10px">
                            <h6>Danh mục</h6>
                            <select></select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="padding: 10px">
                            <h6>Trạng thái</h6>
                            <select></select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="padding: 10px">
                            <h6>Dòng hiển thị</h6>
                            <select></select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">DANH SÁCH TÌM KIẾM</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
                <div class="material-datatables">
                    <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                    <table id="datatables"
                                           class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                                           cellspacing="0" width="100%" style="width: 100%;" role="grid"
                                           aria-describedby="datatables_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 50px;" aria-sort="ascending"
                                                aria-label="ID: activate to sort column descending">ID
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 157px;" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">Tên
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Images: activate to sort column ascending">Ảnh đại diện
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Price: activate to sort column ascending">Giá
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Discount: activate to sort column ascending">Khuyến mãi
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Colors: activate to sort column ascending">Màu
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Sizes: activate to sort column ascending">Cỡ
                                            </th>
                                            <th class="disabled-sorting text-right sorting" tabindex="0"
                                                aria-controls="datatables" rowspan="1" colspan="1" style="width: 149px;"
                                                aria-label="Actions: activate to sort column ascending">Thao tác
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr role="row" class="odd">
                                                <td>{{$product->id}}</td>
                                                <td tabindex="0" class="sorting_1">{{$product->name}}</td>
                                                <td>
                                                    <div class="card"
                                                         style="width: 100px;height: 80px;background-image: url('{{$product->images}}'); background-size: cover">
                                                    </div>
                                                </td>
                                                <td>{{$product->price}} (VNĐ)</td>
                                                <td>{{$product->discount}} (%)</td>
                                                <td>{{$product->colors}}</td>
                                                <td>{{$product->sizes}}</td>
                                                <td class="text-right">
                                                    <a href="/admin/product/{{$product->id}}" class="btn btn-simple btn-success btn-icon android-search"><i
                                                            class="material-icons">art_track</i></a>
                                                    <a href="/admin/product/{{$product->id}}/edit" class="btn btn-simple btn-warning btn-icon edit"><i
                                                            class="material-icons">edit</i></a>
                                                    <a href="{{$product->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete"><i
                                                            class="material-icons">close</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
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
                            window.location.reload();
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
