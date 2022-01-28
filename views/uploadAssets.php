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
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="custom-css/project-card.css" />
    <!--custom-js-->
    <script src="custom-js/globalVariables.js"></script>

    <style>
    body {
        background-color: #dddddd;

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

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Anton', sans-serif;
    }
    </style>

</head>

<body>



    <section class="container-fluid mb-2">

        <div class="row mt-2 mb-2">
            <div class="col-12">
                <div>
                    <h6>Upload Manager</h6>
                </div>
            </div>
            <div class="col-12 mt-1 bg-white py-2">
                <div class="mb-2"><b>Target Path</b> = "<?php echo $_GET['path']; ?>"</div>
                <!--Upload form-->
                <form action="/uploadAsset<?php echo '?path=' . $_GET['path']; ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Choose file type</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="folderChoice">
                            <option>characters</option>
                            <option>settings</option>
                            <option>items</option>
                            <option>bgm</option>
                            <option>sound effects</option>
                            <option>voice</option>
                        </select>
                    </div>

                    Select file to upload:
                    <input type="hidden" value="<?php echo $_GET['path']; ?>" ;>
                    <input type="file" name="fileToUpload" id="fileToUpload" class="btn-warning">
                    <input type="submit" value="Upload File" name="submit">
                </form>
            </div>
            <div class="mt-2 text-info">
                <div class=" col-12">
                    <?php
            if (isset($_POST['submit'])) {
                $path = str_replace('./', '', $_GET['path']) . '/';
                $path = 'stories/' . $_GET['path'] . '/storytelling/' . $_POST['folderChoice'] . '/';
                //echo $path;
                $target_dir = $path;
                $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                /*
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }*/

                // Check if file already exists
                if (file_exists($target_file)) {
                    echo 'Sorry, file already exists.';
                    $uploadOk = 0;
                }
                // Check file size

                /*
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }*/

                // Allow certain file formats
                /*
                if($imageFileType != "ogg" && $imageFileType != "mp3" && $imageFileType != "docx" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Sorry, only OGG, MP3, DOCX, JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }*/
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo 'Sorry, your file was not uploaded.';
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                        echo 'The file ' . basename($_FILES['fileToUpload']['name']) . ' has been uploaded.';
                    } else {
                        echo 'Sorry, there was an error uploading your file.';
                    }
                }
            }
            ?></div>
            </div>
        </div>
    </section>



    <!--Link to jquery js-->
    <script src="libraries/jquery/jquery-3.3.1.js"></script>
    <!--Link to bootstrap 4 js-->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>
    <!--Custom JS-->
    <script src="custom-js/XMLWriter_src/XMLWriter.js"></script>
    <script src="custom-js/FileSaver.js-master/dist/FileSaver.js"></script>
    <script src="custom-js/exporter.js"></script>
    <script src="custom-js/viewer.js"></script>
    <script src="custom-js/creator.js"></script>
    <script src="custom-js/router.js"></script>

</body>

</html>