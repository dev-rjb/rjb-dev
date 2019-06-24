<?php 
	include "../db.php";

	$s = mysqli_query($db, "SELECT * FROM tamu");
?>

	<table width="100%" align="center" style="border: 3px solid black;">
		<th>Tanggal</th>
		<th>Jam</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Telephone</th>
		<th>Jenis Kelamin</th>
		<th>Keperluan</th>
		<th>No Plat Kendaraan</th>
		<th>Merk Transportasi</th>
		<th>Tujuan</th>
		<th>Foto</th>

		<?php 
			while ($row = mysqli_fetch_array($s)) {
				?>
				<tr align="center">
					<td><?php echo $row['tanggal']; ?></td>
					<td><?php echo $row['jam']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['no_hp']; ?></td>
					<td><?php echo $row['jk']; ?></td>
					<td><?php echo $row['keperluan']; ?></td>
					<td><?php echo $row['no_plat']; ?></td>
					<td><?php echo $row['merk_transportasi']; ?></td>
					<td><?php echo $row['tujuan']; ?></td>
					<td><?php echo $row['foto']; ?></td>
				</tr>
				<?php
			}
		?>
	</table>
