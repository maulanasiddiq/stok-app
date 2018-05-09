<?php
class Koneksi{
    private $server = "localhost";
    private $username = "id4975368_stok_app";
    private $password = "23meikelahiranku";
    private $db = "id4975368_stok_app";

    function getKoneksi(){
        return new mysqli($this->server, $this->username, $this->password, $this->db);
    }
}
?>