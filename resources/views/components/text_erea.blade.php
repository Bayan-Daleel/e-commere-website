@props(['name'=> $name])
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="name"
    >
        {{$name}}
    </label>
    <div>
    <textarea class="d-block p-2 border-light shadow w-full" style="background-color:transparent"
              name={{$name}}
                  id={{$name}}
                  cols="57"
                  rows="5"

    >{{ old($name) }}</textarea>
    @error($name)
    <p class="text-danger">{{ $message }}</p>
@enderror
    </div>
</div>


