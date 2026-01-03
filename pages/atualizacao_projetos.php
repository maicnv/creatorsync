<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Atualização | Projetos </title>
    </head>

    <body>

        <header>
            <div class="cabecalho">

                <img src="">
                <h1> CREATOR SYNC </h1>

            </div>
            
        </header>

        <main>

            <section class="atualizacao">

                <div class="titulo">
                    <h3> projetos </h3>
                </div>

                <div class="formulario">

                    <form action="../actions/atualizar_projeto.php" method="POST">

                        <select name="projeto" required>

                            <option value="" selected disabled hidden> Projeto </option>
                            <option value=""> X </option>
                            <option value=""> Y </option>
                            <option value=""> Z </option>

                        </select>

                        <input type="text" placeholder="Título" name="titulo" required readonly> 
                        <input type="text" placeholder="Descrição" name="descricao" required readonly>

                        <input type="text" placeholder="Edição" name="edicao" required>
                        <input type="text" placeholder="Roteiro" name="roteiro" required>
                        <input type="text" placeholder="Caminho" name="caminho" required>
                        <input type="date" name="entrega" required>
    

                        <div class="botoes">
                            
                            <button type="submit">  ATUALIZAR </button>
                            <button type="reset"> LIMPAR </button>

                        </div>

                    </form>


                </div>
                
            </section>

        </main>
        
    </body>

</html>
