<?php 
$lname = null;
$fname = null;
$gender = null;
$email = null;
$course = null;
$address = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lname = addslashes(trim($_POST["lname"]));
    $fname = addslashes(trim($_POST["fname"]));
    $gender = addslashes(trim($_POST["gender"]));
    $email = addslashes(trim($_POST["email"]));
    $address = addslashes(trim($_POST["address"]));
    $course = addslashes(trim($_POST["course"]));

    setcookie('lname', $lname, time() - (86400 * 30), "/"); // 86400 = 1 day
    setcookie('fname', $fname, time() - (86400 * 30), "/");
    setcookie('gender', $gender, time() - (86400 * 30), "/");
    setcookie('email', $email, time() - (86400 * 30), "/");
    setcookie('address', $address, time() - (86400 * 30), "/");
    setcookie('course', $course, time() - (86400 * 30), "/");

    // Refresh to load cookies
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// if (isset($_COOKIE['lname']) && isset($_COOKIE['fname'])&&isset($_COOKIE['gender'])&&isset($_COOKIE['email'])&&isset($_COOKIE['address'])&&isset($_COOKIE['course'])){
//     $lname = $_COOKIE['lname'];
//     $fname = $_COOKIE['fname'];
//     $gender = $_COOKIE['gender'];
//     $email = $_COOKIE['email'];
//     $address = $_COOKIE['address'];
//     $course = $_COOKIE['course'];
//}

if (isset($_COOKIE['lname'])) $lname = $_COOKIE['lname'];
if (isset($_COOKIE['fname'])) $fname = $_COOKIE['fname'];
if (isset($_COOKIE['gender'])) $gender = $_COOKIE['gender'];
if (isset($_COOKIE['email'])) $email = $_COOKIE['email'];
if (isset($_COOKIE['address'])) $address = $_COOKIE['address'];
if (isset($_COOKIE['course'])) $course = $_COOKIE['course'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
      <section class="h-100 bg-dark">
    <div class="container col-9 py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        
            <div class="card card-registration my-4">
            <div class="row justify-content-between g-0">
                <div class="col-xl-6 d-none d-xl-block p-md-5 text-black">
                    <table class="table table-hover col-3">
                        <thead>
                            <tr>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $fname; ?></td>
                                <td><?php echo $lname; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $address; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $course; ?></td>
                            </tr>
                        </tbody>
                    </table> 
                
                </div>
                <div class="col-xl-5">
                <form class="card-body p-md-5 text-black" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <h3 class="mb-5 text-uppercase">Student registration</h3>

                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="fname"/>
                        <label class="form-label" for="form3Example1m">First name</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1n" class="form-control form-control-lg" name='lname' />
                        <label class="form-label" for="form3Example1n">Last name</label>
                        </div>
                    </div>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-3">
                    <input type="text" id="form3Example97" class="form-control form-control-lg" name="email"/>
                    <label class="form-label" for="form3Example97">Email</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-3">
                    <input type="text" id="form3Example8" class="form-control form-control-lg" name="address" />
                    <label class="form-label" for="form3Example8">Address</label>
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-3 py-2">

                    <h6 class="mb-0 me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                        value="female" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                        value="male" />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    </div>

                    <div class="row">
                    <div data-mdb-input-init class="form-outline mb-3">
                    <input type="text" id="form3Example99" class="form-control form-control-lg" name= 'course'/>
                    <label class="form-label" for="form3Example99">Course</label>
                    </div>


                    <div class="d-flex justify-content-end pt-3">
                    <button  type="reset" data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Reset all</button>
                    <button  type='submit' data-mdb-button-init data-mdb-ripple-init class="btn btn-warning btn-lg ms-2">Submit form</button>
                    </div>

                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    </section>

    
</body>
</html>
