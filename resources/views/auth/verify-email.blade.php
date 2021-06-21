<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="{{url('/storage/logo.png')}}" alt="Logo Licrim" style="width: 130px" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Gracias por registrarte.\n' .'Antes de empezar, ¿podrías verificar tu dirección de correo electrónico haciendo clic en el enlace que acabamos de enviarte? Si no has recibido el correo electrónico, te enviaremos otro con mucho gusto.') }}
        <br><br>
            {{('Equipo Licrim.')}}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar el correo de verificación') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Cerrar la sesión') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
