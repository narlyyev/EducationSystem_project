<form action="{{ url()->current() }}" method="get">
    <div class="mb-3">
        <label for="course" class="form-label fw-bold">Courses</label>
        <select class="form-select" name="course_id" id="course">
            <option value selected>-</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{$course->id == $course_id ? 'selected' : ''}}>
                    {{ $course->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="classroom" class="form-label fw-bold">Classroom</label>
        <select class="form-select" name="classroom_id" id="classroom">
            <option value selected>-</option>
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}" {{$classroom->id == $classroom_id ? 'selected' : ''}}>
                    {{ $classroom->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="teacher" class="form-label fw-bold">Teacher</label>
        <select class="form-select" name="teacher_id" id="teacher">
            <option value selected>-</option>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{$teacher->id == $teacher_id ? 'selected' : ''}}>
                    {{ $teacher->first_name }}
                    {{ $teacher->last_name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="registration" class="form-label fw-bold">Registration</label>
        <select class="form-select" name="registration_id" id="registration">
            <option value selected>-</option>
            @foreach($registrations as $registration)
                <option value="{{ $registration->id }}" {{$registration->id == $registration_id ? 'selected' : ''}}>
                    {{ $registration->$registration}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="mr-sm-2 fw-bold" for="inlineFormCustomSelect">Gender</label>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option value="1"
                    {{ isset($gender) ? 'selected': '' }}>
                Male
            </option>
            <option value="2"
                    {{ isset($gender) ? 'selected': '' }}>
                Female
            </option>
        </select>
    </div>
    <div class="row g-2">
        <div class="col">
            <button type="submit" class="btn btn-dark w-100">Filter</button>
        </div>
        <div class="col-auto">
            <a href="{{ url()->current() }}" class="btn btn-light w-100">Clear</a>
        </div>
    </div>
</form>