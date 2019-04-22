<?php ob_start();
$page_title = '首页';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>欢迎光临！</h1>
         <p>尽情享受“简易进销存管理系统”带给您的便捷吧！</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
