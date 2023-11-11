<?php 

// Soal tentang percabangan switch (Pelajaran Program)
$level = 3;

switch($level){
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari Javascript";
        break;
    case 4:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan programmer!";
}

// Soal ini menunjukkan switch percabangan yang bertanda, jika kita isi 3 maka akan menampilkan 'Pelajari Javascript.
?>
