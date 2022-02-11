<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SPD Shop</title>

        <!-- Styles -->
       

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
       
    </head>
    <body>
        {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>'
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
   .slider-text{
background-color: rgba(48, 61, 48, 0.582);
   }
   .trending-image{
       height: 100px;
   }
   .trending-item{
       float: left;
       width: 20%; 
   }

   .trending-wrapper{
       margin: 30px;
   }
   .product-custom{
       height: 900px;
   }
    </style>
</html>