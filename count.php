<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET['pass'])){
        //entrada
        $pass = $_GET['pass'];

        //validarEntrada

        if(empty($pass) || strlen($pass) > 100){
            //senha invalida
            echo "Invalid!";
            return;
        }

        //testes
        $passCount = array();


        //abrindo arquivo
        $rockyou1 = strpos(file_get_contents('wordlists/rockyou/aa'),$pass);
        $rockyou2 = strpos(file_get_contents('wordlists/rockyou/ab'),$pass);
        $rockyou3 = strpos(file_get_contents('wordlists/rockyou/ac'),$pass);
        $rockyou4 = strpos(file_get_contents('wordlists/rockyou/ad'),$pass);
        $rockyou5 = strpos(file_get_contents('wordlists/rockyou/ae'),$pass);
        $john     = strpos(file_get_contents('wordlists/john/password.lst'),$pass);

        // antiXSS
        $pass = htmlspecialchars($pass);

        //testando
        if($rockyou1 !== false){
            $passCount[] = "Encontrado na rockyou";
        }elseif ($rockyou2 != false ) {
            $passCount[] = "Encontrado na rockyou";
        }
        elseif ($rockyou3 != false ) {
            $passCount[] = "Encontrado na rockyou";
        }
        elseif ($rockyou3 != false ) {
            $passCount[] = "Encontrado na rockyou ";
        }
        elseif ($rockyou4 != false ) {
            $passCount[] = "Encontrado na rockyou ";
        }
        elseif ($rockyou5 != false ) {
            $passCount[] = "Encontrado na rockyou ";
        }
        elseif ($john != false) {
            $passCount[] = "Encontrado na john";
        }

        if(count($passCount) != 0){ //valida
          // foreach($passCount as $e){
          //     //echo $e."<br><br>";
              echo 'True';
          //}
          return;
      }else{
          echo "False";
          return;
      }
        unset($pass);
    }else {
        echo "Invalid!";
        return;
    }

}else{
    echo null;
}//FIM get
 ?>
