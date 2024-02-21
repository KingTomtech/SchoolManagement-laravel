@extends('layouts.frontend')

@section('content')

<div class="formWrapper">

    <form method="POST" action="{{ route('login') }}" class="rounded-lg loginForm">
        @csrf
        <div class="mb-4 inputWrapper">

            <label class="block text-gray-700 text-sm font-bold mb-2 inputLabel" for="emailaddress">
                Email
            </label>

            <input class="rounded w-full py-2 px-3 text-gray-700 
            mb-3 leading-tight userInput" type="email" name="email" id="emailaddress" placeholder="email" value="">

            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-4 inputWrapper">

            <label class="block text-gray-700 text-sm font-bold mb-2 inputLabel" for="password">
                Password
            </label>

            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full 
            py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline userInput" 
            type="password" name="password" id="password" placeholder="password" value="">
            
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label class="block text-gray-500 font-bold">
                <input class="mr-2 leading-tight" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="text-sm">
                    Remember Me
                </span>
            </label>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Log In
            </button>
        </div>

    </form>

</div>

@endsection
