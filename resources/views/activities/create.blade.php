<form method="POST" action="{{route('activities.store')}}">
    @csrf
    <label for="name_activity">
        Name
        <input type="text" name="name_activity">
    </label>

    <label for="description_activity">
        Description
        <input type="text" name="description_activity">
    </label>

    <label for="due_date">
        Due Date
        <input type="date" name="due_date_activity">
    </label>
    <input type="hidden" name="plant_id" value="1">
    <input type="submit">

</form>
