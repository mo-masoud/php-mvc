// insert elements
$('body').on('click', '#btnH1', function() {
    $('#textEditor').append(`
    <input type="text" class="w-100" style="font-size: xx-large ;" placeholder="Main Title">
    <div contenteditable="false" class="optionsMenu d-none bg-light">
        <div class="container-fluid py-3 border">
        <div class="row">
            <div class="col">
            <button class="btn btn-sm btn-outline-dark btnBold"><b>B</b></button>
            <button class="btn btn-sm btn-outline-dark btnUnderline"><u>U</u></button>
            <button class="btn btn-sm btn-outline-dark btnItalic mr-3"><i>I</i></button>

            <button class="btn btn-sm btn-outline-dark btnLeft">L</button>
            <button class="btn btn-sm btn-outline-dark btnCenter">C</button>
            <button class="btn btn-sm btn-outline-dark btnRight mr-3">R</button>

            <button class="btn btn-sm btn-dark bg-black btnBlack">Black</button>
            <button class="btn btn-sm btn-warning btnYellow">Yellow</button>
            <button class="btn btn-sm btn-secondary btnGray">Gray</button>
            </div>
        </div>
        </div>
    </div>
    `);
});

$('body').on('click', '#btnH2', function() {
    $('#textEditor').append(`
    <input type="text" class="w-100" style="font-size: x-large ;" placeholder="Title">
    <div contenteditable="false" class="optionsMenu d-none bg-light">
        <div class="container-fluid py-3 border">
        <div class="row">
            <div class="col">
            <button class="btn btn-sm btn-outline-dark btnBold"><b>B</b></button>
            <button class="btn btn-sm btn-outline-dark btnUnderline"><u>U</u></button>
            <button class="btn btn-sm btn-outline-dark btnItalic mr-3"><i>I</i></button>

            <button class="btn btn-sm btn-outline-dark btnLeft">L</button>
            <button class="btn btn-sm btn-outline-dark btnCenter">C</button>
            <button class="btn btn-sm btn-outline-dark btnRight mr-3">R</button>

            <button class="btn btn-sm btn-dark bg-black btnBlack">Black</button>
            <button class="btn btn-sm btn-warning btnYellow">Yellow</button>
            <button class="btn btn-sm btn-secondary btnGray">Gray</button>
            </div>
        </div>
        </div>
    </div>
    `);
});

$('body').on('click', '#btnH3', function() {
    $('#textEditor').append(`
    <input type="text" class="w-100" style="font-size: large ;" placeholder="Sub-Title">
    <div contenteditable="false" class="optionsMenu d-none bg-light">
        <div class="container-fluid py-3 border">
        <div class="row">
            <div class="col">
            <button class="btn btn-sm btn-outline-dark btnBold"><b>B</b></button>
            <button class="btn btn-sm btn-outline-dark btnUnderline"><u>U</u></button>
            <button class="btn btn-sm btn-outline-dark btnItalic mr-3"><i>I</i></button>

            <button class="btn btn-sm btn-outline-dark btnLeft">L</button>
            <button class="btn btn-sm btn-outline-dark btnCenter">C</button>
            <button class="btn btn-sm btn-outline-dark btnRight mr-3">R</button>

            <button class="btn btn-sm btn-dark bg-black btnBlack">Black</button>
            <button class="btn btn-sm btn-warning btnYellow">Yellow</button>
            <button class="btn btn-sm btn-secondary btnGray">Gray</button>
            </div>
        </div>
        </div>
    </div>
    `);
});

$('body').on('click', '#btnH0', function() {
    $('#textEditor').append(`
    <input type="text" class="w-100" style="font-size: medium ;" placeholder="Normal Text">
    <div contenteditable="false" class="optionsMenu d-none bg-light">
        <div class="container-fluid py-3 border">
        <div class="row">
            <div class="col">
            <button class="btn btn-sm btn-outline-dark btnBold"><b>B</b></button>
            <button class="btn btn-sm btn-outline-dark btnUnderline"><u>U</u></button>
            <button class="btn btn-sm btn-outline-dark btnItalic mr-3"><i>I</i></button>

            <button class="btn btn-sm btn-outline-dark btnLeft">L</button>
            <button class="btn btn-sm btn-outline-dark btnCenter">C</button>
            <button class="btn btn-sm btn-outline-dark btnRight mr-3">R</button>

            <button class="btn btn-sm btn-dark bg-black btnBlack">Black</button>
            <button class="btn btn-sm btn-warning btnYellow">Yellow</button>
            <button class="btn btn-sm btn-secondary btnGray">Gray</button>
            </div>
        </div>
        </div>
    </div>
    `);
});

