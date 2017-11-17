<?php
$is_error = false;
if ($is_error) {
    goto error;
}

error:
echo 'エラーです', PHP_EOL;
exit(1);
