@foreach ($classrooms as $classroom)<br><br>
Classroom {{ $classroom->name }}<br>
Teacher: 
@foreach ($classroom->teacher as $teacher)
{{$teacher->name}} ,
@endforeach
<br>  Student:
@foreach ($classroom->student as $teacher)
{{$teacher->name}} ,
@endforeach
@endforeach
