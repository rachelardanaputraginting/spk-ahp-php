<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pro = new Nilai($db);
$stmt = $pro->readAll();
?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb" style="background: transparent; padding:0px;">
            <li><a href="main.php" style="color: #333;">Home</a></li>
            <li class="text-success" style="font-weight: bold;">Data Nilai</li>
        </ol>
    </div>
    <div class="col-md-6 text-left">
        <h5>Data Nilai Preferensi</h5>
    </div>
    <div class="col-md-6 text-right">
        <button onclick="location.href='nilai-baru.php'" class="btn btn-success ">Tambah Data</button>
    </div>
</div>
<br />

<table width="100%" class="table" id="tabeldata">
    <thead>
        <tr>
            <th width="30px">No</th>
            <th>Keterangan Nilai</th>
            <th>Jumlah Nilai</th>
            <th width="100px">Aksi</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th>No</th>
            <th>Keterangan Nilai</th>
            <th>Jumlah Nilai</th>
            <th>Aksi</th>
        </tr>
    </tfoot>

    <tbody>
        <?php
        $no = 1;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['ket_nilai'] ?></td>
                <td><?php echo $row['jum_nilai'] ?></td>
                <td class="text-center">
                    <a href="nilai-ubah.php?id=<?php echo $row['id_nilai'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="nilai-hapus.php?id=<?php echo $row['id_nilai'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>

</table>
<?php
include_once 'footer.php';
?>
