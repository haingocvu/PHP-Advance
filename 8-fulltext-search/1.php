<?php

/*

B1:
	ALTER TABLE `loai_mon_an` ADD FULLTEXT(`ten_loai`,`mo_ta`);

B2:
	SELECT * FROM loai_mon_an WHERE MATCH (ten_loai,mo_ta) AGAINST ("xôi" IN BOOLEAN MODE) 

Notes:
- MATCH (ten_loai,mo_ta) tương ứng với  FULLTEXT(`ten_loai`,`mo_ta`)
	vd: FULLTEXT(`ten_loai`,`mo_ta`) nhưng MATCH (ten_loai) không được
*/
?>