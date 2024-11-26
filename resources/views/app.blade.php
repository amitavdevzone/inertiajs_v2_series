<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Inertia app</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @inertiaHead
  </head>
  <body>
    <div class="px-5 md:px-10 lg:px-20 xl:px-32 2xl:px-52 flex-grow">
        @inertia
    </div>
  </body>
</html>
