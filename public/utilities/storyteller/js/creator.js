function printEpisode(fileName,folder){
    var path = $_GET('story');
    var output;

        output = `
        <option value="stories/`+path+`/storytelling/`+folder+`/`+fileName+`">`+fileName.replace('.xml','');+`</option>
        `;
    

    $('#txtEpisodes').append(output);
}

function getEpisodes(folder){
    var storyPath = $_GET('story');
    $.ajax({
        url: '/get-episodes',
        data: {function2call: 'viewEPs',path:storyPath},
        type: 'post',
        dataType: "xml",
        success: function (data) {
            // action to be done
            $('#txtEpisodes').html('');
            $(data).find('file').each(function(){
                var result = $(this).find("filename").map(function(){return $(this).text()}).get();
                for (var i = 0; i<result.length; i++){
                    printEpisode(result[i],folder);
                }
                
             });
            

            },
            error: function(response){
                
            }
            });
}

$('body').on('click', '#btnCreateEpisode', function() {
    // get storyname from get
    var storyname = $_GET('story');
    var epPath = "stories/"+storyname+"/storytelling/episodes/";
    var episodeName = $('#txtEPNum').val()+"_"+$('#txtEPName').val();

    $.ajax({
        url: '/get-episodes',
        data: {function2call: 'createEP', path:epPath, epName:episodeName},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            alert(data);
            getEpisodes('episodes');
            },
            error: function(response){
                
            }
            });
    
});

getEpisodes('episodes');

// edit episode **********************************************************************************

// IMPORTANT VARIABLES
var episodeXML,scenesLength,currentScene,episodeXMLPath; 
// main variables (put ids of assets here better for dynamic allocation for current)
var currentSceneData = { "imgCh1": "", "imgCh2": "", "imgCh3": "", "imgBackground":"", "backgroundEffect":"", "btnItem":"", "btnBGM":"", "btnSoundEffect":"", "btnSoundEffectConstant":"", "btnVoice":"", "txtName":"", "txtDialogue":""};
var sceneAssignment = { "imgCh1": "ch1", "imgCh2": "ch2", "imgCh3": "ch3", "imgBackground":"background", "backgroundEffect":"backgroundEffect", "btnItem":"item", "btnBGM":"bgm", "btnSoundEffect":"soundEffect", "btnSoundEffectConstant":"soundEffectConstant", "btnVoice":"voice", "txtName":"speaker", "txtDialogue":"dialogue"};
//var nextSceneData = { "ch1": "", "ch2": "", "ch3": "", "background":"", "backgroundEffect":"", "item":"", "bgm":"", "soundEffect":"", "soundEffectConstant":"", "voice":"", "speaker":"", "dialogue":""};  


function printScenes(){
    $('#containerscenes').html("");
    for (var i = 0; i<scenesLength; i++){
        var output =`
        <div id="btnScene-`+i+`" class="card bg-black5 border border-dark mb-2 btnScene">
        <img class="card-img-top" src="utilities/storyteller/images/scene.png" alt="Card image cap">
        
        <span class="text-center py-1"><span class="badge badge-warning lblScene">`+(i+1)+`</span></span>
        </div>
        `;
        $('#containerscenes').append(output);
    }
}

function getSecenesLength(){
    $(episodeXML).find('episode').each(function(){
        var result = $(this).find("scene").map(function(){return $(this).text()}).get();
        scenesLength = result.length;
     });
}

function selectScene(){
$('.btnScene').removeClass('bg-danger');
$('.btnScene').addClass('bg-black5');
$('#btnScene-'+currentScene).removeClass('bg-black5');
$('#btnScene-'+currentScene).addClass('bg-danger');
}

function assignScene(){
// assign episode xml current scene to the associative array
        for (var key in sceneAssignment) { 
            if (sceneAssignment.hasOwnProperty(key)) { 
          
                // Printing Keys variable is key
                $(episodeXML).find('episode').each(function(){
                    
                    var result = $(this).find(sceneAssignment[key]).map(function(){return $(this).text()}).get();
                    

                    // assign in currentscenedata
                    i = currentScene;
                    currentSceneData[key] = result[i];
                });
                
            } 
        } 
}

