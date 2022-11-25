<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">


<div class="flex min-h-screen items-center justify-start bg-white">
  <div class="mx-auto w-full max-w-lg">
    <img src="https://api.v1.iyyu.com/images/space/DyhSrd5hVZx9rph4BAhQBdoIkPx1ouEcpuKyYGb8JJ6KtTEBHlqz1YGGAvIhl6kb-480.png" width="100px" height="100px">
    <p class="mt-3 font-bold">Activiteiten</p>
    <!-- @csrf -->
    <form method="POST" action="{{route('activities.store')}}" name="activiteiten" id="activiteiten" class="mt-10">

      <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE"/>
      <div class="grid gap-6 sm:grid-cols-2">
        <div class="relative z-0 ">
          <input type="text" name="name_activity" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-purple-900 focus:outline-none focus:ring-0" placeholder=" "/>
          <label for="name_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-purple-900 peer-focus:dark:text-purple-900 font-bold"><p>Name</label>
        </div>
        <div class="relative z-0">
          <input type="date" name="due_date_activity" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-purple-900 focus:outline-none focus:ring-0" placeholder=" "/>
          <label for="due_date" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-purple-900 peer-focus:dark:text-purple-900 font-bold">Due Date</label>
        </div>
        <div class="relative z-0 col-span-2">
          <textarea name="description_activity" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-purple-900 focus:outline-none focus:ring-0" placeholder=" "></textarea>
          <label for="description_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-purple-900 peer-focus:dark:text-purple-900 font-bold">Description</label>
        </div>
      </div>
      <input type="hidden" name="plant_id" value="1">
      <button type="submit" class="mt-5 rounded-md bg-gray-900 px-10 py-2 text-white hover:bg-purple-900">Submit</button>
    </form>
  </div>
</div>