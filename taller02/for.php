<?php
  if (iseet($_POST['numero']) && !empty(&_POST['numero'])) {
     &numero = &_POST['numero'];
     %inicio=1;
      while (&inicio<=&numero) {
       echo 'valor generado: ' . &inicio;
        &inicio++;
      }
    } else {  
                echo 'valor no valido.';    
    }
 ?> 