<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include 'backend/DB_CN.php';
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Шилэн Нам</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Css -->
	<link rel="stylesheet" href="css/global.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<header>
		<?php
			include "templates/header.php";
		?>
	</header>

	
	<!-- Party detailed information goes here! -->

	<?php 

		if (isset($_GET['p_id'])) {
			$p_id = $_GET['p_id'];

	?>

	<div class="container" id="party">
		
		<?php
			$party_financial_list = new db_cn\Table("party_financial_list");
			$finance = new db_cn\Table("finance");
	  		$party = new db_cn\Table("party");
	  		$income = new db_cn\Table("income");
	  		$outcome = new db_cn\Table("outcome");
	  		$companies = new db_cn\Table("companies");
		?>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-3">
					<div class="party-img">
						<img src="res/party/democratic.png" alt="Neg Nam" class="img-responsive">
					</div>
				</div>
				<div class="col-lg-9">
					<div class="party-desc">
						<?php 
							$party_res = $party->selectFirst("title, acronym", "id = ".$p_id);
							$party_title = $party_res['title'];
							$party_acronym = $party_res['acronym'];

						echo "<h2>".$party_title." <small>(".$party_acronym.")</small></h2>";
						echo "<p><strong>Founded in 1987...</strong></p>";
						echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Consequatur vero, nihil nobis laboriosam, modi eos quisquam 
							eius odit repellendus animi suscipit quis nulla voluptatem adipisci.!</p>";
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php

				if (isset($_GET['total_income'])) {
					?>
					<h4 class="text-info text-center">Нийт санхүүжилт</h4>
					<div class="table-responsive">
						<table class="table table-default table-bordered table-hover">
							<tr>
								<th>Нам, эвсэл, бие даан нэр дэвшигчийн өөрийн хөрөнгөөс өгсөн</th>
								<th>Хуулийн этгээдээс өгсөн хандив</th>
								<th>Иргэдээс өгсөн хандив</th>
								<th>Бусад</th>
								<th>Талархан дэмжигч намаас</th>
								<th>Орлогын дүн</th>
							</tr>
						<?php
						if ($_GET['total_income'] == "request") {
							$incomes_ids = $party_financial_list->select("incomeid", "partyid = ".$p_id);
							foreach ($incomes_ids as $incomes_id) {
								?>
								
									<?php
										foreach ($income->select("*", "id = ".$incomes_id['incomeid']) as $row) {
											echo "<tr>";
											echo "<td>".$row['from_inside']."</td>";
											echo "<td>".$row['from_candidate']."</td>";
											echo "<td>".$row['from_people']."</td>";
											echo "<td>".$row['other']."</td>";
											echo "<td>".$row['other_parties']."</td>";
											echo "<td>".$row['total']."</td>";
											echo "</tr>";
										}
							}
						}
						?>
					</table>
					</div>
					<?php
				}
				if (isset($_GET['total_outcome'])) {
					if ($_GET['total_outcome'] == "request") {
						?>
						<h4 class="text-info text-center">Нийт үрэлт</h4>
						<div class="table-responsive">
							<table class="table table-default table-bordered table-hover">
								<tr>
									<th>Нам, эвслийн мөрийн хөтөлбөрийг тайлбарлан таниулах</th>
									<th>Нэр дэвшигчийг сурталчлах</th>
									<th>Уулзалт, хурал цуглаан зохион байгуулах</th>
									<th>Ажилтан, ухуулагч, шадар туслагчийн хөлс, урамшуулал</th>
									<th>Бичиг хэрэг</th>
									<th>Шуудан холбоо</th>
									<th>Шатахуун, унаа</th>
									<th>Томилолт</th>
									<th>Бусад</th>
									<th>Зардлын дүн</th>
								</tr>
							<?php
							if ($_GET['total_outcome'] == "request") {
								$outcomes_ids = $party_financial_list->select("outcomeid", "partyid = ".$p_id);
								foreach ($outcomes_ids as $outcomes_id) {
									?>
									
										<?php
											foreach ($outcome->select("*", "id = ".$outcomes_id['outcomeid']) as $row) {
												echo "<tr>";
											echo "<td>".$row['presentation']."</td>";
											echo "<td>".$row['advertisement']."</td>";
											echo "<td>".$row['management']."</td>";
											echo "<td>".$row['employee_salary']."</td>";
											echo "<td>".$row['chancery']."</td>";
											echo "<td>".$row['mail_and_shipping']."</td>";
											echo "<td>".$row['transportation']."</td>";
											echo "<td>".$row['assignment']."</td>";
											echo "<td>".$row['other']."</td>";
											echo "<td>".$row['total']."</td>";
											echo "</tr>";
											}
								}
							}
							?>
						</table>
						</div>
						<?php
					}
				}
				if (isset($_GET['date']) && isset($_GET['date_type'])) {
					$date = $_GET['date'];
					$date_type = $_GET['date_type'];
					$date_pieces = explode("/", $date);
					$day = $date_pieces[0];
					$month = $date_pieces[1];
					$year = $date_pieces[2];

					$f_ids_by_date = array();
					$i_ids_by_date = array();
					$o_ids_by_date = array();

					$income_and_outcome = array();


					try {

						if ($date_type == "full") {
							$f_ids_by_date = $finance->select("id", "day=".$day."&month=".$month."&year=".$year);
							echo "<h4 class='text-center'>".$party_title."ын ".$year." оны ".$month." сарын ".$day." нд хийгдсэн санхүү</h4>";
						} else if ($date_type == "monthly") {
							$f_ids_by_date = $finance->select("id", "month=".$month."&year=".$year);
							echo "<h4 class='text-center'>".$party_title."ын ".$year." оны ".$month." сард хийгдсэн санхүү</h4>";
						} else if ($date_type == "yearly") {
							$f_ids_by_date = $finance->select("id", "year=".$year);
							echo "<h4 class='text-center'>".$party_title."ын ".$year." онд хийгдсэн санхүү</h4>";
						}


						foreach ($f_ids_by_date as $tmp_f_id) {
							// echo "<pre>", print_r($party_financial_list->select("outcomeid, incomeid", "financeid=".$f_id)), "</pre>";
							$income_and_outcome = $party_financial_list->rawQuery("select outcomeid, incomeid from party_financial_list where financeid=".$tmp_f_id['id']."&partyid=".$p_id);
							foreach ($income_and_outcome as $io) {
								$i_id = $io['incomeid'];
								$o_id = $io['outcomeid'];

								array_push($i_ids_by_date, $i_id);
								array_push($o_ids_by_date, $o_id);
							}
						}

					} catch (Exception $ex) {
						echo "<div class='alert alert-warning'>".$ex->getMessage()."</div>";
					}
					?>
						<h5 class='text-info'>Орлого болон санхүүжилт</h5>
						<div class="table-responsive">
							<table class="table table-default table-bordered table-hover">
								<tr>
									<th>Нам, эвсэл, бие даан нэр дэвшигчийн өөрийн хөрөнгөөс өгсөн</th>
									<th>Хуулийн этгээдээс өгсөн хандив</th>
									<th>Иргэдээс өгсөн хандив</th>
									<th>Бусад</th>
									<th>Талархан дэмжигч намаас</th>
									<th>Орлогын дүн</th>
								</tr>
								<?php
									foreach ($i_ids_by_date as $i_id) {
										foreach ($income->select("from_inside, from_candidate, from_people, other, other_parties, total", "id=".$i_id) as $row) {
											echo "<tr>";
											echo "<td>".$row['from_inside']."</td>";
											echo "<td>".$row['from_candidate']."</td>";
											echo "<td>".$row['from_people']."</td>";
											echo "<td>".$row['other']."</td>";
											echo "<td>".$row['other_parties']."</td>";
											echo "<td>".$row['total']."</td>";
											echo "</tr>";
										}
										
									}
								?>
							</table>
						</div>

						<h5 class='text-info'>Зардал болон үрэлт</h5>
						<div class="table-responsive">
							<table class="table table-default table-bordered table-hover">
								<tr>
									<th>Нам, эвслийн мөрийн хөтөлбөрийг тайлбарлан таниулах</th>
									<th>Нэр дэвшигчийг сурталчлах</th>
									<th>Уулзалт, хурал цуглаан зохион байгуулах</th>
									<th>Ажилтан, ухуулагч, шадар туслагчийн хөлс, урамшуулал</th>
									<th>Бичиг хэрэг</th>
									<th>Шуудан холбоо</th>
									<th>Шатахуун, унаа</th>
									<th>Томилолт</th>
									<th>Бусад</th>
									<th>Зардлын дүн</th>
								</tr>
								<?php
									foreach ($o_ids_by_date as $o_id) {
										foreach ($outcome->select("*", "id=".$o_id) as $row) {
											echo "<tr>";
											echo "<td>".$row['presentation']."</td>";
											echo "<td>".$row['advertisement']."</td>";
											echo "<td>".$row['management']."</td>";
											echo "<td>".$row['employee_salary']."</td>";
											echo "<td>".$row['chancery']."</td>";
											echo "<td>".$row['mail_and_shipping']."</td>";
											echo "<td>".$row['transportation']."</td>";
											echo "<td>".$row['assignment']."</td>";
											echo "<td>".$row['other']."</td>";
											echo "<td>".$row['total']."</td>";
											echo "</tr>";
										}
										
									}
								?>
							</table>
						</div>

				<?php
				}
				?>
			</div>
			<div class="row">
				<div class="col-lg-3">

				</div>
				<div class="col-lg-9">
					<div class="table-responsive">
						<table class="table table-condensed table-bordered table-hover">
							<tr>
								<th>Огноо</th>
				      			<th><a href='party.php?p_id=<?php echo $p_id; ?>&total_income=request#party'>Нийт санхүүжилт</a></th>
				      			<th><a href='party.php?p_id=<?php echo $p_id; ?>&total_outcome=request#party'>Нийт үрэлт</a></th>
				      			<th>Бэлэн байгаа</th>
				      			<th>Өр зээл</th>
				      		</tr>
							<?php
								$result = $party_financial_list->select("financeid,partyid,outcomeid,incomeid", "partyid = ".$p_id);
					      		foreach ($result as $res) {
					      			$finance_res = $finance->selectFirst("year,month,day,debt,remaining", "id = ".$res['financeid']);
					      			$party_res =$party->selectFirst("id, title, acronym", "id = ".$res['partyid']);
					      			$outcome_res = $outcome->selectFirst("total", "id = ".$res['outcomeid']);
					      			$income_res = $income->selectFirst("total", "id = ".$res['incomeid']);

					      			$day = $finance_res['day'];
					      			$month = $finance_res['month'];
					      			$year = $finance_res['year'];

					      			$date = $day."/".$month."/".$year;

					      			$income_total = $income_res['total'];
					      			$outcome_total = $outcome_res['total'];
					      			$remaining = $finance_res['remaining'];
					      			$debt = $finance_res['debt'];

					      			echo "<tr>";
					      			echo "<td>";
					      				echo "<a href='party.php?p_id=".$p_id."&date_type=full&date=".$date."#party'>".$day."</a> - ";
					      				echo "<a href='party.php?p_id=".$p_id."&date_type=monthly&date=".$date."#party'>".$month."</a> - ";
					      				echo "<a href='party.php?p_id=".$p_id."&date_type=yearly&date=".$date."#party'>".$year."</a>";
					      			echo "</td>";
					      			echo "<td>".$income_total."</td>";
					      			echo "<td>".$outcome_total."</td>";
					      			echo "<td>".$remaining."</td>";
					      			echo "<td>".$debt."</td>";
					      			echo "</tr>";
					      		}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
	<?php 
	}
	?>


	<footer class="footer navbar navbar-fixed-bottom">
		<?php
			include "templates/footer.php";
		?>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.2.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Global Javascript and Jquery -->
	<script src="js/global.js"></script>
</body>
</html>