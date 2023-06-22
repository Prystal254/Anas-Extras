<div class="cursor">
</div>
<div class="top">

</div>
<section class="accessories-section">
    <div class="inner">
        <div class="accessories">
            <?php foreach($block["products"] as $product){?>
                <div class="accessory">
                    <div class="name">
                        <?php echo $product["product"]["name"]?>
                    </div>
                    <div class="image">
                        <img class="image-img" src="<?php echo $product["product"]["image"]?>" alt="">
                        <div class="shadow"></div>
                    </div>
                    <div class="details">
                        <div class="price">$<?php echo $product["product"]["price"] ?></div>
                        <div class="price free">FREE</div>
                    </div>
                    <div class="display-name">
                        <span class="primary"><?php echo $product["product"]["name"]?></span>
                        <span class="secondary"><?php echo $product["product"]["name"]?></span>
                        <span class="tertiary"><?php echo $product["product"]["name"]?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<div class="bottom">

</div>