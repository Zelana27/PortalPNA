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
				<h3 class="card-title">EDITAR DE CONTEUDOS DO PORTAL</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Post</th>
				   <th>Estado</th>
				    <th>Categoria</th>
					<th>Posicao</th>
                  <th>Detalhes</th>
                 
                </tr>
                </thead
                <tbody>
                <?php
			include_once "controller/connect.php";
			$query=$conn->query("select * from tb_post");
			while($row=$query->fetch()){
				$titulo=$row['titulo'];
				$estado=$row['estado'];
				$categoria_id=$row['categoria_id'];
				$posicao_id=$row['posicao_id'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $titulo ;?>
				</td>
				<td>
					&nbsp;<?php echo $estado ;?>
									
				</td>
				<td>
					&nbsp;<?php echo $categoria_id ;?>
								
				</td>
				<td>
					&nbsp;<?php echo $posicao_id ;?>
								
				</td>
				<td>
					<button class="btn btn-default">Editar</a></button>
				</td>
			</tr>
			<?php }?>
                </tfoot>
              </table>
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
