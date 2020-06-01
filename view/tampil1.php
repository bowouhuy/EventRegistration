<?php 
    include '../koneksi.php';
?>
    <ul class="list-group list-group-flush mt-2" style="width:400px;">
<?php 
	$data = mysqli_query($koneksi, "select * from peserta where event =1 order by id desc;");
	while($d=mysqli_fetch_array($data)){
?>
        <li class="list-group-item"><?php echo $d['nama']?></li>

	<?php } ?>
</ul>

