-- insert의 기본구조
-- insert into 테이블명 [ (속성1, 속성2)]
-- values (속성값1, 속성값2)

-- 500000 신규회원
INSERT INTO employees (
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES (
	500000
	,NOW()
	,'jeong'
	,'geon'
	,'M'
	,NOW()
);


-- 500000번 사원의 급여 데이터를 삽입해 주세요.
INSERT INTO salaries (


SELECT * FROM employees WHERE emp_no = 500000;

