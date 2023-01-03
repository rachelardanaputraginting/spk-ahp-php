<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pro = new Kriteria($db);
$stmt = $pro->readAll();
?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb" style="background: transparent; padding:0px;">
            <li><a href="#" style="color: #333;">Home</a></li>
            <li class="text-success" style="font-weight: bold;">Data Kriteria</li>
        </ol>

    </div>
    <div class="col-md-6 text-left">
        <h5>Data Kriteria</h5>
    </div>
    <div class="col-md-6 text-right">
        <button onclick="location.href='kriteria-baru.php'" class="btn btn-success">Tambah Data</button>
    </div>
</div>
<br />

<table width="100%" class="table table-striped table-bordered" id="tabeldata">
    <thead>
        <tr>
            <th width="30px">No</th>
            <th>ID Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Bobot Kriteria</th>
            <th width="100px">Aksi</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <th width="30px">No</th>
            <th>ID Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Bobot Kriteria</th>
            <th width="100px">Aksi</th>
        </tr>
    </tfoot>

    <tbody>
        <?php
        $no = 1;
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['id_kriteria'] ?></td>
                <td><?php echo $row['nama_kriteria'] ?></td>
                <td><?php echo $row['bobot_kriteria'] ?></td>
                <td class="text-center">
                    <a href="kriteria-ubah.php?id=<?php echo $row['id_kriteria'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="kriteria-hapus.php?id=<?php echo $row['id_kriteria'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
