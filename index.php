<!DOCTYPE html>
<html>
    <head>
        <title>Canadia Files</title>
        <link rel="stylesheet" type="text/css" href="files.css">
      <meta charset="UTF-8">
      <meta name="description" content="Canadia Files">
      <meta name="keywords" content="Files, Secrets, Canadia">
      <meta name="author" content="Nathan Hoehndorf, Tate Mitchell">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="index.php" method="post">
            <fieldset>
                <legend><affir><b>Sign In</b></affir></legend>
                Username:&nbsp<input type="username" name="username" class="text" placeholder="Username...">
                <br />
                Password:&nbsp<input type="password" name="password" class="text" placeholder="Password...">
                <br />
                <input type="submit" name="button" class="button" value="Sign In">
                <br />
                <p><a href="files.html">
                    <?php
                    
                    if ($_POST["username"] != "") {
                        
                        if ($_POST["username"] == "tato101" && $_POST["password"] == "Ilovebball852") {
                            
                            echo "Hello" . " " . "Tate" . "!";
                            
                        }
                        
                        else {
                            
                            
                            
                        }
                    }
                    
                    else {
                        
                        
                        
                    }
                    
                    ?>
                </a></p>
                <p><a href="files.html">
                    <?php
                    
                    
                    ?>
                </a></p>
                <p><a href="files.html">
                    <?php
                    
                    if ($_POST["username"] != "") {
                        
                        if ($_POST["username"] )
                        
                    
                    
                    ?>
                </a></p>
            </fieldset>
        </form>
    </body>
</html>