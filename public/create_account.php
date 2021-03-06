<?php
require_once('../private/initialize.php');

if(is_post_request()) {
  $subject = [];
  $employee['first_name'] = $_POST['first_name'] ?? '';
  $employee['last_name'] = $_POST['last_name'] ?? '';
  $employee['birthday'] = $_POST['birthday'] ?? '';
  $employee['start_date'] = $_POST['start_date'] ?? '';
  $employee['user_level'] = $_POST['user_level'] ?? '';
  $employee['department_initial'] = $_POST['department_initial'] ?? '';
  $employee['email'] = $_POST['email'] ?? '';
  $employee['username'] = $_POST['username'] ?? '';
  $employee['password'] = $_POST['password'] ?? '';
  $employee['confirm_password'] = $_POST['confirm_password'] ?? '';

  $result = create_user_account($employee);
  if($result == true) {
    $new_employee = find_employee_by_username($employee['username']);
    log_in_employee($new_employee);
    // $new_id = mysqli_insert_id($db);
    $_SESSION['message'] = 'You have created your account successfully.';
    if($employee['user_level'] == 'admin') {
      redirect_to(url_for('staff/admin/show.php?employee_id=' . $new_employee['employee_id']));
    } else {
      redirect_to(url_for('staff/show.php?employee_id=' . $new_employee['employee_id']));
    }
  } else {
    $errors = $result;
  }

} else {
  // DISPLAY THE BLANK FORM
  $employee = [];
  $employee['first_name'] = '';
  $employee['last_name'] = '';
  $employee['birthday'] = '';
  $employee['start_date'] = '';
  $employee['user_level'] = '';
  $employee['user_level'] = '';
  $employee['department_initial'] = '';
  $employee['email'] = '';
  $employee['username'] = '';
  $employee['password'] = '';
  $employee['confirm_password'] = '';

}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employees: Employee Home Page</title>
    <link href="stylesheets/public-styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="main-content">
      <header>
        <a href="<?php echo url_for('index.php'); ?>"><img src="images/logo.png" alt="champagne hotel room" width="165" height="100"></a>
        <h1>Remarkable Employees: Create Account</h1>
      </header>

      <main id="page-content">
        <aside id="navigation">
          <nav id="main-nav">
            <ul>
              <l1><a href="<?php echo url_for('index.php'); ?>">Home Page</a></l1>
              <l1><a href="login.php">Login</a></l1>
            </ul>
          </nav>
        </aside>

        <article id="description">
          <div>
            <h2>Create an Account</h2>
            <p>You must be an employee to create an account.</p>
            <p>If you have an account please login.</p>
          </div>
          <hr>
          <div>
          <form action="<?php echo url_for('create_account.php'); ?>" method="post">
            <label for="first_name">First Name</label><br>
            <input type="text" id="first_name" name="first_name" value=""><br>
            <br>
            <label for="last_name">Last Name</label><br>
            <input type="text" id="last_name" name="last_name" value=""><br>
            <br>
            <label for="birthday">Birthday (YYYY/MM/DD)</label><br>
            <input type="text" id="birthday" name="birthday" value=""><br>
            <br>
            <label for="start_date">Start Date (YYYY/MM/DD)</label><br>
            <input type="text" id="start_date" name="start_date" value=""><br>
            <br>
            <label for="user_level">Account Type (admin or employee)</label><br>
            <input type="text" id="user_level" name="user_level" value=""><br>
            <br>
            <label for="department_initial">Department (initial)</label><br>
            <input type="text" id="department_initial" name="department_initial" value=""><br>
            <br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" value=""><br>
            <br>
            <label for="username">Username</label><br>
            <input type="text" id="username" name="username" value=""><br>
            <br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" value=""><br>
            <br>
            <label for="password">Confirm Password</label><br>
            <input type="password" id="password" name="confirm_password" value=""><br>
            <p>Password should be at least 8 characters.  
              <br>Include at least one of the following:
              <br>Uppercase, Lowercase, Number, and Symbol
            </p>
            <div id="operations">
              <input type="submit" name="submit" value="Create Account">
            </div>
          </form>
          </div>
        </article> 
      </main>
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>
