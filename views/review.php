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
    <!--None preview font-->
    <!--
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">-->
    <!--None preview font-->
    <!--
  <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">-->
    <!--preview font-->
    <!--
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">-->
    <!--episode name font main menu-->
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="custom-css/project-card.css" />
    <!--custom-js-->

    <style>
    input[type="range"] {
        -webkit-appearance: none;
        background: white;
        background-size: 150px 10px;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
        outline: none;
        height: 10px;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        background: black;
        position: relative;
        z-index: 3;
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.3);
    }

    /*remove focus after click */
    button:focus {
        outline: none;
    }

    /*VERY IMPORTANT Enable/Disable borders*/
    img[src=""] {
        display: none;
    }

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

    .h-93 {
        height: 93% !important;
        max-height: 93% !important;
    }

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

    /*Important Preview area (Assets!)*/
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
        width: 31%;
        left: 7%;
        bottom: 0%;

        filter: drop-shadow(10px 9px 0px #0005);
    }

    #imgCh2 {
        position: absolute;
        height: 90%;
        width: 31%;
        left: 34.5%;

        bottom: 0%;

        filter: drop-shadow(10px 9px 0px #0005);
    }

    #imgCh3 {
        position: absolute;
        height: 90%;
        width: 31%;
        left: 62%;
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
            rgba(20, 20, 40, 0.87);
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
        font-size: 3vh;
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

    .bg-title {
        background-image: url("utilities/storyteller/images/dialogTitle.svg");
        background-size: cover;
        background-repeat: no-repeat;

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
        padding-left: 1.7rem !important;
        padding-top: .1rem !important;
        color: black;
        height: 23%;
        font-size: 4vh;
    }

    #dialog-text {
        padding-left: 2rem !important;

        color: white;
        height: 78%;
        width: 75%;
        font-size: 5.3vh;
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


    .bg-loading {
        /*background-image: url("utilities/storyteller/images/loading.png");*/
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg-dialogue {
        background-image: url("utilities/storyteller/images/menu.svg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding-left: 9%;
        padding-right: 9%;
        padding-top: 5%;
        padding-bottom: 5%;
    }

    .bg-dialogue .details {
        padding-left: 2%;
    }

    .bg-menu {
        background-color: rgba(0, 0, 0, 0.7);
    }

    /*breathing efffect */
    .characterAsset {
        -webkit-animation: breathing 6s ease-out infinite normal;
        animation: breathing 6s ease-out infinite normal;
        -webkit-font-smoothing: antialiased;
    }

    .backgroundAsset {
        -webkit-animation: breathing 7s ease-out infinite normal;
        animation: breathing 7s ease-out infinite normal;
        -webkit-font-smoothing: antialiased;
    }

    #btnNext {
        -webkit-animation: breathing 1s ease-out infinite normal;
        animation: breathing 1s ease-out infinite normal;
        -webkit-font-smoothing: antialiased;
    }


    @-webkit-keyframes breathing {
        0% {
            -webkit-transform: scale(1.01);
            transform: scale(1.01);
        }

        25% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        60% {
            -webkit-transform: scale(1.01);
            transform: scale(1.01);
        }

        100% {
            -webkit-transform: scale(1.01);
            transform: scale(1.01);
        }
    }

    @keyframes breathing {
        0% {
            -webkit-transform: scale(1.01);
            -ms-transform: scale(1.01);
            transform: scale(1.01);
        }

        25% {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        60% {
            -webkit-transform: scale(1.01);
            -ms-transform: scale(1.01);
            transform: scale(1.01);
        }

        100% {
            -webkit-transform: scale(1.01);
            -ms-transform: scale(1.01);
            transform: scale(1.01);
        }
    }

    /*Text sizing */
    .display-5 {
        font-size: 1.5rem;
        font-weight: 300;
        line-height: 1.2;
    }

    .img-bottom img {
        vertical-align: bottom;
    }

    .btnChProfile:hover {
        opacity: 0.7;
        cursor: pointer;
    }

    .menuButtons {}

    .box {
        background: linear-gradient(to right, gray, white);
        color: black;
        --width: 250px;
        --height: calc(var(--width) / 4.6);
        width: var(--width);
        height: var(--height);
        text-align: center;
        line-height: var(--height);
        font-size: calc(var(--height) / 2.5);
        /*font-family: sans-serif;*/
        letter-spacing: 0.2em;
        border: 1px solid gray;
        border-radius: 2em;
        transform: perspective(500px) rotateY(15deg);
        text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
        transition: 0.5s;
        position: relative;
        overflow: hidden;
    }

    .box:hover {
        transform: perspective(500px) rotateY(-15deg);
        text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
        box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .box::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, transparent, white, transparent);
        left: -100%;
        transition: 0.5s;
    }

    .box:hover::before {
        left: 100%;
    }

    .box2 {
        background: linear-gradient(to right, gray, white);
        color: black;
        --width: 2000p;
        --height: calc(var(--width) / 4.6);
        width: var(--width);
        height: var(--height);
        text-align: center;
        line-height: var(--height);
        font-size: calc(var(--height) / 2.5);
        font-family: sans-serif;
        letter-spacing: 0.2em;
        border: 1px solid gray;
        border-radius: 2em;
        transform: perspective(500px) rotateY(-15deg);
        text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
        transition: 0.5s;
        position: relative;
        overflow: hidden;
    }

    .box2:hover {
        transform: perspective(500px) rotateY(15deg);
        text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
        box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .box2::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, transparent, white, transparent);
        left: -100%;
        transition: 0.5s;
    }

    .box2:hover::before {
        left: 100%;
    }

    .box3 {
        background: linear-gradient(to right, gold, darkorange);
        color: black;
        --width: 2000p;
        --height: calc(var(--width) / 4.6);
        width: var(--width);
        height: var(--height);
        text-align: center;
        line-height: var(--height);
        font-size: calc(var(--height) / 2.5);
        font-family: sans-serif;
        letter-spacing: 0.2em;
        border: 1px solid darkgoldenrod;
        border-radius: 2em;
        transform: perspective(500px) rotateY(15deg);
        text-shadow: 6px 3px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 2px 0 0 5px rgba(0, 0, 0, 0.2);
        transition: 0.5s;
        position: relative;
        overflow: hidden;
    }

    .box3:hover {
        transform: perspective(500px) rotateY(-15deg);
        text-shadow: -6px 3px 2px rgba(0, 0, 0, 0.2);
        box-shadow: -2px 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .box3::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, transparent, white, transparent);
        left: -100%;
        transition: 0.5s;
    }

    .box3:hover::before {
        left: 100%;
    }
    </style>

