// enable retrieving data from get
function $_GET(q) {
    let params = new URLSearchParams(location.search);
    return params.get(q);
}

function loadMainMenuAudio(){
    var split = $_GET('episode').split('/');
    var audioPath = "stories/"+split[1]+"/storytelling/bgm/mainmenu.mp3";
    var audioplay = document.getElementById('audioMenu');
    audioplay.src = audioPath;
    audioplay.play();
}

function loadButtonClickAudio(){
    var split = $_GET('episode').split('/');
    var audioPath = "stories/"+split[1]+"/storytelling/sound effects/buttonclick.mp3";
    var audioplay = document.getElementById('audioButton');
    audioplay.src = audioPath;
    //audioplay.play();
}

function stopAudio(player){
    var audioplay = document.getElementById(player);
    audioplay.currentTime = 0;
}

function pauseAudio(player){
    var audioplay = document.getElementById(player);
    audioplay.pause();
}

function playAudio(player){
    var audioplay = document.getElementById(player);
    audioplay.play();
}

function volumeAudio(player,vol){
    var audioplay = document.getElementById(player);
    audioplay.volume = vol;

    // change the range value from here
    $('#range-'+player).val(vol);
}

/* Get the documentElement (<html>) to display the page in fullscreen */
var elem = document.documentElement;

/* View in fullscreen */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}

/* Close fullscreen */
function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) { /* Firefox */
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE/Edge */
    document.msExitFullscreen();
  }
}

//Global Variables
var episodeXMLPath = $_GET('episode'); // From URL GET the xml file path.
var episodeXML,scenesLength;
var currentScene = 0; // Initial Value is 0

// main variables (dynamic allocation for current)
var nextSceneData = { "imgCh1": "", "imgCh2": "", "imgCh3": "", "imgBackground":"", "backgroundEffect":"", "imgItem":"", "audioBGM":"", "audioSoundEffect":"", "audioSoundEffectConstant":"", "audioVoice":"", "dialog-character":"", "dialog-text":""};
var currentSceneData = { "imgCh1": "", "imgCh2": "", "imgCh3": "", "imgBackground":"", "backgroundEffect":"", "imgItem":"", "audioBGM":"", "audioSoundEffect":"", "audioSoundEffectConstant":"", "audioVoice":"", "dialog-character":"", "dialog-text":""};
var sceneAssignment = { "imgCh1": "ch1", "imgCh2": "ch2", "imgCh3": "ch3", "imgBackground":"background", "backgroundEffect":"backgroundEffect", "imgItem":"item", "audioBGM":"bgm", "audioSoundEffect":"soundEffect", "audioSoundEffectConstant":"soundEffectConstant", "audioVoice":"voice", "dialog-character":"speaker", "dialog-text":"dialogue"};

function getSecenesLength(){
    $(episodeXML).find('episode').each(function(){
        var result = $(this).find("scene").map(function(){return $(this).text()}).get();
        scenesLength = result.length;
     });
}

