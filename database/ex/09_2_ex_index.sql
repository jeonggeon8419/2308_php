-- 0.index란?
-- 데이터베이스 테이블에 대한 검색 성능의 속도를 높여주는 기능
-- 인덱스 생성 시 데이터를 오름차순으로 정렬
-- 일반적으로 db에서는 "b+ Tree 인덱스"방식을 사용

-- 1. index의 종류
-- 	- 클러스터 인덱스 (clustered index):
--			>pk생성시 자동으로 생성되는 인덱스
--   		> 테이블당 1개만 존재
-- 		- 보조 인덱스 (secondary index):
-- 			> 개발자가 필요에 따라 지정하여 생성하는 인덱스
--				> 복수 설정 가능	

-- 2. index의 장정
--  - 테이블을 조회하는 속도와 그에 따른 성능 향상
--  - 전반적인 시스템의 부하 감소

-- 3. index의 단점
-- 	- 인덱스를 관리하기 위해 db의 약 10%에 해당하는 추가 저장공간이 필요
--    - 인덱스를 관리하기 위해 추가 작업이 필요
--    - 인덱스 관리에 미흡하면 오히려 성능 저하

-- 4. index 사용시 주의점
--   -insert, update, delete가 번번하게 일어나는 테이블은 주의
--   - 검색하고자 하는 데이터가 테이블의 10~15% 이하 일 경우 가장 효율적
--   - 속도 향상을 위해서는 우선 쿼리를 좀 더 효율적으로 짜는 방향을 고려(인덱스는 최후의 수단)
--	  - 인덱스를 추가 했다면 대량의 데이터로 해당 테이블의 crud를 테스트
--   - 사용하지 않는 인덱스는 제거
--   - fk를 지정한 열은 자동으로 fk 인덱스가 생상(*dbms에 따라 상이하므로 주의)

-- 5. 인덱스를 사용하기 좋은 상황
-- - 규모가 작지 않은 테이블
-- - insert, update, delete가 자주 발생하지 않는 칼럼
-- - join이나 where 또는 order by에 자주 사용되는 칼럼
-- - 데이터의  중복도가 낮은 칼럼

-- 6. index 확인
-- show index from 테이블;
SHOW INDEX FROM employees;

-- 6. index 생성
-- create index 인덱스 명 on 테이블(칼럼);
-- create index 인덱스 명 on 테이블( 칼럼1,칼럼2...);
CREATE INDEX idx_employees_last_name ON employees(LAST_NAME);


-- 7. index 제거
-- drop index 인덱스명 on 테이블;
DROP INDEX idx_employees_last_name ON employees;























