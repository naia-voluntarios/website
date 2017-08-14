
<?php 
include "header.php";
include "banner.php";

new Header("Naia | Núcleo Assistencial Irmão Alfredo",'Conheça o Núcleo Assistencial Irmão Alfredo'); 
 
 new Banner("Doações");
?>

<section id="intro-doar" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="title-style-1">Ajude-nos contribuindo! <span class="title-under"></span></h2>
                <p>
                    Além de contribuições de vários setores da sociedade, contamos também com os mantenedores, que nos ajudam fazendo doações regularmente. Você pode fazer parte desse grupo! O valor a ser doado fica a seu critério. 
                    Após a doação em conta, solicite seu recibo pelo e-mail <a href="mailto:captacao.recursos@naia.org.br">captacao.recursos@naia.org.br</a>.
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="title-style-1">Doação financeira! <span class="title-under"></span></h2>
                <p> Preencha o formulário abaixo para nos doar via Pagseguro! Qualquer ajuda é Significativa! </p>
                <form id="signup" class="formee" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="fname">Nome *</label> <input class="form-control" name="fname" id="fname" type="text" required/>
                        </div>
                        <div class="form-group">
                            <label for="lname">Sobrenome *</label> <input class="form-control" name="lname" id="lname" type="text" required/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label> <input class="form-control" name="email" id="email" type="text" required/>
                        </div>
                        <div class="form-group">
                            <center><input class="btn btn-primary" type="submit" title="Send" value="Doar!" /></center>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="title-style-1"><a href="https://apoia.se/naia" target="_blank">Ajuda Recorrente! </a><span class="title-under"></span></h2>
                <p> Através do link <a href="https://apoia.se/naia" target="_blank">https://apoia.se/naia! </a> você pode ajudar o naia com uma ajuda recorrente! Ficaremos muito felizes por receber sua ajuda :)</p>
                <center><a class="btn btn-primary" target="_blank" href="https://apoia.se/naia">Ajude!</a></center>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div id="bola" class="col-md-6">
                <h2 class="title-style-1">A Bola está em suas mãos! <span class="title-under"></span></h2>
                <p> Você e sua organização podem fazer muito mais pelo NAIA! </p>
                <p> Procuramos organizações que possam agregar a nossa missão, trazendo conteúdo e mostrando um horizonte aos nossos jovens. Procuramos empresas interessadas em patrocinar nossa causa, seja através de atividades socioeducativas ou doações. </p>
                <p> Caso tenham interesse entre em contato através de  <a href="mailto:diretoria@naia.org.br">diretoria@naia.org.br</a> com o assunto "A Bola em Nossas Mãos! - Nome da sua empresa"</p>
                <center><a class="btn btn-primary" target="_blank" href="contato.php">Fale conosco</a></center>
            </div>
            <div class="col-md-3"></div>
        </div>
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2 class="title-style-1">Doe para o bazar! <span class="title-under"></span></h2>
                <p> Você pode doar livros, brinquedos, roupas, móveis, eletrodomésticos, entre outros
produtos que estejam em condições de uso. </p>
                
                <center><a class="btn btn-primary" target="_blank" href="contato.php">Fale conosco</a></center>
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>
</section>


<?php

include 'footer.php';

?>