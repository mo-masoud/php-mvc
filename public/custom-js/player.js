var firstPlay = 0;

// time formatter
String.prototype.toHHMMSS = function () {
    var sec_num = parseInt(this, 10); // don't forget the second param
    var hours   = Math.floor(sec_num / 3600);
    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
    var seconds = sec_num - (hours * 3600) - (minutes * 60);

    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    return hours+':'+minutes+':'+seconds;
}

$('body').on('click', '#btnPlay', function() {
    if(firstPlay == 0){
        var item = "#exampleModal3 .modal-body button:first";
        $(item).click();
    }
    else{

    // do something
    var audioplay = document.getElementById('audioPlayer');

    if (audioplay.paused == false) {
        audioplay.pause();
        $('#btnPlay').text('Paused');
        $('#btnPlay').removeClass('btn-warning');
        $('#btnPlay').addClass('btn-danger');

        $('#audioTitle').removeClass('text-warning');
        $('#audioTitle').addClass('text-danger');
    } else {
        audioplay.play();
        $('#btnPlay').text('Playing');
        $('#btnPlay').removeClass('btn-danger');
        $('#btnPlay').addClass('btn-warning');

        $('#audioTitle').removeClass('text-danger');
        $('#audioTitle').addClass('text-warning');
    }

}
    
});

$('body').on('click', '#exampleModal3 .modal-body button', function() {
    // do something
    firstPlay = 1; // critical

    var audioplay = document.getElementById('audioPlayer');
    var audioslider = document.getElementById('customRange1');
    

    audioplay.src= "playlist/"+$(this).val();
    audioplay.play();

    $('#btnPlay').text('Playing');
        $('#btnPlay').removeClass('btn-danger');
        $('#btnPlay').addClass('btn-warning');

        $('#audioTitle').removeClass('text-danger');
        $('#audioTitle').addClass('text-warning');
    
    // replace song title
    $('#audioTitle').text($(this).text());
    $('#audioTitle2').text($(this).text());
    
    // get range and stuff
    audioplay.onloadedmetadata = function() {
        audioslider.min=0;
        audioslider.max=audioplay.duration;
        audioslider.value=0;

    };

    
});

setInterval(currentSlider, 1000);

function currentSlider()
{
  //this will repeat every 5 seconds
  //you can reset counter here
  if(!$('#customRange1').is(":focus")){
    var audioplay = document.getElementById('audioPlayer');
    var audioslider = document.getElementById('customRange1');
    audioslider.value=audioplay.currentTime;

    // change current time text
    $('#txtCurrentTime').text(audioplay.currentTime.toString().toHHMMSS());

    // change duaration time text
    $('#txtDuration').text(audioplay.duration.toString().toHHMMSS());
  }
  
}

$('body').on('change', '#customRange1', function() {
    // do something
    var audioplay = document.getElementById('audioPlayer');
    var audioslider = document.getElementById('customRange1');
    audioplay.currentTime = audioslider.value;
    $("input").blur();
    
});

function printSong(filename){
    var songName = filename.replace(/\.[^/.]+$/, "");
    var printable = `
    <button class="btn btn-md btn-warning text-left w-100 mb-1" value="`+filename+`"><img src="images/icons//musical-note.svg" width="20"> `+songName+`</button>
    `;

    $('#areaPlaylist').append(printable);
}

function viewPlaylist(){
    var playlistPath = "../playlist";
    //alert(playlistPath);

    $.ajax({
        url: 'storyOperate',
        data: {function2call: 'viewFiles', nextPath:playlistPath},
        type: 'post',
        dataType: "xml",
        cache:false,
        success: function (data) {
            // action to be done
            //alert(data);

            $("#areaPlaylist").text("");
            $(data).find('file').each(function(){
               var result = $(this).find("filename").map(function(){return $(this).text()}).get();
               for (var i = 0; i<result.length; i++){
                printSong(result[i]);
               }
               
            });

            // fix name appearance issue
            $("#btnPlay").click();
            $("#btnPlay").click();

            },
            error: function(response){
                //alert(response);
            }
            });
}

viewPlaylist();