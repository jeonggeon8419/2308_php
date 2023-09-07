-- 1. 사원 정보테이블에 각자의 정보를 적절하게 넣어주세요
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

SELECT * FROM employees WHERE emp_no = 500001;

-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요.
INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES (
	500001
	,60000000
	,NOW()
	,NOW()
);

COMMIT;

select * FROM salaries WHERE emp_no = 500001;

INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500001
	,'staff'
	,NOW()
	,99990101
);


INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES (
	500001
	,'d005'
	,99990101
	,99990101
);

COMMIT;

select * FROM titles WHERE emp_no = 500001;
-- 3. 짝궁의 [1,2]것도 넣어주세요
INSERT INTO employees (
	emp_no
	, birth_date
	, first_name
	, last_name
	, gender
	, hire_date
)
VALUES (
	500002
	,19930510
	,'hong'
	,'dabang'
	,'F'
	,99990101
);

INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES (
	500002
	,6000
	,NOW()
	,99990101
);

select * FROM salaries WHERE emp_no = 500001;

INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES (
	500002
	,'ceo'
	,NOW()
	,99990101
);

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES (
	500002
	,'d005'
	,99990101
	,99990101
);

-- 4. 나와 짝궁의 소속 부서를 d009로 변경해주세요

UPDATE dept_emp
SET 	dept_no = 'd009'
WHERE emp_no = 500001;

UPDATE dept_emp
SET 	dept_no = 'd009'
WHERE emp_no = 500002;

SELECT * FROM dept_emp WHERE emp_no = 500002;

-- 5. 짝궁의 모든 정보를 삭제해 주세요

-- DELETE FROM employees
-- WHERE emp_no = 500002;
-- 6. d009부서의 관리자를 나로 변경해 주세요.
UPDATE dept_manager
SET dept_no = 'd009', emp_no = 500001, to_date = NOW()
WHERE emp_no = 500001;

SELECT * from dept_manager WHERE dept_no = 500001;

COMMIT;


-- 7. 오늘 날짜부로 나의 직책을 senior engineer로 변경해 주세요
UPDATE titles
SET title = 'senior engineer', to_date = NOW()
WHERE emp_no = 500001;



SELECT * FROM titles WHERE emp_no = 500001;
-- 8. 최고 연봉 사원과 최저 연봉 사원의 사번과 이름을 출력해 주세요
SELECT emp.emp_no, emp.last_name
FROM employees emp
JOIN salaries sal
ON emp.emp_no = sal.emp_no
WHERE
 sal.salary = (SELECT MAX(salary) FROM salaries) OR sal.salary = (SELECT min(salary) FROM salaries);

SELECT  MIN(salary), emp_no  FROM salaries;

-- 9. 전체 사원의 평균 연봉을 출력해주세요
SELECT AVG(sal.salary) FROM salaries sal
JOIN employees emp
ON emp.emp_no = sal.emp_no
; 

SELECT AVG(salary) from
-- 10. 사번이 499,975인 사원의 지금까지 평균 연봉을 출력해 주세요
SELECT * FROM salaries WHERE emp_no = 499975;

SELECT AVG(salary) FROM salaries WHERE emp_no = 499975;