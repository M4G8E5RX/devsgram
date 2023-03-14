@extends("layouts.app")

@section("titulo")
    ¡Registrate en DevsGram!
@endsection

@section("contenido")
    <div class="md:flex md:justify-center md:gap-20 md:items-center m-4">
        <div class="md:w-6/12 p-5 hidden md:block">
            <img src="{{asset('img/registrar.jpg')}}" alt="img_registrar_usuarios" class="rounded-md">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5 @error('name') mb-1 @enderror">
                    <label id="name" class="mb-2 block uppercase text-gray-600 font-bold">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Escribe tu nombre" class="border p-3 w-full rounded-lg font-bold @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                </div>
                @error("name")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center mb-3">{{ $message }}</p>
                @enderror

                <div class="mb-5 @error('username') mb-1 @enderror" >
                    <label id="username" class="mb-2 block uppercase text-gray-600 font-bold">Nombre de usuario</label>
                    <input type="text" name="username" id="username" placeholder="Escribe tu nombre de usuario" class="border p-3 w-full rounded-lg font-bold @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                </div>
                @error("username")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center mb-3">{{ $message }}</p>
                @enderror

                <div class="mb-5 @error('email') mb-1 @enderror">
                    <label id="email" class="mb-2 block uppercase text-gray-600 font-bold">Correo electrónico</label>
                    <input type="email" name="email" id="email" placeholder="Escribe tu correo electrónico" class="border p-3 w-full rounded-lg font-bold @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                </div>
                @error("email")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center mb-3">{{ $message }}</p>
                @enderror

                <div class="mb-5 @error('password') mb-1 @enderror">
                    <label id="password" class="mb-2 block uppercase text-gray-600 font-bold">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Escribe una contraseña" class="border p-3 w-full rounded-lg font-bold @error('password') border-red-500 @enderror">
                </div>
                @error("password")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center mb-3">{{ $message }}</p>
                @enderror

                <div class="mb-5 @error('password_confirmation') mb-1 @enderror">
                    <label id="password_confirmation" class="mb-2 block uppercase text-gray-600 font-bold">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu contraseña" class="border p-3 w-full rounded-lg font-bold @error('password_confirmation') border-red-500 @enderror">
                </div>
                @error("password_confirmation")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center mb-3">{{ $message }}</p>
                @enderror

                <input type="submit" name="" id="" value="Crear cuenta" class="font-extrabold text-white bg-gradient-to-r from-yellow-600 via-pink-500 to-purple-600 rounded-lg p-3 w-full cursor-pointer hover:from-pink-500 hover:via-purple-600 hover:to-yellow-500">
            </form>
        </div>
    </div>
@endsection