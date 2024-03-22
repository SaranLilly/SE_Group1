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
    <h1>Evaluation</h1>
    <button><a  href="/evaluation/create" >เพิ่ม</a></button>
    
    <table class="table" border="1">
        <thead>
          <tr>
            <th>รหัส</th>
            <th>ผู้ประเมิน</th>
            <th>ผู้ถูกประเมิน</th>
            <th>round</th>
            <th>setkpi</th>
            <th>แก้ไข</th>
            <th>ลบ</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($evaluations as $evaluation)
            <tr>
            <td><label name="id">{{ $evaluation->idevaluation }}</label></td>
            <td><label name="idassess ">{{ $evaluation->firstName }}</label></td>
            
            <td><label name="idassessed ">{{ $evaluation->idassessed }}</label></td>

            <td><label name="idround ">{{ $evaluation->date }}</label></td>
            <td><label name="idset ">{{ $evaluation->titleset }}</label></td>

            <td><a href="{{ route('evaluation.edit',['evaluation' => $evaluation->idevaluation]) }}">แก้ไข</a></td>
          <td>
              <form method="POST" action="{{ route('evaluation.delete',['evaluation'=> $evaluation->idevaluation]) }}">
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