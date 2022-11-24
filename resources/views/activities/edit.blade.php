<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">

<div class="flex min-h-screen items-center justify-start bg-white">
  <div class="mx-auto w-full max-w-lg">
  <img src="https://api.v1.iyyu.com/images/space/DyhSrd5hVZx9rph4BAhQBdoIkPx1ouEcpuKyYGb8JJ6KtTEBHlqz1YGGAvIhl6kb-480.png" width="100px" height="100px">
    <p class="mt-3 text-purple-900">Activiteiten</p>
<form method="POST" action="{{route('activities.update', $activity->id)}}" class="mt-10">
<!-- @csrf
    @method('put') -->
<input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
<div class="grid gap-6 sm:grid-cols-2">
    <div class="relative z-0">
<label for="name_activity" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" ">
    Name
    <input type="text" name="name_activity" value="{{$activity->name}}" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="Name">
</label>
</div>
<div class="relative z-0">
<label for="due_date" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" ">
    Due Date
    <input type="date" name="due_date_activity" value="{{$activity->description}}" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="Name">

</div>
<div class="relative z-0 col-span-2">
<label for="description_activity" class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"></label>
    Description
    <textarea name="due_date_activity" rows="5" value="{{$activity->due_date}}" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
</div>
</div>
<input type="hidden" name="plant_id" value="{{$activity->plant_id}}">
<input type="submit" class="mt-5 rounded-md bg-purple-900 px-10 py-2 text-white">

</form>
