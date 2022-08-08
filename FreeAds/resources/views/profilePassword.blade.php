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
        <div class="row mt-4 mb-3">
            <div class="col-lg-12 margin-tb">
            <div class="pull-right">
            <a class="back" href="{{ route('dashboard')}}">BACK</a>
            </div>
            </div>
            </div>
        </div>
        <div class="avatar">
        <img src="{{ asset('images/avatars/' . __(auth()->user()->avatar)) }}">   
        </div>  
        <h2 class="nomUser">
            {{ __(auth()->user()->name ) }}'s password
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-validation-errors />
                    <x-success-message />
                    <div class="formsetting">
                    <form method="POST" action="{{ route('profile.updatePassword') }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-rows-2 gap-6 mt-4">
                            <div>
                                <x-label for="old_password" :value="__('Old password')" />
                                <x-input id="old_password" class="block mt-1 w-full"
                                         type="password"
                                         name="old_password"/>
                                        
                            </div>

                            <div>
                                <x-label for="new_password" :value="__('New password')" />
                                <x-input id="new_password" class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         autocomplete="new-password" />
                            </div>
                            <div>
                                <x-label for="confirm_password" :value="__('Confirm password')" />
                                <x-input id="confirm_password" class="block mt-1 w-full"
                                         type="password"
                                         name="password_confirmation"
                                         autocomplete="confirm-password" />
                            </div>
                        
                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>