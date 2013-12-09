<html>
<head>
   <title>Studi Kasus 1</title>
</head>

<body>

   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script dan transfer data menggunakan metode POST-->
     Jenis Hobby
        <select name="hobby">        <!--membuat combo box dengan nama index hobby-->                                                
         <option value="Membaca"
         <?php
         if($_POST['hobby']=="Membaca"){
         echo 'selected="selected"';
         }
         ?>
         >Membaca         <!--membuat menu pilihan combo box dengan value Membaca-->
         <option value="Menyanyi"
         <?php
         if($_POST['hobby']=="Menyanyi"){
                 echo 'selected="selected"';
         }
         ?>
         >Menyanyi <!--membuat menu pilihan combo box dengan value Menyanyi-->        
         <option value="Olahraga"
         <?php
         if($_POST['hobby']=="Olahraga" or !isset($_POST['hobby'])){
                 echo 'selected="selected"';
                }
         ?>
         >Olahraga <!--membuat menu pilihan combo box dengan value Olahraga-->        
         <option value="Menari"
         <?php
                if($_POST['hobby']=="Menari"){
                 echo 'selected="selected"';
                }
         ?>
         >Menari <!--membuat menu pilihan combo box dengan value Menari-->        
         </select> <br />
         <input type="submit" value="OK" /> <!--membuat Button Submit-->
        </form>
                
<?php
if (isset($_POST['hobby'])){ //kondisi melakukan cek hobby mempunyai nilai atau tidak        
     echo $_POST['hobby']; //mencetak isi dari index hobby dengan menggunakan superglobal POST        
                        }
                ?>
        </body>
</html>