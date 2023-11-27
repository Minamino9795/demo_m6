B7: Lần lượt tạo 2 thư mục
- app/Repositories/Eloquents: để làm việc với database
- app/Repositories/Interfaces: để tạo ra các Interfaces
B8: Tạo ra các file trong tầng Repositories
    - Interfaces
        + app/Repositories/Interfaces/RepositoryInterface.php: dùng để tạo ra interface chung cho cho tất cả các repository interface
        + app/Repositories/Interfaces/PostRepositoryInterface.php: để sử dụng cho PostRepositoryInterface
    + Eloquents
        + app/Repositories/Eloquents/EloquentRepository.php: khai báo các phương thức chung làm việc với model
        + app/Repositories/Eloquents/PostRepository.php: khai báo các phương thức làm việc với model Post  cho controller gọi
B9: Kết nối PostService với PostServiceInterface để gọi ở controller
    - app/Providers/AppServiceProvider.php 
        + Use PostRepository và PostRepositoryInterface
        + Ràng buộc PostRepository và PostRepositoryInterface để sử  dụng PostRepositoryInterface ở PostService
B10: Sử dụng PostRepositoryInterface tại app/Http/Services/PostService
    - use PostRepositoryInterface
    - tiêm PostRepositoryInterface vào contructor
B11: Chạy server và truy cập đường dẫn /posts
