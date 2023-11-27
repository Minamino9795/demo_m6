<?php 
namespace App\Repositories\Interfaces;
//RepositoryInterface cùng cấp, ko cần use
interface CategoryRepositoryInterface extends RepositoryInterface{
    function paginate($request);
}