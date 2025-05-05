@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-purple-50 to-pink-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Welcome back</h2>
            <p class="mt-2 text-sm text-gray-600">Sign in to your account</p>
        </div>
        
        <div class="bg-white/80 backdrop-blur-sm py-8 px-6 shadow-xl rounded-lg sm:px-10 border border-blue-100">
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-blue-700">Email Address</label>
                    <div class="mt-1">
                        <input id="email" type="email" name="email" required 
                            class="w-full px-3 py-2 border border-blue-200 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white/50"
                            placeholder="">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-blue-700">Password</label>
                    <div class="mt-1">
                        <input id="password" type="password" name="password" required 
                            class="w-full px-3 py-2 border border-blue-200 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white/50"
                            placeholder="">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" 
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-blue-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-blue-700">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out transform hover:scale-[1.02]">
                        Sign in
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-blue-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white/80 text-blue-600">New to our platform?</span>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <a href="{{ route('register') }}" 
                        class="font-medium text-blue-600 hover:text-blue-500 transition duration-150 ease-in-out">
                        Create a new account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