</head>

<body>

    <!--Opening/Ending Background-->
    <div id="mainMenu" class="container-fluid h-100 position-fixed bg-loading" style="z-index: 1050;">
        <div class="row align-items-center h-100">
            <div class="col h-100 p-0">

                <canvas id="sakura" style="padding:0; margin:0; mix-blend-mode: screen; opacity: 1.0;"></canvas>
                <div class="btnbg">
                </div>

                <!-- sakura shader -->
                <script id="sakura_point_vsh" type="x-shader/x_vertex">
                    uniform mat4 uProjection;
uniform mat4 uModelview;
uniform vec3 uResolution;
uniform vec3 uOffset;
uniform vec3 uDOF;  //x:focus distance, y:focus radius, z:max radius
uniform vec3 uFade; //x:start distance, y:half distance, z:near fade start

attribute vec3 aPosition;
attribute vec3 aEuler;
attribute vec2 aMisc; //x:size, y:fade

varying vec3 pposition;
varying float psize;
varying float palpha;
varying float pdist;

//varying mat3 rotMat;
varying vec3 normX;
varying vec3 normY;
varying vec3 normZ;
varying vec3 normal;

varying float diffuse;
varying float specular;
varying float rstop;
varying float distancefade;

void main(void) {
    // Projection is based on vertical angle
    vec4 pos = uModelview * vec4(aPosition + uOffset, 1.0);
    gl_Position = uProjection * pos;
    gl_PointSize = aMisc.x * uProjection[1][1] / -pos.z * uResolution.y * 0.5;
    
    pposition = pos.xyz;
    psize = aMisc.x;
    pdist = length(pos.xyz);
    palpha = smoothstep(0.0, 1.0, (pdist - 0.1) / uFade.z);
    
    vec3 elrsn = sin(aEuler);
    vec3 elrcs = cos(aEuler);
    mat3 rotx = mat3(
        1.0, 0.0, 0.0,
        0.0, elrcs.x, elrsn.x,
        0.0, -elrsn.x, elrcs.x
    );
    mat3 roty = mat3(
        elrcs.y, 0.0, -elrsn.y,
        0.0, 1.0, 0.0,
        elrsn.y, 0.0, elrcs.y
    );
    mat3 rotz = mat3(
        elrcs.z, elrsn.z, 0.0, 
        -elrsn.z, elrcs.z, 0.0,
        0.0, 0.0, 1.0
    );
    mat3 rotmat = rotx * roty * rotz;
    normal = rotmat[2];
    
    mat3 trrotm = mat3(
        rotmat[0][0], rotmat[1][0], rotmat[2][0],
        rotmat[0][1], rotmat[1][1], rotmat[2][1],
        rotmat[0][2], rotmat[1][2], rotmat[2][2]
    );
    normX = trrotm[0];
    normY = trrotm[1];
    normZ = trrotm[2];
    
    const vec3 lit = vec3(0.6917144638660746, 0.6917144638660746, -0.20751433915982237);
    
    float tmpdfs = dot(lit, normal);
    if(tmpdfs < 0.0) {
        normal = -normal;
        tmpdfs = dot(lit, normal);
    }
    diffuse = 0.4 + tmpdfs;
    
    vec3 eyev = normalize(-pos.xyz);
    if(dot(eyev, normal) > 0.0) {
        vec3 hv = normalize(eyev + lit);
        specular = pow(max(dot(hv, normal), 0.0), 20.0);
    }
    else {
        specular = 0.0;
    }
    
    rstop = clamp((abs(pdist - uDOF.x) - uDOF.y) / uDOF.z, 0.0, 1.0);
    rstop = pow(rstop, 0.5);
    //-0.69315 = ln(0.5)
    distancefade = min(1.0, exp((uFade.x - pdist) * 0.69315 / uFade.y));
}
</script>
                <script id="sakura_point_fsh" type="x-shader/x_fragment">
                    #ifdef GL_ES
