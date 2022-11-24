<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">


<div class="flex min-h-screen items-center justify-start bg-white">
  <div class="mx-auto w-full max-w-lg">
    <img src="https://api.v1.iyyu.com/images/space/DyhSrd5hVZx9rph4BAhQBdoIkPx1ouEcpuKyYGb8JJ6KtTEBHlqz1YGGAvIhl6kb-480.png" width="100px" height="100px">
    <p class="mt-3 text-purple-800">Activiteiten</p>
    <!-- @csrf -->
    <form method="POST" action="{{route('activities.store')}}" name="activiteiten" id="activiteiten" class="mt-10">

      <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" /> 
      <div class="grid gap-6 sm:grid-cols-2">
        <div class="relative z-0">
          <input type="text" name="name_activity" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
          <label for="name_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Name</label>
        </div>
        <div class="relative z-0">
          <input type="date" name="due_date_activity" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
          <label for="due_date" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Due Date</label>
        </div>
        <div class="relative z-0 col-span-2">
          <textarea name="description_activity" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
          <label for="description_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Description</label>
        </div>
      </div>
      <input type="hidden" name="plant_id" value="1">
      <button type="submit" class="mt-5 rounded-md bg-purple-900 px-10 py-2 text-white">Submit</button>
    </form>
  </div>
</div>
<!-- <div class="flex min-h-screen items-center justify-start bg-white">
        <div class="mx-auto w-full max-w-lg">
        <h1 class="text-4xl font-medium">Vaversa</h1>
                <div class="mt-3">Activiteiten
            </div>


<form method="POST" action="{{route('activities.store')}}" name="activiteiten" id="activiteiten" class="mt-10">
<div class="grid gap-6 sm:grid-cols-2">
<div class="relative z-0">
    <!-- @csrf -->
    <!-- <label for="name_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">
        Name
        <input type="text" name="name_activity" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">
    </label>
</div>
<div class="mb-4">
    <label for="description_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">
        Description
        <textarea name="description_activity" class=" border rounded w-full py-2 px-3 text-grey-darker"></textarea>
    </label>
</div>
<div class="mb-4">

    <label for="due_date" class="block text-grey-darker text-sm font-bold mb-2">
        Due Date
        <input type="date" name="due_date_activity" class=" border rounded w-full py-2 px-3 text-grey-darker">
    </label>
    <div class="mb-4">
    <input type="hidden" name="plant_id" value="1">
    <input type="submit" class="mb-2 mx-16 rounded-full py-1 px-20 bg-purple-400 justify-center">
    </div>
</div>
</div>

</form> --> -->
