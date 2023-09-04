-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-07-31 02:28:19
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- データベース: `donuts`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_type` varchar(100) NOT NULL,
  `card_no` varchar(22) NOT NULL,
  `card_month` int(11) NOT NULL,
  `card_year` int(11) NOT NULL,
  `card_security` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `kana` varchar(100) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `customer`
--

INSERT INTO `customer` (`id`, `name`, `kana`, `post_code`, `address`, `mail`, `password`) VALUES
(1, '栗田　みよ', 'クリタ　ミヨ', '270-0170', '流山市加3', 'miyo000@mail.com', 'Az11111111'),
(2, '熊木 和夫', 'クマキ カズオ', '111-1111', '東京都新宿区西新宿2 -8 -1', 'kumaki@mail.com', 'Kumaki281'),
(3, '石田　明人', 'イシダ　アキト', '222-2222', '東京都新宿区西新宿１-3-6', 'akito@mail.com', 'Akito0111'),
(4, '石田　憲明', 'イシダ　ノリアキ', '111-2222', '東京都新宿区西新宿3-5-6', 'noriaki@mail.com', 'Nori1111111');

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'CCドーナツ 当店オリジナル（5個入り）', 1500, '当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。 一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。', 'common/images/sp_img/sp_cc_donuts.jpg'),
(2, 'チョコレートデライト（5個入り）', 1600, '', 'common/images/sp_img/sp_chocolatedaylight.jpg'),
(3, 'キャラメルクリーム（5個入り）', 1600, '', 'common/images/sp_img/sp_caramelcream.jpg'),
(4, 'プレーンクラシック（5個入り）', 1500, '', 'common/images/sp_img/sp_planeclassic.jpg'),
(5, '【 新作 】サマーシトラス（5個入り）', 1600, '', 'common/images/sp_img/sp_summercitrus.jpg'),
(6, 'ストロベリークラッ シュ（5個入り）', 1800, '', 'common/images/sp_img/sp_Strawberry Crush.jpg'),
(7, 'フルーツドーナツセット（12個入り）', 3500, '新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットに 、季節の最高のフルーツを厳選し、 ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。', 'common/images/sp_img/12_fruit_donuts.jpg'),
(8, 'フルーツドーナツセット（14個入り）', 4000, '', 'common/images/sp_img/14_fruit_donuts.jpg'),
(9, 'ベストセレクションボックス（4個入り）', 1200, '', 'common/images/sp_img/sp_bestcollectionBox.jpg'),
(10, 'チョコクラッシュボックス（7個入り）', 2400, '', 'common/images/sp_img/sp_chocolateCrushBox.jpg'),
(11, 'クリームボックス（4個入り）', 1400, '', 'common/images/sp_img/sp_creamBox4.jpg'),
(12, 'クリームボックス（9個入り）', 2800, '', 'common/images/sp_img/sp_creamBox9.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `purchase_deta`
--

CREATE TABLE `purchase_deta` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `ranking`
--

CREATE TABLE `ranking` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- テーブルのデータのダンプ `ranking`
--

INSERT INTO `ranking` (`id`, `name`, `price`, `image`) VALUES
(1, 'CCドーナツ 当店オリジナル（5個入り）', 1500, 'common/images/sp_img/sp_cc_donuts.jpg'),
(2, 'フルーツドーナツセット（12個入り）', 3500, 'common/images/sp_img/12_fruit_donuts.jpg'),
(3, 'フルーツドーナツセット（14個入り）', 4000, 'common/images/sp_img/14_fruit_donuts.jpg'),
(4, 'チョコレートデライト（5個入り）', 1600, 'common/images/sp_img/sp_chocolatedaylight.jpg'),
(5, 'ベストセレクションボックス（4個入り）', 1200, 'common/images/sp_img/sp_bestcollectionBox.jpg'),
(6, 'ストロベリークラッ シュ（5個入り）', 1800, 'common/images/sp_img/sp_Strawberry Crush.jpg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- テーブルのインデックス `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- テーブルのインデックス `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `purchase_deta`
--
ALTER TABLE `purchase_deta`
  ADD PRIMARY KEY (`purchase_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- テーブルのインデックス `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- テーブルの AUTO_INCREMENT `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
