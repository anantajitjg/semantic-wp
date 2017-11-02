<?php
if (!is_active_sidebar('blog'))
    return;
?>
<div class="five wide column">
    <div class="ui widget segment">
        <?php dynamic_sidebar('blog'); ?>
    </div>
</div>