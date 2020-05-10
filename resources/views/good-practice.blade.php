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
                    Good Practice
                </div>
                <h1>Security Text File</h1>
                <p>
                    It is recommended to put a security.txt file under a .well-known folder. This will allow people to easily find contact details in the event of security issues. 
                    <a href="https://securitytxt.org/">securitytxt.org</a> can be used to create the contents of the security file. The file can be found by going to .well-known/security.txt.
                </p>
                <h1> Resources to Test Site Security </h1>
                <p>
                    The following list of links will enable you to run scans on your site to highlight any faults in security@auth
                        <ul>
                            <li><a href="https://dnsspy.io/labs/caa-validator">DNSSpy</a> will allow you to validate your CAA records</li>
                            <li><a href="https://www.ssllabs.com/ssltest/">SSL Labs</a> provides a deep analysis of SSL configuration on the web server</li>
                            <li><a href="https://securityheaders.com/">Security Headers</a> scans your site and ranks it depending on security measures</li>
                            <li><a href="https://observatory.mozilla.org/">Mozilla Observatory</a> performs a similar function to Security Headers</li>
                        </ul>
                    It is worth noting that the scans should be analyzed against your site and your knowledge of your site should be used to actually highlight any faults. For example, the sites tend to only scan response headers so if you have added headers in meta tags, it will not show. However, you will know that the headers exist.
                </p>
            </div>
        </div>
    </body>
</html>
