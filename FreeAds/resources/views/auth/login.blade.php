<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/stylelogin.css') }}">
</head>
<body>

<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-orange-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                    <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                        <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                        <a href="{{ route('home') }}"><img src="{{URL::asset('/images/logologin.png')}}" alt ="logo" class="logo"></a>
                        
                         <div class="login">   LOGIN </h1> </div>
                            
                        </label>
                    
                    
                    <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                        <form method="POST" action="{{ route('login') }}" class="mt-10">
                        @csrf
                                           
                            <div>
                            <x-label for="email" :value="__('Email')" />
                                <input type="email" placeholder="Adresse mail" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl 
                                shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" name="email" :value="old('email')" required autofocus>
                            </div>
                
                            <div class="mt-7">    
                            <x-label for="password" :value="__('Password')" />            
                                <input type="password" placeholder="Password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 
                                focus:bg-blue-100 focus:ring-0" type="password" name="password" required autocomplete="current-password">                           
                            </div>

                            <div class="mt-7 flex">
                                <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">
                                    {{ __('Remember me') }}
                                    </span>
                                </label>
                
                               <div class="w-full text-right">    
                               @if (Route::has('password.request')) 
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{route('password.request')}}">
                                    {{ __('Forgot your password?') }}
                                    </a>                                  
                               </div>
                            </div>
                            @endif
                            <div class="mt-7">
                                <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                {{ __('Log in') }}
                                </button>
                            </div>

                
                            <div class="flex mt-7 items-center text-center">
                                <hr class="border-gray-300 border-1 w-full rounded-md">
                                <label class="block font-medium text-sm text-gray-600 w-full">
                                    Log in with facebook or google
                                </label>
                                <hr class="border-gray-300 border-1 w-full rounded-md">
                            </div>
                
                            <div class="flex mt-7 justify-center w-full">
                                <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    
                                    Facebook
                                </button>
                
                                <button class="bg-orange-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    
                                    Google
                                </button>
                            </div>
                
                             <div class="mt-7">
                                <div class="flex justify-center items-center">
                                    <label class="mr-2" >Are you new?</label>
                                    <a href="{{ __('register') }}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    Create an account
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>      
        </div>
    </div>
</div>

