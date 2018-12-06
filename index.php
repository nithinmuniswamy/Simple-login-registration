<?php include('./util/session_initilize.php'); ?>
<?php include('./includes/header.php'); ?>
    <main class="mt-4">
        <div class="container">
            <input type="text" id="filter_input" onkeyup="searchItems()" placeholder="Search for names.." title="Type in a name">
            <?php
                include('./util/db_config.php');
                $sql = "SELECT * FROM products";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table class='table' id='fillter_table'>";
                            echo "<tr class='header'>";
                                echo "<th>Product Name</th>";
                                echo "<th>Product Picture</th>";
                                echo "<th>Brand</th>";
                                echo "<th>Price</th>";
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td> <img src='" . $row['image_url'] . "' alt='". $row['name'] ."' width='100'> </td>";
                                echo "<td>" . $row['brand'] . "</td>";
                                echo "<td> $" . $row['cost'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                mysqli_close($link);
            ?>
        </div>
    </main>
<?php include('./includes/footer.php'); ?>  