<?php
function alertMissingFields($errmsg)
{
?>
	<div class="alert alert-danger alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" style="padding-right:10px;">&times;</button>
          <?php echo $errmsg; ?>
    </div>  
<?php
}
?>


<?php
function fieldExist($errmsg)
{
?>
	<div class="alert alert-danger alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" style="padding-right:10px;border:0px;">&times;</button>
          <?php echo $errmsg; ?>
    </div>  
<?php
}
?>


<?php
function errorAlert($errmsg)
{
?>
	<div class="alert alert-danger alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" style="padding-right:10px;">&times;</button>
          <?php echo $errmsg; ?>
    </div>  
<?php
}
?>


<?php
function successAlert($errmsg)
{
?>
	<div class="alert alert-success alert-dismissible">
       <button type="button" class="close" data-dismiss="alert" style="padding-right:10px;">&times;</button>
          <?php echo $errmsg; ?>
    </div>  
<?php
}
?>