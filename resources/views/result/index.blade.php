@extends('layout')
@section('content')
    <h1>Result</h1>
   {{--  <button><a  href="/result/create" >เพิ่ม</a></button> --}}
    
    <table class="table table-striped table-align-middle" border="1">
        
        <thead>
          <tr>
            {{-- <th>รหัส</th> --}}
            <th>หัวข้อ</th>
            <th>ผู้ประเมิน</th>
            <th>ผู้ถูกประเมิน</th>
            <th>ค่าน้ำหนัก</th>
            <th>คะแนน</th>
            {{-- <th>แก้ไข</th>
            <th>ลบ</th> --}}

          </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
            {{-- <td><label name="resultsId">{{ $result->resultsId  }}</label></td> --}}
            <td><label name="idcriterakipi">{{ $result->title}}</label></td>
            <td><label name="idevalution">{{ $result->assessN }} {{ $result->assessF }}</label></td>
            <td><label name="idevalution">{{ $result->assessedN }} {{ $result->assessedF }}</label></td>
            <td><label name="weight">{{ $result->weight}}</label></td>
            <td><label name="score">{{ $result->score}}</label></td>
            {{-- <td><a href="{{ route('result.edit',['result' => $result->resultsId]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('result.delete',['result'=> $result->resultsId]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="ลบ">
              </form>
          </td> --}}
          </tr>
            @endforeach            
        </tbody>
      </table>
@endsection