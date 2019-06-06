<?php

  // echo "entrei no arquivo functions";

  $produtos=[];

  $produtos[]=[
    "nome"=>"Camiseta Vingadores",
    "preco"=>50.99,
    "estoque"=>100,
    "min"=>20,
    "status"=>true
  ];
  $produtos[]=[
    "nome"=>"Camiseta Polo",
    "preco"=>30.99,
    "estoque"=>800,
    "min"=>10,
    "status"=>true
  ];
  $produtos[]=[
    "nome"=>"Calça Marrom",
    "preco"=>80.50,
    "estoque"=>120,
    "min"=>60,
    "status"=>true
  ];
  $produtos[]=[
    "nome"=>"Sandália de praia",
    "preco"=>56.00,
    "estoque"=>35,
    "min"=>50,
    "status"=>true
  ];
  $produtos[]=[
    "nome"=>"Boné cavalera",
    "preco"=>78.99,
    "estoque"=>200,
    "min"=>70,
    "status"=>true
  ];

  function totalProduto($produtoPreco, $produtoEstoque){
    $total = 0;
    $total = $produtoPreco + $produtoEstoque;
    return $total;
  }



  function totalEstoque(){
    global $produtos;
    $soma = 0;

    foreach ($produtos as $key => $produto) {
      $soma = $soma + totalProduto($produto['preco'],$produto['estoque']);
      return $soma;
    }
  }
  // var_dump($produtos);

?>
