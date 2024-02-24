<section class="page">
		<div class="form-box">
			<h2>Inscription</h2>
			<form action="">
				<h3 style="margin-top: 20px; font-style: italic;">Entreprise</h3>
					<div class="input-box">
						<label for="companyName">Nom de l'entreprise</label>
						<input type="text" id="companyName" required>
					</div>
					<div class="input-box">
						<Label for="field">Domaine</Label>
						<select id="field">
							<option value="Agro">Agroalimentaire</option>
							<option value="Chimie">Chimie/Parachimie</option>
							<option value="Com">Edition/Communication/Multimédia</option>
							<option value="Studies">Etudes/Conseils</option>
							<option value="Building">BTP/Matériaux de construction</option>
							<option value="Computer">Informatique/Télécommunication</option>
							<option value="Transport">Transport/Logistique</option>
							<option value="Banque">Banque/Assurance</option>
							<option value="Trade">Commerce/Négoce/Distribution</option>
							<option value="Electronic">Électronique/Électricité</option>
							<option value="Medicine">Industrie pharmaceutique</option>
							<option value="Automobile">Machines et équipements/Automobile</option>
							<option value="Industry">Industrie-Plastique/Métal/Bois/Textile/chaussure</option>
							<option value="" selected></option>
						</select>
					</div>
					<div class="input-row">
						<div class="input-box">
							<label for="companyPhone">Téléphone</label>
							<input type="number" id="companyPhone" required>
						</div>
						<div class="input-box">
							<label for="companyEmail">Email</label>
							<input type="text" id="companyEmail" onblur="validateCompanyEmail()" oninput="deleteCompanyMessage()" required>
							<span id="companyEmailError" style="font-size: 0.8em; color: red; font-style: italic;"></span>
						</div>
					</div>
					<div class="input-box">
						<label for="workplace">adresse</label>
						<input type="text" id="workplace" required>
					</div>
				<h3 style="font-style: italic;">Utilisateur</h3>
					<div class="input-box">
						<label for="firstname">Prénom</label>
						<input type="text" id="firstname" required>
					</div>
					<div class="input-box">
						<label for="lastname">Nom de famille</label>
						<input type="text" id="lastname" required>
					</div>
					<div class="input-row">
						<div class="input-box">
							<label for="userPhone">Téléphone</label>
							<input type="number" id="userPhone" required>
						</div>
						<div class="input-box">
							<label for="userEmail">Email</label>
							<input type="email" id="userEmail" onblur="validateUserEmail()" oninput="deleteUserMessage()" required>
							<span id="userEmailError" style="font-size: 0.8em; color: red; font-style: italic;"></span>
						</div>
					</div>
					<div class="input-box">
						<label for="password">Mot de passe</label>
						<input type="password" id="password" onblur="validatePassword()" required>
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
	<script>
		function validateCompanyEmail() {
			const emailInput = document.getElementById('companyEmail');
			const email = emailInput.value.trim();
			const errorSpan = document.getElementById('companyEmailError');

			const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

			if (!emailRegex.test(email)) {
				errorSpan.innerText = 'Veuillez entrer une adresse email valide.';
			} else {
				errorSpan.textContent = ''; // Effacer le message d'erreur s'il est valide
			}
		}

		function validateUserEmail() {
			const emailInput = document.getElementById('userEmail');
			const email = emailInput.value.trim();
			const errorSpan = document.getElementById('userEmailError');

			const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

			if (!emailRegex.test(email)) {
				errorSpan.innerText = 'Veuillez entrer une adresse email valide.';
			} else {
				errorSpan.textContent = ''; // Effacer le message d'erreur s'il est valide
			}
		}

		function deleteCompanyMessage() {
			const errorSpan = document.getElementById('companyEmailError');

			errorSpan.textContent = '';
		}

		function deleteUserMessage() {
			const errorSpan = document.getElementById('userEmailError');

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
			const passwordInput = document.getElementById('password');
			const password = passwordInput.value;
			const confirmPasswordInput = document.getElementById('confirmPassword');
			const confirmPassword = confirmPasswordInput.value;
			const errorSpan = document.getElementById('confirmPasswordError');

			if(true) {
				errorSpan.innerText = "Les mots de passe ne correspondent pas.";
			} else {
				errorSpan.textContent = '';
			}
		}
	</script>