//precision mediump float;
precision highp float;
#endif

uniform vec3 uDOF;  //x:focus distance, y:focus radius, z:max radius
uniform vec3 uFade; //x:start distance, y:half distance, z:near fade start

const vec3 fadeCol = vec3(0.08, 0.03, 0.06);

varying vec3 pposition;
varying float psize;
varying float palpha;
varying float pdist;

//varying mat3 rotMat;
varying vec3 normX;
varying vec3 normY;
varying vec3 normZ;
varying vec3 normal;

varying float diffuse;
varying float specular;
varying float rstop;
varying float distancefade;

float ellipse(vec2 p, vec2 o, vec2 r) {
    vec2 lp = (p - o) / r;
    return length(lp) - 1.0;
}

void main(void) {
    vec3 p = vec3(gl_PointCoord - vec2(0.5, 0.5), 0.0) * 2.0;
    vec3 d = vec3(0.0, 0.0, -1.0);
    float nd = normZ.z; //dot(-normZ, d);
    if(abs(nd) < 0.0001) discard;
    
    float np = dot(normZ, p);
    vec3 tp = p + d * np / nd;
    vec2 coord = vec2(dot(normX, tp), dot(normY, tp));
    
    //angle = 15 degree
    const float flwrsn = 0.258819045102521;
    const float flwrcs = 0.965925826289068;
    mat2 flwrm = mat2(flwrcs, -flwrsn, flwrsn, flwrcs);
    vec2 flwrp = vec2(abs(coord.x), coord.y) * flwrm;
    
    float r;
    if(flwrp.x < 0.0) {
        r = ellipse(flwrp, vec2(0.065, 0.024) * 0.5, vec2(0.36, 0.96) * 0.5);
    }
    else {
        r = ellipse(flwrp, vec2(0.065, 0.024) * 0.5, vec2(0.58, 0.96) * 0.5);
    }
    
    if(r > rstop) discard;
    
    vec3 col = mix(vec3(1.0, 0.8, 0.75), vec3(1.0, 0.9, 0.87), r);
    float grady = mix(0.0, 1.0, pow(coord.y * 0.5 + 0.5, 0.35));
    col *= vec3(1.0, grady, grady);
    col *= mix(0.8, 1.0, pow(abs(coord.x), 0.3));
    col = col * diffuse + specular;
    
    col = mix(fadeCol, col, distancefade);
    
    float alpha = (rstop > 0.001)? (0.5 - r / (rstop * 2.0)) : 1.0;
    alpha = smoothstep(0.0, 1.0, alpha) * palpha;
    
    gl_FragColor = vec4(col * 0.5, alpha);
}
</script>
                <!-- effects -->
                <script id="fx_common_vsh" type="x-shader/x_vertex">
                    uniform vec3 uResolution;
