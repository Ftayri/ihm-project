@extends('layout.template')
<title>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</title>
@section('navbar-class')
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
    @endsection
    @section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <nav class="sidebar sidebar-offcanvas border border" id="sidebar">
                        <ul class="nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">
                                    <i class="ti-bookmark-alt menu-icon"></i>
                                    <span class="menu-title">Mes demandes</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="ti-user menu-icon"></i>
                                    <span class="menu-title">Compte</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-9 d-flex justify-content-center align-items-center">
                    <div class="row" style="width:100%;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-0">Mes Demandes</p>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    @if (isset($serviceProvider))
                                                        <th>Bénéficiaire</th>
                                                    @else
                                                        <th>Préstataire</th>
                                                    @endif
                                                    <th>Service</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    @if (isset($serviceProvider))
                                                        <th>Action</th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($services as $service)
                                                    <tr>
                                                        @if (isset($serviceProvider))
                                                            <td>{{ $service->beneficiary->user->first_name }}
                                                                {{ $service->beneficiary->user->last_name }}</td>
                                                        @else
                                                            <td><a href="{{ route('provider.show', ['id'=>$service->serviceProvider->id]) }}">{{ $service->serviceProvider->user->first_name }}
                                                                {{ $service->serviceProvider->user->last_name }}</a></td>
                                                        @endif
                                                        <td><a  style="text-decoration: none;" href="{{ route('services.subcategory.show', ['serviceCategory'=>$service->serviceProvider->serviceSubCategory->serviceCategory->slug, 'serviceSubCategory'=>$service->serviceProvider->serviceSubCategory->slug]) }}">{{ $service->serviceProvider->serviceSubCategory->name }}</a></td>
                                                        <td class="font-weight-bold">{{ $service->created_at }}</td>
                                                        <td><label
                                                                class="badge {{ $service->status === 'refused' ? 'badge-danger' : ($service->status === 'pending' ? 'badge-warning' : 'badge-success') }}">
                                                                @if ($service->status === 'pending')
                                                                    En attente
                                                                @elseif ($service->status === 'refused')
                                                                    Refusé
                                                                @elseif ($service->status === 'accepted')
                                                                    Accepté
                                                                @else
                                                                    {{ $service->status }}
                                                                @endif
                                                            </label></td>
                                                        @if (isset($serviceProvider))
                                                            @if ($service->status === 'pending')
                                                                <td>
                                                                    <form action="{{ route('service.action') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $service->id }}">
                                                                        <button class="btn btn-success btn-xs"
                                                                            type="submit" name="action"
                                                                            value="accept">Accepter</button>
                                                                        <button class="btn btn-danger btn-xs" type="submit"
                                                                            name="action" value="refuse">Refuser</button>
                                                                    </form>
                                                                </td>
                                                            @endif
                                                        @else
                                                            @if ($service->status === 'accepted' && $service->evaluation === null)
                                                                <td>
                                                                    <button class="btn btn-success btn-xs" type="button"
                                                                        data-toggle="modal" data-target="#evalModal"
                                                                        data-service-id="{{ $service->id }}">Donner
                                                                        un
                                                                        avis</button>
                                                                </td>
                                                            @endif
                                                        @endif
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4" class="text-center">Aucune demande</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="evalModal" tabindex="-1" role="dialog" aria-labelledby="evalModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="evalModalLabel">Donner un avis à ce prestataire</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('service.evaluate') }}" method="POST">
                                @csrf
                                <input type="hidden" id="service_id" name="service_id">
                                <div class="form-group">
                                    <label for="digitInput">Score (/5): </label>
                                    <input type="number" class="form-control" name="score" min="0" max="5"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="commentTextarea">Commentaire: </label>
                                    <textarea class="form-control" name="comment" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <!-- Bootstrap JavaScript -->


        <script>
            $('#evalModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var serviceId = button.data('service-id');
                console.log("a");
                var modal = $(this);
                modal.find('#service_id').val(serviceId);
            });
        </script>
    @endsection