// show and hide options
$('body').on('mouseenter', 'input', function() {
    $('.optionsMenu').addClass("d-none");
    $(this).next().removeClass("d-none");
});

$('body').on('mouseleave', '.optionsMenu', function() {
    $(this).addClass("d-none");
});

// bold
$('body').on('click', '.btnBold', function() {
    if ($(this).hasClass('btn-outline-dark')){
        $(this).closest('.optionsMenu').prev().css("font-weight","bold");
        $(this).removeClass('btn-outline-dark');
        $(this).addClass('btn-dark');
    }
    else{
        $(this).closest('.optionsMenu').prev().css("font-weight","normal");
        $(this).removeClass('btn-dark');
        $(this).addClass('btn-outline-dark');
    }
});
// underline
$('body').on('click', '.btnUnderline', function() {
    if ($(this).hasClass('btn-outline-dark')){
        $(this).closest('.optionsMenu').prev().css("text-decoration","underline");
        $(this).removeClass('btn-outline-dark');
        $(this).addClass('btn-dark');
    }
    else{
        $(this).closest('.optionsMenu').prev().css("text-decoration","none");
        $(this).removeClass('btn-dark');
        $(this).addClass('btn-outline-dark');
    }
});
// italic
$('body').on('click', '.btnItalic', function() {
    if ($(this).hasClass('btn-outline-dark')){
        $(this).closest('.optionsMenu').prev().css("font-style","italic");
        $(this).removeClass('btn-outline-dark');
        $(this).addClass('btn-dark');
    }
    else{
        $(this).closest('.optionsMenu').prev().css("font-style","normal");
        $(this).removeClass('btn-dark');
        $(this).addClass('btn-outline-dark');
    }
});

// alignments
$('body').on('click', '.btnLeft', function() {
    $(this).closest('.optionsMenu').prev().css("text-align","left");
});

$('body').on('click', '.btnRight', function() {
    $(this).closest('.optionsMenu').prev().css("text-align","right");
});

$('body').on('click', '.btnCenter', function() {
    $(this).closest('.optionsMenu').prev().css("text-align","center");
});

// colors
$('body').on('click', '.btnBlack', function() {
    $(this).closest('.optionsMenu').prev().css("color","black");
});

$('body').on('click', '.btnYellow', function() {
    $(this).closest('.optionsMenu').prev().css("color","#ffc107");
});

$('body').on('click', '.btnGray', function() {
    $(this).closest('.optionsMenu').prev().css("color","#6c757d");
});

$('body').on('click', '#btnDownload', function() {
    var filename = $('#txtFilename').val()+".vehtml";
    exportTextFile(filename, $('#textEditor').html());
});

$('body').on('click', '#btnSave', function() {
    var filename = $('#txtFilename').val();
    $('[type=text], textarea').each(function(){ this.defaultValue = this.value; }); // to keep value
    var fileContent = $('#textEditor').html();
    var targetPath = $('#txtTargetPath').text();

    // check if there is .vehtml
    if($('#txtTargetPath').text().includes('.vehtml')){
        var replacefile = "/"+$('#txtTargetPath').text().split('/').pop();
        targetPath = targetPath.replace(replacefile,"");
    }

    // ajax request
    $.ajax({
        url: 'controllers/editorController.php',
        data: {function2call: 'saveVEFile',fileName:filename, content:fileContent, path:targetPath},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            if (data == 1){ // file already exists
                // show override dialog box
                document.getElementById("btnNewOverwrite").click();
            }
            else{
            alert(data);
            }

            },
            error: function(response){

            }
            });
});

$('body').on('click', '#btnOver', function() {
    var filename = $('#txtFilename').val();
    $('[type=text], textarea').each(function(){ this.defaultValue = this.value; }); // to keep value
    var fileContent = $('#textEditor').html();
    var targetPath = $('#txtTargetPath').text();
    
    // check if there is .vehtml
    if($('#txtTargetPath').text().includes('.vehtml')){
        var replacefile = "/"+$('#txtTargetPath').text().split('/').pop();
        targetPath = targetPath.replace(replacefile,"");
    }
    
    //alert(targetPath);
    // ajax request
    $.ajax({
        url: 'controllers/editorController.php',
        data: {function2call: 'overwriteVEFile',fileName:filename, content:fileContent, path:targetPath},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            alert(data);
            document.getElementById("btnModalClose").click();

            },
            error: function(response){

            }
            });
});

$('body').on('change', '#txtTemp', function() {
    var filepath = tempPath +'/'+$('#txtTemp').val();
    //alert(filepath);
    // ajax request
    $.ajax({
        url: filepath,
        data: {},
        type: 'post',
        dataType: "text",
        success: function (data) {
            // action to be done
            $('#textEditor').html(data);
            

            },
            error: function(response){

            }
            });
});
