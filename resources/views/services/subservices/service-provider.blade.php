@extends('layout.template')
@section('navbar-class')
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
    @endsection
    @section('content')
        <div class="ypj-fluid-container my-6">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="sticky-with-fixed-header mb-4">
                        <div class="card rounded-lg" data-preview-jobber="663729">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center flex-column">

                                    <div class="position-relative d-flex justify-content-center" id="imageGallery"><a
                                            data-image-gallery-item="" href="#">
                                            <div class="img-user img-120"><img
                                                    alt="Profil de {{ $serviceProvider->user->first_name }} {{ $serviceProvider->user->last_name }}"
                                                    src="{{ asset('profile_pictures/' . $serviceProvider->profile_picture) }}" />
                                            </div>
                                        </a>
                                        <div class="position-absolute" style="top:0; right:0; z-index: 999"><svg
                                                aria-hidden="true" aria-label="Identité vérifiée" height="30"
                                                role="img" style="vertical-align: text-top" version="1.1"
                                                viewBox="0 0 24 24" width="30">
                                                <title>Identité vérifiée</title>
                                                <circle cx="12" cy="11" fill="white" r="9">
                                                </circle>
                                            </svg></div>
                                        <div class="top-jobber-frame top-jobber-frame--large" style="z-index: 999;"></div>
                                        <div class="position-absolute mx-auto" style="z-index: 999; bottom: -4px">
                                            <div class="badge rounded-pill badge-purple font-size-2 px-2 py-1 cursor-pointer text-white"
                                                data-content="Le badge « Top prestataire » met en avant les prestataires les plus expérimentés et les mieux notés sur Yoojo."
                                                data-placement="bottom" data-toggle="popover"><i
                                                    class="icon-love-solid"></i> Top prestataire <i
                                                    class="icon-info-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="mt-3 text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="mr-1"><svg aria-hidden="true" aria-label="Identité vérifiée"
                                                    height="20" role="img" style="vertical-align: text-top"
                                                    version="1.1" viewBox="0 0 24 24" width="20">
                                                    <title>Identité vérifiée</title>
                                                    <circle cx="12" cy="11" fill="white" r="9">
                                                    </circle>
                                                    <path
                                                        d="M1.33587 8.06583C2.20239 12.5955 4.9591 23 12 23C19.0409 23 21.7976 12.5954 22.6641 8.06582C22.9043 6.81026 22.3105 5.56954 21.2034 4.93043C18.659 3.46162 14.0839 1 12 1C9.9161 1 5.341 3.46162 2.7966 4.93043C1.68949 5.56953 1.09568 6.81026 1.33587 8.06583ZM16.0213 7.12132L18.1426 9.24264L11.0716 16.3137L6.82894 12.0711L8.95026 9.94975L11.0716 12.0711L16.0213 7.12132Z"
                                                        fill="var(--color-success)"></path>
                                                </svg></div><span>Identité vérifiée</span>
                                        </div>
                                        <div class="mt-2"><i class="icon icon-star-solid user-star-very-good"></i><strong
                                                class="pl-1">{{ $averageScore }}</strong><span
                                                class="text-muted pl-1">({{ $count }} avis)</span></div>
                                        <div class="mt-2"><strong>{{ $serviceCount }} services réalisé(s)</strong>
                                        </div>
                                        @if(@isset($pendingService))
                                          Vous avez déja demandé un service à ce prestataire
                                        @else
                                          @auth
                                          <form action="{{ route('service.request') }}" method="POST">
                                                      @csrf
                                                      <input type="hidden" name="service_provider_id" value="{{ $serviceProvider->id }}">
                                                      <input type="hidden" name="beneficiary_id" value="{{ Auth::user()->id}}">
                                                <button class="btn btn-primary btn-block ask-service mt-3"
                                                      type="submit">Demander
                                                      un service de
                                                      {{ Str::lower($serviceProvider->serviceSubCategory->name) }}</button>
                                          </form>
                                          @else
                                                Vous devez être connecté pour demander un service
                                          @endauth
                                          @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 offset-md-1">
                    <div class="d-flex align-items-center">
                        <h1 class="mb-0">{{ $serviceProvider->user->first_name }} {{ $serviceProvider->user->last_name }}
                        </h1>
                    </div>
                    <div class="text-break">
                        <p>{{ $serviceProvider->service_description }}</p>
                    </div>
                    <hr class="my-4" />
                    <h2 class="h4 mt-4">Avis et commentaires</h2>
                    <div class="d-flex align-items-center">
                        <div class="font-size-6"><i class="icon icon-star-solid user-star-very-good"></i><strong
                                class="pl-1">{{ $averageScore }}</strong></div>
                    </div>
                    <div class="text-muted font-size-2 mt-n1">sur 5 pour {{ $count }} avis</div>
                    @forelse($evaluations as $evaluation)
                        <div style="position: relative;">
                            <div class="block" style="display:flex; align-items:center">
                                <img src="{{ asset('profile_pictures/norma_avatar.jpg') }}" alt="User 1"
                                    class="rounded-circle mr-3" style="width: 50px; height: 50px;">
                                <div>
                                    <h3 class="ml-3">{{ $evaluation->service->beneficiary->user->first_name }}
                                        {{ $evaluation->service->beneficiary->user->last_name }}</h3>
                                    <p class="ml-3">{{ $evaluation->comment }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-info" role="alert">
                            <strong>Il n'y a pas encore d'avis pour ce prestataire.</strong>
                        </div>
                    @endforelse


                </div>
            </div>
        </div>
    @endsection
