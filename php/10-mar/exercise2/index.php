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
        <div class="row">
            <div class="col-12 col-sm-8 col-md-8 col-lg-8  ">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-control" method="POST">
                    <h3 class="bg-secondary ">Registration Form</h3>
                    <div class="form-group mt-3">
                        <input class="form-control" type="text" name="fname" placeholder="First name">
                    </div>
                    <span class="error">* <?php echo $fnameErr;?></span>
                    <div class="form-group mt-3">
                        <input class="form-control" type="text" name="lname"  placeholder="Last name">
                        <span class="error"> <?php echo $lnameErr;?></span>
                    </div>

                    <div class="form-group mt-3">
                        <input class="form-control" type="email" name="email"  placeholder="Email">
                    </div>
                    <label>Gender:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="male" id="male">
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="female" id="female">
                        <label class="form-check-label" for="female">
                           Female
                        </label>
                    </div>
                    <label>State: </label>
                    <select class="form-select form-select-lg" aria-label=".form-select-lg example" name="state">
                        <option value="Johor">Johor</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Washington">Washington</option>
                      </select>
                    <label>Hobbies:</label>
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox"  name="Hobbies" value="badminton" id="badminton">
                        <label class="form-check-label" for="badminton">
                            badminton
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="Hobbies" value="football" id="football" >
                        <label class="form-check-label" for="football">
                          football
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="Hobbies" value="bicycle" id="Bicycle">
                        <label class="form-check-label" for="Bicycle">
                            Bicycle
                        </label>
                    </div>
                    <input type="submit" class="btn btn-primary " value="Save record">
                    <input type="reset">
                      </form>

            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 border">

                <h3 class="bg-secondary ">Featured</h3>
                <h3> Special title treatment</h3>
                <p>With suppoting text below as a natural<br>
                lead-in to addittional content</p>
                <button class="btn btn-primary ">Go somewhere </button><br>
                <?php
                echo $fname;
                echo $lname;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $gender;
                ?>
            </div>
        </div>
    </div>
</body>

</html>