<form method="POST" action="{{route('activities.update', $activity->id)}}">
@csrf
    @method('put')
<label for="name_activity">
    Name
    <input type="text" name="name_activity" value="{{$activity->name}}">
</label>

<label for="description_activity">
    Description
    <input type="text" name="description_activity" value="{{$activity->description}}">
</label>

<label for="due_date">
    Due Date
    <input type="date" name="due_date_activity" value="{{$activity->due_date}}">
</label>
<input type="hidden" name="plant_id" value="{{$activity->plant_id}}">
<input type="submit">

</form>
