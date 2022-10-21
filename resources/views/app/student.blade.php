<div class="bg-secondary bg-opacity-10 mb-4">
    <div class="row p-4">
        <div class="col-6 text-center">
            <div class="h5 pb-3">
                <div class="h3 text-center text-danger pb-3">About student</div>
                <span class="text-success">First name:</span> {{$student->first_name}} <br>
                <span class="text-success">Last name:</span> {{$student->last_name}}
            </div>
            <div class="h5">
                <span class="text-success">Phone:</span> +993{{$student->phone}} <br>
                <span class="text-success">Phone_2:</span> +993{{$student->phone_2}}
            </div>
            <div class="h5 pt-3">
                <span class="text-success">Birthday:</span> {{$student->birthday}}
            </div>
            <div class="h5 pt-3">
                <span class="text-success">Gender:</span> @if($student->gender)
                    <i class="bi-gender-male text-info">Male</i>
                @else
                    <i class="bi-gender-female text-danger opacity-75">Female</i>
                @endif
            </div>
        </div>
        <div class="col-6 text-center">
            <div class="h5 pb-3">
                <div class="h3 text-center text-success pb-3">About course</div>
                <span class="text-danger">Course:</span> {{$student->course->name}} <br>
                <span class="text-danger">Price:</span> {{$student->course->price}} <span>TMT</span>
            </div>
            <div class="h5 pb-3">
                <span class="text-danger">Teacher's name:</span> {{$student->teacher->first_name}}
                {{$student->teacher->last_name}}
            </div>
            <div class="h5 pb-3">
                <span class="text-danger">Registration:</span>
                {{$registration_id}}
            </div>
            <div class="h5">
                <span class="text-danger">Classroom:</span> {{$student->classroom->name}} <br>
            </div>
        </div>
    </div>
</div>