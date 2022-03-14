<?php 
require_once('../../private/initialize.php'); 
require_login();

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employee Page</title>
    <link href="../stylesheets/public-styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="main-content">
      <header>
        <a href="<?php echo url_for('staff/index.php'); ?>"><img src="../images/logo.png" alt="champagne hotel room" width="165" height="100"></a>
        <h1>Remarkable Employees</h1>
        <h3>Where we come together as a team.</h3>
      </header>

      <main id="page-content">
        <aside id="navigation">
          <nav id="main-nav">
            <ul>
              <l1><a href="<?php echo url_for( '/staff/index.php'); ?>">Home Page</a></l1>
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
            <h1>Hello <?php echo $_SESSION['username']; ?></h1>
            <h3>This is your <?php echo $_SESSION['user_level']; ?> Home Page</h3>
            <p></p>
          </div>
          <hr>
          <div>
            <p>This page is intended for the employees.</p>
            <p></p>
          </div>
        </article> 
      </main>
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>
<?php //db_disconnect($db); ?>
