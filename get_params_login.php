<!DOCTYPE html>

<html>
<head>
    <title>Form 2</title>

</head>
<body>
        <section>
            Welcome
                    <?php
                            $un  =$_GET{"reg_un"};
                            $pw  =$_GET{"reg_pass"};
                            if($un=="elad" && $pw=="0900")
                            echo "<h2> Hello " . $un . " </h2>";
                            else
                            echo "<h2> Try again! </h2>";

                    ?>
        </section>          


</body>


</html>