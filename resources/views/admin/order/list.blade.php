@extends('layout.master',[
    'page_title'=>'Danh sách đơn hàng sản phẩm | Seafashion Admin Page',
    'current_menu'=>'order_manager',
    'current_sub_menu'=>'list_item'
])
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">DANH SÁCH ĐƠN HÀNG</h4>
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
                                @if($list_obj->count()>0)
                                    <table id="datatables"
                                           class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                                           cellspacing="0" width="100%" style="width: 100%;" role="grid"
                                           aria-describedby="datatables_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="col-1">STT</th>
                                            <th class="col-2">Người đặt</th>
                                            <th class="col-1">Thời gian</th>
                                            <th class="col-1">Sản phẩm</th>
                                            <th class="col-1">Số lượng</th>
                                            <th class="col-2">Tổng tiền</th>
                                            <th class="col-1">Trạng thái</th>
                                            <th class="col-3">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list_obj as $item)
                                            <tr role="row" class="odd">
                                                <td class="col-1">{{$item->id}}</td>
                                                <td class="col-2">{!! $item->shipInformation !!}</td>
                                                <td class="col-1">{{$item->created_at}}</td>
                                                <td class="col-1">
                                                        @foreach($item->details as $order_detail)
                                                            {{$order_detail->product->name}}
                                                        @endforeach
                                                </td>
                                                <td class="col-1">
                                                        @foreach($item->details as $order_detail)
                                                            {{$order_detail->quantity}}
                                                        @endforeach
                                                </td>
                                                <td class="col-2">{{$item->total_price}}</td>
                                                <td class="col-1">{{$item->statusLabel}}</td>
                                                <td class="col-2">
                                                    @if($item->status==0)
                                                        <a href="/admin/order/change-status?id={{$item->id}}&status=1"
                                                           onclick="return confirm('Bạn có chắc muốn xác nhận đơn hàng?')"
                                                           class="btn btn-simple btn-success btn-icon edit"><i
                                                                    class="material-icons">how_to_reg</i></a>
                                                    @elseif($item->status==1)
                                                        <a href="/admin/order/change-status?id={{$item->id}}&status=2"
                                                           onclick="return confirm('Bạn có chắc muốn hoàn thành đơn hàng?')"
                                                           class="btn btn-simple btn-success btn-icon edit"><i
                                                                    class="material-icons">done</i></a>
                                                    @endif
                                                    @if($item->status==0)
                                                        <a href="/admin/order/change-status?id={{$item->id}}&status=-1"
                                                           onclick="return confirm('Bạn có chắc muốn hủy đơn hàng?')"
                                                           class="btn btn-simple btn-danger btn-icon remove"><i
                                                                    class="material-icons">close</i></a>
                                                        {{--<a href="{{$item->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete"><i--}}
                                                        {{--class="material-icons">close</i></a>--}}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            @else
                                <div class="alert alert-info">Hiện tại không có đơn hàng.
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-7">
                                {{ $list_obj->links() }}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
    {{--<script>--}}
    {{--$('.btn-delete').click(function () {--}}
    {{--var thisButton = $(this);--}}
    {{--swal({--}}
    {{--text: "Bạn có chắc muốn xoá danh mục này không?",--}}
    {{--type: 'warning',--}}
    {{--showCancelButton: true,--}}
    {{--confirmButtonClass: 'btn btn-success',--}}
    {{--cancelButtonClass: 'btn btn-danger',--}}
    {{--confirmButtonText: 'Đồng ý',--}}
    {{--cancelButtonText: 'Huỷ bỏ',--}}
    {{--buttonsStyling: false--}}
    {{--}).then(function() {--}}
    {{--var id = thisButton.attr('href');--}}
    {{--$.ajax({--}}
    {{--'url': '/admin/order/' + id,--}}
    {{--'method': 'DELETE',--}}
    {{--'data':{--}}
    {{--'_token':$('meta[name="csrf-token"]').attr('content')--}}
    {{--},--}}
    {{--success: function (response) {--}}
    {{--swal({--}}
    {{--text: 'Danh mục đã bị xoá.',--}}
    {{--type: 'success',--}}
    {{--confirmButtonClass: "btn btn-success",--}}
    {{--buttonsStyling: false--}}
    {{--})--}}
    {{--setTimeout(function () {--}}
    {{--window.location.reload();--}}
    {{--}, 2*1000);--}}
    {{--},--}}
    {{--error: function () {--}}
    {{--swal({--}}
    {{--text: 'Có lỗi xảy ra, vui lòng thử lại sau.',--}}
    {{--type: 'warning',--}}
    {{--confirmButtonClass: "btn btn-danger",--}}
    {{--buttonsStyling: false--}}
    {{--})--}}
    {{--}--}}
    {{--});--}}

    {{--});--}}
    {{--return false;--}}
    {{--})--}}
    {{--</script>--}}

@endsection
