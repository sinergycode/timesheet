<?php// views/user/index.php?>


<h1>User: edit</h1>
<form method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user['id'];?>">

<label>Login</label><input type="text" name="login" value="<?php echo $this->user['login'];?>"><br>

<label>Password</label><input type="text" name="password"><br>

<label>Role</label>
  <select name="role">
    <option value="default" <?php if($this->user['role'] == 'default') echo 'selected';?>>Default</option>
    <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected';?>>Admin</option>
    <option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected';?>>Owner</option>
  </select><br>
<label> </label><input type="submit" value="Change data">
</form>
<hr>



