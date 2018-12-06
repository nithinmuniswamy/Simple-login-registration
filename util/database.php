<?php
    include('db_config.php');

    if (isset($_POST['reg_user'])) {
        // Escape user inputs for security
        $username = mysqli_real_escape_string($link, $_POST['username']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

        if(empty($username)){ array_push($errors, 'username is required');}
        if(empty($email)){ array_push($errors, 'Email is required');}
        if(empty($password_1)){ array_push($errors, 'Password is required');}

        if ($password_1 !== $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // Attempt insert query execution
        if(count($errors) == 0){
            $hash_password = md5($password_1);
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash_password')";
            if(mysqli_query($link, $sql)){
                header('location: index.php');
            } else{
                if(mysqli_errno($link) == 1062)
                       array_push($errors, "Email-Id already Exists");
                   else
                    echo "db insertion error:".$sql."<br>";
            }
        }
    }

    if (isset($_POST['login_user'])) {
        
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $password = mysqli_real_escape_string($link, $_POST['password']);

        if(empty($email)) {
            array_push($errors, 'email is required');
        }
        if(empty($password)) {
            array_push($errors, 'password is required');
        }

        if (count($errors) == 0) {
            $hash_password = md5($password);
			$sql = "SELECT * FROM users WHERE email='$email' AND password ='$hash_password'";
            $results = mysqli_query($link, $sql);
			if (mysqli_num_rows($results) == 1) {
                $row_users = mysqli_fetch_array($results);
                for ($i=0; $i<1; $i++)
                {
                    $username = $row_users['username'];
                }
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else{
				array_push($errors, "Wrong username/password combination");
			}
		}else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    // Close connection
    mysqli_close($link);
?>