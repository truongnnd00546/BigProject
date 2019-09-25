@extends('layout.master',['page_title'=>'List Product'])
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="purple">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content">
                <h4 class="card-title">DANH SÁCH SẢN PHẨM</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                    <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                @if($obj->count()>0)
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
                                                aria-label="Name: activate to sort column descending">NAME
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 303px;"
                                                aria-label="Image: activate to sort column ascending">IMAGE
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 156px;"
                                                aria-label="Price: activate to sort column ascending">PRICE
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 70px;"
                                                aria-label="Sale: activate to sort column ascending">SALE
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1"
                                                colspan="1" style="width: 135px;"
                                                aria-label="Description: activate to sort column ascending">DESCRIPTION
                                            </th>
                                            <th class="disabled-sorting text-right sorting" tabindex="0"
                                                aria-controls="datatables" rowspan="1" colspan="1" style="width: 149px;"
                                                aria-label="Actions: activate to sort column ascending">ACTIONS
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($obj as $item)
                                            <tr role="row" class="odd">
                                                <td>{{$item->id}}</td>
                                                <td tabindex="0" class="sorting_1">{{$item->name}}</td>
                                                <td>
                                                    <div class="card"
                                                         style="width: 100px;height: 80px;background-image: url('{{$item->image}}'); background-size: cover">
                                                    </div>
                                                </td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->sale}}</td>
                                                <td>{{$item->description}}</td>
                                                <td class="text-right">
                                                    <a href="#" class="btn btn-simple btn-info btn-icon like"><i
                                                                class="material-icons">favorite</i></a>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i
                                                                class="material-icons">dvr</i></a>
                                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i
                                                                class="material-icons">close</i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button first disabled" id="datatables_first"><a href="#"
                                                                                                            aria-controls="datatables"
                                                                                                            data-dt-idx="0"
                                                                                                            tabindex="0">First</a>
                                        </li>
                                        <li class="paginate_button previous disabled" id="datatables_previous"><a
                                                    href="#" aria-controls="datatables" data-dt-idx="1" tabindex="0">Previous</a>
                                        </li>
                                        <li class="paginate_button active"><a href="#" aria-controls="datatables"
                                                                              data-dt-idx="2" tabindex="0">1</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="datatables"
                                                                        data-dt-idx="3" tabindex="0">2</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="datatables"
                                                                        data-dt-idx="4" tabindex="0">3</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="datatables"
                                                                        data-dt-idx="5" tabindex="0">4</a></li>
                                        <li class="paginate_button next" id="datatables_next"><a href="#"
                                                                                                 aria-controls="datatables"
                                                                                                 data-dt-idx="6"
                                                                                                 tabindex="0">Next</a>
                                        </li>
                                        <li class="paginate_button last" id="datatables_last"><a href="#"
                                                                                                 aria-controls="datatables"
                                                                                                 data-dt-idx="7"
                                                                                                 tabindex="0">Last</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
@endsection