
  <?php
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
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="row">
					<div class="col-md-8"><div class="w-100 h-75">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="1" ></li>
			<li data-target="#carouselExampleSlidesOnly" data-slide-to="2" ></li>
		
		</ol>
  
  
  <div class="carousel-inner">
    <div class="carousel-item active">
     <table>
              
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT *	FROM tb_slide WHERE posicao_id='1' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" width="820px" height="100%" alt="First slide"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
	  <div class="carousel-caption d-none d-md-block" style="background: black; width:80%; opacity:0.8;">
          <h3 style="text-align: left">
		  
		  <?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='1' AND estado='publicado'";
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
                    ?>
		  </h3>
          <p style="text-align: left">
		  <?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='1' AND estado='publicado' ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["resumo"]. "";
                   

                             }
                    } else {
                        echo "resumo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
		  
		  
		  </p>
        </div>
    </div>
    <div class="carousel-item">
      <table>
                
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT *	FROM tb_slide WHERE posicao_id='2' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" width="820px" height="100%" alt="Second slide"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
	  <div class="carousel-caption d-none d-md-block" style="background: black; width:80%; opacity:0.8;">
          <h3 style="text-align: left">
<?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='2' AND estado='publicado' ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["titulo"]. "";
                   

                             }
                    } else {
                        echo "titulo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
		  </h3>
          <p style="text-align: left">
		  <?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide  WHERE posicao_id='2' AND estado='publicado'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["resumo"]. "";
                   

                             }
                    } else {
                        echo "resumo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
		  </p>
        </div>
    </div>
    <div class="carousel-item">
<table>
             
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT *	FROM tb_slide WHERE posicao_id='3' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" width="820px" height="100%" alt="Third slide"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
	  <div class="carousel-caption d-none d-md-block" style="background: black; width:80%; opacity:0.8;">
          <h3 style="text-align: left">
		  <?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='3' AND estado='publicado' ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["titulo"]. "";
                   

                             }
                    } else {
                        echo "titulo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
		  </h3>
          <p style="text-align: left">
		  <?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide  WHERE posicao_id='3' AND estado='publicado'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["resumo"]. "";
                   

                             }
                    } else {
                        echo "resumo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
		  
		  </p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

	</div>
 </div>
 </div>
<!--mini slide-->
<div class="col-md-4">
<div class="media">
  <table>
          
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT *	FROM tb_slide WHERE posicao_id='1' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="mr-3" width="200px" height="120px" alt="Generic placeholder image"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
  <div class="media-body">
    <h6 class="mt-0">
	<?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='1' AND estado='publicado' ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["titulo"]. "";
                   

                             }
                    } else {
                        echo "titulo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>          
	</h5>
  </div>
</div>
<hr>
<div class="media">
  <table>
                 <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT *	FROM tb_slide WHERE posicao_id='2' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="mr-3" width="200px" height="120px" alt="Generic placeholder image"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
  <div class="media-body">
    <h6 class="mt-0">
	<?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='2' AND estado='publicado' ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["titulo"]. "";
                   

                             }
                    } else {
                        echo "titulo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
	
	</h6>
  
  </div>
</div>
<hr>
<div class="media">
  <table>
             
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT *	FROM tb_slide WHERE posicao_id='3' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="mr-3" width="200px" height="120px" alt="Generic placeholder image"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
  <div class="media-body">
	    <h6 class="mt-0">
	

	<?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_slide WHERE posicao_id='3' AND estado='publicado' ";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["titulo"]. "";
                   

                             }
                    } else {
                        echo "titulo nao encontrado";
                    }

                    mysqli_close($conn);
                    ?>
	
	</h6>
  </div>
</div>
					
