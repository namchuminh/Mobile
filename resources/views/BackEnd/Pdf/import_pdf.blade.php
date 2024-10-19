<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>[PhongVan] - In phiếu nhập</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Playfair:ital,opsz,wght@0,5..1200,400;0,5..1200,500;0,5..1200,700;1,5..1200,400;1,5..1200,500;1,5..1200,700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Playfair',serif;
            font-size: 14px;
        }

        .text-right {
            text-align: right;
            vertical-align: middle !important;
        }

        .text-center {
            text-align: center;
            vertical-align: middle !important;
        }
    </style>

</head>

<body class="login-page" style="background: white; font-family: Roboto;">

    <div>
        <div class="row">
            <div class="col-xs-7">
                <h4 style="text-transform: uppercase;">Phong Vân</h4>
                <b>Điện thoại:</b> 077.xxx.xnxx (Mr. P) <br>
                <b>Email:</b>: support@gmail.com<br>
                <b>Địa chỉ:</b> 123, Abc <br>
                <br>
            </div>

            <div class="col-xs-4">
                <img width="250" height="150"
                    src="https://i.pinimg.com/originals/4a/79/ed/4a79ed8743ec46d4df847a7ba9d34b36.png" />

            </div>
        </div>

        <div style="margin-bottom: 0px">&nbsp;</div>
        @php
            $date = Carbon\Carbon::parse($import->created_at);
        @endphp
        <div class="row" style="text-align: center;margin-bottom: 3.5rem;">
            <h2 style="font-weight: bold">PHIẾU NHẬP HÀNG</h2>
            <div style="text-align: center; margin-bottom: 2%;margin-top: -1%;font-size: 9pt">
                Mã phiếu: PN{{ $import->id }}<br>
                Ngày {{ $date->format('d') }} tháng {{ $date->format('m') }} năm {{ $date->format('Y') }}
            </div>
        </div>

        <div class="row" style="margin-bottom: 3%;font-size: 10pt">
            <div class="col-xs-6">
                <b>Nhà cung cấp:</b>
                {{ $import->ImportToUser->name }}<br>
                <b>SĐT:</b>
                {{ $import->ImportToUser->phone }}<br>
                <b>Địa chỉ:</b> {{ $import->ImportToUser->address }}
            </div>
            <div class="col-xs-6">
                <b>Mã NCC:</b> ND{{ $import->user_id }}<br>
                <b>Ghi chú:</b> {{ $import->note }}
            </div>
        </div>
        <table class="table">
            <thead style="background: #F5F5F5;">
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Sản phẩm</th>
                    <th class="text-center">Số lượng</th>
                    <th class="text-center">Đơn giá</th>
                    <th class="text-right">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($import->ImportToDetail as $key => $row)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td>SP{{ $row->product_id }} | {{ $row->ImportDetailToProduct->name }}</td>
                        <td class="text-center">{{ $row->qty }}</td>
                        <td class="text-center">{{ number_format($row->price) }}</td>
                        <td class="text-right">{{ number_format($row->qty * $row->price) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row">
            <div class="col-xs-6">&nbsp;</div>
            <div class="col-xs-5">
                <table style="width: 100%;">
                    <tbody>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px">
                                <div>Tổng tiền</div>
                            </th>
                            <td style="padding: 5px" class="text-right">{{ number_format($import->total_price) }}</td>
                        </tr>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px">
                                <div>Đã thanh toán</div>
                            </th>
                            <td style="padding: 5px" class="text-right">
                                {{ number_format($import->total_price - $import->debt) }}</td>
                        </tr>
                        <tr class="well" style="padding: 5px">
                            <th style="padding: 5px">
                                <div>Công nợ</div>
                            </th>
                            <td style="padding: 5px" class="text-right">{{ number_format($import->debt) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="margin-bottom: 6%">&nbsp;</div>

        <div class="row">
            <table style="width: 100%" class="text-center">
                <tr>
                    <td>Ngày {{ $date->format('d') + 10 }} tháng {{ $date->format('m') }} năm
                        {{ $date->format('Y') }}</td>
                    <td>Ngày {{ $date->format('d') + 10 }} tháng {{ $date->format('m') }} năm
                        {{ $date->format('Y') }}</td>
                </tr>
                <tr>
                    <td>
                        <span style="text-transform: uppercase;">Người cung cấp</span></br>
                        <small style="font-style: italic;">(Ký, ghi rõ họ tên)</small></br>
                        <span style="font-family: 'Homemade Apple' !important; font-size: 1.5rem">&nbsp;</span></br>
                        <span>{{ $import->ImportToUser->name }}</span></br>
                    </td>
                    <td>
                        <span style="text-transform: uppercase;">Người nhận hàng</span></br>
                        <small style="font-style: italic;">(Ký, ghi rõ họ tên)</small></br>
                        <span style="font-family: 'Homemade Apple' !important; font-size: 1.5rem;vertical-align: top;">pipj</span></br>
                        <span>Pipj Moriarty</span></br>
                    </td>
                </tr>
            </table>
        </div>

</body>

</html>
