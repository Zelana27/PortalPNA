<?php
	include"cabecalho.php";
	include"menu_navegacao.php"
?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/pnalogo.jpeg" alt="pna Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Polícia Nacional</span>
    </a>

    <!-- Sidebar -->
    <?php
		include "menubar.php";
	?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">PORTAL INTERNO DO CGPNA</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div><!-- /.col -->
        </div>	
		<div class="col-12">

            <div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">CADASTRAR USUARIO</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form enctype="multipart/form-data" action="cadastro_usuario.php" name="form" method="post">
				<div class="card-body">
					
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Nome:</label>
						<div class="col-sm-10">
							<input type="text" name="nome" class="form-control is-valid" id="inputSuccess" placeholder="Descricao da noticia / Titulo" required>
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Senha:</label>
						<div class="col-sm-10">
							<input type="password"  name="senha" class="form-control is-valid" id="inputSuccess" placeholder="Descricao da noticia / Resumo" required	>
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">Tipo de utilizador:</label>
						<div class="col-sm-10">
						<select name = "tipo"class="form-control">
							<option value="admin">admin</option>
							
							<option value="usuario">usuario</option>
						</select>
							</div>
					</div>

					
						
					

				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-info">Registar</button>
					<button type="submit" class="btn btn-default float-right">Cancelar</button>
				</div>
				<!-- /.card-footer -->
			</form>
		</div>
                    </div>
		
		
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
            
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "rodape.php"

?>
