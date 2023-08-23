<x-app>
    <x-b-bar o="Post" t="Post List" :url="route('admin.blog.post.create')" :add="false" >Post Create</x-b-bar>
    <div class="table-box">
        <div>
             <div class="grid grid-cols-12 gap-1">
                @foreach ($posts as $post)
                <div class="col-span-12 sm:col-span-6 md:col-span-4 flex flex-col justify-between bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <a href="#" class=" bg-fuchsia-200 w-full flex justify-center">
                            <img class="rounded-t-lg" src="{{$post->avatar->url}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post->title}}</h5>
                            </a>
                            <a href="http://">{{$post->category->title}}</a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$post->sub_title}}</p>
                        </div>
                    </div>
                    <div class="p-5">
                      


                        <div>
                            <div class="border border-gray-500 px-4 py-2 flex items-center justify-center bg-fuchsia-100 my-2 rounded-2xl">
                                
                                <label class="relative inline-flex items-center mr-5 cursor-pointer">
                               
                                    <input type="checkbox" onchange="iq.toggleActive(this)"
                                        data-url="{{ route('admin.blog.post.toggleActive', ['post' => $post->id]) }}"
                                        class="sr-only peer" @checked($post->active)>
                                    <div
                                        class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-yellow-300 dark:peer-focus:ring-yellow-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-yellow-400">
                                    </div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Active Post</span>

                                </label>
                            </div>
                        </div>
                       <div class="flex justify-center">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                             <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        <a href="{{route('admin.blog.post.edit',['post'=>$post->id])}}" class="inline-flex items-center ml-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                                <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                              </svg>
                            <span class="ml-2">Edit</span>
                        </a>
                       
                        <form action="{{route('admin.blog.post.destroy',['post'=>$post->id])}}" method="post"  class="remove-form" style="padding: 0; margin:0">
                            @csrf
                            @method('delete')
                          
                            <button class="inline-flex items-center ml-2 px-3 py-2 text-sm font-medium text-center text-white bg-orange-300 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                  </svg>
                                <span class="ml-2">Delete</span>
                            </button>
                           
                        </form>
                       </div>
                    </div>
                </div>
                    
                @endforeach
             </div>
        </div>
        </div>
</x-app>