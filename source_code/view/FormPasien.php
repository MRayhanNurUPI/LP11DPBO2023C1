<?php


include_once("kontrak/KontrakFormPasien.php");
include_once("presenter/ProsesPasien.php");

class FormPasien implements KontrakFormPasienView
{
    private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
    private $tpl;

    function __construct()
    {
        //konstruktor
        $this->prosespasien = new ProsesPasien();
    }

    function tampil()
    {
        $act = "TAMBAH";
        $data = '<form method="post" action="form.php">
            <br><br>
            <div class="card">

                <input type="text" name="id_members" class="form-control" value="VAL_ID" hidden />

                <div class="card-header bg-primary">
                    <h1 class="text-white text-center"> TAMBAH DATA PASIEN </h1>
                </div><br>
                <div class="form-group">
                <label> NIK: </label>
                <input type="text" name="nik" class="form-control" value="" required />
                </div>


                <div class="form-group">
                <label> Nama: </label>
                <input type="text" name="nama" class="form-control" value="" required />
                </div>

                <div class="form-group">
                <label> Tempat Lahir: </label>
                <input type="text" name="tempat" class="form-control" value="" required />
                <div>


                <div class="form-group">
                <label> Tanggal Lahir: </label>
                <input type="date" name="tl" class="form-control" value="" required />
                </div>

                <div class="form-group">
                <label> Jenis Kelamin: </label>
                <div class = "row">
                <div class="form-radio px-4">
                <input class="form-radio-input" type="radio" name="gender" id="gender1" value="Laki-laki">
                <label class="form-radio-label" for="gender1">
                    Laki-Laki
                </label>
                </div>
                <div class="form-radio">
                <input class="form-radio-input" type="radio" name="gender" id="gender2" value="Perempuan">
                <label class="form-radio-label" for="gender2">
                    Perempuan
                </label>
                </div>
                </div>
                </div>

                <div class="form-group">
                <label> Email: </label>
                <input type="email" name="email" class="form-control" value="" required />
                </div>

                <div class="form-group">
                <label> No Telepon: </label>
                <input type="text" name="telp" class="form-control" value="" required />
                </div>

                </br>
                <div class= "row px-2">
                <a class="mx-4" type="submit" name="cancel" href="index.php"> Cancel </a><br>
                <button class="btn btn-success " type="submit" name="add"> Tambah </button><br>
                </div>
            </div>
        </form>';

        $this->tpl = new Template("templates/form.html");

        // Mengganti keyword yang ada pada template dengan layout dan isi form yang sudah diproses
        $this->tpl->replace("ACTION", $act);
        $this->tpl->replace("DATA_FORM", $data);

        // Menampilkan ke layar
        $this->tpl->write();
    }

    function tampilSunting($id)
    {
        $act = "UBAH";
        $this->prosespasien->prosesDataPasien();

        $data = '<form method="post" action="form.php">
            <br><br>
            <div class="card">

                <input type="text" name="id" class="form-control" value="' . $this->prosespasien->getId($id) . '" hidden />

                <div class="card-header bg-primary">
                    <h1 class="text-white text-center"> UBAH DATA PASIEN </h1>
                </div><br>
                <div class="form-group">
                <label> NIK: </label>
                <input type="text" name="nik" class="form-control" value="' . $this->prosespasien->getNik($id) . '" required />
                </div>


                <div class="form-group">
                <label> Nama: </label>
                <input type="text" name="nama" class="form-control" value="' . $this->prosespasien->getNama($id) . '" required />
                </div>

                <div class="form-group">
                <label> Tempat Lahir: </label>
                <input type="text" name="tempat" class="form-control" value="' . $this->prosespasien->getTempat($id) . '" required />
                <div>


                <div class="form-group">
                <label> Tanggal Lahir: </label>
                <input type="date" name="tl" class="form-control" value="' . $this->prosespasien->getTl($id) . '" required />
                </div>

                <div class="form-group">
                <label> Jenis Kelamin: </label>
                <div class = "row">
                <div class="form-radio px-4"> ';

        if ($this->prosespasien->getGender($id) == "Laki-laki") {
            $data .= '
                <input class="form-radio-input" type="radio" name="gender" id="gender1" value="Laki-laki" checked>';
        } else {
            $data .= '
                <input class="form-radio-input" type="radio" name="gender" id="gender1" value="Laki-laki">';
        }

        $data .= '
                <label class="form-radio-label" for="gender1">
                    Laki-Laki
                </label>
                </div>
                <div class="form-radio">';

        if ($this->prosespasien->getGender($id) == "Perempuan") {
            $data .=
                '
            <input class="form-radio-input" type="radio" name="gender" id="gender2" value="Perempuan" checked>
            ';
        } else {
            $data .= '
            <input class="form-radio-input" type="radio" name="gender" id="gender2" value="Perempuan">
            ';
        }

        $data .= '<label class="form-radio-label" for="gender2">
                    Perempuan
                </label>
                </div>
                </div>
                </div>

                <div class="form-group">
                <label> Email: </label>
                <input type="email" name="email" class="form-control" value="' . $this->prosespasien->getEmail($id) . '" required />
                </div>

                <div class="form-group">
                <label> No Telepon: </label>
                <input type="text" name="telp" class="form-control" value="' . $this->prosespasien->getTelp($id) . '" required />
                </div>

                </br>
                <div class= "row px-2">
                <a class="mx-4" type="submit" name="cancel" href="index.php"> Cancel </a><br>
                <button class="btn btn-success " type="submit" name="edit"> Ubah </button><br>
                </div>
            </div>
        </form>';

        $this->tpl = new Template("templates/form.html");

        // Mengganti keyword yang ada pada template dengan layout dan isi form yang sudah diproses
        $this->tpl->replace("ACTION", $act);
        $this->tpl->replace("DATA_FORM", $data);

        // Menampilkan ke layar
        $this->tpl->write();
    }

    function tambahData($data)
    {
        $this->prosespasien->tambahDataPasien($data);
        header("location:index.php");
    }

    function suntingData($id, $data)
    {
        $this->prosespasien->suntingDataPasien($id, $data);
        header("location:index.php");
    }
}
