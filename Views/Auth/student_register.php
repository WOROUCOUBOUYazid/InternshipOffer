<section class="page">
		<div class="form-box">
			<h2>Inscription</h2>
			<form action="register" method="post" onsubmit="return confirmPassword()">
				<div class="input-box">
					<label for="firstname">Prénom</label>
					<input type="text" id="firstname" name="firstname" required>
				</div>
				<div class="input-box">
					<label for="lastname">Nom</label>
					<input type="text" id="lastname" name="lastname" required>
				</div>
				<div class="input-row">
					<div class="input-box">
						<label for="phone">Téléphone</label>
						<input type="number" id="phone" name="phone" required>
					</div>
					<div class="input-box">
						<label for="email">Email</label>
						<input type="text" id="email" name="email" onblur="validateEmail()" oninput="deleteMessage()" required>
						<span id="emailError" style="font-size: 0.8em; color: red; font-style: italic;"></span>
					</div>
				</div>
				<div class="input-box">
					<label for="password">Mot de passe</label>
					<input type="password" id="password" name="password" onblur="validatePassword()" required>
					<span id="passwordError" style="font-size: 0.8em; color: red; font-style: italic;"></span>
				</div>
				<div class="input-box">
					<label for="confirmPassword">Confirmer le mot de passe</label>
					<input type="password" id="confirmPassword" required>
					<span id="confirmPasswordError" style="font-size: 0.8em; color: red; font-style: italic;"></span>
				</div>
				<div class="button-box">
					<button>S'inscrire</button>
				</div>
				<div class="login">
					Vous avez déjà un compte? <a href="log_in.html">Connectez-vous</a>
				</div>
			</form>
		</div>
</section>
	<!-- <script src="../styles(css & js)/form_validation.js"></script> -->
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

		function validatePassword() {
			const passwordInput = document.getElementById('password');
			const password = passwordInput.value;
			const errorSpan = document.getElementById('passwordError');

			var minLengthRegex = /^(.{8,})$/.test(password);
			var hasUpperCaseRegex = /^(?=.*[A-Z])/.test(password);
			var hasLowerCaseRegex = /^(?=.*[a-z])/.test(password);
			var hasNumberRegex = /^(?=.*[0-9])/.test(password);
			var hasSpecialCharRegex = /^(?=.*[!@#$%^&*_-])/.test(password);

			if(!hasUpperCaseRegex) {
				errorSpan.innerText = "Le mot de passe doit comporter une lettre majuscule.";
			} else if(!hasLowerCaseRegex) {
				errorSpan.innerText = "Le mot de passe doit comporter une lettre minuscule.";
			} else if(!hasNumberRegex) {
				errorSpan.innerText = "Le mot de passe doit comporter un chiffre.";
			} else if(!hasSpecialCharRegex) {
				errorSpan.innerText = "Le mot de passe doit comporter un caractere special.";
			} else if(!minLengthRegex) {
				errorSpan.innerText = "Le mot de passe doit avoir une longueur minimale de 8.";
			} else {
				errorSpan.textContent = '';
			}
		}

		function confirmPassword() {
			// var password = document.getElementById("password").value;
			// var confirmPassword = document.getElementById("confirmPassword").value;
			// var errorSpan = document.getElementById("confirmPasswordError")

			// if (password !== confirmPassword) {
			// 	errorSpan.textContent = "Les mots de passe ne correspondent pas."
			// 	return false;
			// }
			return false;
		}

		<?php
		if($message){
			echo $message;
		}?>
	</script>