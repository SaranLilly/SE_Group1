@extends('layout')
@section('content')
    <h1>Selectionkpi</h1>
    <button><a class="btn btn-primary" href="/selectionkpi/create" >เพิ่ม</a></button>
    <br><br>
    <table class="table table-striped table-align-middle" border="1">
        
        <thead>
          <tr>
            {{-- <th>รหัส</th> --}}
            <th>ชื่อชุด</th>
            <th>หัวข้อ</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($selectionkpis as $selectionkpi)
            <tr>
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
@endsection