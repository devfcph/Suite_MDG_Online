@section('plugins.Sweetalert2', true)



<x-guest-layout>

    {{ session()->get('msg')}}
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <img src="{{ url('images/biglogo.png') }}" width="120px;" height="120px;" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordar usuario') }}</span>
                </label>
            </div>



            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Quiero registrarme') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('¡Vamos!') }}
                </x-jet-button>
            </div>






        </form>
    </x-jet-authentication-card>
</x-guest-layout>





@section('js')
    <script>
        console.log('Hi!');

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });



        $(document).ready(function() {


            @if (!empty($msg))
            
                Toast.fire({
                icon: 'warning',
                title: "<?php echo session()->get('msg'); ?>"
                });
            
            @endif

        });
    </script>



    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        var data = "";
        var flag = "success";
    </script>


    <script type="text/javascript" src="vendor/bs-custom-file-input.min.js">
    </script>





@stop
@include('sweet::alert')
