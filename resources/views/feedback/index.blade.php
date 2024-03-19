<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>feedback</h1>
    
    {{-- <div>
        <a href="{{ route('feedback.create') }}">New feedback</a>
    </div> --}}
    
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
                <th>เลขออเดอร์</th>
                <th>หัวข้อการประเมิน</th>
                <th>คะแนน</th>
                <th>ผู้ดูแลออเดอร์</th>
                <th>ชื่อพนักงาน</th>
                <th>นามสกุลพนักงาน</th>
                <th>ทีม</th>
                {{-- <th>edit</th>
                <th>delete</th> --}}
            </tr>
            @foreach ($feedbacks as $feedback)
    <tr>
        <td>{{ $feedback->orderId }}</td>
        <td>{{ $feedback->title }}</td>
        <td>{{ $feedback->score }}</td>
        <td>{{ $feedback->userName }}</td>
        <td>{{ $feedback->firstName }}</td>
        <td>{{ $feedback->lastName }}</td>
        <td>{{ $feedback->teamName }}</td>
        {{-- <td>
            <a href="{{ route('feedback.edit', ['feedback' => $feedback->feedbackId]) }}">Edit</a>
        </td>
        <td>
            <form method="POST" action="{{ route('feedback.destroy', ['feedback' => $feedback->feedbackId]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td> --}}
    </tr>
@endforeach

        </table>
    </div>
</body>
</html>
    