<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("font-awesome/all.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("bootstrap.css") ?>">
    <link rel="stylesheet" href="<?= base_url("beranda.css") ?>">
    <link rel="stylesheet" href="<?= base_url("style.css") ?>">
    
</head>
<body>

    <?= $this->include("components/main_components.php") ?>
    <?= $this->renderSection("navbar") ?>

    <div class="container-fluid">
        <h1 class="display-1">VISI MISI</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae nisi nihil. Natus similique necessitatibus voluptatibus nam sunt magni nisi, animi harum hic architecto illum cupiditate, vero, fuga placeat reiciendis.</p>
    </div>
    
</body>
</html>