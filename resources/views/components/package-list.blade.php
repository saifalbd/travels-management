<section class="bg-fuchsia-100 w-full relative overflow-hidden package-box">
   

    
    <div class="container relative pt-10 pb-10 z-10 ">
        <h1 class="text-center font-extrabold text-4xl font-ac my-10 text-cyan-600 sec-title">OUR BEST PACKAGES</h1>
     
        <section class="splide slider" aria-labelledby="carousel-heading">
          
          
            <div class="splide__track">
                  <ul class="splide__list">
                    @foreach ($packages as $item)

                    <li class="splide__slide flex justify-center items-center">
                        <div class="p-1">
                            <div class="card">
                               
                                <img class="rounded" src="{{asset($item->avatar->url)}}" alt="" srcset="">

                                <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->name}}</h5>
                       

                                <div class=" text-center pt-3 border-t-2 border-spacing-1 border-fuchsia-400 rounded-full flex justify-center">
                                    <a href="{{route('package.show',['package'=>$item->id])}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg
                                     hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 
                                     dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex items-center">
                                     <svg class="w-4 h-4 text-rose-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.013 7.962a3.519 3.519 0 0 0-4.975 0l-3.554 3.554a3.518 3.518 0 0 0 4.975 4.975l.461-.46m-.461-4.515a3.518 3.518 0 0 0 4.975 0l3.553-3.554a3.518 3.518 0 0 0-4.974-4.975L10.3 3.7"/>
                                      </svg>
                                     <span class="ml-2">View Details</span></a>
                                </div>
                              
                            </div>
                        </div>
                      </li>
                        
                    @endforeach
                     
                      
                      
                  </ul>
            </div>
          </section>
    </div>

    <svg class="absolute left-0 top-0 bottom-0 right-0 z-0 h-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs"
    preserveAspectRatio="none" viewBox="0 0 1440 560">
      <g  fill="none">
          <rect width="1440" height="560" x="0" y="0" ></rect>
          <path d="M-94.8 411.75L-94.8 411.75" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-94.8 411.75L57.1 392.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-94.8 411.75L99.1 519.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-94.8 411.75L-97.61 658.29" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-94.8 411.75L98.35 644.16" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-94.8 411.75L206.93 540.28" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-97.61 658.29L-97.61 658.29" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-97.61 658.29L98.35 644.16" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-97.61 658.29L99.1 519.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M-97.61 658.29L57.1 392.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M57.1 392.48L57.1 392.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M57.1 392.48L99.1 519.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M57.1 392.48L248.54 398.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M99.1 519.58L99.1 519.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M99.1 519.58L206.93 540.28" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M99.1 519.58L98.35 644.16" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M98.35 644.16L98.35 644.16" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M98.35 644.16L206.93 540.28" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M98.35 644.16L57.1 392.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M98.35 644.16L248.54 398.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M248.54 398.08L248.54 398.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M248.54 398.08L372.56 402.38" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M248.54 398.08L206.93 540.28" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M248.54 398.08L409.91 493.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M206.93 540.28L206.93 540.28" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M372.56 402.38L372.56 402.38" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M372.56 402.38L409.91 493.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M372.56 402.38L549.73 372.51" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M372.56 402.38L507.15 522.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M409.91 493.48L409.91 493.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M409.91 493.48L507.15 522.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M395.36 704.74L395.36 704.74" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M395.36 704.74L504.48 650.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M549.73 372.51L549.73 372.51" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M549.73 372.51L645.36 380" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M549.73 372.51L507.15 522.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M549.73 372.51L683.29 492.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M549.73 372.51L409.91 493.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M549.73 372.51L816.84 360.01" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M507.15 522.79L507.15 522.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M507.15 522.79L504.48 650.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M507.15 522.79L683.29 492.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M504.48 650.58L504.48 650.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M504.48 650.58L409.91 493.48" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M645.36 380L645.36 380" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M645.36 380L683.29 492.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M645.36 380L816.84 360.01" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M683.29 492.79L683.29 492.79" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M683.29 492.79L831.23 507.85" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M701.21 700.38L701.21 700.38" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M701.21 700.38L839.93 673.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M701.21 700.38L504.48 650.58" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M809.27 244.82L809.27 244.82" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M809.27 244.82L816.84 360.01" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M809.27 244.82L954.93 216.3" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M809.27 244.82L645.36 380" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M809.27 244.82L1010.76 367.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M809.27 244.82L982.27 76.27" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M816.84 360.01L816.84 360.01" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M816.84 360.01L831.23 507.85" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M831.23 507.85L831.23 507.85" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M831.23 507.85L839.93 673.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M831.23 507.85L994.13 549.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M831.23 507.85L958.02 652.32" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M831.23 507.85L645.36 380" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M839.93 673.09L839.93 673.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M839.93 673.09L958.02 652.32" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M962.98 -42.26L962.98 -42.26" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M962.98 -42.26L982.27 76.27" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M962.98 -42.26L1102.77 -81.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M962.98 -42.26L1137.15 61.12" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M982.27 76.27L982.27 76.27" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M982.27 76.27L954.93 216.3" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M982.27 76.27L1137.15 61.12" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M954.93 216.3L954.93 216.3" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1010.76 367.11L1010.76 367.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1010.76 367.11L1143.63 337.72" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1010.76 367.11L954.93 216.3" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1010.76 367.11L994.13 549.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M994.13 549.98L994.13 549.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M994.13 549.98L958.02 652.32" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M994.13 549.98L1151.59 510.57" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M958.02 652.32L958.02 652.32" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M958.02 652.32L1140.39 645.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M958.02 652.32L1151.59 510.57" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M958.02 652.32L701.21 700.38" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1102.77 -81.11L1102.77 -81.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1102.77 -81.11L1137.15 61.12" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1137.15 61.12L1137.15 61.12" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1137.15 61.12L1109.12 189.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1137.15 61.12L1302.41 90.18" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1137.15 61.12L1250.92 -82.14" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1109.12 189.09L1109.12 189.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1109.12 189.09L1143.63 337.72" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1109.12 189.09L954.93 216.3" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1109.12 189.09L982.27 76.27" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1109.12 189.09L1010.76 367.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1143.63 337.72L1143.63 337.72" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1143.63 337.72L1282.55 368.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1143.63 337.72L1151.59 510.57" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1143.63 337.72L954.93 216.3" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1151.59 510.57L1151.59 510.57" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1151.59 510.57L1140.39 645.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1151.59 510.57L1292 535.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1140.39 645.89L1140.39 645.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1140.39 645.89L1289.61 637.59" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1140.39 645.89L994.13 549.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1140.39 645.89L1292 535.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1250.92 -82.14L1250.92 -82.14" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1250.92 -82.14L1102.77 -81.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1250.92 -82.14L1412.41 -108.25" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1250.92 -82.14L1302.41 90.18" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1302.41 90.18L1302.41 90.18" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1302.41 90.18L1452.93 104.96" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1302.41 90.18L1109.12 189.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1302.41 90.18L1412.41 -108.25" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1282.55 368.89L1282.55 368.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1282.55 368.89L1292 535.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1292 535.09L1292 535.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1292 535.09L1289.61 637.59" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1292 535.09L1440.59 521.56" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1289.61 637.59L1289.61 637.59" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1412.41 -108.25L1412.41 -108.25" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1412.41 -108.25L1600.5 -40.33" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1412.41 -108.25L1452.93 104.96" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1412.41 -108.25L1554.32 109.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1412.41 -108.25L1102.77 -81.11" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1452.93 104.96L1452.93 104.96" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1452.93 104.96L1554.32 109.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1452.93 104.96L1538.63 225.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1440.59 521.56L1440.59 521.56" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1440.59 521.56L1449.74 648.88" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1440.59 521.56L1598.62 538.81" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1440.59 521.56L1289.61 637.59" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1449.74 648.88L1449.74 648.88" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1449.74 648.88L1590.37 652.49" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1449.74 648.88L1289.61 637.59" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1449.74 648.88L1598.62 538.81" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1449.74 648.88L1292 535.09" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1449.74 648.88L1140.39 645.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1600.5 -40.33L1600.5 -40.33" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1600.5 -40.33L1554.32 109.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1600.5 -40.33L1452.93 104.96" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1600.5 -40.33L1538.63 225.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1600.5 -40.33L1302.41 90.18" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1554.32 109.08L1554.32 109.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1538.63 225.98L1538.63 225.98" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1538.63 225.98L1554.32 109.08" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1538.63 225.98L1576.54 360.74" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1538.63 225.98L1302.41 90.18" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1538.63 225.98L1282.55 368.89" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1576.54 360.74L1576.54 360.74" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1576.54 360.74L1598.62 538.81" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1598.62 538.81L1598.62 538.81" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1598.62 538.81L1590.37 652.49" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <path d="M1590.37 652.49L1590.37 652.49" stroke="rgba(115, 184, 98, 1)" stroke-width="1.5"></path>
          <circle r="5" cx="-94.8" cy="411.75" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="-97.61" cy="658.29" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="57.1" cy="392.48" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="99.1" cy="519.58" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="98.35" cy="644.16" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="248.54" cy="398.08" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="206.93" cy="540.28" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="372.56" cy="402.38" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="409.91" cy="493.48" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="395.36" cy="704.74" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="549.73" cy="372.51" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="507.15" cy="522.79" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="504.48" cy="650.58" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="645.36" cy="380" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="683.29" cy="492.79" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="701.21" cy="700.38" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="809.27" cy="244.82" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="816.84" cy="360.01" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="831.23" cy="507.85" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="839.93" cy="673.09" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="962.98" cy="-42.26" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="982.27" cy="76.27" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="954.93" cy="216.3" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1010.76" cy="367.11" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="994.13" cy="549.98" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="958.02" cy="652.32" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1102.77" cy="-81.11" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1137.15" cy="61.12" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1109.12" cy="189.09" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1143.63" cy="337.72" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1151.59" cy="510.57" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1140.39" cy="645.89" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1250.92" cy="-82.14" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1302.41" cy="90.18" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1282.55" cy="368.89" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1292" cy="535.09" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1289.61" cy="637.59" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1412.41" cy="-108.25" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1452.93" cy="104.96" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1440.59" cy="521.56" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1449.74" cy="648.88" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1600.5" cy="-40.33" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1554.32" cy="109.08" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1538.63" cy="225.98" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1576.54" cy="360.74" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1598.62" cy="538.81" fill="rgba(115, 184, 98, 1)"></circle>
          <circle r="5" cx="1590.37" cy="652.49" fill="rgba(115, 184, 98, 1)"></circle>
          <path d="M71.85 535.5L71.85 535.5" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M71.85 535.5L-89.03 520.05" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M71.85 535.5L111.22 712.14" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M389.24 559.6L389.24 559.6" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M389.24 559.6L394.02 642.17" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M389.24 559.6L257.28 520.04" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M389.24 559.6L558.76 517.99" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M389.24 559.6L255.91 673.65" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M710.22 542.99L710.22 542.99" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M710.22 542.99L641.78 642.47" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M710.22 542.99L854.38 562.34" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M710.22 542.99L558.76 517.99" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M710.22 542.99L558.8 662.76" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L858.73 360.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L996.85 385.52" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L854.38 562.34" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L1005.92 220.37" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L1088.51 349.51" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M858.73 360.39L710.22 542.99" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M996.85 385.52L996.85 385.52" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M996.85 385.52L1088.51 349.51" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M996.85 385.52L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1146.44 96.48L1146.44 96.48" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1146.44 96.48L1132.14 200.41" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1146.44 96.48L1299.59 55.82" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1146.44 96.48L1005.92 220.37" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1146.44 96.48L1278.42 245.24" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1124.08 562.24L1124.08 562.24" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1124.08 562.24L1114.15 699.77" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1124.08 562.24L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1124.08 562.24L1271.82 487.57" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1124.08 562.24L1289.91 643.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1591.94 58.08" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1571.91 -46.62" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1588.06 209.41" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1425.05 -84.63" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1399.72 260.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1591.94 58.08L1299.59 55.82" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1588.06 209.41L1588.06 209.41" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1588.06 209.41L1399.72 260.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1588.06 209.41L1539.82 401.08" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1588.06 209.41L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-89.03 520.05L-89.03 520.05" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-89.03 520.05L-98.74 694.78" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-89.03 520.05L111.22 712.14" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-89.03 520.05L257.28 520.04" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-89.03 520.05L255.91 673.65" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-89.03 520.05L389.24 559.6" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-98.74 694.78L-98.74 694.78" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-98.74 694.78L111.22 712.14" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-98.74 694.78L71.85 535.5" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-98.74 694.78L255.91 673.65" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-98.74 694.78L257.28 520.04" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M-98.74 694.78L394.02 642.17" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M111.22 712.14L111.22 712.14" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M111.22 712.14L255.91 673.65" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M111.22 712.14L257.28 520.04" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M111.22 712.14L394.02 642.17" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M257.28 520.04L257.28 520.04" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M257.28 520.04L255.91 673.65" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M257.28 520.04L394.02 642.17" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M255.91 673.65L255.91 673.65" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M255.91 673.65L394.02 642.17" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M394.02 642.17L394.02 642.17" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M394.02 642.17L558.8 662.76" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M394.02 642.17L558.76 517.99" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M394.02 642.17L641.78 642.47" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M558.76 517.99L558.76 517.99" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M558.76 517.99L558.8 662.76" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M558.76 517.99L641.78 642.47" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M558.76 517.99L854.38 562.34" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M558.8 662.76L558.8 662.76" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M558.8 662.76L641.78 642.47" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M641.78 642.47L641.78 642.47" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M641.78 642.47L854.38 562.34" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M854.38 562.34L854.38 562.34" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M854.38 562.34L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M854.38 562.34L942 709.36" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M854.38 562.34L996.85 385.52" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1005.92 220.37L1005.92 220.37" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1005.92 220.37L1132.14 200.41" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1005.92 220.37L1088.51 349.51" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1005.92 220.37L996.85 385.52" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M985.62 496.11L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M942 709.36L942 709.36" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M942 709.36L1114.15 699.77" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M942 709.36L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M942 709.36L1124.08 562.24" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1132.14 200.41L1132.14 200.41" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1132.14 200.41L1278.42 245.24" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1132.14 200.41L1088.51 349.51" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1132.14 200.41L1240.75 342.44" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1088.51 349.51L1088.51 349.51" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1088.51 349.51L1240.75 342.44" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1088.51 349.51L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1114.15 699.77L1114.15 699.77" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1114.15 699.77L1289.91 643.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1114.15 699.77L985.62 496.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1311.16 -98.76L1311.16 -98.76" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1311.16 -98.76L1425.05 -84.63" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1311.16 -98.76L1299.59 55.82" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1311.16 -98.76L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1311.16 -98.76L1146.44 96.48" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1311.16 -98.76L1571.91 -46.62" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1299.59 55.82L1299.59 55.82" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1299.59 55.82L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1299.59 55.82L1425.05 -84.63" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1278.42 245.24L1278.42 245.24" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1278.42 245.24L1240.75 342.44" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1278.42 245.24L1399.72 260.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1240.75 342.44L1240.75 342.44" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1240.75 342.44L1271.82 487.57" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1240.75 342.44L1399.48 377.97" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1240.75 342.44L1399.72 260.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1271.82 487.57L1271.82 487.57" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1271.82 487.57L1289.91 643.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1271.82 487.57L1399.48 377.97" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1271.82 487.57L1442.16 505.96" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1271.82 487.57L1426.16 651.86" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1289.91 643.11L1289.91 643.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1289.91 643.11L1426.16 651.86" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1289.91 643.11L1442.16 505.96" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1425.05 -84.63L1425.05 -84.63" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1425.05 -84.63L1571.91 -46.62" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1425.05 -84.63L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1417.1 89.25L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1417.1 89.25L1399.72 260.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1399.72 260.39L1399.72 260.39" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1399.72 260.39L1399.48 377.97" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1399.48 377.97L1399.48 377.97" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1399.48 377.97L1442.16 505.96" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1399.48 377.97L1539.82 401.08" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1399.48 377.97L1278.42 245.24" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1442.16 505.96L1442.16 505.96" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1442.16 505.96L1539.82 401.08" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1442.16 505.96L1426.16 651.86" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1442.16 505.96L1590.6 498.56" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1426.16 651.86L1426.16 651.86" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1426.16 651.86L1607.04 643.78" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1571.91 -46.62L1571.91 -46.62" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1571.91 -46.62L1417.1 89.25" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1539.82 401.08L1539.82 401.08" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1539.82 401.08L1590.6 498.56" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1590.6 498.56L1590.6 498.56" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1590.6 498.56L1607.04 643.78" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1607.04 643.78L1607.04 643.78" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1607.04 643.78L1442.16 505.96" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1607.04 643.78L1539.82 401.08" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <path d="M1607.04 643.78L1289.91 643.11" stroke="hsl(228.5, 77.2%, 51.5%)" stroke-width="1.5"></path>
          <circle r="25" cx="71.85" cy="535.5" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="389.24" cy="559.6" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="710.22" cy="542.99" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="858.73" cy="360.39" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="996.85" cy="385.52" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="1146.44" cy="96.48" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="1124.08" cy="562.24" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="1591.94" cy="58.08" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="25" cx="1588.06" cy="209.41" fill="url(&quot;#SvgjsRadialGradient1434&quot;)"></circle>
          <circle r="5" cx="-89.03" cy="520.05" fill="#8b9ad9"></circle>
          <circle r="5" cx="-98.74" cy="694.78" fill="#8b9ad9"></circle>
          <circle r="5" cx="111.22" cy="712.14" fill="#8b9ad9"></circle>
          <circle r="5" cx="257.28" cy="520.04" fill="#8b9ad9"></circle>
          <circle r="5" cx="255.91" cy="673.65" fill="#8b9ad9"></circle>
          <circle r="5" cx="394.02" cy="642.17" fill="#8b9ad9"></circle>
          <circle r="5" cx="558.76" cy="517.99" fill="#8b9ad9"></circle>
          <circle r="5" cx="558.8" cy="662.76" fill="#8b9ad9"></circle>
          <circle r="5" cx="641.78" cy="642.47" fill="#8b9ad9"></circle>
          <circle r="5" cx="854.38" cy="562.34" fill="#8b9ad9"></circle>
          <circle r="5" cx="1005.92" cy="220.37" fill="#8b9ad9"></circle>
          <circle r="5" cx="985.62" cy="496.11" fill="#8b9ad9"></circle>
          <circle r="5" cx="942" cy="709.36" fill="#8b9ad9"></circle>
          <circle r="5" cx="1132.14" cy="200.41" fill="#8b9ad9"></circle>
          <circle r="5" cx="1088.51" cy="349.51" fill="#8b9ad9"></circle>
          <circle r="5" cx="1114.15" cy="699.77" fill="#8b9ad9"></circle>
          <circle r="5" cx="1311.16" cy="-98.76" fill="#8b9ad9"></circle>
          <circle r="5" cx="1299.59" cy="55.82" fill="#8b9ad9"></circle>
          <circle r="5" cx="1278.42" cy="245.24" fill="#8b9ad9"></circle>
          <circle r="5" cx="1240.75" cy="342.44" fill="#8b9ad9"></circle>
          <circle r="5" cx="1271.82" cy="487.57" fill="#8b9ad9"></circle>
          <circle r="5" cx="1289.91" cy="643.11" fill="#8b9ad9"></circle>
          <circle r="5" cx="1425.05" cy="-84.63" fill="#8b9ad9"></circle>
          <circle r="5" cx="1417.1" cy="89.25" fill="#8b9ad9"></circle>
          <circle r="5" cx="1399.72" cy="260.39" fill="#8b9ad9"></circle>
          <circle r="5" cx="1399.48" cy="377.97" fill="#8b9ad9"></circle>
          <circle r="5" cx="1442.16" cy="505.96" fill="#8b9ad9"></circle>
          <circle r="5" cx="1426.16" cy="651.86" fill="#8b9ad9"></circle>
          <circle r="5" cx="1571.91" cy="-46.62" fill="#8b9ad9"></circle>
          <circle r="5" cx="1539.82" cy="401.08" fill="#8b9ad9"></circle>
          <circle r="5" cx="1590.6" cy="498.56" fill="#8b9ad9"></circle>
          <circle r="5" cx="1607.04" cy="643.78" fill="#8b9ad9"></circle>
      </g>
      <defs>
          <mask id="SvgjsMask1432">
              <rect width="1440" height="560" fill="#ffffff"></rect>
          </mask>
          <linearGradient x1="15.28%" y1="139.29%" x2="84.72%" y2="-39.29%" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1433">
              <stop stop-color="#0e2a47" offset="0"></stop>
              <stop stop-color="#00459e" offset="1"></stop>
          </linearGradient>
          <radialGradient id="SvgjsRadialGradient1434">
              <stop stop-color="#ffffff" offset="0.1"></stop>
              <stop stop-color="#1735b3" offset="0.2"></stop>
              <stop stop-color="rgba(23, 53, 179, 0)" offset="1"></stop>
          </radialGradient>
      </defs>
  </svg>
</section>