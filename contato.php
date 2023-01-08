<?php 
    global  $tituloPagina;
    $tituloPagina = "Contato";
    include('partes/cabecalho.php');

    $nome = '';
    $email = '';
    $mensagem = '';
    $erroFormulario = '';
    if(isset ($_POST['submit']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        if(
            $nome != '' 
            && $email != '' 
            && $mensagem != '')
        {
            // usuário preencheu corretamente


        }
        else{
            // usuário não preencheu todos os campos
            $erroFormulario = "Por favor verifique o preenchimento dos campos";
        }
    } 
?>
            <header class="pagina-cabecalho">
                <h1 class="pagina-cabecalho__titulo">Contato</h1>
            </header>
            <section class="pagina-conteudo">
                <p class="text-center">Suspendisse convallis, turpis vitae  placerat  luctus, est felis dictum  augue.</p>
                <form action="contato.php" class="formulario" method="post">
                    <?php if($erroFormulario != ''): ?>
                        <div class="formulario__erro">
                            <?php echo $erroFormulario ?>
                        </div>
                    <?php endif; ?>
                    <div class="formulario__grupo formulario__grupo--coluna-esq">
                          <label class="formulario__label" for="nome">Nome</label><br>
                        <input class="formulario__campo" id="nome" type="text" name="nome">
                    </div>
                    <div class="formulario__grupo formulario__grupo--coluna-dir">
                         <label class="formulario__label" for="email">E-mail</label><br>
                        <input class="formulario__campo" id="email" type="text" name="email">
                    </div>
                    <div class="formulario__grupo">
                         <label class="formulario__label" for="mensagem">Mensagem</label><br>
                        <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="" rows=""></textarea>
                    </div>
                    <input type="submit" class="formulario__botao" value="Enviar" name="submit">
                 </form>
                 <p class="text-center">Maecenas facilisis volutpat ipsum, sed faucibus tortor aliquam non. <br>  
                    Aliquam erat volutpat. Vivamus  cursus p ulvinar turpis,  nec blandit  augue maximus ac.</p>
                </section>
                <div class="mapa">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29401.948523920673!2d-43.21129812888966!3d-22.904385432284926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1669665523975!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
<?php include('partes/rodape.php'); ?>  