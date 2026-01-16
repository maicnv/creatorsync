<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../imgs/keyframe_logo_a.png" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
        <link rel="stylesheet" href="../css/style_cadastro_projetos.css">
        <title> Cadastro | Projetos </title>
    </head>

    <body>

        <header>
            <div class="cabecalho">
                <h1> CREATOR <span><i>SYNC</i></span></h1>
            </div>
            
        </header>

        <main>

            <section class="cadastro">

                <div class="formulario">

                    <div class="titulo">
                        <p><i> projetos. </i></p>
                    </div>

                    <form action="../actions/cadastrandi_projeto.php" method="POST">
                        <div class="dados-primarios">
                          <select name="pedido" required>

                                <option value="" selected disabled hidden> Pedido </option>
                                <option value=""> X </option>
                                <option value=""> Y </option>
                                <option value=""> Z </option>

                            </select>

                            <input type="text" placeholder="Título" name="titulo" required readonly> 
                            <input type="text" placeholder="Descrição" name="descricao" required readonly>
                        </div>

                        <div class="dados-funcionarios">
                            <select name="editor" required>

                                <option value="" selected disabled hidden> Editor </option>
                                <option value=""> A </option>
                                <option value=""> B </option>
                                <option value=""> C </option>

                            </select>

                            <select name="roteirista" required>

                                <option value="" selected disabled hidden> Roteirista </option>
                                <option value=""> A </option>
                                <option value=""> B </option>
                                <option value=""> C </option>

                            </select>
                        </div>
                        
                        <div class="dados-datas">
                            <input type="date" placeholder="Início" name="inicio" required>
                            <input type="date" placeholder="Previsão" name="previsao" required>
                        </div>
    

                        <div class="botoes">
                            
                            <button type="submit">  CADASTRAR </button>
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