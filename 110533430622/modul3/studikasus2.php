<html>
<head>
    <title>Studi Kasus 2</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script dan transfer data menggunakan metode POST-->
      Jenis Alat Make Up
         <br><input type="checkbox" name="alat make up[]" value="eyeliner"
         <?php
         if (isset($_POST['alat make up'])){ //kondisi melakukan cek alat make up mempunyai nilai atau tidak        
                 foreach ($_POST['alat make up'] as $key => $val){ //pengulangan untuk membaca nilai array alat make up
         if($val == 'eyeliner'){ //checkbox akan ditandai bila 'eyeliner' merupakan salah satu elemen array alat make up        
                 echo 'checked="checked"';
                         }
                 }
         }
         ?>
         />eyeliner <!-- input berupa CheckBox -->
         <br><input type="checkbox" name="alat make up[]" value="bedak"
         <?php
         if (isset($_POST['alat make up'])){ //kondisi melakukan cek alat make up mempunyai nilai atau tidak
                 foreach($_POST['alat make up'] as $key => $val){ //pengulangan untuk membaca nilai array alat make up
                         if($val == 'bedak'){ //checkbox akan ditandai bila 'bedak' merupakan salah satu elemen array alat make up        
                                 echo 'checked="checked"';
                         }
                 }
         }
          ?>
         />bedak <!-- input berupa CheckBox -->
         <br><input type="checkbox" name="alat make up[]" value="lipstick"
         <?php
         if (isset($_POST['alat make up'])){ //kondisi melakukan cek alat make up mempunyai nilai atau tidak
                 foreach($_POST['alat make up'] as $key => $val){ //pengulangan untuk membaca nilai array alat make up
                         if($val == 'lipstick'){ //checkbox akan ditandai bila 'lipstick' merupakan salah satu elemen array alat make up      
                                 echo 'checked="checked"';
                         }
                 }
         }
         ?>
         />lipstick <!-- input berupa CheckBox -->
         <br><input type="submit" value="OK" /> <!--membuat button submit -->
</form>

<?php
         //Ekstraksi Nilai
         if (isset($_POST['alat make up'])){ //kondisi melakukan cek alat make up mempunyai nilai atau tidak        
                 foreach ($_POST['alat make up'] as $key => $val){ //pengulangan untuk mendapatkan nilai array alat make up dan disimpan pada variabel $val
                         echo ' '.$val.'<br />'; //menampilkan index array dan isi array
                 }
         }
      ?>
</body>
</html>