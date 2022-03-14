
<?php 
require_once('../../private/initialize.php'); 
require_login();

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employee Announcements</title>
    <link href="../stylesheets/public-styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="main-content">
      <header>
        <a href="<?php echo url_for( '/staff/index.php'); ?>"><img src="../images/logo.png" alt="champagne hotel room" width="165" height="100"></a>
        <h1>Remarkable Employee Announcements</h1>
        <h3>Where we come together as a team.</h3>
      </header>

      <main id="page-content">
        <aside id="navigation">
          <nav id="main-nav">
            <ul>
              <l1><a href="index.php">Home Page</a></l1>
              <l1><a href="announcements.php">Announcements</a></l1>
              <l1><a href="images.php">Images</a></l1>
              <l1><a href="employee_list.php">Employee List</a></l1>
              <l1><a href="<?php echo url_for('../public/logout.php'); ?>">Logout</a></l1>
            </ul>
          </nav>
        </aside>

        <article id="description">
          <div>
            <h1>Reminders &amp; Announcements</h1>
            <h3>User: <?php echo $_SESSION['username']; ?></h3>
            <p>The announcement will show above the input field</p>
            <form action="announcements.php" method="post">
              <label for="announcement">Announcement</label><br>
              <textarea id="announcement" name="announcement" rows="5" cols="50">
              </textarea>
              <br>
              <input type="submit" name="submit" value="Submit"><br>
            </form>
          </div>
          <hr>
          <div>
            <h1>The live calendar goes here</h1>
            <p>--------------------------------</p>
            <p>--------------------------------</p>
            <p>--------------------------------</p>
            <p>--------------------------------</p>
            <p>--------------------------------</p>
          </div>
        </article> 
      </main>
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>
<?php db_disconnect($db); ?>