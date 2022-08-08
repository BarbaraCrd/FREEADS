@extends("layouts.app")
@section("content")
<div class="container">
	<h1>Se connecter / S'enregistrer avec un compte social</h1>
	<p>
		<!-- Lien de redirection vers Google -->
		<a href="{{ route('socialite.redirect', 'google') }}" title="Connexion/Inscription avec Google" class="btn btn-link"  >Continuer avec Google</a>
	
		<!-- Lien de redirection vers Facebook -->
		<a href="{{ route('socialite.redirect', 'facebook') }}" title="Connexion/Inscription avec Facebook" class="btn btn-link"  >Continuer avec Facebook</a>

		<!-- Lien de redirection vers Github -->
		<a href="{{ route('socialite.redirect', 'github') }}" title="Connexion/Inscription avec Github" class="btn btn-link"  >Continuer avec Github</a>
	</p>
</div>
@endsection