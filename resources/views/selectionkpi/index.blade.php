<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Selectionkpi</h1>
    <button><a  href="/selectionkpi/create" >เพิ่ม</a></button>
    
    <table class="table" border="1">
        
        <thead>
          <tr>
            {{-- <th>รหัส</th> --}}
            <th>set</th>
            <th>kpi</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($selectionkpis as $selectionkpi)
            <tr>
            {{-- <td><label name="id">{{ $selectionkpi->idselection }}</label></td> --}}
            <td><label name="set">{{ $selectionkpi->titleset}}</label></td>
            <td><label name="kpi">{{ $selectionkpi->title}}</label></td>
            <td><a href="{{ route('selectionkpi.edit',['selectionkpi' => $selectionkpi->idselection]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('selectionkpi.delete',['selectionkpi'=> $selectionkpi->idselection]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="ลบ">
              </form>
          </td>
          </tr>
            @endforeach            
        </tbody>
      </table>
</body>
</html>