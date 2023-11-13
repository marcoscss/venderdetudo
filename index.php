
<h1>Aula 02 - Classes </h1>
<pre>
    <?php
    require_once 'Caneta.php';
//caneta 1    
    echo "<h2>Caneta 1 </h2>"  ;
    $c1 = new Caneta;
    $c1->marca = "BIC";
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampar();
    $c1->destampar();
    print_r($c1);

      $c1->rabiscar();
      $c1->texto() ;
      
//caneta 2      
    echo "<h2>Caneta 2 </h2>"  ;

    $c2 = new Caneta;
    $c2->marca = "ipanema";
    $c2->cor = "vermelha";
    $c2->ponta = 0.7;
    $c2->tampada = true;
    $c2->destampar();
    
    var_dump($c2);

    $c2->rabiscar();
    $c2->texto()    ;
    ?>
</pre>    