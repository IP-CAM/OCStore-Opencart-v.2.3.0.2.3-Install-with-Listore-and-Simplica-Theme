<?php echo $header; ?>

				<span itemscope itemtype="http://schema.org/Store">
					<meta itemprop="name" content="<?php echo $name; ?>">
					<meta itemprop="logo" content="<?php echo $logo; ?>">
					<meta itemprop="url" content="<?php echo $url; ?>">
					<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<meta itemprop="addressLocality" content="<?php echo $addresslocality; ?>">
						<meta itemprop="streetAddress" content="<?php echo $streetaddress; ?>">
						<meta itemprop="addressCountry" content="<?php echo $addresscountry; ?>">
					</span>
					<meta itemprop="telephone" content="<?php echo $telephone; ?>">
					<meta itemprop="email" content="<?php echo $email; ?>">
					<meta itemprop="openingHours" content="<?php echo $open; ?>">
				</span>
			
<div class="container">
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>