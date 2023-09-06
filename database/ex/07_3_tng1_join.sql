-- 1.사원의 사원번호, 풀네임, 직책명을 출력해 주세요

SELECT 
	emp.emp_no
	,CONCAT(emp.first_name,' ',emp.last_name)
	,td.title  
FROM employees emp 
	inner JOIN titles td 
	ON emp.emp_no = td.emp_no;
	
-- 2. 사원의 사원번호, 성별, 현재 월급을 출력해주세요
SELECT 
	emp.emp_no
	,emp.gender
	,sa.salary  
FROM employees emp 
	inner JOIN salaries sa 
	ON emp.emp_no = sa.emp_no
	AND sa.to_date >= NOW();
-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요

SELECT CONCAT(emp.first_name,' ',emp.last_name), sa.*
	FROM employees emp
	INNER JOIN salaries sa
	ON emp.emp_no = sa.emp_no
	where emp.emp_no = 10010;

-- 4. 사원의 사원번호, 풀네임, 소속부서명을 출력해 주세요

SELECT emp.emp_no,CONCAT(emp.first_name,' ',emp.last_name), dep.dept_name
	FROM employees emp
	JOIN dept_emp dp
	ON emp.emp_no = dp.emp_no
	JOIN departments dep
	ON dp.dept_no = dep.dept_no
	where
	dp.to_date >= NOW();

-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해주세요

SELECT emp.emp_no,CONCAT(emp.first_name,' ',emp.last_name),sa.salary
FROM employees emp
JOIN salaries sa
ON emp.emp_no = sa.emp_no
AND sa.to_date >= NOW()
ORDER BY sa.salary DESC LIMIT 10;

-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요

SELECT dep.dept_name,CONCAT(emp.first_name,' ',emp.last_name), emp.hire_date
FROM employees emp
	JOIN dept_manager dp
	ON emp.emp_no = dp.emp_no
	AND dp.to_date >= NOW()
	JOIN departments dep
	ON dep.dept_no = dp.dept_no
;

-- 7. 현재 직책이 staff인 사원의  전체 평균 월급을 출력해주세요

SELECT AVG(sa.salary), ti.title
FROM salaries sa
JOIN titles ti
ON sa.emp_no = ti.emp_no
AND ti.to_date >= NOW()
AND sa.to_date >= NOW()
WHERE ti.title = 'staff';


-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해주세요

SELECT CONCAT(emp.first_name,' ',emp.last_name), emp.hire_date, emp.emp_no, dep.dept_no
FROM employees emp
	JOIN dept_manager dep
	ON emp.emp_no = dep.emp_no
;

-- 9. 현재 각 직급별 평균월급 중 60000이상인 직급의 직급명, 평균월금(정수)를 내림차순으로 출력해주세요

SELECT floor(AVG(sa.salary)) avg_sal, ti.title
FROM salaries sa
	JOIN titles ti
	ON sa.emp_no = ti.emp_no
	WHERE ti.to_date >= NOW()
	AND sa.to_date >= NOW()
	GROUP BY ti.title having AVG_sal >= 60000
	ORDER BY avg_sal desc;

-- 10. 현재 성별이 여자인 사원들의 직급별 사원수를 출력해주세요.
SELECT  ti.title, COUNT(emp.emp_no)
	FROM employees emp
	JOIN titles ti
	ON emp.emp_no = ti.emp_no
	AND ti.to_date >= NOW()
	WHERE gender = 'F'
	GROUP BY ti.title;
	
-- 11. 퇴사한 여직원의 수
SELECT COUNT(*), emp.gender
FROM employees emp
	JOIN (
	SELECT emp_no
	FROM titles t
	GROUP BY t.emp_no HAVING MAX(t.to_date) != 99990101
	) tit
	ON emp.emp_no = tit.emp_no
	GROUP BY emp.gender;




	
	