$( document ).ready(function() {
    swapWallpaper();
    initialLoadXML();
    loadMainMenuAudio();
    loadButtonClickAudio();
});

$('body').on('click', '#btnStartGame', function() {
    $('#mainMenu').fadeOut();
    playAudio('audioBGM');
    playAudio('audioSoundEffect');
    playAudio('audioSoundEffectConstant');
    playAudio('audioVoice');
    pauseAudio('audioMenu');
});

$('body').on('click', '#btnPause', function() {
    pauseAudio('audioBGM');
    //pauseAudio('audioSoundEffect');
    pauseAudio('audioSoundEffectConstant');
    //pauseAudio('audioVoice');
    playAudio('audioMenu');
    swapWallpaper();
    $('#btnStartGame span').text('CONTINUE GAME');
    $('#mainMenu').fadeIn();
});

// Next button click
$('body').on('click', '#btnNext', function() {
    //alert('currentScene = '+currentScene+' scenes length = '+scenesLength);
    if(currentScene == (scenesLength-1)){
        $('#mainMenu').fadeIn();
        currentScene = -1;

            pauseAudio('audioBGM');
            pauseAudio('audioSoundEffect');
            pauseAudio('audioSoundEffectConstant');
            pauseAudio('audioVoice');
            $('#btnStartGame span').text('REPLAY THE GAME');

            var myVar = setInterval(function(){
            $('#btnNext').click();
            pauseAudio('audioBGM');
            pauseAudio('audioSoundEffect');
            pauseAudio('audioSoundEffectConstant');
            pauseAudio('audioVoice');
            playAudio('audioMenu');
           
            clearInterval(myVar);
        }, 1000);

        
    }
    else
    nextScene();
});

// settings buttons events
$('body').on('click', '#all-slim', function() {
    // positioning
    $('#imgCh1').css('left','9%');
    $('#imgCh2').css('left','36.5%');
    $('#imgCh3').css('left','64%');

    $('.characterAsset').css('width','27%');
    $('#all-slim').removeClass('btn-dark');
    $('#all-slim').addClass('btn-light');
    $('#all-wide').addClass('btn-dark');
    $('#all-wide').removeClass('btn-light');
    $('#all-closewide').addClass('btn-dark');
    $('#all-closewide').removeClass('btn-light');
    $('#all-ultrawide').addClass('btn-dark');
    $('#all-ultrawide').removeClass('btn-light');
});

$('body').on('click', '#all-wide', function() {
    // positioning
    $('#imgCh1').css('left','7%');
    $('#imgCh2').css('left','34.5%');
    $('#imgCh3').css('left','62%');

    $('.characterAsset').css('width','31%');
    $('#all-wide').removeClass('btn-dark');
    $('#all-wide').addClass('btn-light');
    $('#all-slim').addClass('btn-dark');
    $('#all-slim').removeClass('btn-light');
    $('#all-closewide').addClass('btn-dark');
    $('#all-closewide').removeClass('btn-light');
    $('#all-ultrawide').addClass('btn-dark');
    $('#all-ultrawide').removeClass('btn-light');
});

$('body').on('click', '#all-closewide', function() {
    // positioning
    $('#imgCh1').css('left','10%');
    $('#imgCh2').css('left','34.5%');
    $('#imgCh3').css('left','59%');

    $('.characterAsset').css('width','31%');
    $('#all-closewide').removeClass('btn-dark');
    $('#all-closewide').addClass('btn-light');
    $('#all-slim').addClass('btn-dark');
    $('#all-slim').removeClass('btn-light');
    $('#all-wide').addClass('btn-dark');
    $('#all-wide').removeClass('btn-light');
    $('#all-ultrawide').addClass('btn-dark');
    $('#all-ultrawide').removeClass('btn-light');
});

