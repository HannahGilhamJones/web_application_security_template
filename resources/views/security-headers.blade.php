<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" defer>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Security Headers
                </div>
                <h1>Content Security Policy</h1>
                <p>
                    Content Security Policy (CSP) headers are used to whitelist sources for loading content. It allows you to make a conscious decision on where your resources are coming from. To start with, you should place a CSP that is very restrictive and amend this as you develop - it is better to restrict all and then allow from sources when you know there is a need. 
                </p>
                <pre class="flex-center">
                    <code>$response->header(
    'Content-Security-Policy', 'default-src \'self\'; 
                                script-src \'self\'; 
                                connect-src \'self\'; 
                                style-src \'self\' https://fonts.googleapis.com; 
                                img-src \'self\'; 
                                font-src \'self\' https://fonts.gstatic.com/s/nunito/v12/; 
                                object-src \'none\'; 
                                media-src \'none\'; 
                                worker-src \'none\'');
                    </code>
                </pre>
            </div>
        </div>
    </body>
</html>