function assignCurrentScene(){
    // assign episode xml current scene to the associative array
            for (var key in sceneAssignment) { 
                if (sceneAssignment.hasOwnProperty(key)) { 
              
                    // Printing Keys variable is key
                    $(episodeXML).find('episode').each(function(){
                        
                        var result = $(this).find(sceneAssignment[key]).map(function(){return $(this).text()}).get();
                        
    
                        // assign in currentscenedata
                        currentSceneData[key] = result[currentScene];
                    });
                    
                } 
            } 
    }

    function assignNextScene(){
        // assign episode xml current scene to the associative array
                for (var key in sceneAssignment) { 
                    if (sceneAssignment.hasOwnProperty(key)) { 
                  
                        // Printing Keys variable is key
                        $(episodeXML).find('episode').each(function(){
                            
                            var result = $(this).find(sceneAssignment[key]).map(function(){return $(this).text()}).get();
                            
        
                            // assign in currentscenedata
                            nextSceneData[key] = result[currentScene];
                        });
                        
                    } 
                } 
        }

    //How to display assets VERY IMPORTANT
    function normalSwapImage(key,loc){
        $('#'+key).attr('src',loc);
    }

    function normalSwapAudio(key,loc){
        var audioplay = document.getElementById(key);
        audioplay.src = loc;
        audioplay.play();
    }

    function normalSwapDialogue(key,loc){
        $('#'+key).html(loc);
    }


    // Comparison functions VERY IMPORTANT
    function swapCharacter(current,next,key){
        if(next == ""){
            normalSwapImage(key,next);
        }else if(next != current){
            normalSwapImage(key,next);
        }
    }

    function swapBackground(current,next,key){
        if(next == ""){
            normalSwapImage(key,next);
        }else if(next != current){
            normalSwapImage(key,next);
        }
    }

    function swapItem(current,next,key){
            if(current == "" && next != ""){
                normalSwapImage(key,next);
                $('#imgItem-outter').fadeIn();
            }
            else if(current != "" && next == ""){
                normalSwapImage(key,next);
                $('#imgItem-outter').fadeOut();
            }
    }

    function swapAudio(current,next,key){
        if(next == ""){
            normalSwapAudio(key,next);
        }else if(next != current){
            normalSwapAudio(key,next);
        }
    }

    function swapDialogue(current,next,key){
        if(next == ""){
            normalSwapDialogue(key,next);
        }else if(next != current){
            normalSwapDialogue(key,next);
        }
    }


    // "imgCh1": "", "imgCh2": "", "imgCh3": "", "imgBackground":"", "backgroundEffect":"", "imgItem":"", 
    // "audioBGM":"", "audioSoundEffect":"", "audioSoundEffectConstant":"", "audioVoice":"", "dialog-character":"", "dialog-text":""
    function loadCurrentScene(){
        for (var key in currentSceneData) { 
            if (currentSceneData.hasOwnProperty(key)) {
                for (var key2 in nextSceneData) { 
                    if (nextSceneData.hasOwnProperty(key)) {
                        if(key == key2){
                            // compare each one by class type
                            if($('#'+key).hasClass('characterAsset')){
                                swapCharacter(currentSceneData[key],nextSceneData[key2],key);
                            }
                            else if($('#'+key).hasClass('backgroundAsset')){
                                swapBackground(currentSceneData[key],nextSceneData[key2],key);
                            }
                            else if($('#'+key).hasClass('itemAsset')){
                                swapItem(currentSceneData[key],nextSceneData[key2],key);
                            }
                            else if($('#'+key).hasClass('audioAsset')){
                                swapAudio(currentSceneData[key],nextSceneData[key2],key);
                            }
                            else if($('#'+key).hasClass('dialogueAsset')){
                                swapDialogue(currentSceneData[key],nextSceneData[key2],key);
                            }
                            
                        }
                    }
                }
            }
        }

        assignCurrentScene();
    }

    // Require Update (For animations)
    function loadCurrentSceneV1(){
        for (var key in nextSceneData) { 
            if (nextSceneData.hasOwnProperty(key)) { 
          
                // Printing Keys variable is key
                var elementType = $('#'+key).prop('nodeName');
    
                if(elementType == "IMG"){
                    if(nextSceneData[key] == ""){
                        $('#'+key).attr('src',"");
                    }
                    else{
                        $('#'+key).attr('src',nextSceneData[key]);
                    }
                }
                else if(elementType == "AUDIO"){
                    //$('#'+key).attr('src',currentSceneData[key]);
                    var audioplay = document.getElementById(key);
                    audioplay.src = nextSceneData[key];
                    if(nextSceneData[key] != "")
                    audioplay.play();
                    
                }
                else if(elementType == "DIV"){
                    $('#'+key).text(nextSceneData[key]);
                }
                
            } 
        }
        
        assignCurrentScene();
    }


    // returns the Episode Num
    function getEPNum(){
        var fileNameIndex = episodeXMLPath.lastIndexOf("/") + 1;
        var filename = episodeXMLPath.substr(fileNameIndex);
        filename = filename.replace(".xml","");
        var num = "EPISODE "+ filename.substr(0, filename.indexOf('_'));
    
        return num;
    }

    function getEPName(){
        var fileNameIndex = episodeXMLPath.lastIndexOf("/") + 1;
        var filename = episodeXMLPath.substr(fileNameIndex);
        filename = filename.replace(".xml","");
        var title = filename.substr(filename.indexOf('_')+1, filename.length-1);
    
        return title;
    }

    // none animation version
    function setEPTitle(){
        var fileNameIndex = episodeXMLPath.lastIndexOf("/") + 1;
        var filename = episodeXMLPath.substr(fileNameIndex);
        filename = filename.replace(".xml","");
        var num = filename.substr(0, filename.indexOf('_'));
        var title = filename.substr(filename.indexOf('_')+1, filename.length-1);
    
        $('#txtEP').text("EPISODE "+num);
        $('#txtTitle').text(title);

        $('#menuEPNum').text(num);
        $('#menuEPName').text(title);
    }

    // Starting Event should set the currentScene Number
    function initialLoadEP(xmlString){
        episodeXML = $.parseXML(xmlString);
        getSecenesLength();
        assignNextScene();
        loadCurrentScene();
        setEPTitle();

        // pause all audios
        pauseAudio('audioBGM');
        pauseAudio('audioSoundEffect');
        pauseAudio('audioSoundEffectConstant');
        pauseAudio('audioVoice');
    }

    // AJAX Load Episode (Gets xml file data)
    function initialLoadXML(){
        // To Avoid invalid XML File
        
        if($_GET('episode') != null){
            $.ajax({
                url: episodeXMLPath,
                type: 'post',
                dataType: "text",
                success: function (data) {
                    // action to be done
                    initialLoadEP(data);
                    },
                    error: function(response){
                        //alert('Error: Initial Load XML Failed');
                    }
                    });
        }
        else if($_GET('episode') == null){
            alert('path="'+$_GET('episode')+'"');
        }

        
    }

    function loadSceneByNum(sceneNumber){
        currentScene = sceneNumber-1;
        assignCurrentScene();
        loadCurrentScene();
    }

    function nextScene(){
        getSecenesLength();
        if(currentScene != (scenesLength-1)){
            currentScene = currentScene + 1;
            //assignCurrentScene();
            assignNextScene();
            loadCurrentScene();
            // play all music
            // show item
        }
    }


    function getSecondPart(str , character) {
        return str.split(character)[1];
    }
    
    // change wallpaper up to 3
    function swapWallpaper(){
        var num = Math.floor(Math.random() * 4);     // returns a random integer from 0 to 2
        $('.bg-loading').css('background-image','url(utilities/storyteller/images/loading'+num+'.png)');
    }


    // UI buttons functions
    function printDialogue(speaker,dialogue){
        output = `
        <div class="row mx-auto text-light mt-3 px-5 w-100">

            <div class="col-2 my-auto text-right">
              <img src="utilities/storyteller/images/unknown.png" class="w-100 img-thumbnail">
            </div>

            <div class="col-10 text-left display-5 my-auto bg-dialogue">
              <h2>`+speaker+`</h2>
              <div class="details">
            `+dialogue+`
            </div>
            </div>

            </div>
        `;

        //print statement here
        $('#dialoguesOutput').append(output);
    }
    function showDialogues(){
        $('#dialoguesOutput').html('');
        $(episodeXML).find('scene').each(function(){
            var result = $(this).find("speaker").map(function(){return $(this).text()}).get();
            var result2 = $(this).find("dialogue").map(function(){return $(this).text()}).get();
            for (var i = 0; i<result.length; i++){
                printDialogue(result[i],result2[i]);
            }
            
         });
    }

    function showMusic(){
        var audioplay = document.getElementById('audioBGM');
        $('#musicOutput').text(decodeURIComponent(audioplay.src.replace(/^.*[\\\/]/, '')));
    }

    function showSetting(){
        var loc = $('#imgBackground').attr('src');
        $('#settingWorld').css('background-image','url("'+loc+'")');
        $('#settingImage').attr('src',loc);
        var filename = decodeURIComponent(loc.replace(/^.*[\\\/]/, ''));
        var story = getSecondPart($_GET('episode') , '/');
        var fullpath = "stories/"+story+"/storytelling/profiles.xml";

        $.ajax({
            url: fullpath,
            type: 'post',
            dataType: "xml",
            success: function (data) {
                // action to be done
                $(data).find('setting').each(function(){
                    var result = $(this).find("img").map(function(){return $(this).text()}).get();
                    var result2 = $(this).find("title").map(function(){return $(this).text()}).get();
                    var result3 = $(this).find("desc").map(function(){return $(this).text()}).get();
                    for (var i = 0; i<result.length; i++){
                        if(filename == result[i]){
                            $('#settingName').text(result2[i]);
                            $('#settingDesc').text(result3[i]);
                        }
                    }
                    
                 });
                },
                error: function(response){
                    //alert('Error: Failed to Load XML File');
                }
                });


        
    }


    function getChProfile(loc){

        var filename = decodeURIComponent(loc.replace(/^.*[\\\/]/, ''));
        var story = getSecondPart($_GET('episode') , '/');
        var fullpath = "stories/"+story+"/storytelling/profiles.xml";
        $.ajax({
            url: fullpath,
            type: 'post',
            dataType: "xml",
            success: function (data) {
                // action to be done
                $(data).find('character').each(function(){
                    var result = $(this).find("img").map(function(){return $(this).text()}).get();
                    var result2 = $(this).find("title").map(function(){return $(this).text()}).get();
                    var result3 = $(this).find("desc").map(function(){return $(this).text()}).get();
                    for (var i = 0; i<result.length; i++){
                        if(filename == result[i]){
                            $('#chName').text(result2[i]);
                            $('#chDesc').text(result3[i]);
                            $('#chImg').attr('src',loc);
                        }
                    }
                    
                 });
                },
                error: function(response){
                    //alert('Error: Failed to Load XML File');
                }
                });
    }

    function showCharacter(){
        var ch1,ch2,ch3;
        ch1= $('#imgCh1').attr('src');
        ch2= $('#imgCh2').attr('src');
        ch3= $('#imgCh3').attr('src');


        $('#charactersOutput').html('');

        if(ch1 != ""){
            var output = `
            <img src="`+ch1+`" width="200px" class="btnChProfile">
            `;
            $('#charactersOutput').append(output);
        }

        if(ch2 != ""){
            var output = `
            <img src="`+ch2+`" width="200px" class="btnChProfile">
            `;
            $('#charactersOutput').append(output);
        }

        if(ch3 != ""){
            var output = `
            <img src="`+ch3+`" width="200px" class="btnChProfile">
            `;
            $('#charactersOutput').append(output);
        }

        // get filename of first image
        var loc = $('#charactersOutput img:first-child').attr('src');
        getChProfile(loc);
    }
    
    
