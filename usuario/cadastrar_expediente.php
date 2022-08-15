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
                                <h3 class="card-title">UTILITARIO DE SERCIVOS</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">


			<form enctype="multipart/form-data" action="cadastro_expediente.php" name="form" method="post">
				Selecionar Ficheiro
					<input type="file" name="file" id="file" /></td>
					<input type="submit" name="submit" id="submit" value="cadastrar" />
			</form>
		<br />
		<br />
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Ficheiro</th>
					<th align="center">Baixar</th>	
				</tr>
			</thead>
			<?php
			include_once "controller/connect.php";
			$query=$conn->query("select * from tb_upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class=""><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
		
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
