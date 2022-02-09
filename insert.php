<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        
        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address);

        if ($sql) {
            echo "<script>alert('เพิ่มสำเร็จแล้ววว');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('เห้ยมีไรผิด');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
background-image: url("bgge.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link rel="stylesheet" href="yeet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    <h1 class="mt-5" style="color:#6A5495">Insert Page</h1>
        <a href="index.php" class="button-74" role="button">Go Back</a>
        <form action="" method="post">
        <hr> 
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea name="address"cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name="insert" class="button-74" role="button">Insert</button>
        </form>
    </div>
<hr> 

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>