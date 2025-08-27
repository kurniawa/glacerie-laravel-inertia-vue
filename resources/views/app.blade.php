<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">

        @routes
        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased relative bg-rose-50"
    {{-- style="
       background-image: 
         linear-gradient(135deg, rgba(255,255,255,0.15) 25%, transparent 25%),
         linear-gradient(225deg, rgba(255,255,255,0.15) 25%, transparent 25%),
         linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%),
         linear-gradient(315deg, rgba(255,255,255,0.15) 25%, transparent 25%);
       background-size: 20px 20px;
       background-color: rgb(255 228 230);
     " --}}
     {{-- style="background-image: repeating-radial-gradient(circle at 20% 20%, white 0px, white 2px, transparent 3px, transparent 40px);" --}}
     {{-- style="background-image: url('data:image/svg+xml;utf8,
     <svg xmlns=&#39;http://www.w3.org/2000/svg&#39; width=&#39;40&#39; height=&#39;40&#39; fill=&#39;white&#39; opacity=&#39;0.2&#39;>
       <circle cx=&#39;10&#39; cy=&#39;10&#39; r=&#39;3&#39;/>
       <circle cx=&#39;30&#39; cy=&#39;30&#39; r=&#39;3&#39;/>
     </svg>');" --}}
     >
        @inertia
    </body>
</html>
