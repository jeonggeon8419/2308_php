SELECT id, title, create_at
FROM boards
ORDER BY id DESC
LIMIT 5 OFFSET 0;

1페이지:0
2페이지:5
3페이지:10


ALTER TABLE boards AUTO_INCREMENT = 22;

COMMIT;