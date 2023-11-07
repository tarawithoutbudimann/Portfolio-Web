@extends('auth.layouts')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="w-96 bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold mb-6">Register</h2>

        <form action="{{ route('store') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" class="form-input w-full mt-2 border @error('name') border-red-500 @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email Address</label>
                <input type="email" class="form-input w-full mt-2 border @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-3 row justify-content-center">
                <div class="col-md-7 col-form-label text-start">
                    <div class="col">
                        <label for="photo" class="mb-2">Photo</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo"
                            name="photo" value="{{ old('photo') }}">
                        @if ($errors->has('photo'))
                        <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" class="form-input w-full mt-2 border @error('password') border-red-500 @enderror" id="password" name="password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                <input type="password" class="form-input w-full mt-2 border" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection