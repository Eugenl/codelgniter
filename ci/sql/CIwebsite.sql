/*
 * 站点数据库创建语句
 * @author      Eugenl
 * @copyright   Copyright (c) 2013 - , eugenl.
 */
*/

CREATE TABLE LOGIN
(
TEL CHAR(11) PRIMARY KEY,
PASSWORD VARCHAR(8) NOT NULL,
ROLE TINYINT(1) DEFAULT 1 -- 0 IS ADMINISTRATOR , 1 IS ORDINARY USERS
)