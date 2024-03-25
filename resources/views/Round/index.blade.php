@extends('layout')
@section('content')
    <h1>Round</h1>
    <button><a class="btn btn-primary" href="/round/create" >เพิ่ม</a></button>
    <br><br>
    <table class="table table-striped table-align-middle" border="1">
        
        <thead>
          <tr>
           {{--  <th scope="roundID ">รหัส</th> --}}
            <th >วันที่</th>
            <th >แก้ไข</th>
            <th >ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($rounds as $round)
            <tr>
           {{--  <td><label name="id">{{ $round->idround }}</label></td> --}}
            <td><label name="date">{{ $round->date}}</label></td>
            <td><a class="btn btn-success" href="{{ route('round.edit',['round' => $round->idround]) }}">แก้ไข</a></td>
            <td>
              <form method="POST" action="{{ route('round.delete',['round'=> $round->idround]) }}">
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