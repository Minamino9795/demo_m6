<h1>BẢNG DEMO_CATEGORIES</h1>
<a href="{{ route('categories.create') }}" class="btn btn-success">Thêm</a>
<table class="table" border="1" style="width:40%;">
    <thead>
        <tr>
            <th>Số thứ tự</th>
            <th>Tên</th>
            <th>Tùy chọn</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $category->name }}</td>
                <td>

                    <a href="{{ route('categories.edit', $category->id) }}">
                    <button>Sửa</button></a> ||

                    <form onclick="return confirm('Bạn Chắc chăn muốn xóa?')"
                        action="{{ route('categories.destroy', $category->id) }}" style="display:inline" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xoá</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>


</table>
