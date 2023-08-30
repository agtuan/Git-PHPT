<?php
function giaiPhuongTrinhBacHai ($a,$b,$c){
    $delta = ($b*$b) - (4*$a*$c);
    echo "delta = $delta";
    
    
    if($delta > 0){
        $x1 = ((-$b + sqrt($delta))/2*$a);
        $x2 = ((-$b - sqrt($delta))/2*$a);
        return " phương trình có 2 nghiệm phân biệt x1 = $x1, x2 = $x2 ";
        if($delta == 0){
             $X1 = $x2 = (-$b/2*$a);
            return "ptcnkep x1 = x2 = $X1 = $x2 ";

        }
        
    }else {
        return"ptvn";
    }

        
}   
    $a = -3;
    $b = 4;
    $c = 9;
    $ketqua = giaiPhuongTrinhBacHai ($a,$b,$c);
    echo $ketqua;

   

?>