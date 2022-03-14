
<?php require_once('../private/initialize.php'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Remarkable Employees: Public Home</title>
    <link href="stylesheets/public-styles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <div id="main-content">
      <header>
        <a href="index.php"><img src="images/logo.png" alt="champagne hotel room" width="165" height="100"></a>
        <h1>Remarkable Employees: Public Home</h1>
      </header>

      <main id="page-content">
        <aside id="navigation">
          <nav id="main-nav">
            <ul>
              <l1><a href="create_account.php">Create Account</a></l1>
              <l1><a href="login.php">Login</a></l1>
            </ul>
          </nav>
        </aside>

        <article id="description">
          <div>
            <h2>A unique opportunity</h2>
            <p>This company is growing, adding new experiences, new hotels and a mixed-use entertainment destination. If you would like to speak with us about business development opportunities, hotel management services, or new hospitality concepts, don’t hesitate to reach out.</p>
          </div>
          <hr>
          <div>
            <p>This page is intended for the employees.</p>
            <p></p>
          </div>
        </article> 
      </main>

      <!-- PAGE FOOTER -->
      <footer>
        &copy; <?php echo date('Y'); ?> Mechelle &#9774; Presnell &hearts;
      </footer>
    </div>
  </body>
</html>
