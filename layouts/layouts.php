<?php
class layouts{
    public function headeing (){
        ?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Web Page</title>
</head>
<body> 
    <?php

    }
    public function footer(){
        ?>
        <div>
            Copyright &copy; ICS  <?php print date('Y');?>
        </div>
    
    </body>
    </html>

    <?php
    


    }
}