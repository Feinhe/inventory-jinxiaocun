<?php ob_start();
  $page_title = '新增用户';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $groups = find_all('user_groups');
?>
<?php
  if(isset($_POST['add_user'])){

   $req_fields = array('full-name','username','password','level' );
   validate_fields($req_fields);

   if(empty($errors)){
           $name   = remove_junk($db->escape($_POST['full-name']));
       $username   = remove_junk($db->escape($_POST['username']));
       $password   = remove_junk($db->escape($_POST['password']));
       $user_level = (int)$db->escape($_POST['level']);
       $password = sha1($password);
        $query = "INSERT INTO users (";
        $query .="name,username,password,user_level,status";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$username}', '{$password}', '{$user_level}','1'";
        $query .=")";
        if($db->query($query)){
          //sucess
          $session->msg('s',"用户账户已经创建 ");
          redirect('add_user.php', false);
        } else {
          //failed
          $session->msg('d',' 抱歉！用户账户创建失败');
          redirect('add_user.php', false);
        }
   } else {
     $session->msg("d", $errors);
      redirect('add_user.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>
  <?php echo display_msg($msg); ?>
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>增加新用户</span>
       </strong>
      </div>
      <div class="panel-body">
        <div class="col-md-6">
          <form method="post" action="add_user.php">
            <div class="form-group">
                <label for="name">真实姓名</label>
                <input type="text" class="form-control" name="full-name" placeholder="真实姓名">
            </div>
            <div class="form-group">
                <label for="username">用户名</label>
                <input type="text" class="form-control" name="username" placeholder="用户名">
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" name ="password"  placeholder="密码">
            </div>
            <div class="form-group">
              <label for="level">用户角色</label>
                <select class="form-control" name="level">
                  <?php foreach ($groups as $group ):?>
                   <option value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                <?php endforeach;?>
                </select>
            </div>
            <div class="form-group clearfix">
              <button type="submit" name="add_user" class="btn btn-primary">增加用户</button>
            </div>
        </form>
        </div>

      </div>

    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
