<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_buku WHERE id_buku='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<section class="content-header">
	<h1>
		Master Data
		<small>Data Buku</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Si Perpustakaan</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah buku</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label>Id Buku</label>
							<input type='text' class="form-control" name="id_buku" value="<?php echo $data_cek['id_buku']; ?>"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Judul Buku</label>
							<input type='text' class="form-control" name="judul_buku" value="<?php echo $data_cek['judul_buku']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Pengarang</label>
							<input type='text' class="form-control" name="pengarang" value="<?php echo $data_cek['pengarang']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input class="form-control" name="penerbit" value="<?php echo $data_cek['penerbit']; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Th Terbit</label>
							<input class="form-control" name="th_terbit" value="<?php echo $data_cek['th_terbit']; ?>">
						</div>

						<div class="form-group">
							<label>Cover Buku</label>
							<?php if (!empty($data_cek['cover_image'])): ?>
								<div class="current-image" style="margin-bottom: 10px;">
									<img src="../uploads/book_covers/<?php echo $data_cek['cover_image']; ?>" 
										 alt="Current Cover" style="max-width: 150px; max-height: 200px; border: 1px solid #ddd;">
									<br><small class="text-muted">Cover saat ini</small>
								</div>
							<?php endif; ?>
							<input type="file" name="cover_image" id="cover_image" class="form-control" accept="image/*">
							<small class="text-muted">Format yang didukung: JPG, PNG, GIF. Maksimal 2MB. Kosongkan jika tidak ingin mengubah cover.</small>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_buku" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

if (isset ($_POST['Ubah'])){
    // Handle image upload
    $cover_image = $data_cek['cover_image']; // Keep existing image by default
    
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
        $file_extension = strtolower(pathinfo($_FILES['cover_image']['name'], PATHINFO_EXTENSION));
        
        if (in_array($file_extension, $allowed_types)) {
            if ($_FILES['cover_image']['size'] <= 2 * 1024 * 1024) { // 2MB limit
                $upload_dir = dirname(__DIR__) . '/uploads/book_covers/';
                $file_name = $_POST['id_buku'] . '_' . time() . '.' . $file_extension;
                $upload_path = $upload_dir . $file_name;
                
                // Create directory if it doesn't exist
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }
                
                if (move_uploaded_file($_FILES['cover_image']['tmp_name'], $upload_path)) {
                    // Delete old image if exists
                    if (!empty($data_cek['cover_image']) && file_exists($upload_dir . $data_cek['cover_image'])) {
                        unlink($upload_dir . $data_cek['cover_image']);
                    }
                    $cover_image = $file_name;
                } else {
                    // Debug: Check upload errors
                    $upload_error = $_FILES['cover_image']['error'];
                    echo "<script>console.log('Upload failed. Error code: " . $upload_error . "');</script>";
                }
            }
        }
    }
    
    //mulai proses ubah
    $sql_ubah = "UPDATE tb_buku SET
        judul_buku='".$_POST['judul_buku']."',
        pengarang='".$_POST['pengarang']."',
        penerbit='".$_POST['penerbit']."',
        th_terbit='".$_POST['th_terbit']."',
        cover_image='".$cover_image."'
        WHERE id_buku='".$_POST['id_buku']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'dashboard.php?page=MyApp/data_buku';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'dashboard.php?page=MyApp/data_buku';
            }
        })</script>";
    }
}

