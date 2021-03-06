<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- BOOTSTRAPE -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="<?php echo base_url($action); ?>" method="post">
			<div class="form-group">
				<label for="msisdn">Msisdn</label>
				<input class="form-control" type="" name="msisdn" id="msisdn">
			</div>
			<div class="form-group">
				<label for="called">Called</label>
				<input class="form-control" type="" name="called" id="called">
			</div>
			<div class="form-group">
				<label for="lat">Lat</label>
				<input class="form-control" type="" name="lat" id="lat">
			</div>
			<div class="form-group">
				<label for="lng">Lng</label>
				<input class="form-control" type="" name="lng" id="lng">
			</div>
			<div class="form-group">
				<label for="area">Area</label>
				<input class="form-control" type="" name="area" id="area">
			</div>
			<div class="form-group">
				<label for="ts">ts</label>
				<input class="form-control" type="" name="ts" id="ts">
			</div>
			<div class="form-group">
				<label for="tenant">tenant</label>
				<input class="form-control" type="" name="tenant" id="tenant">
			</div>
			<div class="form-group">
				<label for="jumlahinsert">Jumlah insert</label>
				<input class="form-control" type="" name="jumlahinsert" id="jumlahinsert">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" style="width: 100%" name="btninsert">Insert data</button>
			</div>
		</form>

		<?php if (isset($insert) and !empty($insert)) { ?>
        <footer style="position: fixed; left: 0; bottom: 0; background-color: #ff0000; padding: 10px; border-radius: 0px 10px 0px 0px; opacity: 0.7">
            <div class="container" style="color: #fff;">
            	<p>Jumlah request : <?php echo $insert['req']; ?></p>
                <div class="row">
                    <div class="col">
                        <b>Web Service</b>
                            <?php echo "<p>Execution Time : ".$insert['time']."</p>
                                <p>Memory Usage : ".$insert['memory']."</p>" ?>
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <b>Client</b>
                        <p>Execution Time : <?php echo $time; ?> Second</p>
                        <p>Memory Usage : {memory_usage}</p>
                    </div>
                    
                </div>
            </div>
        </footer>
        <?php } ?>
        
        <footer style="position: fixed; bottom: 0; right: 0; background-color: #ff0000; padding: 10px; border-radius: 10px 0px 0px 0px;">
            <?php if (isset($ws) and !empty($ws)): ?>
                <a href="<?php echo base_url($link) ?>"><?php echo "<b style='color: #fff;'>".$ws."</b>"; ?></a>       
            <?php endif ?>
        </footer>
	</div>
</body>
</html>