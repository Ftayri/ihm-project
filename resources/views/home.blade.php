@extends('layout.template')
@section('navbar-class')
<nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative navbar-transparent"
id="navbar-transparent">
@endsection
@section('content')
<div class="d-flex align-items-start home-hero overflow-x-hidden position-relative" id="navbar-transparent-switcher"
style="background: url(https://d1b747rczec55w.cloudfront.net/assets/home-bg-4dc4b66b752c785811e5c6b1d3df1f90b953d05e0ff367ff34f8823f34a0036a.svg) bottom center; background-size: cover">
<div class="fixed-header w-100">
  <div class="ypj-fluid-container">
    <div class="row">
      <div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 col-12">
        <div class="d-flex align-items-md-center mb-1 flex-md-row flex-column"><a
            class="font-weight-medium text-decoration-none d-flex align-items-center"
            href="https://yoojo.fr/cesu">
            <div class="d-flex flex-wrap align-items-center"><span
                class="badge bg-orange-marketing text-white rounded-xl mr-2">Nouveau</span> <span
                class="text-dark">Payez en ticket CESU</span></div>
          </a>
          <div class="ml-2 mr-1 d-none d-md-block"
            style="height: 12px; background-color: var(--color-muted-light); width: 1px;"></div>
          <div class="d-flex align-items-center"><i class="icon icon-medal text-primary icon-lg mr-1"></i><strong
              class="text-dark">Élu meilleure plateforme</strong><button
              class="btn btn-circle rounded-circle-box p-1 ml-n1"
              data-content="Capital et l’institut indépendant Statista récompensent Yoojo et sa qualité de service pour la 3 ème année consécutive."
              data-placement="top" data-toggle="popover" type="button"><i
                class="icon-info-circle-solid text-muted icon-sm"></i></button></div>
        </div>
        <h1 class="mb-4 display-5">
          <div><span class="font-weight-bold">Trouvez le prestataire idéal pour tous les services du
              quotidien</span></div>
        </h1>
        <div class="row" id="homeSearchBar">
          <div class="col-xl-7 col-lg-8 col-md-9">
            <div style="max-width: 400px;" id="SearchBarApp-react-component-0f75214b-e229-4d39-8431-befee6dc4b15">
            </div>
            <script type="application/json" class="js-react-on-rails-component" data-component-name="SearchBarApp"
              data-dom-id="SearchBarApp-react-component-0f75214b-e229-4d39-8431-befee6dc4b15">{"size":"large","logged":false,"placeholders":["Monter un meuble","Tondre la pelouse","Babysitting","Garde chien","Peindre une chambre","Repasser des chemises","Ménage","Fixer une étagère","Déplacer un meuble","Nettoyer la voiture","Poser du papier peint","Ranger du bois","Tailler une haie","Déménager","Garde chat","Cours d'informatique"]}</script>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div>
