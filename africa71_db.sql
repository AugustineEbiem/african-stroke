-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2021 at 01:46 PM
-- Server version: 10.3.29-MariaDB-log
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `africa71_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `description` longtext NOT NULL,
  `link` varchar(220) NOT NULL,
  `img` varchar(220) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `date_updated` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `link`, `img`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Board & Executive Commitee', '', '', '', 'Active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'ASO Bylaws', 'ASO is a result of a merger in 2006 between the former International Stroke Society (ISS) and the World Stroke Federation (WSF).', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `intro` varchar(220) NOT NULL,
  `description` longtext NOT NULL,
  `link` varchar(220) NOT NULL,
  `img` varchar(220) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_created` datetime(6) NOT NULL,
  `date_updated` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `title`, `intro`, `description`, `link`, `img`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Dr. Rufus Akinyemi.\r\n', 'Rufus Olusola Akinyemi MBBS, MSc, PhD, MWACP, FMCP is a Consultant Neurologist at the University College Hospital Ibadan & Senior Research Fellow with the Institute for Advanced Medical Research Training (IAMRAT), Colleg', 'Rufus Olusola Akinyemi MBBS, MSc, PhD, MWACP, FMCP is a Consultant Neurologist at the University College Hospital Ibadan & Senior Research Fellow with the Institute for Advanced Medical Research Training (IAMRAT), College of Medicine, University of Ibadan, Nigeria. He is Deputy Director of the Centre for Genomic and Precision Medicine. Dr. Akinyemi’s membership spans both the local and international organizations. He is Steering Committee member of the International Stroke Genetics Consortium (ISGC) and World Stroke Organization-WHO- Lancet Commission on stroke in developing countries among others. As an emerging leader in African neurogenomics and dementia, Dr. Akinyemi has established the Neuroscience and Ageing Research Unit with focus on ageing – related vascular and degenerative disorders of the brain among people of African descent. He is a member of very prestigious international organizations including but not limited to African representative of the Young Stroke Professionals, Education and the World Stroke Campaign committees of the World Stroke Organization, International Brain Research Organization, American Academy of Neurology, Global Alliance for Chronic Diseases (GACD), Human Health and Heredity (H3) Africa Consortium; Stroke Expert Group, Global Burden of Disease (GBD) Study. His young research career has >150 publications including [an Alzheimer Disease International report on the ‘Dementia in sub-Sahara Africa: challenges and opportunities”]; a patent and several awards including but not limited to the Newcastle University Overseas Research Studentship (2009 – 2012), James Kimani Young Investigator Award of the Society of Neuroscientists of Africa (2013), the prestigious American Academy of Neurology 2016 Bruce S. Schoenberg International Award in Neuroepidemiology, 2018 fellowship of the Global Brain Health Institute (GBHI) and the FLAIR fellowship of the African Academy of Science. Dr. Rufus Akinyemi is chair and a member of the founding steering committee under the African Stroke Organization (ASO).\r\n', '', '', 'Active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, 'Prof. Mayowa Owolabi.', 'Mayowa Ojo Owolabi, MBBS, MSc, Dr.M, FMCP, FAAN, FANA, FRCP, FAS is a Professor of Neurology and Dean, Faculty of Clinical Sciences, University of Ibadan; Honorary Consultant Neurologist at the Department of Medicine, Un', 'Mayowa Ojo Owolabi, MBBS, MSc, Dr.M, FMCP, FAAN, FANA, FRCP, FAS is a Professor of Neurology and Dean, Faculty of Clinical Sciences, University of Ibadan; Honorary Consultant Neurologist at the Department of Medicine, University College Hospital, Ibadan; a Fellow of the African Academy of Science (Nigeria), Fellow American Academy of Neurology and Fellow Royal College of Physicians (London). He is a recognized global leader in science covering neurology, cardiovascular diseases, neuro-rehabilitation, and community-based genomic epidemiology of stroke in Africa. Prof. Owolabi has led collaborative stroke studies including the Mac-Arthur grant (PI), Overall PI for the Stroke Investigative Research & Educational Network (SIREN) & Systematic Investigation of Blacks with Stroke using Genomics (SIBS Genomics) studies; pioneer chair of the largest study of cardiovascular diseases in Africa (H3Africa-CVD WG with >55,000 subjects). Prof Owolabi occupies strategic national and international positions including Vice-Chair, American Heart Association Scientific Statement Committee on “Stroke in people of African Ancestry”, Member of the Presidium, World Federation for Neurorehabilitation, Representative of the WFNR on Global Rehabilitation Alliance, World Stroke Organization Board of Directors, American Neurological Association, pioneer Director, Centre for Genomic and Precision Medicine, University of Ibadan; the pioneer SSA Regional Vice-President, World Federation of Neurorehabilitation (Africa); Co-Chair, Joint Publication Committee-Global Alliance for Chronic Diseases; a permanent Member, Expert Review Group, Wellcome Trust, UK; founder of COUNCIL (Control Unique to CVDs in LMIC) initiative; member global burden of diseases (GBD) group; Lead Co-Chair, World Stroke Organization-WHO- Lancet Commission on stroke in developing countries and World Hypertension League Sub-Sahara Regional Office Director (2019-2021) among others. An erudite scholar and entrepreneur, Prof. Owolabi has >106 international scientific presentations; >250 publications in peer-reviewed journals and several other inventions including a stroke phenotype patent (Reg.#:NG/PT/NC/2016/2007); He is a co-chair and member of the founding steering committee of the African Stroke Organization (ASO).\r\n', '', '', 'Active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, 'Mr. Ad Adams Ebenezer.', 'Ad Adams Ebenezer is a Co-founder and Executive director of the Stroke Association Supportnetwork-Ghana (SASNETGHANA). He is a rehabilitation expert and a lead person for SASNET GHANA’s Community Life After Stroke Progra', 'Ad Adams Ebenezer is a Co-founder and Executive director of the Stroke Association Supportnetwork-Ghana (SASNETGHANA). He is a rehabilitation expert and a lead person for SASNET GHANA’s Community Life After Stroke Program (CLASP), Post Discharge Stroke Support (PDSS) and MRU project. His interest includes, stroke and NCDs advocacy for policy change, community stroke and NCDs awareness and prevention, rehabilitation and support after stroke for all persons living with strokes and other NCDs. Ad Adams is a member of prestigious organizations where he continues to work assiduously with stakeholders to achieve the Universal Health Coverage (UHC) and SDGs #3 which is aimed at leaving no one behind in terms of access to stroke care and support. He is a member of board of directors of the World Stroke Organization (WSO) for the Middle East, North Africa and East Mediterranean. Ad Adams is the vice chair of the Ghana Non-Communicable Disease Alliance (GhNCDA), a member of the Global health network, plenary health alliance, people’s health movement, Joint Learning Network, International Parkinson, Movement Disorders Society (MDS). He is one of the founding Steering Committee and currently serves as the Secretary of the African Stroke Organization (ASO).', '', '', 'Active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(4, 'Prof. Foad Abd-Allah.\r\n', 'Foad Abd-Allah MB.ChB, MSc, MD is a Professor of Neurology and stroke medicine at the Faculty of Medicine, Cairo University, Egypt; Director Neurovascular Unit, World Stroke Organization (WSO) and board director for Midd', 'Foad Abd-Allah MB.ChB, MSc, MD is a Professor of Neurology and stroke medicine at the Faculty of Medicine, Cairo University, Egypt; Director Neurovascular Unit, World Stroke Organization (WSO) and board director for Middle East, North Africa and East Mediterranean. His main clinical and research interests lie in the field of Stroke Medicine, Neurosonology and Interventional Neurology. Additionally, he is a board member in the Communication and Publication Committee of the World Federation of Neurology (WFN) representing the Arab communities. Prof. Foad is a reviewer and a member of the editorial board for a number of peer reviewed and, high ranked journals including Neurology, Neuroimaging, Frontiers of Neurology, European stroke journal and the journal of Vascular Interventional Neurology. He has presented and lectured extensively at the local and global scale, and received several prestigious awards from national and international scientific bodies. He is a recognizable international figure, actively participating in large scientific bodies such as the Cerebrovascular Global Burden of Disease (GBD) group, the International Stroke Genetic Consortium, and Neurosonology Research Group of the World Federation of Neurology (WFN). He is a member of the World Stroke Organization (WSO) since 2006; Board of Directors from 2012, representing Middle East and North Africa region among others. Currently, he is the president-elect of the African Academy of Neurology (AFAN) 2019-2021. As a founding steering committee member, he serves as the Regional Coordinator of the North Africa region under the African Stroke Organization (ASO).\r\n', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(5, 'Colonel (R) Prof. Mofou BELO\r\n', 'Mofou Belo, MD is a Professor (Chair) of Neurology in the Health Sciences Faculty, University of Lomé (Togo). He studied Neurology, clinical neurophysiology, community infectiology in France, University of Lyon 1 and Tro', 'Mofou Belo, MD is a Professor (Chair) of Neurology in the Health Sciences Faculty, University of Lomé (Togo). He studied Neurology, clinical neurophysiology, community infectiology in France, University of Lyon 1 and Tropical Medicine from University of Aix Marseille, France. He is a former Chief of Staff and worked at Army Central Health Service. He was also Director of the Togolese Medical and Surgical Clinic, CHU Sylvanus Olympio from 2011-2015. He is acting Head, non-communicable diseases [NCD] division; neuroscience focal point for the Ministry of Health; Togo focal point for the World Dementia Observatory (WHO). He is a member of various research and intellectual organizations including: Ligue franco-Africaine contre les AVC: President of theTogolese Mental Health Association: deputy President, Togolese Neurosciences Society: deputy President, Pan-African Association of Neurological Sciences: member, Fellow West African Association of Medical practitioners. He is a founding steering committee member and West African Regional Coordinator of the African Stroke Organization (ASO).', '', '', 'Active', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(6, 'Professor Osheik Seidi', 'Osheik Seidi MBBS, ABIM, MRCP, FRCP is a Professor of Internal Medicine and Neurology; Director of Scientific Research and Cultural Relations and Medical Consultant at the University of Khartoum, Sudan. His research inte', 'Osheik Seidi MBBS, ABIM, MRCP, FRCP is a Professor of Internal Medicine and Neurology; Director of Scientific Research and Cultural Relations and Medical Consultant at the University of Khartoum, Sudan. His research interests includes neuroradiology, neurosurgery and clinical immunology. Osheik has occupied numerous strategic positions towards repositioning neurological care in East Africa. He served as one of the Vice president for the Sudan region under the African Academy of Neurology (AFAN) in 2018 to promote neurological care in Africa among others. An erudite scholar with over ninety (90) scientific papers published in peer reviewed journals, Osheik is a founding steering committee member representing the East African region under the African Stroke Organization (ASO).', '', '', '', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img_name` varchar(220) NOT NULL,
  `img_desc` varchar(220) NOT NULL,
  `location` varchar(220) NOT NULL,
  `date_created` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img_name`, `img_desc`, `location`, `date_created`, `status`) VALUES
(1, 'new', 'nothing', 'location', '2021-05-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `category_id` int(11) NOT NULL,
  `privilege` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `file` varchar(220) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `title`, `category_id`, `privilege`, `status`, `file`, `date_created`) VALUES
(1, 'International Journal of Stroke', 1, 0, 1, 'stroke.pdf', '2021-04-15'),
(2, 'International Journal of Heart', 2, 1, 0, 'heart.pdf', '2021-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `validation_code` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date_created` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `f_name`, `l_name`, `username`, `email`, `phone`, `city`, `password`, `validation_code`, `status`, `date_created`) VALUES
(1, 'John', 'Deo', 'johndeo', 'john@gmail.com', '', '', '202cb962ac59075b964b07152d234b70', '0', 1, '0000-00-00 00:00:00.000000'),
(2, 'suzi', 'julee', 'suzi', 'suzi@gmail.com', '', '', '25f9e794323b453885f5181f1b624d0b', '0', 1, '0000-00-00 00:00:00.000000'),
(3, 'Php', 'Develop', 'PhpDev', 'phpdev@gmail.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '0', 1, '0000-00-00 00:00:00.000000'),
(4, 'Andoird', 'Developer', 'Android', 'andy@gmail.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '0', 1, '0000-00-00 00:00:00.000000'),
(6, 'Samuel', 'John', 'P0078', 'jsamuel2580@gmail.com', '+2347047042918', 'Lagos', '543a3b24abce7162737560e8262380ac', '', 0, '2021-08-21 23:08:30.000000'),
(7, 'Samuel', 'John', 'admin', 'jsamuel@gmail.com', '+2347047042918', 'Lagos', 'f925916e2754e5e03f75dd58a5733251', '', 0, '2021-09-18 20:09:26.000000'),
(8, 'John', 'Doe', 'john@abc.com', 'john@abc.com', '', '', 'e10adc3949ba59abbe56e057f20f883e', '', 0, '2021-09-18 20:09:58.000000');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `website` varchar(220) NOT NULL,
  `date_created` timestamp NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `image`, `description`, `website`, `date_created`, `date_updated`) VALUES
(1, 'World Stroke Organization', 'stroke.png', 'The World Stroke Organization is the only global body solely focused on stroke. With around 3000 individual and 90 society members spanning every global region, we represent over 55,000 stroke specialists in clinical, research and community settings.', 'https://www.world-stroke.org/', '2021-04-27 14:50:57', NULL),
(2, 'European Stroke Organization', 'eso.png', 'The ESO is an NGO comprised of individual and organisational members. The aim of the ESO is to reduce the burden of stroke by changing the way that stroke is viewed and treated. This can only be achieved by professional and public education, and by making institutional changes. ESO serves as the voice of stroke in Europe, harmonising stroke management across the whole of Europe and taking action to reduce the burden of stroke regionally and globally.', 'https://www.eso-stroke.org/', '2021-04-27 14:50:57', NULL),
(4, 'WORLD HYPERTENSION LEAGUE', '', 'The World Hypertension League and partner organizations developed the â€˜Sao Paulo Call to Action for the Prevention and Control of High Blood Pressure: 2019â€™ to help align health and scientific organizations and hypertension experts with global best practices for hypertension control', 'https://www.whleague.org/', '2021-08-28 13:02:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `admin_user`, `admin_pass`, `admin_email`, `admin_status`, `date_created`, `date_updated`) VALUES
(0, 'admin1', 'f925916e2754e5e03f75dd58a5733251', 'vocettt@gmail.com', 1, '2021-09-18 19:36:36', '0000-00-00 00:00:00'),
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@aso.com', 1, '2020-03-27 17:51:00', '2021-04-20 07:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `item` varchar(150) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `item`, `CategoryName`, `Description`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(0, 'journals', 'Research', 'This is for research items', '2021-08-28 09:37:23', NULL, 1),
(8, 'resources', 'Research', 'the systematic investigation into and study of materials and sources in order to establish facts and reach new conclusions.', '2021-04-12 20:45:23', NULL, 1),
(9, '', 'Preventions', 'The action of stopping something from happening or arising.\r\n', '2021-04-30 08:28:35', '2021-04-30 07:04:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int(11) NOT NULL,
  `postId` char(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpages`
--

INSERT INTO `tblpages` (`id`, `PageName`, `PageTitle`, `Description`, `PostingDate`, `UpdationDate`) VALUES
(1, 'aboutus', '', '', '2018-06-30 18:01:03', '2021-08-28 11:02:21'),
(2, 'contactus', 'Contact Details', 'Neuroscience and Ageing Research Unit, Institute for Advance Medical Research and Training, College of Medicine, University of Ibadan, University College Hospital, Campus, Queen Elizabeth Road, PMB 5017, Ibadan, Nigeria.\r\n', '2018-06-30 18:01:36', '2021-04-17 05:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `SubCategoryId` int(11) DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `CategoryId`, `SubCategoryId`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(13, 'Africa Stroke Organization', 8, 10, 'Africa is the worldâ€™s most genetically diverse, second largest, and second most populous continent, with over one billion people distributed across 54 countries. With a 23% lifetime risk of stroke, Africa has some of the highest rates of stroke worldwide and many occur in the prime of life with huge economic losses and grave implications for the individual, family, and the society in terms of mental capital, productivity, and socioeconomic progress. Tackling the escalating burden of stroke in Africa requires prioritized, multipronged, and inter-sectoral strategies tailored to the unique African epidemiological, cultural, socioeconomic, and lifestyle landscape. The African Stroke Organization (ASO) is a new pan-African coalition that brings together stroke researchers, clinicians, and other health-care professionals with participation of national and regional stroke societies and stroke support organizations. With a vision to reduce the rapidly increasing burden of stroke in Africa, the ASO has a four-pronged focus on (1) research, (2) capacity building, (3) development of stroke services, and (4) collaboration with all stakeholders. This will be delivered through advocacy, awareness, and empowerment initiatives to bring about people-focused changes in policy, clinical practice, and public education. In the spirit of the African philosophy of Ubuntu â€˜â€˜I am because we are,â€™â€™ the ASO will harness the power of diversity, inclusiveness, togetherness, and team work to build a strong, enduring, and impactful platform for tackling stroke in Africa.', '2021-04-12 20:57:34', '2021-04-20 11:43:26', 1, 'Africa-Stroke-Organization', '135007e7085979a7d5b41ce54c0e54d7.jpg'),
(14, 'Historical development', 8, 10, 'There have been previous pockets of efforts in the last two decades to create regional stroke platforms in Africa. In 2004, the Franco-African League against Stroke was established among francophone African countries and has since run regular programs of advocacy and stroke education including an annual stroke meeting. In September 2010, participants at the first East African Neuroscience Conference in Nairobi, Kenya also discussed the need and possibility of creating an African Stroke Society. The origin of the African Stroke Organization (ASO), the first pan-African stroke initiative, dates back to 5 October 2016 when the concept document for its establishment was first developed and forwarded to the leadership of the World Stroke Organization (WSO) and other leaders in the stroke community. The idea was extremely well received and supported. Together with other leaders, efforts have subsequently been made to secure funding support to convene a strategic leadersâ€™ synergium 15 and the first African stroke conference16 in a bid to bring together diverse individuals and groups for real engagement that will change the stroke narrative in Africa. The ASO aspires to be an effective and true pan- African society of stroke researchers, clinicians, other health-care professionals, and stroke survivors with support from national and regional stroke societies and SSOs with passion for, and commitment to, stroke care, research, education, and advocacy. The primary goal is to reduce the escalating burden of stroke and its short- and long-term consequences on the people of Africa. The ASO will further anchor activities of the global Stroke Control Observatory and burden Reduction Ecosystem for Africa as part of the WSO-Lancet Neurology Commission on stroke in low- and middle-income countries.17 The concept of the vision, mission, and core programs is set out in Figure 1. However, further consultation on these elements will be sought in the operational planning stage from a wider range of stakeholders from across Africa and involving disciplines related to cerebrovascular diseases.', '2021-04-20 11:29:15', NULL, 1, 'Historical-development', '0c34be09831e0a4456d6dba1d36cf249jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `item` varchar(150) NOT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Is_Active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `CategoryId`, `item`, `Subcategory`, `SubCatDescription`, `PostingDate`, `UpdationDate`, `Is_Active`) VALUES
(3, 5, '', 'Bollywood ', 'Bollywood masala', '2018-06-22 15:45:38', '0000-00-00 00:00:00', 1),
(4, 3, '', 'Cricket', 'Cricket\r\n\r\n', '2018-06-30 09:00:43', '0000-00-00 00:00:00', 1),
(5, 3, '', 'Football', 'Football', '2018-06-30 09:00:58', '0000-00-00 00:00:00', 1),
(6, 5, '', 'Television', 'TeleVision', '2018-06-30 18:59:22', '0000-00-00 00:00:00', 1),
(7, 6, '', 'National', 'National', '2018-06-30 19:04:29', '0000-00-00 00:00:00', 1),
(8, 6, '', 'International', 'International', '2018-06-30 19:04:43', '0000-00-00 00:00:00', 1),
(9, 7, '', 'India', 'India', '2018-06-30 19:08:42', '0000-00-00 00:00:00', 1),
(10, 8, '', 'Stroke Prevention', 'Stroke prevention involves steps that are taken to ensure healthy adults stay healthy. Thank you.', '2021-04-12 20:47:13', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` text NOT NULL,
  `validation_code` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `username`, `email`, `password`, `validation_code`, `status`) VALUES
(5, 'Samuel', 'John', 'jayes', 'jsamuel2580@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0b6d6b62eecd455346fbf3b084b9d000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
