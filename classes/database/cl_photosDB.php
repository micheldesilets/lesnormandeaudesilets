<?php

class photosBD
{

  /* --- GETHOMEPHOTO --- */
  public function getHomePhoto()
  {
    include_once 'connection\connect.php';
    require_once 'classes\business\cl_photos.php';

    $photo = new Photos();

    $sql = "
SELECT *
FROM photos_pho
  JOIN parameters_par pp
  ON id_pho = pp.home_idpho_par
  JOIN paths_pat pp1
  ON pp1.id_pat = idpat_pho
  WHERE pp.id_par = 1";

    if ($result = mysqli_query($con, $sql)) {
// Return the number of rows in result set
//$rowcount = mysqli_num_rows($result);
//printf("Result set has %d rows.\n", $rowcount);
    } else {
      echo("nothing");
    };

// Associative array
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $photo->set_F_Path($row["path_pat"]);
    $photo->set_Filename($row["filename_pho"]);

    return $photo;
  }

  /* --- GETPHOTOS --- */
  public function getPhotos()
  {
    include 'connection/connect.php';
    require_once 'classes\business\cl_photos.php';

    $photo = new Photos();

    $sql = "SELECT
  paths_pat.path_pat,
  paths_pat.prev_path_pat,
  photos_pho.filename_pho,
  photos_pho.title_pho,
  photos_pho.keywords_pho,
  photos_pho.height_pho,
  photos_pho.width_pho,
  photos_pho.caption_pho
FROM paths_pat
  INNER JOIN photos_pho
    ON paths_pat.id_pat = photos_pho.idpat_pho
WHERE paths_pat.id_pat = 1";

    if ($result = mysqli_query($con, $sql)) {
      // Return the number of rows in result set
      $rowcount = mysqli_num_rows($result);
      /* printf("Result set has %d rows.\n", $rowcount); */
    } else {
      echo("nothing");
    };


    $photoArray = array();
    $l = 1;

    while ($l <= $rowcount):
      // Associative array
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

      $photo = new Photos();

      $photo->set_Title($row["title_pho"]);
      $photo->set_Keywords($row["keywords_pho"]);
      $photo->set_Height($row["height_pho"]);
      $photo->set_Width($row["width_pho"]);
      $photo->set_Caption($row["caption_pho"]);
      $photo->set_F_Path($row["path_pat"]);
      $photo->set_P_Path($row["prev_path_pat"]);
      $photo->set_Filename($row["filename_pho"]);
      array_push($photoArray, $photo);

      $l++;
    endwhile;

    // Free result set
    mysqli_free_result($result);

    mysqli_close($con);
//    echo count($photoArray);


    return $photoArray;

  }
}


