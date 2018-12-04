<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <!-- Icon e Title -->
            <title>PassVuln.me</title>
            <link href="img/favicon.ico"rel = "shortcut icon" type = "imagem/x-icon" />

        <!-- TAGS Meta -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2 ,shrink-to-fit=no">
            <meta name="theme-color" content="#c62828">
            <meta name="apple-mobile-web-app-status-bar-style" content="#c62828">
            <meta name="msapplication-navbutton-color" content="#c62828">
            <meta name="description" content="Um Site Simples Para Você Testar a Equivalência da Sua Senha em Wordlists.">
            <meta name="author" content="João Vítor dos Santos Fontoura">

        <!-- Tags link -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <!-- CSS Interno -->
                <link rel="stylesheet" href="./css/master.css">

        <!-- Tags script -->
            <!-- CDN Bootstrap -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <!-- Link jquery -->
                <script src="js/jquery/jquery.js"></script>
            <!-- JS Interno -->
                <script src="js/master.js"></script>
    </head>
    <body>
        <div class="menu">
            <center>
                <h1 class="pt-5">PassVuln.me</h1>
                <form class="form-group mx-auto pt-4" action="" method="post">
                    <input type="password" class="form-control pass" name="pass" required="required" value="" placeholder="Sua Senha..">
                    <input type="submit" onclick="removeC()"class="mx-auto form-control btn btn-outline-danger testar" id="testar" name="testar" value="TESTAR" placeholder="testar">
                    <div class="load-container load7" id="loading">
                        <div class="loader"></div>
                    </div>
                </form>
            </center>

<?php
if(isset($_POST['testar'])){
    echo"<script>
              removeC();
        </script>";

//entrada
$pass = $_POST['pass'];

//validarEntrada

if(empty($pass) || strlen($pass) > 100){
    echo "<div class='mx-auto spn'><center><span class='alert alert-info mx-auto spans'>Insira uma Senha valida!</span></center></div> </div>
            <div class='container mx-auto text-capitalize conteudo shadow-lg'>
                <div class='conteudo1'>
                    <h1 class='mt-2'>Como Funciona?</h1>
                    <p class='text-justify font-italic'>Testamos a compatibilidade de sua senha em</br>relação á milhares de outras senhas ja categorizadas<br>nas grandes wordlists conhecidas e utilizadas em todo o mundo.</p>
                </div>
                <div class='conteudo2'>
                    <h1 class='mt-2'>é seguro?</h1>
                    <p class='text-justify mr-3 font-italic'>Sim. Não guardamos nenhuma senha inserida, não utilizamos Bancos de dados, apenas verificamos a existência de sua senha em nossas wordlist.<br><a href='https://github.com/Joao-b4/PassVuln'>clique aqui</a> e veja nosso codigo-fonte.</p>
                </div>
            </div>
            <footer>
                <center><a href='mailto:joaosfontoura555@gmail.com?subject=feedback'>joaosfontoura555@gmail.com </a><br><a href='https://joao-b4.github.io/'>Sobre<br>Contact me.</a></center>
            </footer>
        </body>
    </html>";
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
$john = strpos(file_get_contents('wordlists/john/password.lst'),$pass);

// antixss
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
  foreach($passCount as $e){
      //echo $e."<br><br>";
      echo "<div class='mx-auto spn'><center><span class='alert alert-danger spans mt-3'>Senha Encontrada!</span><br><br><span class='alert alert-danger spans'> <a href='https://support.google.com/accounts/answer/32040?hl=pt-BR' target='_blank'>Clique Aqui</a> e Descubra Como criar uma senha mais forte.</span></center></div> </div>
              <div class='container mx-auto text-capitalize conteudo shadow-lg'>
                  <div class='conteudo1'>
                      <h1 class='mt-2'>Como Funciona?</h1>
                      <p class='text-justify font-italic'>Testamos a compatibilidade de sua senha em</br>relação á milhares de outras senhas ja categorizadas<br>nas grandes wordlists conhecidas e utilizadas em todo o mundo.</p>
                  </div>
                  <div class='conteudo2'>
                      <h1 class='mt-2'>é seguro?</h1>
                      <p class='text-justify mr-3 font-italic'>Sim. Não guardamos nenhuma senha inserida, não utilizamos Bancos de dados, apenas verificamos a existência de sua senha em nossas wordlist.<br><a href='https://github.com/Joao-b4/PassVuln'>clique aqui</a> e veja nosso codigo-fonte.</p>
                  </div>
              </div>
              <footer>
                  <center><a href='mailto:joaosfontoura555@gmail.com?subject=feedback'>joaosfontoura555@gmail.com </a><br><a href='https://joao-b4.github.io/'>Sobre<br>Contact me.</a></center>
              </footer>
          </body>
      </html>";
  }
  return 0;
}
echo "<div class='mx-auto spn'><center><span class='alert alert-success mt-3 spans'>Senha Não Encontrada em Nossas Wordlists!</span></center></div>";
unset($pass);
}//fecha post testar
 ?>
 </div>
        <div class='container mx-auto text-capitalize conteudo shadow-lg'>
            <div class='conteudo1'>
                <h1 class='mt-2'>Como Funciona?</h1>
                <p class='text-justify font-italic'>Testamos a compatibilidade de sua senha em</br>relação á milhares de outras senhas ja categorizadas<br>nas grandes wordlists conhecidas e utilizadas em todo o mundo.</p>
            </div>
            <div class='conteudo2'>
                <h1 class='mt-2'>é seguro?</h1>
                <p class='text-justify mr-3 font-italic'>Sim. Não guardamos nenhuma senha inserida, não utilizamos Bancos de dados, apenas verificamos a existência de sua senha em nossas wordlist.<br><a href='https://github.com/Joao-b4/PassVuln'>clique aqui</a> e veja nosso codigo-fonte.</p>
            </div>
        </div>
        <footer>
            <center><a href='mailto:joaosfontoura555@gmail.com?subject=feedback'>joaosfontoura555@gmail.com </a><br><a href='https://joao-b4.github.io/'>Sobre<br>Contact me.</a></center>
        </footer>
    </body>
</html>
