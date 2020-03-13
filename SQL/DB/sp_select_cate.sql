use knowledge; 

DELIMITER //


CREATE PROCEDURE select_categorybyname(
	IN _cate_desc varchar(1000)
)
BEGIN

		select * 
        from category
		/*where category_name like concat('%', _cate_desc, '%');
*/;
END //
 

DELIMITER ;