<?php

    $nombres = ['Marcos', 'Matías', 'Joan', 'Victoria'];
    echo $nombres[3];

?>
<br>
<?php
    $alemanes = [
                'Porsche',
                'Mercedes Benz',
                'Volkswagen',
                'Audi',
                'BMW',
                'RUF',
                'Opel',
                'Daimler'
                ];
    //echo $alemanes
?>
<pre><?php print_r($alemanes); ?></pre>
<?php
    $italianos = [
                    15 => 'Maseratti',
                    21 => 'Bugatti',
                    33 => 'Alfa Romeo',
                    'Lamborghini',
                    'Ferrari',
                    'Lancia'
                ];
?>
<pre><?php print_r($italianos); ?></pre>
<?php
    $celulares = [
                    'Motorola'=>'e5',
                    'Samsung'=>'Galaxy',
                    'Xiaomi'=>'Mi9',
                    'Huawei'=>'P30'
                ];
?>
<pre><?php print_r($celulares); ?></pre>
<?php
    echo $celulares['Xiaomi'];
?>
