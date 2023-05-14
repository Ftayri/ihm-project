@extends('layout.template')
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
                                                    <th>Préstataire</th>
                                                    <th>Service</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($services as $service)
                                                    <tr>
                                                        <td>{{ $service->serviceProvider->user->first_name }}
                                                            {{ $service->serviceProvider->user->last_name }}</td>
                                                        <td>{{ $service->serviceProvider->serviceSubCategory->name }}</td>
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
        @endsection
