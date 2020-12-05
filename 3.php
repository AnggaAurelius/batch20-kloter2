<!DOCTYPE html>
<html>
    <body>
        <?php
        function gambarPola(int $no)
        {
            $print = array_fill(1, $no, "");
            $xyz =array("x","y","z");
            $o = 0;
            $x=1;
            $y=$no;
            while ($x <=$no) {
                if($x<=5){
                    for ($i = $x; $i <= $y; $i++) {
                        if ($x%2 != 0) {
                            $print[$i] = $xyz[$o];
                        } else {
                            $print[$i] = "_";
                        }
                    }
                }elseif($x>5){
                    for ($i = $y; $i <= $x; $i++) {
                        if ($x%2 == 0) {
                            $print[$i] = $xyz[$o];
                        } else {
                            $print[$i] = "_";
                        }
                    }
                }
                
                if($x<5 && $x%2 != 0){
                    $o++;
                }elseif($x>4 && $x%2 == 0){
                    $o--;
                }

                for ($i = 1; $i <=$no; $i++) {
                echo "$print[$i] ";
                }
                echo " <br>";
                $y--;
                $x++;
            }
        }
        gambarPola(10);
        ?>
    </body>
</html>
