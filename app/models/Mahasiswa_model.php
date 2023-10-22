<?php 

class Mahasiswa_model {
    private $dbh;
    private $stmt;

    public function __construct()
    {

        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }


    // private $mhs = [
    //     [
    //         "nama" => "Putri Legiani",
    //         "nrp" => "213040039",
    //         "email" => "putrilegiani234@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Rayhan Pramudia",
    //         "nrp" => "284932080",
    //         "email" => "rayhan234@gmail.com",
    //         "jurusan" => "Hukum"
    //     ],
    //     [
    //         "nama" => "Sally",
    //         "nrp" => "2136474283",
    //         "email" => "sally234@gmail.com",
    //         "jurusan" => "Kedokteran"
    //     ]

    //     ];


        public function getAllMahasiswa()
        {
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}