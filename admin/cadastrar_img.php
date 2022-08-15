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

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">CADASTRAR IMAGEM PORTAL </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


			<form class="foorm-inline" action="cadastro_img.php" enctype="multipart/form-data" method="post" name="cadastrarfoto" >
                                                                    <table class="table table-responsive">
                                                                        <tr>
                                                                            <td colspan="12" class="table_header_color" ><b> FOTOGRAFIA</b></td>

                                                                        </tr>
                                                                        <tr >
                                                                            <td >
                                                                                    <div>

                                                                                    </div>
                                                                                <div class="form-group">
                                                                                    <div class="input-group col-lg-12">
                                                                                        <div class="input-group-addon">Upload</div>
                                                                                        <input  class="form-control" name="image" accept="image/*; capture=camera" multiple type="file"  required>
                                                                                    </div>
                                                                                </div>

                                                                            </td>

                                                                        </tr>


                                                                        <tr>
                                                                            <td><input type="submit" name="submit" value="Salvar" class="btn btn-danger">

                                                                        </tr>
                                                                    </table>

                                                                </form>
		<br />
		<br />
		
		
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
		
		
      </div><!-- /.container-fluid -->
    </div>
  
  </div>
  <!-- /.content-wrapper -->
<?php
include "rodape.php"

?>
