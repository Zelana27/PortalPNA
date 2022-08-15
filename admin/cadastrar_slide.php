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
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div><!-- /.col -->
        </div>
		<div class="col-md-12">

                        <div class="card">
                           <form action="cadastro_slide.php" enctype="multipart/form-data" method="post" name="cadastrarfoto" >
                                                                    <table class="table table-responsive">
                                                                        <tr>
                                                                            <td> 
																			<label>Titulo:</label>
																			<input type="text" name="titulo" class="form-control">
																			<input type="hidden" name="estado" value="nao publicado" class="form-control">
																			</td>
                                                                        </tr>
																		 <tr>
                                                                            <td> 
																			<label>Resumo:</label>
																			<input type="text" name="resumo" class="form-control">
																			</td>
	
                                                                        </tr>
																		<tr>
																			<td>
																			<label  class="col-sm-12 col-form-label">POSICÃO:</label>
																			<div class="col-sm-12">
                                                        <select name="posicao_id" id="posicao" class="form-control" required">
                                                        <option></option>
                                                        <?php
                                                        include "controller/config.php";

                                                        #seleciona os dados da tabela produto
                                                        $query = "SELECT id,posicao FROM tb_posicao";
                                                        $sql = mysqli_query($conn,$query);
                                                        while($posicao = mysqli_fetch_assoc($sql)){

                                                            echo "<option value='".$posicao['id']."'>".$posicao['posicao']."</option>";
                                                        }
                                                        ?>
                                                        </select>
                                                        <br>
						</div>
																			</td>
																		
																		</tr>
                                                                        <tr >
                                                                            <td >
                                                                                    <input  class="form-control" name="image" accept="image/*; capture=camera" multiple type="file"  required>
                                                                            </td>

                                                                        </tr>


                                                                        <tr>
                                                                            <td><input type="submit" name="submit" value="Salvar" class="btn btn-danger">

                                                                        </tr>
                                                                    </table>

                                                                </form>
		
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
