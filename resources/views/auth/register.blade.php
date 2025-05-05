@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-100 via-pink-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">Create your account</h2>
            <p class="mt-2 text-sm text-gray-600">Join us today and start your journey</p>
        </div>
        
        <div class="bg-white/80 backdrop-blur-sm py-8 px-6 shadow-xl rounded-lg sm:px-10 border border-purple-100">
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-purple-700">Full Name</label>
                    <div class="mt-1">
                        <input id="name" type="text" name="name" required 
                            class="w-full px-3 py-2 border border-purple-200 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-white/50"
                            placeholder="">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-purple-700">Email Address</label>
                    <div class="mt-1">
                        <input id="email" type="email" name="email" required 
                            class="w-full px-3 py-2 border border-purple-200 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-white/50"
                            placeholder="">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-purple-700">Password</label>
                    <div class="mt-1">
                        <input id="password" type="password" name="password" required 
                            class="w-full px-3 py-2 border border-purple-200 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-white/50"
                            placeholder="">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-purple-700">Confirm Password</label>
                    <div class="mt-1">
                        <input id="password_confirmation" type="password" name="password_confirmation" required 
                            class="w-full px-3 py-2 border border-purple-200 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 bg-white/50"
                            placeholder="">
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-150 ease-in-out transform hover:scale-[1.02]">
                        Create Account
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-purple-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white/80 text-purple-600">Already have an account?</span>
                    </div>
                </div>

                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" 
                        class="font-medium text-purple-600 hover:text-purple-500 transition duration-150 ease-in-out">
                        Sign in to your account
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
