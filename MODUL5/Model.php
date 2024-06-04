<?php
    require ('Koneksi.php');

    // Tampilkan Buku

    function tampilBuku() {
        global $conn;
        $buku = mysqli_query($conn, "SELECT * FROM buku");

        foreach ($buku as $bk) {
            echo "<tr>";
            echo "<td>" . $bk['id_buku'] . "</td>";
            echo "<td>" . $bk['judul_buku'] . "</td>";
            echo "<td>" . $bk['penulis'] . "</td>";
            echo "<td>" . $bk['penerbit'] . "</td>";
            echo "<td>" . $bk['tahun_terbit'] . "</td>";
            echo "<td>". "<a href = 'FormBuku.php?id_buku=" . $bk ['id_buku'] . "'>Edit</a><br>";
            echo "<a href = 'Buku.php?id_buku=" . $bk['id_buku'] . "'onclick=\"return confirm('lanjut delete ?')\">Hapus</a></td>";
            echo "</tr>";
        }
        echo "<a href = 'Index.php'>Kembali</a>";
    }

    function tampilMember() {
        global $conn;
        $member = mysqli_query($conn, "SELECT * FROM member");

        foreach ($member as $mb) {
            echo "<tr>";
            echo "<td>". $mb['id_member']."</td>";
            echo "<td>". $mb['nama_member']."</td>";
            echo "<td>". $mb['nomor_member']."</td>";
            echo "<td>". $mb['alamat']."</td>";
            echo "<td>". $mb['tgl_mendaftar']."</td>";
            echo "<td>". $mb['tgl_terakhir_bayar']."</td>";
            echo "<td>"."<a href ='FormMember.php?id_member=".$mb['id_member']."'>Edit</a><br>";
            echo "<a href='Member.php?id_member=" . $mb['id_member'] . "'onclick=\"return confirm('lanjut delete ?')\">Hapus</a> </td>";
            echo "</tr>";
        }
        echo "<a href = 'Index.php'>Kembali</a>";
    }

    function tampilPeminjaman() {
        global $conn;
        $peminjaman = mysqli_query($conn, "SELECT * FROM peminjaman");
        
        foreach ($peminjaman as $pj) {
            echo "<tr>";
            echo "<td>". $pj['id_peminjaman']."</td>";
            echo "<td>". $pj['tgl_pinjam']."</td>";
            echo "<td>". $pj['tgl_kembali']."</td>";
            echo "<td>". $pj['id_buku']."</td>";
            echo "<td>". $pj['id_member']."</td>";
            echo "<td>"."<a href = 'formpeminjaman.php?id_peminjaman=".$pj['id_peminjaman']."'>Edit</a><br>";
            echo "<a href='Peminjaman.php?id_peminjaman=" . $pj['id_peminjaman'] . "' onclick=\"return confirm('lanjut delete ?')\">Hapus</a> </td>";
            echo "</tr>"; 
        }
        echo "<a href = 'Index.php'>Kembali</a>";
    }


    // Tambah Buku
    function tambahBuku($id, $judul, $penulis, $penerbit, $tahun) {
        global $conn;
        $sql = "INSERT INTO buku VALUES ('$id', '$judul','$penulis', '$penerbit', '$tahun')";
        $result = mysqli_query($conn, $sql); 
        
        if (!empty($result)) {
            header('location:Buku.php');
        }
    }

    function tambahMember($id,$nama,$nomor,$alamat,$tgldaftar,$tglbayar) {
        global $conn;
        $sql = "INSERT INTO member VALUES ('$id', '$nama','$nomor', '$alamat', '$tgldaftar', '$tglbayar')";
        $result = mysqli_query($conn, $sql);

        if (!empty($result)) {
            header('location:Member.php');
        }
    }

    function tambahpeminjaman($id,$tglpinjam,$tglbalik,$id_buku,$id_member) {
        global $conn;
        $sql = "INSERT INTO peminjaman VALUES ('$id','$id_member','$id_buku','$tglpinjam','$tglbalik')";
        $result = mysqli_query($conn, $sql);
        
        if (!empty($result)) {
            header('location:Peminjaman.php');
        }
        //var_dump ($id_buku);
        //var_dump ($id_member);


    }


    // Hapus Buku
    function hapusBuku ($id_buku) {
        global $conn;
        $sql = "DELETE FROM buku WHERE id_buku = '$id_buku'";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            header('location:Buku.php');
        }
    }

    function hapusMember($id_member) {
        global $conn;
        $sql = "DELETE FROM member WHERE id_member = $id_member";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('location:Member.php');
        }
    }

    function hapusPeminjaman($id_peminjaman) {
        global $conn;
        $sql = "DELETE FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            header('location:Peminjaman.php');
        }
    }


    // Edit Buku
    function editbuku() {
        global $conn;
        $sql = "SELECT * FROM buku WHERE id_buku =".$_GET['id_buku'];
        $result = mysqli_query($conn, $sql);
        $GLOBALS['result'] = $result;
        }
    
    function editmember() {
        global $conn;
        $sql = "SELECT * FROM member WHERE id_member =".$_GET['id_member'];
        $result = mysqli_query($conn, $sql);
        $GLOBALS['result'] = $result;
    }

    function editpeminjaman(){
        global $conn;
        $sql = "SELECT * FROM peminjaman WHERE id_peminjaman=".$_GET['id_peminjaman'];
        $result = mysqli_query($conn, $sql);
        $GLOBALS['result'] = $result;
    }
    
    
    // Update Buku
    function updatebuku($id,$judul,$penulis,$penerbit,$tahun) {
        global $conn;
        $sql = "UPDATE buku SET
            judul_buku = '$judul',
            penulis = '$penulis',
            penerbit = '$penerbit',
            tahun_terbit = '$tahun'
            WHERE id_buku = $id";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            header('location:Buku.php');
        }
    }
    
    function updatemember($id,$nama,$no,$alamat,$tgldaftar,$tglbayar) {
        global $conn;
        $sql = "UPDATE member SET
            nama_member = '$nama',
            nomor_member = '$no',
            alamat = '$alamat',
            tgl_mendaftar = '$tgldaftar',
            tgl_terakhir_bayar = '$tglbayar'
            WHERE id_member = $id";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            header('location:Member.php');
        }
    }
    function updatepeminjaman($id,$tglpinjam,$tglbalik) {
        global $conn;
        $sql = "UPDATE peminjaman SET
        tgl_pinjam = '$tglpinjam',
        tgl_kembali = '$tglbalik'
        WHERE id_peminjaman = $id";
        $result = mysqli_query($conn, $sql);
        
        if($result) {
            header('location:Peminjaman.php');
        }
    }


    // Tampil Drop Down
    function tampilIdBuku() {
        global $conn;
        $sql = "SELECT * FROM buku";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function tampilIdMember() {
        global $conn;
        $sql = "SELECT * FROM member";
        $result = mysqli_query($conn, $sql);
        return $result; 
    }
?>