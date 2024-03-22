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
    <h1>Result</h1>
    <button><a  href="/result/create" >เพิ่ม</a></button>
    
    <table class="table" border="1">
        
        <thead>
          <tr>
            <th>รหัส</th>
            <th>หัวข้อ</th>
            <th>รหัสการประเมิน</th>
            <th>ค่าน้ำหนัก</th>
            <th>คะแนน</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
            <tr>
            <td><label name="resultsId">{{ $result->resultsId  }}</label></td>
            <td><label name="idcriterakipi">{{ $result->title}}</label></td>
            <td><label name="idevalution">{{ $result->idevalution }}</label></td>
            <td><label name="weight">{{ $result->weight}}</label></td>
            <td><label name="score">{{ $result->score}}</label></td>
            <td><a href="{{ route('result.edit',['result' => $result->resultsId]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('result.delete',['result'=> $result->resultsId]) }}">
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