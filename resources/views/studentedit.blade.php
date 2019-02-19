    <form class="form-horizontal" method="POST" action="{{ route('student.update', $data->id) }}"> 
         

            <h1>edit student </h1><br> 
             @method('PUT')
                     {{ csrf_field() }}

            <input   type="text" name="name" value="{{ $data->name }}" required  ><br>
            <input id="submit" type="submit"  value="submit"    > 

        </form> 