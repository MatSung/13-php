<!DOCTYPE html>
<?php

class FutboloRungtynes {
    public $patirtaTrauma;
    public $kuriKomandaLaimejo;
    public $rungtyniuRezultatas;

    public function simuliuotiTraumas(){
        $temp = rand(1, 1000);
        if($temp % 10 == 0 or $temp % 3.5 == 0){
            $this->patirtaTrauma = 2;
        }
        else {
            $this->patirtaTrauma = 0;
        }
    }

    public function simuliuotiRungtynes() {
        return $this->rungtyniuRezultatas = [rand(0,10), rand(0,10)];
    }

    function laimetojai(){
        $temp1 = $this->simuliuotiRungtynes();
        if($temp1[0] > $temp1[1]){
            $this->kuriKomandaLaimejo = 1;
        } else if ($temp1[0] == $temp1[1]) {
            $this->kuriKomandaLaimejo = 0;
        } else{
            $this->kuriKomandaLaimejo = 2;
        }
    }
}

$vienas = new FutboloRungtynes();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            echo 'kebabas';
            $vienas->simuliuotiTraumas();
            echo ' '.$vienas->patirtaTrauma.' ';
           
            $vienas->laimetojai();
            echo '<br/>';
            var_dump($vienas->rungtyniuRezultatas);
            echo '<br/>';
            echo $vienas->kuriKomandaLaimejo;
        ?>
    </div>
</body>
</html>