@extends('layout')
@section('title','หน้าผลการทำงาน')
@section('content')
<h1 style="font-weight: 800">การประเมิน</h1> <br> 

<form method="post" action="{{ route('result.store') }}">
    @csrf
    @method('post')
    <table class="table table-striped table-align-middle" border="1">
        <tbody>
        @foreach ($criteriakpis as $criteriakpi)
        <tr>
            <td><input type="hidden" name="idcriterakipi" value="{{ $criteriakpi->crID }}">{{ $criteriakpi->title }}</td>
            @foreach ($selectionkpis as $select)
                @if ($select->idcriteriakpi == $criteriakpi->crID)
                <tr>
                @foreach ($evaluation as $eee)
                    <input type="hidden" name="idevalution" value="{{ $eee->idevaluation }}">
                @endforeach
                    
                    <td>{{ $select->max }} - {{ $select->min }}</td>
                    <td><input type="hidden" name="score" value="{{ $select->score}}">{{ $select->levelOfQuality }}</td>
                    <td><input type="checkbox" class="single-checkbox" value="{{$select->score}} {{ $select->score}}" onclick="updateValue(checkbox)"></td>
                </tr>
                @endif
            @endforeach
        </tr>
        @endforeach    
    </tbody>
    </table> 
    <div><br>
    <input type="submit" value="บันทึก" class="btn btn-primary">
     </div>
</form>
<script>
    function updateValue(checkbox) {
        if (checkbox.checked) {
            checkbox.value = "ค่าที่ต้องการเมื่อเลือก";
        } else {
            // กำหนดค่าเป็นค่าเดิมหรือตามที่ต้องการ
        }
    }
</script>
     
@endsection


{{-- @extends('layout')
@section('title','หน้าผลการทำงาน')
@section('content')
<h1 style="font-weight: 800">การประเมิน</h1> <br> 

<form method="post" action="{{ route('result.store') }}">
    @csrf
    @method('post')
    <table class="table table-striped table-align-middle" border="1">
        <tbody>
        @foreach ($criteriakpis as $criteriakpi)
        <tr>
         
         <td><label name="idcriterakipi" value={{$criteriakpi->crID}}>{{ $criteriakpi->title }}</label></td>
            @foreach ($selectionkpis as $select)
                <tr>
                @if ($select->idcriteriakpi == $criteriakpi->crID)
                @foreach ($evaluation as $eee)
                    <label name="idevalution" value={{$eee->idevaluation}}></label>
                @endforeach
                    
                    <td>{{ $select->max }} - {{ $select->min }}</td>

                    <td><label name="score" value={{$select->score}}>{{$select->levelOfQuality}}</label></td>
                    <td><input type="checkbox" class="single-checkbox" onclick="updateValue(this)" value="{{$select->score}}"></td>
                </tr>
                @endif
            @endforeach
        </tr>
        @endforeach    
    </tbody>
    </table> 
    <div><br>
    <input type="submit" value="บันทึก" class="btn btn-primary">
     </div>
</form>
<script>
    function updateValue(checkbox) {
        // เช็คว่า checkbox ถูกเลือกหรือไม่
        if (checkbox.checked) {
            // กำหนดค่า value ของ checkbox ด้วยค่าที่ต้องการ
            checkbox.value = "ค่าที่ต้องการเมื่อเลือก";
        } else {
            // กำหนดค่า value ของ checkbox กลับไปเป็นค่าเดิม
            checkbox.value = "{{ $select->score }}";
        }
    }
</script>
     
@endsection --}}