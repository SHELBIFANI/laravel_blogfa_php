<x-guest-layout>
    <form method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
        @csrf
        {{-- @dd($errors) --}}
        <!-- Email Address -->
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- UserName -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('UserName')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Title -->
        <div class="mt-4">
            <x-input-label for="title" :value="__('TitleBLog')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- AboutBlog -->
        <div class="mt-4">
            <x-input-label for="about" :value="__('AboutBlog')" />
            <x-text-input id="about" class="block mt-1 w-full" type="text" name="about" :value="old('about')" required />
            <x-input-error :messages="$errors->get('about')" class="mt-2" />
        </div>

        <!-- SubTitle -->
        <div class="mt-4">
            <x-input-label for="subtitle" :value="__('SubTitle')" />
            <x-text-input id="subtitle" class="block mt-1 w-full" type="text" name="subtitle" :value="old('subtitle')" required />
            <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
        </div>

        <!-- ImageProfile -->
        <div class="mt-4">
            <x-input-label for="iamge" :value="__('ProfileImage')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" accept="png/jpg" name="image" :value="old('image')" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
        
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        
        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
        
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
