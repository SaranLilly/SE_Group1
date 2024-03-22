<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create criterion</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('criterion.listofname') }}">
        @csrf
        @method('post')
        <div class="form-label">
            <label>idcriteriakpi</label>
            <input type="text" name="idcriteriakpi" placeholder="idcriteriakpi" value="{{ $criterion->idcriteriakpi }}">
        </div>
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
            <input type="text" name="score" placeholder="score" value="{{ $criterion->score }}">
        </div>
        
        <div class="form-label">
            <label>levelOfQuality</label>
            <input type="text" name="levelOfQuality" placeholder="levelOfQuality" value="{{ $criterion->levelOfQuality }}">
        </div>
        {{-- <div>
            <label>Position </label>
            <input type="text" name="positionName" placeholder="positionName">
        </div> --}}
        
        {{-- <div>
            <label>SaleTeam </label>
            <input type="text" name="teamName" placeholder="teamName">
        </div> --}}
        <div>
            <input type="submit" value="Save New Employee">
        </div>
    </form>
</body>
</html>