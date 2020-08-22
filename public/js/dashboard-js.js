$(document).ready(function() {
    
    
let addClassroomFunc = ()=>{
  
    var addClassroomRow = "<tr><td colspan='2' data-toggle='modal' data-target='#classroomModal'><span class='addClassroomRow'><span class='iconAdd'>+</span> Add Classroom </span></td></tr>"; 
    var addActivityRow = "<tr><td colspan='2' data-toggle='modal' data-target='#activityModal'><span class='addActivityRow'><span class='iconAdd'>+</span> Add Classroom </span></td></tr>"; 
    

    if($("table").hasClass("classroom-table")) {
        $('.classroom-table tr:last-of-type').after(addClassroomRow);
    }
    
    if($("table").hasClass("activity-table")) {
        $('.activity-table tbody tr:last-of-type').after(addActivityRow);
    }
    
}  

addClassroomFunc();

});