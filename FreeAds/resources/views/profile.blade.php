<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}">
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <div class="row mt-4 mb-5">
            <div class="col-lg-12 margin-tb">
            <div class="pull-right">
            <a class="back" href="{{ route('dashboard')}}">BACK</a>
            </div>
            </div>
            </div>
        <div class="avatar">
        <img src="{{ asset('images/avatars/' . __(auth()->user()->avatar)) }}">   
        </div>  
        <h2 class="nomUser">
            {{ __(auth()->user()->name ) }}'s settings
        </h2>
        <div class="formsetting">
        <form enctype="multipart/form-data" action="{{ route('profile.update') }}" method="POST">
        <label>Update Profile Image </label>
        <div>
        <input type="file" name="avatar">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        </div>
   
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="POST" action="{{ route('profile.update') }}">
                        @method('PUT')
                        @csrf
                            <div class="formsetting">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="__('Nickname')" />
                                    <x-input id="nickname" class="block mt-1 w-full" type="text" name="nickname" value="{{ auth()->user()->name }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ auth()->user()->email }}" autofocus />
                                </div>
                            </div>
                            
                            <div class="grid grid-rows-2 gap-6 mt-4">
                                <div>
                                    <x-label for="phone_number" :value="__('Phone number')" />
                                    <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" value="{{ auth()->user()->phone_number }}" autofocus />
                                </div>
                            </div>
                            </div>
                        
                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                        <div class="boutton">
                            <div class="flex items-center justify-center mt-4">
                                <a class="text-decoration-none" href={{ route('user.destroy')}} >
                                        {{ __('Delete your account') }}
                                </a>
                            </div>
                        </div>
                        
                        <div class="bouttond">
                            <div class="flex items-center justify-center mt-4">
                                <a class="text-decoration-none" href={{ route('profilePassword')}} >
                                        {{ __('Change password') }}
                                </a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>