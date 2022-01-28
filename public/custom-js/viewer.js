

function printStory(title,desc){
  var printable = `
  <div class="col-md-3 pb-2">
                  <div class="card w-100" style="width: 18rem; border-left: 6px solid black;">
                          <img src="images/storycover.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">`+title+`</h5>
                            <p class="card-text">`+desc+`</p>
                            <button class="btn btn-sm btn-warning float-right btnResume"> 
                            <input type="hidden" value="`+title+`" class="dataTitle">
                            <input type="hidden" value="`+desc+`" class="dataDesc">
                            Resume Story
                            </button>
                          </div>
                  </div>
  </div>
  `;
  
  $("#main1").append(printable);

  
}



function viewStories(){
  $.ajax({
      url: 'storyOperate',
      data: {function2call: 'viewStories'},
      type: 'post',
      dataType: "xml",
      success: function (data) {
          // action to be done
          //alert(data);

          $("#main1").text("");
          $(data).find('file').each(function(){
             var result = $(this).find("title").map(function(){return $(this).text()}).get();
             var result2 = $(this).find("description").map(function(){return $(this).text()}).get();
             var result3 = $(this).find("location").map(function(){return $(this).text()}).get();
             for (var i = 0; i<result.length; i++){
              printStory(result[i],result2[i]);
             }
             
          });

          },
          error: function(response){
          }
          });
}

function printRoot(){
  var printable=`
  <div class="border-card">
          <div class="card-type-icon with-border">
            <img src="images/VE Logo Icon White.png" class="img-fluid">
          </div>
          <div class="content-wrapper">
          <div class="label-group fixed">
          <p class="title">Drafts</p>
          <p class="caption">Storywriting</p>
          </div>
          <div class="min-gap"></div>
          
          </div>
          <i class="material-icons end-icon">
            <button class="btn btn-sm btn-warning btnOpen">
            <input type="hidden" value="drafts">
            Open
            </button>
          </i>
          </div>
          <div class="border-card">
            <div class="card-type-icon with-border">
              <img src="images/VE Logo Icon White.png" class="img-fluid">
            </div>
            <div class="content-wrapper">
            <div class="label-group fixed">
            <p class="title">Characters</p>
            <p class="caption">Profiles</p>
            </div>
            <div class="min-gap"></div>
            
            </div>
            <i class="material-icons end-icon">
              <button class="btn btn-sm btn-warning btnOpen">
              <input type="hidden" value="characters">
              Open
              </button>
            </i>
            </div>
            <div class="border-card">
              <div class="card-type-icon with-border">
                <img src="images/VE Logo Icon White.png" class="img-fluid">
              </div>
              <div class="content-wrapper">
              <div class="label-group fixed">
              <p class="title">Plots</p>
              <p class="caption">The Storyline</p>
              </div>
              <div class="min-gap"></div>
              
              </div>
              <i class="material-icons end-icon">
                <button class="btn btn-sm btn-warning btnOpen">
                <input type="hidden" value="plots">
                Open
                </button>
              </i>
              </div>
            <div class="border-card">
              <div class="card-type-icon with-border">
                <img src="images/VE Logo Icon White.png" class="img-fluid">
              </div>
              <div class="content-wrapper">
              <div class="label-group fixed">
              <p class="title">Settings</p>
              <p class="caption">Places and Time</p>
              </div>
              <div class="min-gap"></div>
              
              </div>
              <i class="material-icons end-icon">
                <button class="btn btn-sm btn-warning btnOpen">
                <input type="hidden" value="settings">
                Open
                </button>
              </i>
              </div>

              <div class="border-card">
                <div class="card-type-icon with-border">
                  <img src="images/VE Logo Icon White.png" class="img-fluid">
                </div>
                <div class="content-wrapper">
                <div class="label-group fixed">
                <p class="title">Research Materials</p>
                <p class="caption">Related Research Content</p>
                </div>
                <div class="min-gap"></div>
                
                </div>
                <i class="material-icons end-icon">
                  <button class="btn btn-sm btn-warning btnOpen">
                  <input type="hidden" value="research materials">
                  Open
                  </button>
                </i>
                </div>

                <div class="border-card">
                  <div class="card-type-icon with-border">
                    <img src="images/VE Logo Icon White.png" class="img-fluid">
                  </div>
                  <div class="content-wrapper">
                  <div class="label-group fixed">
                  <p class="title">Templates</p>
                  <p class="caption">Ready to Use Files</p>
                  </div>
                  <div class="min-gap"></div>
                  
                  </div>
                  <i class="material-icons end-icon">
                    <button class="btn btn-sm btn-warning btnOpen">
                    <input type="hidden" value="templates">
                    Open
                    </button>
                  </i>
                  </div> 

                  <div class="border-card">
                  <div class="card-type-icon with-border">
                    <img src="images/VE Logo Icon White.png" class="img-fluid">
                  </div>
                  <div class="content-wrapper">
                  <div class="label-group fixed">
                  <p class="title">Game Systems</p>
                  <p class="caption">Gameplay Mechanics</p>
                  </div>
                  <div class="min-gap"></div>
                  
                  </div>
                  <i class="material-icons end-icon">
                    <button class="btn btn-sm btn-warning btnOpen">
                    <input type="hidden" value="game systems">
                    Open
                    </button>
                  </i>
                  </div> 
  `;

  $("#main3").append(printable);
  currentLoc="root";
}

