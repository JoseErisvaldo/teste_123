<?php

session_start();

// Esta funçõ vai ser para listar os dados do banco de daddos!!
include_once("conexao.php");







?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baixa de Estoque</title>
<!-- EXCLUIR CASO NÕ DER B.O   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>
<body>


    <div id="container"><!--inicio-container-geral-->

    <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
        <div><h5>Movimentação:</h5></div>
            <div style class="custom-cen custom-checkbox"> <!-- Inicio-custom-checkbox-->
                    <select name='movimentacao' id='movimentacao' required >
                        <option class="cen-con" value="">Selecione</option>
                        <?php foreach($movimentacao as $movimentacao){ ?>
                            <option value="<?php echo $movimentacao[0]; ?>"><?php echo $movimentacao[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>   <!-- Fim-custom-checkbox-->
            </div> <!-- Fim-container-mt-4-->




        <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
        <div><h5>Usuário:</h5></div>
            <div style class="custom-cen custom-checkbox"> <!-- Inicio-custom-checkbox-->
                    <select name='nome' id='nome' required>
                        <option class="cen-con" value="">Selecione</option>
                        <?php foreach($nome as $nome){ ?>
                            <option value="<?php echo $nome[0]; ?>"><?php echo $nome[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>   <!-- Fim-custom-checkbox-->
            </div> <!-- Fim-container-mt-4-->

        <div class="cen-2 mt-4 mb-4 " >  <!-- Inicio-cen-2 mt-4 mb-4-->
            <div><h5>Tipo de Produto:</h5></div>
            <div class="custom-cen custom-checkbox"> <!--Inicio custom-cen custom-checkbox -->
                    <select name='tipoproduto' id='tipoproduto' required>
                        <option value="">Selecione</option>
                            <?php foreach($tipoproduto as $tipoproduto){ ?>
                                <option value="<?php echo $tipoproduto[0]; ?>"><?php echo $tipoproduto[0]; ?></option>
                            <?php } ?>
                    </select>
            </div> <!--Fim custom-cen custom-checkbox -->
        </div> <!-- Fim-cen-2 mt-4 mb-4-->



        <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
        <div><h5>Produto:</h5></div>
            <div style class="custom-cen custom-checkbox"> <!-- Inicio-custom-checkbox-->
                    <select name='produto' id='produto' required>
                        <option class="cen-con" value="">Selecione</option>
                        <?php foreach($produto as $produto){ ?>
                            <option value="<?php echo $produto[0]; ?>"><?php echo $produto[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>   <!-- Fim-custom-checkbox-->
            </div> <!-- Fim-container-mt-4-->

            <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
            <form method="POST" action="processando_shettes.php">
            <label for="exampleFormControlTextarea1"><h5>Lote:</h5></label>
                <div class="lote">
                  <input type="text" id="lote" name="lote"  required/>
                </div>

                <input type="submit" value="Cadastrar">

            </form>
            </div> <!-- Fim-container-mt-4-->



            <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
                <label for="exampleFormControlTextarea1"><h5>Validade:</h5></label>
                <input id="date" type="date" required>
            </div> <!-- Fim-container-mt-4-->


            <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
        <div><h5>Quantidade:</h5></div>
            <div style class="custom-cen custom-checkbox"> <!-- Inicio-custom-checkbox-->
                    <select name='qtd' id='qtd' required>
                        <option class="cen-con" value="">Selecione</option>
                        <?php foreach($quantidade as $quantidade){ ?>
                            <option value="<?php echo $quantidade[0]; ?>"><?php echo $quantidade[0]; ?></option>
                        <?php } ?>
                    </select>
                </div>   <!-- Fim-custom-checkbox-->
            </div> <!-- Fim-container-mt-4-->


            <div class="mt-4 mb-4"> <!-- Inicio-container-mt-4-->
            <label for="exampleFormControlTextarea1"><h5>Valor:</h5></label>
                <div class="ajuste">
                    <label for="dinheiro">R$:</label>
                    <input type="text" id="dinheiro" name="dinheiro" required/>
                </div>
            </div> <!-- Fim-container-mt-4-->

            ?>







    </div> <!--fim-container-geral-->






    <div id="container-inf">
        <table class="blueTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Movimentação</th>
                    <th>Usuário</th>
                    <th>Tipo de Produto</th>
                    <th>Produto</th>
                    <th>Lote</th>
                    <th>Validade</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>cell1_1</td>
                    <td>cell2_1</td>
                    <td>cell3_1</td>
                    <td>cell4_1</td>
                    <td>cell5_1</td>
                    <td>cell6_1</td>
                    <td>cell7_1</td>
                    <td>cell8_1</td>
                    <td>cell9_1</td>
                    <td>cell10_1</td>
                </tr>
            </tbody>
            </tr>
        </table>



    </div>


<script src="lib/js/vanilla-masker-master/lib/vanilla-masker.js"></script>
<script src="lib/js/javascript.js"></script>


</body>
</html>
