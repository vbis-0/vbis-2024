<?php

namespace app\models;

use app\core\BaseModel;
Use app\core\DbConnection;
class ProductModel extends BaseModel
{
    public string $name;
    public string $description;
    public int $price;

    public function tableName()
    {
        return "products";
    }

}