attribute vec2 aPosition;

varying vec2 texCoord;
varying vec2 screenCoord;

void main(void) {
    gl_Position = vec4(aPosition, 0.0, 1.0);
    texCoord = aPosition.xy * 0.5 + vec2(0.5, 0.5);
    screenCoord = aPosition.xy * vec2(uResolution.z, 1.0);
}
</script>
                <script id="bg_fsh" type="x-shader/x_fragment">
                    #ifdef GL_ES
//precision mediump float;
precision highp float;
#endif

uniform vec2 uTimes;

varying vec2 texCoord;
varying vec2 screenCoord;

void main(void) {
    vec3 col;
    float c;
    vec2 tmpv = texCoord * vec2(0.8, 1.0) - vec2(0.95, 1.0);
    c = exp(-pow(length(tmpv) * 1.8, 2.0));
    col = mix(vec3(0.02, 0.0, 0.03), vec3(0.96, 0.98, 1.0) * 1.5, c);
    // very important spot
    gl_FragColor = vec4(col * 0.05, 1.0);
}
</script>
                <script id="fx_brightbuf_fsh" type="x-shader/x_fragment">
                    #ifdef GL_ES
//precision mediump float;
precision highp float;
#endif
uniform sampler2D uSrc;
uniform vec2 uDelta;

varying vec2 texCoord;
varying vec2 screenCoord;

void main(void) {
    vec4 col = texture2D(uSrc, texCoord);
    gl_FragColor = vec4(col.rgb * 2.0 - vec3(1.0), 1.0);
}
</script>
                <script id="fx_dirblur_r4_fsh" type="x-shader/x_fragment">
                    #ifdef GL_ES
//precision mediump float;
precision highp float;
#endif
uniform sampler2D uSrc;
uniform vec2 uDelta;
uniform vec4 uBlurDir; //dir(x, y), stride(z, w)

varying vec2 texCoord;
varying vec2 screenCoord;

