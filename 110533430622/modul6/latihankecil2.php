<!DOCTYPE HTML>
<html>
	<head>
		<title>Limitasi Data</title>
	</head>
	<body>
		<form method="post" action="" name="frm_select">
			Tampilkan
			<select name="row_page" onchange="document.forms.frm_select.submit();">
				<option value="0" selected="<?php if ($_POST['row_page'] == '0') { echo 'selected'; } ?>">-- pilih --</option>
				<option value="5" selected="<?php if ($_POST['row_page'] == '5') { echo 'selected'; } ?>">5</option>
				<option value="10" selected="<?php if ($_POST['row_page'] == '10') { echo 'selected'; } ?>">10</option>
				<option value="20" selected="<?php if ($_POST['row_page'] == '20') { echo 'selected'; } ?>">20</option>
				<option value="50" selected="<?php if ($_POST['row_page'] == '50') { echo 'selected'; } ?>">50</option>
				<option value="100" selected="<?php if ($_POST['row_page'] == '100') { echo 'selected'; } ?>">100</option>
			</select> baris per halaman.
		</form>
		<?php
			if (isset($_POST['row_page']) && $_POST['row_page']) {
				require_once './koneksi.php';
				// Batas baris data
				$row = $_POST['row_page'];
				// LENGKAPI
				// Variabel $sql berisi pernyataan SQL retrieve dg limitasi
				$sql = "SELECT * FROM mahasiswa LIMIT 0,$row";
				$res = mysql_query($sql);
				if ($res) {
					if (mysql_num_rows($res)) { ?>
						<table border=1 cellspacing=1 cellpadding=5>
							<tr>
								<th>#</th>
								<th width=100>NIM</th>
								<th width=150>Nama</th>
								<th>Alamat</th>
							</tr>
							<?php
							$i = 1;
							while ($row = mysql_fetch_row($res)) { ?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $row[0];?></td>
									<td><?php echo $row[1];?></td>
									<td><?php echo $row[2];?></td>
								</tr>
								<?php
								$i++;
							}
							?>
						</table>
					<?php
					} else {
						echo 'Data Tidak Ditemukan';
					}
				}
			}
		?>
	</body>
</html>