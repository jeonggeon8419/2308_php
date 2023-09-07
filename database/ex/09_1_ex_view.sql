-- 1. view란 ?
-- 가상의 테이블로, 보안과 함께 사용자의 편의성을 높이기 위해 ㅅ사용됩니다
-- 여러테이블을 조인 할 시에 view를 생성하여,
-- 복잡한 sql을 편리하게 조회 할 수 있는 장점이 있습니다.
-- 단점 : index를 사용할 수 없어 조회 속다가 느리다.

-- 2. view 생성
-- create [or replace] view 뷰명
--	as
--   select 문
--  ;
-- **[or replace] : 기존의 뷰가 있을 경우 덮어쓰기를 합니다. **

CREATE VIEW view_employed_emp
as
	SELECT emp.*, ti.title
		FROM employees emp
			JOIN titles ti
			ON emp.emp_no = ti.emp_no
			WHERE ti.to_date >= NOW()
;
		
		

SELECT * FROM view_employed_emp WHERE emp_no <= 10005;

