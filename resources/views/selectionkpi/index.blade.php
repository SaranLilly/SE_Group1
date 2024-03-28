@extends('layout')
@section('content')
    <h1 style="font-weight: 800">ชุดการประเมินและหัวข้อการประเมิน</h1>

    <div class=" py-3 px-1 d-grid gap-2 d-md-flex justify-content-md-end ">
      <a class="btn btn-primary  md-8 font-family-monospace"
          href="/selectionkpi/create">เพิ่ม</a>
   </div>

{{-- 
    <button><a class="btn btn-primary" href="/selectionkpi/create" >เพิ่ม</a></button> --}}
    <div class="table">
      <table style="width: 100%">
        <thead>
          <tr class="head">
            {{-- <th>รหัส</th> --}}
            <th>ชื่อชุด</th>
            <th>หัวข้อ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($selectionkpis as $selectionkpi)
            <tr class="column">
            {{-- <td><label name="id">{{ $selectionkpi->idselection }}</label></td> --}}
            <td><label name="set">{{ $selectionkpi->titleset}}</label></td>
            <td><label name="kpi">{{ $selectionkpi->title}}</label></td>
            <td><a class="btn btn-success" href="{{ route('selectionkpi.edit',['selectionkpi' => $selectionkpi->idselection]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('selectionkpi.delete',['selectionkpi'=> $selectionkpi->idselection]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="ลบ" class="btn btn-danger">
              </form>
          </td>
          </tr>
            @endforeach            
        </tbody>
      </table>



    </div>
    
@endsection