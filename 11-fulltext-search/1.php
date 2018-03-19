<?php

/*

B1:
	ALTER TABLE `foods` ADD FULLTEXT(`name`,`detail`);

B2:
	SELECT * FROM `foods` WHERE MATCH(name,detail) AGAINST ("hạt sen" IN BOOLEAN MODE)

Notes:
- MATCH (ten_loai,mo_ta) tương ứng với  FULLTEXT(`ten_loai`,`mo_ta`)
	vd: FULLTEXT(`ten_loai`,`mo_ta`) nhưng MATCH (ten_loai) không được
- NATURAL LANGUAGE MODE  (default)

vd: tìm bài viết có chứa hạt sen:
	AGAINST ("hạt sen")

	
- BOOLEAN MODE : tìm những data match với expression: AGAINST ("expression" IN BOOLEAN MODE) 
 

1. tìm bài viết match với chữ HẠT  hoặc chữ SEN:
	AGAINST ("hạt sen" IN BOOLEAN MODE)

2. tìm bài viết match với chữ HẠT , không chứa chữ SEN:
	AGAINST ("hạt -sen" IN BOOLEAN MODE)

3. tìm bài viết match với chữ HẠT , có hoặc không chứa chữ SEN:
	AGAINST ("hạt+sen" IN BOOLEAN MODE)

4. tìm bài viết match CHÍNH XÁC với  hạt sen:
	AGAINST ('"hạt sen"' IN BOOLEAN MODE)
 

*/
?>