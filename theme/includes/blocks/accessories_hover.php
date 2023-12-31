<div class="cursor">
    <div class="content">
        <div class="heading">Click</div>
        <div class="description">get it for <span>Absolutely Free</span> with <span>each T-shirt</span></div>
    </div>
</div>
<div class="top">

</div>
<section class="accessories-section">
    <h2 class="heading">Accessories</h2>
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
                        <?php echo $product["product"]["name"]?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<div class="bottom">

</div>