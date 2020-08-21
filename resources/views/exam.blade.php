@extends('layout.app')
{{-- @include('avatar') --}}
@section('main_content')
@php $user = 1 @endphp
  {{-- add role checker whether user is student or teacher --}}

  <main class="col take-exam">
    <div class="row justify-content-center mt-2" style="margin-top: 30px;">
      <div class="col-7">
        <div class="exam-body" style="height:800px; !important; ">
          @for($i = 1; $i <= 10; $i++)
        <div class="card mt-3">
          <div class="card-body">
            <p class="mb-1" style="font-size: 15px; margin:0;">{{$i}}. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptatem reiciendis in repellendus minus voluptatibus, enim velit quibusdam dignissimos maxime maiores facilis, eius sapiente ex culpa id est odio nam?</p>
            </p>
            <div class="row justify-content-center">
              <div class="form-check" style="display: inline-block;">
                <input class="form-check-input" type="radio" name="" id="1" value="option1" checked>
                <label class="form-check-label" for="1">
                  A. Default radio
                </label>
              </div>
              <div class="form-check ml-3" style="display: inline-block;">
                <input class="form-check-input" type="radio" name="" id="0" value="option1">
                <label class="form-check-label" for="1">
                  A. Default radio
                </label>
              </div>
              <div class="form-check ml-3" style="display: inline-block;">
                <input class="form-check-input" type="radio" name="" id="0" value="option1">
                <label class="form-check-label" for="1">
                  A. Default radio
                </label>
              </div>
              <div class="form-check ml-3" style="display: inline-block;">
                <input class="form-check-input" type="radio" name="" id="" value="option1">
                <label class="form-check-label" for="1">
                  A. Default radio
                </label>
              </div>
            </div>
          </div>
        </div>
        @endfor
        </div>
      </div>
      <div class="col-3 mt-3">
        <div class="card">
          <div class="card-body">
            <h4>10:00</h4>
            <p style="font-size: 15px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas recusandae consectetur natus voluptates cupiditate temporibus et perferendis soluta aliquid itaque, in ipsum quibusdam qui corrupti consequuntur numquam, alias harum! Sed.</p>
          </div>
        </div>
        @if($user === 1)
          <button class="btn btn-danger col" type="button" data-toggle="modal" data-target="#confirmSubmitExam">Submit</button>
        
        @else
          <div class="card mt-2">
            <div class="card-body" style="padding-bottom: 0;">
              <table class="table">
                <tr>
                  <td>Score</td>
                  <td>10/10</td>
                </tr>
                <tr>
                  <td>Date Completed</td>
                  <td>Aug 11 2020 1:00:00 AM</td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>Status</td>
                </tr>
              </table>
            </div>
          </div>
        
        @endif
       
      </div>
    </div>
  </main>
  
  {{-- modal --}}
  <div class="modal" id="confirmSubmitExam" tabindex="-1" role="dialog" style="top: 120px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4 class="text-center">Are you sure you want to submit this exam?</h4>
        <p class="text-center">There is still time to review your answers</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Yes, I am sure</button>
      </div>
    </div>
  </div>
</div>
@endsection
