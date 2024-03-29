@extends('layout')
@section('title','หน้าผลการทำงาน')
@section('content')
<h1 style="font-weight: 800; color: black;">การประเมิน</h1> <br> 

<div class="table">

    <form id="eva" method="post" action="{{route('result.store')}}">
    {{-- <form id="eva" method="post" action="{{route('result.index)}}"> --}}
        
        @csrf
        @method('post')
        <table style="width:100%; border-collapse: collapse;">
            <tbody>
            @foreach ($criteriakpis as $criteriakpi)
            <tr style="background-color: #f1f1f1;">
             <td><input type="hidden" name="idcriterakipi[]" value={{$criteriakpi->crID}}>{{ $criteriakpi->title}}</input></td> 
                @foreach ($selectionkpis as $select)
                    <tr>
                    @if ($select->idcriteriakpi == $criteriakpi->crID)
                        @foreach ($evaluation as $eee)
                            <input type="hidden" name="idevalution" value={{$eee->idevaluation}}></input>
                        @endforeach
                        
                        <td>{{ $select->max}} - {{$select->min}}</td>
    
                        <td><input value="{{ $select->score }}" type="hidden" name="weight">{{ $select->levelOfQuality}}</td>
                        {{-- อันนี้ใช้ได้ --}}
                        <td><input type="checkbox" class="single-checkbox" value="{{ $select->score }}" name="score[]" ></td>
                        {{-- <td><input type="checkbox" class="single-checkbox" value="{{ $select->score }}" name="score[]" data-weight="{{ $select->weight }}">{{ $select->levelOfQuality}}</td> --}}
    
                    </tr>
                    @endif
                @endforeach
            </tr>
            @endforeach    
        </tbody>
        </table> 
        <div style="margin-top: 20px;">
        <input type="submit" value="บันทึก" class="btn btn-success" style="background-color: rgb(40, 107, 40)" >
         </div>
    </form>

</div>

<style>
    /* ตั้งค่าสีและสไตล์ของส่วนต่าง ๆ */
    .table {
        border: 1px solid #007bff;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 123, 255, 0.2);
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    input[type="submit"] {
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    var checkboxes = document.querySelectorAll('.single-checkbox');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var weightInput = this.parentNode.parentNode.querySelector('input[name="weight[]"]');
            if (this.checked) {
                weightInput.value = this.getAttribute('data-weight');
            } else {
                weightInput.value = '';
            }
        });
    });
});

    // ใช้ได้
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
