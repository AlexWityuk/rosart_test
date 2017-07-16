<?php
namespace models;
use \components\Db;
use \models\Category;
/**
 * Класс Product - модель для работы с товарами
 */
class Product
{
    /**
     * Возвращает список товаров
     * @return array <p>Массив с товарами</p>
     */
    public function getProductsList($products_id = '', $select_val='p.id ASC', 
                                    $price_min = '0', $price_max ='20000',
                                    $master_flag = "false", 
                                    $category_flag = "false", 
                                    $technika_flag = "false")
    {

        $category = new Category();
        $all_id_cat = $category->getCategoriesId_All();
        $all_id = array();
        foreach ($all_id_cat as $value) {
            $all_id[] = $value['id'];
        }
        $all_id = join("','",$all_id);
        $db = Db::getConnection();

        if (empty($products_id)) {
            $result = $db->query('SELECT p.id, p.name, p.price, p.date, p.url, '
            .'master.name as master, technika.name as technika, category.name as category '
            .'FROM product p '
            .'INNER JOIN categories master ON p.master = master.id '
            .'INNER JOIN categories technika ON p.technika = technika.id '
            .'INNER JOIN categories category ON p.category_id = category.id '
            ."WHERE p.price BETWEEN $price_min AND $price_max "
            ."ORDER BY $select_val");
        }
        else {
            foreach ($products_id as &$value) {
                $value = (int)$value;
                //var_dump ($value);
            }
            $ids = join("','",$products_id);

            if ($master_flag == "true") $str_master = "AND p.master IN ('$ids') ";
            else $str_master = "AND p.master IN ('$all_id') ";
            var_dump($str_master);
            if ($category_flag == "true") $str_category = "AND p.category_id IN ('$ids') ";
            else $str_category = "AND p.category_id IN ('$all_id') ";
            var_dump($str_category);
            if ($technika_flag == "true") $str_technia = "AND p.technika IN ('$ids') ";
            else $str_technia = "AND p.technika IN ('$all_id') ";
            var_dump($str_technia);
            $result = $db->query('SELECT p.id, p.name, p.price, p.date, p.url, '
            .'master.name as master, technika.name as technika, category.name as category '
            .'FROM product p '
            .'INNER JOIN categories master ON p.master = master.id '
            .'INNER JOIN categories technika ON p.technika = technika.id '
            .'INNER JOIN categories category ON p.category_id = category.id '
            ."WHERE p.price BETWEEN $price_min AND $price_max "
                    ."$str_master" . "$str_category" . "$str_technia"
                    ."ORDER BY $select_val");
        }
        
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['date'] = $row['date'];
            $productsList[$i]['url'] = $row['url'];
            $productsList[$i]['master'] = $row['master'];
            $productsList[$i]['technika'] = $row['technika'];
            $productsList[$i]['category'] = $row['category'];
            $i++;
        }
        return $productsList;
    }
        /**
     * Возвращает продукт с указанным id
     * @param integer $id <p>id товара</p>
     * @return array <p>Массив с информацией о товаре</p>
     */
    public function getProductById($id)
    {
        $db = Db::getConnection();

        $sql = 'SELECT p.id, p.name, p.price, p.date, p.url, p.category_id, '
            .'master.name as master, technika.name as technika, category.name as category '
            .'FROM product p '
            .'INNER JOIN categories master ON p.master = master.id '
            .'INNER JOIN categories technika ON p.technika = technika.id '
            .'INNER JOIN categories category ON p.category_id = category.id WHERE p.id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);

        $result->setFetchMode(\PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }

        /**
     * Возвращает список товаров в указанной категории
     */
    public function getProductsListByCategory($categoryId, $price_min = '0', $price_max ='20000')
    {
        $db = Db::getConnection();

        $sql = 'SELECT p.id, p.name, p.price, p.date, p.url, '
            .'master.name as master, technika.name as technika, category.name as category '
            .'FROM product p '
            .'INNER JOIN categories master ON p.master = master.id '
            .'INNER JOIN categories technika ON p.technika = technika.id '
            .'INNER JOIN categories category ON p.category_id = category.id '
            ."WHERE p.price BETWEEN $price_min AND $price_max AND "
                    .'category.id = :id OR technika.id = :id OR master.id = :id';
        

        $result = $db->prepare($sql);
        $result->bindParam(':id', $categoryId, \PDO::PARAM_INT);

        $result->setFetchMode(\PDO::FETCH_ASSOC);

        $result->execute();

        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['date'] = $row['date'];
            $productsList[$i]['url'] = $row['url'];
            $i++;
        }
        return $productsList;
    }
}
