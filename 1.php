<!DOCTYPE html>
<html>
    <body>
        <?php
        function perjalananSales(float $a, float $b, float $c, float $d)
        {
        $jarak = array("$a", "$b", "$c", "$d");
            $bsn = 2.5;
            $hrg = 7000;
            $tlJarak=0;
            $tlHarga = 0;
            $tlLiter = 0;
            for($i=0;$i<4;$i++){
                $liter[$i] = $jarak[$i]/$bsn;
                $harga[$i] = $jarak[$i]*$hrg;
                $tlJarak = $tlJarak + $jarak[$i];
                $tlHarga = $tlHarga + $harga[$i];
                $tlLiter = $tlLiter + $liter[$i];
            }
            echo "Toko   - Tempat A = ". $jarak[0]. " Km | Rp" . $harga[0] . " | " . $liter[0] . " Liter <br>" ;
            echo "Tempat A - Tempat B = " . $jarak[1] . " Km | Rp" . $harga[1] . " | " . $liter[1] . " Liter <br>" ;
            echo "Tempat B - Tempat C = " . $jarak[2] . " Km | Rp" . $harga[2] . " | " . $liter[2] . " Liter <br>" ;
            echo "Tempat C - Tempat D = " . $jarak[3] . " Km | Rp" . $harga[3] . " | " . $liter[3] . " Liter <br> <br> " ;
            echo " Total jarak = " . $tlJarak. "Km <br>";
            echo " Total harga = Rp" . $tlHarga. " <br>";
            echo " Total bensin = " . $tlLiter. "Liter <br>";
        }
        
        perjalananSales(2, 5, 1.5, 2.5);
        ?>
    </body>
</html>