function loadCurrentScene(){
    for (var key in currentSceneData) { 
        if (currentSceneData.hasOwnProperty(key)) { 
      
            // Printing Keys variable is key
            var elementType = $('#'+key).prop('nodeName');

            if(elementType == "IMG"){
                if(currentSceneData[key] == ""){
                    $('#'+key).attr('src',"");
                    $('#'+key).attr('title',"");
                }
                else{
                    $('#'+key).attr('src',currentSceneData[key]);
                    $('#'+key).attr('title',currentSceneData[key]);
                }
            }
            else if(elementType == "BUTTON"){
                $('#'+key).attr('value',currentSceneData[key]);
                if(currentSceneData[key] == ""){
                    $('#'+key).addClass('btn-warning');
                    $('#'+key).removeClass('btn-success');
                }
                else{
                    $('#'+key).removeClass('btn-warning');
                    $('#'+key).addClass('btn-success');
                }
                
            }
            else if(elementType == "INPUT"){
                $('#'+key).val(currentSceneData[key]);
                $('#dialog-character').text($('#'+key).val()); // gets from input to preview
                
            }
            else if(elementType == "TEXTAREA"){
                $('#'+key).val(currentSceneData[key]);
                $('#dialog-text').text($('#'+key).val()); // gets from input to preview
                
            }
            
        } 
    }
    
    UIupdateScenesNum();
}

function setEPTitle(){
    var fileNameIndex = episodeXMLPath.lastIndexOf("/") + 1;
    var filename = episodeXMLPath.substr(fileNameIndex);
    filename = filename.replace(".xml","");
    var num = "EPISODE "+ filename.substr(0, filename.indexOf('_'));
    var title = filename.substr(filename.indexOf('_')+1, filename.length-1);

    $('#txtEP').text(num);
    $('#txtTitle').text(title);
}

function UIupdateScenesNum(){
    if(typeof currentScene === "undefined"){
        $('#lblSceneNum').text('');
    }
    else{
    $('#lblSceneNum').text('['+(currentScene+1)+']');
    }
}

function initialLoadEP(xmlString){
    xmlString = xmlString.replace(/\n/g, "");

    episodeXML = $.parseXML(xmlString);
    getSecenesLength();
    printScenes();
    currentScene = 0;
    selectScene();
    assignScene();
    loadCurrentScene();
    UIupdateScenesNum();
}

loadCurrentScene(); // empty on start of app


$('body').on('click', '#btnEditEpisode', function() {
    // get file content and put get xml

    var episodePath = $('#txtEpisodes').val();
    $.ajax({
        url: episodePath,
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            initialLoadEP(data);
            episodeXMLPath = episodePath;
            setEPTitle();
            UIupdateScenesNum();
            },
            error: function(response){
                
            }
            });
});

function loadSceneByNum(sceneNumber){
    currentScene = sceneNumber-1;
    selectScene();
    assignScene();
    loadCurrentScene();
}

// important converting
function xmlToString(xmlData) { 

    var xmlString;
    //IE
    if (window.ActiveXObject){
        xmlString = xmlData.xml;
    }
    // code for Mozilla, Firefox, Opera, etc.
    else{
        xmlString = (new XMLSerializer()).serializeToString(xmlData);
    }
    return xmlString;
} 

function overwriteEPFile(){
    saveSceneChanges();
    console.log({episodeXML});
    $.ajax({
        url: '/get-episodes',
        data: {function2call: 'overwriteEP', path:episodeXMLPath, content:xmlToString(episodeXML)},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            alert(data);
            },
            error: function(response){
                
            }
            });
}

