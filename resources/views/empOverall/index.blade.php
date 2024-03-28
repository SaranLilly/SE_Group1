@extends('layout')
@section('title','หน้าผลการทำงาน')
@section('content')
<h1 style="font-weight: 800">ผลการทำงาน</h1> <br> 

    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
   <!-- Orders Table -->
<div>
    <h2 style="font-weight: 400">Orders</h2>
    <table border="1" class="table table-striped">
        <tr>
            <th>พนักงาน</th>
            <th>ลูกค้า</th>
            <th>สินค้า</th>
            <th>สี</th>
            <th>ราคา</th>
            <th>สถานะ</th>
        </tr>

        @foreach ($orderdetail as $detail)
            <tr>
                <td>{{ $detail->firstName }}</td>
                <td>{{ $detail->firstname }}</td>
                <td>{{ $detail->productname }}</td>
                <td>{{ $detail->color }}</td>
                <td>{{ $detail->price }}</td>
                <td>{{ $detail->status }}</td>
            </tr>
        @endforeach
    </table>
</div>


<div>
    <h2 style="font-weight: 400">Quotation</h2>
    <table border="1" class="table table-striped">
        <tr>
            <th>พนักงาน</th>
            <th>ลูกค้า</th>
            <th>สินค้า</th>
            <th>สี</th>
            <th>ราคา</th>
        </tr>

        @foreach ($quotationdetail as $quotationdetail)
            <tr>
                <td>{{ $quotationdetail->firstName }}</td>
                <td>{{ $quotationdetail->firstname }}</td>
                <td>{{ $quotationdetail->productname }}</td>
                <td>{{ $quotationdetail->color }}</td>
                <td>{{ $quotationdetail->price }}</td>
            </tr>
        @endforeach
    </table>
</div>

<div>
        <h2 style="font-weight: 400">Feedbacks</h2>
        <table border="1" class="table table-striped table-align-middle">
            <tr>
                <th>เลขออเดอร์</th>
                <th>หัวข้อการประเมิน</th>
                <th>คะแนน</th>
                <th>ผู้ดูแลออเดอร์</th>
                <th>ชื่อพนักงาน</th>
                <th>ทีม</th>
                <th>ราคา</th>
                {{-- <th>edit</th>
                <th>delete</th> --}}
            </tr>
            @foreach ($feedbacks as $feedback)
    <tr>
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
<div>
        <h2 style="font-weight: 400">Evaluation results</h2>
        <table border="1" class="table table-striped table-align-middle">
            <tr>
                    {{-- <th>รหัส</th> --}}
                    <th>หัวข้อ</th>
                    <th>ผู้ประเมิน</th>
                    <th>ผู้ถูกประเมิน</th>
                    <th>ค่าน้ำหนัก</th>
                    <th>คะแนน</th>

                </tr>
                @foreach ($results as $result)
                    <tr class="column">
                        {{-- <td><label name="resultsId">{{ $result->resultsId  }}</label></td> --}}
                        <td><label name="idcriterakipi">{{ $result->title }}</label></td>
                        <td><label name="idevalution">{{ $result->assessN }} {{ $result->assessF }}</label></td>
                        <td><label name="idevalution">{{ $result->assessedN }} {{ $result->assessedF }}</label></td>
                        <td><label name="weight">{{ $result->weight }}</label></td>
                        <td><label name="score">{{ $result->score }}</label></td>
                        </tr>
        @endforeach
    </table>
</div>
@endsection