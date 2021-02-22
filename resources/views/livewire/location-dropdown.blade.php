<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <label>Departamento</label>
    <select wire:model="state" name="state">
        <option selected disabled> -Escoge departamento-</option>
        @foreach ($allState as $state)
            <option value="{{ $state->id }}">                
                {{ $state->name }}
            </option>
        @endforeach
    </select>


   

        

  
</div>
