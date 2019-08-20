<html>

<head>

<title>mengubah ukuran gambar menggunakan javascript</title>

<script type="text/javascript">

var panjang;

var lebar;

var x = 0;

function bacaUkuran()

{

panjang = document.getElementById("gambar").width;

lebar = document.getElementById("gambar").height;

}

function tambahSize()

{

x++;

document.getElementById("gambar").width = Math.pow(2, x) * panjang;

document.getElementById("gambar").height = Math.pow(2, x) * lebar;

}

function kurangiSize()

{

x--;

document.getElementById("gambar").width = Math.pow(2, x) * panjang;

document.getElementById("gambar").height = Math.pow(2, x) * lebar;

}

function resetSize()

{

x = 0;

document.getElementById("gambar").width = Math.pow(2, x) * panjang;

document.getElementById("gambar").height = Math.pow(2, x) * lebar;

}

</script>

</head>

<body onload="bacaUkuran()">

<div align="center">

<h1>contoh mengubah ukuran gambar dengan javascript</h1>

<input type="button" value="perkecil" onclick="kurangiSize()" />

<input type="button" value="ukuran semula" onclick="resetSize()" />

<input type="button" value="perbesar" onclick="tambahSize()" />

<br/><br/>

<img src="img/avatar1.jpg" name="gambar" width="90" height="83" id="gambar"/></div>

</body>

</html>