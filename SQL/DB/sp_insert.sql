use knowledge; 

DELIMITER //


CREATE PROCEDURE insert_info(
	IN _info_id int,
	IN _brief varchar(1000),
    IN _desc_1 varchar(1000),
    IN _desc_2 varchar(1000),
    IN _desc_3 varchar(1000),
    
    IN _cate_id int
    

)
BEGIN
		insert into information
        (info_id, brief, desc_1, desc_2, desc_3, last_update, create_date)
        values
        (_info_id, _brief, _desc_1, _desc_2, _desc_3, sysdate(), sysdate());
        insert into info_category
        (info_id, category_id)
        values
        (_info_id, _cate_id);

END //
 

DELIMITER ;