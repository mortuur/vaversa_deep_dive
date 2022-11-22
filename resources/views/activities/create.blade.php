<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="style.css">
<div class="w-full bg-grey-500">
        <div class="container mx-auto py-8">
            <div class="w-96 mx-auto bg-white rounded shadow">

                <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500 justify-center">Activiteiten
                </div>


<form method="POST" action="{{route('activities.store')}}" name="activiteiten" id="activiteiten">
<div class="py-4 px-8">
<div class="mb-4">
    @csrf
    <label for="name_activity" class="block text-grey-darker text-sm font-bold mb-2">
        Name
        <input type="text" name="name_activity" class=" border rounded w-full py-2 px-3 text-grey-darker">
    </label>
</div>
<div class="mb-4">
    <label for="description_activity" class="block text-grey-darker text-sm font-bold mb-2">
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
    <input type="submit" class="mb-2 mx-16 rounded-full py-1 px-24 bg-purple-400 justify-center">
    </div>
</div>
</div>

</form>
