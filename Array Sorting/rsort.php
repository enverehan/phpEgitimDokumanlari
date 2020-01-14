<?php

    /**
     * Array'i büyükten küçüğe doğru sıralar
     */

    // Değişkenimizi tanımlıyoruz
    $array = array( "Apple", "MSI", "Dell", "Lenovo", "Asus", "Sony" );

    // Ekrana değişkenimizin ilk halini yazıyoruz
    print_r( $array );
    
    echo "<br />";
    
    rsort( $array );

    print_r( $array );
