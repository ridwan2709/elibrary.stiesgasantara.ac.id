<?php
//kode 9 digit
  
$carikode = mysqli_query($koneksi,"SELECT id_buku FROM tb_buku order by id_buku desc");
$datakode = mysqli_fetch_array($carikode);
$kode = $datakode['id_buku'];
$urut = substr($kode, 1, 3);
$tambah = (int) $urut + 1;

if (strlen($tambah) == 1){
    $format = "B"."00".$tambah;
} else if (strlen($tambah) == 2){
    $format = "B"."0".$tambah;
} else if (strlen($tambah) == 3){
    $format = "B".$tambah;
}
?>

<section class="content-header">
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
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Buku</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>ID Buku</label>
							<input type="text" name="id_buku" id="id_buku" class="form-control" value="<?php echo $format; ?>"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Judul Buku</label>
							<input type="text" name="judul_buku" id="judul_buku" class="form-control" placeholder="Judul Buku">
						</div>

						<div class="form-group">
							<label>Pengarang</label>
							<input type="text" name="pengarang" id="pengarang" class="form-control" placeholder="Nama Pengarang">
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input type="text" name="penerbit" id="penerbiit" class="form-control" placeholder="Penerbit">
						</div>

						<div class="form-group">
							<label>Tahun Terbit</label>
							<input type="number" name="th_terbit" id="th_terbit" class="form-control" placeholder="Tahun Terbit">
						</div>

						<div class="form-group">
							<label>Cover Buku</label>
							<input type="file" name="cover_image" id="cover_image" class="form-control" accept="image/*">
							<small class="text-muted">Format yang didukung: JPG, PNG, GIF. Maksimal 2MB</small>
						</div>

						<div class="form-group">
							<label>File Buku (PDF)</label>
							<input type="file" name="pdf_file" id="pdf_file" class="form-control" accept="application/pdf">
							<small class="text-muted">Format: PDF. Maksimal 10MB</small>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="?page=MyApp/data_buku" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

    if (isset ($_POST['Simpan'])){
    
        // Handle image upload
        $cover_image = '';
        if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
            $file_extension = strtolower(pathinfo($_FILES['cover_image']['name'], PATHINFO_EXTENSION));
            
            if (in_array($file_extension, $allowed_types)) {
                if ($_FILES['cover_image']['size'] <= 2 * 1024 * 1024) { // 2MB limit
                    $upload_dir = dirname(__DIR__) . '../uploads/book_covers/';
                    
                    // Create directory if it doesn't exist
                    if (!file_exists($upload_dir)) {
                        mkdir($upload_dir, 0755, true);
                    }
                    
                    $file_name = $_POST['id_buku'] . '_' . time() . '.' . $file_extension;
                    $upload_path = $upload_dir . $file_name;
                    
                    if (move_uploaded_file($_FILES['cover_image']['tmp_name'], $upload_path)) {
                        $cover_image = $file_name;
                    } else {
                        // Debug: Check upload errors
                        $upload_error = $_FILES['cover_image']['error'];
                        echo "<script>console.log('Upload failed. Error code: " . $upload_error . "');</script>";
                    }
                } else {
                    echo "<script>console.log('File too large. Max size: 2MB');</script>";
                }
            } else {
                echo "<script>console.log('Invalid file type. Allowed: jpg, jpeg, png, gif');</script>";
            }
        } else {
            // Debug: Check file upload errors
            if (isset($_FILES['cover_image'])) {
                $upload_error = $_FILES['cover_image']['error'];
                echo "<script>console.log('File upload error: " . $upload_error . "');</script>";
            }
        }

        // Handle PDF upload
        $pdf_file = '';
        if (isset($_FILES['pdf_file']) && $_FILES['pdf_file']['error'] == 0) {
            $pdf_extension = strtolower(pathinfo($_FILES['pdf_file']['name'], PATHINFO_EXTENSION));
            if ($pdf_extension === 'pdf') {
                if ($_FILES['pdf_file']['size'] <= 10 * 1024 * 1024) { // 10MB limit
                    $pdf_upload_dir = dirname(__DIR__) . '/uploads/book_pdfs/';
                    if (!file_exists($pdf_upload_dir)) {
                        mkdir($pdf_upload_dir, 0755, true);
                    }
                    $pdf_file_name = $_POST['id_buku'] . '_' . time() . '.pdf';
                    $pdf_upload_path = $pdf_upload_dir . $pdf_file_name;
                    if (move_uploaded_file($_FILES['pdf_file']['tmp_name'], $pdf_upload_path)) {
                        $pdf_file = $pdf_file_name;
                    } else {
                        $upload_error = $_FILES['pdf_file']['error'];
                        echo "<script>console.log('PDF upload failed. Error code: " . $upload_error . "');</script>";
                    }
                } else {
                    echo "<script>console.log('PDF too large. Max size: 10MB');</script>";
                }
            } else {
                echo "<script>console.log('Invalid PDF type. Only .pdf allowed');</script>";
            }
        }
    
        $sql_simpan = "INSERT INTO tb_buku (id_buku,judul_buku,pengarang,penerbit,th_terbit,cover_image,pdf_file) VALUES (
           '".$_POST['id_buku']."',
          '".$_POST['judul_buku']."',
          '".$_POST['pengarang']."',
          '".$_POST['penerbit']."',
          '".$_POST['th_terbit']."',
          '".$cover_image."',
          '".$pdf_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'dashboard.php?page=MyApp/data_buku';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = 'dashboard.php?page=MyApp/add_buku';
          }
      })</script>";
    }
  }
    
