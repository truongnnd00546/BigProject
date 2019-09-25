@extends('layout.master',['page_title'=>'Biểu đồ tổng doanh thu | Seafashion Admin Page',
'current_menu'=>'chart_manager',
    'current_sub_menu'=>'list_item'])
@section('content')
    <style>
        .col-lg-3{
            margin-top: -60px;
        }
        .card-icon{
            float: left;
            color: white;
            margin-right: 25px;
        }
        .card-category1{
            color: white;
        }
        .card-title{
            color: white;
            font-weight: bold;
        }
        .card-stats1{
            height: 120px;
            background: #FFD85A;
            background: -moz-linear-gradient(top, #FFD85A 1%, #F39C13 100%);
            background: -webkit-linear-gradient(top, #FFD85A 1%, #F39C13 100%);
            background: linear-gradient(to bottom, #FFD85A 1%, #F39C13 100%);
        }
        .card-stats2{
            height: 120px;
            background: #82AE48;
            background: -moz-linear-gradient(top, #82AE48 1%, #23954F 100%);
            background: -webkit-linear-gradient(top, #82AE48 1%, #23954F 100%);
            background: linear-gradient(to bottom, #82AE48 1%, #23954F 100%);
        }
        .card-stats3{
            height: 120px;
            background: #E57575;
            background: -moz-linear-gradient(top, #E57575 1%, #e53935 100%);
            background: -webkit-linear-gradient(top, #E57575 1%, #e53935 100%);
            background: linear-gradient(to bottom, #E57575 1%, #e53935 100%);
        }
        .card-stats4{
            height: 120px;
            background: #00C0EF;
            background: -moz-linear-gradient(top, #00C0EF 1%, #3C8DBC 100%);
            background: -webkit-linear-gradient(top, #00C0EF 1%, #3C8DBC 100%);
            background: linear-gradient(to bottom, #00C0EF 1%, #3C8DBC 100%);
        }
        .card .card-header.card-header-icon1 i {
            width: 53px;
            height: 53px;
            text-align: center;
            line-height: 53px;
        }
        .mate{
            font-size: 50px;
        }
        .progress1 {
            height: 3px;
            border-radius: 0;
            box-shadow: none;
            background: rgba(0,0,0,0.2);
        }
        .progress-bar1 {
            float: left;
            width: 0;
            height: 100%;
            font-size: 12px;
            line-height: 20px;
            color: #fff;
            text-align: center;
            background-color: white;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
            box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
            -webkit-transition: width .6s ease;
            -o-transition: width .6s ease;
            transition: width .6s ease;
        }
        .footer1 p{
            color: white;
            padding-top: 5px;
            padding-left: 20px;
        }
    </style>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats1">
            <div class="card-header card-header-danger card-header-icon1">
                <div class="card-icon">
                    <i class="material-icons mate">grade</i>
                </div>
                <div class="card-category1">
                    <p>MỤC TIÊU</p>
                    <h3 class="card-title">250</h3>
                </div>
            </div>
            <div class="progress1">
                <div class="progress-bar1" style="width: 100%"></div>
            </div>
            <div class="footer1">
                <p>Mục tiêu tháng này</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats2">
            <div class="card-header card-header-danger card-header-icon1">
                <div class="card-icon">
                    <i class="material-icons mate">equalizer</i>
                </div>
                <div class="card-category1">
                    <p>ĐƠN THÁNG NÀY</p>
                    <h3 class="card-title">{{$balance}}</h3>
                </div>
            </div>
            <div class="progress1">
                <div class="progress-bar1" style="width: 40%"></div>
            </div>
            <div class="footer1">
                <p>Tổng đơn tháng này</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats4">
            <div class="card-header card-header-danger card-header-icon1">
                <div class="card-icon">
                    <i class="material-icons mate">done_all</i>
                </div>
                <div class="card-category1">
                    <p>ĐƠN ĐÃ CHỐT</p>
                    <h3 class="card-title">{{$done}}</h3>
                </div>
            </div>
            <div class="progress1">
                <div class="progress-bar1" style="width: 20%"></div>
            </div>
            <div class="footer1">
                <p>Đơn đã chốt tháng này</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats3">
            <div class="card-header card-header-danger card-header-icon1">
                <div class="card-icon">
                    <i class="material-icons mate">schedule</i>
                </div>
                <div class="card-category1">
                    <p>ĐƠN HÔM NAY</p>
                    <h3 class="card-title">{{$data}}</h3>
                </div>
            </div>
            <div class="progress1">
                <div class="progress-bar1" style="width: 80%"></div>
            </div>
            <div class="footer1">
                <p>Tổng đơn hôm nay</p>
            </div>
        </div>
    </div>
    {{--Line chart--}}
    <div class="col-md-12">
        <div style="border-top: 5px solid #d2d6de;margin-top: -10px" class="card">
            <div class="card-content">
                <h4 style="color: black" class="card-title">HIển thị doanh thu theo thời gian</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div id="reportrange" style="cursor: pointer; float: right;">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
                <div class="clearfix"></div>
                <div id="linechart_material"></div>
            </div>
        </div>
    </div>

    {{--Pie chart--}}
    <div class="col-md-12">
        <div style="border-top: 5px solid #d2d6de; margin-top: -10px" class="card">
            <div class="card-content">
                <h4 style="color: black" class="card-title">Hiển thị số lượng sản phẩm đã bán</h4>
                <div class="toolbar">
                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div id="reportrange" style="cursor: pointer; float: right;">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
                <div class="clearfix"></div>
                <div id="piechart_material" style="width: 800px; height: 400px;"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    {{--JS Pie Chart--}}
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart1);

        function drawChart1() {
            $.ajax({
                url: '/api-get-chart-pie-data?startDate=2019-09-01&endDate=2019-09-30',
                method: 'GET',
                success: function (resp) {
                    var data = new google.visualization.DataTable()
                    data.addColumn('string', 'Product Name');
                    data.addColumn('number', 'Quantity');
                    for (var i = 0; i < resp.length; i++) {
                        data.addRow([resp[i].category_name + '', Number(resp[i].number)]);
                    }
                    var options = {
                        title: 'Biểu đồ hiển thị % sản phẩm'
                    };
                    //
                    var chart = new google.visualization.PieChart(document.getElementById('piechart_material'));
                    chart.draw(data, options);
                },
                error: function () {
                    swal('Có lỗi xảy ra', 'Không thể lấy dữ liệu từ api', 'error');
                }
            });
        }
        {{--</script>--}}
        {{--JS Line chart--}}
        // <
        // script
        // type = "text/javascript" >
        google.charts.load('current', {'packages': ['line']});
        google.charts.setOnLoadCallback(function () {
            $.ajax({
                url: '/api-get-chart-data?startDate=2019-09-01&endDate=2019-09-30',
                method: 'GET',
                success: function (resp) {
                    drawChart(resp);
                },
                error: function () {
                    swal('Có lỗi xảy ra', 'Không thể lấy dữ liệu từ api', 'error');
                }
            });
        });

        function drawChart(chart_data) {
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Ngày');
            data.addColumn('number', 'Doanh thu');
            for (var i = 0; i < chart_data.length; i++) {
                data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
            }
            var options = {
                chart: {
                    title: 'Biểu đồ doanh thu theo thời gian',
                    subtitle: 'Tính theo đơn vị (VND)'
                },
                height: 500,
                hAxis: {
                    format: 'dd-MM-yyyy'
                }
            };
            var chart = new google.charts.Line(document.getElementById('linechart_material'));
            chart.draw(data, google.charts.Line.convertOptions(options));
        }

        $(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('DD-MM-YYYY') + ' - ' + end.format('DD-MM-YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 ngày trước': [moment().subtract(6, 'days'), moment()],
                    '30 ngày trước': [moment().subtract(29, 'days'), moment()],
                    'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                    'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                locale: {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Áp dụng",
                    "cancelLabel": "Hủy",
                    "fromLabel": "Từ",
                    "toLabel": "Đến",
                    "customRangeLabel": "Tùy chọn",
                    "daysOfWeek": [
                        "CN",
                        "T2",
                        "T3",
                        "T4",
                        "T5",
                        "T6",
                        "T7"
                    ],
                    "monthNames": [
                        "Tháng 1",
                        "Tháng 2",
                        "Tháng 3",
                        "Tháng 4",
                        "Tháng 5",
                        "Tháng 6",
                        "Tháng 7",
                        "Tháng 8",
                        "Tháng 9",
                        "Tháng 10",
                        "Tháng 11",
                        "Tháng 12"
                    ],
                    "firstDay": 1
                }
            }, cb);
            cb(start, end);
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                //do something, like clearing an input
                $('#reportrange').val('');
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                // console.log();
                // console.log(picker.endDate.format('YYYY-MM-DD'));
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                $.ajax({
                    url: '/api-get-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('Không có dữ liệu', 'Vui lòng lựa chọn khoảng thời gian khác.', 'warning');
                            return;
                        }
                        ;
                        drawChart(resp);
                    },
                    error: function () {
                        swal('Có lỗi xảy ra', 'Không thể lấy dữ liệu từ api', 'error');
                    }
                });
            });
        });
    </script>
@endsection
