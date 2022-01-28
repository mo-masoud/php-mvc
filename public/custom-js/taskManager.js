function printTask(id,title,desc,type,quest,date,time,state){
  if(state == 1){
    state = "Ongoing";
  }
  else if(state == 2){
    state = "Done";
  }
  desc = desc.replace(/(?:\r\n|\r|\n)/g, '<br>');
  

    var printable = `
    <div class="card mb-1">
              <div class="card-header border-bottom border-dark" id="heading`+id+`" data-toggle="collapse" data-target="#collapse`+id+`" aria-expanded="false" aria-controls="collapse`+id+`">
                <h5 class="mb-0">
                `+title+`
                </h5>
                <div>Deadline: `+date+` `+time+`</div>
                  </div>
                  <div id="collapse`+id+`" class="collapse" aria-labelledby="heading`+id+`" data-parent="#accordion">
                    <div class="card-body">
                    `+desc+`

                    </div>
                  </div>
                  <div class="card-footer bg-white p-0"><button class="btn btn-sm btn-warning btnChangeState" value="`+id+`">`+state+`</button></div>
                </div>
    `;

    $('#main4 #accordion').append(printable);
}

function viewTasks(inputQuest,inputType,inputState){
    //alert(path);
    $.ajax({
        url: 'controllers/taskController.php',
        data: {function2call: 'viewTasks', quest:inputQuest , type:inputType , state:inputState},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            //alert(data);
            //$('#main4').text(data);

            /*
            $xmlString = $xmlString . "<taskID>".$taskID."</taskID>";
        $xmlString = $xmlString . "<taskTitle>".$taskTitle."</taskTitle>";
        $xmlString = $xmlString . "<taskDesc>".$taskDesc."</taskDesc>";
        $xmlString = $xmlString . "<taskType>".$taskType."</taskType>";
        $xmlString = $xmlString . "<questID>".$questID."</questID>";
        $xmlString = $xmlString . "<deadlineDate>".$deadlineDate."</deadlineDate>";
        $xmlString = $xmlString . "<deadlineTime>".$deadlineTime."</deadlineTime>";
        $xmlString = $xmlString . "<taskState>".$taskState."</taskState>";
            */
           
           xmlDoc = $.parseXML( data );

           //alert(xmlDoc);

            $(xmlDoc).find('task').each(function(){
               var result = $(this).find("taskID").map(function(){return $(this).text()}).get();
               var result2 = $(this).find("taskTitle").map(function(){return $(this).text()}).get();
               var result3 = $(this).find("taskDesc").map(function(){return $(this).text()}).get();
               var result4 = $(this).find("taskType").map(function(){return $(this).text()}).get();
               var result5 = $(this).find("questID").map(function(){return $(this).text()}).get();
               var result6 = $(this).find("deadlineDate").map(function(){return $(this).text()}).get();
               var result7 = $(this).find("deadlineTime").map(function(){return $(this).text()}).get();
               var result8 = $(this).find("taskState").map(function(){return $(this).text()}).get();
               for (var i = 0; i<result.length; i++){
                 //alert(result[i]+result2[i]+result3[i]);
                 //printTask(id,title,date,time,desc,state)
                printTask(result[i],result2[i],result3[i],result4[i],result5[i],result6[i],result7[i],result8[i]);
               }
               
            });

            },
            error: function(response){
                //alert(response);
                //xmlDoc = $.parseXML( response );

           //alert(xmlDoc);
            }
            });
}

function addTask(inputTitle,inputDesc,inputType,inputQuest,inputDeadDate,inputDeadTime){
  //alert(path);
  $.ajax({
      url: 'controllers/taskController.php',
      data: {function2call: 'addTask', title:inputTitle,desc:inputDesc,type:inputType,quest:inputQuest,deadDate:inputDeadDate,deadTime:inputDeadTime},
      type: 'post',
      dataType: "text",
      success: function (data) {
          // action to be done
          alert("Item added successfully");

          },
          error: function(response){
              alert(response);
          }
          });
}

function changeState(inputID){
  //alert(path);
  $.ajax({
      url: 'controllers/taskController.php',
      data: {function2call: 'changeState', taskID:inputID},
      type: 'post',
      dataType: "text",
      success: function (data) {
          // action to be done
          //alert("State changed successfully");

          },
          error: function(response){
              alert(response);
          }
          });
}

$('body').on('click', '#btnAddItem', function() {
  //alert($('#txtTitle').val()+$('#txtDesc').val()+$('#txtType').val()+$('#txtQuest').val()+$('#txtDeadDate').val()+$('#txtDeadTime').val());
  addTask($('#txtTitle').val(),$('#txtDesc').val(),$('#txtType').val(),$('#txtQuest').val(),$('#txtDeadDate').val(),$('#txtDeadTime').val());
  
});

$('body').on('click', '#btnDisplay', function() {
  $("#main4 #accordion").text("");
  viewTasks($('#txtFilterQuest').val(),$('#txtFilterType').val(),$('#txtFilterState').val());
  
});

$('body').on('click', '.btnChangeState', function() {
  changeState($(this).val());
  if($(this).text() == "Ongoing"){
  $(this).text('Done');
  }
  else if($(this).text() == "Done"){
    $(this).text('Ongoing');
    }
});