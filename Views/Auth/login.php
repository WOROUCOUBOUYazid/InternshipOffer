<section class="page">
	<div class="form-box">
		<h2>Connexion</h2>
		<span style="font-size: 0.85em; color: red; font-style: italic;"><?php if(isset($err_connexion_message)){ echo $err_connexion_message; } ?></span>
		<form action="connexion" method="post">
			<div class="input-box">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" onblur="validateEmail()" oninput="deleteMessage()" required>
				<span id="emailError" style="font-size: 0.8em; color: red; font-style: italic;"></span>
			</div>
			<div class="input-box">
				<label for="password">Mot de passe</label>
				<input type="password" id="password" name="password" required>
			</div>
			<div class="forget">
				<a href="#">Mot de passe oublié?</a>
			</div>
			<div class="button-box">
				<button>Se connecter</button>
			</div>
			<div class="sign-up">
				Vous n'avez pas de compte? <a href="#">Inscrivez-vous</a>
			</div>
		</form>
	</div>
</section>
<script>
	function validateEmail() {
		const emailInput = document.getElementById('email');
		const email = emailInput.value.trim();
		const errorSpan = document.getElementById('emailError');

		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		if (!emailRegex.test(email)) {
			errorSpan.innerText = 'Veuillez entrer une adresse email valide.';
		} else {
				errorSpan.textContent = ''; // Effacer le message d'erreur s'il est valide
		}
	}

	function deleteMessage() {
			const errorSpan = document.getElementById('emailError');

			errorSpan.textContent = '';
	}

</script>