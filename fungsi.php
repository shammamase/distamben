<?php 
	
	function kanan(){
		?>
	<div class="col-sm-4 col-md-4 col-lg-4">
 			<div class="login">
 				<h3>Login</h3>
 				<hr>
 				<form action="">
 				<input type="text" name="user" placeholder="Username" size="30">
 				<input type="password" name="pass" placeholder="Password" size="30">
 				<input type="submit" name="kirim" value="Masuk">
 				</form>
 			</div>
 			<div class="date">
 				<div id="jsCalendar"></div>
 			</div>
 			<div class="galery">
 				Galeri
 			</div>
 			<div id="carousel-id" class="carousel slide galery1" data-ride="carousel">
 				<ol class="carousel-indicators">
 					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
 					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
 					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
 				</ol>
 				<div class="carousel-inner">
 					<div class="item">
					<img src="img/item2.jpg" height="152" width="270" alt=""> 
 					</div>
 					<div class="item">
 					<img src="img/item5.jpg" height="152" width="270" alt="">
 					</div>
 					<div class="item active">
 						<img src="img/item6.jpg" height="152" width="270" alt="">
 					</div>
 				</div>
 				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
 				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
 			</div>
 		</div>
<?php		
	}

 ?>