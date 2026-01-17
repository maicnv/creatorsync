<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../imgs/keyframe_logo_a.png" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
        <link rel="stylesheet" href="../css/style_atualizacao_projetos.css">
        <title> Atualização | Projetos </title>
    </head>

    <body>

        <header>
            <div class="cabecalho">
                <h1> CREATOR <span><i>SYNC</span></i></h1>
            </div>
            
        </header>

        <main>

            <section class="atualizacao">

                <div class="formulario">

                    <div class="titulo">
                        <p><i> projetos. </i></p>
                    </div>

                    <form action="../actions/atualizar_projeto.php" method="POST">
                        <div class="dados-pedido">
                            <select name="projeto" required>

                                <option value="" selected disabled hidden> Projeto </option>
                                <option value=""> X </option>
                                <option value=""> Y </option>
                                <option value=""> Z </option>

                            </select>

                            <input type="text" placeholder="Título" name="titulo" required readonly> 
                            <input type="text" placeholder="Descrição" name="descricao" required readonly>
                        </div>

                        <div class="dados-etapas">

                            <select name="edicao" required>

                                <option value="" selected disabled hidden> Edição </option>
                                <option value="desenvolvendo"> Desenvolvendo </option>
                                <option value="analisando"> Analisando </option>
                                <option value="aprovado"> Aprovado </option>

                            </select>

                            <select name="Roteiro" required>
                                <option value="" selected disabled hidden> Roteiro </option>
                                <option value="desenvolvendo"> Desenvolvendo </option>
                                <option value="analisando"> Analisando </option>
                                <option value="aprovado"> Aprovado </option>
                                
                            </select>

                        </div>

                        <div class="dados-extras">
                            <input type="text" placeholder="Caminho" name="caminho" required>
                            <input type="date" name="entrega" required>
                        </div>
    

                        <div class="botoes">
                            
                            <button type="submit">  ATUALIZAR </button>
                            <button type="reset"> LIMPAR </button>

                        </div>

                    </form>


                </div>
                
                <div class="logos">
                    <a href="../pages/landingpage_creatorsync.html" target="_blank"><img src="../imgs/keyframe_logo_a.png"></a>
                    <img src="../imgs/creatorsync_logo_a.png">
                </div>

                
            </section>

        </main>
        
    </body>

</html>
