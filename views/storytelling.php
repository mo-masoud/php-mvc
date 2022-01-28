<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Novel</title>
    <link rel="icon" href="images/VE Logo Icon.png">

    <!--Link to bootstrap 4 css-->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css" />
    <!--Link to google fonts-->
    <link href="libraries/Fonts/fontOswald.css" rel="stylesheet">
    <link href="libraries/Fonts/fontAnton.css" rel="stylesheet">
    <link href="libraries/Fonts/fontLalezar.css" rel="stylesheet">

    <!--
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">-->
    <!--
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">-->
    <!--
  <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">-->
    <!--preview font-->
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="custom-css/project-card.css" />
    <!--custom-js-->
    <script src="custom-js/globalVariables.js"></script>

    <style>
    body {
        background-color: #242424;

        font-family: 'Oswald', sans-serif;
    }

    header {
        background-color: white;
        border-bottom: 6px solid #f38c05;

        font-family: 'Anton', sans-serif;
    }

    button {
        border-radius: 0% !important;
    }

    .bg-black {
        background-color: black;
    }

    .bg-black2 {
        background-color: #1a1a1a;
    }

    .bg-black3 {
        background-color: #2b2b2b;
    }

    .bg-black4 {
        background-color: #121212;
    }

    .bg-black5 {
        background-color: #262626;
    }

    .bg-black6 {
        background-color: #0d0d0d;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Anton', sans-serif;
    }

    /*important for height*/
    html,
    body {
        height: 100%;
    }

    .innerShadow {
        -webkit-box-shadow: inset 0px 0px 52px 29px rgba(0, 0, 0, 0.33);
        -moz-box-shadow: inset 0px 0px 52px 29px rgba(0, 0, 0, 0.33);
        box-shadow: inset 0px 0px 52px 29px rgba(0, 0, 0, 0.33);
    }

    /* Heights important */

    /*h 0 instead of h 65 */
    .h-0 {
        height: 0% !important;
        max-height: 0% !important;
    }

    /*h 90 instead of h 25 */
    .h-90 {
        height: 90% !important;
        max-height: 90% !important;
    }

    .h-5 {
        height: 5% !important;
        max-height: 5% !important;
    }

    .h-10 {
        height: 10% !important;
        max-height: 10% !important;
    }

    .h-65 {
        height: 65% !important;
        max-height: 65% !important;
    }

    .h-25 {
        height: 25% !important;
        max-height: 25% !important;
    }

    .h-90 {
        height: 90% !important;
        max-height: 90% !important;
    }

    .w-35 {
        width: 35% !important;
    }

    .w-90 {
        width: 90% !important;
    }

    .assetTitle {
        cursor: pointer;
    }

    .assetarrow {
        filter: invert(100%);
    }

    .assetTitle:hover {
        /*add anything u want */
    }

    /* override flexwrap */
    .row {
        flex-wrap: nowrap !important;
    }

    /*scrollbar*/
    /* width */
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #e0a800;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .rotateimg180 {
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    /*Important Preview area*/
    #divPreview {
        position: relative;
        overflow: hidden !important;
        font-family: 'Lalezar', cursive;
    }

    #imgBackground {
        position: absolute;
        height: 100%;
        width: 100%;
    }

    #imgCh1 {
        position: absolute;
        height: 90%;
        width: 25%;
        left: 10%;
        bottom: 0%;

        filter: drop-shadow(10px 9px 0px #0005);
    }

    #imgCh2 {
        position: absolute;
        height: 90%;
        width: 25%;
        left: 37.5%;

        bottom: 0%;

        filter: drop-shadow(10px 9px 0px #0005);
    }

    #imgCh3 {
        position: absolute;
        height: 90%;
        width: 25%;
        right: 10%;
        bottom: 0%;

        filter: drop-shadow(10px 9px 0px #0005);
    }

    #title-outter {
        position: absolute;
        height: 7%;
        width: 100%;
        top: 0%;
        background-color:
            /*#2a202e*/
            rgba(41, 31, 45, 0.87);
        margin-left: 0%;

    }

    #title-outter img {
        position: absolute;
        width: 34%;
        height: 100%;

        z-index: 1;
    }

    #title-outter .left {
        height: 100%;
        width: 29%;
        float: left;
        z-index: 2;
        position: relative;
        text-align: center;

        margin-top: 0.5%;
        font-size: 2vh;
        line-height: 90%;
    }

    #title-outter .right {
        height: 100%;
        width: 71%;
        float: right;
        z-index: 2;
        position: relative;
    }

    #title-outter .right img {
        width: 4.5%;
        height: 90%;
        margin-right: 1.5%;
        position: relative;
        padding-top: 0.8%;
        padding-bottom: 0.2%;
    }


    #dialog-outter {
        position: absolute;
        background-image: url("utilities/storyteller/images/dialog.svg");
        background-size: cover;
        background-repeat: no-repeat;
        bottom: 5%;
        /*margin-left: 4%;*/
        margin-right: 2%;
        width: 98%;
        height: 30%;
    }

    #dialog-character {
        padding-left: 1rem !important;
        padding-top: .3rem !important;
        color: black;
        height: 23%;
        font-size: 2vh;
    }

    #dialog-text {
        padding-left: 2rem !important;

        color: white;
        height: 78%;
        width: 75%;
        font-size: 3.3vh;
        overflow: hidden;
    }

    #dialog-button {
        width: 25%;
        height: 75%;
        right: 0%;
        bottom: 0%;
        position: absolute;
    }

    #dialog-button img {
        height: 40%;
        width: 40%;
        bottom: 10%;
        right: 0%;
        position: absolute;
    }

    #imgItem-outter {
        position: absolute;
        background-image: url("utilities/storyteller/images/itembox.svg");
        background-size: cover;
        background-repeat: no-repeat;
        width: 34%;
        height: 52%;
        left: 32%;
        top: 10%;
        display: none;
    }

    #imgItem {
        width: 100%;
        height: 100%;
        padding: 5%;
    }

    #codeModal .modal-dialog {
        width: 70% !important;
        max-width: 70% !important;
    }

    /* hover while developing */
    img.resAsset:hover {
        opacity: 0.9;
        background-color: #f38c05;
        cursor: pointer;
    }

    .btnScene:hover {
        background-color: #f1f1f1 !important;
        cursor: pointer;
    }

    .btnScene img:hover {
        filter: grayscale(100%);
        transition-duration: 0.5s;

    }

    .btnAsset:hover {
        background-color: #555;
        cursor: pointer;
    }

    /* full screen modal */
    #myModal .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #myModal .modal-content {
        height: auto;
        min-height: 100%;
        border-radius: 0;
    }

    #myModal .modal-body {
        padding: 0px !important;
        height: 100%;
        width: 100%;
        max-height: 100%;
        max-width: 100%;
    }
    </style>

