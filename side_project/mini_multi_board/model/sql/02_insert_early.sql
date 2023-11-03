USE mini_multi_board;

-- user  insert 비밀번호 12345678
INSERT INTO user(u_id, u_pw, u_name)
VALUES('admin','MTIzNDU2Nzg=','jeonggeon')
,('admin','MTIzNDU2Nzg=','유저1');

-- board table insert
INSERT INTO board(u_pk, b_type, b_title, b_content)
VALUES ('1', '0', '관리자가쓴 제목1', '관리자가쓴 내용1')
,('1', '0', '관리자가쓴 제목2', '관리자가쓴 내용2')
,('2', '1', '유저가쓴 제목1', '유저가 쓴 내용1')
,('2', '1', '유저가쓴 제목2', '유저가 쓴 내용2');


-- boardname table insert
INSERT INTO boardname(b_type,b_name)
VALUES('0', '자유게시판')
,('1', '질문게시판');

commit;