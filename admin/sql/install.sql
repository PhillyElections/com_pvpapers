SET FOREIGN_KEY_CHECKS=0;

/* ==================== constants ==================== */
SET @tnow = NOW();
SET @tnl  = '0000-00-00 00:00:00';
SET @tns  = '0000-00-00';
SET @db   = DATABASE();

/* ==================== tables ==================== */

DROP TABLE IF EXISTS `#__pv_paper_data`;
DROP TABLE IF EXISTS `#__pv_paper_displays`;
DROP TABLE IF EXISTS `#__pv_papers`;


--
-- Table structure for table `#__pv_papers`
--

DROP TABLE IF EXISTS `#__pv_papers`;
CREATE TABLE `#__pv_papers` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `hash` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `display_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `p_template_form` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blank_nomination_paper.pdf',
  `p_template_html` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.tpl',
  `p_template_css` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.css',
  `p_template_affidavit` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `p_template_instructions` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `p_template_statement` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `candidate_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `candidate_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `candidate_address2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `candidate_occupation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `candidate_party` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `candidate_district` smallint(2) DEFAULT NULL,
  `candidate_ward` smallint(2) DEFAULT NULL,
  `candidate_division` smallint(2) DEFAULT NULL,
  `candidate_zip` smallint(5) DEFAULT NULL,
  `candidate_phone` bigint(16) NOT NULL,
  `sigform_first_middle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sigform_last` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sigform_address` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `candidate_self_circulating` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `candidate_ballot_name_approved` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `candidate_double_side_acknowledged` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `candidate_resign_to_run_acknowledged` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `confirm` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `extra_data` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'delimit between pairs with ''::''',
  `user_ip` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jos_pv_papers`
--

INSERT INTO `jos_pv_papers` (`id`, `hash`, `display_id`, `p_template_form`, `p_template_html`, `p_template_css`, `p_template_affidavit`, `p_template_instructions`, `p_template_statement`, `candidate_name`, `candidate_address`, `candidate_address2`, `candidate_occupation`, `candidate_party`, `candidate_district`, `candidate_ward`, `candidate_division`, `candidate_zip`, `candidate_phone`, `sigform_first_middle`, `sigform_last`, `sigform_address`, `candidate_self_circulating`, `candidate_ballot_name_approved`, `candidate_double_side_acknowledged`, `candidate_resign_to_run_acknowledged`, `confirm`, `extra_data`, `user_ip`, `published`, `checked_out`, `checked_out_time`, `created`, `updated`) VALUES
(1, '8443b7cbac19e050c21aca6df2420c4e', 1, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 'ORVILLE C. ROBINSON', '431 WEST RITTENHOUSE ST', '', 'Not Requested', 'GREEN PARTY', NULL, NULL, NULL, 19144, 2158434256, '', '', '', 'no', 'no', 'yes', 'yes', 'yes', '{\"candidate_party\":\"GREEN PARTY\",\"candidate_name\":\"ORVILLE C. ROBINSON\",\"candidate_occupation\":\"Not Requested\",\"candidate_address\":\"431 WEST RITTENHOUSE ST\",\"candidate_address2\":\"\",\"candidate_zip\":\"19144\",\"candidate_phone\":\"2158434256\",\"display_id_1\":\"2\",\"candidate_name_1\":\"ORVILLE C. ROBINSON\",\"candidate_address_1\":\"431 WEST RITTENHOUSE ST\",\"candidate_occupation_1\":\"CLERK\",\"display_id_2\":\"\",\"candidate_district_2\":\"\",\"candidate_name_2\":\"\",\"candidate_address_2\":\"\",\"candidate_occupation_2\":\"\",\"display_id_3\":\"\",\"candidate_district_3\":\"\",\"candidate_name_3\":\"\",\"candidate_address_3\":\"\",\"candidate_occupation_3\":\"\",\"display_id_4\":\"\",\"candidate_district_4\":\"\",\"candidate_name_4\":\"\",\"candidate_address_4\":\"\",\"candidate_occupation_4\":\"\",\"display_id_5\":\"\",\"candidate_district_5\":\"\",\"candidate_name_5\":\"\",\"candidate_address_5\":\"\",\"candidate_occupation_5\":\"\",\"display_id_6\":\"\",\"candidate_district_6\":\"\",\"candidate_name_6\":\"\",\"candidate_address_6\":\"\",\"candidate_occupation_6\":\"\",\"display_id_7\":\"\",\"candidate_district_7\":\"\",\"candidate_name_7\":\"\",\"candidate_address_7\":\"\",\"candidate_occupation_7\":\"\",\"candidate_double_side_acknowledged\":\"yes\",\"candidate_resign_to_run_acknowledged\":\"yes\",\"confirm\":\"yes\",\"task\":\"save\",\"view\":\"input\",\"ItemId\":\"\",\"8443b7cbac19e050c21aca6df2420c4e\":\"1\",\"lang\":\"en\",\"user_ip\":\"107.77.204.128\",\"display_id\":\"1\",\"p_template_form\":\"blank_nomination_paper.pdf\",\"p_template_html\":\"default.tpl\",\"p_template_css\":\"default.css\",\"p_template_affidavit\":\"\",\"p_template_instructions\":\"\",\"p_template_statement\":\"\",\"published\":\"1\",\"candidate_office_1\":\"City Council At-Large\",\"candidate_office_2\":\"\",\"candidate_office_3\":\"\",\"candidate_office_4\":\"\",\"candidate_office_5\":\"\",\"candidate_office_6\":\"\",\"candidate_office_7\":\"\",\"hash\":\"8443b7cbac19e050c21aca6df2420c4e\"}', '107.77.204.128', 1, 0, '0000-00-00 00:00:00', '2019-03-11 18:21:00', '0000-00-00 00:00:00'),
(2, 'af34223238bfd7a95360d95f91e363b1', 1, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 'Olivia Faison', '5522 Spruce St.', '', 'Not Requested', 'Green', NULL, NULL, NULL, 19139, 2157484912, '', '', '', 'no', 'no', 'yes', 'yes', 'yes', '{\"candidate_party\":\"Green\",\"candidate_name\":\"Olivia Faison\",\"candidate_occupation\":\"Not Requested\",\"candidate_address\":\"5522 Spruce St.\",\"candidate_address2\":\"\",\"candidate_zip\":\"19139\",\"candidate_phone\":\"2157484912\",\"display_id_1\":\"2\",\"candidate_name_1\":\"Olivia Faison\",\"candidate_address_1\":\"5522 Spruce St.\",\"candidate_occupation_1\":\"Retired Analytical Chemist\",\"display_id_2\":\"\",\"candidate_district_2\":\"\",\"candidate_name_2\":\"\",\"candidate_address_2\":\"\",\"candidate_occupation_2\":\"\",\"display_id_3\":\"\",\"candidate_district_3\":\"\",\"candidate_name_3\":\"\",\"candidate_address_3\":\"\",\"candidate_occupation_3\":\"\",\"display_id_4\":\"\",\"candidate_district_4\":\"\",\"candidate_name_4\":\"\",\"candidate_address_4\":\"\",\"candidate_occupation_4\":\"\",\"display_id_5\":\"\",\"candidate_district_5\":\"\",\"candidate_name_5\":\"\",\"candidate_address_5\":\"\",\"candidate_occupation_5\":\"\",\"display_id_6\":\"\",\"candidate_district_6\":\"\",\"candidate_name_6\":\"\",\"candidate_address_6\":\"\",\"candidate_occupation_6\":\"\",\"display_id_7\":\"\",\"candidate_district_7\":\"\",\"candidate_name_7\":\"\",\"candidate_address_7\":\"\",\"candidate_occupation_7\":\"\",\"candidate_double_side_acknowledged\":\"yes\",\"candidate_resign_to_run_acknowledged\":\"yes\",\"confirm\":\"yes\",\"task\":\"save\",\"view\":\"input\",\"ItemId\":\"\",\"af34223238bfd7a95360d95f91e363b1\":\"1\",\"lang\":\"en\",\"user_ip\":\"107.77.204.128\",\"display_id\":\"1\",\"p_template_form\":\"blank_nomination_paper.pdf\",\"p_template_html\":\"default.tpl\",\"p_template_css\":\"default.css\",\"p_template_affidavit\":\"\",\"p_template_instructions\":\"\",\"p_template_statement\":\"\",\"published\":\"1\",\"candidate_office_1\":\"City Council At-Large\",\"candidate_office_2\":\"\",\"candidate_office_3\":\"\",\"candidate_office_4\":\"\",\"candidate_office_5\":\"\",\"candidate_office_6\":\"\",\"candidate_office_7\":\"\",\"hash\":\"af34223238bfd7a95360d95f91e363b1\"}', '107.77.204.128', 1, 0, '0000-00-00 00:00:00', '2019-03-11 18:22:14', '0000-00-00 00:00:00'),
(3, '2ac0fb43bdd16eca8021e29b1dbc9d5c', 1, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 'Clarc King', '1009 S. 2nd St.', '', 'Not Requested', 'Independent', NULL, NULL, NULL, 19147, 2152797380, '', '', '', 'no', 'no', 'yes', 'yes', 'yes', '{\"candidate_party\":\"Independent\",\"candidate_name\":\"Clarc King\",\"candidate_occupation\":\"Not Requested\",\"candidate_address\":\"1009 S. 2nd St.\",\"candidate_address2\":\"\",\"candidate_zip\":\"19147\",\"candidate_phone\":\"2152797380\",\"display_id_1\":\"2\",\"candidate_name_1\":\"Clarc King\",\"candidate_address_1\":\"1009 S. 2nd St.\",\"candidate_occupation_1\":\"Retired\",\"display_id_2\":\"\",\"candidate_district_2\":\"\",\"candidate_name_2\":\"\",\"candidate_address_2\":\"\",\"candidate_occupation_2\":\"\",\"display_id_3\":\"\",\"candidate_district_3\":\"\",\"candidate_name_3\":\"\",\"candidate_address_3\":\"\",\"candidate_occupation_3\":\"\",\"display_id_4\":\"\",\"candidate_district_4\":\"\",\"candidate_name_4\":\"\",\"candidate_address_4\":\"\",\"candidate_occupation_4\":\"\",\"display_id_5\":\"\",\"candidate_district_5\":\"\",\"candidate_name_5\":\"\",\"candidate_address_5\":\"\",\"candidate_occupation_5\":\"\",\"display_id_6\":\"\",\"candidate_district_6\":\"\",\"candidate_name_6\":\"\",\"candidate_address_6\":\"\",\"candidate_occupation_6\":\"\",\"display_id_7\":\"\",\"candidate_district_7\":\"\",\"candidate_name_7\":\"\",\"candidate_address_7\":\"\",\"candidate_occupation_7\":\"\",\"candidate_double_side_acknowledged\":\"yes\",\"candidate_resign_to_run_acknowledged\":\"yes\",\"confirm\":\"yes\",\"task\":\"save\",\"view\":\"input\",\"ItemId\":\"\",\"2ac0fb43bdd16eca8021e29b1dbc9d5c\":\"1\",\"lang\":\"en\",\"user_ip\":\"107.77.204.128\",\"display_id\":\"1\",\"p_template_form\":\"blank_nomination_paper.pdf\",\"p_template_html\":\"default.tpl\",\"p_template_css\":\"default.css\",\"p_template_affidavit\":\"\",\"p_template_instructions\":\"\",\"p_template_statement\":\"\",\"published\":\"1\",\"candidate_office_1\":\"City Council At-Large\",\"candidate_office_2\":\"\",\"candidate_office_3\":\"\",\"candidate_office_4\":\"\",\"candidate_office_5\":\"\",\"candidate_office_6\":\"\",\"candidate_office_7\":\"\",\"hash\":\"2ac0fb43bdd16eca8021e29b1dbc9d5c\"}', '107.77.204.128', 1, 0, '0000-00-00 00:00:00', '2019-03-11 18:23:17', '0000-00-00 00:00:00'),
(4, 'da76af48f879cee64a40beca45a9e885', 1, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 'Asa Khalif', '2717 Bril St.', '', 'Not Requested', 'Democrat', NULL, NULL, NULL, 19124, 2676504032, '', '', '', 'no', 'no', 'yes', 'yes', 'yes', '{\"candidate_party\":\"Democrat\",\"candidate_name\":\"Asa Khalif\",\"candidate_occupation\":\"Not Requested\",\"candidate_address\":\"2717 Bril St.\",\"candidate_address2\":\"\",\"candidate_zip\":\"19124\",\"candidate_phone\":\"2676504032\",\"display_id_1\":\"2\",\"candidate_name_1\":\"Asa Khalif\",\"candidate_address_1\":\"2717 Bril St.\",\"candidate_occupation_1\":\"Entreprenuar\",\"display_id_2\":\"\",\"candidate_district_2\":\"\",\"candidate_name_2\":\"\",\"candidate_address_2\":\"\",\"candidate_occupation_2\":\"\",\"display_id_3\":\"\",\"candidate_district_3\":\"\",\"candidate_name_3\":\"\",\"candidate_address_3\":\"\",\"candidate_occupation_3\":\"\",\"display_id_4\":\"\",\"candidate_district_4\":\"\",\"candidate_name_4\":\"\",\"candidate_address_4\":\"\",\"candidate_occupation_4\":\"\",\"display_id_5\":\"\",\"candidate_district_5\":\"\",\"candidate_name_5\":\"\",\"candidate_address_5\":\"\",\"candidate_occupation_5\":\"\",\"display_id_6\":\"\",\"candidate_district_6\":\"\",\"candidate_name_6\":\"\",\"candidate_address_6\":\"\",\"candidate_occupation_6\":\"\",\"display_id_7\":\"\",\"candidate_district_7\":\"\",\"candidate_name_7\":\"\",\"candidate_address_7\":\"\",\"candidate_occupation_7\":\"\",\"candidate_double_side_acknowledged\":\"yes\",\"candidate_resign_to_run_acknowledged\":\"yes\",\"confirm\":\"yes\",\"task\":\"save\",\"view\":\"input\",\"ItemId\":\"\",\"da76af48f879cee64a40beca45a9e885\":\"1\",\"lang\":\"en\",\"user_ip\":\"107.77.204.128\",\"display_id\":\"1\",\"p_template_form\":\"blank_nomination_paper.pdf\",\"p_template_html\":\"default.tpl\",\"p_template_css\":\"default.css\",\"p_template_affidavit\":\"\",\"p_template_instructions\":\"\",\"p_template_statement\":\"\",\"published\":\"1\",\"candidate_office_1\":\"City Council At-Large\",\"candidate_office_2\":\"\",\"candidate_office_3\":\"\",\"candidate_office_4\":\"\",\"candidate_office_5\":\"\",\"candidate_office_6\":\"\",\"candidate_office_7\":\"\",\"hash\":\"da76af48f879cee64a40beca45a9e885\"}', '107.77.204.128', 1, 0, '0000-00-00 00:00:00', '2019-03-11 18:24:33', '0000-00-00 00:00:00'),
(5, '3bde81911e35aad06643e619ef4d4ec8', 1, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 'Joe Cox', '619 Kimball St.', '', 'Not Requested', 'Independent', NULL, NULL, NULL, 19147, 4108458974, '', '', '', 'no', 'no', 'yes', 'yes', 'yes', '{\"candidate_party\":\"Independent\",\"candidate_name\":\"Joe Cox\",\"candidate_occupation\":\"Not Requested\",\"candidate_address\":\"619 Kimball St.\",\"candidate_address2\":\"\",\"candidate_zip\":\"19147\",\"candidate_phone\":\"4108458974\",\"display_id_1\":\"2\",\"candidate_name_1\":\"Joe Cox\",\"candidate_address_1\":\"619 Kimball St.\",\"candidate_occupation_1\":\"Bike Messenger\",\"display_id_2\":\"\",\"candidate_district_2\":\"\",\"candidate_name_2\":\"\",\"candidate_address_2\":\"\",\"candidate_occupation_2\":\"\",\"display_id_3\":\"\",\"candidate_district_3\":\"\",\"candidate_name_3\":\"\",\"candidate_address_3\":\"\",\"candidate_occupation_3\":\"\",\"display_id_4\":\"\",\"candidate_district_4\":\"\",\"candidate_name_4\":\"\",\"candidate_address_4\":\"\",\"candidate_occupation_4\":\"\",\"display_id_5\":\"\",\"candidate_district_5\":\"\",\"candidate_name_5\":\"\",\"candidate_address_5\":\"\",\"candidate_occupation_5\":\"\",\"display_id_6\":\"\",\"candidate_district_6\":\"\",\"candidate_name_6\":\"\",\"candidate_address_6\":\"\",\"candidate_occupation_6\":\"\",\"display_id_7\":\"\",\"candidate_district_7\":\"\",\"candidate_name_7\":\"\",\"candidate_address_7\":\"\",\"candidate_occupation_7\":\"\",\"candidate_double_side_acknowledged\":\"yes\",\"candidate_resign_to_run_acknowledged\":\"yes\",\"confirm\":\"yes\",\"task\":\"save\",\"view\":\"input\",\"ItemId\":\"\",\"3bde81911e35aad06643e619ef4d4ec8\":\"1\",\"lang\":\"en\",\"user_ip\":\"107.77.204.128\",\"display_id\":\"1\",\"p_template_form\":\"blank_nomination_paper.pdf\",\"p_template_html\":\"default.tpl\",\"p_template_css\":\"default.css\",\"p_template_affidavit\":\"\",\"p_template_instructions\":\"\",\"p_template_statement\":\"\",\"published\":\"1\",\"candidate_office_1\":\"City Council At-Large\",\"candidate_office_2\":\"\",\"candidate_office_3\":\"\",\"candidate_office_4\":\"\",\"candidate_office_5\":\"\",\"candidate_office_6\":\"\",\"candidate_office_7\":\"\",\"hash\":\"3bde81911e35aad06643e619ef4d4ec8\"}', '107.77.204.128', 1, 0, '0000-00-00 00:00:00', '2019-03-11 18:27:04', '0000-00-00 00:00:00');

--
-- Table structure for table `#__pv_paper_data`
--

