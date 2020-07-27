<?php
include_once 'lang.php'; 
  $promo = "undefined";
	if (!empty($_REQUEST['q'])) {
	$promo = substr(htmlspecialchars(trim($_REQUEST['q'])),0,200);
	}
 	
  if($_GET['gclid'] == true){
    $gclid_utm = $_GET['gclid'];
    $gclid = "campaign=${gclid_utm}";
  }else{
    $gclid = "campaign=";
  }

  $tid1="tid1=UA-161812714-1";

  if(!isset($_COOKIE['_ga'])){
    $tid2 = "tid2=";
  }else{
    $tid2_utm = $_COOKIE['_ga'];
    $tid_cookie = "${tid2_utm}";
    $tid_cutted = substr($tid_cookie, 6);
    $tid2 = "tid2=${tid_cutted}";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title ?></title>
	<meta name="description" content="<?php echo $page_description ?>">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
</head>
<body>
	<header class="header">
		<div class="wrapper">
			<img class="small_logo" src="img/logo.png" alt="">
			<div class="text_logo">Kredityvonline</div>
		</div>
	</header>
	<div class="title_section">
		<div class="wrapper">
			<div class="title"><?php echo $text_title ?> <span class="color_title">95%</span></div>
			<div class="subtitle mob_hid"><?php echo $text_subtitle ?></div>
			<div class="subtitle">❤️<!-- <img src="img/heart.svg" alt=""> --><?php echo $text_subtitle2 ?></div>
		</div>
	</div>
	<section class="offers">
		<div class="wrapper">
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
			<a href="https://go.salesdoubler.net/in/offer/1844?aid=63223&source=adwords&campaign=<?php echo $gclid;?>&promo=<?php echo $promo;?>&<?php echo $tid1;?>&<?php echo $tid2;?>" class="offer">
				<div class="offer_logo"><img src="img/ccloan.png" alt=""></div>
				<div class="offer_title"><?php echo $repeat_clients ?></div>
				<div class="offer_descr">
					<div><?php echo $percent ?></div>
					<div><?php echo $from ?> 0% в день</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $summ ?></div>
					<div>до 10 000 грн.</div>
				</div>
				<div class="offer_descr">
					<div><?php echo $age ?></div>
					<div><?php echo $from ?> 18 лет</div>
				</div>
				<div class="offer_button" href="#"><?php echo $offer_button ?></div>
			</a>
		</div>
	</section>
	<section class="text_bottom">
		<div class="wrapper">
		
            <?php echo $big_large_text ?>
             
		</div>
	</section>
	<div class="overlay">
		<div class="modal">
			<div class="close_modal"><img src="img/close.svg" alt=""></div>
			<div class="modal_title"><?php echo $modal_title ?></div>
			<a href="#" class="offer_modal">
				<div class="logo"><img src="img/ccloan.png" alt=""></div>
				<div class="text">15.000₴</div>
				<div class="button"><div class="offer_button"><?php echo $modal_button ?></div></div>
			</a>
			<a href="#" class="offer_modal">
				<div class="logo"><img src="img/ccloan.png" alt=""></div>
				<div class="text">15.000₴</div>
				<div class="button"><div class="offer_button"><?php echo $modal_button ?></div></div>
			</a>
			<a href="#" class="offer_modal">
				<div class="logo"><img src="img/ccloan.png" alt=""></div>
				<div class="text">15.000₴</div>
				<div class="button"><div class="offer_button"><?php echo $modal_button ?></div></div>
			</a>
			<div class="modal_bottom">
				<form action="">
					<div class="input_block">
						<input placeholder="<?php echo $modal_name ?>" type="text">
						<input id="phone" placeholder="+380" type="text">
					</div>
					<div class="button_block">
						<button disabled=""><?php echo $modal_button_submit ?></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="push_block">
		<div class="white_block">
			<div class="image_block"><img src="img/wallet.png" alt=""></div>
			<div class="text_block"><?php echo $push_main_text ?> <span class="company_name_push">Ccloan</span> на <?php echo $push_sum ?> <span class="amount_push">5 000</span> грн на <span class="days_push">15</span> <?php echo $push_day ?></div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery-mask.js"></script>
	<script src="js/main.js"></script>
</body>
</html>