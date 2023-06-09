@extends('layout.template')
@section('navbar-class')
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
    @endsection
    @section('content')
        <div class="container-xs">
            <div class="my-6 py-md-6">
                <h1 class="text-center">Bienvenue chez Yoojo</h1>
                <div class="d-flex flex-column flex-md-row py-md-5 py-3"><a id="signUpBtn"
                        class="d-flex flex-column text-decoration-none p-4 border rounded animate-svg hover-shadow"
                        href="#"><svg class="svg-signup-client mb-4" viewbox="0 0 208 160" width="100"
                            xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fillrule="evenodd" id="signup-client">
                                <path
                                    d="M194.071481,115.806299 C201.880593,117.342764 207.770933,124.226558 207.770933,132.486114 L207.770933,142.986114 C207.770933,152.374955 200.159773,159.986114 190.770933,159.986114 L16.7709325,159.986114 C7.38209179,159.986114 -0.22906746,152.374955 -0.22906746,142.986114 L-0.22906746,132.486114 C-0.22906746,124.566467 5.18643278,117.911677 12.5162955,116.022883 C13.9176741,85.7368869 27.416982,63.48 49.6145279,49.0320575 C66.478206,38.0558239 87.6862305,32.4388873 103.770933,32.4388873 C119.79052,32.4388873 140.795912,38.0754124 157.486421,49.0898461 C179.337687,63.5099763 192.634429,85.6804167 194.071481,115.806299 L194.071481,115.806299 Z M16.7709325,128.486114 C14.0095088,128.486114 11.7709325,130.724691 11.7709325,133.486114 L11.7709325,143.986114 C11.7709325,146.747538 14.0095088,148.986114 16.7709325,148.986114 L190.770933,148.986114 C193.532356,148.986114 195.770933,146.747538 195.770933,143.986114 L195.770933,133.486114 C195.770933,130.724691 193.532356,128.486114 190.770933,128.486114 L16.7709325,128.486114 Z"
                                    fill="#007AFF" fillrule="nonzero" id="ring" />
                                <path
                                    d="M108.220046,11 L108.220046,34.8162105 L97.2200457,34.8162105 L97.2200457,11 L78.9400914,11 C75.9025253,11 73.4400914,8.53756612 73.4400914,5.5 C73.4400914,2.46243388 75.9025253,8.8817842e-14 78.9400914,8.8817842e-14 L126.5,8.8817842e-14 C129.537566,8.8817842e-14 132,2.46243388 132,5.5 C132,8.53756612 129.537566,11 126.5,11 L108.220046,11 Z"
                                    fill="#007AFF" id="button" />
                                <path
                                    d="M24.5689315,115.32262 L182.029861,115.32262 C180.535758,89.661097 169.34066,71.2901862 150.876859,59.1055183 C136.259684,49.4593234 117.550244,44.4388873 103.770933,44.4388873 C89.9006389,44.4388873 70.9636183,49.4543494 56.1606098,59.0893341 C37.4340822,71.2780596 26.0832205,89.6502306 24.5689315,115.32262 Z"
                                    fill="#FFF" fillrule="nonzero" id="mask" />
                            </g>
                        </svg>
                        <h2 class="h4">J&#39;ai besoin d&#39;un service</h2><span class="text-muted">Trouvez le
                            prestataire idéal pour vos services du quotidien</span>
                    </a>
                    <span class="font-size-5 text-muted mx-6 align-self-center font-weight-medium my-md-0 my-4">OU</span><a
                        id="signUpBtnPres"
                        class="d-flex flex-column text-decoration-none p-4 border rounded animate-svg hover-shadow"
                        data-modal-user-type="jobber"><svg class="svg-signup-jobber mb-4" height="78"
                            viewbox="0 0 208 172" width="100" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fillrule="evenodd" id="signup-jobber">
                                <g id="inside" transform="translate(0 34.806)">
                                    <path
                                        d="M187.416254,35.6937909 L206.009615,35.6937909 L206.009615,47.6937909 L191.783897,47.6937909 L197.172006,62.4974998 C198.305361,65.6113673 196.699839,69.0544214 193.585971,70.1877764 L158.817344,82.8425217 C155.703477,83.9758768 152.260423,82.3703543 151.127068,79.2564869 L146.612401,66.8525427 C146.196638,66.8676454 145.772977,66.8394783 145.346733,66.76432 L122.021137,62.651388 L120.797469,69.5911535 C120.22205,72.8545193 117.110099,75.0335304 113.846733,74.4581109 L77.4088465,68.0331284 C74.9234224,67.594881 73.0669842,65.6853053 72.5773348,63.3580929 L58.3173442,68.548305 C55.2816064,69.6532231 51.9329939,68.1549812 50.7166988,65.1937909 L26.5,65.1937909 C23.1862915,65.1937909 20.5,62.5074994 20.5,59.1937909 L20.5,47.6937909 L0.00961538462,47.6937909 L0.00961538462,35.6937909 L20.5,35.6937909 L20.5,20.1937909 C20.5,16.8800824 23.1862915,14.1937909 26.5,14.1937909 L36.2775202,14.1937909 C36.8118163,13.7342481 37.4367167,13.3617432 38.1381557,13.1064403 L72.9067827,0.451695035 C76.0206501,-0.68166002 79.4637042,0.923862476 80.5970593,4.0377299 L83.1170761,10.9614192 C84.383077,10.0542461 85.9991118,9.6376538 87.654089,9.92947093 L110.979686,14.0424029 L112.203353,7.10263745 C112.778773,3.83927163 115.890723,1.66026056 119.154089,2.23568 L155.591976,8.66066257 C158.855342,9.23608202 161.034353,12.3480323 160.458933,15.6113982 L159.734057,19.722377 L173.406783,14.7459118 C176.52065,13.6125567 179.963704,15.2180792 181.097059,18.3319467 L187.416254,35.6937909 Z M156.917866,35.6937909 L174.646121,35.6937909 L171.872869,28.0743441 L157.327917,33.3682735 L156.917866,35.6937909 L156.917866,35.6937909 Z M154.801942,47.6937909 L154.021105,52.1221366 L160.351258,69.5140894 L183.843574,60.9635858 L179.013763,47.6937909 L154.801942,47.6937909 L154.801942,47.6937909 Z M139.639186,47.6937909 L124.658565,47.6937909 L124.104915,50.833695 L141.521665,53.9047379 L141.645065,53.2048998 L139.639186,47.6937909 L139.639186,47.6937909 Z M135.271543,35.6937909 L135.052121,35.0909337 C133.918766,31.9770663 135.524288,28.5340122 138.638156,27.4006571 L146.713294,24.4615472 L147.599351,19.4364665 L122.979157,15.0952621 L122.797379,16.1261811 L124.091976,16.3544535 C127.355342,16.9298729 129.534353,20.0418233 128.958933,23.3051891 L126.774489,35.6937909 L135.271543,35.6937909 L135.271543,35.6937909 Z M71.5,35.6937909 L77.0185846,35.6937909 L77.7790513,31.3809695 L71.3728687,13.7801273 L68.3142367,14.8933783 C70.2095862,15.9018047 71.5,17.8971017 71.5,20.1937909 L71.5,35.6937909 L71.5,35.6937909 Z M71.5,47.6937909 L71.5,50.9800774 L74.5168121,49.8820476 L74.9026608,47.6937909 L71.5,47.6937909 L71.5,47.6937909 Z M92.1189232,35.6937909 L107.161962,35.6937909 L108.895907,25.860096 L91.4791574,22.789053 L90.1550911,30.2982064 L92.1189232,35.6937909 L92.1189232,35.6937909 Z M96.486566,47.6937909 L96.672006,48.2032831 C97.8053611,51.3171505 96.1998386,54.7602046 93.0859712,55.8935597 L88.0540196,57.7250402 L110.021665,61.5985288 L110.203444,60.5676099 L108.908847,60.3393374 C105.645481,59.763918 103.46647,56.6519677 104.041889,53.3886018 L105.046038,47.6937909 L96.486566,47.6937909 L96.486566,47.6937909 Z M32.5,35.6937909 L39.9742124,35.6937909 L36.5164952,26.1937909 L32.5,26.1937909 L32.5,35.6937909 L32.5,35.6937909 Z M32.5,47.6937909 L32.5,53.1937909 L46.3436915,53.1937909 L44.3418552,47.6937909 L32.5,47.6937909 L32.5,47.6937909 Z M59.5,35.6937909 L59.5,26.1937909 L49.2866284,26.1937909 L52.7443456,35.6937909 L59.5,35.6937909 L59.5,35.6937909 Z M59.5,47.6937909 L57.1119885,47.6937909 L59.1138247,53.1937909 L59.5,53.1937909 L59.5,47.6937909 L59.5,47.6937909 Z"
                                        fill="#0078FA" fillrule="nonzero" id="Shape" />
                                    <polygon fill="#FFF" id="Rectangle"
                                        points="12.0096154 47.1937909 195.009615 47.1937909 195.009615 104.193791 12.0096154 104.193791" />
                                </g>
                                <path
                                    d="M22.0096154,24 L185.009615,24 C197.15988,24 207.009615,33.8497355 207.009615,46 L207.009615,150 C207.009615,162.150264 197.15988,172 185.009615,172 L22.0096154,172 C9.85935089,172 0.00961538462,162.150264 0.00961538462,150 L0.00961538462,46 C0.00961538462,33.8497355 9.85935089,24 22.0096154,24 Z M22.0096154,36 C16.4867679,36 12.0096154,40.4771525 12.0096154,46 L12.0096154,150 C12.0096154,155.522847 16.4867679,160 22.0096154,160 L185.009615,160 C190.532463,160 195.009615,155.522847 195.009615,150 L195.009615,46 C195.009615,40.4771525 190.532463,36 185.009615,36 L22.0096154,36 Z"
                                    fill="#007AFF" fillrule="nonzero" id="body" />
                                <path
                                    d="M67,6.5 C67,3.1862915 69.6862915,0.5 73,0.5 L133,0.5 C136.313708,0.5 139,3.1862915 139,6.5 L139,30 C139,33.3137085 136.313708,36 133,36 L73,36 C69.6862915,36 67,33.3137085 67,30 L67,6.5 Z M79,12.5 L79,24 L127,24 L127,12.5 L79,12.5 Z"
                                    fill="#007AFF" fillrule="nonzero" id="handle" />
                                <g id="clasp">
                                    <g transform="translate(0 24)">
                                        <path
                                            d="M125.262162,79.9677419 L125.262162,92.5840469 C125.262162,95.5751952 122.604912,98 119.327027,98 L87.672973,98 C84.3950883,98 81.7378378,95.5751952 81.7378378,92.5840469 L81.7378378,79.9677419 L93.6081081,79.9677419 L93.6081081,87.1680939 L113.391892,87.1680939 L113.391892,79.9677419 L125.262162,79.9677419 Z"
                                            fill="#007AFF" fillrule="nonzero" id="Combined-Shape" />
                                        <path
                                            d="M12,45.6668552 C34.5353099,62.9552403 65.0353099,71.5994328 103.5,71.5994328 C141.96469,71.5994328 172.46469,62.9552403 195,45.6668552 L195,22 C195,16.4771525 190.522847,12 185,12 L22,12 C16.4771525,12 12,16.4771525 12,22 L12,45.6668552 Z"
                                            fill="#FFF" id="Path-2-Copy" />
                                        <path
                                            d="M4.69581126,55.1878229 C29.5199888,74.2321557 62.5713063,83.5994328 103.5,83.5994328 C144.428694,83.5994328 177.480011,74.2321557 202.304189,55.1878229 L207,51.5853434 L207,22 C207,9.8497355 197.150264,0 185,0 L22,0 C9.8497355,0 0,9.8497355 0,22 L0,51.5853434 L4.69581126,55.1878229 Z M12,45.6668552 L12,22 C12,16.4771525 16.4771525,12 22,12 L185,12 C190.522847,12 195,16.4771525 195,22 L195,45.6668552 C172.46469,62.9552403 141.96469,71.5994328 103.5,71.5994328 C65.0353099,71.5994328 34.5353099,62.9552403 12,45.6668552 Z"
                                            fill="#007AFF" fillrule="nonzero" id="Path-2" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <h2 class="h4">Devenir prestataire</h2><span class="text-muted">Augmentez vos revenus en
                            rendant service près de chez vous</span>
                    </a>
                </div>
                <p class="text-center mb-0">Vous avez déjà un compte ?<a class="ml-2" href="#" id="dispatchLoginOR"
                        data-toggle="modal" data-target="#loginModal">Connectez-vous</a>
                </p>
            </div>
        </div>
        <!-- Inscription Modal benef -->
        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="signUpModalLabel">Créer un compte</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>N'hésitez pas à profiter de nos services!</p>
                        <!--signUp form -->
                        <form action="{{ route('beneficiary.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="first_name" placeholder="Nom*"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="last_name" placeholder="Prénom*"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="tel" class="form-control" name="phone_number"
                                        placeholder="Numéro de téléphone*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-id-card" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="id_card_number"
                                        placeholder="Numéro de carte d'identité*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <select class="form-control" name="city" required>
                                        <option value="" selected disabled>Choisissez un gouvernorat*</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Tunis">Tunis</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Adresse e-mail*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-lock" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Mot de passe*" required>
                                </div>
                            </div>
                            <div class="form-group form-row align-items-center">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="remember_token">
                                        <label class="form-check-label" for="remember_token">Se souvenir de moi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Créer un compte</button>
                            </div>
                        </form>
                        <!--/signUp form -->
                    </div>
                </div>
            </div>
        </div>

        <!-- End Inscription Modal benef -->



        <!-- Inscription Modal pres -->

        <div class="modal fade" id="signUpModalPres" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="signUpModalLabel">Créer un compte</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                        <p>Rejoignez nous maintenant !</p>
                        <!--signUp form -->
                        <form action="{{ route('service-provider.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('first_name','providerSignUpErrors') is-invalid @enderror" name="first_name" placeholder="Nom*"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-user" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('last_name','providerSignUpErrors') is-invalid @enderror" name="last_name" placeholder="Prénom*"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="tel" class="form-control @error('phone_number','providerSignUpErrors') is-invalid @enderror" name="phone_number"
                                        placeholder="Numéro de téléphone*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-id-card" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control @error('id_card_number','providerSignUpErrors') is-invalid @enderror" name="id_card_number"
                                        placeholder="Numéro de carte d'identité*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-portrait" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="profile_picture" required>
                                        <label class="custom-file-label" for="photo">Choisir une image *</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-map-marker-alt" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <select class="form-control @error('city','providerSignUpErrors') is-invalid @enderror" name="city" required>
                                        <option value="" selected disabled>Choisissez un gouvernorat*</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Sousse">Sousse</option>
                                        <option value="Tunis">Tunis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text">
                                        <i class="fa-solid fa-list" style="color: #8a939e;"></i>
                                      </span>
                                  </div>
                                  <select class="form-control" id="service_category"  required>
                                      <option value="" selected disabled>Choisir un service*</option>
                                      @foreach ($serviceCategories as $serviceCategory)
                                          <option value="{{ $serviceCategory->id }}" data-subcategories="{{ json_encode($serviceCategory->serviceSubCategories) }}">{{ $serviceCategory->name }}</option>         
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-list-check" style="color: #8a939e;"></i>
                                    </span>
                                </div>
                                <select class="form-control @error('service_sub_category_id','providerSignUpErrors') is-invalid @enderror" name="service_sub_category_id" id="service_sub_category" required disabled>
                                  <option value="">Choisir une sous-catégorie service</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-envelope" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control @error('email','providerSignUpErrors') is-invalid @enderror" name="email"
                                        placeholder="Adresse e-mail*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-lock" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control @error('password','providerSignUpErrors') is-invalid @enderror" name="password"
                                        placeholder="Mot de passe*" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-file-waveform" style="color: #8a939e;"></i>
                                        </span>
                                    </div>
                                    <textarea class="form-control @error('service_description','providerSignUpErrors') is-invalid @enderror" name="service_description" placeholder="Décrivez votre service*" rows="3" required></textarea>

                                </div>
                            </div>
                            <div class="form-group form-row align-items-center">
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember_token">
                                        <label class="form-check-label" for="remember_token">Se souvenir de moi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Créer un compte</button>
                            </div>
                        </form>
                        <!--/signUp form -->
                    </div>
                </div>
            </div>
        </div>
        <!--End of Inscription Modal pres -->



        <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
            aria-hidden="true">

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
            <!-------SCript modal Pres --------------------->
            <script>
                $(document).ready(function() {
                    $("#signUpBtn").click(function() {
                        $("#signUpModal").modal('show');
                    });
                });
            </script>
            <!-------Script modal Pres --------------------->

            <!-------Script modal benef --------------------->
            <script>
                $(document).ready(function() {
                    $("#signUpBtnPres").click(function() {
                        $("#signUpModalPres").modal('show');
                    });
                });
            </script>
            <!-------Script modal benef --------------------->

            <script>
              // Listen for changes in the service_category select
              document.getElementById('service_category').addEventListener('change', function() {
                // Enable or disable the disabled_select based on the selected value
                var disabledSelect = document.getElementById('service_sub_category');
                disabledSelect.disabled = (this.value === '');
            
                // Clear the disabled_select options
                disabledSelect.innerHTML = '';
            
                // Get the selected service_category option
                var selectedOption = this.options[this.selectedIndex];
                
                // Get the subcategories data from the selected option
                var subcategories = JSON.parse(selectedOption.getAttribute('data-subcategories'));
                
                // Populate the disabled_select with subcategory options
                subcategories.forEach(function(subcategory) {
                  var option = document.createElement('option');
                  option.value = subcategory.id;
                  option.textContent = subcategory.name;
                  disabledSelect.appendChild(option);
                });
              });
            </script>
        @endsection
