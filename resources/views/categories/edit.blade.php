<h1>EDIT CATEGORIES</h1>
<form action="{{route('categories.update',$category->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label>Nhập tên loại hàng:</label>
    <input type="text" name="name" placeholder="Nhập tên loại hàng" value="{{ $category->name }}">
    </div>
    <div>
        <input type="submit" value="submit" onclick="return cofirm('Bạn chắc chắn muốn thay đổi?')">
    </div>
</form>