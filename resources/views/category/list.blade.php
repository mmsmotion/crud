<table class="table table-bordered mt-4">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <td>Controls</td>
        <th>Created_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Category::all() as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>

                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-outline-warning">Edit</a>

                <form action="{{ route('category.destroy',$category->id) }}" class="d-inline-block" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger">Del</button>
                </form>

            </td>
            <td>{{ $category->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
