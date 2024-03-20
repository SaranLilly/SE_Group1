<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create feedback</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>

        @endif
    </div>
    <form method="POST" action="{{ route('feedback.listofname') }}">
        @csrf
        @method('post')
        {{-- <div>
            <label>Prefix</label>
            <input type="text" name="prefix" placeholder="prefix">
        </div> --}}
        {{-- <div>
            <label for="feedbacktitleId">หัวข้อการประเมิน</label>
            <select name="feedbacktitleId" id="feedbacktitleId">
                <option value="นาย">คุณภาพของสินค้า</option>
                <option value="นาง">การปฏิบัติตนและมารยาท</option>
                <option value="นางสาว">ความเป็นมืออาชีพ</option>
                <option value="นาง">ความกระตือรือร้นในการบริการ</option>
                <option value="นางสาว">ความสามารถในการให้คำแนะนำ</option>
            </select>
        </div> --}}
        
        <div>
            <label>title</label>
            <input type="text" name="title" placeholder="title">
        </div>
        <div>
            <label>orderId</label>
            <input type="text" name="orderId" placeholder="orderId">
        </div>
        <div>
            <label>score</label>
            <input type="text" name="score" placeholder="score">
        </div>
        {{-- <div>
            <label>ผู้ดูแลออเดอร์</label>
            <input type="text" name="empID" placeholder="empID">
        </div> --}}
        
        {{-- <div>
            <label>นามสกุลพนักงาน</label>
            <input type="text" name="score" placeholder="score">
        </div> --}}
        {{-- <div>
            <label>ทีม</label>
            <input type="text" name="score" placeholder="score">
        </div>
         --}}
        <div>
            <input type="submit" value="Save New feedback">
        </div>
    </form>
</body>
</html>