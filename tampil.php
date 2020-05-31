<?php 
    include 'koneksi.php';
?>
    <ul class="list-group list-group-flush mt-2">
<?php 
	$data = mysqli_query($koneksi, "select * from peserta order by id desc;");
	while($d=mysqli_fetch_array($data)){
?>
        <li class="list-group-item"><?php echo $d['nama']?></li>

	<?php } ?>
</ul>

