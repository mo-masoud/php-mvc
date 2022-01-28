$('body').on('click', '#btnShowHide', function() {
    if($('#preview-outter').hasClass('h-65')){
        $('#preview-outter').addClass('h-0').removeClass('h-65');
        $('#settings-outter').addClass('h-90').removeClass('h-25');
    }
    else if($('#preview-outter').hasClass('h-0')){
        $('#preview-outter').addClass('h-65').removeClass('h-0');
        $('#settings-outter').addClass('h-25').removeClass('h-90');
    }
    
});

// enable retrieving data from get
function $_GET(q) {
    let params = new URLSearchParams(location.search);
    return params.get(q);
}

function printAsset(fileName,type,folder){
    var path = $_GET('story');
    var output;
    if(type=="image"){
        output = `
        <div class="btnAsset text-center pt-3 border-bottom border-secondary">
        <input type="hidden" value="stories/`+path+`/storytelling/`+folder+`/`+fileName+`">
                        <img src="stories/`+path+`/storytelling/`+folder+`/`+fileName+`" class="card-img-top w-35" alt="...">
                        <div class="card-body">
                          <p class="card-text">`+fileName+`</p>
                        </div>
        </div>
        `;
    }
    else if(type=="audio"){
        output = `
        <div class="btnAsset text-center pt-3 border-bottom border-secondary">
        <input type="hidden" value="stories/`+path+`/storytelling/`+folder+`/`+fileName+`">
                        <img src="utilities/storyteller/images/music.svg" class="card-img-top w-25" alt="..." style="filter: invert(100%);">
                        <div class="card-body">
                          <p class="card-text">`+fileName+`</p>
                        </div>
                      </div>
        `;
    }

    $('#container'+ folder.replace(" ", "")).append(output);
}

function getAssets(type,folder){
    var storyPath = $_GET('story');
    $.ajax({
        url: 'get-episodes',
        data: {function2call: 'view'+folder.replace(" ", ""),path:storyPath},
        type: 'post',
        dataType: "xml",
        success: function (data) {
            // action to be done
            $('#container'+ folder.replace(" ", "")).html('');
            $(data).find('file').each(function(){
                var result = $(this).find("filename").map(function(){return $(this).text()}).get();
                for (var i = 0; i<result.length; i++){
                    printAsset(result[i],type,folder);
                }
                
             });
            

            },
            error: function(response){
                
            }
            });
}

function refreshAllAssets(){
    getAssets('image','characters');
    getAssets('image','settings');
    getAssets('image','items');
    getAssets('audio','bgm');
    getAssets('audio','sound effects');
    getAssets('audio','voice');
}

$('body').on('click', '#btnRefreshAsset', function() {
    refreshAllAssets();
});

refreshAllAssets();

$('body').on('click', '.btnAsset', function() {
    $('#txtCopy').text($(this).find('input').val());
});

$('body').on('keyup', '#txtDialogue', function() {
    $('#dialog-text').html($('#txtDialogue').val());
});

$('body').on('keyup', '#txtName', function() {
    $('#dialog-character').html($('#txtName').val());
});

// play music preview (order of this event is important)
$('body').on('click', '.resAsset', function() {
    if ($('#txtCopy').text() == ""){
        // get type of current element
        var elementType = $(this).prop('nodeName');
        var elementText = $(this).text();
        if (elementType == "BUTTON" && elementText != "Item"){
            var audioplay = document.getElementById('audioPlayer');
            audioplay.src = $(this).val();
            audioplay.play();
        }
    }
    
});

$('body').on('click', '.resAsset', function() {
    // get type of current element
    var elementType = $(this).prop('nodeName');
    if(elementType == "IMG" && $('#txtCopy').text() != ""){
        $(this).attr('src',$('#txtCopy').text());
        $('#txtCopy').text("");
    }
    else if (elementType == "BUTTON" && $('#txtCopy').text() != ""){
        $(this).attr('value',$('#txtCopy').text());
        $(this).removeClass('btn-warning');
        $(this).addClass('btn-success');
        $('#txtCopy').text("");
        if($(this).text() != "Item"){
            var audioplay = document.getElementById('audioPlayer');
            audioplay.src = "";
        }
    }
});

$('.resAsset').contextmenu(function() {
    return false;
});

$('body').on('mousedown', '.resAsset', function() {
    switch (event.which) {
        // right click check
        case 3:
            // get type of current element
            var elementType = $(this).prop('nodeName');
            if(elementType == "IMG"){
                $(this).attr('src',"");
                $(this).attr('title',"");
            }
            else if (elementType == "BUTTON"){
                $(this).attr('value',"");
                $(this).removeClass('btn-success');
                $(this).addClass('btn-warning');
            }
            break;
    }
});

// tool tip on music items
$('body').on('mouseenter', '.resAsset', function() {
            // get type of current element
            var elementType = $(this).prop('nodeName');
            if (elementType == "BUTTON"){
                $(this).attr('data-toggle','tooltip');
                $(this).attr('title',$(this).val());
                $(this).tooltip();
            }
            else if (elementType == "IMG"){
                $(this).attr('data-toggle','tooltip');
                $(this).attr('title',$(this).attr('src'));
                $(this).tooltip();
            }
});

$('body').on('click', '#btnLoop', function() {
    var audioplay = document.getElementById('audioPlayer');
    if(audioplay.loop == false){
        audioplay.loop = true;
        $('#btnLoop').removeClass('btn-warning');
        $('#btnLoop').addClass('btn-success');
    }
    else{
        audioplay.loop = false;
        $('#btnLoop').addClass('btn-warning');
        $('#btnLoop').removeClass('btn-success');
    }
    
});

// full screen mode issue
$('body').on('click', '#btnFullscreen', function() {
    alert('works');
    alert($('#preview-outter').html());
    $('#sceneFullscreen').html($('#preview-outter').html());
    $('#preview-outter').html("");
    
});

$('body').on('click', '#btnPlayEpisode', function() {
    var url = 'review?episode='+$('#txtEpisodes').val();
    window.open(url, '_blank');
});

$('body').on('click', '#btnEnableTemp', function() {

    if ( $( this ).hasClass( "btn-secondary" ) ) {
        $( this ).removeClass( "btn-secondary" );
        $( this ).addClass( "btn-success" );

        for(var i = 1; i<4; i++){
            var input = document.getElementById('txtTempName'+i);
            input.outerHTML = input.outerHTML.replace(/^\<input/, '<button') + input.value + '</button>';
            $('#txtTempName'+i).addClass("btn-warning");
        }
        
    }
    else{
        $( this ).addClass( "btn-secondary" );
        $( this ).removeClass( "btn-success" );

        for(var i = 1; i<4; i++){
            var input = document.getElementById('txtTempName'+i);
            var text = $('#txtTempName'+i).text();
            input.outerHTML = '<input type="text" class="form-control-sm w-25 h-100 align-top txtTempName" placeholder="temp 2" id="txtTempName'+i+'" value = "' + text +'" >';
            //input.outerHTML.replace(/^\<button/, '<input') + input.value + '</input>';
        }
    }

    
});

$('body').on('click', '.txtTempName', function() {

    if($('#btnEnableTemp').hasClass("btn-success")){
        $('#dialog-character').text($(this).text());
        $('#txtName').val($(this).text());
    }

    
});


