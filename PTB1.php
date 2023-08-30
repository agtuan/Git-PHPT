<?php
     function giaiPhuongTrinhBacNhat($a, $b) {
            if ($a == 0) {
                if ($b == 0) {
                    return "Ptcvsn";
                } else {
                    return "Ptvn";
                }
            } else {
                $x = -$b / $a;
                return "Nghiệm của phương trình là x = $x";
            }
        }
        
        $a = 4;
        $b = -5;
        $ketQua = giaiPhuongTrinhBacNhat($a, $b);
        echo $ketQua;