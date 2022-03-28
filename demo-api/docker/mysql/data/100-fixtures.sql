-- MySQL dump 10.13  Distrib 8.0.17, for Linux (x86_64)
--
-- Host: localhost    Database: testdb
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `action`
--


/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES
                                                 ('DoctrineMigrations\\Version20210311175647','2021-07-12 12:17:21',377),
                                                 ('DoctrineMigrations\\Version20210321001819','2021-07-12 12:17:21',36),
                                                 ('DoctrineMigrations\\Version20210321103011','2021-07-12 12:17:21',110),
                                                 ('DoctrineMigrations\\Version20210406130031','2021-07-12 12:17:21',251),
                                                 ('DoctrineMigrations\\Version20210411093157','2021-07-12 12:17:22',48),
                                                 ('DoctrineMigrations\\Version20210411134646','2021-07-12 12:17:22',13),
                                                 ('DoctrineMigrations\\Version20210412131458','2021-07-12 12:17:22',99),
                                                 ('DoctrineMigrations\\Version20210413095510','2021-07-12 12:17:22',53),
                                                 ('DoctrineMigrations\\Version20210613104733','2021-07-12 12:17:22',83),
                                                 ('DoctrineMigrations\\Version20210615115801','2021-07-12 12:17:22',73);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;

/*!40000 ALTER TABLE `folder` DISABLE KEYS */;
INSERT INTO `folder` VALUES (1),(2),(3),(4),(5),(6),(7),(8),(9),(10),(11),(12),(13),(14),(15),(16),(17),(18),(19),(20),(21),(22),(23),(24),(25),(26),(27),(28),(29),(30),(31),(32);
/*!40000 ALTER TABLE `folder` ENABLE KEYS */;

/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,NULL,'84150eb1-336a-4193-ba8d-6237bb7e374e','root','2021-07-12 12:27:22',NULL,'folder'),
                          (2,NULL,'b7d39fc9-297e-489e-ae3e-59573b15b4f1','template','2021-07-12 12:27:22',NULL,'folder'),
                          (3,1,'da82f1ac-bab0-4cd4-a297-ec919a6a5889','sub_folder_ROLE_OWNER0','2021-07-12 12:27:22',NULL,'folder'),
                          (4,1,'3adb3bd8-87fd-480c-ab90-c629828f89d1','sub_folder_ROLE_CREATE0','2021-07-12 12:27:22',NULL,'folder'),
                          (5,1,'af07c665-e97e-439b-89d5-b9c1d0cb803d','sub_folder_ROLE_REMOVE0','2021-07-12 12:27:22',NULL,'folder'),
                          (6,1,'a2f6412e-c5e6-4a96-ab34-23b708726687','sub_folder_ROLE_READ0','2021-07-12 12:27:22',NULL,'folder'),
                          (7,1,'1512d511-f2fc-4357-91c2-5a5fc254da89','sub_folder_ROLE_EDIT0','2021-07-12 12:27:22',NULL,'folder'),
                          (8,1,'884973e0-b287-4a45-b99f-70f9535926e4','sub_folder_ROLE_OWNER1','2021-07-12 12:27:22',NULL,'folder'),
                          (9,1,'85901279-16e0-483c-9222-f585d1af0249','sub_folder_ROLE_CREATE1','2021-07-12 12:27:22',NULL,'folder'),
                          (10,1,'46360b6d-fe2a-4787-8ac1-71ffd90fb157','sub_folder_ROLE_REMOVE1','2021-07-12 12:27:22',NULL,'folder'),
                          (11,1,'c644e2c9-2f7a-4725-9262-b87479556a18','sub_folder_ROLE_READ1','2021-07-12 12:27:22',NULL,'folder'),
                          (12,1,'84aebc5d-7eda-413f-b209-898f5c11e370','sub_folder_ROLE_EDIT1','2021-07-12 12:27:22',NULL,'folder'),
                          (13,1,'5bad015a-5752-407a-9ff3-9f1b2031a67a','sub_folder_ROLE_OWNER2','2021-07-12 12:27:22',NULL,'folder'),
                          (14,1,'f3520bed-4ff7-4f05-87c1-00f74b7a33a3','sub_folder_ROLE_CREATE2','2021-07-12 12:27:22',NULL,'folder'),
                          (15,1,'76f3b0b9-3dc3-4e43-8e9d-99d3eb61ef31','sub_folder_ROLE_REMOVE2','2021-07-12 12:27:22',NULL,'folder'),
                          (16,1,'99b759f2-cabf-4225-964c-db7fe7ccb33e','sub_folder_ROLE_READ2','2021-07-12 12:27:22',NULL,'folder'),
                          (17,1,'10d11580-5dc3-4c12-bfb3-d66660d11894','sub_folder_ROLE_EDIT2','2021-07-12 12:27:22',NULL,'folder'),
                          (18,1,'582819e8-6c15-42be-a7e4-71754f0e9866','sub_folder_ROLE_OWNER3','2021-07-12 12:27:22',NULL,'folder'),
                          (19,1,'4ade55b8-c7a3-4aee-b0e0-241c4eeb0fdd','sub_folder_ROLE_CREATE3','2021-07-12 12:27:22',NULL,'folder'),
                          (20,1,'16614a19-d8a2-4e58-9c86-f5080366c22b','sub_folder_ROLE_REMOVE3','2021-07-12 12:27:22',NULL,'folder'),
                          (21,1,'f002cabf-2494-4bfe-ae82-65c9bf0a6516','sub_folder_ROLE_READ3','2021-07-12 12:27:22',NULL,'folder'),
                          (22,1,'1d4ee4fb-a58c-4001-be4d-fc318945b47f','sub_folder_ROLE_EDIT3','2021-07-12 12:27:22',NULL,'folder'),
                          (23,1,'587e073b-02b2-46c7-8d23-d7af20f49b5b','sub_folder_ROLE_OWNER4','2021-07-12 12:27:22',NULL,'folder'),
                          (24,1,'9144aad0-6273-4331-b3b0-91458d97d2ec','sub_folder_ROLE_CREATE4','2021-07-12 12:27:22',NULL,'folder'),
                          (25,1,'80bed485-38ec-4ba5-be87-6bc4f953bb18','sub_folder_ROLE_REMOVE4','2021-07-12 12:27:22',NULL,'folder'),
                          (26,1,'5691fb5d-f24e-4062-8dca-3153febb7d4f','sub_folder_ROLE_READ4','2021-07-12 12:27:22',NULL,'folder'),
                          (27,1,'ad6d4c8b-b236-4614-aaf2-327f081f3d52','sub_folder_ROLE_EDIT4','2021-07-12 12:27:22',NULL,'folder'),
                          (28,1,'7af707b5-b043-4caa-8d69-d693073b4846','sub_folder_ROLE_OWNER5','2021-07-12 12:27:22',NULL,'folder'),
                          (29,1,'f7cbabff-f723-46aa-b6b8-d6bdc29aa6fd','sub_folder_ROLE_CREATE5','2021-07-12 12:27:22',NULL,'folder'),
                          (30,1,'733d7b90-a972-4f57-bf2b-551017ebc95b','sub_folder_ROLE_REMOVE5','2021-07-12 12:27:22',NULL,'folder'),
                          (31,1,'c2d4707b-f4ea-44d3-9459-4e1de1e93aea','sub_folder_ROLE_READ5','2021-07-12 12:27:22',NULL,'folder'),
                          (32,1,'0cfa38b9-a9ab-4e07-8021-5e98f16366cb','sub_folder_ROLE_EDIT5','2021-07-12 12:27:22',NULL,'folder');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

