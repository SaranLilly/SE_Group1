<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit feedback</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('feedback.update',['feedback'=>$feedback->feedbackId]) }}">

        @csrf
        @method('put')
        {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix" value="{{ $employee->prefix }}">
        </div> --}}
        
        <div>
            <label>feedbacktitleId</label>
            <input type="text" name="feedbacktitleId" placeholder="feedbacktitleId" value="{{ $feedback->feedbacktitleId }}">
        </div>
        <div>
            <label>orderId</label>
            <input type="text" name="feedback" placeholder="feedback" value="{{ $feedback->orderId }}">
        </div>
        <div>
            <label>score</label>
            <input type="text" name="score" placeholder="score" value="{{ $feedback->score }}">
        </div>
        
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
