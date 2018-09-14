<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>3xW</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body class="antialiased w-screen h-screen flex flex-col border-blue-lightest border-16 bg-grey-light text-grey-darkest">
    <main class="pt-16 xs:pt-24 sm:pt-32 px-4 max-w-md mx-auto flex-1">
        <h1 class="font-serif text-semibold mb-2">3xW</h1>
        <p class="mb-8">is a collection of companies working to help small businesses compete.</p>
        <p class="mb-8"><a href="https://sourceacademy.co">SourceAcademy</a> makes affordable brochure- and content-driven websites and works with top student talent.</p>
        <p class="mb-8">3xW Digital makes bespoke, well-designed, converting e-commerce websites for independent makers and retailers.</p>
        <p><a href="https://clicksandmortar.ie">Clicks &amp; Mortar</a> provides retailers with resources and tools to grow and compete online.</p>
    </main>
    <footer class="xs:text-center m-4">
        <small>&copy; 3xW Digital Limited, 2018</small>
    </footer>
    <script>
        !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
            analytics.load("{{ env('SEGMENT_ANALYTICS_JS_KEY') }}");
            analytics.page();
        }}();
    </script>
</body>
</html>
