<?php
function kelulusan ($_nilai){
    if($_nilai > 55){
        return 'Anda Lulus';
    }else{
        return 'Anda Tidak Lulus';
    }
}

function grade($_nilai){
    if ($_nilai >= 85) {
        return 'A';
    }elseif ($_nilai >= 70){
        return 'B';
    }elseif ($_nilai >= 56){
        return 'C';
    }elseif ($_nilai >= 36){
        return 'D';
    }elseif ($_nilai >= 10){
        return 'E';
    }else{
        return "tidak ada nilai";
    }
}
?>