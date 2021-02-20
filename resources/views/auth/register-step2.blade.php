<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register-step2.post') }}">
            @csrf

            <div>
                <x-jet-label for="ap_paterno" value="{{ __('Apellido paterno') }}" />
                <x-jet-input id="ap_paterno" class="block mt-1 w-full" type="text" name="ap_paterno" :value="old('ap_paterno')" />
            </div>

            <div class="mt-4">
                <x-jet-label for="ap_materno" value="{{ __('Apellido materno') }}" />
                <x-jet-input id="ap_materno" class="block mt-1 w-full" type="text" name="ap_materno" :value="old('ap_materno')" />
            </div>
            
            <div class="mt-4">
                <x-jet-label for="username" value="{{ __('Usuario') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" />
            </div>
            {{-- <div class=" mt-4 ">
                <x-jet-label for="departament_id" value="{{ __('Departamentos') }}" />
                <select id="departament_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    @foreach ( $departaments as $departament)               
                        <option value="{{ $departament->id }}">
                            {{ $departament->name }}
                        </option>
                    @endforeach
                </select>
            </div> --}}

           

                <x-jet-button class="ml-4 mt-4">
                    {{ __('Terminar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
