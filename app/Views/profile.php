<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <title>Document</title>

</head>

<body>
    
    <div class="main"> 
        <!-- <img class="img" src="https://avatars.githubusercontent.com/u/92504989?s=400&u=31e563b79e161f0a9dc6357fb3e52a8e90623333&v=4"> -->
        <h1>
        <table>
            <tr aria-colspan="3">
                <td><img class="img" src="<?=base_url('assets/img/siska.jpg')?>" class="gambar">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr><br>
           
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr><br>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas ?></td>
            </tr><br>
        </table>
        </h1>
    </div>
        

</body>
</html>