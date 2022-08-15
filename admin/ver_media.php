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
			<div class="card-body">
			<table id="example1" class="table table-bordered table-striped display">
				<thead>
					<th></th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					 <?php
                include'controller/config.php';
                $sql ="SELECT * FROM tb_img ORDER BY id DESC
                                                                ";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){
                  $count++;
                  ?>
                  <tr>
                    <td width="30"><?php echo $rows['id']; ?></td>
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="60px" width="60px"/>';
                      ?>
                    <td style="color: steelblue; font-weight: bold">
                      <a class="btn btn-success"  href="cadastrar_publicacoes.php?id= <?php echo $rows['id']; ?> "><span class="">Publicar</span> </a>&nbsp;
                      <a class="btn btn-danger"  href="excluir_media.php?id= <?php echo $rows['id']; ?> "><span class="">Excluir</span> </a>&nbsp;

                    </td>
                  </tr>
                <?php } ?>
				</tbody>
			
			</table>
			</div>
			
		</div>
                    </div>
		
		
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include "rodape.php"

?>
