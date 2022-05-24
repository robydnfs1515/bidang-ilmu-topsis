<?php
//koneksi
session_start();
include "koneksi.php";
include "_halaman/head.php";
?>

<?php
// $halaman = $_GET['halaman'];

// if (!empty($halaman)) {

//     switch ($halaman) {
//         case 'dashboard.php':
//             include "_halaman/dashboard.php";
//             break;
//         default:
//             "_halaman/dashboard.php";
//             break;
//     }
// } else {
//     include "_halaman/dashboard.php";
// }

?>

<body>
    <!--navbar navbar-default navbar-custom-->

    <!-- navbar -->
    <div class="wrapper">
        <div class="sidebar">
            <h2>spk b.ilmu topsis</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Pengguna</a></li>
                <li><a href="#"><i class="fal fa-apple-crate"></i>Data Mahasiswa</a></li>
                <li><a href="kriteria.php">Kriteria</a></li>
                <li><a href="alternatif.php">Alternatif</a></li>
                <li><a href="nilmat.php">Nilai Matriks</a></li>
                <li><a href="hastop.php">Hasil Topsis</a></li>
            </ul>
        </div>
    </div>
    <!-- navbar -->

    <!-- ------------------------------------------------------------- -->\
    <div class="main-content">
        <div class="header">Dashboard</div>
        <div class="info">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus architecto mollitia officia facilis
            blanditiis molestias quam esse repellat quasi in incidunt ipsum ipsam, debitis facere fugit aliquid dolorem
            vitae illo? Officia quibusdam obcaecati dignissimos voluptatum delectus sit sunt molestiae, odit velit
            numquam incidunt quia amet, necessitatibus ut possimus nisi quam.
        </div>
    </div>
    <!-- ------------------------------------------------------------- -->

    <?php
    include "_halaman/footer.php";
    ?>

    <!-- ------------------------------------------------------------- -->

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

</body>

</html>