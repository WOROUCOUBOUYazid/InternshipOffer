<?php
if(!isset($_SESSION['email'])) {
	Router::redirect("login");
	exit;
}
?>
<?php if(isset($message)){ echo $message; } ?>

<button style="float: right">
	<a href="deconnexion" style="text-decoration: none;">Déconnexion</a>
</button>