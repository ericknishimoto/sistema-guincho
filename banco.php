<?php
function listaLancamentos($conexao) {
    $lancamentos = array();
    $resultado = mysqli_query($conexao, "
      select
      l.id as id,
      l.data as data,
      m.nome as motorista_nome,
      e.nome as empresa_nome,
      p.nome as produto_nome,
      s.nome as servico_nome,
      val_total,
      val_total_empresa

      from
      motoristas as m
  
      join lancamentos as l
      on m.id = l.motoristas_id
  
      join empresas as e
      on e.id = l.empresas_id
  
      join produtos as p
      on p.id = l.produtos_id
  
      join servicos as s
      on s.id = l.servicos_id
      ");
  
    while ($lancamento = mysqli_fetch_assoc($resultado)) {
      array_push($lancamentos, $lancamento);
    }
    return $lancamentos;
}
  
function listaLancamento($conexao, $id) {
  
    $resultado = mysqli_query($conexao, "
    select
    l.id as id,
    l.data as data,
    m.nome as motorista_nome,
    e.nome as empresa_nome,
    p.nome as produto_nome,
    s.nome as servico_nome,
    
    l.motoristas_id,
    l.empresas_id,
    l.produtos_id,
    l.servicos_id,
    workorder,
    ref_externa,
    veiculo,
    placa,
    km_total,
    pedagio,
    extras,
    origem,
    destino,
    val_total,
    val_total_empresa,
    obs
    
    from
  
    motoristas as m
  
    join lancamentos as l
    on m.id = l.motoristas_id
  
    join empresas as e
    on e.id = l.empresas_id
  
    join produtos as p
    on p.id = l.produtos_id
  
    join servicos as s
    on s.id = l.servicos_id
  
    where
  
    l.id = $id
  
    ");
  
    return mysqli_fetch_assoc($resultado);
  }
  
  function insereLancamento ($conexao,$date_for_database,$motorista,$empresa,$produto,$servico,$workorder,
      $ref_externa,$veiculo,$placa,$km_total,$pedagio_decimal,$extras,$origem,$destino,$val_total,$val_total_empresa,$obs)
      { 
      $query = "INSERT INTO lancamentos (data,motoristas_id, empresas_id, produtos_id, servicos_id, workorder, ref_externa, veiculo, placa, km_total, pedagio, extras, origem, destino, val_total, val_total_empresa, obs)
      VALUES ('{$date_for_database}','{$motorista}','{$empresa}','{$produto}','{$servico}','{$workorder}',
      '{$ref_externa}','{$veiculo}','{$placa}','{$km_total}','{$pedagio_decimal}','{$extras}','{$origem}','{$destino}','{$val_total}','{$val_total_empresa}','{$obs}')"; 
  
      return mysqli_query($conexao, $query);
  }
  
  function alteraLancamento ($conexao,$id,$date_for_database,$motorista,$empresa,$produto,$servico,$workorder,
      $ref_externa,$veiculo,$placa,$km_total,$pedagio_decimal,$extras,$origem,$destino,$val_total,$val_total_empresa,$obs)
      { 
      $query = "UPDATE lancamentos set
      data = '{$date_for_database}',
      motoristas_id = '{$motorista}',
      empresas_id = '{$empresa}',
      produtos_id = '{$produto}',
      servicos_id = '{$servico}',
      workorder = '{$workorder}',
      ref_externa = '{$ref_externa}',
      veiculo = '{$veiculo}',
      placa = '{$placa}',
      km_total = '{$km_total}',
      pedagio = '{$pedagio_decimal}',
      extras = '{$extras}',
      origem = '{$origem}',
      destino = '{$destino}',
      val_total = '{$val_total}',
      val_total_empresa = '{$val_total_empresa}',
      obs = '{$obs}'
      
      where id = '{$id}'
      ";
  
      return mysqli_query($conexao, $query);
  }
  
  function excluiLancamento($conexao, $id) {
      $query = "delete from lancamentos where id = {$id}";
      return mysqli_query($conexao, $query);
}

function listaEmpresas($conexao) {
    $empresas = array();
    $query = "select * from empresas";
    $resultado = mysqli_query($conexao, $query);
    while ($empresa = mysqli_fetch_assoc($resultado)) {
        array_push($empresas, $empresa);
    }
    return $empresas;
}

function insereEmpresa($conexao,$nome) { 
    $query = "INSERT INTO empresas (nome)
    VALUES ('{$nome}') "; 

    return mysqli_query($conexao, $query);
}

function alteraEmpresa($conexao,$id,$nome) { 
    $query = "UPDATE empresas set
    nome = '{$nome}'
    
    where id = '{$id}'
    ";

    return mysqli_query($conexao, $query);
}

function excluiEmpresa($conexao, $id) {
    $query = "delete from empresas where id = {$id}";
    return mysqli_query($conexao, $query);
}

function listaMotoristas($conexao) {
    $motoristas = array();
    $query = "select * from motoristas";
    $resultado = mysqli_query($conexao, $query);
    while ($motorista = mysqli_fetch_assoc($resultado)) {
        array_push($motoristas, $motorista);
    }
    return $motoristas;
}

function insereMotorista ($conexao,$nome,$cpf) { 
    $query = "INSERT INTO motoristas (nome, cpf)
    VALUES ('{$nome}','{$cpf}')"; 

    return mysqli_query($conexao, $query);
}

function alteraMotorista ($conexao,$id,$nome,$cpf) { 
    $query = "UPDATE motoristas set
    nome = '{$nome}',
    cpf= '{$cpf}'
    
    where id = '{$id}'
    ";

    return mysqli_query($conexao, $query);
}

function excluiMotorista($conexao, $id) {
    $query = "delete from motoristas where id = {$id}";
    return mysqli_query($conexao, $query);
}

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "

    select

    p.id as id,
    p.nome as nome,
    e.id as empresas_id,
    e.nome as empresas_nome
    
    from
    
    produtos as p
    
    join empresas as e
    on e.id = p.empresas_id

    ");
    
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
      }
      return $produtos;
}

function insereProduto ($conexao,$nome,$empresas_id) { 
    $query = "INSERT INTO produtos (nome, empresas_id)
    VALUES ('{$nome}','{$empresas_id}')"; 

    return mysqli_query($conexao, $query);
}

function alteraProduto ($conexao,$id,$nome,$empresas_id) { 
    $query = "UPDATE produtos set
    nome = '{$nome}',
    empresas_id = '{$empresas_id}'
    
    where id = '{$id}'
    ";

    return mysqli_query($conexao, $query);
}

function excluiProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function listaServicos($conexao) {
    $servicos = array();
    $query = "select * from servicos";
    $resultado = mysqli_query($conexao, $query);
    while ($servico = mysqli_fetch_assoc($resultado)) {
        array_push($servicos, $servico);
    }
    return $servicos;
}

function insereServico($conexao,$nome) { 
    $query = "INSERT INTO servicos (nome)
    VALUES ('{$nome}') "; 

    return mysqli_query($conexao, $query);
}

function alteraServico($conexao,$id,$nome)
    { 
    $query = "UPDATE servicos set
    nome = '{$nome}'
    
    where id = '{$id}'
    ";

    return mysqli_query($conexao, $query);
}

function excluiServico($conexao, $id) {
    $query = "delete from servicos where id = {$id}";
    return mysqli_query($conexao, $query);
}
