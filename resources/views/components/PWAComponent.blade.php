
        <!-- PWA:START-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="GangaService, GangaServices,Saloon, decoration, Service, Bahgalpur, Saloon, online,web Developer, beauty parlour, etc"/>
<meta name="google-site-verification" content="GXUqCRblVI0vfyaIcsSyTu8VIF5_ak8O8i67KGg0cNA" />
<meta name="Description" content="Best Service Provider of your city Bhagalpur for Saloon, mehndi, decoration, web Developer, beauty parlour, app developement,Local Servie, Best Service Provider">
<meta name="theme-color" content="#2874f0"/>


<link rel="manifest" href="{{url('/')}}/manifest.json">


<link rel="apple-touch-icon" sizes="57x57" href="{{url('/')}}/images/icons/icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="{{url('/')}}/images/icons/icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/images/icons/icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="{{url('/')}}/images/icons/icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/images/icons/icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="{{url('/')}}/images/icons/icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="{{url('/')}}/images/icons/icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="{{url('/')}}/images/icons/icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/images/icons/icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="{{url('/')}}/images/icons/icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="{{url('/')}}/images/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/images/icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{url('/')}}/images/icons/icon-144x144.png">

<script>
        // CODELAB: Register service worker.
        if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
        navigator.serviceWorker.register('{{url('/')}}/service-worker.js')
                .then((reg) => {
                console.log('Service worker registered.', reg);
                });
        });
        }

</script>
<!-- PWA:END -->


{{-- <script>

        // PWA Install POPUP
        window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent Chrome 67 and earlier from automatically showing the prompt
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI notify the user they can add to home screen
        btnAdd.style.display = 'block';
        });

        btnAdd.addEventListener('click', (e) => {
        // hide our user interface that shows our A2HS button
        btnAdd.style.display = 'none';
        // Show the prompt
        deferredPrompt.prompt();
        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice
        .then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
        } else {
                console.log('User dismissed the A2HS prompt');
        }
        deferredPrompt = null;
        });
        });
</script> --}}