<div class="py-2 border-bottom d-flex align-items-center justify-content-center">
  <div class="promises-items-wrapper d-none d-lg-block">
    <div class="promises-items">
      <div class="ypj-fluid-container d-flex justify-content-between"><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center my-2 mr-3 pl-1 font-size-2 font-size-lg-3"
          data-content="Tous les prestataires sont vérifiés, suivis et évalués pour chaque service rendu afin de vous garantir le meilleur niveau de satisfaction."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-user-check mr-2 font-size-5 text-primary"></i>Prestataires qualifiés</a><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center my-2 mr-3 pl-1 font-size-2 font-size-lg-3"
          data-content="Toutes les prestations sont couvertes par notre assurance AXA, qu’il s’agisse de dommages corporels ou matériels occasionnés chez vous, sans franchise."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-shield-check mr-2 font-size-5 text-primary"></i>Prestations assurées </a><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center my-2 mr-3 pl-1 font-size-2 font-size-lg-3"
          data-content="Tous les prix sont définis à l’avance, les jobbers s’engagent à les respecter. Toutes les rémunérations sont déclenchées en ligne après votre accord."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-wallet mr-2 font-size-5 text-primary"></i>Budget respecté</a><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center my-2 mr-3 pl-1 font-size-2 font-size-lg-3"
          data-content="Notre service client est à votre disposition 7j/7 pour vous assurer une expérience parfaite de la prise de commande jusqu&#39;à la fin de la prestation."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-phone mr-2 font-size-5 text-primary"></i>Service encadré</a></div>
    </div>
  </div>
  <div class="carousel slide d-block d-lg-none u-width-100 mx-2" data-interval="3000" data-ride="carousel"
    id="promisesCaroussel">
    <div class="carousel-inner carousel-promises">
      <div class="carousel-item active"><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center justify-content-center my-2 pl-1 font-size-3r word-break"
          data-content="Tous les prestataires sont vérifiés, suivis et évalués pour chaque service rendu afin de vous garantir le meilleur niveau de satisfaction."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-wallet mr-2 text-primary"></i>Prestataires qualifiés</a></div>
      <div class="carousel-item"><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center justify-content-center my-2 pl-1 font-size-3"
          data-content="Toutes les prestations sont couvertes par notre assurance AXA, qu’il s’agisse de dommages corporels ou matériels occasionnés chez vous, sans franchise."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-shield-check mr-2 text-primary"></i>Prestations assurées <div class="pl-2"><svg
              aria-hidden="true" aria-label="AXA réinventons notre métier" class="d-inline-block align-top"
              height="24" role="img" version="1.1" viewBox="0 0 60 60" width="24">
              <path d="M0 0h60v60H0z" fill="#103184"></path>
              <path d="M37.137 29.474L60 0h-3.376l-22.94 29.474h3.453z" fill="#FF1821"></path>
              <path
                d="M45.452 42.643c1.036 2.898 3.173 10.44 4.022 11.04h-5.61s-.02-1.113-.262-1.977c-.24-.862-2.27-7.384-2.27-7.384h-8.91l-1.4 1.985s1.683 5.262 1.787 5.52c.18.465.983 1.857.983 1.857h-5.375s-.14-.804-.192-1.14c-.042-.27-.51-1.75-.51-1.75s-1.217 1.334-1.55 1.953c-.334.617-.483.937-.483.937h-4.206s-.14-.804-.193-1.14c-.04-.27-.555-1.868-.555-1.868s-1.178 1.428-1.513 2.046c-.332.618-.476.962-.476.962h-4.158s1.175-1.118 1.586-1.598c.693-.813 3.274-4.184 3.274-4.184l-1.035-3.58h-8.84s-5.043 6.62-5.24 6.825c-.202.2-1.67 2.308-1.704 2.538H0v-1.667c.05-.05.086-.088.104-.1.08-.06 3.822-4.7 7.258-9.275 3.088-3.99 5.986-7.87 6.24-8.24.616-.894 1.503-2.823 1.503-2.823h4.57s.142 1.775.276 2.206c.12.38 2.905 9.51 2.97 9.61l1.54-1.968-2.632-8.097s-.617-1.522-.818-1.75h5.34s-.042.783.174 1.45c.217.668 1.362 4.794 1.362 4.794s3.642-4.56 3.855-4.888c.4-.55.45-1.357.45-1.357h4.45s-.815.594-2.243 2.398c-.48.607-5.178 6.573-5.178 6.573s.41 1.398.61 2.093c.054.2.09.334.09.35 0 .005.105-.122.284-.35 1.21-1.535 6.725-8.758 7.06-9.377.27-.5.666-1.068.898-1.686h4.34s.1 1.295.233 1.654l2.717 9.41zm-6.05-6.775c-.676 1.44-4.665 6.238-4.665 6.238h6.316s-1.225-3.726-1.438-4.566c-.17-.668-.123-1.53-.123-1.632 0-.076-.015-.2-.09-.04zm-23.157 0c-.677 1.44-4.666 6.238-4.666 6.238h6.315s-1.224-3.726-1.437-4.566c-.17-.668-.124-1.53-.124-1.632 0-.076-.015-.2-.09-.04zm9.176 13.606l1.95-2.273c-.18-.162-1.277-2.99-1.277-2.99l-1.882 2.077 1.21 3.187z"
                fill="#FFF"></path>
            </svg></div></a></div>
      <div class="carousel-item"><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center justify-content-center my-2 pl-1 font-size-3"
          data-content="Tous les prix sont définis à l’avance, les jobbers s’engagent à les respecter. Toutes les rémunérations sont déclenchées en ligne après votre accord."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-user-check mr-2 text-primary"></i>Budget respecté</a></div>
      <div class="carousel-item"><a
          class="ps-title text-dark remove-link-style cursor-pointer d-flex align-items-center justify-content-center my-2 pl-1 font-size-3"
          data-content="Notre service client est à votre disposition 7j/7 pour vous assurer une expérience parfaite de la prise de commande jusqu&#39;à la fin de la prestation."
          data-placement="bottom" data-toggle="popover" data-trigger="click" tabindex="0"><i
            class="icon-phone mr-2 text-primary"></i>Service encadré</a></div>
    </div><a class="u-button-icon carousel-control-prev" data-slide="prev" href="#promisesCaroussel"><i
        class="icon-angle-left"></i></a><a class="u-button-icon carousel-control-next" data-slide="next"
      href="#promisesCaroussel"><i class="icon-angle-right"></i></a>
  </div>
