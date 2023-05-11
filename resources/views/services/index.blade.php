@extends('layout.template')
@section('navbar-class')
<nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
@endsection
@section('content')
<div class="bg-white">
    <div class="ypj-fluid-container pb-3">
          <ol class="breadcrumb pt-3 pl-0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumb-item" itemprop="itemListElement" itemscope=""
                      itemtype="http://schema.org/ListItem"><a class="link-gray" itemprop="item" href="/"><span
                                  itemprop="name">Accueil</span></a>
                      <meta content="1" itemprop="position" />
                </li>
                <li class="breadcrumb-item active" itemprop="itemListElement" itemscope=""
                      itemtype="http://schema.org/ListItem"><a class="link-gray" itemprop="item"
                            href="/tous-les-services"><span itemprop="name">Tous les services</span></a>
                      <meta content="2" itemprop="position" />
                </li>
          </ol>
          <div class="row">
                <div class="col-md-12">
                      <h1 class="mb-4">Tous les services</h1>
                </div>
          </div>
          <h2 class="h3 mb-3"><a class="text-dark" href="/bricolage">Bricolage</a></h2>
          <div class="row mt-0">
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Ameublement" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/205-b519ede8e4c82daca8cfc3a2cfb3851043b1b2fdfe102969da079d2acdbf3639.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Ameublement</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/montage-de-meubles-ikea">Montage de
                                  meubles IKEA</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/assemblage-de-meubles">Assemblage de
                                  meubles</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/montage-de-canape">Montage de
                                  canapé</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/montage-de-lit">Montage de lit</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/montage-de-meubles-de-cuisine">Montage de meubles de
                                  cuisine</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/montage-de-meubles-de-salle-de-bain">Montage de meubles de
                                  salle de bain</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/demontage-de-meubles">Démontage de
                                  meubles</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparation-de-meubles">Réparation de
                                  meubles</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peindre-un-meuble">Peindre un
                                  meuble</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/autre-service-d-ameublement">Autre
                                  service d&#39;ameublement</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Pose et fixation" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/206-7d1e9a225e2a2423a3df47397614d4ae81bd536cb11d47d3541adbd41d2ea7d4.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Pose et fixation</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-tringles-a-rideaux">Pose de
                                  tringles à rideaux</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-lampes-et-luminaires">Pose
                                  de lampes et luminaires</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/fixation-d-etageres">Fixation
                                  d&#39;étagères</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/accrocher-une-tv-au-mur">Accrocher
                                  une TV au mur</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/accrocher-un-tableau">Accrocher un
                                  tableau</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-miroir">Pose de miroir</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/fixer-des-elements-au-mur">Fixer des
                                  éléments au mur</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-barre-de-douche">Pose de
                                  barre de douche</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-paroi-de-douche">Pose de
                                  paroi de douche</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installer-un-pare-baignoire">Installer un pare-baignoire</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-store-interieur">Installation de store
                                  intérieur</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-hotte-aspirante">Pose de
                                  hotte aspirante</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-credence">Pose de
                                  crédence</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-cloture-exterieure">Pose de
                                  clôture extérieure</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/remplacer-une-porte">Remplacer une
                                  porte</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-une-poignee">Changer une
                                  poignée</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/autre-service-de-pose-et-fixation">Autre service de pose et
                                  fixation</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Rénovation des murs" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/211-d46d96042c72a65fbd807a834cafa664d00454d8bb0febfdf07295158220739e.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Rénovation des murs</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peinture-interieure">Peinture
                                  intérieure</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peinture-exterieure">Peinture
                                  extérieure</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peindre-des-volets">Peindre des
                                  volets</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peindre-une-porte">Peindre une
                                  porte</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-papier-peint">Pose de papier
                                  peint</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/decoller-du-papier-peint">Décoller
                                  du papier peint</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-credence">Pose de
                                  crédence</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/boucher-un-trou">Boucher un trou</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/enduire-un-mur">Enduire un mur</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/autre-service-de-renovation-d-un-mur">Autre service de
                                  rénovation d&#39;un mur</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Rénovation des sols" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/210-19b6796cb6ec0199fe649e5f3fb45dec2384eaef9ca6d08bfefc9db2ebf0adfb.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Rénovation des sols</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-parquet">Pose de parquet</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-dalles-pvc">Pose de dalles
                                  PVC</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-dalles-de-moquette">Pose de
                                  dalles de moquette</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-lino">Pose de lino</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-plinthes">Pose de
                                  plinthes</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/retirer-un-revetement-existant">Retirer un revêtement
                                  existant</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peindre-un-sol">Peindre un sol</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/peindre-un-escalier">Peindre un
                                  escalier</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/autre-service-de-renovation-du-sol">Autre service de
                                  rénovation du sol</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Electricité" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/202-909c0edf6738da0f44fe57ff5a5b383e2b813a99294b1d161ffebf6f8faa89cf.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Electricité</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-de-lampes-et-luminaires">Pose
                                  de lampes et luminaires</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-une-ampoule">Changer une
                                  ampoule</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-prises-electriques">Installation de prises
                                  électriques</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-d-interrupteur">Installation
                                  d&#39;interrupteur</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-d-un-radiateur-electrique">Installation d&#39;un
                                  radiateur électrique</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/domotique">Domotique</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/pose-d-objets-connectes-nest">Pose
                                  d&#39;objets connectés Nest</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/autre-service-d-electricite">Autre
                                  service d&#39;électricité</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Plomberie" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/204-9d6c482b0d7bf751655a89131d83db6d0ab0b8a41bc92eb575d4660d8ea4aae5.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Plomberie</div>
                      </div>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-fuites-d-eau">Réparation de fuites
                                  d&#39;eau</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/deboucher-un-evier">Déboucher un
                                  évier</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/deboucher-des-wc">Déboucher des
                                  WC</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/deboucher-des-canalisations">Déboucher des canalisations</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-une-chasse-d-eau">Changer
                                  une chasse d&#39;eau</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparer-une-chasse-d-eau">Réparer
                                  une chasse d&#39;eau</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-un-robinet">Changer un
                                  robinet</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/faire-les-joints-de-la-salle-de-bain">Faire les joints de la
                                  salle de bain</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-une-bonde">Changer une
                                  bonde</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-un-siphon">Changer un
                                  siphon</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/detartrage-de-toilettes">Détartrage
                                  de toilettes</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-l-abattant-des-wc">Changer
                                  l&#39;abattant des WC</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/autre-service-de-plomberie">Autre
                                  service de plomberie</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Électroménager" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/212-05c8879095c0439337fd00ed715fbfffd2d8902f054bcc1af68c8ac018db70ea.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Électroménager</div>
                      </div>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-machine-a-laver">Installation de machine à
                                  laver</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-lave-vaisselle">Installation de
                                  lave-vaisselle</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-seche-linge">Installation de sèche-linge</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/installation-de-frigo">Installation
                                  de frigo</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-congelateur">Installation de congélateur</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/installation-de-four">Installation
                                  de four</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-de-plaque-de-cuisson">Installation de plaque de
                                  cuisson</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/installation-d-electromenager">Installation
                                  d&#39;électroménager</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-lave-vaisselle">Réparation de
                                  lave-vaisselle</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-machine-a-laver">Réparation de machine à
                                  laver</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-seche-linge">Réparation de sèche-linge</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparation-de-frigo">Réparation de
                                  frigo</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-congelateur">Réparation de congélateur</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparation-de-four">Réparation de
                                  four</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-plaque-de-cuisson">Réparation de plaque de
                                  cuisson</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-four-micro-ondes">Réparation de four
                                  micro-ondes</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-d-electromenager">Réparation
                                  d&#39;électroménager</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/autre-service-d-electromenager">Autre service
                                  d&#39;électroménager</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Réparation" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/207-7a7b3aab7207df6aa63b131b7a627216e8a4762cbfc1a8cfa085a34c3e9c20db.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Réparation</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/petites-reparations">Petites
                                  réparations</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparation-de-meubles">Réparation de
                                  meubles</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-fuites-d-eau">Réparation de fuites
                                  d&#39;eau</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-lave-vaisselle">Réparation de
                                  lave-vaisselle</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-machine-a-laver">Réparation de machine à
                                  laver</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparation-de-frigo">Réparation de
                                  frigo</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparation-de-four">Réparation de
                                  four</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-seche-linge">Réparation de sèche-linge</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-plaque-de-cuisson">Réparation de plaque de
                                  cuisson</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-four-micro-ondes">Réparation de four
                                  micro-ondes</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-de-congelateur">Réparation de congélateur</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/bricolage/reparation-d-electromenager">Réparation
                                  d&#39;électroménager</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/boucher-un-trou">Boucher un trou</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparer-un-velo">Réparer un velo</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/reparer-une-chasse-d-eau">Réparer
                                  une chasse d&#39;eau</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Serrurerie" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/208-1b784f9ac34edc1f1e3b026daa85bf26eb7993ef84e4862bf7e1f4d5a4e52140.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Serrurerie</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/installer-une-serrure">Installer une
                                  serrure</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/changer-une-serrure">Changer une
                                  serrure</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/depannage-serrurerie">Dépannage
                                  serrurerie</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/autre-service-de-serrurerie">Autre
                                  service de serrurerie</a></p>
                </div>
                <div class="col-md-3">
                      <div class="mb-3"><img alt="Isolation" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/209-64f5bc1c3bd4f78773b622ed353035e901bcef8374841c1ac6fa698336021d9c.svg" />
                      </div>
                      <div class="d-flex align-items-center mb-3">
                            <div class="font-size-4 font-weight-medium text-dark">Isolation</div>
                      </div>
                      <p><a class="font-size-3 text-muted" href="/bricolage/isolation-de-porte">Isolation de
                                  porte</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/isolation-de-fenetre">Isolation de
                                  fenêtre</a></p>
                      <p><a class="font-size-3 text-muted" href="/bricolage/autre-service-d-isolation">Autre
                                  service d&#39;isolation</a></p>
                </div>
          </div>
          <div class="row">
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Jardinage" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/21-28ccab52831cd1868c6744f77d7fe7c304d645f0a6d3237351bd0692a646fb96.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/jardinage">Jardinage</a></h2>
                      <p><a class="font-size-3 text-muted" href="/jardinage/tondre-la-pelouse">Tondre la
                                  pelouse</a></p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/taille-de-haie">Taille de haie</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/debroussaillage">Débroussaillage</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/desherbage">Désherbage</a></p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/ranger-du-bois">Ranger du bois</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/jardinage/entretien-des-espaces-verts">Entretien des espaces verts</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/entretien-du-gazon">Entretien du
                                  gazon</a></p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/nettoyage-de-terrasse">Nettoyage de
                                  terrasse</a></p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/ramassage-de-feuilles">Ramassage de
                                  feuilles</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/jardinage/enlevement-de-dechets-verts">Enlèvement de déchets verts</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/deneiger">Déneiger</a></p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/saler-autour-de-ma-maison">Saler
                                  autour de ma maison</a></p>
                      <p><a class="font-size-3 text-muted" href="/jardinage/autre-job-de-jardinage">Autre job de
                                  jardinage</a></p>
                </div>
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Déménagement" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/22-6bc86dbb1390e1b1a506269134feece1e0ac5028143c9f65b81d52b887af1a87.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/demenagement">Déménagement</a></h2>
                      <p><a class="font-size-3 text-muted"
                                  href="/demenagement/demenagement-tout-compris">Déménagement tout compris</a>
                      </p>
                      <p><a class="font-size-3 text-muted" href="/demenagement/aide-au-demenagement">Aide au
                                  déménagement</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/demenagement/louer-un-camion-avec-chauffeur">Louer un camion avec
                                  chauffeur</a></p>
                      <p><a class="font-size-3 text-muted" href="/demenagement/deplacer-un-meuble">Déplacer un
                                  meuble</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/demenagement/deplacer-de-l-electromenager">Déplacer de
                                  l&#39;électroménager</a></p>
                      <p><a class="font-size-3 text-muted" href="/demenagement/faire-emballer-ses-cartons">Faire
                                  emballer ses cartons</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/demenagement/debarrasser-des-encombrants">Débarrasser des
                                  encombrants</a></p>
                      <p><a class="font-size-3 text-muted" href="/demenagement/autre-job-de-demenagement">Autre
                                  job de déménagement</a></p>
                </div>
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Ménage" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/23-2cef76ae43c8eca7e91cb445550a4a8931f7e7aea3a7e7c624fc7b155a989ddc.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/menage">Ménage</a></h2>
                      <p><a class="font-size-3 text-muted" href="/menage/menage-a-domicile">Ménage à
                                  domicile</a></p>
                      <p><a class="font-size-3 text-muted" href="/menage/menage-d-etat-des-lieux">Ménage
                                  d&#39;état des lieux</a></p>
                      <p><a class="font-size-3 text-muted" href="/menage/repassage">Repassage</a></p>
                      <p><a class="font-size-3 text-muted" href="/menage/lavage-automobile">Lavage
                                  automobile</a></p>
                      <p><a class="font-size-3 text-muted" href="/menage/nettoyage-de-vitres">Nettoyage de
                                  vitres</a></p>
                      <p><a class="font-size-3 text-muted" href="/menage/autre-job-de-nettoyage">Autre job de
                                  nettoyage</a></p>
                </div>
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Enfants" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/28-7d5972fafb408b81cf6b28d3bee60843e4b0838fd4df54193e857620a89fb004.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/enfants">Enfants</a></h2>
                      <p><a class="font-size-3 text-muted" href="/enfants/garde-d-enfants">Garde
                                  d&#39;enfants</a></p>
                      <p><a class="font-size-3 text-muted" href="/enfants/garde-periscolaire">Garde
                                  périscolaire</a></p>
                </div>
          </div>
          <div class="row">
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Animaux" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/24-98f36dcebef3e79fdad340e805f36f32d0cc9369066a317e5ee5096f8f9fa79f.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/animaux">Animaux</a></h2>
                      <p><a class="font-size-3 text-muted" href="/animaux/garde-de-chien">Garde de chien</a></p>
                      <p><a class="font-size-3 text-muted" href="/animaux/garde-de-chat">Garde de chat</a></p>
                      <p><a class="font-size-3 text-muted" href="/animaux/faire-promener-son-chien">Faire
                                  promener son chien</a></p>
                      <p><a class="font-size-3 text-muted" href="/animaux/garde-d-autres-animaux">Garde
                                  d&#39;autres animaux</a></p>
                </div>
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Informatique" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/25-bbf612f1c76ab9f689d1a2acc2097c9b7044f394ef539605576d830d570d26d2.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/informatique">Informatique</a></h2>
                      <p><a class="font-size-3 text-muted" href="/informatique/nettoyer-mon-ordinateur">Nettoyer
                                  mon ordinateur</a></p>
                      <p><a class="font-size-3 text-muted" href="/informatique/cours-d-informatique">Cours
                                  d&#39;informatique</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/informatique/installer-une-imprimante">Installer une imprimante</a></p>
                      <p><a class="font-size-3 text-muted" href="/informatique/installer-une-box">Installer une
                                  box</a></p>
                      <p><a class="font-size-3 text-muted" href="/informatique/autre-job-d-informatique">Autre
                                  job d&#39;informatique</a></p>
                </div>
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Aide à domicile" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/26-20060e9cd170d149293f337dd772800e836f8ab07d5bd2601e52c941e421d4a9.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/aide-a-domicile">Aide à domicile</a></h2>
                      <p><a class="font-size-3 text-muted" href="/aide-a-domicile/maintien-a-domicile">Maintien
                                  à domicile</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/aide-a-domicile/livraison-de-medicaments">Livraison de médicaments</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/aide-a-domicile/faire-livrer-des-courses">Faire / Livrer des
                                  courses</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/aide-a-domicile/livraison-a-domicile">Livraison à domicile</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/aide-a-domicile/accompagnement-en-course">Accompagnement en course</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/aide-a-domicile/accompagnement-aux-rendez-vous-medicaux">Accompagnement
                                  aux rendez-vous médicaux</a></p>
                      <p><a class="font-size-3 text-muted" href="/aide-a-domicile/preparer-des-repas">Préparer
                                  des repas</a></p>
                      <p><a class="font-size-3 text-muted" href="/aide-a-domicile/serveur-serveuse">Serveur /
                                  Serveuse</a></p>
                      <p><a class="font-size-3 text-muted" href="/aide-a-domicile/retouche-couture">Retouche
                                  couture</a></p>
                </div>
                <div class="col-md-3 mt-3">
                      <div class="mb-3"><img alt="Cours particuliers" class="img-contain radius-m"
                                  src="https://d1b747rczec55w.cloudfront.net/assets/categories/29-018d670dbb24035a918f3a89ca4dbec5e9e0423897d633ccdf5e273af001ac4d.svg" />
                      </div>
                      <h2 class="h3 mb-3"><a class="text-dark" href="/cours-particuliers">Cours particuliers</a>
                      </h2>
                      <p><strong>Langues</strong></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/francais">Français</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/anglais">Anglais</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/espagnol">Espagnol</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/allemand">Allemand</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/latin">Latin</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/grec">Grec</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/italien">Italien</a></p>
                      <p class="mt-4"><strong>Matières</strong></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/cours-particuliers/mathematiques">Mathématiques</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/histoire">Histoire</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/geographie">Géographie</a>
                      </p>
                      <p><a class="font-size-3 text-muted"
                                  href="/cours-particuliers/philosophie">Philosophie</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/cours-particuliers/sciences-de-l-ingenieur">Sciences de
                                  l&#39;ingénieur</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/svt">SVT</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/physique">Physique</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/chimie">Chimie</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/ses">SES</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/sciences-1es-l">Sciences
                                  1ES/L</a></p>
                      <p><a class="font-size-3 text-muted" href="/cours-particuliers/arts-plastiques">Arts
                                  plastiques</a></p>
                      <p><a class="font-size-3 text-muted"
                                  href="/cours-particuliers/education-musicale">Éducation musicale</a></p>
                </div>
          </div>
    </div>
</div>
@endsection
