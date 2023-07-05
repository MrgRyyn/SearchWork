<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>

<section id="freelancer-profile">
        <div class="lancer-profile">
            <div class="profile-name">
                <img src="<?php echo $item['profile_picture']??"unknown";?>" alt="">
                <h2><?php echo $item['item_username']??"unknown";?></h2>
                <div class="freelancer-rate">
                    <p>(5)</p>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="contact-chat">
                <a href="<?php printf('%s?item_id=%s', 'chat.php',  $item['item_id']); ?>"><button><h6>Chat</h6></button></a>
            </div>
            <div class="freelancer-info">
                <i class="fa-solid fa-location-dot"><h4>Jl. Olahraga Arcamanik Bandung</h4></i>
                <i class="fa-solid fa-earth-asia"><h4><?php echo $item['item_method']??"unknown";?></h4></i>
            </div>
            <div class="freelancer-about">
                <h2>About me</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse voluptas quidem tempore. Reprehenderit at tenetur incidunt illo consequatur ipsam, officiis inventore! Dicta, ullam, doloribus nihil saepe pariatur, asperiores corrupti repellat sequi ex quidem omnis. Quis eius totam dolor? Nam laudantium, voluptate maxime rem necessitatibus fugiat aliquam nostrum adipisci labore eveniet!</p>
            </div>
        </div>
</section>


<!-- !product -->
<?php
        endif;
        endforeach;
?>
