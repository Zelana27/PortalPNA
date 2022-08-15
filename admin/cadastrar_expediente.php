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
		
		<section>
			<div class="col-12">
				<div class="card">
				 <div class="card-body">
					<form class="" action="cadastro_expediente.php" method="post" enctype="multipart/form-data">
						<div class="input-group">
						<input type="file" name="pdf" class="form-control" id="pdf" aria-describedby="upload" aria-label="Upload" required>
						<input type="submit" value="cadastrar" name="submit" class="btn btn-default" id="upload">
						</div>
					</form>
					</div>
				</div>
			</div>
		</section>
		
		<div class="col-12">
            <div class="card">
          
	   <div class="card-body">
		<table id="example1" class="table table-bordered table-striped">	
		<thead>
				<tr>
				<th>id</th>
				<th>Tipo</th>
				<th>Ficheiro</th>
				<th >ver</th>
				<th >Baixar</th>	
				</tr>
			</thead>
			<?php
			include_once "controller/connect.php";
			$query=$conn->query("select * from pdf_file order by id desc");
				while($row=$query->fetch()){
					$id=$row['id'];
					$pdf=$row['pdf'];
			?>
			<tr>
			<td>
				<img src="../img/pdflogo.png" width="30px" height="40px">
				</td>
				<td>
				<?php echo $id ;?>
				</td>
				<td>
				<?php echo $pdf ;?>
				</td>
				<td>
				<a class="btn btn-default" href="display_pdf.php?id= <?php echo $id  ?> "><span class="fa fa-book"> </span> ver </a>					
				</td>
				<td>
				<button class="btn btn-default"><a href="download.php?filename=<?php echo $pdf;?>&f=<?php echo $row['pdf'] ?>">Download</a></button>
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
