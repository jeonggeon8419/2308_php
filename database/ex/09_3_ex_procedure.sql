-- 1. 스토어드 프로시저
-- 일련의 쿼리를 모아 마치 하나의 함수처럼 실행하기 위한 쿼리의 집합

-- 2. 스토어드 프로시저의 장점
  -- 하나의 요청으로 여러 SQL 실행하며, 네트워크에 대한 부하 감소
  -- 미리 구문 분석 및 내부 중간 코드로 변환을 끝내야 하므로 처리 시간이 감소
  -- 데이터베이스 트리거와 결합하여 복잡한 규칙에 의한 데이터의 참조무경성 유지가 가능
  
-- 3. 스토어드 프로시저의 단점
 -- 사양 변경 시 외부 응용 프로그램과 함꼐 프로시저의 정의 변경이 필요
 -- 코드 자산으로서의 재사용성이 매우 비효율적
 
-- 4. 프로시저 확인
show procedure STATUS;

-- 5. 프로시저 생성
 -- 5-1 delimiter
 --		delimiter를 이용하여 지정된 문자가 나타나기 전까지는 ;을 만나도 쿼리가 실행되지 않게 방지
 		
 -- 5-2 in
 --		프로시저를 호출하기 위해 필요한 정보들로 함수의 매개변수
 		
 -- 5-3 out
 --	프로시저의 반환값
 -- 5-4 declare
 --	프로시저 내부에서 사용하는 지역 변수를 선언할 때 사용
 
 -- 5-6 기본구조
 -- delimiter $$
 -- create procedure 프로시저명(in 변수명 데이터타입
 -- ,out 변수명 데이터타입)
 --  begin
 --	프로시저의 실행 내용 정의
 -- end %%
 -- delimiter ;
-- delimiter $$
-- CREATE PROCEDURE test()
-- BEGIN
-- 	SELECT emp.*, ti.title
-- 		FROM employees emp
-- 			JOIN titles ti
-- 			ON emp.emp_no = ti.emp_no
-- 			WHERE ti.to_date >= NOW()
-- ;
-- END $$
-- delimiter;

-- 6. 프로시저 호출
 		CALL test();
 		
-- 7. 프로시저 삭제
-- drop procedure 프로시저명
DROP PROCEDURE test;