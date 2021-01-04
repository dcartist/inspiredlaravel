@extends('base')
@section('content')

@auth
        <form action="{{ route('admin.blog') }}" method="post" class="mb-4 p-4">
            @csrf
            <div class="mb-4">
                <label for="title">Title</label>
                <input name="title" id="title"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                    placeholder="Post something!"/>
                <label for="image">Image</label>
                <input name="imageurl" id="imageurl"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                    placeholder="Image"/>
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="4"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                    placeholder="Post something!"></textarea>

                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
            </div>
        </form>
@endauth

@endsection