</div>
</div>
</div>
<div class="bg-white">
<div class="ypj-fluid-container pt-6 mb-n3">
<div class="row d-flex align-items-end">
  <div class="col-lg-6 col-md-8">
    <h2 class="mb-0">De quel service avez-vous besoin ?</h2>
    <p class="text-muted">Pour chaque situation, trouvez le prestataire dont les compétences répondent à vos
      attentes et à votre niveau d’exigence.</p>
  </div>
  <div class="col d-none d-lg-flex justify-content-end">
    <div class="text-right font-weight-normal mb-3"><span class="text-primary font-weight-medium">-50%</span>
      <span class="text-muted">crédit d&#39;impôt selon la catégorie</span>
    </div>
  </div>
</div>
@php
  $i = 0;
@endphp
@foreach ($serviceCategories as $serviceCategory )
@if($i%3 == 0)
<div class="row">
@endif
<div class="col-12 col-md-4">
  <div class="d-flex flex-column mb-grid-gutter">
    <div class="category-hover">
      <div class="frosted-glass-shadow">
        <div class="picture"><img alt="{{ $serviceCategory->name }}" class="radius-m img-contain" style="height: 180px"
            loading="lazy"
            src="{{ asset('img/services/'.$serviceCategory->image) }}" />
        </div>
      </div>
      <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
          href="https://yoojo.fr/bricolage">{{ $serviceCategory->name }}</a></div>
    </div>
  </div>
</div>
@php
  $i++;
@endphp
@if($i%3 == 0)
</div>
@endif
@endforeach
@if($i%3 != 0)
</div>
@endif
</div>
<div class="anchor"><a name="popular-services">&nbsp;</a></div>
<div class="mt-6 ypj-fluid-container">
<div class="row d-flex align-items-end">
  <div class="col-lg-5 col-md-8">
    <h2 class="mb-3">Découvrez nos services du moment</h2>
  </div>
</div>
</div>
<div class="ypj-fluid-container">
<div class="row mb-1" data-component="carousel">
  @foreach($serviceSubCategories as $serviceSubCategory)
  <div class="col position-relative">
    <div class="category-hover">
      <div class="frosted-glass-shadow">
        <div class="picture"><img alt="Taille de haie" class="radius-m img-contain"
            style="height: 140px; object-position: right;" loading="lazy"
            src="{{ asset('img/subservices/'.$serviceSubCategory->image) }}" />
        </div>
      </div>
      <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
          href="https://yoojo.fr/jardinage/taille-de-haie">{{ $serviceSubCategory->name }}</a></div>
    </div>
  </div>
  @endforeach
</div>
</div>
<div class="ypj-fluid-container mt-n2"><a class="font-size-3 font-weight-medium d-block mt-3 askService"
  href="{{ route('services.index') }}">Voir tous les services<i class="icon-angle-right pl-1 font-size-1"></i></a></div>
<div class="ypj-fluid-container">
<div class="mt-6">
  <h2>Le service à domicile en toute sérénité</h2>
  <div class="row mt-4">
    <div class="col-md-3 col-sm-6"><i class="icon-user-check font-size-5 mb-2 text-primary"></i>
      <h3 class="h5">Prestataires qualifiés</h3>
      <p class="text-muted mb-3 mb-md-0">Tous les prestataires sont vérifiés, suivis et évalués pour chaque
        service rendu afin de vous garantir le meilleur niveau de satisfaction.</p>
    </div>
    <div class="col-md-3 col-sm-6"><i class="icon-shield-check font-size-5 mb-2 text-primary"></i>
      <h3 class="h5">Prestations assurées</h3>
      <p class="text-muted mb-3 mb-md-0">Toutes les prestations sont couvertes par notre assurance AXA, qu’il
        s’agisse de dommages corporels ou matériels occasionnés chez vous, sans franchise.</p>
    </div>
    <div class="col-md-3 col-sm-6"><i class="icon-wallet font-size-5 mb-2 text-primary"></i>
      <h3 class="h5">Budget respecté</h3>
      <p class="text-muted mb-3 mb-md-0">Tous les prix sont définis à l’avance, les prestataires s’engagent à les
        respecter. Toutes les rémunérations sont déclenchées en ligne après votre accord.</p>
    </div>
    <div class="col-md-3 col-sm-6"><i class="icon-phone font-size-5 mb-2 text-primary"></i>
      <h3 class="h5">Service encadré</h3>
      <p class="text-muted mb-3 mb-md-0">Notre service client est à votre disposition 7j/7 pour vous assurer une
        expérience parfaite de la prise de commande jusqu&#39;à la fin de la prestation.</p>
    </div>
  </div>
