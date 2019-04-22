<?php ob_start();
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $d_sale = find_by_id('sales',(int)$_GET['id']);
  if(!$d_sale){
    $session->msg("d","找不到销售记录 id.");
    redirect('sales.php');
  }
?>
<?php
  $delete_id = delete_by_id('sales',(int)$d_sale['id']);
  if($delete_id){
      $session->msg("s","已经删除销售记录");
      redirect('sales.php');
  } else {
      $session->msg("d","销售记录删除失败");
      redirect('sales.php');
  }
?>
