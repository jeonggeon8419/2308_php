-- 1. 데이터 타입 변환 함수

SELECT cast(1234 AS CHAR(4));
SELECT CONVERT(1234, CHAR(4));

-- 2. 제어 흐름 함수
-- if(수식, 참일때, 거짓일떄) : 수식이 참 또는 거짓에 따라 결과를 분기하는 함수
SELECT e.emp_no, if(e.gender = 'm', '남자','여자') AS gender
FROM employees e;


SELECT if (0 = 1, '참','거짓');

-- ifnull(수식1,수식2) : 수식 1이 null이면 수식2를 반환하고, null이 아니면 수식1을 반환

SELECT IFNULL('11', '수식2');
SELECT emp_no
	,title
	,IFNULL(to_date, DATE(NOW())) AS to_date
 FROM titles ORDER BY emp_no DESC;
 
 -- update title
 -- nullif(수식1,수식2):
 SELECT NULLIF(1,1);
 SELECT NULLIF(1,2);
 
 SELECT IFNULL('11', '수식2');
SELECT emp_no
	,title
	,IFNULL(to_date,99990101) AS to_date2
 FROM titles ORDER BY emp_no DESC;
 
 -- case ~ when ~ else ~ end :다중 분기를 위해 사용합니다.
 --    예)
 --		case 체크하려는 수식1
 --			when 분기수식1 then 결과1
  --			when 분기수식2 then 결과2
   --			when 분기수식3 then 결과3
   --        else 결과4
   --       end
   
SELECT e.emp_no
	,e.gender
	,case e.gender
		when 'M' then '남자'
		ELSE '여자'
	END AS ko_gender
FROM employees AS e;

UPDATE titles SET to_date = NULL WHERE emp_no = 500000;

SELECT * FROM titles WHERE emp_no = 500000;

-- 직책 테이블의 모든 정보를 출력해 주세요.
-- 단, to_date가 null // 9999-01-01인 경우는 '현재직책'
-- 그 외는 '지금은 아님'

SELECT *
	,case date(ifnull(to_date, 99990101))
		when 99990101 then '현재직책'
		ELSE '지금은 아님'
	END AS 현재상황
FROM titles;


SELECT *
	FROM titles
	WHERE to_date IS not NULL;
	
	
-- 3. 문자열 함수
-- 문자열을 이어줍니다.
SELECT CONCAT('안녕','하세요');
-- 구분자, 문자열1, 문자열2
SELECT CONCAT_WS('/','딸기','바나나','토마토','수박');
-- format(숫자, 소수점, 자릿수) : 숫자에 ','를 넣어주고, 소수점 자릿수
SELECT FORMAT(123456,0);

-- left (문자열, 길이) : 문자열을 왼쪽부터 길이만큼 잘라 반환합니다
SELECT LEFT('123456',3);
-- right (문자열, 길이) : 문자열을 오른쪽부터 길이만큼 잘라 반환합니다
SELECT right('123456',3);
-- upper(문자열) : 소문자를 대문자로
SELECT UPPER('abcd');
-- lower(문자열) : 대문자를 소문자로
SELECT lower('ABCD');
-- lpad(문자열, 길이, 채울문자열) : 문자열을 포함해 길이만큼 문자열을 왼쪽에 넣을떄
SELECT LPAD('123456',10, '0');	
-- rpad(문자열, 길이, 채울문자열) : 문자열을 포함해 길이만큼 문자열을 오른쪽에 넣을떄
SELECT rPAD('123456',10, '0');	
-- trim(문자열) : 좌우 공백을 제거합니다
SELECT '  1234', TRIM('   1234  ');
-- ltrim
SELECT LTRIM('   1213');
-- rtrim
SELECT RTRIM('123    ');

-- SUBSTRING(문자열, 시작위치, 길이) : 문자열을 시작위치에서 길이만큼 잘라서 반환합니다
SELECT SUBSTRING('ABCDEF', 3, 2);
-- SUBSTRING_INDEX(문자열, 구분자, 횟수) : 왼쪽부터 구분자가 횟수 번째가 나오면 그
SELECT SUBSTRING_INDEX('현희_hTML_CSS.HTML','_',1);


-- 4.수학 함수
-- CEILING(숫자) : 올림합니다.
SELECT CEIL(1.4);
-- FLOOR(숫자): 버림합니다.
SELECT FLOOR(1.9);
-- ROUND(숫자):반올림합니다
SELECT ROUND(1.8), ROUND(1.3);
-- TRUNCATE(숫자, 정수) : 소수점 기준으로 정수위치 까지 구하고 나머지는 버립니다.



-- 5. 날짜 및 시간 함수
-- NOW() : 현재 날짜/시간을 구합니다.
SELECT NOW(), DATE(NOW()), DATE(99990101);
-- ADDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 더한 날짜를 구합니다
SELECT ADDDATE(99990101, INTERVAL -1 DAY);
--
SELECT ADDDATE(NOW(), INTERVAL -1 YEAR);


-- 6. 순위 함수
-- RANK() OVER(ORDER BY 속성명 DESC/ASC): 순위를 매깁니다
SELECT EMP_NO, SALARY, RANK() OVER(ORDER BY SALARY DESC) AS RANK
FROM salaries
LIMIT 10;

-- ROW_NUMBER() OVER(ORDER BY 속성명 DESC/ASC) : 레코드에 순위를 매깁니다
SELECT EMP_NO, SALARY, ROW_NUMBER() OVER(ORDER BY SALARY DESC) AS NUM
FROM salaries
LIMIT 10;
	
	
	
	
	
	
	
	
	
	