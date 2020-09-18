<?php 
	function koneksi()
	{
//		 $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi Gagal!");
//		 mysqli_select_db($conn, "pw_183040035") or die ("DB Salah!");
		$conn = mysqli_connect("localhost", "root", "") or die ("Koneksi Gagal!");
		mysqli_select_db($conn, "pw_183040035") or die ("DB Salah!");

		return $conn;
	}

	function query($sql)
	{
		$conn = koneksi();
		$results = mysqli_query($conn, "$sql");
		$rows = [];
		while ($row = mysqli_fetch_assoc($results))
			$rows[] = $row;

		return $rows;
	}
	if (isset($_POST['coll'])) {
		switch ($_POST['coll']) {
		case 'checkusername':
			checkUsername();
			break;
		case 'checkemail':
			checkEmail();
			break;
		}
	}

	function delete($id)
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE * FROM laptop WHERE id_laptop = $id");

		return mysqli_affected_rows($conn);
	}

// Edit laptop
	function editLaptop($data) {
		$conn = koneksi();

		$id = $data['id'];
		$nama = htmlspecialchars($data['nama']);
		$jenis = htmlspecialchars($data['jenis']);
		$prosesor = htmlspecialchars($data['prosesor']);
		$vga = htmlspecialchars($data['vga']);
		$ram = htmlspecialchars($data['ram']);
		$storage = htmlspecialchars($data['storage']);
		$dimensi = htmlspecialchars($data['dimensi']);
		$merek = htmlspecialchars($data['merek']);
		$harga = htmlspecialchars($data['harga']);
		$gambar = htmlspecialchars($data['gambar']);
		$detail = htmlspecialchars($data['detail']);
		$merek = htmlspecialchars($data['merek']);
		$gambarLama = htmlspecialchars($data['gambarLama']);

		// cek user pilih gambar baru
		if ($_FILES['gambar']['error'] === 4) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}
		

		$queryUbah = "UPDATE laptop SET nama_laptop = '$nama',
						jenis_laptop = '$jenis',
						prosesor = '$prosesor',
						vga = '$vga',
						ram = '$ram',
						storage = '$storage',
						dimensi = '$dimensi',
						merek = '$merek',
						harga = '$harga',
						gambar = '$gambar',
						detail = '$detail',
						merek = '$merek'
						WHERE id_laptop = '$id'";

		mysqli_query($conn, $queryUbah);

		return mysqli_affected_rows($conn);
	}

//Edit Brand
	function editBrand($data) {
		$conn = koneksi();

		$id = $data['id'];
		$nama = htmlspecialchars($data['brand']);
		$founded = htmlspecialchars($data['founded']);
		$base = htmlspecialchars($data['base']);
		$area_served = htmlspecialchars($data['area_served']);
		$revenue = htmlspecialchars($data['revenue']);
		$image = htmlspecialchars($data['gambar']);
		$gambarLama = htmlspecialchars($data['gambarLama']);

		// cek user pilih gambar baru
		if ($_FILES['gambar']['error'] === 4) {
			$image = $gambarLama;
		} else {
			$image = upload();
		}
		

		$queryUbah = "UPDATE brand SET brand = '$nama',
						founded = '$founded',
						base = '$base',
						area_served = '$area_served',
						revenue = '$revenue',
						image = '$image'
						WHERE brand = '$id'";

		mysqli_query($conn, $queryUbah);

		return mysqli_affected_rows($conn);
	}
	

	function checkUsername() {
		$conn = koneksi();
		$username = $_POST['username'];

		$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
		if (mysqli_num_rows($query) > 0) {
			echo true;
		} else {
			echo false;
		}
	}

	function checkEmail() {
		$conn = koneksi();
		$email = $_POST['email'];

		$query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
		if (mysqli_num_rows($query) > 0) {
			echo true;
		} else {
			echo false;
		}
	}

// function cari 
	function cari($keyword) {
		$query = "SELECT * FROM laptop_new WHERE
            nama_laptop LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            jenis_laptop LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            prosesor LIKE '%$keyword%' OR
            gambar LIKE '%$keyword%'";;

        return query($query);
	}

// del 
	function hapusLaptop($id)
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM laptop WHERE id_laptop = $id");

		return mysqli_affected_rows($conn);
	}

// del 
	function hapusBrand($id)
	{
		$conn = koneksi();
		mysqli_query($conn, "DELETE FROM brand WHERE brand = '$id'");

		return mysqli_affected_rows($conn);
	}

// Add Laptop
		function tambahLaptop($data)
	{
		$conn = koneksi();

		$nama = htmlspecialchars($data['nama']);
		$jenis = htmlspecialchars($data['jenis']);
		$prosesor = htmlspecialchars($data['prosesor']);
		$vga = htmlspecialchars($data['vga']);
		$ram = htmlspecialchars($data['ram']);
		$storage = htmlspecialchars($data['storage']);
		$dimensi = htmlspecialchars($data['dimensi']);
		$merek = htmlspecialchars($data['merek']);
		$harga = htmlspecialchars($data['harga']);
		$detail = htmlspecialchars($data['detail']);
		
		// upload gambar
		$gambar = upload();
		if (!$gambar) {
			return false;
		}

		$queryTambah = "INSERT INTO laptop VALUES (NULL, '$nama','$jenis', '$prosesor', '$vga', '$ram', '$storage', '$dimensi', $harga, '$gambar', '$detail', '$merek', '0')";

		mysqli_query($conn, $queryTambah);

		return mysqli_affected_rows($conn);
	}

// add brand

		function tambahBrand($data)
	{
		$conn = koneksi();

		$nama = htmlspecialchars($data['nama']);
		$founded = htmlspecialchars($data['founded']);
		$base = htmlspecialchars($data['base']);
		$area_served = htmlspecialchars($data['area_served']);
		$revenue = htmlspecialchars($data['revenue']);
		
		// upload gambar
		$gambar = upload();
		if (!$gambar) {
			return false;
		}

		$queryTambah = "INSERT INTO brand VALUES ($nama', '$founded', '$base', '$area_served', $revenue, '$gambar', '0')";

		mysqli_query($conn, $queryTambah);

		return mysqli_affected_rows($conn);
	}

	function upload() {

		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		// cek apakah tidak ada gambar yang diupload
		if ($error === 4) {
			echo "<script>
					alert('Pilih gambar terlebih dahulu');
				</script>";

				return false;
		}

		// cek file adalah gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script>
					alert('Yang anda upload bukan gambar');
				</script>";

				return false;
		}

		// cek ukuran file
		if ($ukuranFile > 1000000 ) {
			echo "<script>
					alert('Ukuran Gambar Terlalu Besar');
				</script>";

				return false;
		}

		// lolos pengecekan, gambar siap di upload
		// generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;
		move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru);

		return $namaFileBaru;
	}

?>
