<b> Hello </b>
<form action="<?php echo site_url('Mahasiswa/ucapan'); ?>" method="post">
    <input type="text" name="nama" placeholder="Masukan Nama Anda" />
    <input type="submit" name="kirim"  name="kirim" />
</form>


<?php
    echo "<i><b>Selamat Malam ".$n."<br/></b></i>";
    echo date("d-m-y")."<br/>";
    echo base_url()."<br/>";
    echo site_url()."<br/>";
    echo site_url('Mahasiswa/ucapan')."<br/>";
?>