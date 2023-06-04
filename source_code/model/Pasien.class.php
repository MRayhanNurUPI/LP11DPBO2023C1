<?php

/******************************************
Asisten Pemrogaman 11 
 ******************************************/

class Pasien
{
	var $id = ''; //id Pasien
	var $nik = '';
	var $nama = '';
	var $email = '';
	var $telp = '';
	var $tempat = '';
	var $tl = '';
	var $gender = '';

	function __construct($id = '', $nik = '', $nama = '', $email = '', $telp = '', $tempat = '', $tl = '', $gender = '')
	{
		$this->id = $id;
		$this->nik = $nik;
		$this->nama = $nama;
		$this->email = $email;
		$this->telp = $telp;
		$this->tempat = $tempat;
		$this->tl = $tl;
		$this->gender = $gender;
	}

	function setId($id)
	{
		$this->id = $id;
	}
	function setNik($nik)
	{
		$this->nik = $nik;
	}
	function setNama($nama)
	{
		$this->nama = $nama;
	}
	function setEmail($email)
	{
		$this->email = $email;
	}
	function setTelp($telp)
	{
		$this->telp = $telp;
	}
	function setTempat($tempat)
	{
		$this->tempat = $tempat;
	}
	function setTl($tl)
	{
		$this->tl = $tl;
	}
	function setGender($gender)
	{
		$this->gender = $gender;
	}

	function getId()
	{
		return $this->id;
	}
	function getNik()
	{
		return $this->nik;
	}
	function getNama()
	{
		return $this->nama;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getTelp()
	{
		return $this->telp;
	}
	function getTempat()
	{
		return $this->tempat;
	}
	function getTl()
	{
		return $this->tl;
	}
	function getGender()
	{
		return $this->gender;
	}
}
