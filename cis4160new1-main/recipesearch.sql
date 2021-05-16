-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 02:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipesearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(14) NOT NULL,
  `recipe_name` text NOT NULL,
  `recipe_description` text NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `recipe_directions` text NOT NULL,
  `recipe_nutrition` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `recipe_name`, `recipe_description`, `recipe_ingredients`, `recipe_directions`, `recipe_nutrition`, `img`) VALUES
(1, 'Sweet and Sour Grilled Chicken', 'Great sweet and sour chicken dish cooked on the grill--quick, easy, and tasty.', '½ cup packed brown sugar, ¼ cup olive oil ,¼ cup apple cider vinegar ,3 tablespoons mustard ,1 tablespoon lime juice ,1 tablespoon lemon juice ,1 clove garlic, minced ,1 teaspoon seasoned salt ,1 teaspoon ground black pepper ,6 (5 ounce) bone-in chicken thighs)', ' Step 1: Combine brown sugar, oil, vinegar, mustard, lime juice, lemon juice, garlic, seasoned salt, and pepper in a medium bowl and mix well. Step 2: Place chicken in a glass or ceramic bowl and cover with sauce. Cover the bowl with plastic wrap and marinate in the refrigerator, 8 hours or overnight. Step 3: Preheat an outdoor grill for medium heat and lightly oil the grate. Step 4: Remove chicken from the marinade and shake off excess. Discard the remaining marinade. Step 5: Cook chicken on the preheated grill until chicken is no longer pink in the center and the juices run clear, 8 to 10 minutes per side. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C).', 'Per Serving: 353 calories; protein 24.3g; carbohydrates 19.5g; fat 19.3g; cholesterol 87.4mg; sodium 327.5mg.', 'chicken.PNG'),
(2, 'Lemon Rosemary Salmon', 'This is the perfect romantic dinner for two when served with an Oregon Pinot Noir, crusty bread, wild rice, and salad.', '1 lemon (thinly sliced), 4 sprigs fresh rosemary, 2 salmon fillets (bones and skin removed), coarse salt to taste, 1 tablespoon olive oil, or as needed', 'Step 1: Preheat oven to 400 degrees F (200 degrees C).Step 2: Arrange half the lemon slices in a single layer in a baking dish. Layer with 2 sprigs rosemary, and top with salmon fillets. Sprinkle salmon with salt, layer with remaining rosemary sprigs, and top with remaining lemon slices. Drizzle with olive oil. Step 3:Bake 20 minutes in the preheated oven, or until fish is easily flaked with a fork.', 'Per Serving: 257 calories; protein 20.5g; carbohydrates 6.1g; fat 18g; cholesterol 56.4mg; sodium 1016.7mg.', 'salmon.PNG'),
(3, 'Air Fryer Ranch Pork Chops', 'What could be simpler than ranch seasoning mix and 10 minutes in the air fryer? I prefer my chops slightly pink to ensure juiciness, but feel free to add an extra minute on each side for well done. Try different varieties of ranch mix (like spicy or bacon) to change up the flavor.', '4 boneless, center-cut pork chops, 1-inch thick, cooking spray, 2 teaspoons dry ranch salad dressing mix (such as Hidden Valley Ranch®),aluminum foil', 'Step 1: Place pork chops on a plate and lightly spray both sides with cooking spray. Sprinkle both sides with ranch seasoning mix and let sit at room temperature for 10 minutes. Step 2: Spray the basket of an air fryer with cooking spray and preheat the air fryer to 390 degrees F (200 degrees C). Step 3: Place chops in the preheated air fryer, working in batches if necessary, to ensure fryer is not overcrowded. Step 4: Cook for 5 minutes. Flip chops and cook 5 minutes more. Let rest on a foil-covered plate for 5 minutes before serving.', 'Per Serving: 260 calories; protein 40.8g; carbohydrates 0.6g; fat 9.1g; cholesterol 106.6mg; sodium 148.2mg.', 'pork.PNG'),
(4, 'Lemon Ricotta Pasta with Vegetables', 'This is my \"kitchen sink\" pasta dish, you can use whatever veggies or cheeses you have on hand. The combo sounds a little odd but youll be surprised of the amount of flavor you get!', '1 (16 ounce) package penne pasta\r\n\r\n¼ cup unsalted butter\r\n\r\n1 (8 ounce) package sliced fresh mushrooms\r\n\r\n1 small red onion, diced\r\n\r\n½ medium green bell pepper, diced\r\n\r\n3 cloves garlic, minced\r\n\r\n1 teaspoon salt, or to taste\r\n\r\n1 teaspoon freshly ground black pepper, or to taste\r\n\r\n1 teaspoon Italian seasoning, or more to taste\r\n\r\ncrushed red chili pepper to taste (optional)\r\n\r\n3 cups fresh spinach, or to taste, stems removed\r\n\r\n1 medium Roma tomato, diced\r\n\r\n1 (15 ounce) carton ricotta cheese\r\n\r\n1 pinch garlic powder, or to taste\r\n\r\n1 pinch onion powder, or to taste\r\n\r\n¼ cup Parmesan cheese\r\n\r\n1 large lemon, zested and juiced\r\n\r\n¼ cup cubed fresh mozzarella', 'Step 1\r\nBring a large pot of lightly salted water to a boil. Add penne and cook, stirring occasionally, until tender yet firm to the bite, about 11 minutes.\r\n\r\nStep 2\r\nMeanwhile, melt butter in a large skillet over medium heat. Add mushrooms, onion, bell pepper, and garlic; saute until softened, 5 to 10 minutes. Season with salt, pepper, 1 teaspoon Italian seasoning, and crushed red chili pepper. Add spinach and tomato towards the end of the saute process and cook until spinach has wilted.\r\n\r\nStep 3\r\nSeason ricotta cheese with more Italian seasoning, garlic powder, and onion powder. Stir seasoned ricotta cheese into the vegetable mixture with Parmesan cheese, lemon zest, and lemon juice. Heat over medium-high heat until heated all the way through, 3 to 5 minutes.\r\n\r\nStep 4\r\nPlate and top with mozzarella.', 'Per Serving: 370 calories; protein 17g; carbohydrates 49.1g; fat 13g; cholesterol 36.9mg; sodium 417mg.', 'pasta.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
