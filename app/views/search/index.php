<?php $this->start('body');?>
<?php
	require_once(ROOT. '/core/DB.php');
	$db = new database;
	$qri = $db->query("SELECT * FROM basic_info ORDER BY id DESC");
	$count = mysqli_num_rows($qri);
	$qri = htmlentities($_POST['find'],ENT_QUOTES);
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$search = $db->query("SELECT * FROM basic_info WHERE name LIKE '%$qri%' OR army LIKE '%$qri%' OR rank LIKE '%$qri%' OR trade LIKE '%$qri%' OR perm_district LIKE '%$qri%' OR pres_district LIKE '%$qri%' OR blood_group LIKE '%$qri%' OR ueb LIKE '%$qri%'  ORDER BY id DESC");
	}else{
		header('location:'.PROOT.'dashboard');
	}
	$count = mysqli_num_rows($search);
?>


<!--  Inner breadcrumb start -->
<div class="col-md-12">
	<div class="bread">
        <i class="fa fa-search"></i>  <span class="big_font">Search Results </span>
    </div>
	<br />
	<br />
	<br />
</div>
<!--  Inner breadcrumb end -->

<!--  Global Breadcrumb -->
<!--  Global Breadcrumb end-->
<div class="col-md-12">
	<div class="row">
		<!--  Create class start from here -->
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row well " style="margin-top:-15px">
						<div class="col-md-12 ">
							<h5>You have searched for : <span style="color: red"><?= $qri; ?></span></h5>
						</div>
					</div>
					<br />
					<div id="col-md-12">
						<ul class="list-group">
							<?php 
								if($count == 0){
									echo "<div class='well well-sm'> No Data Found</div";
								}
							?>
							<?php while($res = $db->fetch($qri)){?>
							  <a href="<?= PROOT;?>soldier/profile/?show=<?= $res['army']?>" class="list-group-item">
								<img src="<?= PROOT;?>public/uploads/<?= $res['picture']?>" alt="" style="width:50px;height:50px"/> <?= $res['name']?>
							  </a>
						  <?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--  Create class ends here -->
		<!-- Class list start -->
		
		<!-- Class list end -->
	</div>

</div>



<?php $this->end()?>