function saveSceneChanges(){
    //$(episodeXML).find('scene').eq(currentScene).text('testeest');
    for (var key in sceneAssignment) { 
        if (sceneAssignment.hasOwnProperty(key)) { 
      
            // assign in values from scene itself (needs check of element type)
            var elementType = $('#'+key).prop('nodeName');

            if(elementType == "IMG"){
                $(episodeXML).find(sceneAssignment[key]).eq(currentScene).text($("#"+key).attr('src'));
            }
            else if(elementType == "BUTTON"){
                $(episodeXML).find(sceneAssignment[key]).eq(currentScene).text($("#"+key).val());
            }
            else if(elementType == "INPUT"){
                $(episodeXML).find(sceneAssignment[key]).eq(currentScene).text($("#"+key).val());
            }
            else if(elementType == "TEXTAREA"){
                $(episodeXML).find(sceneAssignment[key]).eq(currentScene).text($("#"+key).val());
            }

            
        } 
    }


    //$(episodeXML).find('ch1').eq(currentScene).text('testtest');

    // for testing
    //alert(xmlToString(episodeXML));
}

// dynamic button
$('body').on('click', '.btnScene', function() {
    saveSceneChanges();
    var sceneNumber = $(this).find(".lblScene").text();
    loadSceneByNum(sceneNumber);
    var audioplay = document.getElementById('audioPlayer');
    audioplay.src = "";
});

$('body').on('click', '#btnApplyChanges', function() {
    overwriteEPFile();
});

function updateEPCode(){
    $('#txtXMLCode').val("");
    $('#txtXMLCode').val(xmlToString(episodeXML));
}

$('body').on('click', '#btnShowCode', function() {
    saveSceneChanges();
    updateEPCode();
});

function addScene(){
    var output=`
        <scene>
            <ch1></ch1>
            <ch2></ch2>
            <ch3></ch3>
            <background></background>
            <backgroundEffect></backgroundEffect>
            <item></item>
            <bgm></bgm>
            <soundEffect></soundEffect>
            <soundEffectConstant></soundEffectConstant>
            <voice></voice>
            <speaker></speaker>
            <dialogue></dialogue>
        </scene>
    `;
    $(episodeXML).find('scene').eq(currentScene).after(output);
    saveSceneChanges();
    updateEPCode();

    getSecenesLength();
    printScenes();
    currentScene = currentScene+1;
    selectScene();
    assignScene();
    loadCurrentScene();

}

// xtremely important to copy all content of xml as a .html() method
function serializeXmlNode(xmlNode) {
    if (typeof window.XMLSerializer != "undefined") {
        return new window.XMLSerializer().serializeToString(xmlNode);
    } else if (typeof xmlNode.xml != "undefined") {
        return xmlNode.xml;
    }
    return "";
}

function dupScene(){
    saveSceneChanges();
    updateEPCode();
    var extractedScene = $(episodeXML).find('scene')[currentScene];
    extractedScene = serializeXmlNode(extractedScene);
    $(episodeXML).find('scene').eq(currentScene).after(extractedScene);
    saveSceneChanges();
    updateEPCode();

    getSecenesLength();
    printScenes();
    currentScene = currentScene+1;
    selectScene();
    assignScene();
    loadCurrentScene();
}

function removeSceneNode(){
    if(currentScene == 0){
        alert("You can't delete the first scene!");
    }
    else{
        $(episodeXML).find('scene').eq(currentScene).remove(); // issue

        getSecenesLength();
    printScenes();
    currentScene = currentScene-1;
    selectScene();
    assignScene();
    loadCurrentScene();
    }
    
}

$('body').on('click', '#btnAddScene', function() {
    
    addScene();
    
});

$('body').on('click', '#btnDupScene', function() {
    
    dupScene();
    
});

$('body').on('click', '#btnDeleteScene', function() {
    
    removeSceneNode();
    
});

// Very Important button
$('body').on('click', '#btnNext', function() {
    
    getSecenesLength();
    if(currentScene != (scenesLength-1)){
        currentScene = currentScene + 1;
        selectScene();
        assignScene();
        loadCurrentScene();
    }
    
    
});

