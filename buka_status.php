<?php
include_once 'db.php';

$query = mysql_query("SELECT * FROM status ORDER BY id_status DESC");

while($row=mysql_fetch_array($query)){
  $id_status=$row['id_status'];
  $status=$row['status'];
?>

<div class="stbody" id="stbody<?php echo $id_status;?>">
<div class="sttext">
<!--Link X untuk menghapus status-->
<a class="stdelete" href="#" id="<?php echo $id_status;?>" title="Hapus Status"> X </a>
<?php echo $status;?> 

<!--Link Komentari yang diberi efek toggle jquery dengan nama class commentopen --> 
<div><b><a href='#' class='commentopen' id='<?php echo $id_status; ?>' title='Comment'>Komentari</a></b></div>

<!--Area untuk menampilkan komentar yang tersimpan di tabel-->
<div class="commentcontainer" id="commentload<?php echo $id_status;?>">
<?php include ('buka_komentar.php'); ?>
</div>
<!--Link Komentari diatas akan menampilkan dan menghilangkan class commentupdate -->
<div class="commentupdate" style='display:none' id='commentbox<?php echo $id_status; ?>'>
<div class="stcommenttext" >
<form method="post" action="">
<textarea name="komentar" class="komentar" maxlength="200" id="ctextarea<?php echo $id_status; ?>"></textarea>
<br />
<input type="submit" value="Comment" id="<?php echo $id_status;?>" class="comment_button"/>
</form>
</div>
</div>

</div>
</div>

<?php } 
?>
