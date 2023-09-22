<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/form.css")?>">
    <title>Document</title>
</head>
<body>
 
<form action="<?=base_url('user/store')?>" method="post">
<div class="container"> 
    <table>
        <tr>
            <td>Nama</td>
           
            <td><input class="form" type="text" name="nama"></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td><input class="form1" type="text" name="npm"></td>
        </tr>
        </table>
        <tr>
            <td><input class="btn" type="submit" value="Simpan"></td>
        </tr>
    
    </div>
    </form>

</body>
</html>