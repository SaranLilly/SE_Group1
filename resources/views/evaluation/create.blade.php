<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <form method="post" action="{{route('evaluation.store')}}">
        @csrf
        @method('post')
        <div>
            <label>ผู้ประเมิน </label>
            <select name="idassess">
                @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }}</option>
                @endforeach
            </select>
            <label>ผู้ถูกประเมิน </label>
            <select name="idassessed">
                @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }}</option>
                @endforeach
            </select>
            <label>round </label>
            <select name="idround">
                @foreach($rounds as $round)
                    <option value="{{ $round->idround }}">{{ $round->date }}</option>
                @endforeach
            </select>
            <label>set </label>
            <select name="idset">
                @foreach($setkpis as $setkpi)
                    <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                @endforeach
            </select>
            
            <h2>ประเมินพนักงาน</h2>
            <h3>เกณฑ์การประเมินประกอบการประเมินพนักงาน</h3>
            <div>
                <table border="1" class="table table-striped">
                    <tr>
                        {{-- <th>ลำดับ</th> --}}
                        <th>หัวข้อการประเมิน</th>
                        {{-- <th>max</th>
                        <th>min</th> --}}
                        <th>ช่วงการประเมิน(%)</th>
                        <th>น้ำหนัก</th>
                        <th>levelOfQuality</th>
                        
                    </tr>
                    @foreach ($criterions as $criterion)
                    
                        <tr>
                            {{-- <td>{{ $employee->empID}}</td> --}}
                            <td>{{ $criterion->title}}</td>
                            {{-- <td>{{ $criterion->max}}</td>
                            <td>{{ $criterion->min}}</td> --}}
                            <td>{{ $criterion->min }} - {{ $criterion->max }}</td> <!-- เพิ่มช่วงเกณฑ์ -->
                            <td>{{ $criterion->score}}</td>
                            <td>{{ $criterion->levelOfQuality}}</td>
                           
                            
                            
                            
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
        <div>
            <input type="submit" value="save">
        </div>
    </form>
</body>
</html>