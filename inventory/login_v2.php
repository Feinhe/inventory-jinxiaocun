<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<div class="login-page">
    <div class="text-center">
       <h1>听可科技库存管理系统-欢迎您！</h1>
       <p>数据无价，请认真操作每一笔记录哦~</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth_v2.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">用户名</label>
              <input type="name" class="form-control" name="username" placeholder="用户名">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">密码</label>
            <input type="password" name= "password" class="form-control" placeholder="密码">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">登陆</button>
        </div>
    </form>
</div>
<?php include_once('layouts/header.php'); ?>