</div>
<div class="mt-6">
  <div class="row py-5 px-2 radius-l border d-flex align-items-center ypj-in-numbers-bg mx-auto">
    <div class="col-lg-7 col-12 mb-md-3">
      <div class="mx-lg-5">
        <h2>Spécialiste du service</h2>
        <p class="text-muted mb-0">Tentez l’expérience et faites nous confiance comme plus de 600 000 clients qui
          aujourd’hui profitent de leur temps libre.</p>
      </div>
    </div>
    <div class="col-lg-8 col-md-12 mx-lg-5">
      <div class="row">
        <div class="col-12 col-xl-4 my-3">
          <div class="d-flex align-items-start">
            <div class="font-size-5 ypj-in-numbers-icon bg-primary"><i class="icon-work"></i></div>
            <div class="d-flex flex-column"><span class="font-size-5 mb-0 font-weight-medium">1 505
                000</span><span class="text-muted font-size-4">Services réalisés</span></div>
          </div>
        </div>
        <div class="col-12 col-xl-4 my-3">
          <div class="d-flex align-items-start">
            <div class="font-size-5 ypj-in-numbers-icon bg-secondary"><i class="icon-user"></i></div>
            <div class="d-flex flex-column"><span class="font-size-5 mb-0 font-weight-medium">40 000</span><span
                class="text-muted font-size-4">Prestataires actifs</span></div>
          </div>
        </div>
        <div class="col-12 col-xl-4 mt-3">
          <div class="d-flex align-items-start">
            <div class="font-size-5 ypj-in-numbers-icon bg-warning"><i class="icon-star"></i></div>
            <div class="d-flex flex-column"><span class="font-size-5 mb-0 font-weight-medium">4,9<span
                  class="font-size-3 font-weight-bold">/5</span></span><span class="text-muted font-size-4">Note
                moyenne des prestataires</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="pt-3">
  <div class="mt-5">
    <h2 class="mt-0 mb-1">Comment ça marche ?</h2>
    <div class="row mt-4">
      <div class="col-sm-4 text-center col-hiw p-3 mb-3 mb-sm-0"><img
          src="{{ asset('img/demander_service.svg') }}"
          width="200" height="200" />
        <p class="h5 font-weight-medium mt-2">Demandez un service</p>
        <p class="font-size-3 font-weight-normal text-muted hiw-text-size">Remplissez le formulaire et obtenez une
          estimation du prix et de la durée</p>
      </div>
      <div class="col-sm-4 text-center col-hiw p-3 mb-3 mb-sm-0"><img
          src="{{ asset('img/reserver_prestataire.svg') }}"
          width="200" height="200" />
        <p class="h5 font-weight-medium mt-2">Réservez votre prestataire</p>
        <p class="font-size-3 font-weight-normal text-muted hiw-text-size">Des prestataires compétents et proches
          de chez vous vous proposent leurs services</p>
      </div>
      <div class="col-sm-4 text-center col-hiw p-3 mb-3 mb-sm-0"><img
          src="{{ asset('img/fini.svg') }}"
          width="200" height="200" />
        <p class="h5 font-weight-medium mt-2">Souriez, c&#39;est fait !</p>
        <p class="font-size-3 font-weight-normal text-muted hiw-text-size">Votre prestataire vous rend service au
          prix et à la date convenus</p>
      </div>
    </div>
  </div>
</div>
<div class="mt-6">
  <div class="radius-l mb-3 position-relative overflow-hidden"
    style="background-color: var(--color-turquoise600)">
    <div class="d-flex align-items-center justify-content-between w-100 flex-column flex-md-row">
      <div class="row w-100">
        <div class="col-md-6 col-12">
          <div class="px-md-5 px-3 py-md-4 py-3">
            <p class="h1 text-white mb-2 mt-2 md-md-0">Gagnez 5% du montant dépensé par vos amis, à vie.</p>
            <p class="font-size-4 mb-0 text-white font-weight-bold mb-3">Soyez malin, devenez parrain !</p>
            <div class="d-flex align-items-center flex-wrap"><a class="btn btn-light btn-lg mr-2 radius-circle"
                onClick="ga(&#39;send&#39;,{hitType:&#39;event&#39;,eventCategory:&#39;referral&#39;,eventAction:&#39;referral_home_banner_press&#39;,eventLabel:&#39;&#39;,eventValue:0});"
                href="https://yoojo.fr/parrainage">Découvrir</a></div>
          </div>
        </div>
        <div class="col-md-6 col-12 position-relative align-self-end"><img class="w-100"
            src="{{ asset('img/referral-banner-artwork.svg') }}" />
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection