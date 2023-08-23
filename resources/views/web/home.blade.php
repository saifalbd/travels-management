<x-app-web>

   <section class="flex justify-center">
    <div class="container">
        <div class="py-4 md:px-4">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('static/img/slider/01.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{asset('static/img/slider/02.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('static/img/slider/03.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="{{ asset('static/img/slider/04.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                   
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="true"
                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="false"
                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="false"
                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full border border-fuchsia-50" aria-current="false"
                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                 
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div> <div class="text-move">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad itaque nam ullam placeat quis provident commodi eos sequi, esse nisi libero, architecto laboriosam aperiam. Cum quidem enim obcaecati nam fugit.</p>
        </div></div>
    </div>

   </section>

    {{-- End Carosule --}}


    
   

    <div class="flex justify-center">
        <x-well-come-section></x-well-come-section>
    </div>

    

    <x-package-list :packages="$packages"></x-package-list>


    <section id="blog" class=" bg-white w-full relative overflow-hidden package-box">
   

    
        <div class="container relative pt-10 pb-10 z-10 ">
            <h1 class="text-center font-extrabold text-4xl font-ac my-10 text-cyan-600 sec-title"><span>Our Recent</span> Blog Posts</h1>
        </div>

        <div class="grid grid-cols-12 gap-4">
            @foreach ($posts as $post)
            <div class="w-full col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-3">
                <div class=" bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <div class="mb-2 overflow-hidden blog-image rounded-xl">
                        <img class="w-full aspect-[4/3]" src="{{$post->avatar->url}}" alt="blog">
                    </div>
                    <div class="px-4 pb-4 flex flex-col">
                        <ul class="flex mb-5 meta">
                            <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                            <li class="ml-12">{{format($post->updated_at)}}</li>
                        </ul>
                        <a class="mb-6 text-2xl text-blue-800">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</a>
                        <div>
                            <a class=" text-fuchsia-900 hover:bg-green-200 p-2" href="javascript:void(0)">
                                Learn More
                                <i class="ml-2 lni lni-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- single blog -->
            </div> 
            @endforeach
           
        </div>
    </section>

  
  {{-- <section class="flex justify-center">
    <div class="container relative pt-10 pb-10 mb-10 z-10 ">

        <h1 class="text-center font-extrabold text-4xl font-ac my-10 text-cyan-600">

            <div class="sec-title">Our Team</div>
        </h1>

        <div class="grid grid-cols-3 gap-5 pt-6 px-5">
            <div
                class=" ring-4 ring-fuchsia-300 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
            relative col-span-3 md:col-span-1">
                <div class="flex justify-center items-center"><img style="height: 300px"
                        src="{{ asset('static/dummy/team1.jpg') }}" alt=""></div>
                <div>

                    <div class=" flex justify-center items-center flex-col mt-2">
                        <h3 class="text-cyan-600 text-lg">মুফতি শহিদুল ইসলাম</h3>
                        <h4 class="text-cyan-500">প্রতিষ্ঠাতা চেয়ারম্যান</h4>
                        <h4 class="text-cyan-500">মিনা এভিয়েশন</h4>
                    </div>

                </div>
            </div>
            <div
                class="p-1 ring-4 ring-fuchsia-300 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
            relative col-span-3 md:col-span-1">
                <div class="flex justify-center items-center"> <img style="height: 300px"
                        src="{{ asset('static/dummy/team2.jpg') }}" alt=""></div>
                <div class=" flex justify-center items-center flex-col mt-2">
                    <h3 class="text-cyan-600 text-lg">মাওলানা সারোয়ার হোসাইন</h3>
                    <h4 class="text-cyan-500">প্রতিষ্ঠাতা চেয়ারম্যান</h4>
                    <h4 class="text-cyan-500">মিনা এভিয়েশন</h4>
                </div>
            </div>
            <div
                class="p-1 ring-4 ring-fuchsia-300 bg-white border border-gray-200 rounded-lg shadow
            hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700
            relative  col-span-3 md:col-span-1">

                <div class="flex justify-center items-center"><img style="height: 300px"
                        src="{{ asset('static/dummy/team3.jpg') }}" alt=""></div>

                        <div class=" flex justify-center items-center flex-col mt-2">
                            <h3 class="text-cyan-600 text-lg">মুফতি হামজা শহিদুল ইসলাম</h3>
                            <h4 class="text-cyan-500">চেয়ারম্যান</h4>
                            <h4 class="text-cyan-500">মিনা এভিয়েশন</h4>
                        </div>

            </div>
        </div>
    </div>
   </section> --}}
</x-app-web>
