<?php 
require_once('../../../private/initialize.php'); 
require_login();
is_admin();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employees: New Employee</title>
    <link href="../../stylesheets/public-styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="main-content">
      <header>
        <a href="<?php echo url_for( 'staff/admin/index.php'); ?>"><img src="../../images/logo.png" alt="champagne hotel room" width="165" height="100"></a>
        <h1>Remarkable Employees</h1>
        <h3>Where we come together as a team.</h3>
      </header>

      <main id="page-content">
        <aside id="navigation">
          <nav id="main-nav">
            <ul>
              <l1><a href="<?php echo url_for( '/staff/admin/index.php'); ?>">Home Page</a></l1>
              <l1><a href="announcements.php">Announcements</a></l1>
              <l1><a href="images.php">Images</a></l1>
              <l1><a href="employee_list.php">Employee List</a></l1>
              <l1><a href="<?php echo url_for('../public/logout.php'); ?>">Logout</a></l1>
            </ul>
          </nav>
        </aside>
        <article id="description">
          <div>
            <?php echo display_session_message(); ?>
            <h1>User: <?php echo $_SESSION['username']; ?></h1>
            <p>Admin page to add a new employee</p>
          </div>
          <hr>
          <div>
            <form action="<?php echo url_for('/staff/admin/create.php');  ?>" method="post">
              <label for="first_name">First Name</label><br>
              <input type="text" id="first_name" name="first_name" value=""><br>
              <br>
              <label for="last_name">Last Name</label><br>
              <input type="text" id="last_name" name="last_name" value=""><br>
              <br>
              <!-- <label for="birthday">Birthday(YYYY/MM/DD)</label><br>
              <input type="text" id="birthday" name="birthday" value=""><br>
              <br>              
              <label for="start_date">Start Date(YYYY/MM/DD)</label><br>
              <input type="text" id="start_date" name="start_date" value=""><br>
              <br> -->
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
                <input type="submit" name="submit" value="Add Employee">
              </div>
            </form>
          </div>
        </article> 
      </main>

      <!-- Putt the below in the staff_footer page later and style it with staff_footer.css -->
      <!-- PAGE FOOTER -->
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>

