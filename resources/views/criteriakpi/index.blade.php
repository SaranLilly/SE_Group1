<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>criteriakpi</h1>

    <div>
        <a href="{{ route('criteriakpi.create') }}">New Criteriakpi</a>
    </div>
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                {{-- <th>ลำดับ</th> --}}
                <th>ชื่อหัวข้อการประเมิน</th>
                
            </tr>
            @foreach ($criteriakpis as $criteriakpi)
            
                <tr>
                    {{-- <td>{{ $saleteam->saleTeamID}}</td> --}}
                    <td>{{ $criteriakpi->title}}</td>
                    
                    <td>
                        <a href="{{ route('criteriakpi.edit',['criteriakpi' => $criteriakpi->crID]) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('criteriakpi.destroy',['criteriakpi'=> $criteriakpi->crID]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
    