DROP TABLE IF EXISTS `#__pv_paper_data`;
CREATE TABLE `#__pv_paper_data` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL DEFAULT '0',
  `signatures` int(5) NOT NULL DEFAULT '0',
  `fees` float(10,4) NOT NULL DEFAULT '0.0000',
  `p_template_form` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blank_nomination_paper.pdf',
  `p_template_html` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.tpl',
  `p_template_css` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.css',
  `p_template_affidavit` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `p_template_instructions` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `p_template_statement` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `checked_out` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `#__pv_paper_data`
--

INSERT INTO `#__pv_paper_data` (`id`, `office_id`, `signatures`, `fees`, `p_template_form`, `p_template_html`, `p_template_css`, `p_template_affidavit`, `p_template_instructions`, `p_template_statement`, `published`, `description`, `checked_out`, `checked_out_time`, `created`, `updated`) VALUES
(1, 19, 10, 0.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(2, 22, 5, 0.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(3, 29, 10, 0.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(4, 9, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(5, 8, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(6, 7, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(7, 6, 750, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(8, 4, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(9, 5, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(10, 10, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(11, 11, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(12, 14, 2000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(13, 15, 2000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(14, 12, 1000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(15, 13, 1000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(16, 18, 1000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(17, 16, 300, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(18, 17, 500, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(19, 23, 1000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(20, 24, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(21, 25, 1000, 100.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(22, 26, 1000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(23, 27, 1000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(24, 28, 100, 25.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(25, 20, 250, 25.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(26, 21, 250, 25.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(27, 1, 2000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(28, 2, 1000, 150.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(29, 3, 2000, 200.0000, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', 0, '', 0, @tnl, @tnow, @tnl);

-- --------------------------------------------------------

--
-- Table structure for table `#__pv_paper_displays`
--

DROP TABLE IF EXISTS `#__pv_paper_displays`;
CREATE TABLE `#__pv_paper_displays` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
  `p_template_form` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blank_nomination_paper.pdf',
  `p_template_html` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.tpl',
  `p_template_css` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.css',
  `p_template_affidavit` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `p_template_instructions` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `p_template_statement` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `signing_start` date NOT NULL DEFAULT '0000-00-00',
  `signing_stop` date NOT NULL DEFAULT '0000-00-00',
  `display_start` date NOT NULL DEFAULT '0000-00-00',
  `display_stop` date NOT NULL DEFAULT '0000-00-00',
  `election_type` enum('general','primary','special') COLLATE utf8_unicode_ci DEFAULT NULL,
  `election_date` date NOT NULL DEFAULT '0000-00-00',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `published` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `checked_out_time` datetime NOT NULL DEFAULT'0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for table `#__pv_papers`
--
ALTER TABLE `#__pv_papers`
  ADD UNIQUE KEY `pv_papers_hash` (`hash`),
  ADD KEY `pv_papers_display_id` (`display_id`);

--
-- Indexes for table `#__pv_paper_data`
--
ALTER TABLE `#__pv_paper_data`
  ADD KEY `pv_papers_data_office_id` (`office_id`);

--
-- Indexes for table `#__pv_paper_displays`
--
ALTER TABLE `#__pv_paper_displays`
  ADD KEY `pv_papers_display_data_id` (`data_id`);

--
-- AUTO_INCREMENT for table `#__pv_offices`
--
ALTER TABLE `#__pv_offices`
  ADD `p_template_form` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blank_nomination_paper.pdf' AFTER `id`,
  ADD `p_template_html` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.tpl' AFTER `template_html`,
  ADD `p_template_css` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.css' AFTER `template_css`,
  ADD `p_template_affidavit` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' AFTER `template_affidavit`,
  ADD `p_template_instructions` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' AFTER `template_instructions`,
  ADD `p_template_statement` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' AFTER `template_statement`;

ALTER TABLE `jos_pv_papers` 
  CHANGE `sigform_first_middle` `sigform_first_middle` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  CHANGE `sigform_last` `sigform_last` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL;

-- 
-- dates *must* change for production
--

INSERT INTO `jos_pv_paper_displays` (`id`, `data_id`, `p_template_form`, `p_template_html`, `p_template_css`, `p_template_affidavit`, `p_template_instructions`, `p_template_statement`, `signing_start`, `signing_stop`, `display_start`, `display_stop`, `election_type`, `election_date`, `description`, `published`, `checked_out`, `checked_out_time`, `created`, `updated`) VALUES
(1, 4, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-03-04', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:29', '0000-00-00 00:00:00'),
(2, 6, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-03-04', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:34', '0000-00-00 00:00:00'),
(3, 7, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-03-04', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:39', '0000-00-00 00:00:00'),
(4, 8, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-03-04', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:43', '0000-00-00 00:00:00'),
(5, 10, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-03-04', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:47', '0000-00-00 00:00:00'),
(6, 11, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-03-04', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:51', '0000-00-00 00:00:00');



--
-- test dates below
-- (1, 4, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-02-19', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:29', '0000-00-00 00:00:00'),
-- (2, 6, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-02-19', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:34', '0000-00-00 00:00:00'),
-- (3, 7, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-02-19', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:39', '0000-00-00 00:00:00'),
-- (4, 8, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-02-19', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:43', '0000-00-00 00:00:00'),
-- (5, 10, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-02-19', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:47', '0000-00-00 00:00:00'),
-- (6, 11, 'blank_nomination_paper.pdf', 'default.tpl', 'default.css', '', '', '', '2019-03-13', '2019-08-01', '2019-02-19', '2019-08-01', 'general', '2019-11-05', '', 0, 0, '0000-00-00 00:00:00', '2019-02-28 14:25:51', '0000-00-00 00:00:00');
--
--