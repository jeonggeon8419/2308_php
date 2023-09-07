-- 1. auto_increment 란?
-- 자동 중간 값을 가지는 컬럼으로 값을 직접 대입할 수 없습니다
-- 중간에 값을 삭제한다고 해서, 삭제된 값을 재사용 하지 않으며
-- 레코드가 적재될 때마다 1씩 증가하게 됩니다.
-- pk에만 적용할 수 있습니다.

-- 2. auto_increment 생성
create TABLE 테이블명 (
	mem_no  INT(11) PRIMARY KEY
	,mem_name VARCHAR(50)
);

-- 3. auto_increment 수정
-- - 이미 생성된 테이블의 컬럼에 추가할떄
arter TABLE 테이블명 MODIFY mem_no INT AUTO_INCREMENT;

INSERT INTO 테이블명 (mem_name) VALUES ('tt');

-- auto_increment의 값을 특정값으로 설정(현재 pk의 최대값 이하로는 설정이 안됨)
ALTER TABLE 테이블명auto_increment=10;