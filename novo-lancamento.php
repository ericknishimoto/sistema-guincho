<?php 
require_once 'header.php';
?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Novo lançamento
        <small>cadastre um novo lançamento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Lançamentos</li>
        <li class="active">Novo lançamento</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Dados do lançamento</h3>
            </div>
            <div class="box-body">
              <!-- .row -->
              <div class="row">
                <div class="col-md-2">
                    <!-- Date -->
                  <div class="form-group">
                    <label>Data:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label>Motorista:</label>
                    <select type="text" class="form-control">
                      <option>Wesley</option>
                      <option>Jorge</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label>Empresa:</label>
                    <select type="text" class="form-control">
                      <option>Care</option>
                      <option>Velox</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                    <!-- Date -->
                  <div class="form-group">
                    <label>Produto:</label>
                    <select type="text" class="form-control">
                      <option>Bradesco</option>
                      <option>Positron</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-2">
                    <!-- Date -->
                  <div class="form-group">
                    <label>Workorder:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="col-md-2">
                    <!-- Date -->
                  <div class="form-group">
                    <label>Ref. Externa:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>

              </div>
              <!-- /.row -->
              <!-- .row -->
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Serviço:</label>
                    <select type="text" class="form-control">
                      <option>Taxi</option>
                      <option>Leve</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Veículo:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Placa:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>      
                <div class="col-md-2">
                  <div class="form-group">
                    <label>KM Totais:</label>
                    <input type="text" class="form-control">
                  </div>
                </div> 
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Pedágio:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>      
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Extras:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>   
              </div>
              <!-- /.row -->     
              <!-- .row -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label>Origem:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.row -->
              <!-- .row -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label>Destino:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.row -->   
              <!-- .row -->
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>Total:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                    <label>Total Empresa:</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.row --> 
              <!-- .row -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label>Observações</label>
                    <textarea class="form-control" rows="2" placeholder="Digite aqui..."></textarea>
                  </div> 
                </div>
              </div>
              <!-- /.row -->    

            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="center-block text-center">
          <a href="novo-lancamento.php" class="btn btn-success margin-bottom margin"><i class="fa fa-check"></i><span> Cadastrar</span></a>
          <a href="todos-lancamentos.php" class="btn btn-default margin-bottom margin"><i class="fa fa-arrow-left"></i><span> Voltar</span></a>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
require_once 'footer.php';
?>