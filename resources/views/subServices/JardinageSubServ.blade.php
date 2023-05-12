@extends('layout.template')
@section('navbar-class')
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
@endsection
@section('content')
<div class="ypj-fluid-container">
    <ol class="breadcrumb mb-3 pl-0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
      <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a
          class="link-gray" itemprop="item" href="/"><span itemprop="name">Accueil</span></a>
        <meta content="1" itemprop="position" />
      </li>
      <li class="breadcrumb-item active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        <a class="link-gray" itemprop="item" href="/jardinage"><span itemprop="name">Jardinage</span></a>
        <meta content="2" itemprop="position" />
      </li>
    </ol>
  </div>
  <div class="ypj-fluid-container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="text-muted mb-0">Trouvez le prestataire idéal, partout en France, en quelques minutes.</p>
        <h1 class="display-5 font-weight-medium">Réservez vos services de jardinage ponctuels ou récurrents</h1>
        <div class="mb-3">
          <div class="row">
            <div class="col-lg-10"><button class="btn btn-primary service-cta btn-lg">Demander un service de
                jardinage</button>
              <script type="application/json"
                id="js-react-on-rails-context">{"railsEnv":"production","inMailer":false,"i18nLocale":"fr","i18nDefaultLocale":"fr","rorVersion":"12.2.0","rorPro":false,"href":"https://yoojo.fr/jardinage?fbclid=IwAR3KM1snTBj12l6yNDHMlPGjkKWUXYESYsL_LYhUnLt3HyiFIHpZ7NRnLHY","location":"/jardinage?fbclid=IwAR3KM1snTBj12l6yNDHMlPGjkKWUXYESYsL_LYhUnLt3HyiFIHpZ7NRnLHY","scheme":"https","host":"yoojo.fr","port":null,"pathname":"/jardinage","search":"fbclid=IwAR3KM1snTBj12l6yNDHMlPGjkKWUXYESYsL_LYhUnLt3HyiFIHpZ7NRnLHY","httpAcceptLanguage":"en, *","serverSide":false}</script>
              <div id="CategoriesNavigationModalApp-react-component-2959e7a7-0355-41fe-a656-c470346f52c2"></div>
              <script type="application/json" class="js-react-on-rails-component"
                data-component-name="CategoriesNavigationModalApp"
                data-dom-id="CategoriesNavigationModalApp-react-component-2959e7a7-0355-41fe-a656-c470346f52c2">{"category_id":21,"selector":".service-cta"}</script>

            </div>
          </div>
        </div>

      </div>
      <div class="col-xl-4 offset-xl-2 offset-lg-1 col-lg-5"><img
          alt="Réservez vos services de jardinage ponctuels ou récurrents"
          class="img-contain radius-xl category-header-image-responsive"
          src="https://d1b747rczec55w.cloudfront.net/assets/categories/21v-66bb6a3167924c025b4981611e6ef02db6cb6440419e52390d1de3942f5356b5.svg" />
      </div>
    </div>
  </div>
  <div class="border-top my-6">
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
    <h2 class="mb-4">Nos services de jardinage à réserver en ligne</h2>
  </div>
  <div class="ypj-fluid-container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Tondre la pelouse" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2001-e82d35c11486feb971d7677ff295a37e01f0b36be78175eb0dbb865594e3d29c.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/tondre-la-pelouse">Tondre la pelouse</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 29 € - 68 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Taille de haie" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2002-aa57d00d216d9a24c8ed084ddbd2c39dbf91879fff3e94809e0349df72f94cd5.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/taille-de-haie">Taille de haie</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 42 € - 152 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Débroussaillage" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2008-0b6095ca5e05ab69853db195407c48e2412785eab745fbca39ba4e11cf45b986.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/debroussaillage">Débroussaillage</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 38 € - 89 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Désherbage" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2017-867eaf4a005d0349c65abe32d3cbedfe6a37429e3dd76f3c5330fe34de32b47c.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/desherbage">Désherbage</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 35 € - 79 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Ranger du bois" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2010-3fa881dafc37376faefddbb97997c8969539749f08efd2d5725157b21345b8b5.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/ranger-du-bois">Ranger du bois</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 19 € - 79 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Entretien des espaces verts" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2011-39703077bf008b50b14d84a08d9830ba2d4b4114cfd8d277883cc5befd2d85e0.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/entretien-des-espaces-verts">Entretien des espaces verts</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 29 € - 109 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Entretien du gazon" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2012-88a00509206580d564b709996d6edc8f30e829de36a5c79894a20e578e0b0f38.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/entretien-du-gazon">Entretien du gazon</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 21 € - 98 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Nettoyage de terrasse" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2013-33445323efa3ae06f3e73248b71ba141bc40fed6cdd8789a095b86e763da0fc9.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/nettoyage-de-terrasse">Nettoyage de terrasse</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 23 € - 77 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Ramassage de feuilles" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2015-92b58356c02dc3be3b5ee0c8709475d10398fcfa54a1cd90c56f396e6a3433cb.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/ramassage-de-feuilles">Ramassage de feuilles</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 22 € - 46 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Enlèvement de déchets verts" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2018-9a1721785280e24570232e818caf1bb3842273eb454aafbc09797b34cc120686.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/enlevement-de-dechets-verts">Enlèvement de déchets verts</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 35 € - 79 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Déneiger" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2014-b45b25d44f49d319d2cfc22405553532cb535dd15dc4320ed9a6df3872ccbdf7.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/deneiger">Déneiger</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 22 € - 59 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Saler autour de ma maison" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2016-2d663bf2072fdaa01e220688488185123f6f6c180c272f8af213fae93957bd41.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/saler-autour-de-ma-maison">Saler autour de ma maison</a></div>
          <div class="badge badge-light badge-pill mt-1"
            style="background: var(--color-background-gray); padding: 6px 8px; font-size: var(--font-size-body14);">Prix
            moyen 26 € - 55 €</div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 position-relative mb-3">
        <div class="category-hover">
          <div class="frosted-glass-shadow">
            <div class="picture"><img alt="Autre job de jardinage" class="radius-m img-contain"
                style="height: 140px; object-position: right;" loading="lazy"
                src="https://d1b747rczec55w.cloudfront.net/assets/categories/2099-30d85ea5d508414964c6b0ebd4ee81ef1cbe6c0f19a55e5cc1e769d46d876e4a.svg" />
            </div>
          </div>
          <div class="mt-2"><a class="text-decoration-none text-dark stretched-link font-weight-bold font-size-4"
              href="/jardinage/autre-job-de-jardinage">Autre job de jardinage</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="ypj-fluid-container">
    <div class="my-6">
      <h2 class="mb-5">L’entretien du jardin à domicile, plus simple, moins cher</h2>
      <div class="row row-large-gutter">
        <div class="col-md-6 mb-4"><i class="icon-bolt icon-lg text-primary"></i>
          <h3 class="mt-2">Une tarification simple et immédiate</h3>
          <p>Fini les demandes de devis, vous obtenez tout de suite le bon prix avec nos formulaires intelligents.</p>
        </div>
        <div class="col-md-6 mb-4"><i class="icon-shield-half icon-lg text-primary"></i>
          <h3 class="mt-2">Vos services de jardinage assurés et encadrés</h3>
          <p class="mb-2">Réservez votre jardinier en ligne en toute confiance, vous êtes accompagné et assuré du début
            à la fin.</p>
        </div>
      </div>
      <div class="row row-large-gutter align-items-center my-5">
        <div class="col-md-6 mb-4"><img class="img-contain" alt="Tous les profils de jardiniers sont vérifiés"
            src="https://d1b747rczec55w.cloudfront.net/assets/verified_profiles-f468d0f77e807eb6c110940ea7604839009b3777b40e4c4b3f4cb7c5c87ce8ff.svg" />
        </div>
        <div class="col-md-6 mb-4">
          <h3 class="mt-2">Tous les profils de jardiniers sont vérifiés</h3>
          <p>Sur Yoojo, il n’y a pas de pseudo. Quand un prestataire de ménage rejoint notre plateforme, il s’inscrit
            sous sa véritable identité.</p>
        </div>
      </div>
      <div class="row row-large-gutter align-items-center my-5">
        <div class="col-md-6 mb-4">
          <h3 class="mt-2">Des jardiniers aux compétences spécifiques</h3>
          <p>Nous vous proposons des jardiniers de confiance qui possèdent toutes les compétences dont vous avez besoin.
          </p>
          <div class="badge badge-light badge-xl badge-pill mr-2 px-3 py-2 font-size-2 mb-2">Outillage</div>
          <div class="badge badge-light badge-xl badge-pill mr-2 px-3 py-2 font-size-2 mb-2">Diplômes</div>
          <div class="badge badge-light badge-xl badge-pill mr-2 px-3 py-2 font-size-2 mb-2">Expérience</div>
          <div class="badge badge-light badge-xl badge-pill mr-2 px-3 py-2 font-size-2 mb-2">Engagements</div>
        </div>
        <div class="col-md-6 mb-4 text-center"><img class="img-contain" alt="Des jardiniers aux compétences spécifiques"
            src="https://d1b747rczec55w.cloudfront.net/assets/skills-8b7035910bdd530b0440b5b718ba89a4b0a33d8d312b72f80bc57af82d6ed744.svg" />
        </div>
      </div>
    </div>

    <div class="my-6">
      <h2>Choisissez des passionnés pour entretenir votre jardin</h2>
      <div class="row">
        <div class="col-md-3 col-lg-3 pt-2">
          <p>
          <div class="d-flex align-items-center" data-preview-jobber="379679">
            <div class="mr-3"><a class="position-relative d-block"
                href="/jobber/oleksandr-paris-482965?skill=gardening">
                <div class="img-user img-80"><img alt="Profil de Oleksandr"
                    src="https://d1b747rczec55w.cloudfront.net/uploads/moderated_file/avatar/attachment/181476/medium_a3352e23.jpg" />
                </div>
                <div class="top-jobber-frame"></div>
              </a></div>
            <div class="my-2"><a class="text-dark text-decoration-none"
                href="/jobber/oleksandr-paris-482965?skill=gardening">
                <p class="fs-h4 mb-1 text-left">Oleksandr</p>
              </a>
              <p class="text-muted mb-0 mt-n1">Jardinier</p><span class="fs-body16"><i
                  class="icon icon-star-solid user-star-very-good"></i><strong class="pl-1">4,89</strong><span
                  class="text-muted pl-1">(676 avis)</span></span>
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
        <div class="col-md-3 col-lg-3 pt-2">
          <p>
          <div class="d-flex align-items-center" data-preview-jobber="711848">
            <div class="mr-3"><a class="position-relative d-block"
                href="/jobber/abdoulaye-rueil-malmaison-815134?skill=gardening">
                <div class="img-user img-80"><img alt="Profil de Abdoulaye "
                    src="https://d1b747rczec55w.cloudfront.net/uploads/moderated_file/avatar/attachment/532531/medium_698d17eb.jpg" />
                </div>
                <div class="top-jobber-frame"></div>
              </a></div>
            <div class="my-2"><a class="text-dark text-decoration-none"
                href="/jobber/abdoulaye-rueil-malmaison-815134?skill=gardening">
                <p class="fs-h4 mb-1 text-left">Abdoulaye </p>
              </a>
              <p class="text-muted mb-0 mt-n1">Jardinier</p><span class="fs-body16"><i
                  class="icon icon-star-solid user-star-very-good"></i><strong class="pl-1">4,91</strong><span
                  class="text-muted pl-1">(922 avis)</span></span>
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
        <div class="col-md-3 col-lg-3 pt-2">
          <p>
          <div class="d-flex align-items-center" data-preview-jobber="871152">
            <div class="mr-3"><a class="position-relative d-block" href="/jobber/lotfi-paris-974438?skill=gardening">
                <div class="img-user img-80"><img alt="Profil de Lotfi"
                    src="https://d1b747rczec55w.cloudfront.net/uploads/moderated_file/avatar/attachment/595854/medium_38571ffc.jpg" />
                </div>
                <div class="position-absolute" style="top:-2px; right:-2px; z-index: 100"><svg aria-hidden="true"
                    aria-label="Identité vérifiée" height="24" role="img" style="vertical-align: text-top" version="1.1"
                    viewBox="0 0 24 24" width="24">
                    <title>Identité vérifiée</title>
                    <circle cx="12" cy="11" fill="white" r="9"></circle>
                    <path
                      d="M1.33587 8.06583C2.20239 12.5955 4.9591 23 12 23C19.0409 23 21.7976 12.5954 22.6641 8.06582C22.9043 6.81026 22.3105 5.56954 21.2034 4.93043C18.659 3.46162 14.0839 1 12 1C9.9161 1 5.341 3.46162 2.7966 4.93043C1.68949 5.56953 1.09568 6.81026 1.33587 8.06583ZM16.0213 7.12132L18.1426 9.24264L11.0716 16.3137L6.82894 12.0711L8.95026 9.94975L11.0716 12.0711L16.0213 7.12132Z"
                      fill="var(--color-success)"></path>
                  </svg></div>
              </a></div>
            <div class="my-2"><a class="text-dark text-decoration-none"
                href="/jobber/lotfi-paris-974438?skill=gardening">
                <p class="fs-h4 mb-1 text-left">Lotfi<span class="ml-2 badge badge-pro">PRO</span></p>
              </a>
              <p class="text-muted mb-0 mt-n1">Jardinier</p><span class="fs-body16"><i
                  class="icon icon-star-solid user-star-very-good"></i><strong class="pl-1">4,96</strong><span
                  class="text-muted pl-1">(134 avis)</span></span>
            </div>
          </div>
          </p>
        </div>
        <div class="col-md-3 col-lg-3 pt-2">
          <p>
          <div class="d-flex align-items-center" data-preview-jobber="370958">
            <div class="mr-3"><a class="position-relative d-block" href="/jobber/bruno-canejan-474244?skill=gardening">
                <div class="img-user img-80"><img alt="Profil de Bruno"
                    src="https://d1b747rczec55w.cloudfront.net/uploads/moderated_file/avatar/attachment/398744/medium_542c5421.jpg" />
                </div>
                <div class="position-absolute" style="top:-2px; right:-2px; z-index: 100"><svg aria-hidden="true"
                    aria-label="Identité vérifiée" height="24" role="img" style="vertical-align: text-top" version="1.1"
                    viewBox="0 0 24 24" width="24">
                    <title>Identité vérifiée</title>
                    <circle cx="12" cy="11" fill="white" r="9"></circle>
                    <path
                      d="M1.33587 8.06583C2.20239 12.5955 4.9591 23 12 23C19.0409 23 21.7976 12.5954 22.6641 8.06582C22.9043 6.81026 22.3105 5.56954 21.2034 4.93043C18.659 3.46162 14.0839 1 12 1C9.9161 1 5.341 3.46162 2.7966 4.93043C1.68949 5.56953 1.09568 6.81026 1.33587 8.06583ZM16.0213 7.12132L18.1426 9.24264L11.0716 16.3137L6.82894 12.0711L8.95026 9.94975L11.0716 12.0711L16.0213 7.12132Z"
                      fill="var(--color-success)"></path>
                  </svg></div>
              </a></div>
            <div class="my-2"><a class="text-dark text-decoration-none"
                href="/jobber/bruno-canejan-474244?skill=gardening">
                <p class="fs-h4 mb-1 text-left">Bruno</p>
              </a>
              <p class="text-muted mb-0 mt-n1">Jardinier</p><span class="fs-body16"><i
                  class="icon icon-star-solid user-star-very-good"></i><strong class="pl-1">4,74</strong><span
                  class="text-muted pl-1">(312 avis)</span></span>
            </div>
          </div>
          </p>
        </div>
      </div><a class="font-weight-medium" href="/jardinage/jardinier">Voir plus de jardiniers<i
          class="icon-angle-right pl-1 font-size-1"></i></a>
    </div>


  </div>


@endsection 