<!DOCTYPE html>
<html lang="<?=$website_lang?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$website_name . " | " . $website_slogan?></title>
	<link rel="shortcut icon" href="<?=$website_icon?>" type="image/png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Palanquin+Dark:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=urls['css']?>/icofont.min.css">
	<link rel="stylesheet" type="text/css" href="<?=urls['css']?>/main.css">
</head>
<body>

	<header class="main-header" style="<?php if($website_background == "color"){
			echo 'background-color: '.$website_background_color.';'; } else if($hero_image === true){
			echo 'background: linear-gradient(90deg, rgba(233,30,99,.5),rgba(63,81,181,.5)), 
					 url(\''.urls['images'].'/'.$website_background_image.'\') center center / cover no-repeat;';
		} else{
			echo 'background: url(\''.urls['images'].'/'.$website_background_image.'\') center center / cover no-repeat;';
		}
				?>
		">
		<?php include "php/includes/menu.php"; ?>

		<div class="main-header-body" <?=(!$show_players_online) ? 'style="margin-top: 0;"' : ''?>>
			<img src="<?=urls['images']?>/logo.png" alt="">

			<h2>
				<?=$website_name?>

				<i>
					<?=$website_slogan?>
				</i>

				<div>
					<span>
						<?php if($show_server_ip === true){?>
						<?=$server_ip?>:<?=$server_port?>
						<?php } else{ ?>
						<?=$server_ip?>
						<?php } ?>
					</span>
				</div>
			</h2>
		</div>

		<?php if ($show_players_online === true): ?>
		<div class="main-header-players-online">
			<div>
				<i class="icofont-users-alt-6"></i>

				<?php
					$server_info = json_encode(fetch_server_info($server_ip, $server_port));
					$server_info = json_decode($server_info);
					$maxplayers = $server_info->max_players; 				
					$players = $server_info->players; 				
				?>

				Online <?=$players?>/<?=$maxplayers?>
			</div>
		</div>
		<?php endif ?>
	</header>
	
</body>
</html>