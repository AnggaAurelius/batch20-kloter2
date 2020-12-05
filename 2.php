<!DOCTYPE html>
<html>
    <body>
        <?php
        function cariKata(string $cari)
        {
            $p = array("Pagi itu sangatlah cerah, mentari pagi muncul memancarkan sinar cerah dengan semangat 67 eh semangat 45 maksudnya", "Sama denganku, hari ini adalah hari ulang tahun orang yang sangat aku kagumi bahkan kucintai","Semua sudah aku persiapkan termasuk kue ultah serta kadonya", "Aku masuk ke kelas dengan hati gembira dan bibir tersenyum-senyum sendiri", "Kakiku melangkah tepat di depan pintu masuk kelas dan disambut ceria oleh sahabat sahabatku Syarif dan Renata.","Yaps! Aku hampir lupa, aku Sherly kepanjangan dari Sherlyna rantika putri", "Cewek manis berkumis tipis yang kini sedang dilanda asmara cinta.");
            $x=0;
            foreach($p as $kalimat){
                $ada=0;
                $x++;
                $kal = explode(" ", $kalimat);
                foreach($kal as $kata){
                    if ($kata == $cari){
                        $ada++;
                    }
                }
                echo 'Result ' .$x.': kalimat  "'.$cari. '" muncul '.$ada.' kali pada index ' .$x. '<br>';
            }
        }
        cariKata("aku");
        ?>
    </body>
</html>
