<x-app>
    <x-b-bar o="Post" t="Post Create" :url="route('admin.blog.post.index')" :add="true">Post List</x-b-bar>

    @slot('scriptTop')
    <x-rich-text-trix-styles />
    @endslot
    <x-form-box method="post" action="{{ route('admin.blog.post.store') }}">
        <div class="form-group col-span-12 md:col-span-12">
            <label for="inputEmail4">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title Here"
                name="title" required />
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-span-12 md:col-span-12">
            <label for="inputEmail4">Category</label>
            <select type="text" class="form-control @error('category_id') is-invalid @enderror" placeholder="Post Category"
                name="category_id" required>
                <option value="">Select Category</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}" @selected(old('category_id')==$cat->id)>{{$cat->title}}</option> 
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group col-span-12 md:col-span-12">
            <label for="inputEmail4">Sub Title</label>
            <textarea type="text" class="form-control @error('sub_title') is-invalid @enderror" placeholder="sub title here..."
                name="sub_title">{{old('sub_title')}}</textarea>
            @error('sub_title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-span-12" id="avatarFgroup">
            <div class="avarar-box">
                <img src="{{ asset('assets/img/avatar.png') }}" alt="" srcset="">
            </div>
            <div>
                <label for="inputEmail4">Photo (Maximum 500 KB) </label>
                <input type="file" class="form-control @error('photo') is_invalid @enderror"
                    name="photo" value="{{ old('photo') }}"
                    onchange="imageChange(event,'avatarFgroup')">
                @error('photo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group col-span-12 md:col-span-12">
            <label for="inputEmail4">Post</label>
            <x-trix-field id="bio" name="post" />
            @error('sub_title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </x-form-box>
</x-app>
