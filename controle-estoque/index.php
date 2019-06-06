<?php

  // require ('functions.php'); //inclui o arquivo

  require_once ('functions.php'); //garante que o arquivo só foi incluido uma vez
  include_once ('header.php'); //inclui header na pagina

?>



    <main class="container">
      <h1>Controle de Estoque</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Qtdade Mínima</th>
            <th>Status</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>

          <?php
            foreach ($produtos as $indice => $valor) {
              // if ($valor["estoque"]<$valor["min"]){
              //   $class = "vermelho";
              // }else{
              //   $class = "";
              // }
              $class = ($valor["estoque"]<$valor["min"]) ?  $class = "vermelho" : $class = "";
              echo "<tr class='$class'>";
              echo "<td>".$valor["nome"]."</td>";
              echo "<td> R$ ". number_format($valor["preco"],2,',','.') ."</td>";
              echo "<td>".$valor["estoque"]."</td>";
              echo "<td>".$valor["min"]."</td>";
              echo "<td>".($valor["status"] == true ? "Ativo" : "Desativado")."</td>";
              echo "<td> R$ ". number_format(totalProduto($valor['preco'],$valor['estoque']),2,',','.') ."</td>";
              echo "</tr>";
            }

          ?>

          <!-- <tr>
            <td>Camisetas</td>
            <td>R$50</td>
            <td>100</td>
            <td>20</td>
            <td>Ativo</td>
          </tr>
          <tr>
            <td>Calça</td>
            <td>R$100</td>
            <td>200</td>
            <td>50</td>
            <td>Ativo</td>
          </tr> -->

        </tbody>
        <tfoot>
          <tr>
            <td colspan="3">
              Total em Estoque
            </td>
            <td colspan="3" class="text-right">
              <?php echo "R$ " . number_format(totalEstoque(),2,',','.'); ?>
            </td>
          </tr>


        </tfoot>
      </table>
    </main>

<?php
  include_once('footer.php');
?>
