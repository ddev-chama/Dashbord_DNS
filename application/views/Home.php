<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to My First CodeIgniter Application</title>
</head>
<body>

 
<div class="gallery">
    <ul>
    <?php foreach($member as $mb): ?>
        <li><p><?php echo $mb['name'] ?> </p></li>
    <?php endforeach; ?>
    </ul>
</div>
</body>
</html>