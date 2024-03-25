@extends('layout')
@section('content')
    <h1>Setkpi</h1>
    <button><a class="btn btn-primary" href="/setkpi/create" >เพิ่ม</a></button>
    <br><br>
    <table class="table table-striped table-align-middle" border="1">
        
        <thead>
          <tr>
           {{--  <th>รหัส</th> --}}
            <th>ชื่อชุด</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($setkpis as $setkpi)
            <tr>
            {{-- <td><label name="id">{{ $setkpi->idset}}</label></td> --}}
            <td><label name="title">{{ $setkpi->titleset}}</label></td>
            <td><a class="btn btn-success" href="{{ route('setkpi.edit',['setkpi' => $setkpi->idset]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('setkpi.delete',['setkpi'=> $setkpi->idset]) }}">
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