@extends('layout')
@section('title','หน้าเกณฑ์การประเมิน')
@section('content')
    <h1>เกณฑ์การประเมิน</h1>

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
                <th>max</th>
                <th>min</th>
                <th>score</th>
                <th>levelOfQuality</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($criterions as $criterion)
            
                <tr>
                    {{-- <td>{{ $employee->empID}}</td> --}}
                    <td>{{ $criterion->title}}</td>
                    <td>{{ $criterion->max}}</td>
                    <td>{{ $criterion->min}}</td>
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
@endsection
    