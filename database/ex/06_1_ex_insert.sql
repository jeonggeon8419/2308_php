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

-- 500000번 사원의 급여 데이터를 삽입해 주세요
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES (
	500000
	,6000000
	,NOW()
	,99990101
);

-- 500000만번 사원의 소속 부서 데이터를 삽입해 주세요.
INSERT INTO dept_emp (
	emp_no 
	,dept_no
	,from_date
	,to_date
)
VALUES (
	500000
	,'d005'
	,NOW()
	,NOW()
);

-- 500000번 사원의 직책 데이터를 삽입해 주세요.
INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500000
	,'ceo'
	,NOW()
	,NOW()
);

SELECT MAX(salary) FROM salaries;
SELECT * FROM employees WHERE emp_no = 500000;
SELECT * FROM dept_emp WHERE emp_no = 500000;
SELECT * FROM titles WHERE emp_no = 500000;
