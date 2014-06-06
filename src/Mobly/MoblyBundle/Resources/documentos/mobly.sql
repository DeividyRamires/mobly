-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7


--
-- Banco de Dados: `mobly`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `cost` double(10,2) NOT NULL,
  `discount` double(10,2) DEFAULT NULL,
  `purchase_order_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`,`purchase_order_id`),
  UNIQUE KEY `item_number` (`item_number`),
  KEY `fk_item_purchase_order_idx1` (`purchase_order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`item_id`, `item_number`, `created_at`, `updated_at`, `cost`, `discount`, `purchase_order_id`) VALUES
(4, 1, '2014-06-05 08:38:29', NULL, 4.00, 1.00, 11),
(5, 2, '2014-06-05 08:38:29', NULL, 3.00, 0.00, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchase_order`
--

CREATE TABLE IF NOT EXISTS `purchase_order` (
  `purchase_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_number` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `total_discount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`purchase_order_id`),
  UNIQUE KEY `order_number` (`order_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `purchase_order`
--

INSERT INTO `purchase_order` (`purchase_order_id`, `order_number`, `created_at`, `updated_at`, `total_cost`, `total_discount`) VALUES
(3, 2, '2014-06-02 10:27:09', NULL, 22.00, 22.00),
(4, 4, '2014-06-02 10:48:41', NULL, 4.00, 4.00),
(5, 5, '2014-06-02 10:57:24', NULL, 5.00, 5.00),
(11, 21, '2014-06-05 08:38:29', NULL, 7.00, 1.00);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_purchase_order` FOREIGN KEY (`purchase_order_id`) REFERENCES `purchase_order` (`purchase_order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;


