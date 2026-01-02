<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cadastro | Projetos </title>
    </head>

    <body>

        <header>
            <div class="cabecalho">

                <img src="">
                <h1> CREATOR SYNC </h1>

            </div>
            
        </header>

        <main>

            <section class="cadastro">

                <div class="titulo">
                    <h3> projetos </h3>
                </div>

                <div class="formulario">

                    <form action="../actions/cadastrar_projeto.php" method="POST">

                        <select name="pedido" required>

                            <option value="" selected disabled hidden> Pedido </option>
                            <option value=""> X </option>
                            <option value=""> Y </option>
                            <option value=""> Z </option>

                        </select>

                        <input type="text" placeholder="Título" name="titulo" required readonly> 
                        <input type="text" placeholder="Descrição" name="descricao" required readonly>

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

                        <input type="date" placeholder="Início" name="inicio" required>
                        <input type="date" placeholder="Previsão" name="previsao" required>
    

                        <div class="botoes">
                            
                            <button type="submit">  CADASTRAR </button>
                            <button type="reset"> LIMPAR </button>

                        </div>

                    </form>


                </div>
                
            </section>

        </main>
        
    </body>

</html>