void main(void) {
    vec4 col = texture2D(uSrc, texCoord);
    col = col + texture2D(uSrc, texCoord + uBlurDir.xy * uDelta);
    col = col + texture2D(uSrc, texCoord - uBlurDir.xy * uDelta);
    col = col + texture2D(uSrc, texCoord + (uBlurDir.xy + uBlurDir.zw) * uDelta);
    col = col + texture2D(uSrc, texCoord - (uBlurDir.xy + uBlurDir.zw) * uDelta);
    gl_FragColor = col / 5.0;
}
</script>
                <!-- effect fragment shader template -->
                <script id="fx_common_fsh" type="x-shader/x_fragment">
                    #ifdef GL_ES
//precision mediump float;
precision highp float;
#endif
uniform sampler2D uSrc;
uniform vec2 uDelta;

varying vec2 texCoord;
varying vec2 screenCoord;

void main(void) {
    gl_FragColor = texture2D(uSrc, texCoord);
}
</script>
                <!-- post processing -->
                <script id="pp_final_vsh" type="x-shader/x_vertex">
                    uniform vec3 uResolution;
attribute vec2 aPosition;
varying vec2 texCoord;
varying vec2 screenCoord;
void main(void) {
    gl_Position = vec4(aPosition, 0.0, 1.0);
    texCoord = aPosition.xy * 0.5 + vec2(0.5, 0.5);
    screenCoord = aPosition.xy * vec2(uResolution.z, 1.0);
}
</script>
                <script id="pp_final_fsh" type="x-shader/x_fragment">
                    #ifdef GL_ES
