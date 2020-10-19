<?php require_once('include/links.php'); ?>
<?php require_once('include/header.php'); ?>
<?php require_once('welcome.php'); ?>


		<?php
			if (isset($_GET['details'])) {
				$id = $_GET['details'];
			}
			$fetch_data = "SELECT * FROM projects WHERE pro_id=".$id;
			$execute_query = mysqli_query($db,$fetch_data);
			$details = mysqli_fetch_assoc($execute_query);
		?>
			
        <div id="details" class="contact-info-area section-padding">
            <div class="container">
				<div style="margin-top:10px; border:1px solid black; box-shadow: 0px 10px 30px #888888;">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<a href="index.php"
								style="font-size:14px; text-align:left;
									   border:1px solid black;
									   border-radius:0px !important;
									   margin:0px !important;"
								class="btn btn-primary">Home</a>
							<div class="text-center" style="padding-top:20px;">
								<h1 class="text-danger">
									<a class="text-danger" href="<?= $details['pro_link']?>" target="_blank" style="margin-top: 3%;width: 30%;">
										<?= $details['pro_title']?>
									</a>
								</h1>
								
								<a href="assets/img/work/<?= $details['pro_img']?>">
									<img class="img-thumbnail" src="assets/img/work/<?= $details['pro_img']?>"
									style="width:80%; height:350px; border:2px solid red;  padding: 10px;
									box-shadow: 0px 10px 30px #888888;"  />
								</a>
								<div>
									<a class="btn btn-success" href="<?= $details['pro_link'] ?>" target="_blank" style="margin-top: 3%;width: 30%;">
										<i class="fa fa-chain-broken"> Live View</i>
									</a>			
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12">
							<div class="text-center" style="padding:30px;"><hr />
								
								<div class="text-justify" style="margin: 0 auto; display: inline-block;"><?= $details['pro_short']?></div><hr />
								<div class="text-justify" style="margin: 0 auto; display: inline-block;"><?= $details['pro_desc']?></div>
							
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>






<?php require_once('work.php'); ?>
<?php require_once('contact.php'); ?>
<?php require_once('include/footer.php'); ?>