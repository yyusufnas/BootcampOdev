<html>
<body>
   <form action="postdatabase.php" method="post" enctype="multipart/form-data">
      <table border="0">
      <input type="text" name="baslik" id="" placeholder="Başlık" > <br>
      <input type="text" name="aciklama" id="" placeholder="Açıklama" >
         <tr>
            <td>Dosya Seçiniz:</td>
            <td><input type="file" name="dosya" id="dosya"></td>
         </tr>
         <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="yukle" value="Yükle"></td>
         </tr>
      </table>
   </form>
</body>
</html>