INSERT INTO `rule` VALUES (1,'file HAS_LABEL_AS \"architec\" CLASSIFY \"dev department\"','classify_file');
/*!40000 ALTER TABLE `rule` ENABLE KEYS */;

INSERT INTO `service_message` VALUES (1,'create_folder','added a folder to '),
                                     (2,'move_item','moved an item from'),
                                     (3,'upload_file','uploaded the file to'),
                                     (4,'create_folder_twig','added a folder to '),
                                     (5,'move_item_twig','created the item'),
                                     (6,'upload_file_twig','uploaded the file to');
/*!40000 ALTER TABLE `service_message` ENABLE KEYS */;

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'0970229e-4867-4ada-b0ac-a199446cbc21','oussamafaleh1998@gmail.com'),
                          (2,'a5a38063-7fe1-4e8a-9841-aaad32afc0b1','amelhamoudi22@gmail.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

INSERT INTO `user_item_property` VALUES (1,1,1,'[\"ROLE_OWNER\"]',0),
                                        (2,2,1,'[\"ROLE_READ\"]',0),
                                        (3,1,2,'[\"ROLE_OWNER\"]',1),
                                        (4,2,2,'[\"ROLE_OWNER\"]',1),
                                        (5,1,3,'[\"ROLE_OWNER\"]',0),
                                        (6,1,4,'[\"ROLE_CREATE\"]',0),
                                        (7,1,5,'[\"ROLE_REMOVE\"]',0),
                                        (8,1,6,'[\"ROLE_READ\"]',0),
                                        (9,1,7,'[\"ROLE_EDIT\"]',0),
                                        (10,1,8,'[\"ROLE_OWNER\"]',0),
                                        (11,1,9,'[\"ROLE_CREATE\"]',0),
                                        (12,1,10,'[\"ROLE_REMOVE\"]',0),
                                        (13,1,11,'[\"ROLE_READ\"]',0),
                                        (14,1,12,'[\"ROLE_EDIT\"]',0),
                                        (15,1,13,'[\"ROLE_OWNER\"]',0),
                                        (16,1,14,'[\"ROLE_CREATE\"]',0),
                                        (17,1,15,'[\"ROLE_REMOVE\"]',0),
                                        (18,1,16,'[\"ROLE_READ\"]',0),
                                        (19,1,17,'[\"ROLE_EDIT\"]',0),
                                        (20,1,18,'[\"ROLE_OWNER\"]',0),
                                        (21,1,19,'[\"ROLE_CREATE\"]',0),
                                        (22,1,20,'[\"ROLE_REMOVE\"]',0),
                                        (23,1,21,'[\"ROLE_READ\"]',0),
                                        (24,1,22,'[\"ROLE_EDIT\"]',0),
                                        (25,1,23,'[\"ROLE_OWNER\"]',0),
                                        (26,1,24,'[\"ROLE_CREATE\"]',0),
                                        (27,1,25,'[\"ROLE_REMOVE\"]',0),
                                        (28,1,26,'[\"ROLE_READ\"]',0),
                                        (29,1,27,'[\"ROLE_EDIT\"]',0),
                                        (30,1,28,'[\"ROLE_OWNER\"]',0),
                                        (31,1,29,'[\"ROLE_CREATE\"]',0),
                                        (32,1,30,'[\"ROLE_REMOVE\"]',0),
                                        (33,1,31,'[\"ROLE_READ\"]',0),
                                        (34,1,32,'[\"ROLE_EDIT\"]',0);

