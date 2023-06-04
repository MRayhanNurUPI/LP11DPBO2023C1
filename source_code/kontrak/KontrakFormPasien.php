<?php

interface KontrakFormPasienView
{
    public function tampil();
    public function tampilSunting($id);
    public function tambahData($id);
    public function suntingData($id, $data);
}

interface KontrakFormPasienPresenter
{
    public function prosesDataPasien();
    public function getId($i);
    public function getNik($i);
    public function getNama($i);
    public function getEmail($i);
    public function getTelp($i);
    public function getTempat($i);
    public function getTl($i);
    public function getGender($i);
    public function getSize();
}
