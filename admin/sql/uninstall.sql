SET FOREIGN_KEY_CHECKS = 0;
 
SELECT @@FOREIGN_KEY_CHECKS;

DROP TABLE IF EXISTS `#__pv_paper_displays`;
DROP TABLE IF EXISTS `#__pv_paper_data`;
DROP TABLE IF EXISTS `#__pv_papers`;

DELETE FROM `#__pv_tables` WHERE `name` LIKE "%pv_papers";
DELETE FROM `#__pv_tables` WHERE `name` LIKE "%pv_paper_displays";
DELETE FROM `#__pv_tables` WHERE `name` LIKE "%pv_paper_data";

--
-- AUTO_INCREMENT for table `jos_pv_offices`
--
ALTER TABLE `jos_pv_offices`
  DROP COLUMN `p_template_html`,
  DROP COLUMN `p_template_css`,
  DROP COLUMN `p_template_affidavit`,
  DROP COLUMN `p_template_instructions`,
  DROP COLUMN `p_template_statement`;

SET FOREIGN_KEY_CHECKS = 1;