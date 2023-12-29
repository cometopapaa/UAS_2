<?php

class Wisata {
    public $nama;
    public $lokasi;
    public $deskripsi;
    public $fasilitas;
    public $harga;
    public $aktivitas;
    public $gambar;

    

    public function __construct($nama, $lokasi, $deskripsi, $fasilitas, $harga, $aktivitas, $gambar) {
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->deskripsi = $deskripsi;
        $this->fasilitas = $fasilitas;
        $this->harga = $harga;
        $this->aktivitas = $aktivitas;
        $this->gambar = $gambar;
    }

    public function tampilkanInfo(){
        // Menampilkan informasi umum tentang objek wisata
        // gunanya agar semua kelas turunan class wisata premium dan wisata tanpa pelru didefinisikan ulang
        echo "Nama: " . $this->nama . "<br>"; //da munculkan nama wisata pakai properti $nama titik(.) gunanya untuk da gabungkan string dengan nilai properti
        echo "Lokasi: " . $this->lokasi . "<br>";
        echo "Deskripsi: " . $this->deskripsi . "<br>";
        echo "Fasilitas: " . $this->fasilitas . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Aktivitas: " . $this->aktivitas . "<br>";
        echo "Gambar: " . $this->gambar . "<br>";
    }
}

// Kelas Renderer untuk Tempat Wisata

class MesinPencarianTabel extends Wisata {
    private $koneksi; //Encapsulasi Hanya Biasa Diakses Oleh Class MesinPencarianTabel
    private $namaTabel; //Encapsulasi

    public function __construct($conn, $namaTabel) { // constructor
        parent::__construct('', '', '', '', '', '', ''); 
        // Cara memanggil konstruktor dari kelas induk (Wisata) dari dalam kelas anak (MesinPencarianTabel).
        $this->koneksi = $conn;
        $this->namaTabel = $namaTabel;
    }

    public function cariSemua() {
        $hasilPencarian = array();

        $sql = "SELECT * FROM $this->namaTabel LIMIT 3";
        $result = $this->koneksi->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $hasilPencarian[] = new Wisata($row['nama'], $row['lokasi'], $row['deskripsi'], $row['fasilitas'], $row['harga'], $row['aktivitas'], $row['gambar']);
            }
        }

        return $hasilPencarian;
    }
}


class SearchEngine extends Wisata {
    private $conn;

    public function __construct($conn) {
        parent::__construct("", "", "", "", "", "", "");
        // Cara memanggil konstruktor dari kelas induk (Wisata) dari dalam kelas anak (SearchEngine).
        $this->conn = $conn;
    }

    public function search($searchTerm, $table) {
        $resultList = array();

        $sql = "SELECT * FROM $table WHERE `nama` LIKE '%$searchTerm%' OR `lokasi` LIKE '%$searchTerm%'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultList[] = new Wisata($row['nama'], $row['lokasi'], $row['deskripsi'], $row['fasilitas'], $row['harga'], $row['aktivitas'], $row['gambar']);
            }
        }

        return $resultList;
    }
}

class WisataPremium extends Wisata{
    public function __construct($nama, $lokasi, $deskripsi, $fasilitas, $harga, $aktivitas, $gambar) {
        parent::__construct($nama, $lokasi, $deskripsi, $fasilitas, $harga, $aktivitas, $gambar);
    }

    public function tampilkanInfo(){
        parent :: tampilkanInfo(); // Memanggil metode tampilkanInfo dari kelas dasar
        echo "Tipe:Premium<br>";
    }
}

class ResultRenderer {
    private $wisataList;

    public function __construct($wisataList) {
        $this->wisataList = $wisataList;
    }

    public function render() {
        foreach ($this->wisataList as $wisata) {
            echo '<div class="col-lg-12">';
            echo '<div class="listing-item">';
            echo '<div class="left-image">';
            echo '<a href="#"><img src="assets/images/' . $wisata->gambar . '" alt="" width="350" height="300"></a>';
            echo '</div>';
            echo '<div class="right-content align-self-center">';
            echo '<a href="#">';
            echo '<h4>' . $wisata->nama . '</h4>';
            echo '</a>';
            echo '<ul class="rate">';
            // ... (tambahkan bintang sesuai rating)
            echo '<li>(100) Reviews</li>';
            echo '</ul>';
            echo '<span class="price">';
            echo '<div class="icon"><img src="assets/images/listing-icon-01.png" alt=""></div> Rp.' . $wisata->harga . '';
            echo '</span>';
            echo '<span class="details">Details: <em> <br>' . $wisata->deskripsi . '</em></span>';
            echo '<ul class="info">';
            // ... (tambahkan informasi lainnya)
            echo '</ul>';
            echo '<div class="main-white-button">';
            echo '<a href="contact.html"><i class="fa fa-eye"></i> Contact Now</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
}

?>
