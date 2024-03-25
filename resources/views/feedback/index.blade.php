@extends('layout')
@section('content')
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
        <table border="1" class="table table-striped table-align-middle">
            <tr>
                <th>เลขออเดอร์</th>
                <th>หัวข้อการประเมิน</th>
                <th>คะแนน</th>
                <th>ผู้ดูแลออเดอร์</th>
                <th>ชื่อพนักงาน</th>
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
        <td>{{ $feedback->firstName }} {{ $feedback->lastName }}</td>
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
@endsection