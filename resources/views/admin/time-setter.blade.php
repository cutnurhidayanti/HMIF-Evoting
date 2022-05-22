@extends('layouts.main-admin')

@section('container')
    <div style="display: flex">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&showTitle=1&src=YzB1NGI2dGx2M3MwbjFpYTQ4c2UzY2xjdW9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=Y2xhc3Nyb29tMTA5NzEyOTU5ODE3NjQwODA2OTc1QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=Y2xhc3Nyb29tMTAxMzAyODA1MTExOTI2NTIwNTc1QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTExMzE5OTMwMzIyNTEwNTA1MDg5QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTEyOTE5NTAzMzI1MjEzOTE5NTU3QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTEzMjA0NzA4NjEwOTYwNDgxNDAwQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTAwNDY1MTMwNTk5NjQyODEyNDk5QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTEzMzIwNDAwNTM3MzMxNzM3OTEzQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTAyMTQ2MDExMzg0OTI3NjkyMDkxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTA3ODI1MDM2Njc3Mzk2NDk4MDUwQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTExOTczOTU5NjcwNTEyNTg5MTc5QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTA1Mjc5OTEyNjAwODM5NjMzNzExQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTE3NTc3NTIwMTI3NTQzMzMxMDg4QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23D81B60&color=%23007b83&color=%230B8043&color=%230047a8&color=%230047a8&color=%23202124&color=%230047a8&color=%23202124&color=%230047a8&color=%23202124&color=%230047a8&color=%230047a8&color=%230047a8&color=%230047a8" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        <form>
            <input id="appt-time" type="time" name="appt-time">
        </form>
        <div>
            <button class="btn btn-primary">Set</button>
        </div>
    </div>
@endsection 