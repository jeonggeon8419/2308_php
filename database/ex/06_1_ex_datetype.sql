-- 숫자 데이터 형식
-- int : 4byte 정수, 범위 +21억 ~ -21억
-- bigint : 8byte 정수, 범위 +900경 ~ -900경
-- float : 4byte 실수, 소수점 아래 7자리까지 표현
-- double : 4byte 실수 소수점 아래 15자리까지 표현
-- decimal : 5~15byte, 소수점 아래 자리를 지정가능


-- 문자 데이터 형식
-- char(n) : 1~255byte, n만큼 고정길이를 가지는 문자형
-- varchar(n) : 1~65535byte, n만큼 가변길이를 가지는 문자형
-- longtext : 최대 4gb, text 데이터 값을 저장
-- longblob : 최대 4gb blob 데이터 값을 저장
-- emum(값1, 값2, 값3.... : 정해진 값만 입력 가능하도록 하는 데이터 형식

-- 날짜 및 시간 데이터 형식
-- date : 3byte, 'yyyy-mm-dd' 1001-01-01 ~ 9999-12-31 날자까지저장
-- datetime : 8byte, 'yyyy-mm-dd hh:mi:ss' 날짜 시간까지 저장
-- timestamp : 4byte, 
-- **주의**
-- datetime : 날짜와 시간 데이터가 내가 입력한 값으로 고정퇴는 타입
-- timesstamp : 서버 시간에 따라 유동정으로 변하는 타입