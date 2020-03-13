use knowledge; 

DELIMITER //


CREATE PROCEDURE insert_cate(
	IN cate_id int,
	IN cate_name varchar(255)
)
BEGIN

		insert into category
        (category_id, category_name, last_update, create_date)
        values
        (cate_id, cate_name, sysdate(), sysdate());

END //
 

DELIMITER ;