<!DOCTYPE html>
<html lang="en">
<head>
	<title>Espace Etudiant</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--===============================================================================================-->
</head>

<body>
	<div class="container-contact100">
		@if ($test_case == '1' )
		<div class="alert alert-danger">
			<ul>
					<li><strong>Mshi T9awwwwwiiiiiiiiid</strong></li>
			</ul>
		</div>
		@endif
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="{{ route('Tester')}}">
				@csrf
				<span class="contact100-form-title">
					Authentification
				</span>

				<label class="label-input100" for="Apogee">Entrer Vos information *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
					<input id="phone" class="input100" type="text" name="Apogee" placeholder="Votre Apogée">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Votre CIN">
					<input class="input100" type="text" name="CIN" placeholder="Entrer votre CIN">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Entrer votre email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@etu.uae.ac.ma">
					<input id="email" class="input100" type="text" name="Email" placeholder="Exp : example@etu.uae.ac.ma">
					<span class="focus-input100"></span>
				</div>

				<!--<label class="label-input100" for="first-name">Votre nom *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" name="first-name" placeholder="nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="last-name" placeholder="Prenom">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="phone">Enter votre telephone</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +212 xxxxxxxxx">
					<span class="focus-input100"></span>
				</div>
                  
				<label class="label-input100" for="message">Choisir Le Type de certificat *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<select class="form-control form-control-lg">
						<option selected>Choisir le type certificat</option>
						<option value="1">Attestation de scolarité</option>
						<option value="2">Attestation de reussite</option>
						<option value="3">Relevé de note</option>
						<option value="4">Bacalaureat</option>
						<option value="5">Diplome</option>
					  </select>
				</div>-->

				
			

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Envoiyer
					</button>
				</div>

			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/Ensa.jpeg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2">
							ENSA de Avenue de la Palestine Mhanech I، Tetouan
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Contacter nous
						</span>

						<span class="txt3">
							+212 5396-88027
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							LAISSEZ NOUS UN MESSAGE
						</span>

						<span class="txt3">
							ensatetouan@uae.ac.ma
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
