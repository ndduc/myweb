use knowledge; 
/*
	use [Changed to match with your database];
*/

create table information (
	info_id int not null unique auto_increment,			 
    brief varchar(1000) not null,				
    desc_1 varchar(1000) not null,
    desc_2 varchar(1000),								
    desc_3 varchar(1000),						
    last_update timestamp,
    create_date timestamp,
    primary key (info_id)
);

create table category (	/**Include such java, html as cate*/
	category_id int not null unique,
    category_name varchar(255),
    last_update timestamp,
    create_date timestamp,
    primary key (category_id)
);

create table info_category (
	info_id int not null,
    category_id int not null,
    
  foreign key (info_id) references information (info_id),
    foreign key (category_id) references category (category_id)
);




create table example (
	example_id int not null unique auto_increment,
    exmaple_detail_1 varchar(1000) not null ,
    exmaple_detail_2 varchar(1000),
    exmaple_detail_3 varchar(1000),
    exmaple_detail_4 varchar(1000),
    exmaple_detail_5 varchar(1000),
	last_update timestamp,
    create_date timestamp,
	primary key (example_id)
);

create table info_example(
	info_id int not null,
    example_id int not null,
    foreign key (info_id) references information (info_id),
    foreign key (example_id) references example (example_id)
);


create table image (
	image_id int not null unique auto_increment,
    image_1 varchar(1000) not null ,
    image_2 varchar(1000),
    image_3 varchar(1000),
    image_4 varchar(1000),
    image_5 varchar(1000)
);

create table image_info_example (
	image_id int not null,
	info_id int not null,
    example_id int not null,
    foreign key (image_id) references image(image_id),
    foreign key (info_id) references information (info_id),
    foreign key (example_id) references example (example_id)
);


