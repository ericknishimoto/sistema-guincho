<?php
require_once 'header.php';
require_once 'conecta.php';
require_once 'banco.php';

$lancamentos = listaLancamentos($conexao);

?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lançamentos
        <small>veja todos os lançamentos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lançamentos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<?php if(isset($_GET["cadastro"]) && $_GET["cadastro"]==true) {
?>
    <div class="row">
      <div class="col-xs-6">
      <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrado</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            Lançamento #<?=$_GET["id"] ?> cadastrado com sucesso!
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
<?php
  }
?>
    <div class="row">
      <div class="col-xs-7 col-md-3">
        <a href="novo-lancamento.php" class="btn btn-block btn-success margin-bottom"><i class="fa fa-plus"></i><span> Adicionar lançamento</span></a>
      </div>
    </div>

      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Todos lançamentos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>#Ordem</th>
                  <th>Data</th>
                  <th>Motorista</th>
                  <th>Empresa</th>
                  <th>Produto</th>
                  <th>Serviço</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($lancamentos as $lancamento) {
                ?>
                  <tr>
                  <!-- utf8_encode() codifica a string para utf-8 -->
                    <td><?= utf8_encode($lancamento['id']) ?></td>
                    <td><?= utf8_encode($lancamento['data']) ?></td>
                    <td><?= utf8_encode($lancamento['motorista_nome']) ?></td>
                    <td><?= utf8_encode($lancamento['empresa_nome']) ?></td>
                    <td><?= utf8_encode($lancamento['produto_nome']) ?></td>
                    <td><?= utf8_encode($lancamento['servico_nome']) ?></td>
                  </tr>
                <?php
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                <th>#Ordem</th>
                <th>Data</th>
                <th>Motorista</th>
                <th>Empresa</th>
                <th>Produto</th>
                <th>Serviço</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>