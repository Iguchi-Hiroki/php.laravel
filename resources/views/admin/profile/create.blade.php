<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width", initial-scale=1>
        
        <title>CreateProfile</title>
    </head>
    <body>
        <h1>クリエイトプロフィール</h1>
        @extends('layouts.profile')
        
        @section('title', 'MY プロフィール')
        
        @section('content')
           <div class="container">
               <div class="row">
                   <div class="col-md-8 mx-auto">
                       <h2>MY プロフィール</h2>
                   </div>
               </div>
           </div>
        @endsection
    </body>
</html>