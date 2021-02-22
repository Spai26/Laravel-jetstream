<div>
    <div>
        <label class="block font-medium text-sm text-gray-700" for="name"> Colegio*</label>
        <input  type=text
            class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
            required>
    </div>
    {{-- evento para departament 
    <div class="mt-4">
        <label class="block font-medium text-sm text-gray-700" name="departament">
            {{ __('Departamento') }}
        </label>
        <select wire:model="SelecetedDepartament" name="departament"
            class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
            required>
            <option value="" selected> {{ __('-Escoge departamento-') }}</option>
            @foreach ($departaments as $departament)
                <option value="{{ $departament->id }}">
                    {{ $departament->name }}
                </option>
            @endforeach
        </select>
    </div>--}}    
{{ $districs }}

    {{-- evento para Provincias 
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" name="province">
                {{ __('Provincia') }}
            </label>
            <select wire:model="selectedProvince" name="province"
                class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                required>
                <option value="" selected> {{ __('-Escoge provincia-') }} </option>
                @foreach ($provinces as $province)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>--}}
  
    

    {{-- eventos para distritos  --}}
   
        <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700" name="district">
                {{ __('Distrito') }}
            </label>
            <select wire:model="selectedProvince" name="district_id"
                class="mt-2 text-sm sm:text-base pl-2 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                required>
                <option value="" selected> {{ __('-Escoge Distrito-') }} </option>
                @foreach ($districs as $distric)
                    <option value="{{ $distric->id }}">{{ $distric->name }}</option>
                @endforeach
            </select>
        </div>
   

</div>
