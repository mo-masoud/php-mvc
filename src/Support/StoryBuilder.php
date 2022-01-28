<?php
namespace MasoudMVC\Support;

class StoryBuilder
{
    public static function createStory($id)
    {
        mkdir("./stories/$id/storytelling", 0777, true);
        mkdir("./stories/$id/storytelling/bgm", 0777, true);
        mkdir("./stories/$id/storytelling/characters", 0777, true);
        mkdir("./stories/$id/storytelling/episodes", 0777, true);
        mkdir("./stories/$id/storytelling/items", 0777, true);
        mkdir("./stories/$id/storytelling/settings", 0777, true);
        mkdir("./stories/$id/storytelling/sound effects", 0777, true);
        mkdir("./stories/$id/storytelling/voice", 0777, true);
    }

    public static function formatSizeUnits($filepath)
    {
        $bytes = filesize($filepath);

        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        }

        return $bytes;
    }

    public static function getFilesPaths($path)
    {
        if ($handle = opendir($path)) {
            $xmlString = '<?xml version="1.0" encoding="utf-8" ?>';
$xmlString = $xmlString . '<file>';
    while (false !== ($entry = readdir($handle))) {
    if ($entry != '.' && $entry != '..' && !str_contains($entry, ':Zone.Identifier')) {
    $filepath = $path . '/' . $entry;
    $size = self::formatSizeUnits($filepath);

    $xmlString = $xmlString . '<filename>' . $entry . '</filename>';
    $xmlString = $xmlString . '<filesize>' . $size . '</filesize>';
    }
    }

    closedir($handle);

    $xmlString = $xmlString . '</file>';
echo $xmlString;
}
}

public static function createEP($path, $epName)
{
$xmlString = '
<?xml version="1.0" encoding="utf-8"?>
<episode>
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
</episode>
';

// create file

$fullPath = './' . $path . $epName . '.xml';

if (file_exists($fullPath)) {
$reponse = 'Episode Already Exist';
} else {
$myfile = fopen($fullPath, 'w') or die('Unable to open file!');
$txt = $xmlString;
fwrite($myfile, $txt);
fclose($myfile);
$reponse = 'Episode Created Sucessfully';
}

// output
echo $reponse;
}

public static function overwriteEP($path, $content)
{
$xmlString = $content;

// create file

$fullPath = './' . $path;

if (file_exists($fullPath)) {
$myfile = fopen($fullPath, 'w') or die('Unable to open file!');
$txt = $xmlString;
fwrite($myfile, $txt);
fclose($myfile);
$reponse = 'All Changes Saved Sucessfully';
} else {
$reponse = 'Error: Episode file not found';
}

// output
echo $reponse;
}

public static function createStoryDirectories($storyName)
{
$path = '../stories/' . $storyName . '/drafts';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/characters';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/plots';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/settings';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/research materials';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/templates';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/game systems';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/bgm';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/characters';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/episodes';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/items';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/settings';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/sound effects';
mkdir($path, 0777, true);

$path = '../stories/' . $storyName . '/storytelling/voice';
mkdir($path, 0777, true);
}

public static function saveXMLFile($storyName, $content)
{
// need unique identifier for file name
$filename = $storyName;

$myfile = fopen('../routers/' . $filename . '.xml', 'w') or die('Unable to open file!');
fwrite($myfile, '
<?xml version="1.0" encoding="utf-8" ?>' . $content); // should be removed later
fclose($myfile);

self::createStoryDirectories($storyName);
}

public static function viewStories()
{
if ($handle = opendir('../routers')) {
$xmlString = '
<?xml version="1.0" encoding="utf-8" ?>';
$xmlString = $xmlString . '<file>';
    while (false !== ($entry = readdir($handle))) {
    if ($entry != '.' && $entry != '..') {
    //echo "$entry\n";

    // return each entry as a json object (issues with loop)
    //$return_arr[] = array("filename" => $entry);
    //$myJSON = json_encode($return_arr);
    //echo $myJSON;

    // return using xml
    $xmlPath = '../routers/' . $entry;
    $xml = simplexml_load_file($xmlPath);

    $title = strip_tags($xml->title->asXml());
    $desc = strip_tags($xml->description->asXml());
    $loc = strip_tags($xml->location->asXml());

    $xmlString = $xmlString . '<filename>' . $entry . '</filename>';
    $xmlString = $xmlString . '<title>' . $title . '</title>';
    $xmlString = $xmlString . '<description>' . $desc . '</description>';
    $xmlString = $xmlString . '<location>' . $loc . '</location>';
    }
    }

    closedir($handle);

    $xmlString = $xmlString . '</file>';
echo $xmlString;
}
}

public static function uploadNewFile()
{
}

public static function viewFiles($path)
{
if ($handle = opendir($path)) {
$xmlString = '
<?xml version="1.0" encoding="utf-8" ?>';
$xmlString = $xmlString . '<file>';
    while (false !== ($entry = readdir($handle))) {
    if ($entry != '.' && $entry != '..') {
    //echo "$entry\n";

    // return each entry as a json object (issues with loop)
    //$return_arr[] = array("filename" => $entry);
    //$myJSON = json_encode($return_arr);
    //echo $myJSON;

    // return using xml
    $filepath = $path . '/' . $entry;
    $size = self::formatSizeUnits($filepath);

    $xmlString = $xmlString . '<filename>' . $entry . '</filename>';
    $xmlString = $xmlString . '<filesize>' . $size . '</filesize>';
    }
    }

    closedir($handle);

    $xmlString = $xmlString . '</file>';
echo $xmlString;
}
}

public static function deleteFile($link)
{
// delete file
unlink($link);
echo 'File was deleted successfully';
}
}