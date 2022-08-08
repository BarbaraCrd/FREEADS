
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
                            <div class="login"> REGISTER </div>
                            
                        </label>
                    
                    

                    <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        
                        <form method="POST" action="{{ route('register') }}" class="mt-10">
                        @csrf

                        <div>    
                            <x-label for="Name" :value="__('Nickname')" />            
                                <input type="text" placeholder="Nickname" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 
                                focus:bg-blue-100 focus:ring-0"  name="name" required autofocus>                           
                            </div>
                                           
                            <div class="mt-5">
                            <x-label for="email" :value="__('Email')" />
                                <input type="email" placeholder="Adresse mail" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl 
                                shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" name="email" :value="old('email')" required autofocus>
                            </div>
                
                            <div class="mt-5">    
                            <x-label for="password" :value="__('Password')" />            
                                <input type="password" placeholder="Password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 
                                focus:bg-blue-100 focus:ring-0" name="password" required autocomplete="new-password">                           
                            </div>

                            <div class="mt-5">    
                            <x-label for="password_confirmation" :value="__('Password confirmation')" />            
                                <input type="password" id="password_confirmation" placeholder="Confirm password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 
                                focus:bg-blue-100 focus:ring-0" type="password" name="password_confirmation" required autocomplete="__('Confirm Password')">                           
                            </div>

                            <div class="mt-5">    
                            <x-label for="phone_number" :value="__('Phone number')" />            
                                <input type="text" id="phone_number" placeholder="Phone number" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 
                                focus:bg-blue-100 focus:ring-0" name="phone_number" required>                           
                            </div>

                            <div class="mt-5">
                                <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                {{ __('Register') }}
                                </button>
                            </div>

                
                            <div class="flex mt-5 items-center text-center">
                                <hr class="border-gray-300 border-1 w-full rounded-md">
                                <label class="block font-medium text-sm text-gray-600 w-full">
                                    Register with Facebook or Google
                                </label>
                                <hr class="border-gray-300 border-1 w-full rounded-md">
                            </div>
                
                            <div class="flex mt-5 justify-center w-full">
                                <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    
                                    Facebook
                                </button>
                
                                <button class="bg-orange-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    
                                    Google
                                </button>
                            </div>
                
                             <div class="mt-5">
                                <div class="flex justify-center items-center">
                                    <label class="mr-2" >Already registered ?</label>
                                    <a href="{{ __('login') }}" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    Log in
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

