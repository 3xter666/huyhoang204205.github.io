<nav class="main-menu">
	<div class="main-menu-logo">
		<?php if($menu_logo){ ?>
		<img src="<?=$website_logo?>" alt="">
		<?php } ?>

		<a href="#">
			<?=$website_name?>
		</a>
	</div>

	<ul class="main-menu-items">
		<?php if ($show_store_link === true): ?>
		<li>
			<a href="#" class="main-menu__item">
				<i class="icofont-shopping-cart"></i> Store
			</a>
		</li>
		<?php endif ?>
	</ul>

	<ul class="main-menu-items main-menu-items--right">
		<?php if ($facebook != "none"): ?>
		<li>
			<a href="<?=$facebook?>" target="_blank" class="main-menu__item">
				<i class="icofont-facebook"></i>
			</a>
		</li>
		<?php endif ?>

		<?php if ($twitter != "none"): ?>
		<li>
			<a href="<?=$twitter?>" target="_blank" class="main-menu__item">
				<i class="icofont-twitter"></i>
			</a>
		</li>
		<?php endif ?>

		<?php if ($youtube != "none"): ?>
		<li>
			<a href="<?=$youtube?>" target="_blank" class="main-menu__item">
				<i class="icofont-youtube"></i>
			</a>
		</li>
		<?php endif ?>

		<?php if ($instagram != "none"): ?>
		<li>
			<a href="<?=$instagram?>" target="_blank" class="main-menu__item">
				<i class="icofont-instagram"></i>
			</a>
		</li>
		<?php endif ?>
	</ul>
</nav>