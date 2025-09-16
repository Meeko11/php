<?php 
            $username = "";

            $error_messages = [];

            if(isset($_REQUEST['btnSubmit'])){
                $username = $_REQUEST['username'];
                
                if($_REQUEST['username'] == ""){
                    array_push($error_messages, "Username is required!");
                }

                if($_REQUEST['password'] == ""){
                    array_push($error_messages, "Password is required!");
                }
            }
        ?>

        <!-- get send data thru url -->
        <!-- post send data thru http request -->
        <?php 
            if(!empty($error_messages)){
                foreach($error_messages as $error){
                    echo $error ."<br>";
                }
            }     
        ?>
        <form action="php_practice.php" method="get">
            <label for="">Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <br>    
            <label for="">Password:</label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="Login" name="btnSubmit">
        </form>