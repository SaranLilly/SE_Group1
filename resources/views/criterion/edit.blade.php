@extends('layout')
@section('title','แก้ไขเกณฑ์การประเมิน')
@section('content')
    <div class="container">
    <h1>Edit criterion</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form class="row g-3" method="POST" action="{{ route('criterion.update',['criterion'=>$criterion->idcriterion]) }}">

        @csrf
        @method('put')
        {{-- <div class="form-label">
            <label>idcriteriakpi</label>
            <input readonly type="text" name="idcriteriakpi" placeholder="idcriteriakpi" value="{{ $criterion->idcriteriakpi }}">
        </div> --}}
        <div class="form-label">
            <label>หัวข้อการประเมิน</label>
            @foreach($criteriakpis as $criteriakpi)
    {{-- {{ $criteriakpi->title }} --}}
            <input readonly type="text" name="title" placeholder="title" value="{{ $criteriakpi->title }}">
            @endforeach

            {{-- <input readonly type="text" name="title" placeholder="title" value="{{ $criteriakpis->title }}"> --}}
        </div>
        
        {{-- <div class="form-label">
            <label>Criteria KPI Title</label>
            <input readonly type="text" name="idcriteriakpi" placeholder="idcriteriakpi" value="{{ $criterion->criteriakpi->title }}">
        </div> --}}
        
        
        <div class="form-label">
            <label>max</label>
            <input type="text" name="max" placeholder="max" value="{{ $criterion->max }}">
        </div>
        <div class="form-label">
            <label>min</label>
            <input type="text" name="min" placeholder="min" value="{{ $criterion->min }}">
        </div>
        <div class="form-label">
            <label>score</label>
            <input readonly type="text" name="score" placeholder="score" value="{{ $criterion->score }}">
        </div>
        
        <div class="form-label">
            <label>levelOfQuality</label>
            <input readonly type="text" name="levelOfQuality" placeholder="levelOfQuality" value="{{ $criterion->levelOfQuality }}">
        </div>
       
        <div class="col-12">
            <input type="submit" value="Update">
        </div>
    </form>
</div>
@endsection
