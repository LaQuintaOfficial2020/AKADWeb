@extends('layout.app')
@section('main_content')
    
    <div class="reminder-div">
        <span class="dashboard-title">Dashboard</span>
        <div class="row">   
            
            <div class="colClassroom col-md-6">
                
                <div class="reminder">
                    <span class="reminder-count">
                        13
                    </span>
                    <span class="reminder-text">
                        Undraged Activity
                    </span>
                </div>

                <div class="reminder">
                    <span class="reminder-count">
                        3
                    </span>
                    <span class="reminder-text">
                        Ongoing Exams
                    </span>
                </div>
         
                <div class="classroomTable">
                    <span class="table-title">Classrooms</span>
                    <table class="classroom-table table table-striped">
                        <tbody>
                            <tr>
                                <td>III - Hope</td>
                                <td>24 Students</td>
                            </tr>
                            <tr>
                                <td>II - Peace</td>
                                <td>23 Students</td>
                            </tr>
                            <tr>
                                <td>I - Unity</td>
                                <td>14 Students</td>
                            </tr>
                            <tr>
                                <td>IV - Bede</td>
                                <td>34 Students</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="classroomTable">
                    <span class="table-title">Classrooms</span>
                    <table class="classroom-table table table-striped">
                        <tbody>
                            <tr>
                                <td>III - Hope</td>
                                <td>24 Students</td>
                            </tr>
                            <tr>
                                <td>II - Peace</td>
                                <td>23 Students</td>
                            </tr>
                            <tr>
                                <td>I - Unity</td>
                                <td>14 Students</td>
                            </tr>
                            <tr>
                                <td>IV - Bede</td>
                                <td>34 Students</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="classroomTable">
                    <span class="table-title">Classrooms</span>
                    <table class="classroom-table table table-striped">
                        <tbody>
                            <tr>
                                <td>III - Hope</td>
                                <td>24 Students</td>
                            </tr>
                            <tr>
                                <td>II - Peace</td>
                                <td>23 Students</td>
                            </tr>
                            <tr>
                                <td>I - Unity</td>
                                <td>14 Students</td>
                            </tr>
                            <tr>
                                <td>IV - Bede</td>
                                <td>34 Students</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        
            </div>
            
            <div class="modal fade" id="classroomModal" tabindex="-1" role="dialog" aria-labelledby="classroomModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Classrooms</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="sectionName" class="col-form-label">Section</label>
                                    <input type="text" class="form-control" id="sectionName">
                                </div>
                                <div class="form-group">
                                    <label for="numStudents" class="col-form-label">No. of Students</label>
                                    <input type="text" class="form-control" id="numStudents">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="activityModal" tabindex="-1" role="dialog" aria-labelledby="activityModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Activity</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="activityName" class="col-form-label">Title</label>
                                    <input type="text" class="form-control" id="activityName">
                                </div>
                                <div class="form-group">
                                    <label for="activitySection" class="col-form-label">Section</label>
                                    <input type="text" class="form-control" id="activitySection">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="colActivities col-md-6">
             
                <div class="reminder">
                    <span class="reminder-count">
                        2
                    </span>
                    <span class="reminder-text">
                        Ongoing Exams
                    </span>
                </div>

                <div class="reminder">
                    <span class="reminder-count">
                        5
                    </span>
                    <span class="reminder-text">
                        Ongoing Exams
                    </span>
                </div>

                <div class="activityTable">
                    <span class="table-title">Activities</span>

                    <table class="activity-table table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Classroom</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Exam 13</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 2</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 4</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 7</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Activity 247</td>
                                <td>III-Fortidue</td>
                            </tr>

                        </tbody>
                    </table> 
                </div>
                
                <div class="activityTable">
                    <span class="table-title">Activities</span>

                    <table class="activity-table table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Classroom</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Exam 13</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 2</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 4</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 7</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Activity 247</td>
                                <td>III-Fortidue</td>
                            </tr>

                        </tbody>
                    </table> 
                </div>
                
                <div class="activityTable">
                    <span class="table-title">Activities</span>

                    <table class="activity-table table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Classroom</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Exam 13</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 2</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 4</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Topic 7</td>
                                <td>III-Fortidue</td>
                            </tr>
                             <tr>
                                <td>Activity 247</td>
                                <td>III-Fortidue</td>
                            </tr>

                        </tbody>
                    </table> 
                </div>
     
                
            </div>
        </div>
    </div>
    
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col-12">
    <div class="row justify-content-left mt-2">
      <div class="col-10">
        <div class="card">
          <div class="card-body">
            <span style="background-color: red; height: 100px; width: 100px;"></span>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
