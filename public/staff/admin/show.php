<?php
require_once('../../../private/initialize.php');
require_login();
is_admin();

// Get the value and assign it to a local variable
$id = $_GET['employee_id'] ?? '1';

$subject = find_employee_by_id($id);
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employee Info</title>
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
          </div>
          <hr>
          <div>
            <h2>Employee <?php echo h($subject['first_name']) . " " . h($subject['last_name']); ?></h2>
            <div>
              <div class="attributes">
                <dl>
                  <dt>First Name</dt>
                  <dd><?php echo h($subject['first_name']); ?></dd>
                </dl>
                <dl>
                  <dt>Last Name</dt>
                  <dd><?php echo h($subject['last_name']); ?></dd>
                </dl>
                <dl>
                  <dt>Birthday</dt>
                  <dd><?php echo h($subject['birthday']); ?></dd>
                </dl>
                <dl>
                  <dt>Start Date</dt>
                  <dd><?php echo h($subject['start_date']); ?></dd>
                </dl>
                <dl>
                  <dt>User Type</dt>
                  <dd><?php echo h($subject['user_level']); ?></dd>
                </dl>
                <dl>
                  <dt>Department</dt>
                  <dd><?php echo h($subject['department_initial']); ?></dd>
                </dl>
                <dl>
                  <dt>Email</dt>
                  <dd><?php echo h($subject['email']); ?></dd>
                </dl>
              </div>
          </div>
        </article> 
      </main>
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>

