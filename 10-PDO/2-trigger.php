<?php
//Trigger: thủ tục gắn cho 1 hành động khi có tác động lên data (select/update/delete), 
//tự động gọi khi có tác động lên
//thường dừng để tạo ra các quy tắc hoặc validate data input

try{
    $db = new PDO('mysql:host=localhost;dbname=php2509_banhang2', 'root', '');
    $db->exec("SET NAMES UTF8");
}
catch(PDOException $e){
    echo $e->getMessage();
    die;
}
//INSERT trigger
//Tạo INSERT trigger để đảm bảo không có hoá đơn nào được mua vào một ngày trong quá khứ.
$sql = "CREATE TRIGGER `BeforeInsertBill` 
        BEFORE INSERT 
        ON `bills` 
        FOR EACH ROW 
        BEGIN
            IF NEW.date_order < Now() THEN
                signal sqlstate '45000' 
                SET message_text = 'Khong the them ngay data be hon ngay hien tai';
	        END IF;
        END";

/* Viết trigger mỗi khi có sản phẩm được mua thì trừ đi số lượng sản phẩm còn lại

CREATE TRIGGER count_delete_products 
AFTER INSERT  ON bill_detail
FOR EACH ROW 
BEGIN
    IF NEW.quantity > (SELECT count_qty FROM foods WHERE id = NEW.id_food)
    THEN 
        signal sqlstate '45000' 
        SET message_text = 'Ko du so luong';
    ELSE 
        UPDATE foods SET count_qty = count_qty - NEW.quantity WHERE id = NEW.id_food;
    END IF;
  
END
*/
//Viết trigger, bất cứ khi nào xảy ra việc thay đổi dữ liệu trên bảng products thì những thay đổi đó sẽ được ghi nhận và được đưa vào lưu ở một bảng khác

$sql = "CREATE  TRIGGER `users_BEFORE_INSERT` 
        BEFORE UPDATE ON `users` FOR EACH ROW
        BEGIN
            INSERT INTO users_tmp
            SET
                username = OLD.username,
                password = OLD.password;       
        END";

/**
 * DELETE trigger
 * DROP TRIGGER BeforeInsertUser;
 */

//SHOW TRIGGERS;

$stmt = $db->prepare($sql);
$check = $stmt->execute();
if($check){
    $datas = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>";
    print_r($datas);
}
else
    var_dump($check);
echo 'done';


?>