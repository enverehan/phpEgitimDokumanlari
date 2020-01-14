<?php

    /**
     * Array'i key'e göre küçükten büyüğe doğru sıralar
     */

    // Değişkenimizi tanımlayalım
    $degisken = array(
        'sandalye' => 50,
        'masa' => 40,
        'koltuk' => 80
    );

    // ilk halini yazdıralım
    print_r( $degisken );
    echo "<br />";
    
    ksort( $degisken );

    print_r( $degisken );
