@extends('layout')
@section('title','หน้าผลการทำงาน')
@section('content')
<h1 style="font-weight: 800">การประเมิน</h1> <br> 

<form id="eva" method="post" action="{{route('result.store')}}">
    @csrf
    @method('post')
    <table class="table table-striped table-align-middle">
        <tbody>
        @foreach ($criteriakpis as $criteriakpi)
        <tr>
         <td><input type="hidden" name="idcriterakipi[]" value={{$criteriakpi->crID}}>{{ $criteriakpi->title}}</input></td>
            @foreach ($selectionkpis as $select)
                <tr>
                @if ($select->idcriteriakpi == $criteriakpi->crID)
                    @foreach ($evaluation as $eee)
                        <input type="hidden" name="idevalution" value={{$eee->idevaluation}}></input>
                    @endforeach
                    
                    <td>{{ $select->max}} - {{$select->min}}</td>

                    <td><input value="{{ $select->score }}" type="hidden" name="weight">{{ $select->levelOfQuality}}</td>
                    <td><input type="checkbox" class="single-checkbox" value="{{ $select->score }}" name="score[]" ></td>
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
    function validateForm() {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var isChecked = false;

        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                isChecked = true;
            }
        });

        if (isChecked) {
            document.getElementById('eva').submit();
        } else {
            alert('กรุณาเลือกอย่างน้อยหนึ่งรายการ');
        }
    }
</script>
@endsection