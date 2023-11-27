<h1>THÊM CATEGORIES</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
    <label>Nhập tên loại hàng:</label>
    <input type="text" name="name" placeholder="Nhập tên loại hàng">
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>