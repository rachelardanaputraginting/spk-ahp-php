<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pro1 = new Kriteria($db);
$count1 = $pro1->countAll();
include_once 'includes/nilai.inc.php';
$pro2 = new Nilai($db);
?>
<div class="row">
    <div class="col-md-12">
        <ol class="breadcrumb" style="background: transparent; padding:0px;">
            <li><a href="main.php" style="color: #333;">Home</a></li>
            <li class="text-success" style="font-weight: bold;">Analisa Kriteria</li>
        </ol>
    </div>
    <div class="col-md-6 text-left">
        <h5>Analisa Kriteria</h5>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <form method="post" action="analisa-kriteria-tabel.php">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <h5>Kriteria Pertama</h5>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <h5>Pernilaian</h5>
                                <hr>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <h5>Kriteria Kedua</h5>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C1');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C11" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl1">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C2');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C21" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C1');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C12" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl2">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C2');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C32" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C1');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C13" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl3">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C2');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C43" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C1');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C14" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl4">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C2');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C54" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C2');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C25" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl5">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C3');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C35" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C2');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C26" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl6">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C3');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C46" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C2');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C27" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl7">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C3');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C57" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C2');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C38" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl8">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C3');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C48" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C3');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C39" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl9">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C4');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C59" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C3');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C4');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C3');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C4');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C3');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C4');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C4');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C1');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C4');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C1');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C4');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C1');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt2 = $pro1->readSatu('C4');
                                while ($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C410" value="<?php echo $row1['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="nl10">
                                    <?php
                                    $stmt1 = $pro2->readAll();
                                    while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <?php
                                $stmt3 = $pro1->readSatu('C1');
                                while ($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
                                    <input type="hidden" name="C510" value="<?php echo $row3['id_kriteria'] ?>" />
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="subankr" class="btn btn-success"> Selanjutnya <span class="fa fa-arrow-right"></span></button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
