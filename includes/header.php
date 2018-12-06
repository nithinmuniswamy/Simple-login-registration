<!DOCTYPE html>
<html>
    <head>
        <title><?php echo basename($_SERVER['PHP_SELF'], ".php")." Page"; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/table.css">
        
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <?php  if (isset($_SESSION['username'])) : ?>
                <a class="navbar-brand" style="color:#fff;">Welcome <strong> <?php echo $_SESSION['username']; ?></strong></a>
            <?php else: ?>
                <a class="navabar-brand" style="color:#fff;">Sample Project</a>
            <?php endif ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav ml-auto">
            <?php  if (isset($_SESSION['username'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="./index.php?logout='1'">Logout</a>
                </li>
            <?php else: ?>
                <?php $loc = basename($_SERVER['PHP_SELF'], ".php"); if( $loc === 'register'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                <?php else:?>
                    <li class="nav-item">
                        <a class="nav-link" href="./register.php">Register</a>
                    </li>
                <?php endif ?>
            <?php endif ?>
            </ul>
        </div>
        </nav>