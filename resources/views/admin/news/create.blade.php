<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MyNews</title>
    </head>
    <body>
        <h1>Myニュース作成画面</h1>
        @extends('layouts.admin')
        
        @section('title', 'ニュースの新規作成')
        
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2>ニュース新規作成</h2>
                    </div>
                </div>
            </div>
        @endsection    
    </body>
</html>