<?php ob_start();
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
  $delete_id = delete_by_id('user_groups',(int)$_GET['id']);
  if($delete_id){
      $session->msg("s","已经删除组");
      redirect('group.php');
  } else {
      $session->msg("d","组删除失败或缺少Prm");
      redirect('group.php');
  }
?>
