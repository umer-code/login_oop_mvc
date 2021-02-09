<?php session_start();
if(isset($_SESSION['user'])){
  header("Location:home.php");
}
?>
<?php
include 'includes/autoloader.php';   
?>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        // $person1 = new Person();
        // $person1->setName('umer');
        // echo $person1->getName();

        // $house1 = new House();
        // $house1->setName('102354');
        // echo $house1->getName();

        // $userobj = new UsersView();
        // $userobj->showUsers('admin');

        if(isset($_REQUEST['btn_submit'])){
            unset($_REQUEST['btn_submit']);
            $uname = $_REQUEST["name"];
            $pswd = $_REQUEST["pass"];
           
            $userobj = new UsersView();
            $userobj->userLogin($uname, $pswd);
        }
    ?>
    <div class="container">
  <h2>login</h2>
  <form action="login.php" class="was-validated" method = "POST">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>