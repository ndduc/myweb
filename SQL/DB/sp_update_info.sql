use knowledge; 

DELIMITER //


CREATE PROCEDURE update_info(
	IN _info_id int,
	IN _brief varchar(1000),
    IN _desc_1 varchar(1000),
    IN _desc_2 varchar(1000),
    IN _desc_3 varchar(1000),
    
    IN _cate_id int
    
)
BEGIN
	
    if _cate_id is not null 
    then
		update info_category
			set category_id = _cate_id
        where info_id = _info_id;

		update information
			set brief = _brief,
				desc_1 = _desc_1,
                desc_2 = _desc_2,
                desc_3 = _desc_3,
                last_update = sysdate()
        where info_id = _info_id;
            
            
    else
		update information
			set brief = _brief,
				desc_1 = _desc_1,
                desc_2 = _desc_2,
                desc_3 = _desc_3,
                last_update = sysdate()
        where info_id = _info_id;
            
    end if;
END //
 

DELIMITER ;