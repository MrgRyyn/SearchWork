<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="reviews">
        <div class="ulasan">
            <h2>Reviews</h2>
            <p>Reviews for <?php echo $item['item_name']??"unknown";?> by <?php echo $item['item_username']??"unknown";?></p>
            <h3>5.0/<span>5</span></h3>
            <div class="review-rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>

            <div class="client-review">
                <img src="img/business categories.jpg" alt="">
                <h4>Anonymous442</h4>
                <div class="client-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Sangat puas dengan kerjaan yang dilakukan, pokoknya mantap deh!</p>
                <div class="img-ulasan">
                    <img src="<?php echo $item['item_image'] ?? "img/camera categories.jpg"; ?>" class="gambar-ulasan" alt="">
                    <img src="<?php echo $item['item_image2'] ?? "img/camera categories.jpg"; ?>" class="gambar-ulasan" alt="">
                    <img src="<?php echo $item['item_image3'] ?? "img/camera categories.jpg"; ?>" class="gambar-ulasan" alt="">
                </div>
                <div class="ulasan-bottom">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
            </div>

            <div class="client-review">
                <img src="img/business categories.jpg" alt="">
                <h4>Anonymous442</h4>
                <div class="client-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <p>Sangat puas dengan kerjaan yang dilakukan, pokoknya mantap deh!</p>
                <div class="img-ulasan">
                    <img src="<?php echo $item['item_image'] ?? "img/camera categories.jpg"; ?>" class="gambar-ulasan" alt="">
                    <img src="<?php echo $item['item_image2'] ?? "img/camera categories.jpg"; ?>" class="gambar-ulasan" alt="">
                    <img src="<?php echo $item['item_image3'] ?? "img/camera categories.jpg"; ?>" class="gambar-ulasan" alt="">
                </div>
                <div class="ulasan-bottom">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
            </div>
        </div>
</section>


<!-- !product -->
<?php
        endif;
        endforeach;
?>
