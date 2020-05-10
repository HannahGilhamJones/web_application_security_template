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
                <h1> Sub Resource Integrity </h1>
                <p>Subresource Integrity (SRI) header ensures that when we are embedding from a third party, the content we are embedding is legitimate. This header works by comparing a hashed value of a file with the file we receive. If the files hashes do not match then it has been altered in some way and is rejected. 
This header works well when third parties use versioning. We can hash a specific version of their content and do not have to worry about them changing the file without us knowing. It does not work well if the third party continually updates the current file and we can’t be sure that the file will not change. This is where the relationship between SRI and Content Security Policies shine. In an ideal world, we would use both these headers.</p>
                <h1> Cross Site Scripting </h1>
                <p>Cross Site Scripting (XSS) prevents code executing if the browser detects it as a cross site attack. This is not necessarily needed when there is a strong Content Security Policy.</p>
                <pre class="flex-center">
                    <code>$response->header('X-XSS-Protection', '1; mode=block');
                    </code>
                </pre>
                <p> The above will turn X-XSS-Protection on and block any files from loading if a cross site attack is detected.</p>
            </div>
        </div>
    </body>
</html>
