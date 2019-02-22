<form class="form-horizontal" method="POST" action="{{ route('teacher.update', $data->id) }}"> 


    <h1>edit teacher </h1><br> 
    @method('PUT')
    {{ csrf_field() }}

    <input   type="text" name="name" value="{{ $data->name }}" required  ><br>
    <input id="submit" type="submit"  value="submit"    > 

</form> 