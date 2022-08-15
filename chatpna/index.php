<?php
session_start ();
function loginForm() {
    echo '
	<div class="form-group">
		<div id="loginform">
			<form action="index.php" method="post">
			<h1>Chat Online da PNA</h1><hr/>
				<label for="name">Inserir o seu nome para entrar</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Inserir o seu nome"/>
				<input type="submit" class="btn btn-default" name="enter" id="enter" value="Entrar" />
			</form>
		</div>
	</div>
   ';
}
 
if (isset ( $_POST ['enter'] )) {
    if ($_POST ['name'] != "") {
        $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
        $cb = fopen ( "log.html", 'a' );
        fwrite ( $cb, "<div class='msgln'><i> " . $_SESSION ['name'] . " Acabou de entrar.</i><br></div>" );
        fclose ( $cb );
    } else {
        echo '<span class="error">Favor de Inserir o nome</span>';
    }
}
 
if (isset ( $_GET ['logout'] )) {
    $cb = fopen ( "log.html", 'a' );
    fwrite ( $cb, "<div class='msgln'><i> " . $_SESSION ['name'] . " Abandonou a sessão.</i><br></div>" );
    fclose ( $cb );
    session_destroy ();
    header ( "Location: index.php" );
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CHAT </title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<?php
	if (! isset ( $_SESSION ['name'] )) {
	loginForm ();
	} else {
?>
<div id="wrapper">
	<div id="menu">
	<h1>Chat Onlie Policia Nacional!</h1><hr/>
	<style>
	.dot {
  height: 20px;
  width: 20px;
  background-color: #40ff00;
  border-radius: 50%;
  display: inline-block;
}
	</style>
		<p class="welcome"><b><a><?php echo $_SESSION['name']; ?> </a>esta Online
			<span class="dot"></span>
			</b></p>
		<p class="logout"><a id="exit" href="../index.php" class="btn btn-default">Sair do Chat</a></p>
	<div style="clear: both"></div>
	</div>
	<div id="chatbox">
	<?php
		if (file_exists ( "log.html" ) && filesize ( "log.html" ) > 0) {
		$handle = fopen ( "log.html", "r" );
		$contents = fread ( $handle, filesize ( "log.html" ) );
		fclose ( $handle );

		echo $contents;
		}
	?>
	</div>
<form name="message" action="">
	<input name="usermsg" class="form-control" type="text" id="usermsg" placeholder="Escrever a mensagem" />
	<input name="submitmsg" class="btn btn-default" type="submit" id="submitmsg" value="Enviar" />
</form>
</div>
<script type="text/javascript">
$(document).ready(function(){
});
$(document).ready(function(){
    $("#exit").click(function(){
        var exit = confirm("Tens a certeza que deseja sair");
        if(exit==true){window.location = 'index.php?logout=true';}     
    });
});
$("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});             
        $("#usermsg").attr("value", "");
        loadLog;
    return false;
});
function loadLog(){    
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){       
            $("#chatbox").html(html);       
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal');
            }              
        },
    });
}
setInterval (loadLog, 2500);
</script>
<?php
}
?>
</body>
</html>