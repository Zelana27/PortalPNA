
  <?php
   include"cabecalho.php";
   include"menu_navegacao.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>VITRINA VIRTUAL</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Vitrina Virtual</h3>
            </div>
            <!-- /.card-header -->
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
			include_once "admin/controller/connect.php";
			$query=$conn->query("select * from pdf_file order by id desc");
				while($row=$query->fetch()){
					$id=$row['id'];
					$pdf=$row['pdf'];
			?>
			<tr>
			<td>
				<img src="img/pdflogo.png" width="30px" height="40px">
				</td>
				<td>
				<?php echo $id ;?>
				</td>
				<td>
				<?php echo $pdf ;?>
				</td>
				<td>
				<a class="btn btn-default" href="admin/display_pdf.php?id= <?php echo $id  ?> "><span class="fa fa-book"> </span> ver </a>					
				</td>
				<td>
				<button class="btn btn-default"><a href="admin/download.php?filename=<?php echo $pdf;?>&f=<?php echo $row['pdf'] ?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php
	include"rodape.php";
  ?>