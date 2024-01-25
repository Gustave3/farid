<?php


echo "<h1>===Apseni===</h1> <br>";
function absensi($noAbsen, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7){
    for($noAbsen; $noAbsen <= $kondisiTerminasi; $noAbsen++){
        if($noAbsen == $kt1 || $noAbsen == $kt2 || $noAbsen == $kt6){
            echo "Peserta didik no absen $noAbsen tidak hadir <br />";
        }else if($noAbsen == $kt3 || $noAbsen == $kt4){
            echo "Peserta didik no absen $noAbsen terlambat <br />";
        }else if($noAbsen == $kt5 || $noAbsen == $kt7){
            echo "Peserta didik no absen $noAbsen sakit <br />";
        } else {
            echo "Peserta didik no absen $noAbsen hadir <br />";
        }
    }
}
    echo absensi(1, 15, 2, 3, 6, 8, 9, 10, 13);