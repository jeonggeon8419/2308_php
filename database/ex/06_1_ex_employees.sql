-- SELECT [컬럼명] FROM [테이블명];
SELECT * FROM employees;
SELECT * from dept_emp;

SELECT first_name, last_name FROM employees;
SELECT emp_no, title FROM titles;

-- SELECT [컬럼명] FROM [테이블명] where [쿼리 조건];
-- [쿼리 조건] : 컬럼명 [기호] 조건값;
SELECT * FROM employees WHERE emp_no = 10009;
-- 문장적을떄는 '';
SELECT * FROM employees WHERE first_name = 'Mary';
SELECT * FROM employees WHERE birth_date >= 19600101;

-- and 연산자

SELECT *
FROM employees 
WHERE birth_date <= 19700101
	AND birth_date >= 19650101;
	
SELECT *
from employees 
WHERE first_name = 'mary' 
	or last_name = 'piazza';


-- and 속도면에서 주로사용
SELECT *
FROM employees
where emp_no >=10005
	AND emp_no <= 10010;
	
SELECT * 
FROM employees 
WHERE emp_no BETWEEN 10005 AND 10010;

--

SELECT *
FROM employees
where emp_no = 10005 or emp_no = 10010;

SELECT *
FROM employees
WHERE emp_no IN(10005,10010);

-- 이름이 'ge'로 시작하는 사람
-- %는 무엇이든
SELECT *
FROM employees
WHERE first_name LIKE('%ge%');

SELECT *
FROM titles
WHERE title LIKE('%staff%');

--
SELECT *
FROM employees
WHERE first_name LIKE('__ge_');

-- order by로 정렬하여 조회 desc 내림차순
SELECT * FROM employees ORDER BY birth_date desc;


SELECT * FROM employees ORDER BY birth_date, first_name; 

-- 성을 내림차순으로 정렬하고,
-- 이름을 오름차순으로 하고,
-- 생일을 으름차순으로 정렬해 주세요.

SELECT * FROM employees ORDER BY last_name desc, first_name, birth_date;


-- DISTINCT중복 제거
SELECT DISTINCT emp_no FROM salaries;

-- 집계 함수
SELECT sum(salary) FROM salaries;

-- 현재 받고있는 급여만 조회해주세.
SELECT salary FROM salaries where to_date >= 20230901;
SELECT SUM(salary) FROM salaries where to_date >= 20230901;
SELECT max(salary) FROM salaries where to_date >= 20230901;
SELECT min(salary) FROM salaries where to_date >= 20230901;
SELECT avg(salary) FROM salaries where to_date >= 20230901;

-- count 총개수
SELECT COUNT(*) FROM employees;

-- 이름이 마리인사람 수 구해주세요
SELECT COUNT(*) FROM employees WHERE first_name = 'mary';

-- 그룹으로 묶어서 조회 : group by 컬럼명 [having 집계함수 조건]


SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING title = 'staff';

SELECT title, COUNT(title)
FROM titles
where to_date >= 20230901
GROUP BY title;

SELECT COUNT(*) 
FROM titles 
WHERE title='Assistant Engineer';


-- 속성명에 별칭  줄때는 as ***
SELECT title, COUNT(title) as cnt
FROM titles
where to_date >= 20230901
GROUP BY title;

-- concat() : 문자열을 합쳐 주는 함수 ' '=공백으로 사용할떄
SELECT CONCAT(FIRST_name, ' ', last_name) AS name
FROM employees;

-- 여자사원의 사번, 생일, 풀네임을 오름차순으로출력해주세요.
SELECT 
	emp_no
	, birth_date
	, CONCAT(FIRST_name,' ', last_name) AS fullname
FROM employees WHERE gender = 'f'
ORDER BY fullname;

-- limit 상위 n 번쨰 offset n~n 번까지 
SELECT * FROM employees ORDER BY emp_no
LIMIT 10 OFFSET 10;

-- 재직중이 사원들 중 급여가 상위 5위까지 출력해주세요
SELECT *
FROM salaries
WHERE to_date >= 20230901
ORDER BY salary DESC
LIMIT 5;

-- 서브쿼리(subquery) : 쿼리 안에 또다른 쿼리가 있는 형태
-- id002 부서의 현재 매니저의 정보를을 가져오고 싶다.
SELECT *
FROM employees
WHERE emp_no = 1


SELECT * 
FROM employees 
where emp_no = (
	SELECT emp_no 
	FROM dept_manager 
	WHERE to_date >= 20230901 
		AND dept_no = 'd002'
);


-- 현재 급여가 가장 높은 사원의 사번과 풀네임을 출력해주세요
SELECT emp_no, CONCAT(FIRST_name,' ', last_name) fullname
FROM employees
WHERE emp_no = (
SELECT emp_no
FROM salaries
WHERE to_date >= 20230901
order BY salary DESC
LIMIT 1);

-- doo1부서의 매니저를 한번이라도 해본 닌겐 서브쿼리의 결과가 복수일떄 사용방법
SELECT
	emp_no
	,CONCAT(first_name, '  ', last_name) AS fullname
FROM employees
WHERE emp_no in (
	SELECT emp_no
	FROM dept_manager
	WHERE dept_no = 'd001'
);

-- 현재 직책이 senior engineer인 사원의 사번과 생일을 출력해주세요

SELECT emp_no, birth_date
FROM employees
WHERE emp_no IN (
	SELECT emp_no
	FROM titles
	WHERE to_date >= 20230901 
	and title = 'senior engineer');
	
-- 다중열 서브쿼리
SELECT *
FROM dept_emp
WHERE (dept_no, emp_no) IN (
	SELECT dept_no, emp_no
	FROM dept_manager
	WHERE to_date >= NOW()
);

-- select절에 사용하는 서브쿼리
-- 사원의 현재 급여, 현재 급여를 받기 시작한 일자, 풀네임을 출력해주세요.
SELECT
	sal.salary
	, sal.from_date
	,(
	SELECT CONCAT(emp.FIRST_name,'  ', 'emp.last_name') AS FULL_name
	FROM employees AS emp
	WHERE sal.emp_no = emp.emp_no
	) AS full_name
FROM salaries AS sal
WHERE to_date >= NOW();

-- from절에 오는 서브쿼리
SELECT emp.*
FROM (
	SELECT *
	FROM employees
	WHERE gender = 'm'
) AS emp;






