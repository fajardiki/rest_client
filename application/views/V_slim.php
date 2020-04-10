<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
                <label for="selectdata">Select Data</label>
                <input class="form-control" type="" name="selectdata" id="selectdata">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" style="width: 100%" name="btnselect">Select</button>
            </div>
        </form>

        <?php if (isset($bridgelog) and !empty($bridgelog)) {
            foreach ($bridgelog['Bridge_Log'] as $bl) {
                echo "~ ".$bl['id']." ~";
                echo $bl['msisdn'];
                echo $bl['called'];
                echo $bl['lat'];
                echo $bl['lng'];
                echo $bl['area'];
                echo $bl['ts'];
                echo $bl['tenant'];
            }
            echo "<br><br>";
        } ?>

        <footer style="position: fixed; left: 0; bottom: 0; background-color: #ff0000; padding: 10px; border-radius: 0px 10px 0px 0px;">
            <?php if (isset($bridgelog) and !empty($bridgelog)) {
                echo "<b style='color: #fff;'>Execution Time : ".$bridgelog['time']."</b>";
            } ?>
        </footer>
        <footer style="position: fixed; bottom: 0; right: 0; background-color: #ff0000; padding: 10px; border-radius: 10px 0px 0px 0px;">
            <?php if (isset($ws) and !empty($ws)): ?>
                <a href="../C_menu/slim"><?php echo "<b style='color: #fff;'>".$ws."</b>"; ?></a>       
            <?php endif ?>
        </footer>
    </div>

</body>
</html>