</div>
				
				</div>
          </div>
		  <div class="card">	
            <div class="card-header"
              <h3 class="card-title">EM DESTAQUE</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
			 <div class="col-md-3">
			 <!--NOTICIA 1-->
				<table>
                
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='1'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
				<br>
				<div><b>
				
				 <?php	
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='1' AND estado='publicado'";
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
                    ?>
				
				</b></div>
				<div>
				<table>
               
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='1' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
				   <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
				 </a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
						 
				 </div>
				
				
			 </div>
			 
			 <div class="col-md-3">	
			 <!--NOTICIA 2-->
			<table>
                
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='2'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
			</br>
				<div><b>
				
				 <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='2' AND estado='publicado'";
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
                    ?>
				</b></div>
				<div><table>
                <thead>
                <th></th>
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='2' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
				  <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					</a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>
				

                </tfoot>
              </table></div>
				
			 </div>
			 <div class="col-md-3">
			 <!--NOTICIA 3-->
			<table>
               
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='3'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>
                </tfoot>
              </table>
			</br>
				<div><b>
				 <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='3' AND estado='publicado'";
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
                    ?>
				
				</b></div>
				<div><table>
              
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='3' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                           
				   <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					 </a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table></div>
				
			 </div>
			 
			 <div class="col-md-3">
			 <table>
               
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='4'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
				</br>
				<div><b> <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='4' AND estado='publicado'";
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
                    ?></b></div>
				<div><table>
              
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='4' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					 </a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table></div>
				
			 </div>
			 
			 
			 </div>
			 
			 
            </div>
            <!-- /.card-body -->
          </div>
		  
		  <!--INICIO UTILITARIO  SERVICOS-->
		  
		  <div class="card">
            <div class="card-header">
              <h3 class="card-title">EM DESTAQUE </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <div class="row">
			 <div class="col-md-3">
			 <!--NOTICIA 5-->
				<table>
                
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='5'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
		</br>
				<div><b> <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='5' AND estado='publicado'";
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
                    ?>
				
				</b></div>
				<div><table>
            
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='5' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                 
				  <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					</a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table></div>
				
				
			 </div>
			 
			 <div class="col-md-3">	
			 <!--NOTICIA 6-->
			<table>
               
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='6'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
			</br>
				<div><b> <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='6' AND estado='publicado'";
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
                    ?>
				
				</b></div>
				<div><table>
          
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='6' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  
				   <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					  <br>
                    <span class="">ler mais</span> </a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table></div>
				
			 </div>
			 <div class="col-md-3">
			 <!--NOTICIA 3-->
			<table>
                <thead>
                <th></th>
               
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='7'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
			</br>
				<div><b> <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='7' AND estado='publicado'";
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
                    ?>
				
				</b></div>
				<div><table>
               
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='7' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  
				   <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					  <br>
                    <span class="">ler mais</span> </a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table></div>
				
			 </div>
			 
			 <div class="col-md-3">
			<table>
               
                <thead>
                <th></th>
                
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT tb_post.id,tb_post.estado,tb_post.img_id,tb_img.id,tb_img.image FROM tb_post,tb_img
				WHERE tb_post.img_id=tb_img.id AND tb_post.estado='publicado' AND tb_post.posicao_id='8'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  <tr>
                    
                    <td>
                      <?php echo '<img id="img-default" src="data:image/jpeg;base64,'.base64_encode($rows['image']).'" class="" data-action="zoom" height="220px" width="100%"/>';
                      ?>
                    
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table>
				</br>
				<div><b> <?php
                    include "admin/controller/config.php";

                    $sql = "SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='8' AND estado='publicado'";
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
                    ?>
				
				</b></div>
				<div><table>
                 <thead>
                <th></th>
                </thead>
                <tbody>
                <?php
                include'admin/controller/config.php';
                $sql ="SELECT * FROM tb_post WHERE categoria_id ='1' AND posicao_id='8' AND estado='publicado'";
                $resultado = mysqli_query($conn,$sql);
                $count =0;
                while( $rows = mysqli_fetch_assoc($resultado)){	
                  $count++;
                  ?>
                  
				   <tr>
				   <td>
				    <a class=""  href="pagina.php?id= <?php echo $rows['id']; ?> ">
                      <?php echo "" .$rows['resumo']."";
                      ?>
					  <br>
                    </a>
					</td>&nbsp;
                     
                  </tr>
                <?php } ?>
                </tbody>

                </tfoot>
              </table></div>
				
			 </div>
			 
			 
			 </div>
			 
			 
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