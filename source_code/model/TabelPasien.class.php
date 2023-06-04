<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function tambahPasien($nik, $nama, $tempat, $tl, $gender, $email, $telp)
	{
		// Query mysql insert data pasien
		$query = "INSERT INTO pasien VALUES ('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		return $this->execute($query);
	}

	function hapusPasien($id)
	{
		// Query mysql hapus data pasien
		$query = "DELETE FROM pasien WHERE id = '$id'";
		return $this->execute($query);
	}

	function suntingPasien($id, $nik, $nama, $tempat, $tl, $gender, $email, $telp)
	{
		// Query mysql edit data pasien
		$query = "UPDATE pasien SET nik = '$nik', nama = '$nama', tempat = '$tempat', tl = '$tl', gender = '$gender', email = '$email', telp = '$telp' WHERE id = '$id'";
		return $this->execute($query);
	}
}
