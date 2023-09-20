-- index

-- index확인하기
SHOW INDEX FROM employees;

-- index생성
-- 	create index 인덱스명 on 테이블(칼럼1, 칼럼2...)
CREATE INDEX idx_employees_last_name ON employees(last_name);

-- index 제거
DROP INDEX idx_employees_last_name ON employees;

DELETE FROM titles WHERE emp_no = 700000;

FLUSH PRIVILEGES;

SELECT * FROM departments;

INSERT INTO employees
VALUES (
	700000
	,20000101
	,'first'
	,'last'
	,'M'
	,20230919
	,null
	);
	COMMIT;