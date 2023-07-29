<!DOCTYPE html>
<html dir="{{app()->getLocale() == 'ar' ?"rtl": "ltr"    }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preload" href="{{asset('assets2/fonts/ram-ar-regular.woff?v=32')}}" as="font" type="font/woff"
          crossorigin>
    <link rel="preload" href="{{asset('assets2/fonts/ram-ar-regular.woff2?v=32')}}" as="font" type="font/woff2"
          crossorigin>
    <link rel="preload" href="{{asset('assets2/fonts/ram-ar-medium.woff?v=32" ')}}" as="font" type="font/woff"
          crossorigin>
    <link rel="preload" href="{{asset('assets2/fonts/ram-ar-medium.woff2?v=32"')}}" as="font" type="font/woff2"
          crossorigin>
    <link rel="preload" href="{{asset('assets2/fonts/ram-ar-bold.woff?v=32')}}" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="{{asset('assets2/fonts/ram-ar-bold.woff2?v=32')}}" as="font" type="font/woff2"
          crossorigin>

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/images/favicons/apple-icon-57x57.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/images/favicons/apple-icon-60x60.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/favicons/apple-icon-72x72.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/images/favicons/apple-icon-76x76.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/favicons/apple-icon-114x114.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/images/favicons/apple-icon-120x120.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/images/favicons/apple-icon-144x144.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/favicons/apple-icon-152x152.png?v=32')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-icon-180x180.png?v=32')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/images/logo.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/logo.png')}}">
    <link type="image/svg" href="{{asset('assets/images/placeholder.svg?v=32')}}">
    <link rel="manifest" href="{{asset('assets/images/favicons/manifest.json?v=32')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicons/ms-icon-144x144.png?v=32')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="hUdyOigtHTaRTiFnOmtxKqG9glVUAnqStFxeD7Av"/>
    <link rel="stylesheet" href="{{asset('assets2/css/main-rtl.min.css?v=32')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets2/css/book-rtl.min.css?v=32')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/doctors-rtl.min.css?v=32')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/partners-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/blog-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/article-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/rate-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/about-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/offers-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/search-rtl.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"
            integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        .form-control::placeholder {
            color: black; /* Replace with your desired color */
        }
        #page nav{
            display: flex;
            flex-direction: column-reverse;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
        }
        #page nav .hidden{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
        }
        #page nav .flex{
            display: none;
        }
    </style>
    @if(isset($meta_title))
        <title>{{$meta_title}}</title>
    @else
        <title>NEO Healthcare Center</title>
    @endif
    @if(isset($meta_description))
    <meta name="description" content="{{$meta_description}}"/>
    @endif
    @if(isset($keyword))
    <meta name="keywords" content="{{$keyword}}"/>
    @endif
    <link rel="canonical" href="{{ isset($canonical) ? $canonical : url(Request::url())  }}" />
    <link rel="preload" href="{{asset('assets/css/home-rtl.min.css?v=32')}}" crossorigin="anonymous" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    @stack('styles')
    @if(app()->getLocale() == 'en')
        <style>
            *{
                text-align: left;
            }
            .statistics .statistic .statistic__icon{
                right: -65%;
            }
            .statistics .statistic:hover .statistic__icon{
                right: -75%
            }
            .btn-brand-link .btn-icon, .footer::before, .page-header::after, .slider::after{
                transform: scaleX(1);
            }
        </style>
    @endif
</head>
<body >
@include('layouts.header')

@include('components.search-modal')
@yield('content')

@include('layouts.footer')


<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59TL3NC"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

