@extends('base')

@section('content')

<div class="container-contact100">
<div class="wrap-contact100">
  <form class="contact100-form validate-form" method="POST" action="{{route('checker')}}">
      @csrf
				<label class="label-input100" for="first-name">Votre nom *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
					<input id="first-name" class="input100" type="text" value="{{$nom_etu}}" name="first_name" placeholder="nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" value="{{$prenom}}" name="last_name" placeholder="Prenom">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="phone">Enter votre telephone</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" value="{{$tele}}" name="phone" placeholder="Eg. +212 xxxxxxxxx">
					<span class="focus-input100"></span>
				</div>
                  
				<label class="label-input100" for="message">demander un certificat *</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<select class="form-control form-control-lg" name="selection">
						<option selected>Choisir le type certificat</option>
						<option value="Attestation de scolarité">Attestation de scolarité</option>
						<option value="Attestation de reussite">Attestation de reussite</option>
						<option value="Relevé de note">Relevé de note</option>
						<option value="Bacalaureat">Bacalaureat</option>
						<option value="Diplome">Diplome</option>
					  </select>
				</div>
        
        <label class="label-input100" for="message">Passer une certification (Optionnel)</label>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<select class="form-control form-control-lg" name="selection2">
						<option selected> Choisir une certificat </option>
						<option value="Laravel">Laravel certificat</option>
            <option value="BIG DATA">Certificat BIG DATA</option>
						<option value="CLOUD">CLOUD</option>
					  </select>
				</div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
              Enregistrer
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
@endsection