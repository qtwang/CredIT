create database credit;

use credit;

create table banks(
  bank_no int not null,
  bank_name varchar(100) not null,
  bank_email varchar(60) not null,
  bank_password varchar(20) not null,
  constraint pk_banks primary key (bank_no)
);

create table users(
  user_no int not null,
  user_name varchar(100) not null,
  user_email varchar(60) not null,
  user_password varchar(20) not null,
  constraint pk_users primary key (user_no)
);

create table cards(
  card_no int not null,
  card_name varchar(100) not null,
  bank_no int,
  card_start int,
  card_top int,
  constraint pk_cards primary key (card_no),
  constraint pk_cards_banks foreign key (bank_no) references banks(bank_no) on update cascade on delete restrict
);

create table sales(
  sale_no int not null,
  sale_name varchar(200) not null,
  bank_no int,
  card_no int,
  sale_start date,
  sale_end date,
  sale_kind varchar(50),
  sale_scale varchar(50),
  sale_place varchar(100),
  constraint pk_sales primary key (sale_no),
  constraint fk_sales_banks foreign key (bank_no) references banks(bank_no) on update cascade on delete restrict,
  constraint fk_sales_cards foreign key (card_no) references cards(card_no) on update cascade on delete restrict
);

create table belongs(
  user_no int not null,
  card_no int not null,
  belong_credit int,
  constraint pk_belongs primary key (user_no, card_no),
  constraint fk_belongs_users foreign key (user_no) references users(user_no) on update cascade on delete restrict,
  constraint fk_belongs_cards foreign key (card_no) references cards(card_no) on update cascade on delete restrict
);

insert into banks values
(0, '中国银行', '0@163.com', 'zgyh'),
(1, '工商银行', '1@163.com', 'gsyh'),
(2, '建设银行', '2@163.com', 'jsyh'),
(3, '农业银行', '3@163.com', 'nyyh');

insert into users values
(0, '李雷', '0@126.com', 'll'),
(1, '韩梅梅', '1@126.com', 'hmm');

insert into cards values
(0, '长城信用卡', 0, 10000, 100000),
(1, '工商信用卡', 1, 8000, 80000),
(2, '建行龙卡', 2, 10000, 100000),
(3, '农行信用卡', 3, 8000, 80000);

insert into sales values
(0, '长城信用卡卡亚马逊优惠', 0, 0, '2014-4-1', '2015-4-1', '购物', '5%', '上海');

insert into belongs values
(0, 0, 20000),
(0, 1, 10000),
(1, 2, 8000);