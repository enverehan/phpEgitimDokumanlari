<?php

    /**
     * Array'i küçükten büyüğe doğru sıralar
     */

    // Değişkenimizi tanımlıyoruz
    $array = array( "Apple", "MSI", "Dell", "Lenovo", "Asus", "Sony" );

    // Ekrana değişkenimizin ilk halini yazıyoruz
    print_r( $array );

    echo "<br />";
    sort( $array );

    print_r( $array );