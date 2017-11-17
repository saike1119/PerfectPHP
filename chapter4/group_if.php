<?php $display_message = true; ?>

<!--中括弧を用いる場合-->
<?php if ($display_message) { ?>
    <p>
        このメッセージは $display_messag がtrueの時にのみ表示されるメッセージです。
    </p>
<?php } else { ?>
    <p>
        このメッセージは $display_messag がfalseの時にのみ表示されるメッセージです。
    </p>
<?php } ?>

<!--コロンを用いる場合-->
<?php if ($display_message): ?>
    <p>
        このメッセージは $display_messag がtrueの時にのみ表示されるメッセージです。
    </p>
<?php else: ?>
    <p>
        このメッセージは $display_messag がfalseの時にのみ表示されるメッセージです。
    </p>
<?php endif; ?>
