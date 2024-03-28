<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
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
    <form class="row g-3" method="POST" action="{{ route('updatecriterionHR',['criterion'=>$criterion->idcriterion]) }}">

        @csrf
        @method('put')
        {{-- <div class="form-label">
            <label>idcriteriakpi</label>
            <input readonly type="text" name="idcriteriakpi" placeholder="idcriteriakpi" value="{{ $criterion->idcriteriakpi }}">
        </div> --}}
        <div class="form-label">
            <label>หัวข้อการประเมิน</label>
            <input readonly type="text" name="title" placeholder="title" value="{{ $criterion->idcriteriakpi }}">
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
</body>
</html>
