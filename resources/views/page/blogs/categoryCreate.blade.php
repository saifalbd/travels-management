<x-app>
    <x-b-bar o="Categoy" t="Category Create" :url="route('admin.blog.category.index')" :add="true">Category List</x-b-bar>
    <x-form-box method="post" action="{{ route('admin.blog.category.store') }}">
        <div class="form-group col-span-12 md:col-span-12">
            <label for="inputEmail4">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Product Category"
                name="title" required />
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </x-form-box>
</x-app>
