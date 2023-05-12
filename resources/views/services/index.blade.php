@extends('layout.template')
@section('navbar-class')
    <nav class="navbar navbar-expand-lg navbar-light border-bottom-wide position-relative bg-white">
    @endsection
    @section('content')
        <div class="bg-white">
            <div class="ypj-fluid-container pb-3">
                <ol class="breadcrumb pt-3 pl-0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="link-gray" itemprop="item" href="/"><span itemprop="name">Accueil</span></a>
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
                @php
                    $i = 0;
                @endphp
                @foreach ($serviceCategories as $serviceCategory)
                    @if ($i % 4 == 0)
                        <div class="row">
                    @endif
                    <div class="col-md-3 mt-3">
                        <div class="mb-3"><img alt="{{ $serviceCategory->name }}" class="img-contain radius-m"
                                src="{{ asset('img/services/' . $serviceCategory->image) }}" />
                        </div>
                        <h2 class="h3 mb-3"><a class="text-dark" href="">{{ $serviceCategory->name }}</a></h2>
                        @foreach ($serviceCategory->serviceSubcategories as $serviceSubCategory)
                            <p><a class="font-size-3 text-muted" href="">{{ $serviceSubCategory->name }}</a></p>
                        @endforeach
                    </div>
                    @php
                        $i++;
                    @endphp
                    @if ($i % 4 == 0)
            </div>
            @endif
            @endforeach
            @if ($i % 4 != 0)
        </div>
        @endif
        </div>
        </div>
    @endsection
