<?php
//search feature for the home page
require "../DAL/inventoryDal.php";
class HomeSearch{
    private inventoryDal $Dal;

    //search parameters
    private string $brand;
    private string $model;

    public function __construct($brand, $model)
    {
        $this->Dal = new inventoryDal();
        $this->brand = $brand;
        $this->model = $model;
    }

    public function GetBrand(){
        return $this->brand;
    }
    public function GetModel(){
        return $this->model;
    }

    public function GetSearch(){
        return $this->Dal->Search($this->brand);
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();

    $brand = $_POST['brand'];
    $model = $_POST['model'];



    $search = new HomeSearch($brand, $model);

    $_SESSION['search'] = $search;
    $_SESSION['result'] = $search->GetSearch();

    header('Location: ../views/searchResult.php');
}
