<?php

session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Home";
  include 'top.php';

  error_reporting(0);
  include "../includes/main.class.php";
  $asfun = new Main();
  
  $rec["id"] = null;
  $rec["pid"] = "";
  $rec["title"] = "";
  $rec["asg"] = "";
  $rec["status"] = "1";
  $rec["sdate"] = "";
  $rec["edate"] = "";
  $rec["uid"] = $_SESSION["id"];
  $ftitle = "Create Task";
  $msg = "";
  
  if(isset($_GET["id"]) && isset($_GET["act"])){
      $id=$_GET["id"];
      $act=$_GET["act"];

      if($act=="edit"){
          $res=$asfun->dbcon->query("select * from task where id='$id'"); 
          $rec =$res->fetch_array();
          $ftitle = "Edit Task";
          
      }elseif($act=="delete"){
                  //for delete code
   }
  }


  if(isset($_POST["title"])){
      $rec= $_POST;
      $title = $rec["title"];
      $pid = $rec["pid"];
      $edate = $rec["edate"];
      $sdate = $rec["sdate"];
      $uid = $rec["uid"];
      $id = $rec["id"];
      $asg = $rec["asg"];
      $status = $rec["status"];
      
      

if($id>0){
  $asfun->dbcon->query("update task set `title`='$title', `sdate`='$sdate', `edate`='$edate', `pid`='$pid', `asg`='$asg', `status`='$status' where id='$id'");
  $msg = "Task has been updated!"; 
}else{
  $asfun->dbcon->query("insert into task(`uid`, `title`, `pid`, `sdate`, `edate`, `asg`, `status`) values('$uid', '$title', '$pid', '$sdate', '$edate', '$asg', '$status')") or die("Error"); 
  $msg = "Task has been created!";
}

}  

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calendar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Calendar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3" style="display:;">
            <div class="sticky-top mb-3">
              <div class="card" style="display:none;">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Task</h3>
                </div>
                <div class="card-body">
                
                  <!-- /btn-group -->
                  <div class="input-group">
                    <div class="input-group-append">
                      <a href="task.php"  class="btn btn-primary">Add New Task</a>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include "bottom.php";
}

?>

  
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });
    console.log(new Date(2022, 2, 6 - 0))
    
    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
    
    
      events: [
        <?php
             $uid = $_SESSION["id"];
             $q = $asfun->dbcon->query("select * from task where uid='$uid'");
             $ar = array('','ToDo', 'Doing', 'Done');
             while($row=mysqli_fetch_assoc($q)){

                $sdate = DateTime::createFromFormat("Y-m-d", $row["sdate"]);
                $edate = DateTime::createFromFormat("Y-m-d",  $row["edate"]);

                if($row["status"]==1){
                  $bgcolor="red";
                }else if($row["status"]==2){
                  $bgcolor="yellow";
                }else{
                  $bgcolor="green";
                }
                
            ?>
        {
          title          : '<?php echo ucwords($row["title"]); ?> - <?php echo ucwords($asfun->getProjectName($row["pid"])); ?> - <?php echo $ar[$row["status"]] ?>',
          start          : new Date(<?php echo $sdate->format("Y")  ?>, <?php echo $sdate->format("m")  ?>, <?php echo $sdate->format("d")  ?>),
          end            : new Date(<?php echo $edate->format("Y")  ?>, <?php echo $edate->format("m")  ?>, <?php echo $edate->format("d")  ?> ),
          borderColor    : '#f39c12', //yellow
          backgroundColor: '<?php echo $bgcolor; ?>',
          allDay         : true,
        },

        <?php } ?>

      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>
