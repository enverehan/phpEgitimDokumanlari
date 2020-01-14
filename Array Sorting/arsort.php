<?php

    /**
     * Array'i değere göre büyükten küçüğe doğru sıralar
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
    
    arsort( $degisken );

    print_r( $degisken );
