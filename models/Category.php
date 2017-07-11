<?php
namespace models;
use \components\Db;
/**
 * Класс Category - модель для работы с категориями товаров
 */
class Category{
    
    /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public function getCategoriesList(){
        $db = Db::getConnection();

        // Запрос к БД
        $sql = 'SELECT * FROM categories ORDER BY name ASC';
        $result = $db->prepare($sql);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        
        $result->execute();
        
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['subid'] = $row['subid'];
            $i++;
        }
        return $categoryList;
    }
}

