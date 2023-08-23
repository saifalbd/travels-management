<div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
        <li>
            <a href="{{route('admin.home')}}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true"
                    class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Dashboard</span>
            </a>
        </li>


         {{-- Start Dropdown --}}
         <li>
            <button type="button"
                class="drop-btn"
                aria-controls="package" data-collapse-toggle="package">
               <x-icon.user></x-icon.user>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                Package
                </span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="package" class="hidden py-2 space-y-1 dropdown">
                <li>
                    <a href="{{route('admin.package.create')}}">Create Package</a>
                </li>
                <li>
                    <a href="{{route('admin.package.index')}}">Package List</a>
                </li> 
            </ul>
        </li>
    {{-- END Dropdown --}}


           {{-- Start Dropdown --}}
           <li>
            <button type="button"
                class="drop-btn"
                aria-controls="customer" data-collapse-toggle="customer">
               <x-icon.user></x-icon.user>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                Customer
                </span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="customer" class="hidden py-2 space-y-1 dropdown">
                <li>
                    <a href="{{route('admin.customer.create')}}">Create Customer</a>
                </li>
                <li>
                    <a href="{{route('admin.customer.index')}}">Customer List</a>
                </li> 
            </ul>
        </li>
    {{-- END Dropdown --}}


    <li>
        <button type="button"
            class="drop-btn"
            aria-controls="payment" data-collapse-toggle="payment">
           <x-icon.user></x-icon.user>
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
            Payment
            </span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <ul id="payment" class="hidden py-2 space-y-1 dropdown">
            <li>
                <a href="{{route('admin.customer.payment.create')}}">Create Payment</a>
            </li>
            <li>
                <a href="{{route('admin.customer.payment.index')}}">Payment List</a>
            </li> 
        </ul>
    </li>
{{-- END Dropdown --}}


<li>
    <button type="button"
        class="drop-btn"
        aria-controls="blog" data-collapse-toggle="blog">
        <x-icon.message></x-icon.message>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
            Blogs
        </span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <ul id="blog" class="hidden py-2 space-y-1 dropdown">
        <li><a  href="{{route('admin.blog.category.index')}}">Categories</a></li>
        <li><a href="{{route('admin.blog.post.index')}}">Posts</a></li>
    </ul>
</li>


<li>
    <button type="button"
        class="drop-btn"
        aria-controls="bank" data-collapse-toggle="bank">
       <x-icon.user></x-icon.user>
        <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
        Banks
        </span>
        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>
    <ul id="bank" class="hidden py-2 space-y-1 dropdown">
        <li>
            <a href="{{route('admin.bank.create')}}">Create Bank</a>
        </li>
        <li>
            <a href="{{route('admin.bank.index')}}">Banks</a>
        </li> 
    </ul>
</li>



           {{-- Start Dropdown --}}
           <li>
            <button type="button"
                class="drop-btn"
                aria-controls="user" data-collapse-toggle="user">
               <x-icon.user></x-icon.user>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>
                User
                </span>
                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul id="user" class="hidden py-2 space-y-1 dropdown">
                <li>
                    <a href="{{route('admin.user.create')}}">Create User</a>
                </li>
                <li>
                    <a href="{{route('admin.user.index')}}">User List</a>
                </li> 
            </ul>
        </li>
    {{-- END Dropdown --}}

       
    
   
       
    </ul>
</div>
