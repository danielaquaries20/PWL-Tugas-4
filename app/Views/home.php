<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello Ini adalah Halaman Utama</h1>

    <!-- <a href="<?= base_url('home'); ?>">Home</a>
    <br>
    <a href="<?= base_url('home/about'); ?>">About</a>
    <br>
    <a href="<?= base_url('home/services'); ?>">Services</a>
    <br>
    <a href="<?= base_url('home/contact'); ?>">Contact</a>
    <br>
    <a href="<?= base_url('home/description'); ?>">Description</a> -->

    <nav>
        <ul>
            <li><a href="<?= base_url('home'); ?>">Home</a></li>
            <li><a href="<?= base_url('home/about'); ?>">About</a></li>
            <li><a href="<?= base_url('home/services'); ?>">Services</a></li>
            <li><a href="<?= base_url('home/contact'); ?>">Contact</a></li>
            <li><a href="<?= base_url('home/description'); ?>">Description</a></li>
        </ul>
    </nav>
</body>

</html>