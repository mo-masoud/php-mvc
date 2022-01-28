<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORY</title>
    <link rel="icon" href="images/icon.png">

    <!--Link to bootstrap 4 css-->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css" />
    <!--Link to google fonts (Local)-->
    <link href="libraries/Fonts/fontOswald.css" rel="stylesheet">
    <link href="libraries/Fonts/fontAnton.css" rel="stylesheet">
    <link href="libraries/Fonts/fontLalezar.css" rel="stylesheet">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--js-->

    <!--Animation CSS (require internet)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--https://animate.style/-->

</head>

<body>

    <?php include base_path() . 'views/partials/header.php'; ?>

    <?php if (app()->session->hasFlash('success')): ?>
    <p class="alert alert-success">
        <?= app()->session->getFlash('success'); ?>
    </p>
    <?php endif; ?>

    <?php if (app()->session->hasFlash('error')): ?>
    <p class="alert alert-danger" role="alert">
        <?= app()->session->getFlash('error'); ?>
    </p>
    <?php endif; ?>

    {{content}}
    <?php include base_path() . 'views/partials/footer.php'; ?>

    <!--Link to jquery js-->
    <script src="libraries/jquery/jquery-3.3.1.js"></script>
    <!--Link to bootstrap 4 js-->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <!--JS-->
    <script src="master pages/routing.js"></script>
    <script src="js/index.js"></script>
    <script src="js/animation.js"></script>

</body>

</html>