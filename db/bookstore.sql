-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2014 at 07:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_ID` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL,
  `author` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cover` tinyint(1) NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publishing_house` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `publish_date` date NOT NULL,
  `number_page` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `sale_off` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  PRIMARY KEY (`book_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=97 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_ID`, `title`, `image`, `author`, `price`, `cover`, `company`, `publishing_house`, `publish_date`, `number_page`, `description`, `sale_off`, `store`) VALUES
(1, 'Nuôi Dưỡng Trẻ ABC', 'nuoi-duong-tre-abc.jpg', 'Lưu Tiểu Anh', 45, 0, 'Minh Long', 'NXB Văn Hóa Thông Tin', '2014-11-01', 175, 'Mặc dù Y học ngày càng phát triển, các tri thức khoa học về nuôi dưỡng trẻ được truyền bá rộng rãi, nhưng vẫn còn nhiều ông bố bà mẹ trẻ tồn tại những nhận thức sai lầm về việc nuôi dưỡng con cái. Có nhiều gia đình đang bị thiếu hụt kiến thức (thậm chí hoàn toàn không biết gì) về việc nuôi dưỡng trẻ. Họ hoặc không nuôi dưỡng đúng cách mà dẫn tới trẻ mắc bệnh; hoặc bắt chước theo những thói quen thủ cựu của số đông người về cách nuôi con, hoặc muốn theo ý kiến chủ quan của chính mình, không quan tâm đến tình hình cụ thể và đặc điểm sinh lí ở trẻ. Nhiều bậc cha mẹ không nhận biết được các vấn đề tồn tại torng việc nuôi dưỡng của mình, hao85c lại chăm chút quá mức dẫn đến hậu quả trẻ chậm lớn, dinh dưỡng không tốt, thậm chí mắc bệnh.\r\n\r\nCuốn sách dành tặng cho những bậc phụ huynh mong muốn tìm tòi những tri thức nuôi dưỡng con một cách khoa học, để bé yêu được phát triển khỏe mạnh.', 20, 20),
(2, 'Một Câu Chọi Vạn Câu', 'mot-choi-van-cau.jpg', 'Lưu Chấn Văn', 149, 1, 'Alphabooks', 'NXB Lao Động', '2014-12-01', 593, 'Lưu Chấn Vân đã phải ấp ủ, thai nghén ba năm mới cho ra đời tiểu thuyết này. Đây cũng là tác phẩm chín nhất, hay nhất của ông từ trước đến nay. Phong cách kể chuyện của tác giả giống với nhật ký dã sử thời Minh, Thanh. Câu chữ chắt lọc, tình tiết rõ ràng, giọng kể mạch lạc, văn phong có dáng dấp như những bậc tiền bối lớn như: Uông Tăng Kỳ, Tôn Lê... Chỉ với ngôn ngữ như vậy, tác giả mới có thể đối ứng và thể hiện được nội hàm tác phẩm: nền văn hóa phương Tây đối thoại với Thánh Thần và nền sinh thái của nhân loại. Để thoát khỏi sự cô độc và mệt mỏi, những nhân vật trong tác phẩm đã cố gắng tạo ra thanh âm và niềm vui riêng. Đọc cuốn tiểu thuyết, chúng ta cảm nhận được sự bền bỉ và ngoan cường của sự sống.\r\n\r\nNhận định\r\n\r\n"Rũ bỏ vẻ hào nhoáng bên ngoài quay về với bản chất mộc mạc bên trong. Ngòi bút tác giả luôn theo sát mảnh đất khổ nạn cùng những con người phận cái rơm cây cỏ thuộc tầng lớp đáy xã hội. Kết cấu chuyện đơn giản mà phong phú, hồi hộp căng thẳng mà xúc động lòng người. Nhân vật chính thường rơi vào bước đường cùng, nhưng vẫn dũng cảm tiến về phía trước. Đây là cuốn tiểu thuyết chính nhất, hay nhất của Lưu chấn Vân kể từ trước tời nay."\r\n\r\n(Nhà phê bình nổi tiếng Ma La)\r\n\r\n"Cuốn tiểu thuyết dùng hai câu chuyện ở các thời khác nhau và số phận những con người bình thường có quan hệ máu mủ ở các thời khác nhau để nói về hai chủ đề lớn của đời người. Đó là “Ra Đi” và “Quay Về”…\r\n\r\n(Nhà phê bình nổi tiếng Trương Di Vũ)\r\n\r\n"Tác phẩm này của Lưu Chấn Vân vừa là một lời giải thích cá nhân hóa, vừa là một mẫu mực điển hình hóa cho câu hỏi “Vì sao tiểu thuyết lại được coi là nghệ thuật ngôn ngữ.”\r\n\r\n(Nhà phê bình văn học nổi tiếng Bạch Diệp)', 30, 50),
(3, 'Phần hồn', 'phan-hon.jpg', 'Nguyễn Mạnh Tuấn', 100, 0, 'NXB Văn Hóa - Văn Nghệ', 'NXB Văn Hóa - Văn Nghệ', '2014-11-15', 387, 'Vì quá hiểu biết, lại tình cờ biết cả những điều tối kỵ của luật đời, Út Nhân, đứa con út trong nhà, bị cả xã hội "trại bò" là chính gia đình hắn, coi hắn là "thằng khùng", với những đối xử khinh miệt, ruồng rẫy, tàn bạo, nhằm vô hiệu hóa hiểu biết của hắn. Để an thân và thích nghi, hắn phải khùng thật. Thân thiết với hắn quanh năm chỉ có lũ chó, lũ bò sữa trong trại mà hắn hòa đồng. Đời hắn sẽ mãi mãi như đời sống loài vật, nếu định mệnh không đưa hắn bất ngờ gặp Sương, nạn nhân của một vụ cưỡng bức tại khu đổ rác gần trại bò. Sương là người duy nhất hiểu rồi yêu hắn, đánh thức phần người trong hắn, để hắn cũng yêu lại nàng.\r\n\r\nTình yêu của họ rất quyết liệt nhưng cũng đầy bi kịch và đẫm nước mắt, vì nàng là gái điếm... Phần hồn, tiểu thuyết của nhà văn Nguyễn Mạnh Tuấn viết các đây 20 năm vẫn còn nguyên giá trị nhân văn và đặc biệt vẫn cuốn hút người đọc.', 30, 13),
(4, 'Năm Phút Với Ga Xép', 'nam-phut-voi-ga-xep.jpg', 'Việt Linh', 92, 0, 'NXB Trẻ', 'NXB Trẻ', '2014-12-01', 359, '"Trong cuốn sách này, đạo diễn Việt Linh chia sẻ những câu chuyện xúc động về cuộc sống, và về chính con người, trong những tình huống ít gặp hay thường gặp…. Ở “ga xép”, chị viết mà như mở trái tim, nhặt ra một bông hoa đẹp, vài chiếc lá bị sâu mục cần gỡ bỏ để cành thêm xanh, rồi mời những người thân chưa từng gặp mặt cùng thưởng lãm để thấy thêm yêu đời, yêu mình."\r\n\r\n(Nhà báo Vũ Thủy)\r\n\r\nNhìn từ con mắt một công dân có trách nhiệm, nhưng viết ra bằng “trái tim của một người phụ nữ từng trải”, những dòng chữ của chị giống như lời nhắc nhở nhỏ nhẹ, có khi mang tiếng vang to như tiếng chuông báo động, hối thúc sự chú ý, hay khẩn thiết thay đổi. Như nhận xét của nhà báo Lê Hồng Lâm, bạn đọc “tìm đến cái ga xép của chị để lắng nghe những câu chuyện đời, được chắt lọc bởi một người phụ nữ đã trải qua nhiều biến cố, mà vẫn rưng rưng rung cảm với tha nhân, với cuộc đời; mà vẫn gần gũi, đồng cảm với những người phụ nữ thế hệ con, cháu của chị. Năm phút với cái ga xép đó, vì vậy đôi khi để lại cái dư âm thật lâu, thật dài.”\r\n\r\nNhững bài tạp bút của đạo diễn điện ảnh  Việt Linh đã được in trên Tuổi Trẻ, Tuổi Trẻ Cuối Tuần, Doanh nhân Sài Gòn, Thời báo Kinh tế Sài Gòn, Kiến trúc Nhà đẹp… nhưng phần lớn là in trên tạp chí Đẹp, tên cuốn sách lấy theo tên chuyên mục của tạp chí: Năm phút với ga xép.', 20, 45),
(5, 'Ở Đây Có Nắng', 'o-day-co-nang.jpg', 'Việt Linh', 120, 0, 'NXB Trẻ', 'NXB Trẻ', '2014-12-09', 413, 'Với Ở đây có nắng, đạo diễn điện ảnh Việt Linh muốn kể chuyện “theo cách thức montage điện ảnh”, làm “một bộ phim truyền hình nhiều tập trên giấy”, “làm phim qua chữ”.\r\n\r\nNhững phân cảnh như những câu chuyện nhỏ, được gắn kết lại thành một câu chuyện dài, kể cho bạn nghe nhiều uẩn khúc cuộc đời. Bắt đầu bằng chuyến trở về Việt Nam của Phan Sinh khi anh được biết mình là con nuôi trong một gia đình Việt kiều Pháp. Mở dần ra theo chuyến đi nhiều bí mật bấy lâu bị che giấu bên cạnh những chuyện muôn thuở của cuộc sống: Hội ngộ rồi chia ly tình yêu và hận thù, tài năng cùng người hâm mộ, rồi nỗi buồn, niềm vui, hạnh phúc…', 0, 15),
(6, 'Hetty Đi Tìm Mẹ', 'hetty-di-tim-me.jpg', 'Jacqueline Wilson', 76, 0, 'Nhã Nam', 'NXB Hội Nhà Văn', '2014-12-04', 347, 'KHÔNG PHẢI ĐỨA TRẺ NÀO CŨNG XINH XẮN,DỄ THƯƠNG VÀ BIẾT ĂN NÓI LỄ PHÉP\r\n\r\nNHƯNG ĐỨA TRẺ NÀO CŨNG CẦN MẸ\r\n\r\nHetty là một cô nhi. Đằng sau gương mặt cau có, tính cách ương ngạnh và nổi loạn như chính mái tóc đỏ, không ai biết rằng, cô bé yếu mềm, dễ tổn thương và yêu mẹ như bất kỳ đứa bé nào, bất chấp việc bị bỏ rơi từ khi lọt lòng. Từ hồi còn là đứa trẻ hồn nhiên hạnh phúc, cho đến khi những giấc mơ ấu thời tan biến, không còn bạn bè, thân thích nào ở bên, Hetty chưa bao giờ trách mẹ. Nỗi khao khát mãi lớn dần cho đến một ngày kia, cô bé bỏ trốn khỏi cô nhi viện, bắt đầu hành trình nhọc nhắn tìm kiếm người mẹ đó...Và trong một câu chuyện hồi hộp, cảm động và hoàn toàn lôi cuốn, Hetty đã trở thành nữ anh hùng nổi tiếng nhất của thế giới truyện thiếu nhi của Jacqueline Wilson. Tác phẩm đã được dựng thành phim truyền hình và đưa lên sân khấu kịch.', 20, 35),
(7, 'Chuyện Tào Lao Của Vàng Vàng (Tập 2)', 'chuyen-tao-lao-cua-vang-vang-tap-2.jpg', 'Phan Kim Thanh', 60, 0, 'Lantabra', 'NXB Văn Hóa Thông Tin', '2014-12-29', 112, 'Vào tháng 7 vừa qua, chắc hẳn các bạn độc giả yêu thích truyện tranh từ trẻ em đến người lớn không ai là không biết đến cơn sốt Vàng Vàng trong Chuyện Tào Lao của Vàng Vàng (Tập 1). Nhân vật Vàng Vàng với ngoại hình ngu ngơ, ngơ ngác đã khiến bao bạn trẻ phát cuồng.\r\n\r\nĐược sự đón nhận cuồng nhiệt từ các độc giả, tác giả  Phan Kim Thanh đã tiếp tục cho ra lò  Chuyện tào lao của Vàng Vàng (Tập 2). Trong tập 2 này, Chuyện tào lao của Vàng Vàng vẫn sẽ là những câu chuyện vừa “hài hước, dí dỏm” vừa “châm biếm, sâu cay”, còn độ dễ thương của các “ẻm” thì khỏi phải bàn.\r\n\r\nTất cả được thể hiện qua những câu chuyện, lời thoại ngộ nghĩnh, dễ hiểu của Vàng Vàng (nhân vật chính với ngoại hình nhí nhảnh nhưng hay bị bắt nạt) với những người bạn có tên gọi dễ thương đến từ nhiều quốc gia khác như Robot (Nhật Bản), Xanh Xanh (Philipines), Misha (Nga), Sâm Nơ (Hàn Quốc)...\r\n\r\nTên thường gọi: Vàng Vàng\r\n\r\nQuốc gia: Việt Nam\r\n\r\nMàu đại diện: Vàng\r\n\r\nTrang phục: áo dài màu vàng vải sần, áo đỏ - quần trắng - giày tây đen\r\n\r\nGây tiếng vang do luôn trong tình trạng không chỉn chu và ngơ ngác vì không biết mình đang ở đâu và phải làm gì… cho đến khi bị mắng, bị rượt đuổi\r\n\r\nSở trường: nghịch dại\r\n\r\nTính cách\r\n\r\nXét về tính cách, em giống như một đứa trẻ con ngây thơ dễ dụ, hay khóc và dễ tự kỉ. Cứ điển hình như vụ em bị con gấu nó chơi, làm em mở cả cái trang trại sâu lông, cuối cùng chỉ mua có một con làm em phải điêu đứng mất một thời gian dài. Để kỉ niệm vụ đó em đã giữ lại một bé sâu để làm pet riêng. Không biết có phải nuôi mát tay quá hay không mà nghe đâu có cả khối người nhập viện vì chảy máu mũi, khi thấy bé sâu lông mập mạp trắng trẻo và cute vô đối của em. Đôi lúc Vàng Vàng cũng tỏ ra sành đời và nguy hiểmVề ngoại hình:  Em mang một một vẻ ngoài Shota, màu vàng chói lóa cùng với khuôn mặt dễ thương, khiến cho “Hội những người phát cuồng vì shota” do con Gấu lập ra một thời điêu đứng. Một cái mặt mũm mĩm, một cái mông hồng hồng. Có một vài “Pics” em còn quàng thêm một cái cặp, dẫn theo một em “Pet” sâu lông, đúng chuẩn !!!\r\n\r\nDạng comic của em đã đủ làm người ta điên đảo lắm rồi, nhưng khi trở về nguyên dạng em càng khiến bao con tim chết lặng. Vẫn màu vàng chói lóa ấy, vẫn khuôn mặt ngơ ngơ ấy nhưng kết hợp thêm áo dài Việt Nam truyền thống với những đường cong quyến rũ lại càng làm em trông “xì tai” hơn rất nhiều.\r\n\r\nCác mối quan hệ của Vàng Vàng\r\n\r\nNhà Vàng Vàng tuy không lớn nhưng được cái nằm ngay mặt tiền nên hàng xóm của em khá nhiều. Lâu đời nhất phải kể tới họ nhà Gấu. Con Gấu Panda thì khỏi nói, nguyên cái hoàng cung của nó sát vách nhà em, thường hay có “ý đồ”với cái nhà của em thì ai cũng biết. Còn lại là anh gấu Misha. Vàng Vàng gọi Misha là thầy, tuy là không sát vách nhưng đã giúp đỡ em rất nhiều khi em khó khăn.\r\n\r\n• Anh Liberty: Trước kia từng có “ý định” đen tối với Vàng Vàng nhưng không thành.\r\n\r\n• Xanh Xanh: Là bạn tắm chung hồ bơi, hay bị con Gấu ăn hiếp\r\n\r\n• Robot và Sâm Nơ: bạn, hợp tác làm ăn\r\n\r\n• Sâm không nơ: Trước kia cùng chung chí hướng với Vàng Vàng, nhưng dạo này không thân cho lắm.\r\n\r\nCùng trải nghiệm những mẩu chuyện “tào lao” mà lại không hề tào lao về Vàng Vàng cùng những người bạn từ khắp mọi nơi trên thế giới: Panda “nguy hiểm”, Liberty “bầu trời tư cách”, Robot “so serious”…  qua những hình vẽ nhí nhảnh, sinh động và đáng yêu của tác giả trẻ Phan Kim Thanh (Alzheimer13), cho thấy góc nhìn và nhận định của những người trẻ tuổi, năng động, giàu sức sáng tạo trước những sự kiện diễn ra trong cuộc sống thường ngày.\r\n\r\nXin lưu ý: Đây là một tác phẩm hư cấu, thể hiện quan điểm và góc nhìn của tác giả.', 25, 41),
(8, '270 Đề Và Bài Văn Mẫu Lớp 6', '270-de-va-bai-van-mau_6.jpg', 'Nhiều Tác Giả', 35, 0, 'Nhà Sách Sao Mai', 'NXB Đại Học Quốc Gia Hà Nội', '2009-08-04', 176, '', 43, 100),
(9, '300 Kiến Thức Cần Thiết Để Phát Triển Trí Lực Cho Trẻ', '300-kien-thuc-can-thiet-de-phat-trien-tri-luc-cho-tre.jpg', 'Shichida', 79, 0, 'ALphabooks', 'NXB Dân Trí', '2013-08-01', 200, 'Cha mẹ nào cũng mong muốn con mình phát triển tốt về mọi mặt. Và mong muốn sau này con mình sẽ là người có trí lớn và có địa vị xã hội. Hầu như cha mẹ nào cũng yêu thương con cái nhưng không phải cha mẹ nào cũng có phương pháp nuôi dạy con thích hợp.\r\n\r\nCuốn sách 300 kiến thức cần có để phát triển trí lực cho trẻ cung cấp cho những bậc làm cha làm mẹ những kiến thức hữu ích nhất và những phương pháp giáo dục tối ưu nhất để cha mẹ có thể nuôi dạy con mình khoa học và giúp con trẻ trưởng thành về mọi mặt. Cuốn sách là những đúc kết kinh nghiệm nuôi dạy con cái của chính tác giả cũng như là phương pháp phát triển trí lực rất thành công mà các bà mẹ Nhật Bản áp dụng trong quá trình nuôi dạy con trẻ.\r\n\r\nCuốn sách phù hợp cho mọi bậc cha mẹ, người có nhu cầu áp dụng những phương pháp nuôi con tân tiến nhất và hiện đại nhất vào giáo dục con cái trong gia đình. Cuốn sách cũng tổng hợp tất cả các bí quyết, các phương pháp nuôi dạy trẻ ở nhiều lứa tuổi khác nhau và những đứa trẻ với thể trạng cũng như tính cách khác nhau. Cuốn sách này sẽ giúp cha mẹ phát huy tốt những tố chất cho con trong quá trình hình thành nhân cách và tâm hồn.', 24, 48),
(10, 'Việt Nam Danh Tác - Điêu Tàn', 'dieu-tan.jpg', 'Chế Lan Viên', 42, 0, 'Nhã Nam', 'NXB Hội Nhà Văn', '2014-12-11', 55, '"Và ngày nay, đọc Điêu tàn, chúng ta cảm ơn rất nhiều nhà thơ Chế Lan Viên, nhưng ở một bình diện khác, tôi còn muốn cảm ơn thế giới nghệ thuật còn lại của Chăm-pa: Chính thế giới này không chỉ là chất liệu cho cảm hứng thi ca một thời mà nó còn là toàn bộ thần thái buồn bã ảo nảo và đau đớn cùng cực của Điêu tàn của Chế Lan Viên nói riêng và của trường thơ Loạn Bình Định nói chung. Chính nó đã làm nên khí chất, sắc thơ và tình điệu thẩm mỹ cho trường phái thơ nổi tiếng này, và cũng từ đấy ghi lại một dấu son khó phai trong lịch sử thi ca Việt Nam hiện đại."', 19, 15),
(11, 'Cô Gái Trong Nắng', 'co-gai-trong-nang.jpg', ' Koshigaya Osamu', 68, 0, 'Nhã Nam', 'NXB Lao Động', '2014-12-16', 261, 'Nếu bạn gặp lại người bạn khác giới mình từng thương thầm trộm nhớ hồi cấp II? Nếu người đó giờ lớn lên bỗng xinh đẹp muôn phần? Và nếu người đó lại hâm mộ bạn? Chắc chắn khi đó bạn không thể không nghĩ đó là người tình định mệnh.\r\n\r\nNhưng...Kết hôn với người trong mộng, chưa bao giờ là đủ để khép lại một câu chuyện. Với  Cô gái trong nắng, người đọc sẽ được dẫn dắt theo đủ mọi cung bậc cảm xúc. Từ thú vị, hào hứng dõi theo tình yêu của Mao và Kousuke, đến hồi hộp, tò mò về bí mật mà Mao che giấu, thấp thỏm đón nhận kết-cục-tưởng-chừng-xấu-nhất, cho đến hân hoan trước sáng tỏ cuối cùng. Vì sau tất cả, câu chuyện này vẫn trong sáng như một giọt nắng mai.', 21, 9),
(12, 'Phố Của Những Cửa Hiêu U Tối', 'pho-cua-nhung-cua-hieu-u-toi.jpg', 'Patrick Modiano', 68, 0, 'Nhã Nam', 'NXB Văn Học', '2014-12-10', 254, 'Sự xuất hiện của Patrick Modiano vào cuối thập kỷ 60 được coi như một hiện tượng vǎn học Pháp đương đại. Tác phẩm  Phố những cửa hiệu u tối, đạt giải thưởng Goncourt, giải vǎn học quan trọng nhất của Pháp,là nỗi khắc khoải triền miên về nguy cơ đánh mất danh tính và bản cách.\r\n\r\nĐiều gì đã thúc đẩy anh chàng Guy Roland, nhân viên của một hãng thám tử tư, lao theo dấu vết của một người không quen biết đã mất tích từ lâu? Đó là nhu cầu da diết tìm lại được mình sau bao đời của con người vốn xưa kia có thể là anh ta, kiên nhẫn lần mò về những nơi có thể đã từng chứng kiến cuộc tình của anh ta với một người đàn bà giờ đây đã biệt tǎm, cố bấu vào những bóng mờ của những nhân chứng duy nhất từng tham dự vào thời thanh xuân của gã môi giới hàng mang hộ chiếu đáng ngờ dưới cái tên Patro Mc Evoy, mà, cuối cùng, anh ta tin rằng chính là mình.\r\n\r\nVới Phố những cửa hiệu u tối, Modiano đã khẳng định vị trí đặc biệt của mình trong vǎn học Pháp nửa sau thế kỷ 20.', 21, 140),
(13, 'Hoàng Kim Bản Harachi', 'hoang-kim-ban.jpg', 'Ernst Muldashev', 109, 0, 'Alphabooks', 'NXB Thế ', '2014-11-25', 404, 'Được viết sau chuyến đi Tây Tạng, Hoàng kim bản Harachi của Muldashev tiết lộ về những phiến đá cổ với những thông tin được đại diện nền văn minh trước đây còn sống sót sau Đại hồng thủy chạm khắc nên. Đó là những kiến thức cực kỳ cao siêu về tín ngưỡng cũng như về các quy luật của vũ trụ, khoa học… của một nền văn minh đã phát triển đến trình độ rất cao. Những kiến thức về khoa học chứa đựng trong những tấm bảng này cao siêu đến nỗi, mầm mống của chúng mới chỉ le lói xuất hiện trong một vài ngành khoa học đương đại. Quá trình diệt vong các nền văn minh trước bởi Đại hồng thủy cũng được phản ánh rõ nét trên những phiến đá này…', 27, 100),
(14, '10 Câu Chuyện Ma Hay Nhất Mọi Thời Đại', '10-chuyen-ma-hay-nhat-moi-thoi-dai.jpg', 'Michael Cox', 77, 0, 'NXB Trẻ', 'NXB Trẻ', '2013-08-16', 216, '10 Câu Chuyện Ma Hay Nhất Mọi Thời Đại được trình bày dưới nhiều hình thức khác nhau. Sau mỗi câu chuyện lại có những dữ liệu kỳ thú liên quan đến chủ đề.\r\n\r\nTrong mười truyện ma hay nhất mọi thời đại này có vài truyện khá là hài hước, vài truyện khá buồn và chỉ có một số ít là thực sự rùng rợn. Vì vậy, để giúp bạn đối phó với cảm giác thót tim do hoảng loạn hay quá sợ (cảm giác đó từ đây sẽ viếng thăm bạn thường xuyên), mỗi truyện sẽ đi kèm với một phần nói về các sự kiện cần biết.', 25, 50),
(15, 'The Day The Crayon Quit', 'the-day-the-crayons-quit.jpg', 'Drew Daywalt', 577, 0, 'Amazon', 'Philomel', '2013-09-08', 40, 'Crayons have feelings, too, in this funny back-to-school story illustrated by the creator of Stuck and This Moose Belongs to Me.', 0, 5),
(18, 'Sách Dạy Đọc Nhanh (Tái Bản 2014)', 'sach-day-doc-nhanh.jpg', 'Tony Buzan', 205, 0, 'Nhân Trí Việt', 'NXB Tổng hợp TP.HCM', '2014-11-01', 125, 'Sách Dạy Đọc nhanh sẽ giúp bạn:\r\n\r\nSuy nghĩ nhanh và sáng tạo hơn\r\n\r\nGhi chú ý tưởng của mình tốt hơnVượt qua các kỳ thi một cách dễ dàng\r\n\r\nHọc tập có hiệu quả hơn\r\n\r\nTiết kiệm được nhiều ngày, nhiều tuần, thậm chí nhiều tháng trong quỹ thời gian quý báu của bạn.\r\n\r\nTony Buzan cung cấp thông tin về đôi mắt và bộ não nhằm giúp bạn cải thiện mọi lĩnh vực liên quan đến hoạt động đọc hiểu của bạn đồng thời chứng minh một điều: có thể đọc với tốc độ trên 1000 từ mỗi phút.\r\n\r\nPhương pháp tiên tiến của tác giả trong việc tiếp cận đề tài này đã giúp kỹ thuật đọc nhanh trở nên dễ hiểu, và bạn có thể áp dụng được ngay để nâng cao tốc độ, mức độ tiếp thu và chất lượng đọc hiểu của mình.', 5, 15),
(19, 'Hồi Ký Rich Devos - Con Đường Tỷ Phú', 'con-duong-ty-phu.jpg', 'Rich DeVos', 125, 1, 'First News - Trí Việt', 'NXB Thời Đại', '2014-05-02', 525, 'Trong cuốn tự truyện này, Rich DeVos hồi tưởng lại những trải nghiệm của ông về công việc, niềm tin, gia đình và những giá trị cốt lõi mà ông luôn gìn giữ trong suốt cuộc đời. Với tư cách là nhà đồng sáng lập Amway - một trong những tập đoàn lớn nhất thế giới - ông đã dùng sự khiêm tốn, đức tin và các trải nghiệm của chính mình để viết nên một câu chuyện khơi gợi nhiều cảm hứng sống tích cực và thành công cho người đọc.\r\n\r\nLà một doanh nhân xuất chúng, một tỷ phú tự thân làm giàu, một nhà thiện nguyện, diễn giả tầm cỡ thế giới, một tác giả nổi tiếng, một trụ cột trong gia đình và cũng là một con chiên ngoan đạo - quả thật, ít người có thể biểu đạt về tinh thần tự doanh đậm chất Mỹ một cách giản dị như Rich DeVos. Từ hai bàn tay trắng, ông cùng người bạn chí cốt của mình là Jay Van Andel đã tạo nên Amway - một trong những tập đoàn lớn nhất thế giới.', 5, 25),
(20, 'Làm Thế Nào Để Tăng Lương', 'lam-the-nao-de-tang-luong.jpg', 'Napoleon Hill', 89, 0, 'Thái Hà', 'NXB Lao Động Xã Hội', '2014-02-17', 223, 'Cuốn sách được viết bởi tiến sỹ Napoleon Hill đã truyền cảm hứng cho hàng triệu người trên khắp thế giới, và những nguyên tắc mà Tiến sỹ Hill khám phá ra vẫn có giá trị ở thời điểm hiện tại giống như thời điểm diễn ra cuộc phỏng vấn đầu tiên của ông với ngài Andrew Carnegie vào năm 1908.\r\n\r\nCuốn sách này sẽ mang cho bạn những lợi ích tuyệt vời từ những cuộc phỏng vấn của tiến sỹ Hill với nhà tư bản vĩ đại Andrew Carnegie, người đã sống ở Scotland trước khi đến Mỹ và bắt đầu công việc với mức lương 1,2 đô la mỗi tuần vào năm mười ba tuổi. Công thức thành công được viết trong cuốn sách Làm thế nào để được tăng lương sẽ chứng minh rằng “Bạn sẽ ĐẠT ĐƯỢC bất cứ điều gì mà tâm trí bạn KHAO KHÁT và TIN TƯỞNG.”', 10, 126),
(21, 'Sách Lược Đầu Tư Của W. Buffett', 'sach-luoc-dau-tu.jpg', 'Lí Thành Tư - Hạ Dịch Ân', 995, 1, 'Minh Long', '	NXB Văn Hoá Thông Tin', '2014-01-10', 1002, 'Được xem là nhà đầu tư thành công nhất thế giới, là cổ đông lớn nhất kiêm giám đốc hãng Berkshire Hathaway, người giàu thứ hai thế giới sau Bill Gates với tài sản hơn 50 tỉ USD. Nổi tiếng do sự kiên định trong triết lý đầu tư, sự nghiệp của Warren Buffett để lại muôn vàn bài học kinh doanh quý báu…\r\n\r\nCuốn sách này tổng kết:\r\n\r\n+ Những tinh hoa trong tư tưởng của Buffett\r\n\r\n+ Chiến lược đầu tư của Buffett\r\n\r\n+ Sách lược thực hiện của Buffett\r\n\r\n+ Buffett phân tích Báo cáo tài chính\r\n\r\n+ Năm dự án đầu tư kinh điển của Buffett', 15, 50),
(22, 'Khởi Nghiệp Ngay!', 'khoi_nghiep_ngay.jpg', 'Jeremy Harbour', 365, 1, 'Văn Lang', '	NXB Văn Hoá Thông Tin', '2014-01-15', 900, 'Nếu bạn mơ ước được làm chủ một công ty lớn, hãy hiện thực hóa ước mơ ấy với việc đọc cuốn sách này. Bằng giọng văn giản dị và hài hước, Khởi nghiệp ngay! mang đến cho bạn các thông tin, nguồn cảm hứng cần thiết đế bắt đầu. Sách khuyến khích bạn bước vào bóng tối, cùng lúc chiếu soi ánh sáng để giúp bạn - một chủ doanh nghiệp mới - chinh phục mọi khó khăn.\r\n\r\nKhởi nghiệp ngay! cho thấy những kỹ năng và chiến thuật mà các ông chủ lớn đã thực hiện. Họ từng khởi nghiệp mà không cần số vốn quá lớn. Chỉ cần đam mê, can đảm và nỗ lực thực hiện ước mơ, bạn sẽ thành công như họ. Với sự thông thạo, tác giả và doanh nhân Jeremy Harbour sẽ giúp bạn tự tin đối đầu với nỗi sợ hãi, lập kế hoạch dài hạn cho sự thành công của bạn trong tương lai.', 15, 50),
(23, 'Quản Lý Rủi Ro Trong Kinh Doanh Ngoại Hối Tại Các ', 'quan-li.jpg', 'TS. Bùi Quang Tín', 205, 0, 'Thái Hà', 'NXB Lao Động Xã Hội', '2014-02-12', 221, 'Kể từ khi hệ thống Ngân hàng thương mại đi vào hoạt động đến nay, thu nhập của hầu hết các Ngân hàng là từ hoạt động động cấp tín dụng. Tuy nhiên, trong những năm gần đây, nền kinh tế của hầu hết các nước đều gặp khó khăn, các doanh nghiệp ngày càng e dè trong việc vay mượn. Từ đó, tạo ra nhiều khó khăn cho hoạt động của Ngân hàng nói chung và hoạt động cấp tín dụng nói riêng. Do đó, các Ngân hàng đang loay hoay với việc tìm kiếm thu nhập từ các kênh kinh doanh hay dịch vụ mới, như: thu phí dịch vụ, bán chéo sản phẩm, thanh toán quốc tế, kinh doanh vàng và ngoại tệ,...', 10, 10),
(24, 'The Samsung Way - Đế Chế Công Nghệ Và Phương Thức ', 'the-sam-sung-way.jpg', 'JaeYong Song - KyungMook Lee', 99, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-02', 102, 'Samsung, cái tên đang nổi danh trên toàn thế giới hiện cũng là thương hiệu vô cùng quen thuộc với người tiêu dùng Việt Nam.Từ lâu, chúng ta đã biết đến Samsung thông qua các sản phẩm ti-vi hay điện thoại kiểu cũ. Tuy nhiên, thời điểm những năm cuối của thế kỷ XX, Samsung chỉ là cái tên đứng thứ 3, thứ 4, hay cùng lắm là thứ 2 trong danh sách ưu tiên mua hàng. Với điện thoại nó không là gì so với Nokia, còn với ti vi, Panasolic hay Sony luôn là những cái tên đứng đầu. Thậm chí, câu "nét như Sony" còn trở thành khẩu ngữ thông dụng của người Việt khi muốn nói về một sản phẩm nào đó chuẩn đẹp. Nếu khi đó có ai nói rằng 20 năm sau, Samsung sẽ vượt mặt Sony, vượt mặt Nokia, vượt mặt Panasonic, để trở thành thương hiệu hàng đầu thế giới thì chắc chúng ta chỉ lắc đầu và cười chuyện viển vông.', 5, 50),
(25, 'Phương Pháp Đầu Tư Warren Buffett', 'phuong-phap-dau-tu.jpg', 'Robert G.Hagstrom', 80, 0, 'Bao Huy Bao Huy', 'NXB Kim Đồng', '2013-01-05', 125, 'Cuốn sách này sẽ :\r\n\r\nTrình bày ngắn gọn tiểu sử của Bufett,một trong những tỷ phú giàu nhất thế giới hiện nay.\r\n\r\nTiết lộ những yếu tố và sự kiện hình thành nên triết lý đầu tư của Buffett\r\n\r\nPhác họa các nguyên lý kinh doanh ,quản lý ,tài chính và giá trị hình thành nên phương pháp đầu tư Buffett\r\n\r\nPhân tích quá trình quản lý danh mục đầu tư\r\n\r\nThảo luận khái niệm tâm lý tiền bạc và cách Buffett sử dụng khái niệm này để tránh những sai lầm thông thường trong đầu tư.', 5, 15),
(26, 'Hiệu Ứng Lan Truyền', 'hieu-ung-lan-truyen.jpg', ' Jonah Berger', 95, 0, 'KaKa', 'NXB Lao Động Xã Hội', '2013-02-01', 302, 'Sử dụng sức mạnh của truyền khẩu, trực tuyến hay ngoài đời, đòi hỏi ta phải hiểu về việc tại sao mọi người nói về những điều đó và tại sao một số thứ lại được nói và chia sẻ nhiều hơn những thứ khác. Trong một buổi tiệc, bạn có thể sẽ nói về một bộ phim hay về một đồng nghiệp. Bạn có thể trao đổi các câu chuyện về việc đi du lịch, nhắc đến con của một ai đó, hoặc phàn nàn về thời tiết đột nhiên ấm bất thường.\r\n\r\nTại sao? Bạn có thể nói về bất cứ thứ gì. Có cả tỉ chủ đề, ý tưởng, sản  phẩm và câu chuyện khác nhau để bạn bàn tán. Tại sao bạn lại nói về những thứ nhất định đó? Tại sao lại là câu chuyện, bộ phim hay đồng nghiệp đó mà không phải là câu chuyện khác, bộ phim khác hay đồng  nghiệp khác? Một số câu chuyện có tính lan truyền nhiều hơn, một số tin  đồn có khả năng lây lan cao hơn. Một số nội dung trực tuyến trở nên phổ biến, trong khi một số khác không bao giờ được lan truyền. Một số sản phẩm được truyền khẩu rất nhiều, trong khi một số khác không được nhắc đến.', 5, 200),
(27, 'Cuộc Chiến SmartPhone', 'cuoc-chien-smart-phone.jpg', 'Kim Byung Wan', 55, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2014-11-01', 56, 'Năm 2007, Apple đã tái định nghĩa danh từ "smartphone" một cách đúng đắn nhất bằng việc cho trình làng có chiếc Iphoen đầu tiên, một chiếc điện thoại có tính năng siêu việt, tương tác thông minh với người dùng. Cơn cuồng phong IPhone đã đốn gục gã khổng lồ đầy tự mãn Nokia, đồng thời lại khiến kẻ theo đuổi là Samsung thức tỉnh. Cũng từ đây, một cuộc chiến smartphone đã được khơi ngòi.', 25, 100),
(28, 'Trạng Thái Mua Hàng - Khoa Học Thôi Miên Mới', 'trang-thai-mua-hang.jpg', 'Joe Vitale', 366, 0, 'Minh Long', 'NXB Lao Động Xã Hội', '2014-11-01', 566, 'Trạng Thái Mua Hàng diễn giải tất cả những trạng thái bị thôi miên hàng ngày của chúng ta và chia sẻ bí kíp cho những nhà kinh doanh và tiếp thị muốn vận dụng chúng để nâng cao doanh số. Chỉ bằng cách đưa mình vào trạng thái bị thôi miên của khách hàng, các nhà tiếp thị giỏi sẽ có thể chuyển hóa nó thành trạng thái mua hàng. Đây là chuyện thật chứ không phải khoa học giả tưởng. Mọi trạng thái của con người đều có thật và có thể bị điều khiển nếu bạn nắm bắt được những bí mật của chúng. Cuốn sách này sẽ tiết lộ những bí mật đó, cung cấp những kỹ thuật thuyết phục quyền năng nhất thế giới dành riêng cho những nhà kinh doanh và tiếp thị bản lĩnh và khao khát thành công.', 20, 55),
(29, 'Luật Tổ Chức Tòa Án Nhân Dân', 'img057_9.jpg', '    ', 55, 0, 'Minh Long', '	NXB Văn Hoá Thông Tin', '2013-01-01', 125, 'Nhằm thể chế hóa đầy đủ những chủ trương, đường lối, quan điểm của Đảng về tổ chức, hoạt động của tòa án, đáp ứng yêu cầu cải cách tư pháp, đồng thời cụ thể hóa những nguyên tắc tư pháp tiến bộ được quy định trong hiến pháp 2013, tại kỳ họp thứ 8 Quốc hội khóa 13, ngày 24/11/2014, Quốc hội đã thông qua Luật tổ chức Tòa án nhân dân số 62/2014/QH13 và Nghị Quyết 81/2014/QH13 thi hành luật Tổ Chức Tòa án nhân dân.\r\n\r\nNgày 25/11/2014 Quốc hội cũng thông qua Luật số 64/2014/QH13 sửa đổi, bổ sung một số điều của Luật Thi hành án dân sự, trong đó sửa đổi bổ sung nhiều nội dung quan trọng, liên quan đến quy định về yêu cầu thi hành án, tạm dừng việc đăng kí, chuyển quyền sở hữu, sử dụng, thay đổi hiện trạng tài sản; xác định, phân chia, xử lý tài sản chung để thi hành án; cưỡng chế thi hành án; giải quyết tranh chấp; yêu cầu hủy giấy tờ, giao dịch liên quan đến tài sản thi hành án, xử lý tài sản không có người tham gia đấu giá, bán đấu giá không thành.', 15, 2),
(30, 'Trình Tự, Thủ Tục Thanh Tra Đơn Vị Hành Chính Sự N', 'img002_12.jpg', '  ', 62, 0, 'huy', '	NXB Văn Hoá Thông Tin', '2014-11-01', 126, 'Để củng cố kỷ luật, thực hiện công tác thanh tra theo đúng trình tự, thủ tục, đạt hiệu quả cao, thời gian vừa qua Nhà nước ta đã ban hành một số văn bản pháp luật về công tác thanh tra như: Thông tư số 05/2014/TT-TTCP ngày 16-10-2014 của Thanh tra Chính phủ quy định về tổ chức, hoạt động, quan hệ công tác của đoàn thanh tra và trình tự, thủ tục tiến hành một cuộc thanh tra; Thông tư số 01/2014/TT-TTCP ngày 23-04-2014 của Thanh tra Chính phủ quy định việc xây dựng, phê duyệt định hướng chương trình thanh tra, kế hoạch thanh tra… và một số văn bản pháp luật về tổ chức, hoạt động thanh tra, kiểm tra, kiểm toán của các Bộ, Ngành; về công tác quản lý tài chính, tài sản trong các tổ chức, đơn vị hành chính sự nghiệp…', 5, 36),
(31, 'Hướng Dẫn Công Tác Thi Đua Khen Thưởng Trong Phong', 'thi_dua_khen_thuong.jpg', '  ', 35, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2013-01-01', 53, 'Hướng Dẫn Công Tác Thi Đua Khen Thưởng Trong Phong Trào Bảo Vệ An Ninh giúp cán bộ, chiến sĩ công an nhân dân, công an xã, bảo vệ dân phố, dân quân tự vệ tìm hiểu và cập nhật kịp thời những chính sách ưu đãi của Nhà nước về các hình thức, tiêu chuẩn danh hiệu, chức danh xét thi đua, khen thưởng; các chính sách về tiền lương, trợ cấp, phụ cấp công vụ, nghỉ dưỡng, công tác phí; bảo hiểm; các chính sách ưu đãi khi đang tham gia công tác tại các vùng kinh tế đặc biệt khó khăn, các vùng hải đảo xa xôi; chính sách dành cho thân nhân và gia đình quân nhân, công an nhân dân, người có công với cách mạng.', 5, 2),
(32, 'Sổ Tay Tra Cứu Những Hành Vi Vi Phạm Pháp Luật Tro', 'img004_2.jpg', '  ', 25, 0, 'huy', 'huy', '2013-01-01', 55, 'Tại Kỳ họp thứ 6 của Quốc hội Khóa XIII, Luật đất đai đã được thông qua và hiệu lực áp dụng từ tháng 7/2014. Đây là luật quan trọng, có ý nghĩa to lớn trong việc ổn định xã hội, đáp ứng yêu cầu phát triển kinh tế - xã hội, quốc phòng, an ninh, hội nhập quốc tế của đất nước; bảo đảm quản lý đất đai chặt chẽ, hiệu quả, sử dụng hợp lý, tiết kiệm, đẩy mạnh cải cách hành chính, bảo đảm công khai, minh bạch và dân chủ trong quản lý đất đai. Do đó, để tạo chuyển biến rõ rệt về quản lý và sử dụng đất, đưa công tác quản lý đất đai đi vào nề nếp, kỷ cương theo hướng hiện đại; thời gian qua Nhà nước ta đã ban hành một số văn bản mới về đất đai như: Nghị định số 104/2014/NĐ-CP ngày 14-11-2014 của Chính phủ quy định về khung giá đất; Nghị định số 102/2014/NĐ-CP ngày 10-11-2014 của Chính phủ về xử phạt vi phạm hành chính trong lĩnh vực đất đai; Thông tư số 37/2014/TT-BTNMT ngày 30-06-2014 của Bộ Tài nguyên và Môi trường quy định chi tiết về bồi thường, hỗ trợ, tái định cư khi nhà nước thu hồi đất…', 5, 15),
(33, 'Về Bản Tính Người', 've-ban-tinh-nguoi.jpg', 'Edward O. Wilson', 125, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-01', 65, 'Không một người nào thực sự quan tâm đến tương lai nhân lọai mà có thể bỏ qua cuốn sách Về bản tính người của   E. O. Wilson.\r\n\r\nHành vi của con người có bị kiểm soát bởi di sản sinh học của giống loài không? Di sản này có khiến cho số phận loài người bị giới hạn không? Bằng trí tuệ sắc sảo và văn phong giản dị, nhà bác học nổi tiếng thế giới, hai lần đoạt giải Pulitzer đặt nghi vấn về nhiều ngộ nhận phổ biến hiện nay về hành vi của loài người, và tìm cách lý giải hành vi của loài người ừ góc độ sinh học, qua đó ông đề nghị chúng ta không xem loài người như một loài hoàn toàn ngoại lệ, cho dẫu con người đã đạt được những thành tựu lớn lao đến đâu và mặc dù có sự thiên vị tự nhiên do bởi bản thân chúng ta thuộc loài người.', 5, 15),
(34, 'Hướng Dẫn Thi Hành Luật Đất Đai - Luật Nhà Ở - Luậ', 'img059_5.jpg', '  ', 126, 0, 'huy', 'NXB Lao Động Xã Hội', '2014-07-08', 526, 'Nội dung cuốn sách bao gồm những phần chính sau:\r\n\r\nPhần I: Luật Nhà ở - Luật Đất đai - Luật Kinh doanh bất động sản\r\n\r\nPhần II: Giải đáp các vấn đề về việc áp dụng thi hành Luật Đất đai\r\n\r\nPhần III: Giải đáp về phương pháp định giá đất, điều chỉnh khung giá đất và hoạt động tư vấn xác định giá đất\r\n\r\nPhần IV: Giải đáp về công tác bồi thường, hỗ trợ, tái định cư khi nhà nước thu hồi đất\r\n\r\nPhần V: Giải đáp về giấy chứng nhận quyền sử dụng đất, quyền sở hữu nhà ở và tài sản khác gắn liền với đất\r\n\r\nPhần VI. Giải đáp về lập, điều chỉnh quy hoạch, kế hoạch sử dụng đất, giao đất, thu hồi đất\r\n\r\nPhần VII. Giải đáp về chính sách vay hỗ trợ nhà ở\r\n\r\nPhần VIII. Giải đáp về thuế sử dụng đất nông nghiệp và thu tiền sử dụng đất\r\n\r\nPhần IX. Giải đáp về xử phạt vi phạm hành chính trong lĩnh vực xây dựng, đất đai', 15, 2),
(35, 'Ám Ảnh Từ Kiếp Trước: Bí Mật Của Sự Sống Và Chết', 'am-anh-kiep-truoc.jpg', 'Brian L. Weiss', 263, 0, 'Nhân Trí Việt', 'NXB Tổng hợp TP.HCM', '2013-01-05', 526, 'ốn là nhà tâm lý trị liệu truyền thống, TS. Brian Weiss đã kinh ngạc và bi quan khi một trong những bệnh nhân của mình bắt đầu nhớ lại những chấn thương trong kiếp trước mà chúng dường như là chìa khóa để giải quyết những cơn ác mộng và lo lắng lặp đi lặp lại. Tuy nhiên, chủ nghĩa bi quan của ông bị xói mòn khi cô ấy bắt đầu phát những thông điệp từ "những sinh thể ở giữa không gian," chứa đựng những tiết lộ quan trọng về gia đình của TS. Weiss và cái chết của con trai ông. Bằng biện pháp kiếp trước, ông có khả năng chữa lành cho bệnh nhân và mở ra một giai đoạn mới đầy ý nghĩa trong nghề nghiệp của chính mình.', 5, 2),
(36, 'Thủ Tục Tiến Hành Một Cuộc Thanh Tra', 'img006_8.jpg', '  ', 255, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2013-01-01', 366, 'Công tác thanh tra nhằm đánh giá việc chấp hành pháp luật về những nội dung liên quan đến các lĩnh vực quản lý nhà nước. Qua đó phát hiện những sơ hở, bất cập, kiến nghị, chỉnh sửa nhằm hoàn thiện cơ chế chính sách trên các lĩnh vực... Để nâng cao hiệu quả công tác thanh tra, thời gian qua, nhiều văn bản pháp quy của nhà nước đã được ban hành như: TT 05/2014/TT-TTCP ngày 16/10/2014 Quy định về tổ chức, hoạt động, quan hệ công tác của đoàn thanh tra và trình tự, thủ tục tiến hành một cuộc thanh tra...', 5, 6),
(37, 'Chính Sách Tăng Lương Tối Thiểu Năm 2015', 'chinh_sach_tang_luong_2015.jpg', '  ', 36, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2014-11-01', 56, 'Cuốn sách gồm những phần chính sau:\r\n\r\nPhần thứ nhất: Chính sách tăng lương tối thiểu 2015\r\n\r\nPhần thứ hai: Hệ thống thang lương, bảng lương đơn vị hành chính sự nghiệp và công ty nhà nước\r\n\r\nPhần thứ ba: Bộ luật Lao động và văn bản mới hướng dẫn thi hành\r\n\r\nPhần thứ tư: Văn bản mới nhất về bảo hiểm xã hội\r\n\r\nPhần thứ năm: Luật Bảo hiểm y tế và văn bản mới nhất về bảo hiểm y tế', 1, 2),
(38, 'Những Kỹ Năng Dành Cho Cuộc Sống (Tái Bản 2014)', 'nhung_ky_nang_danh_cho_cs_3.jpg', '  ', 366, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2013-01-01', 526, 'Khao khát được thừa nhận, được cảm thấy mình quan trọng và được đánh giá cao là khao khát vô cùng mãnh liệt. Bạn càng làm cho người khác cảm thấy họ quan trọng thì họ sẽ càng có phản ứng tích cực đối với bạn.\r\n\r\nTất cả chúng ta đều ngưỡng mộ những người dường như có khả năng kết thân với người lạ chỉ qua một lần trò chuyện và thường gọi họ là "những người có sức hút". Nhưng đa phần chúng ta lại cho rằng đây là năng khiếu bẩm sinh. Thật ra, sức thu hút của họ chính là kỹ năng tạo ấn tượng với người khác. Bạn hoàn toàn có thể học hỏi, phát triển và hoàn thiện kỹ năng này nếu bạn tích lũy được những hiểu biết nhất định và có quyết tâm.', 15, 5),
(39, 'Sức Hút Của Kỹ Năng Nói Chuyện', 'suc-hut-cua-ky-nang-noi-chuyen.jpg', 'Beauty Salon', 566, 1, 'huy', '	NXB Văn Hoá Thông Tin', '2013-02-01', 1250, 'Bạn muốn thay đổi thói quen giao tiếp?\r\n\r\nBạn cần học hỏi kỹ năng giao tiếp?\r\n\r\nBạn mong trở thành nữ hoàng giao tiếp?\r\n\r\nQua những ví dụ sinh động và hài hước, cuốn sách sẽ giúp bạn nắm vững thần thái và ngôn ngữ trong các tình huống giao tiếp khác nhau, đưa bạn trở thành nữ hoàng giao tiếp, để lại ấn tượng tốt đẹp trong mắt mọi người.', 25, 50),
(40, 'Hiểu Người Qua 5 Tính Cách Tiền Bạc', 'hieu_nguoi_qua_5_tinh_cach_tien_bac.jpg', 'Scott & Bethany Palmer', 356, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2013-01-01', 526, 'Mọi cặp vợ chồng đều có những lần tranh cãi vì tiền bạc. Dù bạn dư dã hay thiếu hụt, sống với nhau bốn mươi năm hay chỉ mới cưới được bốn tháng, tiền bạc luôn hiện diện trong mọi quyết định của đời sống hôn nhân.\r\n\r\nKhi không đồng thuận về vấn đề chi tiêu hay tiết kiệm, giữa vợ chồng rất dễ xảy ra xung đột và để lại những tổn thương sâu sắc.\r\n\r\nBằng cách xác định “tính cách tiền bạc” của mình thông qua cuốn sách Hiểu người qua 5 tính cách tiền bạc, bạn sẽ chấm dứt tình trạng bất tín tài chính trong hôn nhân cũng như hóa giải được xung đột liên quan đến tiền bạc. Đó chính là yếu tố quan trọng giúp bạn tự tin hơn trong việc hâm nóng tình yêu và tạo không khí hạnh phúc bên người bạn đời.', 5, 50),
(41, 'Chàng Trai Harvard Thua Tại Vạch Xuất Phát', 'chang-trai-havard.jpg', 'Vu Trí Bác, Sử Thanh Tinh, Chu', 368, 1, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-01', 1226, 'Chàng trai Harvard thua tại vạch xuất phát là hành trình trưởng thành của anh chàng Vu Trí bác từ lưu ban cấp 1, đội sổ cấp 2, học trường không tên tuổi cấp 3 và đại học cho đến khi mở được cánh cửa Harvard.\r\n\r\nCuốn sách này dành tặng cho:\r\n\r\n- Những ai dám mơ ước, dám thực hiện và can đảm vượt qua khó khăn để hoàn thành ước mơ.\r\n\r\n- Những ai tự tin chọn thứ phù hợp, chủ động vạch sẵn kế hoạch tương lai và vận dụng kỹ năng mềm để đi đến thành công.\r\n\r\n- Những bạn trẻ muốn học cách tư duy và thay đổi bản thân.', 15, 125),
(42, 'Luật Hấp Dẫn - 5 Bước Thực Hành', 'luat-hap-dan.jpg', 'Joe Vitale', 56, 1, 'huy', '	NXB Văn Hoá Thông Tin', '2014-11-01', 266, '"Tôi chưa từng gặp một ai không muốn thành công. Hơn thế nữa, mọi người đều mong muốn khám phá ra những bí mật của thành công để thành công nhanh nhất. Rất nhiều người cứ loay hoay tìm cách. Tôi ngày xưa cũng vậy. May thay, sau khi đọc xong cuốn Người nam châm - bí mật của luật hấp dẫn, tôi đã đọc ngay cuốn Luật hấp dẫn - 5 bước thực hành và nói thật hai cuốn sách này đã làm thay đổi tôi  hoàn toàn. Vậy nên trong lần tái bản này tôi không thể không viết vài dòng về cuốn sách. Nếu như tôi đã từng bị cuốn sách Người nam châm thu hút bởi khi vận dụng luật hấp dẫn ta có thể thu hút thành công, hạnh phúc tới với mình thì Luật hấp dẫn - 5 bước thực hành đưa ra và phân tích sâu vào 5 bước phát triển bản thân và thực hiện việc hấp dẫn những gì chúng ta mong muốn trong cuộc sống. nói một cách khác, Luật hấp dẫn - 5 bước thực hành cụ thể hóa luật hấp dẫn vốn có sẵn trong vũ trụ.', 2, 15),
(43, '25 Thuật Đắc Nhân Tâm (Tái Bản 2014)', '25-thuat-dac-nhan-tam_1.jpg', 'JohnC Maxwell', 422, 0, 'KaKaLot', 'Chim sẻ đi nắng', '2014-05-05', 244, 'Hãy là người mà ai cũng muốn đi theo!\r\n\r\n25 thủ thuật đắc nhân tâm bí quyết chinh phục lòng người của không chỉ các nhà lãnh đạo mà còn là của chính bạn! Có rất nhiều cách để thành công trong cuộc sống, kinh doanh và các mối quan hệ. Nhưng một yếu tố không thể thiếu là khả năng chinh phục lòng người. Chúng ta ai cũng muốn nhận được thật nhiều sự ủng hộ, kết giao được nhiều bạn bè, xây dựng được nhiều mối quan hệ tốt đẹp, nhưng không phải ai cũng làm được điều đó.', 10, 12);
INSERT INTO `books` (`book_ID`, `title`, `image`, `author`, `price`, `cover`, `company`, `publishing_house`, `publish_date`, `number_page`, `description`, `sale_off`, `store`) VALUES
(44, 'Tuổi 20 - Những Năm Tháng Quyết Định Cuộc Đời Bạn', 'tuoi-20.jpg', 'Meg Jay', 99, 0, 'bibi', 'Little, Brown and Company', '2014-11-01', 126, 'Luôn chạy theo đám đông Không tiếp sức, cổ vũ những người xung quanh\r\n\r\nNghĩ rằng không phải học hỏi và trưởng thành nữa\r\n\r\nNghĩ rằng giúp đỡ ai đó rồi họ sẽ có ngày trả ơn mình\r\n\r\nĐầu tư vào những mối quan hệ không có giá trị đúng đắn\r\n\r\nCặp kè với những người bạn ăn chơi lêu lổng và giết thời gian\r\n\r\nLuôn tiêu đến đồng cuối cùng mình có được mà không chịu để dành\r\n\r\nHẹn hò một người chẳng ra gì\r\n\r\nQuên rằng luật nhân quả là có thật trong cuộc sống\r\n\r\nTuổi thanh xuân giống như một cơn mưa rào mùa hạ chợt đến và rồi chợt đi lúc nào không hay. Đừng bỏ phí những năm tháng quyết định cuộc đời mình các bạn nhé!', 5, 23),
(45, 'Tình Thầy Trò', 'tinh-thay-tro.jpg', 'Todd Whitaker', 366, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2013-01-01', 354, 'Vai trò của thầy cô giáo trong cuộc sống chúng ta là vô hạn. Thầy cô không chỉ dạy chúng ta cách đọc, viết, kiến thức tự nhiên và xã hội, mà còn dạy chúng ta về tình yêu thương và sự cảm thông chia sẻ, khơi gợi trong lòng chúng ta những niềm đam mê và đưa ra các chỉ dẫn, hướng chúng ta đi trên con đường đúng đắn để đạt được mục tiêu cuộc đời: thành nhân và thành danh.', 10, 2),
(46, 'Tình Thầy Trò', 'tinh-thay-tro.jpg', 'Todd Whitaker', 633, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2014-11-01', 352, 'Vai trò của thầy cô giáo trong cuộc sống chúng ta là vô hạn. Thầy cô không chỉ dạy chúng ta cách đọc, viết, kiến thức tự nhiên và xã hội, mà còn dạy chúng ta về tình yêu thương và sự cảm thông chia sẻ, khơi gợi trong lòng chúng ta những niềm đam mê và đưa ra các chỉ dẫn, hướng chúng ta đi trên con đường đúng đắn để đạt được mục tiêu cuộc đời: thành nhân và thành danh.', 10, 50),
(47, 'Lội Ngược Dòng', 'img024_10.jpg', 'Richard Maun', 72, 0, 'Bao Huy Bao Huy', 'NXB Bách Khoa HN', '2013-01-01', 102, 'Lội ngược dòng được ra đời để giúp mọi người trong bối cảnh thế giới việc làm bỗng dưng thay đổi theo chiều hướng xấu, và chúng ta phải tự hỏi điều gì đã xảy ra, tiếp theo cần phải làm gì. Đây là cuốn sách giúp chúng ta đối mặt với thảm họa, sau đó khai mở một đường hướng mới.\r\n\r\nLội ngược dòng dựa trên những trải nghiệm đời thực, những phương pháp thực tế và tư duy mạch lạc. Quyển sách chứa đầy các mẹo và công cụ hữu ích, được thiết kế để giúp chúng ta tư duy, hành động tích cực, để từ đó chúng ta có thể phát triển. Tất cả các câu chuyện được kể đều bắt nguồn từ người thật. Danh tính của họ được giấu đi, nhưng họ là những người thực việc thực.', 15, 15),
(48, '20 Tuổi Trở Thành Người Biết Nói Giỏi Làm', '20-tuoi-biet-noi-gioi-lam.jpg', 'Nhóm tác giả', 40, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2013-01-01', 352, 'Đây là thời gian để bắt đầu đưa ra lựa chọn có chủ ý về công việc, thành phố và thậm chí cả cuộc sống tình yêu để thiết lập cuộc sống mà bạn muốn có ở tuổi 30 của mình. Bạn cần phải tìm ra nghề nghiệp hoàn hảo để làm thay vì tiếp tục tìm kiếm công việc trong mơ tuyệt đối, nhận một công việc không phải là lý tưởng cũng không sao, miễn là có điều gì trong đó có thể dẫn đến công việc khác, cơ hội tốt hơn trong tương lai.', 0, 26),
(49, 'Bồi Dưỡng Hóa Học 8', 'boi-duong-hoa-hoc-8_1.jpg', ' ', 90, 1, 'Nhà sách Sao Mai', 'NXB Tổng hợp TP.HCM', '2014-10-12', 126, 'Nội dung sách được biên soạn bám sát chương trình giáo khoa hiện hành và theo từng chương ứng với từng chương trong sách giáo khoa.\r\n\r\nTrong mỗi chương được trình bày gồm 3 phần chính:\r\n\r\n- Lý Thuyết\r\n\r\n- Bài tập vận dụng\r\n\r\n- Bài tập tự luyện (Có đáp số)\r\n\r\nQuyển sách là tư liệu giúp các em học sinh lớp 8 nâng cao năng lực tự học ở nhà cũng như rèn luyện để tham gia vào các đội tuyển học sinh giỏi các cấp.', 5, 200),
(50, 'Những Bài Văn Mẫu Lớp 6 (Tập 1)', 'nhung-bai-van-mau-6_1.jpg', 'Lê Thị Mỹ Trinh', 80, 0, 'Nhân Trí Việt', 'NXB Tổng hợp TP.HCM', '2013-05-15', 200, 'Những Bài Văn Mẫu 6 được biên soạn nhằm giúp các em học tập tốt môn làm văn ở lớp và ở nhà, đồng thời cũng là tài liệu tham khảo cho giáo viên và phụ huynh.\r\n\r\nDựa trên chương trình Làm văn lớp 6, tác giả nêu rõ cách làm cụ thể từng bài thuộc các thể loại văn.\r\n\r\nCác bài văn mẫu chỉ có tính chất gợi ý, hướng dẫn để các em làm bài đạt hiệu quả cao hơn.\r\n\r\nCác em cố gắng nắm vững lý thuyết, tìm hiểu yêu cầu của từng đề, đọc kĩ từng bài văn, để từ đó viết thành bài làm riêng của mình.\r\n\r\nMỗi bài văn sẽ là một tác phẩm nhỏ do chính các em sáng tạo.', 5, 125),
(51, 'Phát Triển Tư Duy Học Toán Lớp 3 (2014)', 'phat-trien-tu-duy-hoc-toan-lop-3.jpg', 'Nhiều Tác Giả', 35, 0, 'Minh Long', '	NXB Văn Hoá Thông Tin', '2013-05-15', 75, '', 0, 15),
(52, '80 Đề Kiểm Tra Toán Tiểu Học Cơ Bản Và Nâng Cao Lớ', '80-de-kiem-tra-toan-tieu-hoc_1.jpg', 'Nguyễn Thị Mỹ Duyên', 40, 0, 'sachvietco', 'NXB Đại Học Quốc Gia TP.HCM', '2013-01-05', 100, '', 0, 50),
(53, '60 Đề Kiểm Tra Và Đề Thi Tiếng Việt Lớp 4 (2014)', '80-de-kiem-tra-toan-tieu-hoc-lop-3.jpg', 'Nguyễn Thị Mỹ Duyên', 40, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2013-05-15', 99, '', 0, 36),
(54, '60 Đề Kiểm Tra Và Đề Thi Tiếng Việt Lớp 4 (2014)', '60-de-kiem-tra-va-de-thi-tieng-viet-4.jpg', 'Võ Thị Hoài Tâm', 35, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2013-01-01', 126, '', 0, 96),
(55, 'Giải Bài Tập Hóa Học Lớp 9 (2014)', 'giai-bai-tap-hoa-hoc-9.jpg', 'Huỳnh Văn Út', 56, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2014-11-01', 133, '', 5, 50),
(56, '80 Đề Kiểm Tra Toán Tiểu Học Cơ Bản Và Nâng Cao - ', '80-de-kiem-tra-toan-tieu-hoc_2.jpg', 'Nguyễn Thị Mỹ Duyên', 40, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2014-02-17', 98, '', 0, 36),
(57, 'Giải Bài Tập Tiếng Việt Lớp 3 (Tập 1)', 'giai-bai-tap-tieng-viet-lop-3-tap-1.jpg', '  ', 35, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2014-11-01', 78, '', 0, 5),
(58, 'Những Bài Văn Hay Lớp 3 (2014)', 'nhung-bai-van-hay-lop-3.jpg', ' ', 28, 0, 'Amazon', 'Little, Brown and Company', '2014-11-01', 76, '', 0, 123),
(59, 'Bồi Dưỡng Văn - Tiếng Việt Lớp 4 (Tập 2)', 'boi-duong-van-tieng-viet-lop-4.jpg', 'Nhiều Tác Giả', 35, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2014-05-05', 126, '', 0, 56),
(60, 'Giải Bài Tập Hình Học Lớp 11 (Chương Trình Chuẩn)', 'giai-bai-tap-hinh-hoc-11.jpg', 'Trần Tiến Tự', 35, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-01', 112, '', 0, 25),
(61, '345 Câu Khẩu Ngữ Tiếng Hán - Tập 2 (Kèm CD)', '345-cau-khau-ngu-tieng-han-tap-2.jpg', 'Trần Hiền Thần', 115, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-01', 109, 'Bộ sách gồm 4 tập với nội dung và chủ đề khác nhau, hệ thống kiến thức cơ bản, dễ học giúp bạn có thể sử dụng thành thạo mẫu câu trong giao tiếp hàng ngày.   Với lượng kiến thức phù hợp, nội dung cuốn sách sẽ giúp bạn hứng thú hơn khi tìm hiểu về phương pháp đối thoại trong cuộc sống, giao tiếp công việc.\r\n\r\nMỗi bài học gồm các phần: Mẫu câu cơ bản, từ mới, hội thoại, ngữ pháp. Những tình huống hội thoại cụ thể với các mẫu câu thông dụng trang bị cho bạn cách xử lý nhiều tình huống cụ thể trong giao tiếp. Cuốn sách là tài liệu hữu ích cho những ai muốn nâng cao khả năng thực hành giao tiếp tiếng Trung.', 5, 2),
(62, 'Tổng Hợp Trắc Nghiệm Tiếng Anh Trình Độ C (Có Đáp ', 'tong-hop-trac-nghiem-tieng-anh-trinh-do-c.jpg', 'The Windy', 69, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2014-11-01', 112, 'Cuốn sách được biên soạn với mục đích phục vụ đông đảo các bạn học sinh, sinh viên và người đi làm có thể tự học và ôn luyện tiếng Anh trình độ sơ cấp. Nội dung sách gồm 2 phần chính:\r\n\r\nPhần 1: Các bài test luyện thi level C\r\n\r\nPhần 2: 800 câu hỏi trắc nghiệm tổng hợp', 0, 50),
(63, '600 Động Từ Bất Quy Tắc Tiếng Anh', '600-dong-tu-bat-quy-tac-tieng-anh.jpg', 'The Windy', 96, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2013-01-05', 69, '', 0, 15),
(64, 'Từ Điển Nga - Việt', 'tu-dien-nga-viet.jpg', 'PGS.Tiến sĩ Nguyễn Trọng Báu', 96, 0, 'Huy Hoàng', 'Little, Brown and Company', '2013-01-01', 1002, '', 0, 5),
(65, 'Prime TOEIC Reading', '001_1_22.jpg', ' ', 300, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2013-05-15', 366, 'The Toeic test is an important test. More than two million people take this test every year. Today, it is important for people all over the word to use English, and the Toeic test is one of the ways to measure the English ability of non-native speakers. In addition, a high score on this test can help them get a good job or a promotion.\r\n\r\nHowever, preparing for the Toeic test is not easy, especially for high beginning and low inter-mediate students. Most Toeic preparation books are usually written for higher level students. Because of this fact, Prime Toeic - RC, together with the other book in the series Prime Toeic - LC, has been designerd to target learners of these levels. They will really help those who plan to take the test for the first time and also those who want to improve their Toeic test scores.', 0, 5),
(66, 'Ngữ Pháp Tiếng Anh Cơ Bản Và Nâng Cao', '042_7.jpg', 'Lê Ngọc Bửu', 99, 0, 'Amazon', 'huy', '2013-01-01', 126, '', 5, 15),
(67, 'Master TOEFL Junior Cefr Intermedicate Level B1', 'img442_3.jpg', 'Richie Hahn', 205, 0, 'Amazon', 'NXB Tổng hợp TP.HCM', '2013-01-01', 126, '', 0, 5),
(68, 'Fairy Tail - Hội Phép Thuật (Tập 7) - 2014', 'fairy_tail_7_1.jpg', 'Hiro Mashima', 20, 0, 'Alphabooks', 'huy', '2013-01-05', 60, 'Fairy Tail là truyện tranh được sáng tác bởi tác giả Hiro Mashima. Truyện kể về cuộc sống và sự đấu tranh của Hội pháp sư Fairy Tail, và sự mất tích của những con rồng.\r\n\r\nTruyện bắt đầu với cô pháp sư Lucy Heartfilia 17 tuổi bỏ nhà để theo đuổi con đường pháp sư của mình, cô muốn gia nhập vào Hội Fairy Tail được đồn đại là một hội vui vẻ và có nhiều pháp sư tài ba.Trên đường đi cô gặp Natsu Dragneel cùng với một chú mèo biết nói đang trên đường đi tìm cha nuôi của mình mà một con Hỏa long có tên Igneel đã biến mất không một dấu vết vào 7 năm về trước. Sau lúc đó, Lucy bị bắt cóc bởi một kẻ tự nhận là thành viên của Fairy Tail, khi đó Natsu ra tay cưới Lucy và tiết lộ anh chính là thành viên của Fairy Tail và kể kia chỉ là giả mạo, anh cũng là một Sát Long Nhân (Slayer Dragon) , một pháp sư có kĩ năng giết rồng, Natsu đã mời Lucy tham gia vào hội của mình.', 0, 15),
(69, 'Doraemon Hoạt Hình Màu (Tập 2)', 'doraemon-hoat-hinh-mau-tap-2.jpg', 'Fujiko-F-Fujio', 25, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2014-05-05', 50, '- Giọng hát của Doraemon\r\n\r\n- Tấm thẻ ác quỷ\r\n\r\n- Bộ sưu tập nắp chai\r\n\r\n- Bài hát của Doraemon\r\n\r\n- Hoán đổi mẹ\r\n\r\n- Cào cào liến thoắng\r\n\r\n- Bản tin phim hoạt hình Doraemon\r\n\r\n- Công tắc độc tài', 0, 36),
(70, 'Doraemon (Tập 37)', 'meo-may-den-tu-tuong-lai-tap-37.jpg', 'Fujiko-F-Fujio', 25, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2013-01-05', 55, 'Những câu chuyện về chú mèo máy thông minh Doraemon và nhóm bạn Nobita, Shizuka, Suneo, Jaian, Dekisugi sẽ đưa chúng ta bước vào thế giới hồn nhiên, trong sáng đầy ắp tiếng cười với một kho bảo bối kì diệu - những bảo bối biến ước mơ của chúng ta thành sự thật. Nhưng trên tất cả Doraemon là hiện thân của tình bạn cao đẹp, của niềm khát khao vương tới những tầm cao.', 0, 15),
(71, 'Thám Tử Lừng Danh Conan 83 (Tái Bản 2014)', 'img846_2.jpg', 'Aoyama Gosho', 25, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2013-05-15', 66, 'Nữ thám tử học sinh trung học Masumi Sera là người luôn có những hành động đầy ẩn ý... Mục đích thật sự của cô sẽ được hé lộ trong vụ án người phụ nữ màu đỏ, với một cái kết đầy bất ngờ.', 0, 50),
(72, 'Doraemon - Chú Mèo Máy Đến Từ Tương Lai (Tập 38)', 'chu-meo-may-tuong-lai-tap-38.jpg', 'Fujiko-F-Fujio', 25, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2013-01-01', 55, '', 0, 5),
(73, 'Thám Tử Lừng Danh Conan Tập 17 (Tái Bản 2014)', 'conan17_2.jpg', 'Aoyama Gosho', 25, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2013-01-01', 66, '', 0, 15),
(74, 'Doraemon - Truyện Dài - Tập 3 - Nobita Thám Hiểm V', 'doraemon-truyendai3_1.jpg', ' Fujiko.F.Fujio', 16, 0, 'Alphabooks', 'huy', '2014-02-17', 55, 'Nobita thám hiểm vùng đất mới” là tác phẩm thứ 3 trong xêri Doraemon truyện dài, và cũng là tác phẩm đã được chuyển thể thành phim hoạt hình. Câu chuyện xảy ra trên trái đất thời hiện đại, tại một vùng đất xa xôi nằm sâu trong lục địa Châu Phi. Nhóm bạn Doraemon đã không quản hiểm nguy, lên đường đi tìm lời giải đáp cho bí mật về pho tượng thần khổng lồ. Đặc biệt lần này, cả nhóm hầu như phải tự lực cánh sinh, bởi các bảo bối không giúp được gì mấy. Nào, chúng ta cùng theo chân nhóm bạn Doraemon, bước vào cuộc hành trình đầy thử thách này nhé!', 0, 5),
(75, 'Nói Sao Để Khích Lệ Và Giúp Con Trưởng Thành', 'noi-sao-de-khich-le.jpg', 'Haim G. Ginott', 45, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2013-01-01', 55, 'Tác phẩm kinh điển đã làm thay đổi hoàn toàn cách giao tiếp giữa cha mẹ và con cái. Thử tưởng tượng, bạn sắp được gây mê để làm phẫu thuật, vị bác sĩ đáng kính bước vào và nói: "Thực ra tôi không được đào tạo nhiều về phẫu thuật đâu, nhưng tôi yêu mến bệnh nhân của mình và tôi sẽ làm hết sức có thể." Chắc hẳn lúc đó bạn sẽ phát hoảng và chạy thật nhanh để bảo toàn mạng sống. Thế nhưng, những đưa trẻ không dễ dàng bỏ chạy như vậy khi cha mẹ chúng tin rằng nuôi con chỉ cần tình yêu thương và những hiểu biết thông thường là đủ. Cuốn sách sẽ cung cấp cho các bậc cha mẹ những phương thức đặc biệt để trò chuyện và thấu hiểu con cái, như:\r\n\r\n- Giải mã những thông điệp tưởng như vô nghĩa của trẻ\r\n\r\n- Bày tỏ sự thấu hiểu và cảm thông đúng cách\r\n\r\n- Lời khen cũng cần phải khéo léo và có liều lượng', 5, 25),
(76, 'Mang Thai Không Hề Dễ Chịu', 'mang-thai-khong-he-de-chiu.jpg', 'Joanne Kimes - Jeff Kimes', 55, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-01', 26, '"Khi lần đầu viết cuốn Mang thai không hề dễ chịu, nó đã trở thành cuốn sách đầu tiên trong dòng sách cùng loại đưa ra những cái nhìn khá tiêu cực về phép màu nhiệm trong cuộc sống. Tôi đã lo lắng sẽ phải sống những lá thư bất bình từ nhiều phụ nữ nói rằng tôi thật tồi tệ khi có thể phàn nàn về việc mang thai. Song những lần tham dự chương trình ký tặng sách hay đọc được những nhận xét của độc giả, đã giảm nhẹ phần nào trong tôi nỗi lo lắng này. Các bà mẹ như vỡ òa sung sướng và cảm kích khi có được sự đồng cảm rằng: Chín tháng thai nghén này không hạnh phúc như những gì họ đã tưởng tượng và họ không phải là người duy nhất có cảm giác tội lỗi về điều này."\r\n\r\n(Tác giả Joanne Kimes)', 0, 25),
(77, 'Mang Thai Không Hề Dễ Chịu Cả Với Đàn Ông', 'mang-thai-khong-he-de-chiu-ca-voi-dan-ong.jpg', 'Joanne Kimes - Jeff Kimes', 55, 0, 'huy', 'NXB Lao Động Xã Hội', '2013-01-01', 56, 'iệc mang thai thật khó chịu khi bạn:\r\n\r\nPhải chịu đựng tính khí thất thường của bà bầu\r\n\r\nBỏ qua những bữa tụ tập bạn bè để ở nhà chăm sóc cô ấy\r\n\r\nPhải hạn chế những nhu cầu của bản thân\r\n\r\nMột điều mà cánh đàn ông ở khắp mọi nơi đều đồng ý: Mang thai thật vất vả cho họ\r\n\r\nNếu bạn đang mệt mỏi hoặc lỡ miệng thốt ra những lời lẽ làm bà bầu của mình nổi xung lên; nếu bạn muốn có cái nhìn chân thực về những gì sẽ diễn ra khi vợ bạn sinh em bé; hoặc bạn thật sự muốn cười thỏa sức một trận sau những cố gắng và hy sinh... thì Mang thai không hề dễ chịu cả với đàn ông, sẽ chỉ ra chính xác những điều bạn cần làm khi điều kì diệu đang khiến bạn vô cùng khổ sở.\r\n\r\n“Tôi đã mua cuốn sách này tặng con gái và con rể. Nhưng tôi giữ lại đọc trước, và hậu quả là: cười chảy nước mắt! Con rể tôi không phải mọt sách mà cũng phát cuồng vì nó!” (Yuba City, California, Mỹ)', 0, 36),
(78, 'Ông Bà Tốt Hơn Thầy Tốt', 'ong-ba-tot-hon-thay-tot.jpg', 'Vạn Doanh', 126, 0, 'KaKaLot', 'bao huy bao huy', '2013-05-15', 256, 'Trong một gia đình nề nếp, ông bà là tấm gương cho cháu noi theo. Ông bà có thể giữ vai trò quan trọng trong việc định hướng tương lai của cháu mình thông qua quan sát và giao tiếp của cháu đối với ông bà. Ông Bà chăm sóc, giáo dục thế hệ thứ ba có một số ưu thế không thể thay thế được. Đầu tiên, ông bà giống như cha mẹ của trẻ, đều thương yêu trẻ, đây là cơ sở để đảm bảo sự thành công của giáo dục của ông bà. Bởi lẽ, chỉ có tình yêu mới có thể khiến các ông bà học tập các kiến thức có liên quan tới nuôi dạy trẻ, theo sát sự thay đổi của thời đại, không ngừng cập nhật và hoàn thiện quan niệm dạy cháu của mình. Kế đến, ông bà có ưu thế về thời gian, có thể làm bạn với trẻ trong thời gian dài, cho trẻ đủ cảm giác hạnh phúc và an toàn.', 0, 36),
(79, 'Trẻ Nhạy Cảm - Bốn Chìa Khóa Vàng Nuôi Dạy Trẻ Thà', 'tre-nhay-cam.jpg', 'Elaine N. Aron, Ph.D', 58, 0, 'Amazon', 'huy', '2013-01-01', 126, 'Hầu hết mọi người đều biết rằng mỗi đứa trẻ được sinh ra đều có những tích cách riêng của mình, nhưng cũng có những đứa trẻ có “tính cách đặc biệt”. Đó là những đứa trẻ hay phản ứng với điều kiện hơi bất thường, chú tâm quá mức, bề ngoài cẩn trọng rụt rè, để ý đến mọi việc. Elaine N. Aron gọi đó là những đứa trẻ nhạy cảm.Con bạn có phải là một đứa trẻ nhạy cảm bẩm sinh - tính cách phổ biến chiếm đến trong khoảng 15% tới 20% tổng số trẻ? Con bạn có hay mè nheo, khóc lóc, dị ứng với quần áo, màu sắc, nhiệt độ thay đổi và thậm chí sợ hãi sự mới mẻ?\r\n\r\nCuốn sách Trẻ nhạy cảm - 4 chìa khóa vàng nuôi dạy trẻ thành công của tác giả Elaine N. Aron để giúp bạn khám phá sự rắc rối này. Chuyên gia về các mối quan hệ gia đình, tác giả cuốn sách bán chạy nhất thế giới dành cho người nhạy cảm - tiến sĩ Elaine N. Aron sẽ dẫn dắt bạn đi qua những cung bậc cảm xúc khác nhau: từ việc khám phá ra bí mật tiềm ẩn trong tính cách của con bạn, giải quyết những vấn đề về con cái khiến bạn mất ngủ mỗi đêm', 0, 66),
(80, 'Mỗi Đứa Trẻ Một Cách Học (Tái Bản 2014)', 'moi-dua-tre-mot-cach-hoc_1.jpg', 'Cynthia Ulrich Tobias', 126, 0, 'Nhân Trí Việt', 'NXB Tổng hợp TP.HCM', '2013-01-01', 147, 'Nhìn nhận mỗi đứa trẻ là một cá thể với cá tính riêng biệt, bạn mới không đi vào lối mòn rập khuôn và làm lệch lạc thiên hướng phát triển. Khi xác định đúng phong cách học tập của trẻ, bạn mới có thể khơi dậy tối đa khả năng tiềm tàng trong con trẻ.\r\n\r\nTất cả các bậc cha mẹ và thầy cô đều có chung một đích đến: những đứa trẻ sẽ trở thành học sinh xuất sắc và có niềm hứng khởi, say mê vô tận với việc học. Thế nhưng, không phải ai cũng đạt mục đích. Tại sao vậy? Vì ngoài tình yêu thương, sự kiên định và nỗ lực, điều quyết định cuối cùng là một phương pháp đúng.\r\n', 5, 15),
(81, 'Con Giỏi Con Ngoan', 'con-gioi-con-ngoan.jpg', 'Hồng Lan', 120, 0, 'KaKaLot', 'bao huy bao huy', '2014-02-17', 259, 'Tiềm năng của con người là vô cùng lớn, sự dưỡng dục sau này có thể thay đổi nhiều điểu bẩm sinh. Tôi cho rằng cái đích quan trọng nhất của giáo dục chính là dạy con trẻ quan niệm học tập là suốt đời, và thái độ "không có việc gì khó, chỉ sợ lòng không bền.\r\n\r\nHồng Lan giống như một người dẫn đường thông thái, bà dùng kiến thức chuyên môn uyên thâm của mình  để chỉ dẫn cho các bậc cha mẹ tránh xa khỏi những cạm bẫy và những luồng thông tin lừa bịp của những kẻ ngụy khoa học, giúp họ bước đi trên con đường giáo dục con cái một cách đúng đắn và an toàn.', 0, 12),
(82, 'Yêu Thương Không Cấm Đoán', 'yeu-thuong-khong-cam-doan.jpg', 'Ohmae Kenichi', 55, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2013-01-05', 126, 'Khi trượt tuyết, nếu bạn sợ hãi và cố gắng ngả người về phía sườn núi, kiểu gì bạn cũng ngã. Nhưng ngược lại, nếu lao người về phía con dốc, chúng ta sẽ không gặp vấn đề gì cả. Trượt tuyết là môn thể thao đi ngược lại với bản năng của con người. Càng lao mình về phía dốc, chúng ta càng lạng lách một cách dễ dàng.\r\n\r\nGiáo dục con cũng tương tự như vậy, những lúc con muốn làm theo ý mình, bố mẹ cũng nên buông mình theo con. Chắc chắn các con sẽ trượt trơn tru, nhịp nhàng hơn chúng ta tưởng. Quan trọng là khi ấy bố mẹ phải liên tục trao đổi với con. Nếu bạn không trao đổi được với con, bạn sẽ không cải thiện được bất cứ thứ gì. Tôi cho rằng, chính đối thoại mới là chốt an toàn duy nhất cho gia đình.', 2, 50),
(83, 'Để Trẻ Tự Do Suy Nghĩ', 'de-tre-tu-do-suy-nghi.jpg', 'Nhiều Tác Giả', 59, 0, 'Alphabooks', 'huy', '2013-01-01', 76, 'Cuốn Để trẻ tự do suy nghĩ sẽ bao trùm tất cả các chủ đề mà bậc cha mẹ nào cũng cần phải biết để giúp đỡ con em mình về đạo đức, trí tuệ và phát triển tâm lý. Ở đây bạn sẽ tìm thấy những cách hiệu quả để: giúp con khám phá ý nghĩa và mục đích của cuộc sống, phát triển quan điểm lành mạnh về tình dục và hình ảnh cơ thể, khuyến khích trí tò mò, đối mặt với cái chết và sự mất mát, tìm kiếm và thiết lập cộng đồng…\r\n\r\nTừ chính những kinh nghiệm chắt lọc trong thực tế cuộc sống, các tác giả đã gợi ý ra những phương pháp thực hành tốt nhất dành cho phụ huynh không theo tôn giáo, để có thể giúp họ dạy dỗ những đứa trẻ biết trân trọng việc đặt câu hỏi mà không sợ hãi, tư duy phản biện, biết nghi ngờ quyền lực và loại bỏ tư tưởng về tội lỗi và sự xấu xa của ngờ vực qua với 9 điều cơ bản', 3, 32),
(84, 'Lời Tự Thú Của Ông Bố Tuyệt Vời Nhất Thế Giới', 'ong-bo-tuyet-voi-nhat-the-gioi.jpg', 'Dave Engledow', 112, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2014-11-01', 25, 'ó thể bạn không thấy cái tên Dave Engledow quen thuộc, nhưng chắc chắn bạn đã nhìn thấy những bức ảnh của anh trong thời gian qua - những bức ảnh đã tạo nên một “cơn sốt” trên internet, với hàng triệu lượt quan tâm. Những hình ảnh đó đã được Nhà xuất bản Penguin Group (Mỹ) biên soạn thành cuốn sách ảnh Confession of the World’s Best Father, ra mắt độc giả vào tháng 5 năm 2014.\r\n\r\nCuốn sách được tác giả viết tặng vợ và con gái Jen và Alice Bee, trong nhiều năm, nhiếp ảnh gia người Washington D.C, Dave Engledow đã liên tục sáng tạo ra những bức ảnh hài hước với tên gọi World’s Best Father. Nội dung các bức hình "vẽ lại" hình ảnh một ông bố có khi luộm thuộm, hay quên và thiếu kỹ năng chăm sóc cô con gái nhỏ Alice Bee, khắc họa hình ảnh ông bố bất cẩn và cô con gái nhỏ luôn bị đặt trong những tình huống hết sức thiếu an toàn, khiến bạn đọc thấy đó là những tình huống nguy hiểm…', 0, 5),
(85, 'Để Trẻ Tự Do Suy Nghĩ', 'de-tre-tu-do-suy-nghi.jpg', 'Nhiều Tác Giả', 59, 0, 'Alphabooks', 'huy', '2013-01-01', 76, 'Cuốn Để trẻ tự do suy nghĩ sẽ bao trùm tất cả các chủ đề mà bậc cha mẹ nào cũng cần phải biết để giúp đỡ con em mình về đạo đức, trí tuệ và phát triển tâm lý. Ở đây bạn sẽ tìm thấy những cách hiệu quả để: giúp con khám phá ý nghĩa và mục đích của cuộc sống, phát triển quan điểm lành mạnh về tình dục và hình ảnh cơ thể, khuyến khích trí tò mò, đối mặt với cái chết và sự mất mát, tìm kiếm và thiết lập cộng đồng…\r\n\r\nTừ chính những kinh nghiệm chắt lọc trong thực tế cuộc sống, các tác giả đã gợi ý ra những phương pháp thực hành tốt nhất dành cho phụ huynh không theo tôn giáo, để có thể giúp họ dạy dỗ những đứa trẻ biết trân trọng việc đặt câu hỏi mà không sợ hãi, tư duy phản biện, biết nghi ngờ quyền lực và loại bỏ tư tưởng về tội lỗi và sự xấu xa của ngờ vực qua với 9 điều cơ bản', 3, 32),
(86, 'Hoàng Đạo Vương Triều (Tập 1)', 'bia_hdvt___tap_1.jpg', 'Thư Quân', 15, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2014-11-01', 26, 'Hoàng Đạo vương triều là tác phẩm được hòa trộn giữa yếu tố lãng mạn, cổ trang kết hợp với tính cách 12 cung hoàng đạo. Sau các bộ sách khám phá chiêm tinh cùng Asbooks, chắc hẳn các độc giả đều tưởng tượng họ sẽ là ai, hành động như thế nào, các cung nào hợp với nhau, tình cảm của họ sẽ ra sao… Tất cả sẽ có trong bộ truyện đầy thú vị này.', 0, 13),
(87, 'Trà Sữa Cho Tâm Hồn (Số 111)', 'tra-sua-cho-tam-hon_2.jpg', 'Nhiều Tác Giả', 18, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2013-01-01', 56, 'Giáng sinh ấm áp còn là chủ đề của Cẩm Nang Teen tháng 12/2014. Ngoài tặng bạn những bí kíp tỏa sáng cho mùa lễ hội cuối năm, Cẩm Nang Teen còn có một series bài với chủ đề Yêu cơ thể của bạn. Hẳn là có không ít các cô nàng luôn cảm thấy cơ thể mình không hoàn hảo, luôn tự ti về điều ấy. Nhưng bạn có biết “hoàn hảo” là khi bạn tự tin và tự hài lòng.Ở trên thế giới và ngay tại Việt Nam cũng có những người mẫu được biết tới là có vẻ đẹp “Flawsome” (vẻ đẹp khuyết điểm). Họ không mang những nét chuyển hoàn hảo nhưng vẫn tỏa sáng trên sàn diễn và xuất hiện đều đặn trên bìa tạp chí.', 0, 50),
(88, 'Cô Nàng Giả Trai', 'co-nang-gia-trai.jpg', 'Jody Gehrman', 25, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2013-01-01', 76, 'Kìm chế tiếng hét hãi hùng khi thấy đám con trai tắm nude, nhét tất vào quần lót để cải trang thành giống đực, hay viện dẫn lí do tín ngưỡng để né việc chung phòng thay đồ với lũ ác mó… chỉ là những pha hài hước bước đầu để Nat tiếp cận lũ con trai trong ngôi trường thuần tuý đực rựa. Trong một pha “nóng bỏng” vô tình với hai cô bạn thân trong nhà vệ sinh, Nat được cánh nam sinh trong trường nhiệt tình chào đón vào cộng đồng của chúng và dần dần khám phá ra những điều tưởng chừng như rất bí ẩn mà đám con gái luôn tò mò muốn tìm hiểu. Cũng trong một tuần ngắn ngủi đó, những tia lửa tình giữa Dr. Aphrodite Siêu Nguỵ Trang và anh bạn cùng phòng gốc La tinh - Emilio Da Nâu Bóng bất đầu được nhen nhóm…', 0, 50),
(89, 'Tuyển Tập Nguyễn Nhật Ánh (Trọn Bộ 5 Cuốn)', 'img_9629.jpg', 'Nguyễn Nhật Ánh', 405, 0, 'Amazon', 'huy', '2013-01-05', 126, '“Tuổi mới lớn, như tên gọi của nó, là lứa tuổi đã không còn là trẻ con nhưng lại chưa thực sự trở thành người lớn. Chính vì vậy mà tâm lý và tính cách của lứa tuổi này rất đặc biệt, nói rõ hơn là chưa định hình, nên rất khó nắm bắt. Bên cạnh những thao tác văn chương thuần kỹ thuật, nhà văn viết truyện cho tuổi mới lớn có lẽ cần nhiều hơn sự đồng cảm về mặt tâm hồn với đối tượng đặc biệt này mới có thể tạo ra trước hết là sự tin cậy và kéo theo nó là sự chấp nhận của bạn đọc. Những tác phẩm viết cho tuổi mới lớn thành công xưa nay là những tác phẩm trong đó chúng ta thấy rõ tác giả thực sự tắm mình trong dòng sông tuổi thơ chứ không phải là kẻ đứng trên bờ để nhìn ngắm và miêu tả."', 0, 2),
(90, 'Tom Gates - Hầu Hết Những Ý Tưởng Thiên Tài', 'y-tuong-thien-tai_3.jpg', 'L. Pichon', 55, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2013-01-01', 96, 'Tom Gates - Hầu Hết Những Ý Tưởng Thiên Tàilà tập 4 của bộ THẾ GIỚI TUYỆT VỜI CỦA TOM GATES. Những câu chuyện từ nhà đến trường của cậu bé tinh nghịch Tom Gates lớp 5F. Những mối quan hệ chị em, cha mẹ, thầy cô và bạn bè được mô tả qua lăng kính nghịch ngợm đúng với lứa tuổi học trò. Những tình tiết hài hước đi cùng các hình vẽ ngộ nghĩnh, vui nhộn khiến người đọc không khỏi bật cười khi lật trang sách.', 0, 2),
(91, 'Kimo Xứ Cao Cao', 'kimobook-biatruoc.png', 'Malala Yousafzai', 15, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2013-01-01', 26, 'Kimo Xứ Cao Cao là ấn phẩm đặc biệt của chương trình Vì Ước Mơ Con nhằm góp phần thực hiện ước mơ của các bệnh nhi ung thư. Cuốn sách với hình ảnh nhân vật chính Kimo ngộ nghĩnh và những câu chuyện kể, những lời tâm sự đầy ý nghĩa về cuộc sống và ước mơ của các bé không may mắn phải chống chọi với căn bệnh ung thư quái ác ngay từ khi còn nhỏ.', 0, 50),
(92, 'Bé Học Vệ Sinh - Tớ Phải Đi Đây', 'to-phai-di-day.jpg', 'Lamphoo Saenglop', 25, 0, 'Alphabooks', '	NXB Văn Hoá Thông Tin', '2013-01-05', 126, 'Ôi làm trẻ con đúng là một công việc nghiêm túc chứ còn gì nữa! Có biết bao điều cần học hỏi: học kiên nhẫn, học chia sẻ, học nhận lỗi, rồi lại còn học cả cách vệ sinh chăm sóc cơ thể chính mình. Hãy để bộ sách năm cuốn: Ôi Hôi quá, Tớ phải đi đây, Ai làm giường ướt?, Đợi thêm chút nữa, Ngôi sao của tớ trở thành người bạn đồng hành thân thiết của các bạn nhỏ, khiến những điều mình cần học trở nên thật là dễ, thật là vui.', 0, 15),
(93, 'Bé Học Vệ Sinh - Ôi! Hôi Quá', 'oi-hoi-qua.jpg', ' Lamphoo Saenglop', 40, 0, 'Alphabooks', 'NXB Lao Động Xã Hội', '2013-05-15', 99, 'Ôi làm trẻ con đúng là một công việc nghiêm túc chứ còn gì nữa! Có biết bao điều cần học hỏi: học kiên nhẫn, học chia sẻ, học nhận lỗi, rồi lại còn học cả cách vệ sinh chăm sóc cơ thể chính mình. Hãy để bộ sách năm cuốn: Ôi Hôi quá, Tớ phải đi đây, Ai làm giường ướt?, Đợi thêm chút nữa, Ngôi sao của tớ trở thành người bạn đồng hành thân thiết của các bạn nhỏ, khiến những điều mình cần học trở nên thật là dễ, thật là vui.', 0, 15),
(94, 'Bé Học Vệ Sinh - Ai Làm Giường Ướt', 'ai-lam-giuong-uot.jpg', 'Nhóm tác giả', 62, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2014-11-01', 22, 'Ôi làm trẻ con đúng là một công việc nghiêm túc chứ còn gì nữa! Có biết bao điều cần học hỏi: học kiên nhẫn, học chia sẻ, học nhận lỗi, rồi lại còn học cả cách vệ sinh chăm sóc cơ thể chính mình. Hãy để bộ sách năm cuốn: Ôi Hôi quá, Tớ phải đi đây, Ai làm giường ướt?, Đợi thêm chút nữa, Ngôi sao của tớ trở thành người bạn đồng hành thân thiết của các bạn nhỏ, khiến những điều mình cần học trở nên thật là dễ, thật là vui.', 0, 2),
(95, 'Bé Học Chia Sẻ - Ngôi Sao Của Tôi', 'ngoi-sao-cua-toi.jpg', 'Nhóm tác giả', 25, 0, 'Amazon', '	NXB Văn Hoá Thông Tin', '2014-11-01', 126, 'Ôi làm trẻ con đúng là một công việc nghiêm túc chứ còn gì nữa! Có biết bao điều cần học hỏi: học kiên nhẫn, học chia sẻ, học nhận lỗi, rồi lại còn học cả cách vệ sinh chăm sóc cơ thể chính mình. Hãy để bộ sách năm cuốn: Ôi Hôi quá, Tớ phải đi đây, Ai làm giường ướt?, Đợi thêm chút nữa, Ngôi sao của tớ trở thành người bạn đồng hành thân thiết của các bạn nhỏ, khiến những điều mình cần học trở nên thật là dễ, thật là vui.', 0, 2),
(96, 'Bé Học Kiên Nhẫn - Đợi Thêm Chút Nữa', 'doi-them-chut-nua.jpg', 'Nhóm tác giả', 15, 0, 'Amazon', 'NXB Lao Động Xã Hội', '2013-01-01', 126, 'Ôi làm trẻ con đúng là một công việc nghiêm túc chứ còn gì nữa! Có biết bao điều cần học hỏi: học kiên nhẫn, học chia sẻ, học nhận lỗi, rồi lại còn học cả cách vệ sinh chăm sóc cơ thể chính mình. Hãy để bộ sách năm cuốn: Ôi Hôi quá, Tớ phải đi đây, Ai làm giường ướt?, Đợi thêm chút nữa, Ngôi sao của tớ trở thành người bạn đồng hành thân thiết của các bạn nhỏ, khiến những điều mình cần học trở nên thật là dễ, thật là vui.', 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `book_cate`
--

CREATE TABLE IF NOT EXISTS `book_cate` (
  `book_ID` int(9) NOT NULL,
  `cate_ID` int(9) NOT NULL,
  PRIMARY KEY (`book_ID`,`cate_ID`),
  KEY `book_ID` (`book_ID`),
  KEY `cate_ID` (`cate_ID`),
  KEY `book_ID_2` (`book_ID`),
  KEY `cate_ID_2` (`cate_ID`),
  KEY `book_ID_3` (`book_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_cate`
--

INSERT INTO `book_cate` (`book_ID`, `cate_ID`) VALUES
(1, 2),
(1, 11),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(6, 9),
(7, 2),
(7, 8),
(8, 6),
(9, 10),
(10, 2),
(11, 2),
(12, 2),
(13, 4),
(14, 2),
(14, 9),
(15, 1),
(15, 7),
(15, 9),
(18, 3),
(18, 4),
(18, 5),
(18, 13),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 4),
(29, 6),
(30, 4),
(31, 4),
(31, 6),
(32, 4),
(32, 6),
(33, 4),
(33, 6),
(34, 4),
(34, 6),
(35, 2),
(35, 4),
(36, 4),
(36, 6),
(37, 4),
(37, 6),
(38, 5),
(38, 8),
(38, 10),
(38, 12),
(39, 5),
(39, 8),
(39, 10),
(39, 12),
(40, 5),
(40, 10),
(41, 5),
(41, 10),
(41, 12),
(42, 5),
(42, 10),
(43, 5),
(43, 10),
(44, 4),
(44, 5),
(44, 10),
(45, 5),
(45, 10),
(46, 5),
(46, 10),
(47, 5),
(48, 5),
(48, 10),
(48, 12),
(49, 6),
(50, 6),
(51, 6),
(52, 6),
(53, 6),
(54, 6),
(55, 6),
(56, 6),
(57, 6),
(58, 6),
(59, 6),
(60, 6),
(61, 7),
(62, 1),
(62, 7),
(63, 1),
(63, 7),
(64, 7),
(65, 1),
(65, 7),
(66, 1),
(66, 7),
(67, 1),
(67, 7),
(68, 11),
(69, 11),
(70, 11),
(71, 11),
(72, 11),
(73, 11),
(74, 11),
(75, 13),
(76, 13),
(77, 13),
(78, 13),
(79, 13),
(80, 13),
(81, 13),
(82, 13),
(83, 13),
(84, 13),
(85, 13),
(86, 8),
(87, 8),
(88, 8),
(89, 8),
(90, 9),
(91, 9),
(92, 9),
(93, 9),
(94, 9),
(95, 9),
(96, 9);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cate_ID` int(9) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cate_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_ID`, `cate_name`) VALUES
(1, 'Sách Tiếng Anh'),
(2, 'Sách Văn Học - Tiểu Thuyết'),
(3, 'Sách Kinh Tế'),
(4, 'Sách Chuyên Ngành'),
(5, 'Sách Kỹ Năng Sống - Nghệ Thuật Sống'),
(6, 'Sách Giáo Khoa - Tham Khảo'),
(7, 'Sách Học Ngoại Ngữ - Từ Điển'),
(8, 'Sách Cho Tuổi Mới Lớn'),
(9, 'Sách Truyện Thiếu Nhi'),
(10, 'Sách Thường Thức - Đời Sống'),
(11, 'Truyện Tranh, Manga, Comic'),
(12, 'Sách Văn Hóa - Nghệ Thuật - Du Lịch'),
(13, 'Sách Nuôi Dạy Con');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cus_ID` int(9) NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(11) NOT NULL,
  `phone` text CHARACTER SET latin1 NOT NULL,
  `email` text CHARACTER SET latin1 NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `role` int(11) NOT NULL,
  `date` date NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`cus_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_ID`, `cus_name`, `sex`, `phone`, `email`, `address`, `birth`, `username`, `password`, `role`, `date`, `active`) VALUES
