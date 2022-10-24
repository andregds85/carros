--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `image_order` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `image_name`, `image_path`, `image_order`, `date`) VALUES
(2, 'Image6', 'images/image6.jpeg', 3, '2018-09-16 10:46:21'),
(3, 'Image1', 'images/image1.jpeg', 5, '2018-09-16 10:45:34'),
(4, 'Image2', 'images/image2.jpeg', 4, '2018-09-16 10:45:34'),
(5, 'Image3', 'images/image3.jpeg', 6, '2018-09-16 10:45:34'),
(6, 'Image4', 'images/image4.jpeg', 2, '2018-09-16 10:45:34'),
(9, 'Image5', 'images/image5.jpg', 1, '2018-09-16 10:45:34');

ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
