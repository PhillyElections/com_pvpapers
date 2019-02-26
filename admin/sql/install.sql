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
  `sigform_first_middle` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
  `sigform_last` varchar(17) COLLATE utf8_unicode_ci NOT NULL,
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
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `#__pv_paper_data`
--

DROP TABLE IF EXISTS `#__pv_paper_data`;
CREATE TABLE `#__pv_paper_data` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL DEFAULT '0',
  `signatures` int(5) NOT NULL DEFAULT '0',
  `fees` float(10,4) NOT NULL DEFAULT '0.0000',
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
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `#__pv_paper_data`
--

INSERT INTO `#__pv_paper_data` (`id`, `office_id`, `signatures`, `fees`, `p_template_html`, `p_template_css`, `p_template_affidavit`, `p_template_instructions`, `p_template_statement`, `published`, `description`, `checked_out`, `checked_out_time`, `created`, `updated`) VALUES
(1, 19, 10, 0.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(2, 22, 5, 0.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(3, 29, 10, 0.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(4, 9, 1000, 100.0000, '', '', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(5, 8, 1000, 100.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(6, 7, 1000, 100.0000, '', '', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(7, 6, 750, 100.0000, '', '', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(8, 4, 1000, 100.0000, '', '', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(9, 5, 1000, 100.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(10, 10, 1000, 100.0000, '', '', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(11, 11, 1000, 100.0000, '', '', '', '', '', 1, '', 0, @tnl, @tnow, @tnl),
(12, 14, 2000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(13, 15, 2000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(14, 12, 1000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(15, 13, 1000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(16, 18, 1000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(17, 16, 300, 100.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(18, 17, 500, 100.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(19, 23, 1000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(20, 24, 1000, 100.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(21, 25, 1000, 100.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(22, 26, 1000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(23, 27, 1000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(24, 28, 100, 25.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(25, 20, 250, 25.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(26, 21, 250, 25.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(27, 1, 2000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(28, 2, 1000, 150.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl),
(29, 3, 2000, 200.0000, '', '', '', '', '', 0, '', 0, @tnl, @tnow, @tnl);

-- --------------------------------------------------------

--
-- Table structure for table `#__pv_paper_displays`
--

DROP TABLE IF EXISTS `#__pv_paper_displays`;
CREATE TABLE `#__pv_paper_displays` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_id` int(11) NOT NULL DEFAULT '0',
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
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for table `#__pv_papers`
--
ALTER TABLE `#__pv_papers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pv_papers_hash` (`hash`),
  ADD KEY `pv_papers_display_id` (`display_id`);

--
-- Indexes for table `#__pv_paper_data`
--
ALTER TABLE `#__pv_paper_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pv_papers_data_office_id` (`office_id`);

--
-- Indexes for table `#__pv_paper_displays`
--
ALTER TABLE `#__pv_paper_displays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pv_papers_display_data_id` (`data_id`);

--
-- AUTO_INCREMENT for table `#__pv_offices`
--
ALTER TABLE `#__pv_offices`
  ADD `p_template_html` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.tpl' AFTER `template_html`,
  ADD `p_template_css` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.css' AFTER `template_css`,
  ADD `p_template_affidavit` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' AFTER `_template_affidavit`,
  ADD `p_template_instructions` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' AFTER `template_instructions`,
  ADD `p_template_statement` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' AFTER `template_statement`;
