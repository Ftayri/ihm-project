@extends('layout.template')
@section('navbar-class')
<nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
@endsection
@section('content')
<div class="ypj-fluid-container">
  <ol class="breadcrumb mb-3 pl-0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item active" itemprop="itemListElement" itemscope=""
          itemtype="http://schema.org/ListItem">
          <a class="link-gray" itemprop="item" href="{{ route('home') }}"><span
                  itemprop="name">Acceuil</span></a>
          <meta content="2" itemprop="position" />
      </li>
      <li class="breadcrumb-item active" itemprop="itemListElement" itemscope=""
          itemtype="http://schema.org/ListItem">
          <a class="link-gray" itemprop="item" href=""><span
                  itemprop="name">{{ $serviceCategory->name }}</span></a>
          <meta content="2" itemprop="position" />
      </li>
  </ol>
</div>
<div class="ypj-fluid-container">
    <ol class="breadcrumb mb-3 pl-0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item active" itemprop="itemListElement" itemscope=""
          itemtype="http://schema.org/ListItem">
          <a class="link-gray" itemprop="item" href="{{ route('home') }}"><span
                  itemprop="name">Acceuil</span></a>
          <meta content="2" itemprop="position" />
      </li>
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
          class="link-gray" itemprop="item" href="{{ route('services.show',['serviceCategory'=>$serviceCategory->slug]) }}"><span itemprop="name">{{ $serviceCategory->name }}</span></a>
        <meta content="2" itemprop="position" />
      </li>
      <li class="breadcrumb-item active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        <a class="link-gray" itemprop="item" href="{{ route('services.subcategory.show',['serviceCategory'=>$serviceCategory->slug,'serviceSubCategory'=>$serviceSubCategory->slug]) }}"><span
            itemprop="name">{{ $serviceSubCategory->name }}</span></a>
        <meta content="3" itemprop="position" />
      </li>
    </ol>
  </div>
  <div class="hero">
    <div class="hero-content">
      <div class="hero-content-left">
        <h1 class="font-weight-medium">Service de {{ Str::lower($serviceSubCategory->name) }}</h1>
       <a class="btn btn-primary btn-lg btn-break"
          href="/poster-un-job?category=3018">Réservez votre {{ Str::lower($serviceSubCategory->name) }}</a>
      </div>
      <div class="hero-content-right"><img alt="Service de {{$serviceSubCategory->name}}"
          class="img-contain radius-xl subcategory-header-image-responsive d-none d-lg-block"
          src="{{ asset('img/subservices/'.$serviceSubCategory->image) }}" />
      </div>
    </div>
  </div>
  <div class="border-top">
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
  <div class="ypj-fluid-container">
    <div class="my-6">
      <h2>Découvrez les préstataires les mieux notés près de chez vous</h2>
      <div class="row">
        @foreach($serviceProviders as $serviceProvider)
        <div class="col-md-3 col-lg-3 pt-2">
          <p>
          <div class="d-flex align-items-center" data-preview-jobber="779427">
            <div class="mr-3"><a class="position-relative d-block" href="/jobber/veyrard-sannois-882713?skill=removal">
                <div class="img-user img-80"><img alt="Profil de Veyrard"
                    src="{{ asset('profile_pictures/'.$serviceProvider->profile_picture) }}" />
                </div>
                <div class="top-jobber-frame"></div>
              </a></div>
            <div class="my-2"><a class="text-dark text-decoration-none"
                href="/jobber/veyrard-sannois-882713?skill=removal">
                <p class="fs-h4 mb-1 text-left">{{ $serviceProvider->user->first_name }} {{ $serviceProvider->user->last_name }}</p>
              </a>
              <span class="fs-body16"><i
                  class="icon icon-star-solid user-star-very-good"></i><strong class="pl-1">4,99</strong><span
                  class="text-muted pl-1">(627 avis)</span></span>
              <div class="mt-1">
                <div class="badge rounded-pill badge-purple font-size-2 px-2 py-1 cursor-pointer text-white"
                  data-content="Le badge « Top prestataire » met en avant les prestataires les plus expérimentés et les mieux notés sur Yoojo."
                  data-placement="bottom" data-toggle="popover"><i class="icon-love-solid"></i> Top prestataire <i
                    class="icon-info-circle"></i></div>
              </div>
            </div>
          </div>
          </p>
        </div>
        @endforeach
      </div><a class="font-weight-medium" href="/demenagement/demenageur">Voir plus de déménageurs<i
          class="icon-angle-right pl-1 font-size-1"></i></a>
    </div>


  </div>

@endsection 