function printFile(filename,filesize){
  var printable = `
  <div class="border-card">
                  <div class="card-type-icon with-border">
                    <img src="images/VE Logo Icon White.png" class="img-fluid">
                  </div>
                  <div class="content-wrapper">
                  <div class="label-group fixed">
                  <p class="title">`+filename+`</p>
                  <p class="caption">`+filesize+`</p>
                  </div>
                  <div class="min-gap"></div>
                  
                  </div>
                  <i class="material-icons end-icon">
                    <button data-toggle="modal" data-target="#exampleModal2" value="ve/`+path+`/`+filename+`" class="btn btn-sm btn-warning btnView"><img src="images/icons/eye.svg" width="20"> View</button>
                  </i>
                  </div> 
  `;

  $('#main3').append(printable);
}

$('body').on('click', '.btnView', function() {
var link = $(this).val();
$('#btnDownloadFile').attr('href',link);
// fix link by removing ve/
$('#btnEditFile').attr('href',"textEditor.php?path="+link.replace("ve/",""));
$('#btnDeleteFile').attr('value',link.replace("ve/",""));
if(link.includes('.vehtml')){
  $.ajax({
    url : link,
    dataType: "text",
    cache: false,
    success : function (result) {
        $("#textViewer").html(result);
        $('#btnEditFile').removeClass('d-none');

        // filter output
        $(".optionsMenu").remove();
        $('#textViewer input').attr('readonly', true);


    }
});
}
else{
  $("#textViewer").html('Sorry, No preview available');
  $('#btnEditFile').addClass('d-none');
}

// get file name
var n = link.lastIndexOf('/');
var result2 = link.substring(n + 1);
$("#lblTitle").text(result2);

});

function viewFiles(){
  //alert(path);
  $.ajax({
      url: 'storyOperate',
      data: {function2call: 'viewFiles', nextPath:path},
      type: 'post',
      dataType: "xml",
      success: function (data) {
          // action to be done
          //alert(data);

          //$("#main1").text("");
          $(data).find('file').each(function(){
             var result = $(this).find("filename").map(function(){return $(this).text()}).get();
             var result2 = $(this).find("filesize").map(function(){return $(this).text()}).get();
             for (var i = 0; i<result.length; i++){
              printFile(result[i],result2[i]);
             }
             
          });

          },
          error: function(response){
              alert(response);
          }
          });
}

$('body').on('click', '#btnZoom16', function() {
$('#textViewer').css('font-size','16px');
});

$('body').on('click', '#btnZoom20', function() {
$('#textViewer').css('font-size','20px');
});

$('body').on('click', '#btnZoom24', function() {
$('#textViewer').css('font-size','24px');
});

$('body').on('click', '#btnDarkTheme', function() {
$('#textViewer').addClass('darkText');
$(this).addClass('d-none');
$('#btnLightTheme').removeClass('d-none');
});

$('body').on('click', '#btnLightTheme', function() {
$('#textViewer').removeClass('darkText');
$(this).addClass('d-none');
$('#btnDarkTheme').removeClass('d-none');
});


// swapping tabs in same page
$('body').on('click', '#btnDownloader', function() {
  $('#tab-3').removeClass('d-none');
  $('#tab-2').addClass('d-none');
  $('#tab-1').addClass('d-none');

  $('#btnDownloader a').removeClass('text-white');
  $('#btnDownloader a').addClass('text-warning');

  $('#btnStories a').removeClass('text-warning');
  $('#btnStories a').addClass('text-white');

  $('#btnTools a').removeClass('text-warning');
  $('#btnTools a').addClass('text-white');
  });

  $('body').on('click', '#btnStories', function() {
    $('#tab-1').removeClass('d-none');
    $('#tab-2').addClass('d-none');
    $('#tab-3').addClass('d-none');
  
    $('#btnStories a').removeClass('text-white');
    $('#btnStories a').addClass('text-warning');
  
    $('#btnDownloader a').removeClass('text-warning');
    $('#btnDownloader a').addClass('text-white');
  
    $('#btnTools a').removeClass('text-warning');
    $('#btnTools a').addClass('text-white');
    });

    $('body').on('click', '#btnTools', function() {
      $('#tab-2').removeClass('d-none');
      $('#tab-3').addClass('d-none');
      $('#tab-1').addClass('d-none');
    
      $('#btnTools a').removeClass('text-white');
      $('#btnTools a').addClass('text-warning');
    
      $('#btnStories a').removeClass('text-warning');
      $('#btnStories a').addClass('text-white');
    
      $('#btnDownloader a').removeClass('text-warning');
      $('#btnDownloader a').addClass('text-white');
      });


viewStories();
