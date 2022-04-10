<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontawesome5-overrides.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Créer un compte</h4>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><x-input id="name" class="form-control form-control-user" type="text" name="name" :value="old('name')" placeholder="Nom de famille" required autofocus /></div>
                                    <div class="col-sm-6"><x-input id="firstname" class="form-control form-control-user" type="text" name="firstname" :value="old('firstname')" placeholder="Prenoms" required autofocus /></div>
                                </div>
                                <div class="mb-3"><x-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" placeholder="Adresse Mail" required /></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><x-input id="password" class="form-control form-control-user" type="password" name="password" placeholder="Mot de passe" required autocomplete="new-password" /></div>
                                    <div class="col-sm-6"><x-input id="password_confirmation" class="form-control form-control-user" type="password" name="password_confirmation" placeholder="Confirmation de mot de passe" required /></div>
                                </div>
                                <div class="mb-3"><x-input id="adresse" class="form-control form-control-user" type="text" name="adresse" :value="old('adresse')" placeholder="Adresse de residance" required /></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><x-input id="country" class="form-control form-control-user" type="text" name="country" placeholder="Pays" required /></div>
                                    <div class="col-sm-6"><x-input id="city" class="form-control form-control-user" type="text" name="city" placeholder="Ville" required /></div>
                                </div>
                                <x-button class="btn btn-primary d-block btn-user w-100">
                                    {{ __('Register') }} Account
                                </x-button>
                                <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Register with Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a></div>
                            <div class="text-center"><a class="small" href="{{ route('login') }}">Vous avez déjà un compte ?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bs-init.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
