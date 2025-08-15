<div>
    <h1>Update Student Details</h1>

    <form action="/edit-student/{{$data->id }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name">
        <br><br>

        <input type="email" name="email" value="{{ $data->email }}" placeholder="Enter Email">
        <br><br>

        <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Enter Phone">
        <br><br>

        <button type="submit">Update Details</button>
        <a href="/list">Cancel</a>
    </form>
</div>
