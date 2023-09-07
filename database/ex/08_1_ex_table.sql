-- 쇼핑몰


-- 회원정보 테이블(회원번호, ID, 이름, 주소)
CREATE TABLE members (
	mem_no INT PRIMARY KEY AUTO_INCREMENT
	,id VARCHAR(30) UNIQUE NOT null
	,mem_name VARCHAR(30) NOT null
	,addr VARCHAR(100) NOT null
);



-- 주문리스트 테이블 (회원번호, 주문번호, 상품번호, 수량, 결제금액)

CREATE TABLE  orderlist (
	order_no INT PRIMARY key
	,mem_no INT NOT null
	,item_no INT NOT null
	,item_dnt INT NOT null
	,price INT NOT null
	,CONSTRAINT fk_orderlist_item_no FOREIGN KEY(item_no)
		REFERENCES itemlist(item_no) ON DELETE cascade
	,CONSTRAINT fk_orderlist_mem_no FOREIGN KEY(mem_no)
		REFERENCES members(mem_no) ON DELETE cascade
);

-- 상품리스트 테이블 (상품번호, 상품명, 상품 가격)
CREATE TABLE itemlist (
	item_no INT PRIMARY key
	,item_name VARCHAR(100) NOT null
	,item_price INT NOT null
);

-- 포이트 테이블 (회원번호, 포인트)

CREATE TABLE points (
	mem_no INT PRIMARY KEY
	,pt INT NOT NULL DEFAULT(0)
	,CONSTRAINT fk_points_mem_no FOREIGN KEY(mem_no)
		REFERENCES members(mem_no) ON DELETE cascade
);

insert INTO members(id, mem_name, addr)
VALUES('admin', 'jeonggeon', 'korea deagu');
INSERT INTO points(mem_no)
VALUES(1);




ALTER TABLE members ADD COLUMN age INT NOT NULL;
ALTER TABLE members modify COLUMN mem_name VARCHAR(50) NOT null;
ALTER TABLE members DROP COLUMN age;

delect FROM members WHERE mem_no = 1;
ROLLBACK;