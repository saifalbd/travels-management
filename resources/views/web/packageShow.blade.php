<x-app-web>

    <div class="container bg-fuchsia-50">
        

        <div class="pt-10">
            <h1 class="text-center font-extrabold text-4xl font-ac my-10 text-cyan-600 sec-title">
                <div class="text-2xl text-rose-400">Package details</div>
                <div>{{$package->name}}</div>
            </h1>
           
            <div>
                {!!$package->body->render()!!}
            </div>
        </div>


        
    </div>
    <x-package-list :packages="$packages"></x-package-list>
</x-app-web>