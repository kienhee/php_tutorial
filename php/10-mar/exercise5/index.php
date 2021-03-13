<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keene</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<?php
$fnameErr =$lnameErr = $emailErr = $genderErr = "";
$fname = $lname= $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    firstnam
    if (empty($_POST["fname"])) {
        $nameErr = "Name is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }
//    lastname
    if (empty($_POST["lname"])) {
        $nameErr = "Name is required";
    } else {
        $lname = test_input($_POST["lname"]);
    }
//    email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }
//gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<div class="container">
    <div class="row ">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12  ">
            <form action="#" class="form-control bg-secondary" method="POST">
                <h3 style="text-align: center">Thực hành toán tử</h3>
                <div class="form-group mt-3">
                    <input class="form-control" type="number" name="name" placeholder="Nhập số a">
                </div>
                <div class="form-group mt-3 mb-3">
                    <input class="form-control" type="number" name="email"  placeholder="Nhập số b">

                </div>

                <input type="submit" class="btn btn-success " value="a+b">
                <input type="submit" class="btn btn-info " value="a-b">
                <input type="submit" class="btn btn-danger " value="a*b">
                <input type="submit" class="btn btn-warning " value="a/b">

            </form>

        </div>
    </div>
</div>
</body>

</html>