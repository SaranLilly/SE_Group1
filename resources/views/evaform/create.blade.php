@extends('layout')
@section('title', 'การประเมิน')
@section('content')

    <style>
        .edit {
            margin: auto;
            /* จัดให้อยู่ตรงกลาง */
            width: 50%;
            /* ปรับขนาดให้กว้าง 50% */
            padding: 20px;
            /* เพิ่มช่องว่างรอบขอบ */
            border-radius: 10px;
            /* เพิ่มความโค้งให้กับขอบ */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            /* เพิ่มเงา */
        }

        form {
            margin-top: 20px;
            /* เพิ่มระยะห่างด้านบนของแบบฟอร์ม */
        }

        .form-label {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            /* เพิ่มระยะห่างระหว่างข้อมูลในแบบฟอร์ม */
            border-radius: 8px;
        }

        input[type="submit"] {
            width: 100%;
            /* ทำให้ปุ่มเต็มความกว้าง */
            padding: 10px;
            /* เพิ่มช่องว่างในปุ่ม */
            border: none;
            background-color: #1d8551;
            /*เปลี่ยนสีพื้นหลังของปุ่ม  */
            color: white;
            /* เปลี่ยนสีข้อความในปุ่มเป็นขาว */
            border-radius: 5px;
            /* เพิ่มความโค้งให้กับขอบของปุ่ม */
            cursor: pointer;
            transition: background-color 0.3s;
            /* เพิ่มเอฟเฟคการเปลี่ยนสีเมื่อ hover บนปุ่ม */
        }

        input[type="submit"]:hover {
            background-color: #2bc678;
            /* เปลี่ยนสีพื้นหลังของปุ่มเมื่อ hover */
        }
    </style>

    <div class="edit">
        <h1 style="font-weight: 800">เพิ่ม</h1>
        <form method="post" action="{{ route('evaluation.store') }}">
            @csrf
            @method('post')
            <div>
              
                <label>ผู้ประเมิน </label>
                <select name="idassess">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                    @endforeach
                </select>
                <label>ผู้ถูกประเมิน </label>
                <select name="idassessed">
                    @foreach ($employees2 as $employee)
                        <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                    @endforeach
                </select>
                <label>รอบการประเมิน </label>
                <select name="idround">
                    @foreach ($rounds as $round)
                        <option value="{{ $round->idround }}">{{ $round->date }}</option>
                    @endforeach
                </select>
                <br>
                <label>เลือกชุดการประเมิน</label>
                <select name="idset">
                    @foreach ($setkpis as $setkpi)
                        <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                    @endforeach
                </select>
               
                {{-- <button type="submit" >Submit</button> --}}
            </div>

            {{-- <div class="mx-0 mx-sm-auto">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
                <p>
                  <strong>Your opinion matters</strong>
                </p>
                <p>
                  Have some ideas how to improve our product?
                  <strong>Give us your feedback.</strong>
                </p>
              </div>
        
              <hr />
        
              <form class="px-4" action="">
                <p class="text-center"><strong>Your rating:</strong></p>
        
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example1" />
                  <label class="form-check-label" for="radio2Example1">
                      Excellent
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example2" />
                  <label class="form-check-label" for="radio2Example2">
                    Good
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example3" />
                  <label class="form-check-label" for="radio2Example3">
                      Neutral
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example4" />
                  <label class="form-check-label" for="radio2Example4">
                      Fair
                  </label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="exampleForm" id="radio2Example5" />
                  <label class="form-check-label" for="radio2Example5">
                      Improve
                  </label>
                </div>
        
              </form>
            </div>
            <div class="card-footer text-end">
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div> --}}
            <div><br>
                <input type="submit" value="บันทึก">
                
            </div>
            <div>
              <input type="submit" value="ประเมิน">
            </div>
            <div>
                {{-- ดึงหัวข้อการปะเมิน --}}
                {{-- <table class="table" border="1"> --}}

                {{-- <thead>
            <tr> --}}
                {{-- <th>รหัส</th> --}}
                {{-- <th>set</th>
              <th>kpi</th> --}}
                {{-- <th>แก้ไข</th>
              <th>ลบ</th> --}}

                {{-- </tr>
          </thead>
          <tbody> --}}
                {{-- @foreach ($selectionkpis as $selectionkpi)
              <tr> --}}
                {{-- <td><label name="id">{{ $selectionkpi->idselection }}</label></td> --}}
                {{-- <td><label name="set">{{ $selectionkpi->titleset}}</label></td>
              <td><label name="kpi">{{ $selectionkpi->title}}</label></td> --}}
                {{-- <td><a href="{{ route('selectionkpi.edit',['selectionkpi' => $selectionkpi->idselection]) }}">แก้ไข</a></td> --}}
                {{-- <td>
                <form method="POST" action="{{ route('selectionkpi.delete',['selectionkpi'=> $selectionkpi->idselection]) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="ลบ">
                </form>
            </td> --}}
                {{-- </tr>
              @endforeach            
          </tbody>
        </table> --}}
       
            </div>
        </form>


    </div>

@endsection
