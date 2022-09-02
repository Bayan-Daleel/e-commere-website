@props(['name'=> $name])
<div class="mb-6 mt-4 ">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ucwords('name')}} </label>
    <div>
    <select  id="category_id" name="category_id" class=" bg-gray-50  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach(\App\Models\Category::all() as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    </div>
</div>
