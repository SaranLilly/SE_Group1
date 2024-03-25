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
    

    {{-- <div>
        <a class="btn btn-primary" href="{{ route('criterion.create') }}">New criterion</a>
    </div> --}}
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1" class="table table-striped">
            <tr>
                {{-- <th>ลำดับ</th> --}}
                <th>หัวข้อการประเมิน</th>
                {{-- <th>max</th>
                <th>min</th> --}}
                <th>ช่วงการประเมิน(%)</th>
                <th>score</th>
                <th>levelOfQuality</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($criterions as $criterion)
            
                <tr>
                    {{-- <td>{{ $employee->empID}}</td> --}}
                    <td>{{ $criterion->title}}</td>
                    {{-- <td>{{ $criterion->max}}</td>
                    <td>{{ $criterion->min}}</td> --}}
                    <td>{{ $criterion->max }} - {{ $criterion->min }}</td> <!-- เพิ่มช่วงเกณฑ์ -->
                    <td>{{ $criterion->score}}</td>
                    <td>{{ $criterion->levelOfQuality}}</td>
                   
                    
                    
                    <td>
                        <a class="btn btn-success" href="{{ route('criterion.edit',['criterion' => $criterion->idcriterion]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('criterion.destroy',['criterion'=> $criterion->idcriterion]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
    