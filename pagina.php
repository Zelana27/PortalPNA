
  <?php
	$id=$_GET['id'];
   include"cabecalho.php";
   include"menu_navegacao.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
           
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
			<div class="row">
			<div class="col-md-10">
			<div class="card">	
            <div class="card-header"
              <h1 class="card-title"><?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE estado='publicado' AND id='$id'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["titulo"]. "";
                   

                             }
                    } else {
                        echo "Titulo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?></h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
			 
			 
			
			 <div class="col-md-12">
			 <!--NOTICIA 3-->
			<table>
                </tr>
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.id='$id'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="100%0px" width="100%"/>';
					  
                      ?>
					  </td>
					  
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
		<div><small> <?php
                    include "admin/controller/config.php";
                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='3' AND estado='publicado'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
							echo"RESUMO : ";
                            echo "" . $row["resumo"]. "";
                                                }
                    } else {
                        echo  "Resumo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
				
				</small></div>
				
				
			 </div>
			 
			 
			 </div>
			 
			 
            </div>
            <!-- /.card-body -->
          </div></div>
			<div class="col-md-2">ola</div>
		  
		  </section>
		  <section class="content">
			<div class="row">
			<div class="col-md-10">
			<div class="card">	
            <div class="card-header"
              <h3 class="card-title">NOTICIAS RELACIONADAS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
			 
			 
			
			 <div class="col-md-12">
			 <!--CONTEUDO DA NOTICIA 3-->
			
			
				
				<div> <?php
                    include "admin/controller/config.php";
                    $sql = "SELECT * FROM tb_post WHERE id='$id' AND estado='publicado'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["conteudo"]. "";
                                                }
                    } else {
                        echo "Conteudo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
				
				</div>
				
			 </div>
			 
			 
			 </div>
			 
			 
            </div>
            <!-- /.card-body -->
          </div></div>
			<div class="col-md-2">ola</div>
		  
		  </section>	
    <!-- /.content -->
  </div>
  <?php
	include"rodape.php";
  ?>