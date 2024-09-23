<?php
include 'connect.php';
if (isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$datas = $_POST['data'];
$allData=implode(",",$datas);
$gender=$_POST['gender'];
$place=$_POST['place'];
$sql="insert into seriescrud (fname,lname,email,mobile,multipleData,gender,place) values('$fname','$lname','$email','$mobile','$allData','$gender','$place')";
$result=mysqli_query($con,$sql);
if($result){
    header('location:read.php');
}else{
    die("Error updating: " . mysqli_error($con));
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="Enter your first name" name="fname" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your last name" name="lname" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Mobile</label>
                <input type="mobile" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
            </div>
            <div>
            <input type="checkbox" name="data[]" value="JavaScript">JavaScript
            <input type="checkbox" name="data[]" value="React">React
            <input type="checkbox" name="data[]" value="HTML">HTML
            <input type="checkbox" name="data[]" value="CSS">CSS
            </div>
            <div class="my-3">
                Gender:
            <input type="radio" name="gender" value="male" required>Male
            <input type="radio" name="gender" value="female" required>Female
            <input type="radio" name="gender" value="kids" required>Kids
            </div>
            <div>
            <select name="place">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Mysore">Mysore</option>
                </select>
            </div>
            <div class="my-5">
            <button class="btn btn-dark btn-lg my-5" name="submit">Submit</button>
</div>
        </form>
    </div>
</body>

</html>