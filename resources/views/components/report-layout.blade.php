
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/report-print.scss'])
</head>
<body>

    <div class="layout relative">
    <div class="b-box absolute top-2 right-2 grid grid-cols-2 gap-1 print:hidden">
        <button onclick="print()" type="button" class="print-btn">
            <svg class="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z"/>
                <path d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"/>
              </svg>
              <span class="ml-2">Print</span>
        </button>
        <button onclick="goBack()" type="button" class="back-btn">
            <svg  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 12 16">
                <path d="M10.819.4a1.974 1.974 0 0 0-2.147.33l-6.5 5.773A2.014 2.014 0 0 0 2 6.7V1a1 1 0 0 0-2 0v14a1 1 0 1 0 2 0V9.3c.055.068.114.133.177.194l6.5 5.773a1.982 1.982 0 0 0 2.147.33A1.977 1.977 0 0 0 12 13.773V2.227A1.977 1.977 0 0 0 10.819.4Z"/>
              </svg>
              <span class="ml-2">Back</span>
        </button>
    </div>
      <div class="box">
        <header class=" bg-red-50">
            <div class=" border-b border-b-purple-800 py-3">
                <h2 class=" font-bold text-3xl mb-2 text-center">{{comInfo('institute')}}</h2>
                <h4 class="text-xl text-center">{{comInfo('address')}}</h4>
            </div>
            <div class=" border-b border-b-purple-800 py-3">
                <div class="text-xl text-center capitalize">{{$title}}</div>
                <div class="text-xl text-center capitalize">
                    @isset($date)
                    {{$date}}
                @endisset
                </div>

            </div>
        </header>
        <main>
            {{$slot}}
            
        </main>
      </div>
    </div>



   

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
