<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create</h1>
    <form method="post" action="{{route('evaluation.store')}}">
        @csrf
        @method('post')
        <div>
            <label>ผู้ประเมิน </label>
            <select name="idassess">
                @foreach($employees as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach
            </select>
            <label>ผู้ถูกประเมิน </label>
            <select name="idassessed">
                @foreach($employees2 as $employee)
                    <option value="{{ $employee->empID }}">{{ $employee->firstName }} {{ $employee->lastName }}</option>
                @endforeach
            </select>
            <label>round </label>
            <select name="idround">
                @foreach($rounds as $round)
                    <option value="{{ $round->idround }}">{{ $round->date }}</option>
               
                    @endforeach
            </select>
        
            {{-- <label>selectionkpi </label>
            <select name="idselection">
              @foreach ($selectionkpis as $selectionkpi)
                
                    <option value="{{ $selectionkpi->idselection }}">{{ $selectionkpi->title }}</option>
                @endforeach
            </select> --}}



            {{-- <label>set </label>
            <select name="idset">
                @foreach($setkpis as $setkpi)
                    <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                @endforeach
            </select> --}}

            <br>
            <label>เลือกชุดการประเมิน</label>
            <form action="{{ route('process_selection') }}" method="POST">
                @csrf
                <select name="dropdown">
                    @foreach($setkpis as $setkpi)
                        <option value="{{ $setkpi->idset }}">{{ $setkpi->titleset }}</option>
                    @endforeach
                </select>
                <button type="submit" >Submit</button>
            </form>
            



            <h2>ประเมินพนักงาน</h2>
            <h3>เกณฑ์การประเมินประกอบการประเมินพนักงาน</h3>
            <div>
                <table border="1" class="table table-striped">
                    <tr>
                        {{-- <th>ลำดับ</th> --}}
                        <th>หัวข้อการประเมิน</th>
                        {{-- <th>max</th>
                        <th>min</th> --}}
                        <th>ช่วงการประเมิน(%)</th>
                        <th>น้ำหนัก</th>
                        <th>levelOfQuality</th>
                        
                    </tr>
                    @foreach ($criterions as $criterion)
                    
                        <tr>
                            {{-- <td>{{ $employee->empID}}</td> --}}
                            <td>{{ $criterion->title}}</td>
                            {{-- <td>{{ $criterion->max}}</td>
                            <td>{{ $criterion->min}}</td> --}}
                            <td>{{ $criterion->min }} - {{ $criterion->max }}</td> <!-- เพิ่มช่วงเกณฑ์ -->
                            <td>{{ $criterion->score}}</td>
                            <td>{{ $criterion->levelOfQuality}}</td>
                           
                            
                            
                            
                        </tr>
                    @endforeach
                </table>
            </div>

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
        <div>
            <input type="submit" value="save">
        </div>
        <div>
          ดึงหัวข้อการปะเมิน
          <table class="table" border="1">
        
            <thead>
              <tr>
                {{-- <th>รหัส</th> --}}
                <th>set</th>
                <th>kpi</th>
                {{-- <th>แก้ไข</th>
                <th>ลบ</th> --}}
    
              </tr>
            </thead>
            <tbody>
                @foreach ($selectionkpis as $selectionkpi)
                <tr>
                {{-- <td><label name="id">{{ $selectionkpi->idselection }}</label></td> --}}
                <td><label name="set">{{ $selectionkpi->titleset}}</label></td>
                <td><label name="kpi">{{ $selectionkpi->title}}</label></td>
                {{-- <td><a href="{{ route('selectionkpi.edit',['selectionkpi' => $selectionkpi->idselection]) }}">แก้ไข</a></td> --}}
              {{-- <td>
                  <form method="POST" action="{{ route('selectionkpi.delete',['selectionkpi'=> $selectionkpi->idselection]) }}">
                      @csrf
                      @method('delete')
                      <input type="submit" value="ลบ">
                  </form>
              </td> --}}
              </tr>
                @endforeach            
            </tbody>
          </table>
        </div>
    </form>
</body>
</html>