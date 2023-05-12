@if ( isset($showInDetails)&&$showInDetails==true)
    <div>
    <h1>Welcome {{$student['name']}}</h1>
    <h2>city: {{$student->city->name}}</h2>
    <h2>phone: {{$student['phone']}}</h2>
    <h2>email:{{$student['email']}}</h2>
</div>

@else
    <a href="/students/{{$student->id}}">
    {{$student->id}}  - {{$student->name}}
</a>   
<br>
    

@endif