(8, 'Ngô Văn Thịnh', 1, '01679267503', 'mutdwlt@gmail.com', 'Đông Anh - Hà Nội', '1994-02-18', 'mutdwlt', '1621994', 1, '0000-00-00', 1),
(10, 'Wayner Rooney', 1, '7452xxxxxxx', 'rooney@gmail.com', 'Manchester City', '1985-10-04', 'rooney', '123456', 0, '0000-00-00', 1),
(11, 'Di Maria', 1, '01865248953', 'dimaria@gmail.com', 'Manchester', '1987-05-17', 'dimaria', 'dimaria', 0, '0000-00-00', 1),
(13, 'Ronaldinho', 1, '08452xxxxx', 'ronaldinho@gmail.com', 'Brazil', '1981-04-08', 'ronaldinho', 'ronaldinho', 0, '0000-00-00', 1),
(16, 'Nguyễn Khắc Khôi', 1, '0966032804', 'khoibn94@gmail.com', 'Bắc Ninh', '1994-03-31', 'khackhoi', 'khackhoi', 0, '0000-00-00', 1),
(17, 'Lionel Messi', 1, '01527xxxxxx', 'messi@gmail.com', 'Barcelona', '1987-06-25', 'king_leo', 'king_leo', 0, '2014-12-21', 1),
(18, 'Dư Minh Phương', 1, '154782369', 'phuong@gmail.com', 'Ninh Bình', '1994-11-16', 'duminhphuong', 'duminhphuong', 0, '2014-12-24', 1),
(19, 'Nguyễn Duy Hưng', 1, '0132456789', 'hung@gmail.com', 'Đống Đa - Hà Nội', '1994-03-13', 'hungpro9x', '123456', 0, '2014-12-24', 0),
(20, 'Trần Bảo Huy', 1, '01687017199', 'huy23121994@gmail.com', 'Nghệ An', '1994-12-23', 'huy23121994', 'huyhoang', 0, '2014-12-24', 1),
(21, 'CR7', 1, '01687017198', 'cr7@yahoo.com', 'Nghệ An', '2000-12-23', 'cr7abcxyz', '123456', 0, '2014-12-24', 1),
(22, 'Huyền Trang', 0, '012566954', 'trang@gmail.com', 'Nam Định', '0000-00-00', 'trang1154988', '123456', 0, '2014-12-24', 1),
(23, 'Hoài Thu', 0, '0156599666', 'thu2313142@yahoo.com.vn', 'Ninh Bình', '2001-01-23', 'thu21er3232', 'huyhoang', 0, '2014-12-24', 1),
(24, 'KaKa', 0, '0156661115', 'baohuy.baohuy.92@facebook.com', 'Hải Phòng', '1995-01-23', 'hihihehe', 'huyhoang', 0, '2014-12-24', 1),
(25, 'Kinh Khủng Khiếp', 1, '0168995445', 'huyhoang23121994@yahoo.com.vn', 'Hà Nam', '1995-12-23', 'chimsedinang', 'huyhoang', 0, '2014-12-24', 1),
(26, 'Đức Binh', 1, '0156659999', 'hyhy@gmail.com', 'Nghệ An', '1996-01-25', 'kobietdattengi', 'hihihehe', 0, '2014-12-24', 1),
(27, 'Doãn Chí Bình', 1, '0156984554', 'chibinh@gmail.com', 'Tung Của', '0269-12-26', 'binhdaica', 'binhdaica', 0, '2014-12-24', 1),
(28, 'Cô Cô', 1, '0156995558', 'coco@gmail.com', 'Cà Mau', '1994-01-23', 'cocoduongqua', 'duongqua', 0, '2014-12-24', 1),
(29, 'Dương Quá', 1, '01689875545', 'duongqua@gmail.com', 'Vũng Tàu', '2000-01-23', 'duongquacoco', 'hihihehe', 0, '2014-12-24', 1),
(30, 'giả nhất bình', 1, '0168995445', 'hanam@yahoo.com', 'Hà Nam', '1664-12-23', 'hanamyahoo', 'huyhoang', 0, '2014-12-24', 1),
(31, 'Trần Bảo Huy', 1, '01687017199', 'kakalot@gmail.com', 'Nghệ An', '1665-05-25', 'kakalotlot', 'huyhoang', 0, '2014-12-24', 1),
(32, 'Falcao', 1, '0169554665', 'falcao@gmail.com', 'England', '1887-08-25', 'falcaomanchester', 'huyhoang', 0, '2014-12-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderlines`
--

CREATE TABLE IF NOT EXISTS `orderlines` (
  `orderline_ID` int(9) NOT NULL AUTO_INCREMENT,
  `order_ID` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `book_ID` int(9) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`orderline_ID`),
  KEY `order_ID` (`order_ID`),
  KEY `order_ID_2` (`order_ID`),
  KEY `book_ID` (`book_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `orderlines`
--

INSERT INTO `orderlines` (`orderline_ID`, `order_ID`, `quantity`, `book_ID`, `price`) VALUES
(1, 1, 1, 2, 104),
(2, 1, 2, 7, 90),
(4, 3, 2, 7, 90),
(5, 3, 1, 10, 34),
(9, 6, 1, 2, 104),
(10, 6, 2, 6, 122),
(11, 6, 5, 7, 225),
(12, 7, 2, 3, 140),
(13, 8, 1, 3, 70),
(14, 8, 4, 7, 180),
(18, 12, 1, 6, 61),
(19, 13, 1, 2, 104),
(20, 13, 2, 11, 107),
(21, 14, 6, 8, 120),
(22, 15, 1, 11, 54),
(23, 16, 15, 11, 806),
(24, 16, 21, 62, 1449),
(25, 16, 15, 69, 375),
(26, 17, 1, 30, 59),
(27, 18, 1, 7, 45),
(28, 19, 1, 8, 20),
(29, 20, 1, 18, 195),
(30, 21, 1, 5, 120),
(31, 22, 1, 10, 34),
(32, 22, 1, 42, 55),
(33, 23, 1, 11, 54),
(34, 23, 1, 42, 55),
(35, 24, 1, 6, 61),
(36, 24, 1, 62, 69),
(37, 24, 1, 73, 25),
(38, 25, 1, 69, 25),
(39, 26, 1, 10, 34),
(40, 26, 1, 60, 35),
(41, 27, 1, 39, 425),
(42, 28, 1, 71, 25),
(43, 29, 1, 5, 120),
(44, 29, 1, 7, 45),
(45, 29, 1, 49, 86),
(46, 29, 1, 63, 96),
(47, 30, 1, 62, 69),
(48, 31, 1, 8, 20),
(49, 32, 1, 6, 61),
(50, 32, 1, 9, 60),
(51, 32, 1, 11, 54),
(52, 32, 1, 44, 94);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_ID` int(9) NOT NULL AUTO_INCREMENT,
  `cus_ID` int(9) NOT NULL,
  `date` date NOT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`order_ID`),
  KEY `cus_ID` (`cus_ID`),
  KEY `cus_ID_2` (`cus_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `cus_ID`, `date`, `total`, `status`) VALUES
(1, 17, '2014-12-21', 194, 1),
(3, 8, '2014-12-22', 124, 1),
(6, 8, '2014-12-22', 449, 0),
(7, 10, '2014-12-22', 140, 1),
(8, 10, '2014-12-23', 250, 1),
(12, 10, '2014-12-23', 60, 0),
(13, 18, '2014-12-24', 210, 1),
(14, 19, '2014-12-24', 114, 1),
(15, 20, '2014-12-24', 53, 0),
(16, 20, '2014-12-24', 2619, 1),
(17, 20, '2014-12-24', 58, 0),
(18, 20, '2014-12-24', 45, 0),
(19, 21, '2014-12-24', 19, 1),
(20, 21, '2014-12-24', 194, 1),
(21, 21, '2014-12-24', 120, 1),
(22, 21, '2014-12-24', 88, 1),
(23, 22, '2014-12-24', 107, 1),
(24, 23, '2014-12-24', 154, 1),
(25, 23, '2014-12-24', 25, 1),
(26, 24, '2014-12-24', 69, 1),
(27, 24, '2014-12-24', 424, 1),
(28, 27, '2014-12-24', 25, 1),
(29, 27, '2014-12-24', 346, 1),
(30, 29, '2014-12-24', 69, 1),
(31, 29, '2014-12-24', 19, 1),
(32, 29, '2014-12-24', 267, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_ID` int(11) NOT NULL AUTO_INCREMENT,
  `cus_ID` int(11) NOT NULL,
  `question` varchar(100) COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`report_ID`),
  KEY `cus_ID` (`cus_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_ID`, `cus_ID`, `question`) VALUES
(4, 10, '1'),
(5, 10, '1'),
(6, 10, 'hôm nay thứ mấy ?'),
(7, 10, 'Con bò có mấy chân ?'),
(8, 20, 'Hello');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_cate`
--
ALTER TABLE `book_cate`
  ADD CONSTRAINT `book_cate_ibfk_2` FOREIGN KEY (`cate_ID`) REFERENCES `category` (`cate_ID`),
  ADD CONSTRAINT `book_cate_ibfk_1` FOREIGN KEY (`book_ID`) REFERENCES `books` (`book_ID`);

--
-- Constraints for table `orderlines`
--
ALTER TABLE `orderlines`
  ADD CONSTRAINT `orderlines_ibfk_2` FOREIGN KEY (`book_ID`) REFERENCES `books` (`book_ID`),
  ADD CONSTRAINT `orderlines_ibfk_1` FOREIGN KEY (`order_ID`) REFERENCES `orders` (`order_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cus_ID`) REFERENCES `customers` (`cus_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `khachhang` FOREIGN KEY (`cus_ID`) REFERENCES `customers` (`cus_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
