<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>


<section id="cart">
        <div class="user-chat">
            <div class="top-user-chat">
                <h2>Chat</h2>
            </div>
            <img src="img/User-Profile-PNG-Clipart.png" alt="user-profile">
            <h4 class="user-name"><?php echo $item['item_username']??"unknown";?></h4>
        </div>
        <div class="chat-background">
            <div class="chating-here">
                <img src="img/insert-picture-icon.png" class="insert-image" alt="insert-picture-icon">
                <img src="img/smile.png" class="emoji" alt="smile">
                <input type="text" placeholder="Chat here...">
                <img src="img/send-message.png" class="send" alt="send-message">
            </div>
        </div>
</section>

<?php
        endif;
        endforeach;
?>