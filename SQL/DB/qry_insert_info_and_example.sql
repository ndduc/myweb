SELECT * FROM knowledge.category;
/**
	Insert info with SP
*/
call knowledge.insert_info(
	/*_info_id*/	5,
    /*_brief*/		'justify-content',
    /*_desc_1*/		'Define alignment along the main axis',
    /*_desc_2*/		'Help distribute extra free space left over when either all flex items on
     a line are inflexible or are flexible but have reached maximum size',
    /*_desc_3*/		null,
    /*_cate_id*/	3
);

/**
	Insert Example and info_example
*/
SELECT @id;
SELECT @info_id;
SET @id = 22;
SET @info_id = 5;

insert into knowledge.example
(example_id, exmaple_detail_1, exmaple_detail_2, exmaple_detail_3, exmaple_detail_4,
exmaple_detail_5, last_update, create_date)
values
(@id, "justify-content", "space-evenly", 
"item are distributed so that the spacing between any two item is equal", null, null,
sysdate(), sysdate());

insert into knowledge.info_example
(info_id, example_id)
values
(@info_id, @id);


/**
Insert Image and Image_info_Example
*/
SELECT @ex_id;
SELECT @img_id;
SELECT @info_id;
SET @ex_id = 22;
SET @img_id = 1;
SET @info_id = 5;