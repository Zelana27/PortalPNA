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
				<h3 class="card-title">PUBLICACAO DE CONTEUDOS DO PORTAL</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form enctype="multipart/form-data" action="cadastro_publicacoes.php" name="form" method="post">
				<div class="card-body">
					
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">TITULO:</label>
						<div class="col-sm-10">
							<input type="text" name="titulo" class="form-control is-valid" id="inputSuccess" placeholder="Descricao da noticia / Titulo" required>
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">RESUMO:</label>
						<div class="col-sm-10">
							<input type="text"  name="resumo" class="form-control is-valid" id="inputSuccess" placeholder="Descricao da noticia / Resumo" required	>
							<input type="hidden"  name="estado" class="form-control is-valid"  value="nao publicado"  required	>
						
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-sm-2 col-form-label">CONTEUDO:</label>
						<div class="col-sm-10">
						
						<textarea id="conteudo" name="conteudo" rows="4" cols="50" class="textarea"> </textarea>
						</div>
						</div>
						<div class="form-group row">
						<label  class="col-sm-2 col-form-label">CATEGORIA:</label>
						 <div class="col-sm-6">
                                                        <select name="categoria_id" id="country" class="form-control" required">
                                                        <option></option>
                                                        <?php
                                                        include "controller/config.php";

                                                        #seleciona os dados da tabela produto
                                                        $query = "SELECT id,categoria FROM tb_categoria";
                                                        $sql = mysqli_query($conn,$query);
                                                        while($categoria = mysqli_fetch_assoc($sql)){

                                                            echo "<option value='".$categoria['id']."'>".$categoria['categoria']."</option>";
                                                        }
                                                        ?>
                                                        </select>
                                                        <br>
						</div>
						<label  class="col-sm-2 col-form-label">POSICÃO:</label>
						 <div class="col-sm-2">
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
					</div>
					
					<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">  FOTO DESTAQUE</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php
				$id=$_GET['id'];
				
                include"controller/config.php";
                $ver = "SELECT * FROM tb_img WHERE id='$id' " ;
                $result= mysqli_query($conn,$ver);

                echo "<table>";
                echo "<tr>";
                while($row=mysqli_fetch_array($result))
                {

                  echo "<td class=''>";
                  echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" class="" data-action="zoom" height="170" width="180"/>';

                  echo "</td>";
                  echo "<td class=''>";
                  echo '<input name="img_id" type="hidden" value="'.$id.'">';

                  echo "</td>";



                }
                echo "</tr>";
                echo"</table>";
                ?>
              </div>

              <!-- /.card-body -->
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