$('body').on('click', '#all-ultrawide', function() {
    // positioning
    $('#imgCh1').css('left','5%');
    $('#imgCh2').css('left','30.5%');
    $('#imgCh3').css('left','56%');

    $('.characterAsset').css('width','39%');
    $('#all-ultrawide').removeClass('btn-dark');
    $('#all-ultrawide').addClass('btn-light');
    $('#all-wide').addClass('btn-dark');
    $('#all-wide').removeClass('btn-light');
    $('#all-slim').addClass('btn-dark');
    $('#all-slim').removeClass('btn-light');
    $('#all-closewide').addClass('btn-dark');
    $('#all-closewide').removeClass('btn-light');
});

$('body').on('change', '.audioRange', function() {
     var id = getSecondPart($(this).attr('id') , '-');
     volumeAudio(id,$(this).val());
});


// UI Button Events
$('body').on('click', '#btnFullscreen', function() {
    if (!window.screenTop && !window.screenY) {
        openFullscreen();
    }
    else{
    closeFullscreen();
    }
});

//shadow on/off
$('body').on('click', '#btnShadowOn', function() {
    $('.characterAsset').css('filter','drop-shadow(10px 9px 0px #0005)');
    $('#btnShadowOff').addClass('btn-dark');
    $('#btnShadowOff').removeClass('btn-light');
    $(this).removeClass('btn-dark');
    $(this).addClass('btn-light');
});

$('body').on('click', '#btnShadowOff', function() {
    $('.characterAsset').css('filter','none');
    $('#btnShadowOn').addClass('btn-dark');
    $('#btnShadowOn').removeClass('btn-light');
    $(this).removeClass('btn-dark');
    $(this).addClass('btn-light');
});

// audio profiles
$('body').on('click', '#btnAudio1', function() {
    volumeAudio('audioBGM',1);
    volumeAudio('audioSoundEffect',1);
    volumeAudio('audioSoundEffectConstant',1);
    volumeAudio('audioVoice',1);
});

$('body').on('click', '#btnAudio2', function() {
    volumeAudio('audioBGM',1);
    volumeAudio('audioSoundEffect',1);
    volumeAudio('audioSoundEffectConstant',0.1);
    volumeAudio('audioVoice',1);
});

// button click sound effect
$('body').on('click', 'button,#btnPause', function() {
    stopAudio('audioButton');
    playAudio('audioButton');
});

// Top Butons UI
$('body').on('click', '#btnCharacters', function() {
    showCharacter();
    $('#charactersMenu').fadeIn();
});

$('body').on('click', '#btnBackCharacters', function() {
    $('#charactersMenu').fadeOut();
});

$('body').on('click', '#btnSettings', function() {
    var loc = $('#imgBackground').attr('src');
    var filename = decodeURIComponent(loc.replace(/^.*[\\\/]/, ''));

    $('#settingName').text(filename);
    $('#settingDesc').text('Not Available');
    showSetting();
    $('#settingsMenu').fadeIn();
});

$('body').on('click', '#btnBackSettings', function() {
    $('#settingsMenu').fadeOut();
});

$('body').on('click', '#btnMusic', function() {
    showMusic();
    $('#bgmMenu').fadeIn();
});

$('body').on('click', '#btnBackBgm', function() {
    $('#bgmMenu').fadeOut();
});

$('body').on('click', '#btnDialogues', function() {
    // call show all dialogues function
    showDialogues();
    $('#dialogueMenu').fadeIn();
    
});

$('body').on('click', '#btnBackDialogue', function() {
    $('#dialogueMenu').fadeOut();
});

$('body').on('click', '.btnChProfile', function() {
    // empty first
    var chName = $(this).attr('src');
    chName = decodeURIComponent(chName.replace(/^.*[\\\/]/, ''));
    $('#chName').text(chName);
    $('#chDesc').text('Not Available');
    $('#chImg').attr('src',$(this).attr('src'));

    getChProfile($(this).attr('src'));
});

$('body').on('click', '#btnSet', function() {
    $('#menuSettings').toggle();
    
});

$('body').on('click', '#sakura', function() {
    if($('.uiMenuElement').css('display') == 'none'){
        $('.uiMenuElement').show();
        $('#menuSettings').hide();
    }
    else{
    $('.uiMenuElement').hide();
    }
    
});