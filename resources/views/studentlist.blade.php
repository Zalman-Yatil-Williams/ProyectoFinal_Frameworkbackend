<div class="card mb-3">
    <img src="https://pbs.twimg.com/media/EjzUi8iWsAAux-H?format=jpg&name=large" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find in here all the information about the students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">NumControl</th>
                <th scope="col">First name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col">Carreer</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->lastName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->carreer }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-warning">Delete</a>

                    </td>


                </tr>
                
            @endforeach
            </tbody>
        </table>
    </div>
</div>