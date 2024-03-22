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
    <h1>Round</h1>
    <button><a  href="/round/create" >add</a></button>
    
    <table class="table" border="1">
        
        <thead>
          <tr>
            <th scope="roundID ">รหัส</th>
            <th scope="date">date</th>
            <th >แก้ไข</th>
            <th >ลบ</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($rounds as $round)
            <tr>
            <td><label name="id">{{ $round->idround }}</label></td>
            <td><label name="date">{{ $round->date}}</label></td>
            <td><a href="{{ route('round.edit',['round' => $round->idround]) }}">แก้ไข</a></td>
            <td>
              <form method="POST" action="{{ route('round.delete',['round'=> $round->idround]) }}">
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