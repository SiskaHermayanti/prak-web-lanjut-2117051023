<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <title>Document</title>

</head>

<body> -->
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

    <div class=mt-2
    style="width: 500px;
    padding: 40px 35px;
    position: absolute;
    top: 100px;
    left: 0;
    right: 0;
    margin: 0 auto; /* Mengatur elemen ke tengah */
    border-radius: 20px;
    background-color: whitesmoke;">
    
        <div style="text-align: center;">
            <img src="<?= $user['foto'] ?? base_url('assets/img/siska.jpg') ?>" class="rounded-circle mx-auto d-block py-3" alt="foto" width="160" height="190">
        </div>
            
        <div class="d-grid gap-3 mx-auto mt-5" style="width: 70%;">
            <button type="button" class="btn btn-secondary"><?=$user['nama']?></button>
            <button type="button" class="btn btn-secondary"><?=$user['npm']?></button>
            <button type="button" class="btn btn-secondary"><?=$user['nama_kelas']?></button>
        </div>
    </div>

<?=$this->endSection() ?>
    
<!-- </body>
</html> -->