<div class="order-block">
	<div class="price-wrap gray-block">
	
		<?php
		// Если есть розничная цена
		if($price){ 
			include_once(locate_template('catalog-parts/product-hero/body-order-block--price.php'));
		// Если есть оптовая цена
		} elseif($price_opt){ 
			include_once(locate_template('catalog-parts/product-hero/body-order-block--price-opt.php'));
		} ?>
		
	</div>
	
	<?php if($catalog_pay_variants || $catalog_delivery_variants || $catalog_delivery_free){ ?>
	<div class="detail-wrap">
		
		<?php if($catalog_pay_variants){ ?>
		<div class="pay-wrap detail-block">
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.997 511.997" xmlns:v="https://vecta.io/nano"><use xlink:href="#B"/><path d="M507.927 115.875a19.13 19.13 0 0 0-15.079-7.348H118.22l-17.237-72.12c-2.062-8.618-9.768-14.702-18.629-14.702H19.152C8.574 21.704 0 30.278 0 40.856s8.574 19.152 19.152 19.152h48.085l62.244 260.443c2.062 8.625 9.768 14.702 18.629 14.702h298.135a19.15 19.15 0 0 0 18.59-14.543l46.604-188.329c1.41-5.719.114-11.765-3.512-16.406zM431.261 296.85H163.227l-35.853-150.019h341.003L431.261 296.85z"/><use xlink:href="#B" x="-231.741"/><defs ><path id="B" d="M405.387 362.612c-35.202 0-63.84 28.639-63.84 63.84s28.639 63.84 63.84 63.84 63.84-28.639 63.84-63.84-28.639-63.84-63.84-63.84zm0 89.376c-14.083 0-25.536-11.453-25.536-25.536s11.453-25.536 25.536-25.536 25.536 11.453 25.536 25.536-11.453 25.536-25.536 25.536z"/></defs></svg>
			</div>
			<div class="text">
				Оплата: <span><?php echo $catalog_pay_page_link; ?></span>
			</div>
		</div>
		<?php } ?>
		
		<?php if($catalog_delivery_variants){ ?>
		<div class="delivery-wrap detail-block">
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:v="https://vecta.io/nano"><path d="M105.054 321.244c-35.365 0-64.138 28.768-64.138 64.138s28.774 64.138 64.138 64.138 64.138-28.774 64.138-64.138-28.774-64.138-64.138-64.138zm0 95.107c-17.074 0-30.963-13.889-30.963-30.963s13.889-30.969 30.963-30.969 30.963 13.895 30.963 30.969-13.889 30.963-30.963 30.963zm286.41-95.107c-35.37 0-64.138 28.768-64.138 64.138s28.774 64.138 64.138 64.138 64.138-28.774 64.138-64.138-28.768-64.138-64.138-64.138zm0 95.107c-17.074 0-30.963-13.889-30.963-30.963s13.889-30.969 30.963-30.969 30.969 13.895 30.969 30.969-13.895 30.963-30.969 30.963z"/><path d="M63.032 144.864a16.59 16.59 0 0 0-14.746 8.99L1.841 243.98A16.58 16.58 0 0 0 0 251.577v133.806a16.59 16.59 0 0 0 16.587 16.587H56.95v-33.175H33.175V255.602l39.97-77.563h126.457v-33.175H63.032zm91.231 223.931H343.36v33.175H154.263z"/><path d="M495.413 62.479h-295.81a16.59 16.59 0 0 0-16.587 16.587v306.315h33.175V95.654h262.635v273.14h-39.81v33.175h56.397A16.59 16.59 0 0 0 512 385.382V79.067a16.59 16.59 0 0 0-16.587-16.588z"/><path d="M16.587 235.542h183.015v33.175H16.587zm412.155-71.84a16.58 16.58 0 0 0-23.416-1.382l-82.23 73.04-32.622-33.042c-6.436-6.519-16.941-6.585-23.455-.149a16.6 16.6 0 0 0-.149 23.46l43.675 44.233c3.235 3.279 7.52 4.938 11.81 4.938a16.51 16.51 0 0 0 11.003-4.186l93.996-83.496a16.59 16.59 0 0 0 1.388-23.416z"/></svg>
			</div>
			<div class="text">
				Доставка: <?php echo $catalog_delivery_page_link; ?>
			</div>
		</div>
		<?php } ?>
		
		<?php if($catalog_delivery_free){ ?>
		<div class="delivery-wrap detail-block">
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384" xmlns:v="https://vecta.io/nano"><path d="M275.312 140.688a16 16 0 0 0-22.624 0L184 209.368l-28.688-28.68a16 16 0 0 0-22.624 22.624l40 40C175.808 246.44 179.904 248 184 248s8.192-1.56 11.312-4.688l80-80a16 16 0 0 0 0-22.624zM368 176a16.01 16.01 0 0 0-16 16c0 88.224-71.776 160-160 160S32 280.224 32 192 103.776 32 192 32c42.952 0 83.272 16.784 113.544 47.264 6.216 6.28 16.352 6.312 22.624.08a16 16 0 0 0 .08-22.624C291.928 20.144 243.536 0 192 0 86.128 0 0 86.128 0 192s86.128 192 192 192 192-86.128 192-192a16.01 16.01 0 0 0-16-16z"/></svg>
			</div>
			<div class="text">
				Бесплатная доставка
			</div>
		</div>
		<?php } ?>
		
	</div>
	<?php } ?>
	
</div>