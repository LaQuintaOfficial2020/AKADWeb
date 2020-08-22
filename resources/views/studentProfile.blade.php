@extends('layout.app')
@section('main_content')
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-left mt-2">
      <div class="col-7">        
        <div class="form-row">
            <div class="form-group col-4" >
              <label for="fName">First Name</label>
              <input type="text" class="form-control input-sm" id="fName" value="{{$student[0]->fname}}" readonly>
            </div>
            <div class="form-group col-4">
              <label for="lName">Last Name</label>
              <input type="text" class="form-control input-sm" id="lName" value="{{$student[0]->lname}}" readonly>
            </div>
            <!-- <div class="form-group col-4">
              <label for="first-name">Nickname</label>
              <input type="text" class="form-control input-sm" id="first-name">
            </div> -->
        </div>
        <div class="form-row">
            <div class="form-group col-6" >
              <label for="studId">Student Number</label>
              <input type="text" class="form-control input-sm" id="studId" value="{{$student[0]->studId}}" readonly>
            </div>
            <div class="form-group col-6">
              <label for="bday">Birthdate</label>
              <input type="text" class="form-control input-sm" id="bday" value="{{$student[0]->bDay}}" readonly>
            </div>
        </div>
      </div>
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <h4 class="text-center">{{$student[0]->overAllPoints}}</h4>
            <h5 class="text-center">Total Rewards Earned</h5>
          </div>
        </div>
      </div>
      
    </div>
    <div class="row" style="height: auto !important;">
      <div class="col">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" id="overall-activities-tab" data-toggle="tab" href="#overall-activities" role="tab" aria-controls="overall-activities" aria-selected="true">Overall Activities</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" id="semestral-grade-tab" data-toggle="tab" href="#semestral-grade" role="tab" aria-controls="semestral-grade" aria-selected="true">Semestral Grade</a>
          </li> -->
        </ul>
        <div class="tab-content p-2">
          <div class="tab-pane fade show active" id="overall-activities" role="tabpanel" aria-labelledby="overall-activities-tab">
            <div class="form-row">
                <div class="form-group col-3">
                <label for="first-name">Semester</label>
                  <input type="text" class="form-control input-sm" id="first-name" value="{{$classDetail[0]->semester}}" readonly>
                </div>
                <!-- <div class="form-group col-3">
                  <label for="category">Category</label>
                  <select class="form-control input-sm" id="category">
                    <option selected>Category</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div> -->
            </div>
            <div class="form-row">
              <div class="form-group col-3">
                <label for="date-from">Date From</label>
                <input type="date" class="form-control input-sm" id="date-from" value="{{date('d-m-Y',strtotime($classDetail[0]->dateFrom))}}">
              </div>
              <div class="form-group col-3">
                <label for="date-from">Date From</label>
                <input type="date" class="form-control input-sm" id="date-from" value="{{$classDetail[0]->dateTo}}">
              </div>
            </div>
            <div class="table-activities" style="height: 600px !important;">
              <table class="table table-bordered">
                <tr>
                  <th>Names</th>
                  <th>Category</th>
                  <th>Items</th>
                  <th>Grade</th>
                  <th>Date Taken</th>
                  <th>Action</th>
                </tr>
                @foreach($activities as $x)
                <tr>
                  <td>Exam </td>
                  <td>{{$x->quizType}}</td>
                  <td>10</td>
                  <td>{{$x->totalPoints}}</td>
                  <td>{{$x->dateTaken}}</td>
                  <td>
                    @if($x->dateTaken != '')
                    <!-- <button class="btn btn-primary mr-1" type="button">Show</button> -->
                    @else
                      @if($x->quizType=='Quiz')
                        <a class="btn btn-primary mr-1" type="button" href="{{url('/exam/'.$x->quizId.'/take')}}">Take Quiz</a></td>
                      @else
                        <a class="btn btn-primary mr-1" type="button" href="{{url('/seatwork/'.$x->seatWorkId.'/take')}}">Take Seatwork</a></td>
                      @endif
                    @endif
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <!-- <div class="tab-pane fade" id="semestral-grade" role="tabpanel" aria-labelledby="semestral-grade-tab">
            <table class="table table-bordered">
              <tr>
                <th>Names</th>
                <th>Catgeory</th>
                <th>Items</th>
                <th>Grade</th>
                <th>Date Taken</th>
                <th>Action</th>
              </tr>
              @for($i=1; $i<=10;$i++)
              <tr>
                <td>Exam {{$i}}</td>
                <td>Quiz</td>
                <td>10</td>
                <td>A</td>
                <td>Aug 11 2020 1:00:23</td>
                <td><button class="btn btn-primary mr-1" type="button">Show</button><button class="btn btn-primary mr-1" type="button">View</button></td>
              </tr>
              @endfor
            </table>
          </div> -->
        </div>

      </div>
    </div>
  </main>
@endsection
