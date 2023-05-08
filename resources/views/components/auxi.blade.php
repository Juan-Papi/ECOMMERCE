<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Glider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css" integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- FlexSlider --}}
     <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css')}}">

     {{-- argon --}}
     <link href=" {{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1') }}" rel="stylesheet" />
     <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
 
  {{-- SCRIPTS --}}
      

    {{-- Glider --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js" integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA==" crossorigin="anonymous"></script>

    {{-- jquery --}}
     <script src="https://code.jquery.com/jquery-3.6.4.min.js">

     </script>


    {{-- script flexSlider --}}
    <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js')}}"></script>
    @livewireStyles
</head>
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    
        HOLA MUNDO
  
  
    {{$slot}}
    
   
    
    @livewireScripts
    {{-- se añade la sgte directiva --}}
    @stack('script')
    
</body>
</html>