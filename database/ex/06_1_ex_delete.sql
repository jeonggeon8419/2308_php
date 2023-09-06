-- delete의 기본구조
-- delete from 테이브명
-- where 조건
-- **추가설명 : 조건을 적지않을 경우 모든 레코드가 삭제됩니다.
--               실수를 방지하기위해 where절을 먼저 작성하고 delete form절을 작성하시오

DELETE FROM departments
WHERE dept_no = 'd010';

SELECT * FROM employees; 

-- 사원정보테이블에서 사원번호가 500001이상인 사원의 데이터를 모두 삭제해 주세요

DELETE FROM employees
WHERE emp_no >= 500001;

