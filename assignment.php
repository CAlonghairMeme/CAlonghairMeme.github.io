<!DOCTYPE html PUBLIC>

<html lang = "en">
    <head>
        <title>Assignment</title>
    </head>
    <body>
        <?php
        function assignment($num){
            $tick = 1;
            while($tick <= $num){
                echo $tick;
                echo "</br>";
                $tick++;
            }
        }
        
        assignment(10);
        
        ?>
    </body>
</html>