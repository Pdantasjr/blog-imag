<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="keywords" content="IMAG Medicina Diagnóstica, Ressonancia Magnética, Clínica de Imagem, tomografia computadorizada, Exames laboratoriais">
        <meta name="description" content="Com alta densidade tecnológica, ampla oferta de métodos diagnósticos, equie altamente especializada e assistencia humanizada. a IMAG chega com a missçai de prover um serviço de extrema qualidade.">

        <title inertia>{{ config('app.name', 'IMAG - Medicina Diagnóstica.') }}</title>
        <!--Social tags-->
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="_ptBR">
        <meta property="og:url" content="https://imagdiagnostico.com.br">
        <meta property="og:title" content="IMAG - Medicina Diagnóstica.">
        <meta property="og:site_name" content="IMAG Diagnóstico Por Imagem">
        <meta property="og:description" content="Com alta densidade tecnológica, ampla oferta de métodos diagnósticos, equie altamente especializada e assistencia humanizada. a IMAG chega com a missçai de prover um serviço de extrema qualidade.">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ url('favicon.png') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/manifest.js') }}" defer></script>
        <script src="{{ mix('js/vendor.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!--facebook-->
        <meta name="facebook-domain-verification" content="zghkuymywarstryl7eb3cmcewcno7c" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-PD4XF7X92F"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-PD4XF7X92F');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NXMDS57');</script>
        <!-- End Google Tag Manager -->

        <!-- AdOpt -->
        <meta name="adopt-website-id" content="a5a67294-1dde-424e-abfc-62197de2ab8c" />
        <script src="//tag.goadopt.io/injector.js?website_code=a5a67294-1dde-424e-abfc-62197de2ab8c" class="adopt-injector"></script>

        <!-- WhatsApp -->
{{--        <script src='https://llwhatsapp.blob.core.windows.net/whatschat-scripts/whatschat-89c98c6fc5b64e51ae8fa43e94972327.js'></script>--}}
    <!-- CRAZYEGG-->
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0116/5431.js" async="async" ></script>
    </head>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <body class="font-sans antialiased">
        @inertia

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXMDS57"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

    </body>
</html>
