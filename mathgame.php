<!DOCTYPE html>
<html>
    <title>math game</title>
    <head>
        Game Tebak
    </head>
    <body>
    <body bgcolor="yellow">
<form>
  <!-- untuk pindah link-->
<style type="text/css">
 body{
  width: 100%
 }
 input{
  background: #13131326;
  width: 100%;
  outline: none;
 }
 button{
  width: 90%;font-weight: 700;
  color: white;cursor: pointer;
 }
 input,button{
  padding: 10px;border: 0;border-radius: 50px;
  display: block;margin-top: 20px;
 }
 .box{
  width: 60%;display: flex;clear: both;
  margin: 0 auto;text-align: center;
 }
 #reset{
  background: #7FFF00;
 }
 #cek{
  background: #7FFF00;
 }
 h3,h5{
  margin: 0;font-family: 'Jokerman';text-align: center;
 }
</style>
<body>
  <h1 align="center">Game Tebak Angka</h1>
  
  <div class="box">
   <input type="number" name="inputan" id="inputan">
  </div>

  <div class="box">
   <button id="reset" onclick="randomAngka()">Reset Angka</button>
   <button id="cek" onclick="cekAngka()">Cek</button>
  </div>

</body>
<script type="text/javascript">
 var angka;
 function randomAngka(){
  angka = Math.floor(Math.random() * 11);
  return angka;     
 }
 randomAngka();
 function cekAngka() {
  var inputan = document.getElementById('inputan').value;
  if (inputan == angka) {
   alert('Benar angkanya adalah '+ angka);
  }else if(inputan<angka){
   alert('Angka yang kamu masukkan terlalu kecil')
  }else{
   alert('Angka yang kamu masukkan terlalu besar')
  }
 }
</script>
</form>
</body>

    </body>
</html>