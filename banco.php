<?php
function listaEmpresas($conexao)
{
    $empresas = array();
    $query = "select * from empresas";
    $resultado = mysqli_query($conexao, $query);
    while ($empresa = mysqli_fetch_assoc($resultado)) {
        array_push($empresas, $empresa);
    }
    return $empresas;
}

function listaMotoristas($conexao)
{
    $motoristas = array();
    $query = "select * from motoristas";
    $resultado = mysqli_query($conexao, $query);
    while ($motorista = mysqli_fetch_assoc($resultado)) {
        array_push($motoristas, $motorista);
    }
    return $motoristas;
}

function listaProdutos($conexao)
{
    $produtos = array();
    $query = "select * from produtos";
    $resultado = mysqli_query($conexao, $query);
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function listaServicos($conexao)
{
    $servicos = array();
    $query = "select * from servicos";
    $resultado = mysqli_query($conexao, $query);
    while ($servico = mysqli_fetch_assoc($resultado)) {
        array_push($servicos, $servico);
    }
    return $servicos;
}


function listaLancamentos($conexao)
{
  $lancamentos = array();
  $resultado = mysqli_query($conexao, "
    select
    l.id as id,
    l.data as data,
    m.nome as motorista_nome,
    e.nome as empresa_nome,
    p.nome as produto_nome,
    s.nome as servico_nome
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

function listaLancamento($conexao, $id)
{
  $lancamentos = array();
  $resultado = mysqli_query($conexao, "
  select
  l.id as id,
  l.data as data,
  m.nome as motorista_nome,
  e.nome as empresa_nome,
  p.nome as produto_nome,
  s.nome as servico_nome,
  
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

  while ($lancamento = mysqli_fetch_assoc($resultado)) {
    array_push($lancamentos, $lancamento);
  }
  return $lancamentos;
}

function insereLancamento ($conexao,$date_for_database,$motorista,$empresa,$produto,$servico,$workorder,
      $ref_externa,$veiculo,$placa,$km_total,$pedagio_decimal,$extras,$origem,$destino,$val_total,$val_total_empresa,$obs)
      { 
        $query = "INSERT INTO lancamentos (data,motoristas_id, empresas_id, produtos_id, servicos_id, workorder, ref_externa, veiculo, placa, km_total, pedagio, extras, origem, destino, val_total, val_total_empresa, obs)
        VALUES ('{$date_for_database}','{$motorista}','{$empresa}','{$produto}','{$servico}','{$workorder}',
        '{$ref_externa}','{$veiculo}','{$placa}','{$km_total}','{$pedagio_decimal}','{$extras}','{$origem}','{$destino}','{$val_total}','{$val_total_empresa}','{$obs}')"; 
        $resultadoDaInserção = mysqli_query($conexao, $query);
        return $resultadoDaInserção;
      }