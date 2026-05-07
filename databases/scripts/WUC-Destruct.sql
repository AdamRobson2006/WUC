-- @C:\databases\scripts\WUC-Destruct.sql

-- Setting the foreign key checks to 0 allows us to completely destroy all of the schema in one command

SET FOREIGN_KEY_CHECKS = 0;

DROP DATABASE IF EXISTS `wuc-schema`;

SET FOREIGN_KEY_CHECKS = 1;