</head>

<body>

    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 text-light">
            <!--Scenes container-->
            <div class="col-2 bg-black2">
                <div class="row h-5 bg-black4">
                    <div class="col my-auto text-center">Scenes <span id="lblSceneNum" class="text-warning"></span>
                    </div>
                </div>

                <div class="row h-90" style="overflow-y: scroll !important;">
                    <div class="col w-100 mt-2" id="containerscenes">

                        <!-- comment -->
                        <div class="text-secondary text-center mt-5 pt-5">Select an episode from <span
                                data-toggle="modal" data-target="#episodeModal">episode manager</span></div>






                    </div>
                </div>

                <div class="row h-5 bg-black4">
                    <div class="col my-auto">
                        <button class="btn btn-sm btn-outline-dark" id="btnAddScene"><img
                                src="utilities/storyteller/images/new.svg" width="15px"
                                style="filter:invert(100%);"></button>
                        <button class="btn btn-sm btn-outline-dark" id="btnDupScene"><img
                                src="utilities/storyteller/images/duplicate.svg" width="15px"
                                style="filter:invert(100%);"></button>
                        <button class="btn btn-sm btn-outline-dark" id="btnDeleteScene"><img
                                src="utilities/storyteller/images/delete.svg" width="15px"
                                style="filter:invert(100%);"></button>
                        <button class="btn btn-sm btn-outline-dark d-none"><img
                                src="utilities/storyteller/images/uparrow.svg" width="15px"
                                style="filter:invert(100%);"></button>
                        <button class="btn btn-sm btn-outline-dark d-none"><img
                                src="utilities/storyteller/images/uparrow.svg" width="15px" style="filter:invert(100%);"
                                class="rotateimg180"></button>
                    </div>
                </div>
            </div>
            <!--/Scenes container-->

            <!--Main container-->
            <div class="col-8">
                <!--new episode container-->
                <div class="row h-5">
                    <div class="col my-auto">
                        <img id="btnApplyChanges" class="mr-2" src="utilities/storyteller/images/save.svg" width="30px"
                            style="cursor:pointer;">
                        <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#episodeModal">Episode
                            Manager</button>

                        <span id="txtCopy" class="ml-2"></span>

                    </div>
                    <div class="col my-auto text-right">
                        <img id="btnShowCode" class="mr-2" src="utilities/storyteller/images/code.svg" width="30px"
                            style="filter:invert(100%); cursor:pointer;" data-toggle="modal" data-target="#codeModal">
                        <img id="btnShowHide" class="mr-2" src="utilities/storyteller/images/show.svg" width="30px"
                            style="filter:invert(100%); cursor:pointer;">
                        <img id="btnFullscreen" class="d-none" src="utilities/storyteller/images/fullscreen.svg"
                            width="20px" style="filter:invert(100%); cursor:pointer;" data-toggle="modal"
                            data-target="#myModal">
                    </div>
                </div>
                <!--/new episode container-->

                <!--preview container-->
                <div class="row h-65 bg-black6" id="preview-outter">
                    <div class="col p-0" id="divPreview">
                        <img src="#" id="imgBackground" class="resAsset">
                        <img src="#" id="imgCh1" class="resAsset">
                        <img src="#" id="imgCh2" class="resAsset">
                        <img src="#" id="imgCh3" class="resAsset">
                        <div id="backgroundEffect" class="resAsset"></div>
                        <div id="imgItem-outter"><img src="" id="imgItem" class="resAsset"></div>
                        <div id="dialog-outter">
                            <div id="dialog-character"></div>
                            <div id="dialog-text">

                            </div>
                            <div id="dialog-button"><img src="utilities/storyteller/images/dialog-button.svg"
                                    id="btnNext"></div>
                        </div>
                        <div id="title-outter">
                            <img src="utilities/storyteller/images/title.svg">
                            <div class="left">
                                <span id="txtEP"></span><br>
                                <span id="txtTitle"></span>
                            </div>
                            <div class="right">
                                <img id="btnPause" src="utilities/storyteller/images/pause.svg">

                                <img id="btnCharacters" src="utilities/storyteller/images/team.svg"
                                    style="filter:invert(100%);">
                                <img id="btnSettings" src="utilities/storyteller/images/map.svg"
                                    style="filter:invert(100%);">
                                <img id="btnMusic" src="utilities/storyteller/images/music.svg"
                                    style="filter:invert(100%);">
                                <img id="btnDialogues" class="mr-2" src="utilities/storyteller/images/dialogues.svg"
                                    style="filter:invert(100%);">

                            </div>
                        </div>
                    </div>
                </div>
                <!--/preview container-->

                <!--settings container-->
                <div class="row h-5 bg-black2">

                    <div class="col">
                        <button id="btnLoop" class="btn btn-sm btn-warning mb-3">Loop ON/OFF</button>
                        <audio id="audioPlayer" controls class="w-75 mt-1" style="height: 30px;">
                            <source src="" type="audio/ogg">
                        </audio>

                    </div>

                    <div class="col text-right">
                        <button id="btnItem" class="btn btn-sm btn-warning resAsset">Item</button>
                        <button id="btnBGM" class="btn btn-sm btn-warning resAsset">BGM</button>
                        <button id="btnSoundEffect" class="btn btn-sm btn-warning resAsset">Sound Effect</button>
                        <button id="btnSoundEffectConstant" class="btn btn-sm btn-warning resAsset">Sound Effect
                            (Constant)</button>
                        <button id="btnVoice" class="btn btn-sm btn-warning resAsset">Voice</button>
                    </div>
                </div>
                <div id="settings-outter" class="row h-25 py-2" style="overflow-y: scroll !important;">



                    <div class="col-4">

                        <div><input type="text" class="form-control form-control-sm" id="txtName"
                                placeholder="Character name"></div>
                        <div class="mt-2">TEMP
                            <input type="text" class="form-control-sm w-25 h-100 align-top txtTempName"
                                placeholder="temp 1" id="txtTempName1">
                            <input type="text" class="form-control-sm w-25 h-100 align-top txtTempName"
                                placeholder="temp 2" id="txtTempName2">
                            <input type="text" class="form-control-sm w-25 h-100 align-top txtTempName"
                                placeholder="temp 3" id="txtTempName3">
                            <button class="btn btn-sm btn-secondary h-100 align-bottom" id="btnEnableTemp">En</button>
                        </div>




                    </div>

                    <div class="col-8 pl-0">
                        <div><textarea class="form-control" rows="2" id="txtDialogue"
                                placeholder="Character dialogue"></textarea></div>

                    </div>

                </div>
                <!--/settings container-->

            </div>
            <!--/Main container-->

            <!--resources container-->
            <div class="col-2 bg-black2">
                <div class="row h-5">
                    <div class="col my-auto text-center">Assets</div>
                </div>
                <div class="row h-90" style="overflow-y: scroll !important;">
                    <div class="col px-0 bg-black4" id="accordion">

                        <!--Heading-->
                        <div class="card rounded-0 mb-1 bg-black5">
                            <div class="assetTitle card-header collapsed" id="heading1" data-toggle="collapse"
                                data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <div class="mb-0 row">
                                    <div class="col">Characters</div>
                                    <div class="col text-right"><img src="utilities/storyteller/images/arrowdown.svg"
                                            width="15px" class="assetarrow"></div>
                                </div>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion"
                                style="">
                                <div id="containercharacters" class="card-body bg-black4 innerShadow p-0">
                                    <!--item 1-->
                                    <div class=" text-center pt-3 border-bottom border-secondary">
                                        <img src="utilities/storyteller/images/ch1.png" class="card-img-top w-35"
                                            alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Monkey D. Luffy.png</p>
                                        </div>
                                    </div>
                                    <!--/item 1-->

                                </div>
                            </div>

                        </div>
                        <!--/Heading-->

                        <!--Heading-->
                        <div class="card rounded-0 mb-1 bg-black5">
                            <div class="assetTitle card-header collapsed" id="heading2" data-toggle="collapse"
                                data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <div class="mb-0 row">
                                    <div class="col">Settings</div>
                                    <div class="col text-right"><img src="utilities/storyteller/images/arrowdown.svg"
                                            width="15px" class="assetarrow"></div>
                                </div>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion"
                                style="">
                                <div id="containersettings" class="card-body bg-black4 innerShadow p-0">
                                    <!--item 1-->
                                    <div class=" text-center pt-3 border-bottom border-secondary">
                                        <img src="utilities/storyteller/images/background.jpg" class="card-img-top w-90"
                                            alt="...">
                                        <div class="card-body">
                                            <p class="card-text">Mother Sea.jpg</p>
                                        </div>
                                    </div>
                                    <!--/item 1-->

                                </div>
                            </div>

                        </div>
                        <!--/Heading-->

                        <!--Heading-->
                        <div class="card rounded-0 mb-1 bg-black5">
                            <div class="assetTitle card-header collapsed" id="heading6" data-toggle="collapse"
                                data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                <div class="mb-0 row">
                                    <div class="col">Items</div>
                                    <div class="col text-right"><img src="utilities/storyteller/images/arrowdown.svg"
                                            width="15px" class="assetarrow"></div>
                                </div>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion"
                                style="">
                                <div id="containeritems" class="card-body bg-black4 innerShadow p-0">
                                    <!--item 1-->
                                    <div class=" text-center pt-3 border-bottom border-secondary">
                                        <img src="utilities/storyteller/images/item.png" class="card-img-top w-90"
                                            alt="...">
                                        <div class="card-body">
                                            <p class="card-text">item.png</p>
                                        </div>
                                    </div>
                                    <!--/item 1-->

                                </div>
                            </div>

                        </div>
                        <!--/Heading-->

                        <!--Heading-->
                        <div class="card rounded-0 mb-1 bg-black5">
                            <div class="assetTitle card-header collapsed" id="heading3" data-toggle="collapse"
                                data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <div class="mb-0 row">
                                    <div class="col">BGM</div>
                                    <div class="col text-right"><img src="utilities/storyteller/images/arrowdown.svg"
                                            width="15px" class="assetarrow"></div>
                                </div>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion"
                                style="">
                                <div id="containerbgm" class="card-body bg-black4 innerShadow p-0">
                                    <!--item 1-->
                                    <div class=" text-center pt-3 border-bottom border-secondary">
                                        <img src="utilities/storyteller/images/music.svg" class="card-img-top w-35"
                                            alt="..." style="filter: invert(100%);">
                                        <div class="card-body">
                                            <p class="card-text">Mother Sea.wav</p>
                                        </div>
                                    </div>
                                    <!--/item 1-->

                                </div>
                            </div>

                        </div>
                        <!--/Heading-->

                        <!--Heading-->
                        <div class="card rounded-0 mb-1 bg-black5">
                            <div class="assetTitle card-header collapsed" id="heading4" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <div class="mb-0 row">
                                    <div class="col">Sound Effects</div>
                                    <div class="col text-right"><img src="utilities/storyteller/images/arrowdown.svg"
                                            width="15px" class="assetarrow"></div>
                                </div>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion"
                                style="">
                                <div id="containersoundeffects" class="card-body bg-black4 innerShadow p-0">
                                    <!--item 1-->
                                    <div class=" text-center pt-3 border-bottom border-secondary">
                                        <img src="utilities/storyteller/images/music.svg" class="card-img-top w-35"
                                            alt="..." style="filter: invert(100%);">
                                        <div class="card-body">
                                            <p class="card-text">Wind.mp3</p>
                                        </div>
                                    </div>
                                    <!--/item 1-->

                                </div>
                            </div>

                        </div>
                        <!--/Heading-->

                        <!--Heading-->
                        <div class="card rounded-0 mb-1 bg-black5">
                            <div class="assetTitle card-header collapsed" id="heading5" data-toggle="collapse"
                                data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <div class="mb-0 row">
                                    <div class="col">Voice</div>
                                    <div class="col text-right"><img src="utilities/storyteller/images/arrowdown.svg"
                                            width="15px" class="assetarrow"></div>
                                </div>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion"
                                style="">
                                <div id="containervoice" class="card-body bg-black4 innerShadow p-0">
                                    <!--item 1-->
                                    <div class=" text-center pt-3 border-bottom border-secondary">
                                        <img src="utilities/storyteller/images/music.svg" class="card-img-top w-35"
                                            alt="..." style="filter: invert(100%);">
                                        <div class="card-body">
                                            <p class="card-text">EP1 V1.mp3</p>
                                        </div>
                                    </div>
                                    <!--/item 1-->

                                </div>
                            </div>

                        </div>
                        <!--/Heading-->

                    </div>

                </div>
                <div class="row h-5">
                    <div class="col my-auto">
                        <a class="btn btn-sm btn-warning" href="/uploadAsset?path=<?php echo $_GET['story']; ?>"
                            target="_blank">New</a>
                    </div>
                    <img id="btnRefreshAsset" class="mr-2 p-1" src="utilities/storyteller/images/refresh.svg"
                        width="30px" style="filter:invert(100%); cursor:pointer;">
                </div>
            </div>
            <!--/resources container-->
        </div>
    </div>

    <!--IMPORTANT MODALS ************************************************************************************-->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div id="sceneFullscreen" class="h-100 w-100"></div>
    </div>

    <div class="modal fade" id="codeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-black2 text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Episode XML Code</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea spellcheck="false" rows="20" class="w-100 bg-dark text-light" id="txtXMLCode" readonly>
              </textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning d-none" id="btnSaveCode">Apply Changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="episodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-black2 text-light">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Episodes Manager</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-4">
                            <label>Episode No.</label> <br><input type="number" id="txtEPNum">
                        </div>
                        <div class="col-8">
                            <label>Episode Name</label> <br><input type="text" class="w-100" id="txtEPName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-sm btn-warning my-2" id="btnCreateEpisode">Create
                                Episode</button><br>
                            <label>Select your episode</label><br>
                            <select class="w-100" id="txtEpisodes">

                            </select>
                        </div>
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btnEditEpisode" data-dismiss="modal">Edit
                        Episode</button>
                    <button type="button" class="btn btn-warning" id="btnPlayEpisode">Play Episode</button>
                </div>
            </div>
        </div>
    </div>



    <!--Link to jquery js-->
    <script src="libraries/jquery/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>

    <!--Link to bootstrap 4 js-->

    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

    <!--Custom JS-->
    <script src="custom-js/XMLWriter_src/XMLWriter.js"></script>
    <script src="custom-js/FileSaver.js-master/dist/FileSaver.js"></script>
    <script src="custom-js/exporter.js"></script>

    <!--game engine js-->
    <script src="utilities/storyteller/js/ui.js"></script>
    <script src="utilities/storyteller/js/creator.js"></script>

</body>

</html>