@extends('layout')
@section('content')
    <h1>แก้ไข</h1><br>
    <form method="post" action="{{route('evaluation.update',['evaluation'=>$evaluation->idevaluation])}}">
        @csrf
        @method('put')

        <label>ผู้ประเมิน </label>
            <select name="idassess">
                {{-- @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach --}}
                <?php foreach($employees as $employee){
                    echo"<option value= $employee->empID ";
                    if($employee->empID == $evaluation->idassess){
                        echo 'selected="selected"';
                    }
                    echo"> $employee->firstName $employee->lastName</option>";
                }?>
            </select>
            
            <label>ผู้ถูกประเมิน </label>
            <select name="idassessed">
                {{-- @foreach($employees2 as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach --}}
                <?php foreach($employees2 as $employee){
                    echo"<option value= $employee->empID ";
                    if($employee->empID == $evaluation->idassessed){
                        echo 'selected="selected"';
                    }
                    echo"> $employee->firstName $employee->lastName</option>";
                }?>
            </select>
            <br>
            <label>รอบการประเมิน </label>
            <select name="idround">
                {{-- @foreach($rounds as $round)
                    <option value="{{ $round->idround }}">{{ $round->date }}</option>
                @endforeach --}}
                <?php foreach($rounds as $round){
                    echo"<option value= $round->idround ";
                    if($round->idround == $evaluation->idround){
                        echo 'selected="selected"';
                    }
                    echo"> $round->date</option>";
                }?>
            </select>
            <label>ชื่อชุด </label>
            <select name="idset">
               {{--  @foreach($setkpis as $setkpi)
                    <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                @endforeach --}}
                <?php foreach($setkpis as $setkpi){
                    echo"<option value= $setkpi->idset ";
                    if($setkpi->idset == $evaluation->idset){
                        echo 'selected="selected"';
                    }
                    echo"> $setkpi->titleset</option>";
                }?>
            </select>
       
        <div>
            <br>
            <input type="submit" value="แก้ไข">
        </div>
    </form>
@endsection