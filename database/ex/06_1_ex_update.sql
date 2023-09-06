-- update의 기본구조
-- update 테이블명
-- set (컬럼1=  값1, 컬럼2 = 값2)
-- where
-- ** 추가설명 : 조건을 적지않을 경우 모든 레코드가 수정합니다.
-- 실수를 방지하기위해 where을 먼저 작성하고 set을 작성하는 것

UPDATE titles
SET 	title = 'ceo'
WHERE emp_no = 500000;

--

SELECT * FROM salaries WHERE emp_no = 500000;


-- 500000번 사원의 지급을 'staff', 연봉을 '25000',

UPDATE titles
SET 	title = 'staff'
WHERE emp_no = 500000;

COMMIT;

UPDATE salaries
SET 	salary = 25000
WHERE emp_no = 500000;

COMMIT;