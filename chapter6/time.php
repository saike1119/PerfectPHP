<!DOCTYPE html>
<html>
<head>
    <title>挨拶時間</title>
</head>
<body>
<?php $hour = date('H'); ?>
<?php if (5 <= $hour && $hour < 10): ?>
    <p>おはよう</p>
<?php elseif (10 <= $hour && $hour < 18): ?>
    <p>こんにちは</p>
<?php else: ?>
    <p>こんばんは</p>
<?php endif; ?>

<p>現在<?php echo $hour; ?>時です</p>>
</body>
</html>
<?php