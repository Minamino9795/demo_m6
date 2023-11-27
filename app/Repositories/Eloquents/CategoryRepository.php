<?php
namespace App\Repositories\Eloquents;

use App\Models\Category;
use App\Repositories\Eloquents\EloquentRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    /*
    - Do PostRepository đã kế thừa EloquentRepository nên không cần triển khai
    các phương thức trừu tượng của PostRepositoryInterface
    - Có thể ghi đè phương thức ở đây
    - Nếu muốn thêm phương thức mới cần:
        + Khai báo thêm ở PostRepositoryInterface
        + Triển khai lại ở đây
    - Ví dụ: paginate() không có sẵn trong RepositoryInterface, để thêm chúng ta thêm:
        + Khai báo paginate() ở PostRepositoryInterface
        + Triển khai lại ở PostRepository
    */
    public function paginate($request){
        $result = $this->model->paginate();
        return $result;
    }
    public function all($request)
    {
        // __METHOD__;
        // $result = $this->model->all();
        return Category::orderBy('id','DESC')->paginate(10);
    }
    public function find($id)
    {
        $category = Category::find($id);
        return $category;
    }
    public function store($request)
    {
        $category= new Category();
        $category->name= $request->name;
        return $category->save();

    }
    public function update($request, $id)
    {
        $category= new Category();
        $category= Category::find($id);
        $category->name= $request->name;
        return $category->save();

    }
    public function destroy($id)
    {
        return $this->model->where('id',$id)->delete();
    }

}