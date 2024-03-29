@extends('layout')
@section('title', 'หน้าผลการทำงาน')
@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-weight: 800;
            color: black;
        }
        h2 {
            color: rgb(92, 83, 83);
            font-weight: 200;
            margin-bottom: 20px;
            margin-top: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .head {
            background-color: #007bff;
            color: #fff;
        }

        .column:nth-child(even) {
            background-color: #f2f2f2;
        }

        .success-message {
            color: #28a745;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .error-message {
            color: #dc3545;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>

    <h1>ผลการทำงาน</h1>

    @if (session()->has('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <!-- Orders Table -->
    <h2>ใบสั่งซื้อสินค้า</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>พนักงาน</th>
                <th>ลูกค้า</th>
                <th>สินค้า</th>
                <th>สี</th>
                <th>ราคา</th>
                <th>สถานะ</th>
            </tr>
            @foreach ($orderdetail as $detail)
                <tr class="column">
                    <td>{{ $detail->firstName }} {{ $detail->lastName }}</td>
                    <td>{{ $detail->firstname }} {{ $detail->lastname }}</td>
                    <td>{{ $detail->productname }}</td>
                    <td>{{ $detail->color }}</td>
                    <td>{{ $detail->price }}</td>
                    <td>{{ $detail->status }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- Sells Table -->
    <h2>ยอดขาย</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>พนักงาน</th>
                <th>จำนวนคันที่ขายได้</th>
                <th>ยอดขาย</th>
            </tr>
            @foreach ($sell as $sells)
                <tr class="column">
                    <td>{{ $sells->firstName }} {{ $sells->lastName }}</td>
                    <td>{{ $sells->total_order }}</td>
                    <td>{{ $sells->total_price }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- Quotation Table -->
    <h2>ใบเสนอราคา</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>พนักงาน</th>
                <th>ลูกค้า</th>
                <th>สินค้า</th>
                <th>สี</th>
                <th>ราคา</th>
            </tr>
            @foreach ($quotationdetail as $quotationdetails)
                <tr class="column">
                    <td>{{ $quotationdetails->firstName }} {{ $quotationdetails->lastName }}</td>
                    <td>{{ $quotationdetails->firstname }} {{ $quotationdetails->lastname }}</td>
                    <td>{{ $quotationdetails->productname }}</td>
                    <td>{{ $quotationdetails->color }}</td>
                    <td>{{ $quotationdetails->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- TotalQuotation Table -->
    <h2>ยอดใบเสนอราคา</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>พนักงาน</th>
                <th>จำนวน</th>
                <th>ยอดรวมราคา</th>
            </tr>
            @foreach ($quot as $quots)
                <tr class="column">
                    <td>{{ $quots->firstName }} {{ $quots->lastName }}</td>
                    <td>{{ $quots->total_quotation }}</td>
                    <td>{{ $quots->total_price }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- Sells/TotalQuotation Table -->
    <h2>Sells/TotalQuotation*100</h2>
    <div>
        @if ($quot != null && $quot->total_quotation != 0)
            {{ ($sell->total_order / $quot->total_quotation) * 100 }}
        @else
            0
        @endif
    </div>

    <!-- Feedbacks Table -->
    <h2>ผลตอบรับของลูกค้า</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>เลขออเดอร์</th>
                <th>หัวข้อการประเมิน</th>
                <th>คะแนน</th>
                <th>ผู้ดูแลออเดอร์</th>
                <th>ชื่อพนักงาน</th>
                <th>ทีม</th>
                <th>ราคา</th>
            </tr>
            @foreach ($feedbacks as $feedback)
                <tr class="column">
                    <td>{{ $feedback->orderId }}</td>
                    <td>{{ $feedback->title }}</td>
                    <td>{{ $feedback->score }}</td>
                    <td>{{ $feedback->userName }}</td>
                    <td>{{ $feedback->firstName }} {{ $feedback->lastName }}</td>
                    <td>{{ $feedback->teamName }}</td>
                    <td>{{ $quotationdetail->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>  

    <!-- Evaluation Table -->
    <h2>การประเมิน</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>หัวข้อ</th>
                <th>ผู้ประเมิน</th>
                <th>ผู้ถูกประเมิน</th>
                <th>ค่าน้ำหนัก</th>
                <th>คะแนน</th>
            </tr>
            @foreach ($results as $result)
                <tr class="column">
                    <td>{{ $result->title }}</td>
                    <td>{{ $result->assessN }} {{ $result->assessF }}</td>
                    <td>{{ $result->assessedN }} {{ $result->assessedF }}</td>
                    <td>{{ $result->weight }}</td>
                    <td>{{ $result->score }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <!-- Results Table -->
    <h2>ผลลัพธ์</h2>
    <div class="table table-responsive">
        <table>
            <tr class="head">
                <th>ผู้ประเมิน</th>
                <th>ผู้ถูกประเมิน</th>
                <th>เกรด</th>
            </tr>
            @foreach ($Grade as $grades)
                <tr class="column">
                    <td>{{ $grades->assessN }} {{ $grades->assessF }}</td>
                    <td>{{ $grades->assessedN }} {{ $grades->assessedF }}</td>
                    <td>{{ $grades->Grade }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
