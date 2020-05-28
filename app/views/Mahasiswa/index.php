<!--
    views untuk menampilkan data 
!-->
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar mahasiswa</h3>
            <?php foreach($data['mhs'] as $mhs) : ?>
            <ul>
                <li><?=$mhs['id'];?></li>
                <li><?=$mhs['nama'];?></li>
                <li><?=$mhs['npm'];?></li>
                <li><?=$mhs['email'];?></li>
            </ul>
            <?php endforeach;?>

        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <h3>Daftar mahasiswa</h3>
                <ul class="list-group ">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?=$mhs['nama'];?>
                    <a href="<?= BASEURL,PORT,LOCATION;?>/Mahasiswa/detail/<?=$mhs['id'];?>" class="badge badge-pill badge-info ">Detail</a>
                    </li>
                    <?php endforeach;?>
                </ul>
        </div>
    </div>
</div>
