  <?php
  session_start();

  // initializing variables
  $firstName = "";
  $lastName = "";
  $email    = "";
  $password_1  = "";
  $password_2  = "";
  $errors = array(); 

  // connect to the database
  $db = mysqli_connect('localhost', 'root', '', 'lapshop');

  // REGISTER USER
  if (isset($_POST['RegBtn'])) {
    // receive all input values from the form
    $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($firstName)) { array_push($errors, "first name is required"); }
    if (empty($lastName)) { array_push($errors, "last name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
      
      array_push($errors, "The two passwords do not match");
    
    }

    // Check the database to make sure a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['Email'] === $email) {
        array_push($errors, "email already exists");
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = $password_1;//encrypt the password before saving in the database

      $query = "INSERT INTO users (firstName, lastName, Email, Password) 
            VALUES('$firstName', '$lastName', '$email', '$password')";
      mysqli_query($db, $query);
      $username = "$firstName  $lastName";

      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['email'] = $email;
      
      
    
      header("Location: ../homePage/home.php");
      
      
     
    }
  }

  // LOGIN USER
  if (isset($_POST['loginBtn'])) {
    
    $email = mysqli_real_escape_string($db, $_POST['email']);

    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "email is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = $password;
      $query = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
      $results1 = mysqli_query($db, $query);
      if (mysqli_num_rows($results1) == 1) {

        /**/
        $query1 = "SELECT firstName, lastName FROM users WHERE Email='$email' AND Password='$password'";
        $results2 = mysqli_query($db, $query1);

        if (mysqli_num_rows($results2) == 1) {

              $row = mysqli_fetch_assoc($results1);
              $lastName = $row['lastName'];
              $firstName = $row['firstName'];
              $_SESSION['success'] = "You are now logged in";
              $_SESSION['username'] = $firstName . " " . $lastName;
              $_SESSION['email'] = $email;
              header("Location: ../homePage/home.php");

              
              

              
             

      }else {
        array_push($errors, "Wrong email/password combination");
      }
    }
  } }



  ?>