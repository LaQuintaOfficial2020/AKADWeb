@extends('layout.app')
@section('main_content')
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-left mt-2">
      <div class="col-10">
        <h4>List of Classrooms</h4>
        <table class="table table-bordered">
          <tr>
            <th>Names</th>
            <th>Number of Members</th>
            <th>Action</th>
          </tr>
          @for($i=1; $i<=5;$i++)
          <tr>
            <td>Exam {{$i}}</td>
            <td>Quiz</td>
            <td><button class="btn btn-primary mr-1" type="button">View</button><button class="btn btn-primary mr-1" type="button">Delete</button></td>
          </tr>
          @endfor
        </table>

        <h4>Pending Student Requests</h4>
        <table class="table table-bordered">
          <tr>
            <th>Names</th>
            <th>Student Number</th>
            <th>Action</th>
          </tr>
          @for($i=1; $i<5;$i++)
          <tr>
            <td>Exam {{$i}}</td>
            <td>Quiz</td>
            <td><button class="btn btn-success mr-1" type="button">Add</button><button class="btn btn-danger mr-1" type="button">Reject</button></td>
          </tr>
          @endfor
        </table>
      </div>
    </div>
  </main>
@endsection
