@extends('base')

@section('content')

<div class="container-contact100">
    @if ($test_case == '1' )
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>verifiez vos donné sont incorrect</strong> 
      </div>
    @endif
    @if ($var_test=='1')
      <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong> Vous avez déja retirer ce document</strong> 
      </div>
    @elseif($var_test=='2')
      <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>Votre demande a été enregistrée</strong> </div>
    @endif
    
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="POST" action="{{route('Tester')}}">
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


@endsection