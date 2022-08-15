<?php

	include"cabecalho.php";
	include"menu_navegacao.php"

  ?>
  
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Noticias Publicadas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
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
              <h3 class="card-title">Atualizar o estado dos Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form name="frm" method="post" action="upd_post.php" enctype="multipart/form-data">
              <table id="example1" class="table table-bordered table-striped display">
                <thead>
                <th>No</th>
                <th>Titulo</th>
                <th>Resumo</th>
                <th>Categoria</th>
                <th>Data</th>
                <th>Estado</th>
				 <th>Posicao</th>
                <th>DETALHES</th>
                </thead>
                <tbody>
                <?php
                include'controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.titulo,tb_post.resumo,tb_post.data,tb_post.categoria_id,
                        tb_post.estado,  tb_post.posicao_id,tb_categoria.categoria
                        FROM tb_post,tb_categoria WHERE tb_post.categoria_id = tb_categoria.id";
                        $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){
                  $count++;
                  ?>
                  <tr>
                    <td width="30"><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['titulo']; ?></td>
                    <td><?php echo $rows['resumo']; ?></td>
                    <td><?php echo $rows['categoria']; ?></td>
                    <td><?php echo $rows['data']; ?></td>
                    <td><?php echo $rows['estado']; ?></td>
					<td><?php echo $rows['posicao_id']; ?></td>
                    <td style="color: steelblue; font-weight: bold">

                      <button type="button" class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows['id']; ?>">Ler</button>
                      <button type="button" class="btn btn-md btn-warning" data-toggle="modal" data-target="#exampleModalestado" data-whatever="<?php echo $rows['id']; ?>" data-whateverestado="<?php echo $rows['estado']; ?>">Editar</button>
                      <a href="excluir_post.php?id=<?php echo $rows['id']; ?>"><button type="button" class="btn btn-md btn-danger">Excluir</button></a>

                    </td>
                  </tr>
                  <div class="modal fade" id="myModal<?php echo $rows['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows['estado']; ?></h4>
                        </div>
                        <div class="modal-body">
                          <p><?php echo $rows['id']; ?></p>
                          <p><?php echo $rows['estado']; ?></p>
                         </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <div class="modal   fade" id="exampleModalestado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content " >
            <div class="modal-header" style="background-color: red; color: white; font-weight: bold" >
               <h4 class="modal-title" id="exampleModalLabel">PUBLICAR POST</h4>
            </div>
            <div class="modal-body">
              <form method="post" action="model/upd_post.php" enctype="multipart/form-data">
                <div class="form-group">
                 <input class="form-control" name="estado1" id="recipient-estado">

                </div>
                <div class="row">
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input " name="estado" type="checkbox" id="customCheckbox1" value="Publicado">
                    <label for="customCheckbox1" class="custom-control-label">Publicar</label>
                  </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" name="estado" type="checkbox" id="customCheckbox2" value="Não publicado">
                  <label for="customCheckbox2" class="custom-control-label">Nao publicar</label>
                </div>
            </div>
                <input name="id" type="hidden" id="post_id">
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-danger">Alterar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script type="text/javascript">
  $('#exampleModalestado').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    var recipientestado = button.data('whateverestado')

    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Registo No: ' + recipient)
    modal.find('#post_id').val(recipient)
    modal.find('#recipient-estado').val(recipientestado)

  })
</script>
</body>
</html>
