@extends('layout')
@section('title','แบบประเมิน')
@section('content')
    <h1>Evaluation</h1>
    <button><a  href="/evaluation/create" >เพิ่ม</a></button>
    
    <table class="table" border="1">
        <thead>
          <tr>
            
            <th>ผู้ประเมิน</th>
            <th>ผู้ถูกประเมิน</th>
            <th>round</th>
            <th>setkpi</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($evaluations as $evaluation)
            <tr>
            
            <td><label name="idassess ">{{$evaluation->assessN}} {{$evaluation->assessF}}</label></td>
            
            <td><label name="idassessed ">{{$evaluation->assessedN}} {{$evaluation->assessedF}}</label></td>

            <td><label name="idround ">{{ $evaluation->date }}</label></td>
            <td><label name="idset ">{{ $evaluation->titleset }}</label></td>

            <td><a href="{{ route('evaluation.edit',['evaluation' => $evaluation->idevaluation]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('evaluation.delete',['evaluation'=> $evaluation->idevaluation]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="ลบ">
              </form>
          </td>
          </tr>
            @endforeach   
                  
        </tbody>
      </table>
@endsection