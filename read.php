<?php
include 'connect.php';


?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Display data</title>
</head>

<body>
  <div class="container my-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">S1 no</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Subjects</th>
          <th scope="col">Gender</th>
          <th scope="col">Place</th>
          <th scope="col">Operations</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "Select * from seriescrud";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $fname = $row['fname'];
          $lname = $row['lname'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $datas = $row['multipleData'];
          $gender = $row['gender'];
          $place = $row['place'];
          echo '<tr>
      <th scope="row">' . $id . '</th>
      <td>' . $fname . '</td>
      <td>' . $lname . '</td>
      <td>' . $email . '</td>
       <td>' . $mobile . '</td>
       <td>' . $datas . '</td>
        <td>' . $gender . '</td>
          <td>' . $place . '</td>
       
    <td>
  <a href="update.php?updateid=' . $id . '" class="btn btn-dark">Update</a>
  <a href="delete.php?deleteid=' . $id . '" class="btn btn-danger">Delete</a>
</td>
 
       </tr>';
        }


        ?>


      </tbody>
    </table>
  </div>

</body>

</html>