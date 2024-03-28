{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"> --}}
    @extends('HRPages/layoutHR')
    @section('title', 'หน้าเเบบประเมิน')
    @section('content')
{{-- </head> --}}
{{-- <body> --}}
  <h2>ชุดเเบบประเมินพนักงาน</h2>
  <div>
    @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <div class=" py-3 px-1 d-grid gap-2 d-md-flex justify-content-md-end ">
      <a class="btn btn-primary  md-8 font-family-monospace" href="/setKpiEvaluationFormHRPage/create">เพิ่มพนักงาน</a>
    </div>
{{-- </div>
  <div class="py-4 d-grid gap-2 d-md-flex justify-content-md-end "style="width: 100%">
    <a class="btn btn-primary  me-md-5 " href="/setkpi/create">เพิ่มเเบบประเมิน</a>
  </div> --}}

  {{-- <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
    <button><a class="btn btn-primary btn-lg me-md-5 "  href="/setkpi/create" >เพิ่มเเบบประเมิน</a></button>
     </div> --}}
      {{-- <a class="btn btn-primary btn-lg me-md-5 " type="button ">เพิ่มเเบบประเมิน</a> --}}
      {{-- <div class=" table table-striped table-bordered border-white" style="width: 100%"> --}}
        {{-- <table class=" table-info table-bordered border-white" style="width: 100%">  --}}
  <div class="table table-responsive  " style="width: 100%">      
    <table class="table-bordered border-white  table-bordered text-center" style="width: 100%">
    {{-- <table class="table table-bordered border-whitetable table-bordered text-center "style="width: 100%"> --}}
      {{-- <thead class=" table-info table-bordered border-white" > --}}
      <tr class="head">
            <th cope="justify-content: center">รหัส</th>
            <th cope="justify-content: center">title</th>
            <th cope="justify-content: center">จำนวนชุด</th>
            <th cope="justify-content: center">แก้ไข</th>
            <th cope="justify-content: center">ลบ</th>

          </tr>
        {{-- </thead> --}}
        {{-- <tbody> --}}
            @foreach ($setkpis as $setkpi)
            <tr>
            <td><label name="id">{{ $setkpi->idset}}</label></td>
            {{-- <td>{{ $setkpi->idset}}</label></td> --}}
            <td><label name="title">{{ $setkpi->titleset}}</label></td>
            {{-- <td>{{ $setkpi->titleset}}</label></td> --}}
            <td>4 ข้อ</td>
            <td><a class="px-1 btn btn-success"  href="{{ route('editsetkpiHR',['setkpi' => $setkpi->idset]) }}">แก้ไข</a></td>
           
          <td>
              <form method="POST" action="{{ route('setkpideleteHR',['setkpi'=> $setkpi->idset]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="ลบ" class="px-2.5 btn btn-danger">
                 
              </form>
          </td>
          </tr>
            @endforeach            
        {{-- </tbody> --}}
      </table>
      </div>
{{-- </body> --}}
{{-- </html> --}}
@endsection