// function route it checks current location then makes proper changes in page.
function route(gotopath){
//if statements checking the current location
window.open(gotopath);
}

function printPath(){
    if (currentLoc == "root"){
        $('#lblPath').text("VE Storywriting Manager > "+storyTitle);
    }
    else if(currentLoc == ""){
        $('#lblPath').text("VE Storywriting Manager > ../stories");
    }
    else{
    $('#lblPath').text("VE Storywriting Manager > "+currentLoc);
    }
}

$('body').on('click', '.btnResume', function() {
    // do something
    $('#profileTitle').text($(this).find('.dataTitle').val());
    $('#profileDesc').text($(this).find('.dataDesc').val());
    storyTitle = $(this).find('.dataTitle').val();
    storyDesc = $(this).find('.dataDesc').val();
    currentLoc = "root";

    $('#main3').text("");
    printRoot();

    $('#main1').fadeOut();
    $('#main2').fadeIn();

    $('#btnNewStory').fadeOut();
    //$('#btnNewFile').fadeIn();
    $('#btnBack').fadeIn();

    printPath();

    // link to story telling important
    $('.btnStory').attr("href",'storytelling.php?story='+storyTitle);
    
});

$('body').on('click', '.btnPause', function() {
    // do something
    resetGlobalVar();
    viewStories();

    $('#main1').fadeIn();
    $('#main2').fadeOut();

    $('#btnNewFile').fadeOut();
    $('#btnRefresh').fadeOut();
    $('#btnBack').fadeOut();
    $('#btnNewStory').fadeIn();

    resetGlobalVar();
    printPath();
});

$('body').on('click', '.btnOpen', function() {
    // do something

    $('#main3').text('');
    $('#btnNewFile').fadeIn();
    $('#btnRefresh').fadeIn();

    path = "../stories/"+storyTitle+"/"+$(this).find('input').val();
    currentLoc = $(this).find('input').val();
    //alert(currentLoc);
    viewFiles();

    printPath();
});

$('body').on('click', '#btnBack', function() {
    // do something

    $('#main3').text('');

    $('#btnNewFile').fadeOut();
    $('#btnRefresh').fadeOut();

    if(currentLoc == "root"){
        resetGlobalVar();
        viewStories();

        $('#main1').fadeIn();
        $('#main2').fadeOut();

        $('#btnNewFile').fadeOut();
        $('#btnRefresh').fadeOut();
        $('#btnBack').fadeOut();
        $('#btnNewStory').fadeIn();

        resetGlobalVar();

        printPath();
    }
    else{
    printRoot();

    printPath();
    }
});

$('body').on('click', '#btnNewFile', function() {
    // do something
    window.open("upload.php?path="+path, '_blank');
    
});

$('body').on('click', '#btnRefresh', function() {
    // do something
    $('#main3').html("");
    viewFiles();
    
});
