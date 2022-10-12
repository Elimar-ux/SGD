<?php 
    // A função abaixo demonstra o uso de uma expressão regular que identifica, de forma simples, telefones válidos no Brasil.
    // Nenhum DDD iniciado por 0 é aceito, e nenhum número de telefone pode iniciar com 0 ou 1.
    // Exemplos válidos: +55 (11) 98888-8888 / 9999-9999 / 21 98888-8888 / 5511988888888
	$phone = "26917847";
    
    function phoneValidate($phone)
    {
        $regex = '/^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)?(?:((?:9\d|[2-9])\d{3})\-?(\d{4}))$/';

        if (preg_match($regex, $phone) == false) {
            // O número não foi validado.
        	return false;
            
        } else {
            // Telefone válido.
            return true;
            
        }        
    }
    if (phoneValidate($phone) == false) {
    	echo "número inválido!";
    }else{
    	header("Location: index.php");
    	exit();
    }
?>