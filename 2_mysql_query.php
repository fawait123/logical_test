<?php

$con =  mysqli_connect('localhost', 'root', '', '2_mysql_query');


$query = mysqli_query($con, "select * from tb_mahasiswa_nilai inner join tb_mahasiswa
on tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id 
inner join tb_matakuliah 
on tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
where mk_kode = 'MK303'
order by tb_mahasiswa_nilai.nilai desc 
limit 1");


$row = mysqli_fetch_assoc($query);
echo $row['mhs_nama'] . '</br>';
echo $row['nilai'] . '</br>';
echo $row['mk_nama'] . '</br>';