<script src="{{asset('/assets2/js/main.min.js?v=32')}}"></script>
<script type="text/javascript">
    const Ziggy = {
        "url": "https:\/\/ramclinics.net", "port": null, "defaults": {}, "routes": {
            "debugbar.openhandler": {"uri": "_debugbar\/open", "methods": ["GET", "HEAD"]},
            "debugbar.clockwork": {"uri": "_debugbar\/clockwork\/{id}", "methods": ["GET", "HEAD"]},
            "debugbar.telescope": {"uri": "_debugbar\/telescope\/{id}", "methods": ["GET", "HEAD"]},
            "debugbar.assets.css": {"uri": "_debugbar\/assets\/stylesheets", "methods": ["GET", "HEAD"]},
            "debugbar.assets.js": {"uri": "_debugbar\/assets\/javascript", "methods": ["GET", "HEAD"]},
            "debugbar.cache.delete": {"uri": "_debugbar\/cache\/{key}\/{tags?}", "methods": ["DELETE"]},
            "ignition.healthCheck": {"uri": "_ignition\/health-check", "methods": ["GET", "HEAD"]},
            "ignition.executeSolution": {"uri": "_ignition\/execute-solution", "methods": ["POST"]},
            "ignition.shareReport": {"uri": "_ignition\/share-report", "methods": ["POST"]},
            "ignition.scripts": {"uri": "_ignition\/scripts\/{script}", "methods": ["GET", "HEAD"]},
            "ignition.styles": {"uri": "_ignition\/styles\/{style}", "methods": ["GET", "HEAD"]},
            "web.home.index": {"uri": "\/", "methods": ["GET", "HEAD"]},
            "web.home.subscribe": {"uri": "post\/subscribe", "methods": ["POST"]},
            "web.home.search": {"uri": "search\/results", "methods": ["GET", "HEAD"]},
            "admin.pending.users": {"uri": "pending\/users", "methods": ["GET", "HEAD"]},
            "admin.pending.tickets": {"uri": "pending\/tickets", "methods": ["GET", "HEAD"]},
            "admin.transactions.index": {"uri": "transactions", "methods": ["GET", "HEAD"]},
            "admin.notifications.index": {"uri": "notifications", "methods": ["GET", "HEAD"]},
            "admin.reviews.index": {"uri": "reviews", "methods": ["GET", "HEAD"]},
            "admin.dashboard.index": {"uri": "admin", "methods": ["GET", "HEAD"]},
            "admin.users.index": {"uri": "admin\/users", "methods": ["GET", "HEAD"]},
            "admin.users.create": {"uri": "admin\/users\/create", "methods": ["GET", "HEAD"]},
            "admin.users.store": {"uri": "admin\/users", "methods": ["POST"]},
            "admin.users.edit": {
                "uri": "admin\/users\/{user}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"user": "id"}
            },
            "admin.users.update": {
                "uri": "admin\/users\/{user}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"user": "id"}
            },
            "admin.users.disable": {
                "uri": "admin\/users\/{user}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"user": "id"}
            },
            "admin.users.enable": {
                "uri": "admin\/users\/{user}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"user": "id"}
            },
            "api.users.index": {"uri": "api\/users", "methods": ["GET", "HEAD"]},
            "login": {"uri": "login", "methods": ["GET", "HEAD"]},
            "logout": {"uri": "logout", "methods": ["GET", "HEAD"]},
            "register": {"uri": "register", "methods": ["GET", "HEAD"]},
            "password.request": {"uri": "password\/reset", "methods": ["GET", "HEAD"]},
            "password.email": {"uri": "password\/email", "methods": ["POST"]},
            "password.reset": {"uri": "password\/reset\/{token}", "methods": ["GET", "HEAD"]},
            "password.update": {"uri": "password\/reset", "methods": ["POST"]},
            "password.confirm": {"uri": "password\/confirm", "methods": ["GET", "HEAD"]},
            "admin.countries.index": {"uri": "admin\/countries", "methods": ["GET", "HEAD"]},
            "admin.countries.edit": {
                "uri": "admin\/countries\/{country}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"country": "id"}
            },
            "admin.countries.update": {
                "uri": "admin\/countries\/{country}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"country": "id"}
            },
            "api.countries.index": {"uri": "api\/countries", "methods": ["GET", "HEAD"]},
            "admin.settings.index": {"uri": "admin\/settings", "methods": ["GET", "HEAD"]},
            "admin.settings.edit": {
                "uri": "admin\/settings\/{setting}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"setting": "id"}
            },
            "admin.settings.update": {
                "uri": "admin\/settings\/{setting}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"setting": "id"}
            },
            "api.settings.index": {"uri": "api\/settings", "methods": ["GET", "HEAD"]},
            "api.doctors.index": {"uri": "api\/doctors", "methods": ["GET", "HEAD"]},
            "api.doctors.working.hours": {"uri": "api\/doctors\/{doctor}\/working_hours", "methods": ["GET", "HEAD"]},
            "admin.doctors.index": {"uri": "admin\/doctors", "methods": ["GET", "HEAD"]},
            "admin.doctors.create": {"uri": "admin\/doctors\/create", "methods": ["GET", "HEAD"]},
            "admin.doctors.store": {"uri": "admin\/doctors", "methods": ["POST"]},
            "admin.doctors.edit": {
                "uri": "admin\/doctors\/{doctor}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"doctor": "id"}
            },
            "admin.doctors.update": {
                "uri": "admin\/doctors\/{doctor}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"doctor": "id"}
            },
            "admin.doctors.disable": {
                "uri": "admin\/doctors\/{doctor}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"doctor": "id"}
            },
            "admin.doctors.enable": {
                "uri": "admin\/doctors\/{doctor}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"doctor": "id"}
            },
            "admin.": {"uri": "admin\/ajax-SpecificityById", "methods": ["GET", "HEAD"]},
            "web.doctors.index": {"uri": "list\/doctors", "methods": ["GET", "HEAD"]},
            "web.doctors.details": {"uri": "doctors\/{slug?}", "methods": ["GET", "HEAD"]},
            "api.doctors.list": {"uri": "api\/doctors\/list", "methods": ["GET", "HEAD"]},
            "api.leads.index": {"uri": "api\/leads", "methods": ["GET", "HEAD"]},
            "admin.leads.index": {"uri": "admin\/leads", "methods": ["GET", "HEAD"]},
            "admin.leads.edit": {
                "uri": "admin\/leads\/{lead}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"lead": "id"}
            },
            "admin.leads.update": {
                "uri": "admin\/leads\/{lead}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"lead": "id"}
            },
            "admin.leads.confirmed": {
                "uri": "admin\/leads\/{lead}\/confirmed",
                "methods": ["GET", "HEAD"],
                "bindings": {"lead": "id"}
            },
            "admin.leads.unconfirmed": {
                "uri": "admin\/leads\/{lead}\/unconfirmed",
                "methods": ["GET", "HEAD"],
                "bindings": {"lead": "id"}
            },
            "admin.leads.winner": {
                "uri": "admin\/leads\/{lead}\/winner",
                "methods": ["GET", "HEAD"],
                "bindings": {"lead": "id"}
            },
            "admin.leads.export": {"uri": "admin\/export-leads", "methods": ["GET", "HEAD"]},
            "api.leads.store": {"uri": "api\/leads", "methods": ["POST"]},
            "web.leads.index": {"uri": "page\/installment", "methods": ["GET", "HEAD"]},
            "web.leads.store": {"uri": "page\/installment", "methods": ["POST"]},
            "web.leads.thanks": {"uri": "page\/installment-thanks", "methods": ["GET", "HEAD"]},
            "web.leads.freeservices": {"uri": "page\/free-appointment", "methods": ["GET", "HEAD"]},
            "web.leads.store-free": {"uri": "page\/store-free-appointment", "methods": ["POST"]},
            "web.leads.freethanks": {"uri": "page\/free-appointment-thanks", "methods": ["GET", "HEAD"]},
            "web.leads.rate": {"uri": "page\/rate", "methods": ["GET", "HEAD"]},
            "web.leads.store-rate": {"uri": "store\/rate", "methods": ["POST"]},
            "web.leads.ratethanks": {"uri": "rate\/thanks", "methods": ["GET", "HEAD"]},
            "api.services.index": {"uri": "api\/appointment", "methods": ["GET", "HEAD"]},
            "admin.services.index": {"uri": "admin\/appointment", "methods": ["GET", "HEAD"]},
            "admin.services.create": {"uri": "admin\/appointment\/create", "methods": ["GET", "HEAD"]},
            "admin.services.store": {"uri": "admin\/appointment", "methods": ["POST"]},
            "admin.services.edit": {
                "uri": "admin\/appointment\/{service}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"service": "id"}
            },
            "admin.services.update": {
                "uri": "admin\/appointment\/{service}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"service": "id"}
            },
            "admin.services.disable": {
                "uri": "admin\/appointment\/{service}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"service": "id"}
            },
            "admin.services.enable": {
                "uri": "admin\/appointment\/{service}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"service": "id"}
            },
            "admin.services.delete": {
                "uri": "admin\/appointment\/{service}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"service": "id"}
            },
            "web.subservices.details": {"uri": "service\/{slug?}", "methods": ["GET", "HEAD"]},
            "api.services.specificities": {
                "uri": "{lang}\/api\/specificitiesByServices\/{service}",
                "methods": ["GET", "HEAD"]
            },
            "api.services.list": {"uri": "api\/appointment\/list", "methods": ["GET", "HEAD"]},
            "api.offers.index": {"uri": "api\/offers", "methods": ["GET", "HEAD"]},
            "api.offer.branches.index": {"uri": "api\/offer-branches", "methods": ["GET", "HEAD"]},
            "api.offer-bookings.index": {"uri": "api\/offer-bookings", "methods": ["GET", "HEAD"]},
            "admin.offer-branches.index": {"uri": "admin\/offer-branches", "methods": ["GET", "HEAD"]},
            "admin.offer-branches.create": {"uri": "admin\/offer-branches\/create", "methods": ["GET", "HEAD"]},
            "admin.offer-branches.store": {"uri": "admin\/offer-branches", "methods": ["POST"]},
            "admin.offer-branches.edit": {
                "uri": "admin\/offer-branches\/{offer_branch}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"offer_branch": "id"}
            },
            "admin.offer-branches.update": {
                "uri": "admin\/offer-branches\/{offer_branch}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"offer_branch": "id"}
            },
            "admin.offer-branches.disable": {
                "uri": "admin\/offer-branches\/{offerBranche}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"offerBranche": "id"}
            },
            "admin.offer-branches.enable": {
                "uri": "admin\/offer-branches\/{offerBranche}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"offerBranche": "id"}
            },
            "admin.offer-bookings.index": {"uri": "admin\/offer-bookings", "methods": ["GET", "HEAD"]},
            "admin.offer-bookings.edit": {
                "uri": "admin\/offer-bookings\/{offer_booking}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"offer_booking": "id"}
            },
            "admin.offer-bookings.update": {
                "uri": "admin\/offer-bookings\/{offer_booking}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"offer_booking": "id"}
            },
            "admin.offer-bookings.export": {"uri": "admin\/export-offer-bookings", "methods": ["GET", "HEAD"]},
            "web.offers.index": {"uri": "page\/offers", "methods": ["GET", "HEAD"]},
            "web.offers.lists": {"uri": "page\/offers\/{slug?}", "methods": ["GET", "HEAD"]},
            "web.offers.book": {"uri": "page\/offer-book\/{id?}", "methods": ["GET", "HEAD"]},
            "web.offer-booking.store": {"uri": "page\/offer-book-store", "methods": ["POST"]},
            "web.bookings.payment": {"uri": "page\/payment\/{referal_code?}", "methods": ["GET", "HEAD"]},
            "web.offers.thanks": {
                "uri": "page\/offer-thanks",
                "methods": ["GET", "HEAD", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"]
            },
            "web.payment.type": {"uri": "page\/payment\/type", "methods": ["GET", "HEAD"]},
            "web.offers.installment": {
                "uri": "page\/offer-installment",
                "methods": ["GET", "HEAD", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"]
            },
            "web.offers.installment.thanks": {
                "uri": "page\/offer\/installment-thanks",
                "methods": ["GET", "HEAD", "POST", "PUT", "PATCH", "DELETE", "OPTIONS"]
            },
            "web.offers.terms": {"uri": "offers\/terms-and-conditions", "methods": ["GET", "HEAD"]},
            "admin.offers.index": {"uri": "admin\/offers", "methods": ["GET", "HEAD"]},
            "admin.offers.create": {"uri": "admin\/offers\/create", "methods": ["GET", "HEAD"]},
            "admin.offers.store": {"uri": "admin\/offers", "methods": ["POST"]},
            "admin.offers.edit": {
                "uri": "admin\/offers\/{offer}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"offer": "id"}
            },
            "admin.offers.update": {
                "uri": "admin\/offers\/{offer}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"offer": "id"}
            },
            "admin.offers.disable": {
                "uri": "admin\/offers\/{offer}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"offer": "id"}
            },
            "admin.offers.enable": {
                "uri": "admin\/offers\/{offer}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"offer": "id"}
            },
            "api.branches.index": {"uri": "api\/branches", "methods": ["GET", "HEAD"]},
            "api.branches.specificities": {
                "uri": "{lang}\/api\/branches\/specificities\/{branche}",
                "methods": ["GET", "HEAD"]
            },
            "api.branches.services": {"uri": "{lang}\/api\/branchesByservices\/{service}", "methods": ["GET", "HEAD"]},
            "admin.branches.index": {"uri": "admin\/branches", "methods": ["GET", "HEAD"]},
            "admin.branches.create": {"uri": "admin\/branches\/create", "methods": ["GET", "HEAD"]},
            "admin.branches.store": {"uri": "admin\/branches", "methods": ["POST"]},
            "admin.branches.edit": {
                "uri": "admin\/branches\/{branche}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"branche": "id"}
            },
            "admin.branches.update": {
                "uri": "admin\/branches\/{branche}",
                "methods": ["PUT"],
                "bindings": {"branche": "id"}
            },
            "admin.branches.disable": {
                "uri": "admin\/branches\/{branche}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"branche": "id"}
            },
            "admin.branches.enable": {
                "uri": "admin\/branches\/{branche}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"branche": "id"}
            },
            "admin.branches.delete": {
                "uri": "admin\/branches\/{branche}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"branche": "id"}
            },
            "web.branches.index": {"uri": "list\/branches", "methods": ["GET", "HEAD"]},
            "api.branches.doctors": {
                "uri": "{lang}\/api\/branches\/doctors\/{service}\/{branche}",
                "methods": ["GET", "HEAD"]
            },
            "admin.specificities.index": {"uri": "admin\/specificities", "methods": ["GET", "HEAD"]},
            "admin.specificities.create": {"uri": "admin\/specificities\/create", "methods": ["GET", "HEAD"]},
            "admin.specificities.store": {"uri": "admin\/specificities", "methods": ["POST"]},
            "admin.specificities.edit": {
                "uri": "admin\/specificities\/{specificity}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"Specificity": "id"}
            },
            "admin.specificities.update": {
                "uri": "admin\/specificities\/{specificity}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"specificity": "id"}
            },
            "admin.specificities.disable": {
                "uri": "admin\/specificities\/{specificity}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"specificity": "id"}
            },
            "admin.specificities.enable": {
                "uri": "admin\/specificities\/{specificity}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"specificity": "id"}
            },
            "admin.specificities.delete": {
                "uri": "admin\/specificities\/{specificity}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"specificity": "id"}
            },
            "admin.categories.index": {"uri": "admin\/categories", "methods": ["GET", "HEAD"]},
            "admin.categories.create": {"uri": "admin\/categories\/create", "methods": ["GET", "HEAD"]},
            "admin.categories.store": {"uri": "admin\/categories", "methods": ["POST"]},
            "admin.categories.edit": {
                "uri": "admin\/categories\/{category}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"category": "id"}
            },
            "admin.categories.update": {
                "uri": "admin\/categories\/{category}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"category": "id"}
            },
            "admin.categories.disable": {
                "uri": "admin\/categories\/{category}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"category": "id"}
            },
            "admin.categories.enable": {
                "uri": "admin\/categories\/{category}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"category": "id"}
            },
            "admin.categories.delete": {
                "uri": "admin\/categories\/{category}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"category": "id"}
            },
            "api.specificities.index": {"uri": "api\/specificities", "methods": ["GET", "HEAD"]},
            "api.categories.index": {"uri": "api\/categories", "methods": ["GET", "HEAD"]},
            "web.specialities.index": {"uri": "{locale?}\/specialities", "methods": ["GET", "HEAD"]},
            "api.specificities.show": {"uri": "{lang}\/api\/specificities\/{specificity}", "methods": ["GET", "HEAD"]},
            "api.specificities.doctors": {
                "uri": "{lang}\/api\/specificities\/doctors\/{service}\/{branche}\/{specificity}",
                "methods": ["GET", "HEAD"]
            },
            "api.specificities.list": {"uri": "api\/specificities\/list", "methods": ["GET", "HEAD"]},
            "api.bookings.index": {"uri": "api\/bookings", "methods": ["GET", "HEAD"]},
            "admin.bookings.index": {"uri": "admin\/bookings", "methods": ["GET", "HEAD"]},
            "admin.bookings.edit": {
                "uri": "admin\/bookings\/{booking}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"booking": "id"}
            },
            "admin.bookings.update": {
                "uri": "admin\/bookings\/{booking}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"booking": "id"}
            },
            "admin.bookings.export": {"uri": "admin\/export-bookings", "methods": ["GET", "HEAD"]},
            "api.bookings.store": {"uri": "api\/bookings", "methods": ["POST"]},
            "web.booking.store": {"uri": "store", "methods": ["POST"]},
            "web.bookings.confirm": {"uri": "confirm\/{id}", "methods": ["GET", "HEAD"]},
            "web.discount-booking.check.availability": {
                "uri": "validate-available-booking",
                "methods": ["GET", "HEAD"]
            },
            "admin.blogs.index": {"uri": "admin\/blogs", "methods": ["GET", "HEAD"]},
            "admin.blogs.create": {"uri": "admin\/blogs\/create", "methods": ["GET", "HEAD"]},
            "admin.blogs.store": {"uri": "admin\/blogs", "methods": ["POST"]},
            "admin.blogs.edit": {
                "uri": "admin\/blogs\/{blog}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"Blog": "id"}
            },
            "admin.blogs.update": {
                "uri": "admin\/blogs\/{blog}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"blog": "id"}
            },
            "admin.blogs.disable": {
                "uri": "admin\/blogs\/{blog}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Blog": "id"}
            },
            "admin.blogs.enable": {
                "uri": "admin\/blogs\/{blog}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Blog": "id"}
            },
            "admin.blog-categories.index": {"uri": "admin\/blog-categories", "methods": ["GET", "HEAD"]},
            "admin.blog-categories.create": {"uri": "admin\/blog-categories\/create", "methods": ["GET", "HEAD"]},
            "admin.blog-categories.store": {"uri": "admin\/blog-categories", "methods": ["POST"]},
            "admin.blog-categories.edit": {
                "uri": "admin\/blog-categories\/{blog_category}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"blogCategory": "id"}
            },
            "admin.blog-categories.update": {
                "uri": "admin\/blog-categories\/{blog_category}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"blogCategory": "id"}
            },
            "api.blogs.index": {"uri": "api\/blogs", "methods": ["GET", "HEAD"]},
            "api.blog.categories.index": {"uri": "api\/blog-categories", "methods": ["GET", "HEAD"]},
            "web.advices.comment": {"uri": "advices\/comment", "methods": ["POST"]},
            "api.blogs.list": {"uri": "api\/blogs\/list", "methods": ["GET", "HEAD"]},
            "admin.comments.index": {"uri": "admin\/comments", "methods": ["GET", "HEAD"]},
            "admin.comments.create": {"uri": "admin\/comments\/create", "methods": ["GET", "HEAD"]},
            "admin.comments.store": {"uri": "admin\/comments", "methods": ["POST"]},
            "admin.comments.edit": {"uri": "admin\/comments\/{comment}\/edit", "methods": ["GET", "HEAD"]},
            "admin.comments.update": {"uri": "admin\/comments\/{comment}", "methods": ["PUT", "PATCH"]},
            "admin.comments.approve": {
                "uri": "admin\/comments\/{comment}\/approve",
                "methods": ["GET", "HEAD"],
                "bindings": {"comment": "id"}
            },
            "admin.comments.disapprove": {
                "uri": "admin\/comments\/{comment}\/disapprove",
                "methods": ["GET", "HEAD"],
                "bindings": {"comment": "id"}
            },
            "api.comments.index": {"uri": "api\/comments", "methods": ["GET", "HEAD"]},
            "api.tickets.index": {"uri": "api\/tickets", "methods": ["GET", "HEAD"]},
            "admin.tickets.index": {"uri": "admin\/tickets", "methods": ["GET", "HEAD"]},
            "admin.tickets.edit": {
                "uri": "admin\/tickets\/{ticket}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"ticket": "id"}
            },
            "admin.tickets.update": {
                "uri": "admin\/tickets\/{ticket}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"ticket": "id"}
            },
            "admin.tickets.export": {"uri": "admin\/export-tickets", "methods": ["GET", "HEAD"]},
            "api.tickets.store": {"uri": "api\/tickets", "methods": ["POST"]},
            "api.partners.index": {"uri": "api\/partners", "methods": ["GET", "HEAD"]},
            "admin.partners.index": {"uri": "admin\/partners", "methods": ["GET", "HEAD"]},
            "admin.partners.create": {"uri": "admin\/partners\/create", "methods": ["GET", "HEAD"]},
            "admin.partners.store": {"uri": "admin\/partners", "methods": ["POST"]},
            "admin.partners.edit": {
                "uri": "admin\/partners\/{partner}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"partner": "id"}
            },
            "admin.partners.update": {
                "uri": "admin\/partners\/{partner}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"partner": "id"}
            },
            "admin.partners.disable": {
                "uri": "admin\/partners\/{partner}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"partner": "id"}
            },
            "admin.partners.enable": {
                "uri": "admin\/partners\/{partner}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"partner": "id"}
            },
            "admin.departments.index": {"uri": "admin\/departments", "methods": ["GET", "HEAD"]},
            "admin.departments.create": {"uri": "admin\/departments\/create", "methods": ["GET", "HEAD"]},
            "admin.departments.store": {"uri": "admin\/departments", "methods": ["POST"]},
            "admin.departments.edit": {
                "uri": "admin\/departments\/{department}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"department": "id"}
            },
            "admin.departments.update": {
                "uri": "admin\/departments\/{department}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"department": "id"}
            },
            "admin.departments.delete": {
                "uri": "admin\/departments\/{department}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"department": "id"}
            },
            "api.departments.index": {"uri": "api\/departments", "methods": ["GET", "HEAD"]},
            "api.jobs.index": {"uri": "api\/jobs", "methods": ["GET", "HEAD"]},
            "admin.jobs.index": {"uri": "admin\/jobs", "methods": ["GET", "HEAD"]},
            "admin.jobs.create": {"uri": "admin\/jobs\/create", "methods": ["GET", "HEAD"]},
            "admin.jobs.store": {"uri": "admin\/jobs", "methods": ["POST"]},
            "admin.jobs.edit": {
                "uri": "admin\/jobs\/{job}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"job": "id"}
            },
            "admin.jobs.update": {"uri": "admin\/jobs\/{job}", "methods": ["PUT"], "bindings": {"job": "id"}},
            "admin.jobs.disable": {
                "uri": "admin\/jobs\/{job}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"job": "id"}
            },
            "admin.jobs.enable": {
                "uri": "admin\/jobs\/{job}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"job": "id"}
            },
            "web.jobs.details": {"uri": "jobs\/{job}", "methods": ["GET", "HEAD"]},
            "web.jobs.apply": {"uri": "jobs\/{job}\/apply", "methods": ["GET", "HEAD"]},
            "web.jobs.store": {"uri": "jobs\/apply", "methods": ["POST"]},
            "api.job.requests.index": {"uri": "api\/job-requests", "methods": ["GET", "HEAD"]},
            "admin.job-requests.index": {"uri": "admin\/job-requests", "methods": ["GET", "HEAD"]},
            "admin.job-requests.edit": {
                "uri": "admin\/job-requests\/{job_request}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"lead": "id"}
            },
            "admin.job-requests.update": {
                "uri": "admin\/job-requests\/{job_request}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"lead": "id"}
            },
            "api.job.requests.store": {"uri": "api\/job-requests", "methods": ["POST"]},
            "api.sliders.index": {"uri": "api\/sliders", "methods": ["GET", "HEAD"]},
            "admin.sliders.index": {"uri": "admin\/sliders", "methods": ["GET", "HEAD"]},
            "admin.sliders.create": {"uri": "admin\/sliders\/create", "methods": ["GET", "HEAD"]},
            "admin.sliders.store": {"uri": "admin\/sliders", "methods": ["POST"]},
            "admin.sliders.edit": {
                "uri": "admin\/sliders\/{slider}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"slider": "id"}
            },
            "admin.sliders.update": {
                "uri": "admin\/sliders\/{slider}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"slider": "id"}
            },
            "admin.sliders.disable": {
                "uri": "admin\/sliders\/{slider}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"slider": "id"}
            },
            "admin.sliders.enable": {
                "uri": "admin\/sliders\/{slider}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"slider": "id"}
            },
            "api.testimonials.index": {"uri": "api\/testimonials", "methods": ["GET", "HEAD"]},
            "admin.testimonials.index": {"uri": "admin\/testimonials", "methods": ["GET", "HEAD"]},
            "admin.testimonials.create": {"uri": "admin\/testimonials\/create", "methods": ["GET", "HEAD"]},
            "admin.testimonials.store": {"uri": "admin\/testimonials", "methods": ["POST"]},
            "admin.testimonials.edit": {
                "uri": "admin\/testimonials\/{testimonial}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"testimonial": "id"}
            },
            "admin.testimonials.update": {
                "uri": "admin\/testimonials\/{testimonial}",
                "methods": ["PUT"],
                "bindings": {"testimonial": "id"}
            },
            "admin.testimonials.disable": {
                "uri": "admin\/testimonials\/{testimonial}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"testimonial": "id"}
            },
            "admin.testimonials.enable": {
                "uri": "admin\/testimonials\/{testimonial}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"testimonial": "id"}
            },
            "api.videos.index": {"uri": "api\/videos", "methods": ["GET", "HEAD"]},
            "admin.videos.index": {"uri": "admin\/videos", "methods": ["GET", "HEAD"]},
            "admin.videos.create": {"uri": "admin\/videos\/create", "methods": ["GET", "HEAD"]},
            "admin.videos.store": {"uri": "admin\/videos", "methods": ["POST"]},
            "admin.videos.edit": {
                "uri": "admin\/videos\/{video}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"video": "id"}
            },
            "admin.videos.update": {
                "uri": "admin\/videos\/{video}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"video": "id"}
            },
            "admin.videos.disable": {
                "uri": "admin\/videos\/{video}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"video": "id"}
            },
            "admin.videos.enable": {
                "uri": "admin\/videos\/{video}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"video": "id"}
            },
            "admin.videos.delete": {
                "uri": "admin\/videos\/{video}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"video": "id"}
            },
            "admin.discounts.index": {"uri": "admin\/discounts", "methods": ["GET", "HEAD"]},
            "admin.discounts.create": {"uri": "admin\/discounts\/create", "methods": ["GET", "HEAD"]},
            "admin.discounts.store": {"uri": "admin\/discounts", "methods": ["POST"]},
            "admin.discounts.edit": {
                "uri": "admin\/discounts\/{discount}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"Discount": "id"}
            },
            "admin.discounts.update": {
                "uri": "admin\/discounts\/{discount}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"discount": "id"}
            },
            "admin.discounts.disable": {
                "uri": "admin\/discounts\/{discount}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Discount": "id"}
            },
            "admin.discounts.enable": {
                "uri": "admin\/discounts\/{discount}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Discount": "id"}
            },
            "admin.discounts-bookings.index": {"uri": "admin\/discounts-bookings", "methods": ["GET", "HEAD"]},
            "admin.discounts-bookings.edit": {
                "uri": "admin\/discounts-bookings\/{discounts_booking}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"discounts_booking": "id"}
            },
            "admin.discounts-bookings.update": {
                "uri": "admin\/discounts-bookings\/{discounts_booking}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"discounts_booking": "id"}
            },
            "admin.discounts-bookings.export": {"uri": "admin\/export-discounts-bookings", "methods": ["GET", "HEAD"]},
            "admin.cards.index": {"uri": "admin\/cards", "methods": ["GET", "HEAD"]},
            "admin.cards.create": {"uri": "admin\/cards\/create", "methods": ["GET", "HEAD"]},
            "admin.cards.store": {"uri": "admin\/cards", "methods": ["POST"]},
            "admin.cards.edit": {
                "uri": "admin\/cards\/{card}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"Card": "id"}
            },
            "admin.cards.update": {
                "uri": "admin\/cards\/{card}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"card": "id"}
            },
            "admin.cards.disable": {
                "uri": "admin\/cards\/{card}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Card": "id"}
            },
            "admin.cards.enable": {
                "uri": "admin\/cards\/{card}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Card": "id"}
            },
            "admin.discount-categories.index": {"uri": "admin\/discount-categories", "methods": ["GET", "HEAD"]},
            "admin.discount-categories.create": {
                "uri": "admin\/discount-categories\/create",
                "methods": ["GET", "HEAD"]
            },
            "admin.discount-categories.store": {"uri": "admin\/discount-categories", "methods": ["POST"]},
            "admin.discount-categories.edit": {
                "uri": "admin\/discount-categories\/{discount_category}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"discountCategory": "id"}
            },
            "admin.discount-categories.update": {
                "uri": "admin\/discount-categories\/{discount_category}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"discountCategory": "id"}
            },
            "api.discounts.index": {"uri": "api\/discounts", "methods": ["GET", "HEAD"]},
            "api.discount.categories.index": {"uri": "api\/discount-categories", "methods": ["GET", "HEAD"]},
            "api.discount-bookings.index": {"uri": "api\/discount-bookings", "methods": ["GET", "HEAD"]},
            "api.cards.index": {"uri": "api\/cards", "methods": ["GET", "HEAD"]},
            "web.discounts.index": {"uri": "page\/discounts-cards", "methods": ["GET", "HEAD"]},
            "web.discounts.details": {"uri": "page\/discounts-cards\/{card}", "methods": ["GET", "HEAD"]},
            "web.discounts.book": {"uri": "page\/discounts-book\/{id?}", "methods": ["GET", "HEAD"]},
            "web.discount-booking.store": {"uri": "page\/discounts-book-store\/{lang?}", "methods": ["POST"]},
            "web.discount-booking.confirm": {"uri": "page\/discounts-confirm\/{id}", "methods": ["GET", "HEAD"]},
            "api.pages.index": {"uri": "api\/pages", "methods": ["GET", "HEAD"]},
            "admin.pages.index": {"uri": "admin\/pages", "methods": ["GET", "HEAD"]},
            "admin.pages.create": {"uri": "admin\/pages\/create", "methods": ["GET", "HEAD"]},
            "admin.pages.store": {"uri": "admin\/pages", "methods": ["POST"]},
            "admin.pages.edit": {
                "uri": "admin\/pages\/{page}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"page": "id"}
            },
            "admin.pages.update": {"uri": "admin\/pages\/{page}", "methods": ["PUT"], "bindings": {"page": "id"}},
            "admin.pages.disable": {
                "uri": "admin\/pages\/{page}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"page": "id"}
            },
            "admin.pages.enable": {
                "uri": "admin\/pages\/{page}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"page": "id"}
            },
            "web.pages.store": {"uri": "page\/contact", "methods": ["POST"]},
            "web.pages.jcia": {"uri": "jcia", "methods": ["GET", "HEAD"]},
            "web.pages.thanks": {"uri": "page\/thanks", "methods": ["GET", "HEAD"]},
            "web.bh.pages.thanks": {"uri": "page\/bh-thanks", "methods": ["GET", "HEAD"]},
            "web.pages.index": {"uri": "page\/{slug}", "methods": ["GET", "HEAD"]},
            "admin.Casings.index": {"uri": "admin\/Casings", "methods": ["GET", "HEAD"]},
            "admin.Casings.create": {"uri": "admin\/Casings\/create", "methods": ["GET", "HEAD"]},
            "admin.Casings.store": {"uri": "admin\/Casings", "methods": ["POST"]},
            "admin.Casings.edit": {
                "uri": "admin\/Casings\/{Casing}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"Casing": "id"}
            },
            "admin.Casings.update": {
                "uri": "admin\/Casings\/{Casing}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"Casing": "id"}
            },
            "admin.Casings.disable": {
                "uri": "admin\/Casings\/{Casing}\/disable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Casing": "id"}
            },
            "admin.Casings.enable": {
                "uri": "admin\/Casings\/{Casing}\/enable",
                "methods": ["GET", "HEAD"],
                "bindings": {"Casing": "id"}
            },
            "admin.Casing-categories.index": {"uri": "admin\/Casing-categories", "methods": ["GET", "HEAD"]},
            "admin.Casing-categories.create": {"uri": "admin\/Casing-categories\/create", "methods": ["GET", "HEAD"]},
            "admin.Casing-categories.store": {"uri": "admin\/Casing-categories", "methods": ["POST"]},
            "admin.Casing-categories.edit": {
                "uri": "admin\/Casing-categories\/{Casing_category}\/edit",
                "methods": ["GET", "HEAD"],
                "bindings": {"Casing_category": "id"}
            },
            "admin.Casing-categories.update": {
                "uri": "admin\/Casing-categories\/{Casing_category}",
                "methods": ["PUT", "PATCH"],
                "bindings": {"Casing_category": "id"}
            },
            "admin.Casing-categories.delete": {
                "uri": "admin\/Casing-categories\/{CasingCategory}\/delete",
                "methods": ["GET", "HEAD"],
                "bindings": {"CasingCategory": "id"}
            },
            "api.Casings.index": {"uri": "api\/Casings", "methods": ["GET", "HEAD"]},
            "api.Casing.categories.index": {"uri": "api\/Casing-categories", "methods": ["GET", "HEAD"]},
            "web.Casings.index": {"uri": "{locale?}\/cases", "methods": ["GET", "HEAD"]}
        }
    };

    !function (t, e) {
        "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = t || self).route = e()
    }(this, function () {
        var t = Object.prototype.hasOwnProperty, e = Array.isArray, r = function () {
            for (var t = [], e = 0; e < 256; ++e) t.push("%" + ((e < 16 ? "0" : "") + e.toString(16)).toUpperCase());
            return t
        }(), n = function (t, e) {
            for (var r = e && e.plainObjects ? Object.create(null) : {}, n = 0; n < t.length; ++n) void 0 !== t[n] && (r[n] = t[n]);
            return r
        }, o = {
            arrayToObject: n, assign: function (t, e) {
                return Object.keys(e).reduce(function (t, r) {
                    return t[r] = e[r], t
                }, t)
            }, combine: function (t, e) {
                return [].concat(t, e)
            }, compact: function (t) {
                for (var r = [{
                    obj: {o: t},
                    prop: "o"
                }], n = [], o = 0; o < r.length; ++o) for (var i = r[o], u = i.obj[i.prop], f = Object.keys(u), a = 0; a < f.length; ++a) {
                    var s = f[a], c = u[s];
                    "object" == typeof c && null !== c && -1 === n.indexOf(c) && (r.push({obj: u, prop: s}), n.push(c))
                }
                return function (t) {
                    for (; t.length > 1;) {
                        var r = t.pop(), n = r.obj[r.prop];
                        if (e(n)) {
                            for (var o = [], i = 0; i < n.length; ++i) void 0 !== n[i] && o.push(n[i]);
                            r.obj[r.prop] = o
                        }
                    }
                }(r), t
            }, decode: function (t, e, r) {
                var n = t.replace(/\+/g, " ");
                if ("iso-8859-1" === r) return n.replace(/%[0-9a-f]{2}/gi, unescape);
                try {
                    return decodeURIComponent(n)
                } catch (t) {
                    return n
                }
            }, encode: function (t, e, n) {
                if (0 === t.length) return t;
                var o = t;
                if ("symbol" == typeof t ? o = Symbol.prototype.toString.call(t) : "string" != typeof t && (o = String(t)), "iso-8859-1" === n) return escape(o).replace(/%u[0-9a-f]{4}/gi, function (t) {
                    return "%26%23" + parseInt(t.slice(2), 16) + "%3B"
                });
                for (var i = "", u = 0; u < o.length; ++u) {
                    var f = o.charCodeAt(u);
                    45 === f || 46 === f || 95 === f || 126 === f || f >= 48 && f <= 57 || f >= 65 && f <= 90 || f >= 97 && f <= 122 ? i += o.charAt(u) : f < 128 ? i += r[f] : f < 2048 ? i += r[192 | f >> 6] + r[128 | 63 & f] : f < 55296 || f >= 57344 ? i += r[224 | f >> 12] + r[128 | f >> 6 & 63] + r[128 | 63 & f] : (f = 65536 + ((1023 & f) << 10 | 1023 & o.charCodeAt(u += 1)), i += r[240 | f >> 18] + r[128 | f >> 12 & 63] + r[128 | f >> 6 & 63] + r[128 | 63 & f])
                }
                return i
            }, isBuffer: function (t) {
                return !(!t || "object" != typeof t || !(t.constructor && t.constructor.isBuffer && t.constructor.isBuffer(t)))
            }, isRegExp: function (t) {
                return "[object RegExp]" === Object.prototype.toString.call(t)
            }, maybeMap: function (t, r) {
                if (e(t)) {
                    for (var n = [], o = 0; o < t.length; o += 1) n.push(r(t[o]));
                    return n
                }
                return r(t)
            }, merge: function r(o, i, u) {
                if (!i) return o;
                if ("object" != typeof i) {
                    if (e(o)) o.push(i); else {
                        if (!o || "object" != typeof o) return [o, i];
                        (u && (u.plainObjects || u.allowPrototypes) || !t.call(Object.prototype, i)) && (o[i] = !0)
                    }
                    return o
                }
                if (!o || "object" != typeof o) return [o].concat(i);
                var f = o;
                return e(o) && !e(i) && (f = n(o, u)), e(o) && e(i) ? (i.forEach(function (e, n) {
                    if (t.call(o, n)) {
                        var i = o[n];
                        i && "object" == typeof i && e && "object" == typeof e ? o[n] = r(i, e, u) : o.push(e)
                    } else o[n] = e
                }), o) : Object.keys(i).reduce(function (e, n) {
                    var o = i[n];
                    return e[n] = t.call(e, n) ? r(e[n], o, u) : o, e
                }, f)
            }
        }, i = String.prototype.replace, u = /%20/g, f = {RFC1738: "RFC1738", RFC3986: "RFC3986"}, a = o.assign({
            default: f.RFC3986, formatters: {
                RFC1738: function (t) {
                    return i.call(t, u, "+")
                }, RFC3986: function (t) {
                    return String(t)
                }
            }
        }, f), s = Object.prototype.hasOwnProperty, c = {
            brackets: function (t) {
                return t + "[]"
            }, comma: "comma", indices: function (t, e) {
                return t + "[" + e + "]"
            }, repeat: function (t) {
                return t
            }
        }, l = Array.isArray, p = Array.prototype.push, d = function (t, e) {
            p.apply(t, l(e) ? e : [e])
        }, y = Date.prototype.toISOString, h = a.default, b = {
            addQueryPrefix: !1,
            allowDots: !1,
            charset: "utf-8",
            charsetSentinel: !1,
            delimiter: "&",
            encode: !0,
            encoder: o.encode,
            encodeValuesOnly: !1,
            format: h,
            formatter: a.formatters[h],
            indices: !1,
            serializeDate: function (t) {
                return y.call(t)
            },
            skipNulls: !1,
            strictNullHandling: !1
        }, v = function t(e, r, n, i, u, f, a, s, c, p, y, h, v) {
            var m, g = e;
            if ("function" == typeof a ? g = a(r, g) : g instanceof Date ? g = p(g) : "comma" === n && l(g) && (g = o.maybeMap(g, function (t) {
                return t instanceof Date ? p(t) : t
            }).join(",")), null === g) {
                if (i) return f && !h ? f(r, b.encoder, v, "key") : r;
                g = ""
            }
            if ("string" == typeof (m = g) || "number" == typeof m || "boolean" == typeof m || "symbol" == typeof m || "bigint" == typeof m || o.isBuffer(g)) return f ? [y(h ? r : f(r, b.encoder, v, "key")) + "=" + y(f(g, b.encoder, v, "value"))] : [y(r) + "=" + y(String(g))];
            var w, j = [];
            if (void 0 === g) return j;
            if (l(a)) w = a; else {
                var O = Object.keys(g);
                w = s ? O.sort(s) : O
            }
            for (var E = 0; E < w.length; ++E) {
                var S = w[E], N = g[S];
                if (!u || null !== N) {
                    var R = l(g) ? "function" == typeof n ? n(r, S) : r : r + (c ? "." + S : "[" + S + "]");
                    d(j, t(N, R, n, i, u, f, a, s, c, p, y, h, v))
                }
            }
            return j
        }, m = Object.prototype.hasOwnProperty, g = Array.isArray, w = {
            allowDots: !1,
            allowPrototypes: !1,
            arrayLimit: 20,
            charset: "utf-8",
            charsetSentinel: !1,
            comma: !1,
            decoder: o.decode,
            delimiter: "&",
            depth: 5,
            ignoreQueryPrefix: !1,
            interpretNumericEntities: !1,
            parameterLimit: 1e3,
            parseArrays: !0,
            plainObjects: !1,
            strictNullHandling: !1
        }, j = function (t) {
            return t.replace(/&#(\d+);/g, function (t, e) {
                return String.fromCharCode(parseInt(e, 10))
            })
        }, O = function (t, e) {
            return t && "string" == typeof t && e.comma && t.indexOf(",") > -1 ? t.split(",") : t
        }, E = function (t, e, r, n) {
            if (t) {
                var o = r.allowDots ? t.replace(/\.([^.[]+)/g, "[$1]") : t, i = /(\[[^[\]]*])/g,
                    u = r.depth > 0 && /(\[[^[\]]*])/.exec(o), f = u ? o.slice(0, u.index) : o, a = [];
                if (f) {
                    if (!r.plainObjects && m.call(Object.prototype, f) && !r.allowPrototypes) return;
                    a.push(f)
                }
                for (var s = 0; r.depth > 0 && null !== (u = i.exec(o)) && s < r.depth;) {
                    if (s += 1, !r.plainObjects && m.call(Object.prototype, u[1].slice(1, -1)) && !r.allowPrototypes) return;
                    a.push(u[1])
                }
                return u && a.push("[" + o.slice(u.index) + "]"), function (t, e, r, n) {
                    for (var o = n ? e : O(e, r), i = t.length - 1; i >= 0; --i) {
                        var u, f = t[i];
                        if ("[]" === f && r.parseArrays) u = [].concat(o); else {
                            u = r.plainObjects ? Object.create(null) : {};
                            var a = "[" === f.charAt(0) && "]" === f.charAt(f.length - 1) ? f.slice(1, -1) : f,
                                s = parseInt(a, 10);
                            r.parseArrays || "" !== a ? !isNaN(s) && f !== a && String(s) === a && s >= 0 && r.parseArrays && s <= r.arrayLimit ? (u = [])[s] = o : u[a] = o : u = {0: o}
                        }
                        o = u
                    }
                    return o
                }(a, e, r, n)
            }
        }, S = function (t, e) {
            var r = function (t) {
                if (!t) return w;
                if (null != t.decoder && "function" != typeof t.decoder) throw new TypeError("Decoder has to be a function.");
                if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset) throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined");
                return {
                    allowDots: void 0 === t.allowDots ? w.allowDots : !!t.allowDots,
                    allowPrototypes: "boolean" == typeof t.allowPrototypes ? t.allowPrototypes : w.allowPrototypes,
                    arrayLimit: "number" == typeof t.arrayLimit ? t.arrayLimit : w.arrayLimit,
                    charset: void 0 === t.charset ? w.charset : t.charset,
                    charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : w.charsetSentinel,
                    comma: "boolean" == typeof t.comma ? t.comma : w.comma,
                    decoder: "function" == typeof t.decoder ? t.decoder : w.decoder,
                    delimiter: "string" == typeof t.delimiter || o.isRegExp(t.delimiter) ? t.delimiter : w.delimiter,
                    depth: "number" == typeof t.depth || !1 === t.depth ? +t.depth : w.depth,
                    ignoreQueryPrefix: !0 === t.ignoreQueryPrefix,
                    interpretNumericEntities: "boolean" == typeof t.interpretNumericEntities ? t.interpretNumericEntities : w.interpretNumericEntities,
                    parameterLimit: "number" == typeof t.parameterLimit ? t.parameterLimit : w.parameterLimit,
                    parseArrays: !1 !== t.parseArrays,
                    plainObjects: "boolean" == typeof t.plainObjects ? t.plainObjects : w.plainObjects,
                    strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : w.strictNullHandling
                }
            }(e);
            if ("" === t || null == t) return r.plainObjects ? Object.create(null) : {};
            for (var n = "string" == typeof t ? function (t, e) {
                var r, n = {},
                    i = (e.ignoreQueryPrefix ? t.replace(/^\?/, "") : t).split(e.delimiter, Infinity === e.parameterLimit ? void 0 : e.parameterLimit),
                    u = -1, f = e.charset;
                if (e.charsetSentinel) for (r = 0; r < i.length; ++r) 0 === i[r].indexOf("utf8=") && ("utf8=%E2%9C%93" === i[r] ? f = "utf-8" : "utf8=%26%2310003%3B" === i[r] && (f = "iso-8859-1"), u = r, r = i.length);
                for (r = 0; r < i.length; ++r) if (r !== u) {
                    var a, s, c = i[r], l = c.indexOf("]="), p = -1 === l ? c.indexOf("=") : l + 1;
                    -1 === p ? (a = e.decoder(c, w.decoder, f, "key"), s = e.strictNullHandling ? null : "") : (a = e.decoder(c.slice(0, p), w.decoder, f, "key"), s = o.maybeMap(O(c.slice(p + 1), e), function (t) {
                        return e.decoder(t, w.decoder, f, "value")
                    })), s && e.interpretNumericEntities && "iso-8859-1" === f && (s = j(s)), c.indexOf("[]=") > -1 && (s = g(s) ? [s] : s), n[a] = m.call(n, a) ? o.combine(n[a], s) : s
                }
                return n
            }(t, r) : t, i = r.plainObjects ? Object.create(null) : {}, u = Object.keys(n), f = 0; f < u.length; ++f) {
                var a = u[f], s = E(a, n[a], r, "string" == typeof t);
                i = o.merge(i, s, r)
            }
            return o.compact(i)
        };

        class N {
            constructor(t, e, r) {
                var n;
                this.name = t, this.definition = e, this.bindings = null != (n = e.bindings) ? n : {}, this.config = r
            }

            get template() {
                return ((this.config.absolute ? this.definition.domain ? "" + this.config.url.match(/^\w+:\/\//)[0] + this.definition.domain + (this.config.port ? ":" + this.config.port : "") : this.config.url : "") + "/" + this.definition.uri).replace(/\/+$/, "")
            }

            get parameterSegments() {
                var t, e;
                return null != (t = null === (e = this.template.match(/{[^}?]+\??}/g)) || void 0 === e ? void 0 : e.map(t => ({
                    name: t.replace(/{|\??}/g, ""),
                    required: !/\?}$/.test(t)
                }))) ? t : []
            }

            matchesUrl(t) {
                if (!this.definition.methods.includes("GET")) return !1;
                const e = this.template.replace(/\/{[^}?]*\?}/g, "(/[^/?]+)?").replace(/{[^}]+}/g, "[^/?]+").replace(/^\w+:\/\//, "");
                return new RegExp("^" + e + "$").test(t.replace(/\/+$/, "").split("?").shift())
            }

            compile(t) {
                return this.parameterSegments.length ? this.template.replace(/{([^}?]+)\??}/g, (e, r) => {
                    var n;
                    if ([null, void 0].includes(t[r]) && this.parameterSegments.find(({name: t}) => t === r).required) throw new Error("Ziggy error: '" + r + "' parameter is required for route '" + this.name + "'.");
                    return encodeURIComponent(null != (n = t[r]) ? n : "")
                }).replace(/\/+$/, "") : this.template
            }
        }

        class R extends String {
            constructor(t, e, r = !0, n) {
                var o;
                if (super(), this.t = null != (o = null != n ? n : Ziggy) ? o : null === globalThis || void 0 === globalThis ? void 0 : globalThis.Ziggy, this.t = {
                    ...this.t,
                    absolute: r
                }, t) {
                    if (!this.t.routes[t]) throw new Error("Ziggy error: route '" + t + "' is not in the route list.");
                    this.i = new N(t, this.t.routes[t], this.t), this.u = this.s(e)
                }
            }

            toString() {
                const t = Object.keys(this.u).filter(t => !this.i.parameterSegments.some(({name: e}) => e === t)).filter(t => "_query" !== t).reduce((t, e) => ({
                    ...t,
                    [e]: this.u[e]
                }), {});
                return this.i.compile(this.u) + function (t, e) {
                    var r, n = t, o = function (t) {
                        if (!t) return b;
                        if (null != t.encoder && "function" != typeof t.encoder) throw new TypeError("Encoder has to be a function.");
                        var e = t.charset || b.charset;
                        if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset) throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined");
                        var r = a.default;
                        if (void 0 !== t.format) {
                            if (!s.call(a.formatters, t.format)) throw new TypeError("Unknown format option provided.");
                            r = t.format
                        }
                        var n = a.formatters[r], o = b.filter;
                        return ("function" == typeof t.filter || l(t.filter)) && (o = t.filter), {
                            addQueryPrefix: "boolean" == typeof t.addQueryPrefix ? t.addQueryPrefix : b.addQueryPrefix,
                            allowDots: void 0 === t.allowDots ? b.allowDots : !!t.allowDots,
                            charset: e,
                            charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : b.charsetSentinel,
                            delimiter: void 0 === t.delimiter ? b.delimiter : t.delimiter,
                            encode: "boolean" == typeof t.encode ? t.encode : b.encode,
                            encoder: "function" == typeof t.encoder ? t.encoder : b.encoder,
                            encodeValuesOnly: "boolean" == typeof t.encodeValuesOnly ? t.encodeValuesOnly : b.encodeValuesOnly,
                            filter: o,
                            formatter: n,
                            serializeDate: "function" == typeof t.serializeDate ? t.serializeDate : b.serializeDate,
                            skipNulls: "boolean" == typeof t.skipNulls ? t.skipNulls : b.skipNulls,
                            sort: "function" == typeof t.sort ? t.sort : null,
                            strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : b.strictNullHandling
                        }
                    }(e);
                    "function" == typeof o.filter ? n = (0, o.filter)("", n) : l(o.filter) && (r = o.filter);
                    var i = [];
                    if ("object" != typeof n || null === n) return "";
                    var u = c[e && e.arrayFormat in c ? e.arrayFormat : e && "indices" in e ? e.indices ? "indices" : "repeat" : "indices"];
                    r || (r = Object.keys(n)), o.sort && r.sort(o.sort);
                    for (var f = 0; f < r.length; ++f) {
                        var p = r[f];
                        o.skipNulls && null === n[p] || d(i, v(n[p], p, u, o.strictNullHandling, o.skipNulls, o.encode ? o.encoder : null, o.filter, o.sort, o.allowDots, o.serializeDate, o.formatter, o.encodeValuesOnly, o.charset))
                    }
                    var y = i.join(o.delimiter), h = !0 === o.addQueryPrefix ? "?" : "";
                    return o.charsetSentinel && (h += "iso-8859-1" === o.charset ? "utf8=%26%2310003%3B&" : "utf8=%E2%9C%93&"), y.length > 0 ? h + y : ""
                }({...t, ...this.u._query}, {
                    addQueryPrefix: !0,
                    arrayFormat: "indices",
                    encodeValuesOnly: !0,
                    skipNulls: !0,
                    encoder: (t, e) => "boolean" == typeof t ? Number(t) : e(t)
                })
            }

            current(t, e) {
                const r = this.t.absolute ? window.location.host + window.location.pathname : window.location.pathname.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""), "").replace(/^\/+/, "/"), [n, o] = Object.entries(this.t.routes).find(([e, n]) => new N(t, n, this.t).matchesUrl(r)) || [void 0, void 0];
                if (!t) return n;
                const i = new RegExp("^" + t.replace(".", "\\.").replace("*", ".*") + "$").test(n);
                if ([null, void 0].includes(e) || !i) return i;
                const u = new N(n, o, this.t);
                e = this.s(e, u);
                const f = this.l(o);
                return !(!Object.values(e).every(t => !t) || Object.values(f).length) || Object.entries(e).every(([t, e]) => f[t] == e)
            }

            get params() {
                return this.l(this.t.routes[this.current()])
            }

            has(t) {
                return Object.keys(this.t.routes).includes(t)
            }

            s(t = {}, e = this.i) {
                t = ["string", "number"].includes(typeof t) ? [t] : t;
                const r = e.parameterSegments.filter(({name: t}) => !this.t.defaults[t]);
                return Array.isArray(t) ? t = t.reduce((t, e, n) => {
                    var o;
                    return {...t, [null === (o = r[n]) || void 0 === o ? void 0 : o.name]: e}
                }, {}) : 1 !== r.length || t[r[0].name] || !t.hasOwnProperty(Object.values(e.bindings)[0]) && !t.hasOwnProperty("id") || (t = {[r[0].name]: t}), {...this.p(e), ...this.h(t, e.bindings)}
            }

            p(t) {
                return t.parameterSegments.filter(({name: t}) => this.t.defaults[t]).reduce((t, {name: e}, r) => ({
                    ...t,
                    [e]: this.t.defaults[e]
                }), {})
            }

            h(t, e = {}) {
                return Object.entries(t).reduce((t, [r, n]) => {
                    if (!n || "object" != typeof n || Array.isArray(n) || "_query" === r) return {...t, [r]: n};
                    if (!n.hasOwnProperty(e[r])) {
                        if (!n.hasOwnProperty("id")) throw new Error("Ziggy error: object passed as '" + r + "' parameter is missing route model binding key '" + e[r] + "'.");
                        e[r] = "id"
                    }
                    return {...t, [r]: n[e[r]]}
                }, {})
            }

            l(t) {
                var e;
                let r = window.location.pathname.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""), "").replace(/^\/+/, "");
                const n = (t, e = "", r) => {
                    const [n, o] = [t, e].map(t => t.split(r));
                    return o.reduce((t, e, r) => /^{[^}?]+\??}$/.test(e) && n[r] ? {
                        ...t,
                        [e.replace(/^{|\??}$/g, "")]: n[r]
                    } : t, {})
                };
                return {...n(window.location.host, t.domain, "."), ...n(r, t.uri, "/"), ...S(null === (e = window.location.search) || void 0 === e ? void 0 : e.replace(/^\?/, ""))}
            }

            valueOf() {
                return this.toString()
            }

            check(t) {
                return this.has(t)
            }
        }

        return function (t, e, r, n) {
            const o = new R(t, e, r, n);
            return t ? o.toString() : o
        }
    });
    //# sourceMappingURL=index.js.map

