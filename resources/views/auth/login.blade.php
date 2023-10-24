@extends('auth.layouts')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="w-96 bg-white p-6 rounded-lg shadow-xl">
        <h2 class="text-2xl font-bold mb-6">Login</h2>

        <form action="{{ route('authenticate') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email Address</label>
                <input type="email" class="form-input w-full mt-2 border @error('email') border-red-500 @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" class="form-input w-full mt-2 border @error('password') border-red-500 @enderror" id="password" name="password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection