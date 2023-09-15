<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
body {
    padding: 100px;  
    font-family: "Roboto", sans-serif; 
    text-align: center; 
    /* background-color: #6944ff; */
}
.main {
    width: 750px;
    height: 400px;
    background-color: #F8F0E5;
    margin: 0 auto;
    border-radius: 10px;
    border: 1px solid #00008B;
    box-shadow: 5px 5px 10px 2px rgba(0, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    align-items: center; /* Untuk mengatur konten di tengah secara horizontal */
    justify-content: center; /* Untuk mengatur konten di tengah secara vertikal */
}
.img {
    width: 150px;
    height: 150px;
    border-radius: 100px;
}
h1 {
    font-size: 25px;
    color: #00008B;
    margin-left: auto;
    margin-right: auto;
}

</style>
<body>
    
    <div class="main"> 
        <img class="img" src="https://avatars.githubusercontent.com/u/92504989?s=400&u=31e563b79e161f0a9dc6357fb3e52a8e90623333&v=4">
        <h1>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr><br>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas ?></td>
            </tr><br>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><?= $npm ?></td>
            </tr><br>
        </table>
        </h1>
    </div>
        

</body>
</html>