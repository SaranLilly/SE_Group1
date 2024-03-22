<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>AAAAAAA</title>
</head>
<body>
    <h1>Setkpi</h1>
    <button><a  href="/setkpi/create" >เพิ่ม</a></button>
    
    <table class="table" border="1">
        
        <thead>
          <tr>
            <th>รหัส</th>
            <th>title</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($setkpis as $setkpi)
            <tr>
            <td><label name="id">{{ $setkpi->idset}}</label></td>
            <td><label name="title">{{ $setkpi->titleset}}</label></td>
            <td><a href="{{ route('setkpi.edit',['setkpi' => $setkpi->idset]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('setkpi.delete',['setkpi'=> $setkpi->idset]) }}">
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