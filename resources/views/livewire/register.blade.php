<div>
    <form wire:submit.prevent="submit">
        @csrf
        <div>
            <x-jet-label for="name" value="{{ __('Usuario') }}" />
            <x-jet-input id="name" wire:model.lazy="user.name" class="block w-full mt-1" type="text" :value="old('name')"
                autofocus autocomplete="name" />
            @error('user.name')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror

        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" wire:model.lazy="user.email" class="block w-full mt-1" type="text"
                :value="old('email')" />
            @error('user.email')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Contraseña') }}" />
            <x-jet-input id="password" wire:model.lazy="user.password" :value="old('password')" class="block w-full mt-1"
                type="password" />
            @error('user.password')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
            <x-jet-input id="password_confirmation" wire:model.lazy="password_confirmation" class="block w-full mt-1"
                type="password" :value="old('password_confirmation')" />
            @error('password_confirmation')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mt-4">
            <x-jet-label for="date_birth" value="{{ __('Fecha de nacimiento') }}" />
            <x-jet-input id="date_birth" wire:model.lazy="user.date_birth" class="block w-full mt-1" type="date" />
            @error('user.date_birth')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <div class="mt-4">
            <x-jet-label for="gender" value="{{ __('Género') }}" />
            <select id="gender" wire:model.lazy="user.gender" class="block w-full mt-1 appearance-none"
                :value="old('user.gender')">
                <option></option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro</option>
            </select>

            @error('user.gender')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
            @enderror
        </div>


        <div class="mt-4">
            <x-jet-label for="state" value="{{ __('Estado') }}" />
            <select id="state" wire:model.lazy="selectedState" class="block w-full mt-1 appearance-none"
                :value="old('state')">
                <option></option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>
        @if (!is_null($cities))
            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('Ciudad') }}" />
                <select id="city" wire:model.lazy="user.city_id" class="block w-full mt-1 appearance-none">
                    <option></option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

            </div>
        @endif


        <div class="flex items-center justify-end mt-4">
            <a class="pl-3 text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Ya tienes una cuenta?') }}
            </a>

            <button type="submit"
                class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-500 hover:text-white hover:border-transparent">Registrarme</button>

        </div>
    </form>
</div>
