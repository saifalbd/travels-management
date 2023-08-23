<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ comInfo('institute') }}</title>
   

    @isset($scriptTop)
    {{$scriptTop}}
@endisset
<x-rich-text-trix-styles />

    @vite(['resources/css/app.scss','resources/js/app.ts'])

    @isset($style)
    {{$style}}
@endisset
</head>
<body class="min-h-screen bg-gray-50 dark:bg-gray-900 dark">
    <aside class="min-h-screen fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" 
    aria-label="Sidebar" id="sidebar-multi-level-sidebar">
        @component('./components.asideContent') @endcomponent
    </aside>
    <header class="sm:ml-64 bg-yellow-100">
        @component('./components.headerContent') @endcomponent
    </header>
    <main id="main" class="p-4 sm:ml-64 bg-teal-50 dark:bg-gray-600 min-h-screen relative">
        
            <div class="min-h-full">

                {{$slot}}
            </div>
       
    </main>

    
      
    @isset($script)
        {{$script}}
    @endisset
</body>
</html>