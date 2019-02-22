<!doctype html>
<html>
    <head>
        <title> </title>
    </head>
    <body> 

        <a href="{{ url('pdf/')  }}">download pdf</a>

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


        <form class="form-horizontal" method="POST" action="{{ route('teacher.store') }}"> 
            {{ csrf_field() }}


            <h1>Add teacher</h1><br> 
            <input   type="text" name="name" value="" required  ><br>
            <input id="submit" type="submit"  value="submit"    > 

        </form> 

        <br>
        <table border="1" cellspacing="0" cellpadding="4">
            <tr>
                <th>id</th>
                <th>teacher Name</th> 
            </tr>

            @foreach ($teachers as $teacher)
            <tr>  <td>{{ $teacher->id }}</td><td>{{ $teacher->name }}</td>
                <td> 
                    <form class="form-horizontal"  action="{{ route('teacher.edit', $teacher->id)  }}"> 

                        <input id="submit" type="submit"  value="edit"    > 
                    </form> 

                    <form class="form-horizontal"  method="POST" action="{{ route('teacher.destroy', $teacher->id)  }}"> 
                        {{ csrf_field() }}

                        @method('DELETE')
                        <input id="submit" type="submit"  value="DELETE"    > 
                    </form> 

            </tr>
            @endforeach

        </table>


        <br>
        <form class="form-horizontal" method="POST" action="{{ route('student.store') }}"> 
            {{ csrf_field() }}


            <h1>Add student</h1><br> 
            <input   type="text" name="name" value="" required  ><br>
            <input id="submit" type="submit"  value="submit"    > 

        </form> 
        <table border="1" cellspacing="0" cellpadding="4">
            <tr>
                <th>id</th>
                <th>student Name</th> 
            </tr>

            @foreach ($students as $student)
            <tr>  <td>{{ $student->id }}</td><td>{{ $student->name }}</td>
                <td> 
                    <form class="form-horizontal"  action="{{ route('student.edit', $student->id)  }}"> 

                        <input id="submit" type="submit"  value="edit"    > 
                    </form> 

                    <form class="form-horizontal" method="POST"  action="{{ route('student.destroy', $student->id)  }}"> 
                        {{ csrf_field() }}


                        @method('DELETE')
                        <input id="submit" type="submit"  value="DELETE"    > 
                    </form> 

            </tr>
            @endforeach

        </table>

        <br><br>
        <form class="form-horizontal" method="POST" action="{{ route('classroom.store') }}"> 
            {{ csrf_field() }}


            <h1>Add classrom</h1><br> 
            <input   type="text" name="name" value="" required  ><br>
            <input id="submit" type="submit"  value="submit"    > 

        </form> 

        <br>
        <table border="1" cellspacing="0" cellpadding="4">
            <tr>
                <th>id</th>
                <th>classroom Name</th> 
            </tr>

            @foreach ($classrooms as $classroom)
            <tr>  <td>{{ $classroom->id }}</td><td>{{ $classroom->name }}</td>
                <td> 
                    <form class="form-horizontal"  action="{{ route('classroom.edit', $classroom->id)  }}"> 

                        <input id="submit" type="submit"  value="edit"    > 
                    </form> 

                    <form class="form-horizontal"  method="POST" action="{{ route('classroom.destroy', $classroom->id)  }}"> 
                        {{ csrf_field() }}
                        @method('DELETE')
                        <input id="submit" type="submit"  value="DELETE"    > 
                    </form> 
                </td>

                <td> 


                    <form class="form-horizontal" method="post" action="{{ url('teacher/addclass')  }}">       add teacher
                        {{ csrf_field() }}
                        <input  type="hidden"  value="{{ $classroom->id }}"  name="classroom"  > 
                        <select name="teacher"> 
                            @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option> 
                            @endforeach
                        </select>
                        <input id="submit" type="submit"  value="add"    > 
                    </form> 

                </td>

                <td>
                    <form class="form-horizontal"  method="post"  action="{{ url('student/addclass')  }}">       
                        add $student
                        {{ csrf_field() }}
                        <input  type="hidden"  value="{{ $classroom->id }}"  name="classroom"  > 

                        <select name="student"> 
                            @foreach ($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }}</option> 
                            @endforeach
                        </select>
                        <input id="submit" type="submit"  value="add"    > 
                    </form>


                </td>
            </tr>
            @endforeach

        </table>

