<a href=" {{ route('courses.create') }}">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Created At</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($data as $each)
        <tr>
            <td>{{ $each->id }}</td>
            <td>{{ $each->name }}</td>
            <td>{{ $each->date_created_at}}</td>
            <td>
                <a href=" {{ route('courses.edit', $each) }}">
                    <button>Edit</button>
                </a>
            </td>
            <td>
                <form action="{{ route('courses.destroy', ['course'=> $each->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button> Delete</button>

                </form>
            </td>
        </tr>
    @endforeach

</table>

