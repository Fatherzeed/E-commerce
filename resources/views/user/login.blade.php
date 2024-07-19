@extends('partials.main')


@section('content')


<section class="bg-white flex items-center justify-center min-h-screen ">
    <div class="flex bg-[#eee] shadow-lg rounded-lg overflow-hidden w-2/5 max-h-[60dvh] relative items-center">
        <div id="imageContainer" class=" absolute w-1/2 h-full overflow-hidden transform transition-transform duration-500">
            <img src="{{ asset('image/img-login.jpg') }}" alt="" class="w-full h-full object-cover">
        </div> 
        {{-- login --}}
        <div class="w-1/2 p-8 bg-[#eee]">
            <h2 class="text-6xl font-bold mb-6 text-center text-[75px]">Sh<span class="text-sky-600">op</span></h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" placeholder="username" class="italic mt-1 block w-full p-2 border rounded-md text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="password" class="italic mt-1 block w-full p-2 border rounded-md text-sm">
                </div>
                <div class="mb-4 flex justify-between items-center">
                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="text-sm font-medium text-gray-700">Remember Me</label>
                    </div>
                    <a href="" class="text-sm text-sky-600">Forgot your password?</a>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Sign In</button>
            </form>

            <p class="mt-3 text-center">don't have an account? <button id="registerButton" class="font-bold">Register here</button></p>
        </div>
         {{-- register --}}
        <div class="w-1/2 p-8 bg-[#eee]">
            <h2 class="text-6xl font-bold mb-6 text-center text-[75px]">Sh<span class="text-sky-600">op</span></h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="mt-1 block w-full p-2 border rounded-md italic text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="mt-1 block w-full p-2 border rounded-md italic text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="mt-1 block w-full p-2 border rounded-md italic text-sm">
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="mt-1 block w-full p-2 border rounded-md italic text-sm">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Register</button>
            </form>

            <p class="mt-3 text-center">already have an account? <button id="loginButton"  class="font-bold">Login now!</button></p>
           
        </div>
    </div>
    
</section>
    
@endsection

@section('script')

@endsection