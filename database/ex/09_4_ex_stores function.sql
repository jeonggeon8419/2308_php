-- 1. 스토어드 함수(stores function) 란?
 -- 개발자가 필요에 따라 직접 만들어서 사용하는 함수
 
 
 -- 2. 스토어드 함수의 특징
 -- 스토어드 프로 시저
 
 
 
--  3. 스토어드 함수 조회
  SHOW FUNCTION status;
  
-- 4. 스토어드 함수 생성
-- delimiter $$
-- CREATE FUNCTION my_sum(num1 INT, num2 int)
-- 	RETURNS int
-- BEGIN
-- 	RETURN num1 + num2;
-- END $$
-- delimiter $$


SELECT my_sum(100, 2);
