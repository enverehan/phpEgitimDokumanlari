<?php

    /**
     * Array'i keye göre büyükten küçüğe doğru sıralar
     */

    // Değişkenimizi tanımlayalım
    $degisken = array(
        'sandalye' => 50,
        'koltuk' => 80,
        'masa' => 40,
    );

    // ilk halini yazdıralım
    print_r( $degisken );
    echo "<br />";
    
    krsort( $degisken );

    print_r( $degisken );
