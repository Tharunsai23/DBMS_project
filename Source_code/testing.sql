-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 11:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Admin_Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('PRANAV', 'AMRITA');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--



-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
create table PRODUCT (id INT primary key,
description varchar(3000) NOT NULL,
pname varchar(1000) NOT NULL,
price INT NOT NULL,
pro_aisle int NOT NULL, 
category VARCHAR (100) NOT NULL,
imglink VARCHAR (1500) NOT NULL );
insert into product values ('1','Maggi noodles are dried noodles fused with oil, and sold with a packet of flavorings. These noodles are usually eaten after being cooked in boiling water for 3 to 5 minutes or eaten straight from the packet.','Maggie 10 member pack','101','01','Groceries','https://images-eu.ssl-images-amazon.com/images/I/515UVLBfE2L._AC_SX184_.jpg');
insert into product values ('2','Happilo brings handpicked 100% Real Nuts for that crunchy, authentic and delicious taste. Quality guaranteed, it comes in a resealable bag to retain its crunch and freshness. Add a few in your diet and stay energized all day long.','Happilo 100% Natural Almonds','375','02','Groceries','https://www.jiomart.com/images/product/original/rvsjdrg34e/happilo-100-natural-premium-californian-almonds-500-g-value-pack-product-images-orvsjdrg34e-p590652675-0-202109022127.jpg');
insert into product values ('3','Start your morning with a wholesome bowl of Quaker Oats, which is the perfect breakfast porridge for the whole family. Add toppings of your favourite fruits and nuts to make it more delicious. Quaker Oats are easy to use and blend into almost any recipe, enhancing the nutritional value of any dish without compromising on taste.','Quaker Oats','201','01','Groceries','https://m.media-amazon.com/images/I/71fv2cQSSaL._AC_UL480_QL65_.jpg');
insert into product values ('4','Use the delicious MTR Vermicelli to make savoury upma or toss it with boiled vegetables for a wholesome pulao or make a creamy sweet kheer for the perfect dessert. It is made from the finest quality hard wheat semolina which gives your dish an irresistible aroma','Mtr Vermicelli','65','02','Groceries','https://m.media-amazon.com/images/I/61TNRvA5qbL._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('5','Tata Lite Low Sodium Salt has been a staple in kitchen for generations now. This salt was first manufactured by Tata in a vacuum-sealed pack, around the year 1983. Salt is one of the most important ingredients we use in food and cooking. It also adds taste and flavour to any dish','Tata Salt Lite','32','01','Groceries','https://www.jiomart.com/images/product/600x600/490347196/tata-lite-free-flow-iodised-salt-1-kg-0-20200910.jpg');
insert into product values('6','Nutrela Soya Chunks are extremely nutritious, healthy and are good sources of protein for vegetarians. Soya chunks are actually defatted soy flour product. This is known as a by-product of soybean oil.','Nutrela Soya Chunks','210','02','Groceries','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/68/84/1_2-wide_zoom.jpg');



insert into product values('7','Give yourself a complete boost with Ensure Vanilla Health Drink Powder 200 g. This drink mix is sure to add a dash of deliciousness to milk along with a punch of flavours. It makes milk taste so good that you will be left wanting for more. So go ahead, buy this product online now!','Ensure Health Suppliment','480','03','health_sup','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/32/261/1_1-wide_zoom.jpg');
insert into product values('8','Protinex has been developing a wide variety of healthy powders and drinks for adults for the past 60 years. The brand is popular in the country and offers vegetarian protein mix options. The Protinex vanilla powder is a vegetarian nutritional drink that can be made in minutes.','Protinex Drink','999','04','health_sup','https://m.media-amazon.com/images/I/71Mskrr-uuL._SX679_.jpg');
insert into product values('9','scientifically designed formula that contains high-quality protein for growing children. It is packed with the goodness of oats, almonds and essential nutrients. It provides nutrition to children above 7 years of age. It is a wholesome product that supports weight gain, improves health and leads to brain development.','PediaSure Health Drink','380','03','health_sup','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/86/99/1_1-wide_zoom.jpg');
insert into product values('10','NK Industries, a leading organization supplying specialized healthcare products. With our team of experts and and large research facilities, we aim to bring together developed technologies with excellence to produce medical products for utmost qualit','Face mask',' 80','04','health_sup','https://5.imimg.com/data5/GV/YT/UW/SELLER-2991505/kam-500x500.PNG');
insert into product values('11','Nivea Shea Butter Smooth Milk Body Lotion for Dry Skin is enriched with the goodness of Shea Butter, Gingko extract and Vitamin E that helps you keep your skin hydrated, thus giving it the right nourishment and freshness. So what are you waiting for. Buy the product ','Vaseliene Body','60','03','health_sup','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/65/28/1_6-wide_zoom.jpg');
insert into PRODUCT values('12','Tri-Activ Disinfectant Spray keeps you protected from bacteria and viruses found in the environment. It provides 99.9% protection against these germs that are usually not visible to the naked eye. These germs settle on all surfaces and can cause diseases. The Tri-Activ Disinfectant Spray kills these viruses, bacteria and other germs and leaves you with a fresh fragrance','Sanitizer Spray','150','04','health_sup','https://i2.wp.com/gina-michele.com/wp-content/uploads/2020/03/How-to-Make-Hand-Sanitizer-Spray5.jpg?resize=700,700');

insert into product values ('13','Life is sweeter with the classic taste of Hersheys Chocolate Syrup. Treat yourself to genuine chocolate-flavoured goodness by adding Hersheys Syrup. Use this easy-squeeze bottle to create cold glasses of chocolate milk, chocolate floats, chocolate sundaes, rich hot cocoa and more! ','Hersheys Chocolate Syrup','85','7','dairy','https://m.media-amazon.com/images/I/71pouMfvcfS._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('14','Bagrrys Original & Healthier Cornflakes Plus - The taste of original Cornflakes with the added goodness of fibre! Try the new Bagrrys Original & Healthier Cornflakes Plus which is more than just your regular Corn Flakes.','Corn Flakes',' 125','8','dairy','https://m.media-amazon.com/images/I/71HsQr-pYjL._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('15','Ghee is a class of clarified butter that originated in ancient India. It is commonly used in Indian cooking. Heritage Agmark Special Grade Ghee can be swapped for vegetable oil or coconut oil in baked goods or can be used for sautéing and deep-frying.','Mother Dairy',' 401','7','dairy','https://m.media-amazon.com/images/I/91idhnLyJqL._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('16','Cadbury Dairy Milk Chocolate is for those everyday moments of joy that you want to share with your near and dear ones with something sweet. Just one bite will take you into the world of warmth, happiness, and spontaneous fun. ','Dairy Milk',' 40','8','dairy','https://m.media-amazon.com/images/I/61VNtSQCi8L._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('17','ve in to your sweet cravings with Sunfeast Dark Fantasy Choco Fill Cookies. These cookies are crunchy yet delicate in texture. They are a perfect accompaniment to your tea or coffee. These cookies are prepared using the finest ingredients and its hygienic packaging  ', 'Dark Fantasy',' 60','7','dairy','https://www.jiomart.com/images/product/600x600/491319789/sunfeast-dark-fantasy-choco-fill-cookies-300-g-0-20210805.jpg');
insert into product values ('18','Sundrop Creamy Peanut Butter is a tasty bread spread made of roasted peanuts (90% by weight). It is tasty and healthy as well because it has zero cholesterol and zero trans-fats. Sundrop Creamy Peanut Butter is a power-packed spread as it is loaded with proteins   ', 'Peanut Butter',' 101','8','dairy','https://m.media-amazon.com/images/I/71pKvp1SOYL._AC_UL480_FMwebp_QL65_.jpg');



insert into product values ('19','The refreshing Sprite has a sharp taste which does not forget to hit you straight on your taste buds making the drink more appetising. Prepared under highly hygienic conditions, this drink satisfies the love for lemon. Sprite acts as an energy carbonated drink'   , 'Sprite',' 60','9','beverages','https://m.media-amazon.com/images/I/61YtMzKQZDL._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('20','Authentic, timeless and absolutely delicious, this refreshing juice made from perfectly ripe, natural fruits. You have the best of mix fruits in one sip. You have the health benefits of different fruits in one bottle. Thats what Minute Maid Mixed Fruit Juice is all about.'   , 'Minute Maid',' 80','10','beverages','https://m.media-amazon.com/images/I/71zHrg0MPTL._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('21','f you cant find a jetpack, get yourself Paper Boat Thandai. Its an instant energy booster, and its melon seeds are full of protein, iron, and vitamins. With all those almonds in there, Thandai is also rich in antioxidants and Vitamin '   , 'Paper Boat - Mango',' 40','9','beverages','https://www.jiomart.com/images/product/600x600/491321312/paper-boat-aamras-mango-drink-1-l-0-20210806.jpg');
insert into product values ('22','Enjoy the sweet, tangy flavours of Pineapples captured within a pulpy, natural fruit juice with B Natural Pineapple Juice. Made with 100% Indian fruits and 0% Concentrate, B Natural Pineapple Juice brings you the deliciousness of natural pineapples'   , 'B-Natural Drink ',' 150','10','beverages','https://cdn.shopify.com/s/files/1/0173/7644/4470/products/BNNCTPAPPL1000_8901725100124_1_1024x1024.jpg?v=1632223333');
insert into product values ('23','Introducing Red Bull, an energy drink that can make you feel alive, awake and active instantly. It can be enjoyed as a drink or can be used in the preparation of cocktails. The blue and silver packaging lends a funky feel to this product. So go ahead, buy this Red Bull Energy Drink today.'   , 'Redbull Energy Drink ',' 434','9','beverages','https://m.media-amazon.com/images/I/71RUxMge+3L._AC_UL480_FMwebp_QL65_.jpg');
insert into product values ('24','Feel refreshed with the heavenly taste of B Natural Mixed Fruit Juice. It tastes amazing, gives you an instant energy kick and quenches your thirst. It is also made from the finest quality of fruits and combines quality and affordability at the same time. So whether you are a child or an adult, this fruit juice will satisfy your cravings for fresh fruits any time of the year'   , 'B-natural Mixed Drink',' 110','10','beverages','https://m.media-amazon.com/images/I/91Zz6QbhjdL._AC_UL480_FMwebp_QL65_.jpg');

insert into PRODUCT values ('25','Potato is a root vegetable and the most versatile of all. It is widely used across Indian kitchens paired with numerous other vegetables for preparation of several delicacies. Be it Brinjal, Cauliflower, Tomato, Onion or be it Soyabean Chunks or the Spinach clan- Potatoes goes with all for delicious cuisines. Buy Potato per kg online now. ','Potato',' 30','5','FandV','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/95/2401/11_1-wide_zoom.jpg');
insert into PRODUCT values ('26','The beauty of an Onion is that it can go just about anywhere. Cut it into thin slices to top off your favourite burger or hot dog, or chop it into little cubes to bring out the sweetness in curry dishes. Chopped Onions are perfect for fish dishes, quiche, stews and chili. Onions can be roasted whole until tender and then chopped, or caramelized by slowly cooking them in butter for a delicious treat for a delicious treat. They are also delicious when dipped in batter and deep-fried! So, go ahead, buy Onion 1 kg online now! ','Onion','45','6','FandV','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/09/6401/11-wide_zoom.jpg');
insert into PRODUCT values ('27','Apples are delicious, nutritious, and fun to eat. Eat one for a satisfying snack when youre in a hurry and eating on the go. You can add them to your cereal in the morning for a tasty crunch, or eat them after school or at work with a ploughmans cheese and pickle sandwich. You can cook apples in a variety of ways, from baked in a crumble to making an apple pie. So, go ahead, buy Apple Indian 6 pcs (Pack) (Approx 750 g - 950 g) online now!','Apple','100','5','FandV','https://images-prod.healthline.com/hlcmsresource/images/AN_images/health-benefits-of-apples-1296x728-feature.jpg');
insert into PRODUCT values ('28','Strawberries are a warm-weather favourite for so many reasons - theyre bright and beautiful; their flavour is a one-of-a-kind, sweet and tart combo, and its hard not to smile when faced with a tray of luscious sun-ripened berries. Cooking with strawberries is a sure way to add a little something special to your meals. For starters, try adding them to your favourite salads in the spring and summer - toss fresh summer strawberries in creamy dressing with nutty walnuts, mild goat cheese, and crunchy orange segments. So, go ahead, buy Strawberry (Pack) (Approx 170 g - 250 g) online now! ','Strawberry','80','6','FandV','https://www.macmillandictionary.com/external/slideshow/full/160279_full.jpg');
insert into PRODUCT values ('29','Bitter Gourd is a green-skinned vegetable with white to translucent flesh and a taste that fits its name. It has long been used in Asian Indian styles of cooking. You can steam, boil, stir-fry, braise, pickle, stuff, or curry bitter gourd for a variety of nutritious and delicious dishes. So, go ahead, buy Bitter Gourd 500 g online now! ','Bitter Gourd','60','6','FandV','https://static.toiimg.com/photo/77876184.cms');
insert into PRODUCT values ('30','Kiwis are an extremely versatile fruit. From its fuzzy brown skin to its firm deep green flesh, the Baby Kiwi is a sweet and juicy burst of flavour. Baby Kiwi is also the perfect base for smoothies; just throw in some yoghurt, fruit chunks, some honey, and some ice cubes for a delicious refreshment! So, go ahead, buy Baby Kiwi Imported 6 pcs (Approx. 400 g - 550 g) online now! ','Kiwi','150','5','FandV','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/68/73/1_1-wide_zoom.jpg');

insert into PRODUCT values ('31','This easy to use Chakaachak Floor Squeegee Wiper instantly cleans away water or any spilled liquid from the floor in just one swipe. Its sharp rubber blade creates a tight grip on the surface that helps to easily move liquid and leave a dry surface. Its lightweight and comfortable grip is used to clean any wet surfaces with ease. So go ahead and buy this product online today! ','Floor Wiper','100','8','candh','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/27/75/1-wide_zoom.jpg');
insert into PRODUCT values ('32','For every household cleanliness is of utmost importance. Make your complete house clean and tidy with MaxKleen Floral Bliss Disinfectant Floor Cleaner 975 ml (Get 1 500 ml Free). It helps to remove stains on the floor while leaving it sparkling clean. It helps in giving your home a visibly clean surface. So go ahead and buy this product online today! ','Floor Wash',' 280','7','candh','https://5.imimg.com/data5/IR/NE/RG/SELLER-74523754/house-keeping-liquied-500x500.jpg');
insert into PRODUCT values ('33',' Chakaachak Plastic Dustpan is comfortable to adjust on any surface to collect dust. This is an ideal instrument perfect to clean up spills and dirt. It is made from the high-grade material which ensures long-lasting life. So go ahead and buy this product online today! ','Dust Pan','100','8','candh','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/48/651/1-wide_zoom.jpg');
insert into PRODUCT values ('34','Good Knight Gold Flash Mosquito Repellent Refill can be used in all electronic mosquito repellent machines but works best when used with Good Knight Activ+ Machine. It protects you and your family from diseases that are transmitted by mosquitoes. It has an advanced formula that causes no effect on the human body but kills the insects. Keep your house mosquito-free all day. So go ahead and buy this product online today! ','Goodnight Unit','80','7','candh','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/80/842/1-wide_zoom.jpg');
insert into PRODUCT values ('35','Monkey 555 Appy CAT Natural Grass Broom , knitted broom with the superfine tall garohill grass for faster & better sweeping.With the lengthy & tall grass, this broom is suitable for sweeping large areas. Due to the length of the broom, it helps in cleaning normal roofs as well. ','Broom','60','8','candh','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/41/851/1-wide_zoom.jpg');
insert into PRODUCT values ('36','Keep your home fresh and germ-free with Lizol Lavender Disinfectant Surface Cleaner. It contains a distinctive formulation that kills 99. 9 Percent germs and gives 10 times better cleaning and germ protection. It is perfect for floors, tiles, sinks, kitchen counters and all other washable surfaces in your home. It saves you from harmful germs whilst keeping your home clean. It removes odour and leaves a pleasant fragrance. So go ahead and buy this product online today! ','Kitchen Cleaner',' 150','7','candh','https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/40/131/1_1-wide_zoom.jpg');
select * from product;