</script>

<script type="text/javascript">

    $(document).ready(function () {
        service_id = $("#ServiceId").val();
        $("#appointment-" + service_id + "").addClass("active");
        $("#ServiceId").val(service_id);

        updateServiceId(service_id);

    })

    function updateServiceId(btnId) {

        $(".appointment-nav span").removeClass("active");
        $("#appointment-" + btnId + "").addClass("active");
        $("#ServiceId").val(btnId);
        service_id = $("#ServiceId").val();

        var select = $("#nearestBranchSelect");
        select.empty();
        var content = '<option value="">هل تريد إختيار فرع آخر؟</option>';
        select.append(content);

        if (service_id) {
            $.ajax({
                type: 'GET',
                url: route('api.branches.appointment', {
                    'lang': 'ar',
                    'service': service_id
                }),
                processData: false,
                contentType: false,
                success: function (data) {
                    var select = $("#nearestBranchSelect");
                    select.empty();
                    var content = '<option value="">هل تريد إختيار فرع آخر؟</option>';
                    select.append(content);
                    $.each(data.countries, function (index, country) {
                        if (data.branches.length > 0) {
                            select.append('<optgroup label="' + country.name + '">');
                        }
                        $.each(data.branches, function (index, branche) {
                            if (country.id == branche.country_id) {
                                var content = '<option value="' + branche.id + '">' + branche.name + '</option>';
                                select.append(content);
                            }
                        });
                        if (data.branches.length > 0) {
                            select.append('</optgroup>');
                        }
                    });

                },
                error: function (data) {
                }
            });

        }
    }

    function sendBook() {

        service_id = $("#ServiceId").val();
        brancheId = $("#nearestBranchSelect option:selected").val();
        window.location.href = "/book-an-appointment" + '?service=' + service_id + '&branche=' + brancheId;

    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js?ver=1.1"></script>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css?ver=1.1">
<script type="text/javascript">
    function validateSubContact(tel) {

        var xyz = document.getElementById('subscribeForm').value.trim();

        var phoneno = /^\d{10}$/;
        if ((tel.value.match(phoneno)) && tel.value.length == 10 && xyz.substr(0, 2) === '05' && $.isNumeric(xyz)) {
            $(tel).removeClass('is-invalid');
            $(tel).addClass('is-valid');

        } else {
            $("#subscribeForm").val('');
            $(tel).removeClass('is-valid');
            $(tel).addClass('is-invalid');

        }
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64910a8acc26a871b0238a4f/1h3b92bma';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



    <script type="text/javascript">
        // Get references to the select and input elements
        $(document).ready(function () {
            $('#bookService').on('change', function () {

                console.log($(this).val());
                data = {
                    'id': $(this).val()
                }
                $.ajax({
                    url: '{{route('website.service.showDoctors')}}',
                    method: 'GET',
                    data: data,
                    success: function (response) {

                        console.log( response);
                        var selectElement = $('#doctor_input');
                        selectElement.empty();
                        var option = $('<option>اختر الطبيب</option>');// Set the text of the option
                        selectElement.append(option);
                        $.each(response, function(index, item) {
                            var option = $('<option></option>');
                            option.val(item['id']);   // Set the value of the option
                            option.text(item['first_name_ar']);   // Set the text of the option
                            selectElement.append(option);  // Append the option to the <select> element
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error: ' + error);
                    }
                });

            });


        });


    </script>
    <script>
        function updateServiceId(id,th)
        {


            data = {
                'id': id
            }
            $.ajax({
                url: '{{route('website.service.service.show')}}',
                method: 'GET',
                data: data,
                success: function (response) {
                    $('#bookService').empty();
                    $('.btn-service').removeClass('active');
                    $(th).addClass('active');
                    if(id == 3) {
                        console.log(id);
                        $('#show_doctors').removeClass('d-flex');

                    }
                    else if(id == 5){
                        console.log(id);
                        $('#show_doctors').removeClass('d-flex');

                    }
                    else
                        $('#show_doctors').addClass('d-flex');

                    var selectElement = $('#bookService');
                    var option = $('<option>اختر الخدمة المناسبة</option>');// Set the text of the option
                    selectElement.append(option);
                    $.each(response, function(index, item) {
                        var option = $('<option></option>');
                        option.val(item['id']);   // Set the value of the option
                        option.text(item['name_ar']);   // Set the text of the option
                        selectElement.append(option);  // Append the option to the <select> element
                    });
                    var selectElement = $('#doctor_input');
                    selectElement.empty();
                    var option = $('<option>اختر الطبيب</option>');// Set the text of the option
                    selectElement.append(option);


                },
                error: function (xhr, status, error) {
                    console.error('Error: ' + error);
                }
            });
        }
    </script>
@stack('scripts')
<style>
    ::placeholder{
        color: black !important;
    }

</style>
</body>
</html>