//precision mediump float;
precision highp float;
#endif
uniform sampler2D uSrc;
uniform sampler2D uBloom;
uniform vec2 uDelta;
varying vec2 texCoord;
varying vec2 screenCoord;
void main(void) {
    vec4 srccol = texture2D(uSrc, texCoord) * 2.0;
    vec4 bloomcol = texture2D(uBloom, texCoord);
    vec4 col;
    col = srccol + bloomcol * (vec4(1.0) + srccol);
    col *= smoothstep(1.0, 0.0, pow(length((texCoord - vec2(0.5)) * 2.0), 1.2) * 0.5);
    col = pow(col, vec4(0.45454545454545)); //(1.0 / 2.2)
    
    gl_FragColor = vec4(col.rgb, 1.0);
    gl_FragColor.a = 1.0;
}
</script>

                <!--important redirect-->

                <div class="container-fluid text-light py-3 px-2 uiMenuElement"
                    style="width: 30%;  position: absolute; top:0%; left:0%;">
                    <div class="row py-3" style="margin-left:2%;">
                        <div class="col-2 my-auto d-none">
                            <img src="utilities/storyteller/images/logo.png" class="w-100">
                        </div>
                        <div class="col-10 my-auto pl-4 pt-2">
                            <div style="font-size: 5.5vh; font-family: 'Anton', sans-serif;">
                                <span class="text-danger text-uppercase">THE FAKEBOOK</span>
                                <span id="menuEPNum" class="bg-black px-4"></span>
                            </div>

                            <div style="font-size: 3.0vh; font-family: 'Anton', sans-serif;">

                                <span class="text-white" id="menuEPName"></span>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="container box2 py-3 px-2 rounded uiMenuElement"
                    style="width: 400px; position: absolute; top:4%; right:2%;">
                    <div class="row px-2">
                        <div class="col-2">
                            <img src="utilities/storyteller/images/logo.png" width="60"
                                style="filter:grayscale(100%); filter:invert(100%);" class="mr-2">
                        </div>
                        <div class="col-10 my-auto text-left">
                            <div class="mb-2"><span class="font-weight-bold">RESOURCES</span><span
                                    class="float-right ml-3">Version 1.0</span></div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Loaded</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid uiMenuElement" style="width: 100%; position: absolute; bottom:0%;">
                    <div class="row">
                    </div>
                    <div class="row menuButtons bg-white pb-4">
                        <div class="col-4 p-0 my-auto">
                            <button id="btnStartGame" class="box w-100 font-weight-bold text-center"
                                style="height: 65px;"><img src="utilities/storyteller/images/play.svg" width="30"
                                    class="mr-2"><span>START THE GAME</span></button>
                        </div>

                        <div class="col-4 p-0 my-auto">

                            <button id="btnSet" class="box w-100 font-weight-bold text-center"
                                style="height: 65px;"><img src="utilities/storyteller/images/settings.svg" width="30"
                                    style="filter:grayscale(100%);" class="mr-2"> SETTINGS</button>
                        </div>

                        <div class="col-4 p-0 my-auto">

                            <button id="btnFullscreen" class="box w-100 font-weight-bold text-center"
                                style="height: 65px;"><img src="utilities/storyteller/images/fullscreen.svg" width="30"
                                    style="filter:grayscale(100%);" class="mr-2"> FULL SCREEN</button>
                        </div>
                    </div>
                </div>

                <div id="menuSettings" class="container box2 py-3 px-2 rounded uiMenuElement"
                    style="width: 400px; position: absolute; bottom:26%; right:2%; display:none;">
                    <div class="row px-2">
                        <div class="col-2 border-right border-dark">
                            <img src="utilities/storyteller/images/settings.svg" width="100%" class="mr-2">
                        </div>
                        <div class="col-10 my-auto">
                            <!--Characters Settings-->
                            <div class="mb-2 border-bottom border-dark"><span
                                    class="font-weight-bold text-uppercase">Characters Settings</span></div>

                            <div class="mb-2 text-right">
                                <div>
                                    <label class="mr-2">ALL CHARACTERS</label><br>
                                    <button id="all-slim" class="btn btn-sm btn-dark">Slim</button>
                                    <button id="all-wide" class="btn btn-sm btn-light">Wide</button>
                                    <button id="all-closewide" class="btn btn-sm btn-dark">Close Wide</button>
                                    <button id="all-ultrawide" class="btn btn-sm btn-dark">Ultra Wide</button>
                                </div>

                                <div class="mt-2">
                                    <label class="mr-2">SHADOWS</label><br>
                                    <button id="btnShadowOn" class="btn btn-sm btn-light">ON</button>
                                    <button id="btnShadowOff" class="btn btn-sm btn-dark">OFF</button>
                                </div>

                                <div class="d-none">
                                    <label class="mr-2">Character 1</label>
                                    <button id="imgCh1-slim" class="btn btn-sm btn-warning">Slim (Default)</button>
                                    <button id="imgCh1-wide" class="btn btn-sm btn-warning">Wide</button>
                                </div>

                                <div class="d-none">
                                    <label class="mr-2">Character 2</label>
                                    <button id="imgCh2-slim" class="btn btn-sm btn-warning">Slim (Default)</button>
                                    <button id="imgCh3-slim" class="btn btn-sm btn-warning">Wide</button>
                                </div>

                                <div class="d-none">
                                    <label class="mr-2">Character 3</label>
                                    <button id="imgCh3-slim" class="btn btn-sm btn-warning">Slim (Default)</button>
                                    <button id="imgCh3-wide" class="btn btn-sm btn-warning">Wide</button>
                                </div>
                            </div>

                            <!--Audio Settings-->
                            <div class="mb-2 border-bottom border-dark"><span
                                    class="font-weight-bold text-uppercase">Audio Settings</span></div>

                            <div class="text-right">
                                <div class="text-left mb-2">
                                    Profiles
                                    <button id="btnAudio1" class="btn btn-sm btn-dark rounded-circle ml-1">1</button>
                                    <button id="btnAudio2" class="btn btn-sm btn-dark rounded-circle ml-1">2</button>
                                </div>
                                <div><label class="mr-2">BGM</label> <input id="range-audioBGM"
                                        class="align-middle audioRange" type="range" step="0.1" min="0" max="1"
                                        value="1"></div>
                                <div><label class="mr-2">Sound Effect</label> <input id="range-audioSoundEffect"
                                        class="align-middle audioRange" type="range" step="0.1" min="0" max="1"
                                        value="1"></div>
                                <div><label class="mr-2">SE Constant</label> <input id="range-audioSoundEffectConstant"
                                        class="align-middle audioRange" type="range" step="0.1" min="0" max="1"
                                        value="1"></div>
                                <div><label class="mr-2">Voice</label> <input id="range-audioVoice"
                                        class="align-middle audioRange" type="range" step="0.1" min="0" max="1"
                                        value="1"></div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

    <!--Normal Menu-->
    <div id="charactersMenu" class="container-fluid h-100 position-fixed bg-menu"
        style="z-index: 1049; top:0%; display:none">
        <div class="row align-items-center h-100">
            <div class="col h-100 p-0">
                <div class="container-fluid py-5 px-0">

                    <div class="row" style="position: absolute; top:0%; width:100%; margin-left:0%; margin-right:0%;">
                        <div class="col text-center">
                            <span class="bg-warning px-5" id="btnBackCharacters">Back to the Game</span>
                        </div>
                    </div>

                    <div class="row text-light">
                        <div class="col text-center">
                            <h1>Characters</h1>
                        </div>
                    </div>

                    <div class="row bg-white mx-auto text-light mt-3 px-5">

                        <div id="charactersOutput" class="col-12 text-center px-5 img-bottom">


                        </div>

                    </div>

                    <div class="row text-center mx-auto text-light mt-3 px-5 w-100"
                        style="bottom:0%; position:absolute;">

                        <div class="col-3">
                            <img id="chImg" src="" class="w-100">
                        </div>

                        <div class="col-9 text-left display-5 my-auto bg-dialogue">
                            <h2 id="chName"></h2>
                            <div id="chDesc" class="details">
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div id="settingsMenu" class="container-fluid h-100 position-fixed bg-menu"
        style="z-index: 1049; top:0%; display:none">
        <div class="row align-items-center h-100">
            <div class="col h-100 p-0">
                <div class="container-fluid py-5 px-0">

                    <div class="row" style="position: absolute; top:0%; width:100%; margin-left:0%; margin-right:0%;">
                        <div class="col text-center">
                            <span class="bg-warning px-5" id="btnBackSettings">Back to the Game</span>
                        </div>
                    </div>

                    <div class="row text-light">
                        <div class="col text-center">
                            <h1>World Map</h1>
                        </div>
                    </div>

                    <div id="settingWorld" class="row mx-auto text-light mt-3 p-0"
                        style="width:100%; min-height:50vh !important; background-attachment: local; background-position: center; background-image:url('');">

                        <div class="col-12 text-center img-bottom p-0">
                        </div>

                    </div>

                    <div class="row text-center mx-auto text-light mt-3 px-5" style="bottom:5%; position:absolute;">

                        <div class="col-3 my-auto">
                            <img id="settingImage" src="" class="w-100 img-thumbnail bg-black">
                        </div>

                        <div class="col-9 text-left display-5 my-auto bg-dialogue">
                            <h2 id="settingName"></h2>
                            <div id="settingDesc" class="details">

                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div id="bgmMenu" class="container-fluid h-100 position-fixed bg-menu" style="z-index: 1049; top:0%; display:none">
        <div class="row align-items-center h-100">
            <div class="col h-100 p-0">
                <div class="container-fluid py-5 px-0">

                    <div class="row" style="position: absolute; top:0%; width:100%; margin-left:0%; margin-right:0%;">
                        <div class="col text-center">
                            <span class="bg-warning px-5" id="btnBackBgm">Back to the Game</span>
                        </div>
                    </div>

                    <div class="row text-light">
                        <div class="col text-center">
                            <h1>Music</h1>
                        </div>
                    </div>

                    <div class="row text-light mt-3 px-5 w-100" style="position: absolute; top:25%;">

                        <div class="col-3 my-auto">
                            <img src="utilities/storyteller/images/music.svg" class="w-100" style="filter:invert(100%)">
                        </div>

                        <div class="col-9 text-left display-5 my-auto bg-dialogue">
                            <h2 id="musicOutput"></h2>
                            <div class="details">
                                Playing ...
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div id="dialogueMenu" class="container-fluid h-100 position-fixed bg-menu"
        style="z-index: 1049; top:0%; display:none; overflow-y:scroll;">
        <div class="row align-items-center h-100 m-0">
            <div class="col h-100 p-0">
                <div class="container-fluid py-5 px-0">

                    <div class="row" style="position: absolute; top:0%; width:100%; margin-left:0%; margin-right:0%;">
                        <div class="col text-center">
                            <span class="bg-warning px-5" id="btnBackDialogue">Back to the Game</span>
                        </div>
                    </div>

                    <div class="row text-light">
                        <div class="col text-center">
                            <h1>Dialogue</h1>
                        </div>
                    </div>

                    <div id="dialoguesOutput">
                        <div class="row mx-auto text-light mt-3 px-5 w-100">

                            <div class="col-2 my-auto text-right">
                                <img src="utilities/storyteller/images/unknown.png" class="w-100">
                            </div>

                            <div class="col-10 text-left display-5 my-auto bg-dialogue">
                                <h2>Lucius</h2>
                                <div class="details">
                                    Why you leaving me Velvet?
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 text-light">


            <!--Main container-->
            <div class="col-12">


                <!--preview container-->
                <div class="row h-100 bg-black6" id="preview-outter">
                    <div class="col p-0" id="divPreview">
                        <img src="#" id="imgBackground" class="resAsset backgroundAsset">
                        <img src="#" id="imgCh1" class="resAsset characterAsset">
                        <img src="#" id="imgCh2" class="resAsset characterAsset">
                        <img src="#" id="imgCh3" class="resAsset characterAsset">
                        <div id="backgroundEffect" class="resAsset bgEffectAsset"></div>
                        <div id="imgItem-outter"><img src="" id="imgItem" class="resAsset itemAsset"></div>
                        <div id="dialog-outter">
                            <div id="dialog-character" class="dialogueAsset"></div>
                            <div id="dialog-text" class="dialogueAsset">

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
                                <img id="btnPause" src="utilities/storyteller/images/pause.svg"
                                    style="cursor: pointer;">

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


            </div>
            <!--/Main container-->

            <!--Audio Channels-->
            <div style="display: none;">
                <audio id="audioBGM" class="audioAsset" loop>
                    <source src="" type="audio/ogg">
                </audio>
                <audio id="audioSoundEffect" class="audioAsset">
                    <source src="" type="audio/ogg">
                </audio>
                <audio id="audioSoundEffectConstant" class="audioAsset" loop>
                    <source src="" type="audio/ogg">
                </audio>
                <audio id="audioVoice" class="audioAsset">
                    <source src="" type="audio/ogg">
                </audio>

                <audio id="audioMenu" loop>
                    <source src="" type="audio/ogg">
                </audio>

                <audio id="audioButton">
                    <source src="" type="audio/ogg">
                </audio>
            </div>


        </div>
    </div>

    <!--IMPORTANT MODALS ************************************************************************************-->




    <!--Link to jquery js-->
    <script src="libraries/jquery/jquery-3.3.1.js"></script>
    <script src="libraries/jquery/jquery-ui-1.12.1/jquery-ui.js"></script>

    <!--Link to bootstrap 4 js-->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <!--Custom JS-->

    <!--game engine js-->
    <script src="utilities/storyteller/js/sakura.js"></script>
    <script src="utilities/storyteller/js/preview.js"></script>
    <script src="utilities/storyteller/js/previewEvents.js"></script>

</body>

</html>