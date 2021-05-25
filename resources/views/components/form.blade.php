<form method="POST" action="{{route('store')}}">
@csrf
@method('POST')

<label for="">title</label>
<input type="text" name="title" id="title">
<label for="">original_title</label>
<input type="text" name="original_title" id="original_title">
<label for="">nationality</label>
<input type="text" name="nationality" id="nationality">
<label for="">date</label>
<input type="date" name="date" id="date">
<label for="">vote</label>
<input type="number" name="vote" id="vote">
<input type="submit" value="Submit">


</form>
