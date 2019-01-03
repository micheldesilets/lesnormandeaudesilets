<?php
/**
 * Created by Michel Desilets
 * User: User
 * Date: 2018-09-01
 * Time: 10:07
 */
include_once '../../private/initialize.php';

header('content-type: text/javascript');

$kwords = $_GET['kwrd']; /* Keywords */
$startYear = $_GET['startYear'];
$endYear = $_GET['endYear'];
$wExact = $_GET['wExact'];
$wPart = $_GET['wPart'];
$searchKw = $_GET['searchKw'];
$searchTitles = $_GET['searchTitles'];
$searchComments = $_GET['searchComments'];
$photoPid = $_GET['photoId'];
$idUnique = $_GET['idUnique'];
$idContext = $_GET['idContext'];

if ($kwords != "nothingness") {
  $kwArr = explode(',', $kwords);
  array_walk($kwArr, 'trimValue');
}

if ($photoPid == "nothing") {
  $photoPid = "";
}

if ($startYear == "start") {
  $startYear = '1900';
}

if ($endYear == 'end') {
  $endYear = '2050';
}

$searchData = array($kwArr, $startYear, $endYear, $wExact, $wPart, $searchKw, $searchTitles, $searchComments, $photoPid, $idUnique, $idContext);

require_once CLASSES_PATH . '/database/cl_PhotosDB.php';
$db = new photosBD();
$photo = $db->getSearchPhotos($searchData);
return;

function trimValue(&$value)
{
    $value = trim($value);
}
