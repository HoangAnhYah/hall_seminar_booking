<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Create New Member | Add</h2>
  <br>
  <form action = "/createmember" method = "post" class="form-group" style="width:70%; margin-left:15%;">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <label class="form-group">Choose Department:</label>
            <select name="name_dept">
              <option value="KeHoach">Kế hoạch</option>
              <option value="TaiChinh">Tài chính</option>
              <option value="MKT">Marketing</option>
              <option value="Kho">Kho vận</option>
            </select></br>
        <label>Full Name:</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="full_name">
        <label>Password:</label>
        <input type="text" class="form-control" placeholder="******" name="pwd">
        <label>Contact:</label>
            <input type="text" class="form-control" placeholder="Enter Contact" name="contact">
        <label>Email:</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
        <button type="submit"  value = "Add Member" class="btn btn-primary">Add Member</button>
  </form>
</div>

</body>
</html>