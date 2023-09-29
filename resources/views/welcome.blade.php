<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            
            <div class="overflow-x-auto">
                <table class="table table-zebra table-xs">
                  <thead>
                    <tr>
                        <th colspan="7" class="text-center bg-purple-500 text-white text-2xl">LeaderBoard</th> 
                      </tr>
                    <tr>
                      <th></th> 
                      <th>Name</th> 
                      <th>Job</th> 
                      <th>company</th> 
                      <th>location</th> 
                      <th>Last Login</th> 
                      <th>Favorite Color</th>
                    </tr>
                  </thead> 
                  <tbody>
                    <tr>
                        <th>1</th> 
                        <td>Cy Ganderton</td> 
                        <td>Quality Control Specialist</td> 
                        <td>Littel, Schaden and Vandervort</td> 
                        <td>Canada</td> 
                        <td>12/16/2020</td> 
                        <td>Blue</td>
                      </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th></th> 
                      <th>Name</th> 
                      <th>Job</th> 
                      <th>company</th> 
                      <th>location</th> 
                      <th>Last Login</th> 
                      <th>Favorite Color</th>
                    </tr>
                  </tfoot>
                </table>
              </div>

        </div>
    </body>
</html>
