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

    <!-- <div class="main"> 
         <img class="img" src="https://avatars.githubusercontent.com/u/92504989?s=400&u=31e563b79e161f0a9dc6357fb3e52a8e90623333&v=4">
        <tr aria-colspan="3">
                <td><img class="img" src="<?=base_url('assets/img/siska.jpg')?>" class="gambar">
            <tr> -->
        <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">
  <img src="<?=base_url('assets/img/siska.jpg')?>" class="rounded-circle mx-auto d-block py-3" alt="..." width="160" height="190">
    <table class="mx-auto">
      <tr>
        <td>
          <button type="button" class="btn btn-light" style="width: 320px"><?= $nama ?></button>
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          <button type="button" class="btn btn-light" style="width: 320px"><?= $npm ?></button>
        </td>
      </tr>
      <tr>
        <td>
        <button type="button" class="btn btn-light" style="width: 320px"><?= $kelas ?></button>
        </td>
      </tr>
  
    </table>

<?=$this->endSection() ?>
    
<!-- </body>
</html> -->