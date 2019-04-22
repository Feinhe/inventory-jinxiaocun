<?php
  ob_start();
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php
  $find_media = find_by_id('media',(int)$_GET['id']);
  $photo = new Media();
  if($photo->media_destroy($find_media['id'],$find_media['file_name'])){
      $session->msg("s","图片已经删除");
      redirect('media.php');
  } else {
      $session->msg("d","图片删除失败或缺少Prm");
      redirect('media.php');
  }
?>
