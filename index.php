<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <!-- Icon e Title -->
            <title>PassVuln.me</title>
            <link href="img/favicon.ico" rel = "shortcut icon" type = "imagem/x-icon" />

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
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <!-- JS Interno -->
                <script src="js/master.js"></script>
                <!-- Toast -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
                <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

                    <script type="text/javascript">
                    function testeAjax(){
                        var password = $("#pass").val();
                        $.get("count.php?pass="+password,function(data){
                            if(data === "True"){
                                toastr.error('Senha Encontrada!');
                            }else if (data === "False") {
                                toastr.success('Senha Não Encontrada!');
                            }
                            else{
                                toastr.info("Senha invalida!");
                            }
                        });
                    }
                    </script>
    </head>
    <body>
        <div class="menu">
            <center>
                <h1 class="pt-5">PassVuln.me</h1>
                <div class="form-group mx-auto pt-4 formt" style="">
                    <input type="password" class="form-control pass inpt" name="pass" id="pass" required="required" value="" placeholder="Sua Senha..">
                    <input type="button" class="mx-auto form-control btn btn-outline-danger testar mt-3" onclick="testeAjax()" id="testar" name="testar" value="TESTAR" placeholder="testar">
                    <div class="load-container load7 pt-3" id="loading">
                        <div class="loader"></div>
                    </div>
                </div>
            </center>

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

            <div class='conteudo3'>
                <h1 class='mt-2'>API</h1>
                <p class='text-justify mr-3 font-italic'>Para utilizar nossa API,<a href="https://github.com/Joao-b4/PassVuln/blob/master/README.md">Clique Aqui</a>.<br></p>
            </div>
        </div>
        <footer>
            <center><a href='mailto:joaosfontoura555@gmail.com?subject=feedback'>joaosfontoura555@gmail.com </a><br><a href='https://joao-b4.github.io/'>Sobre<br>Contact me.</a></center>
        </footer>
    </body>
</html>
