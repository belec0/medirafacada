
-- Antes de tudo, crie um banco de dados em branco com o nome "computador"

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `computador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

CREATE TABLE `pecas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_peca` varchar(100) NOT NULL,
  `nome_peca` varchar(100) NOT NULL,
  `valor_unidade` float NOT NULL,
  `valor_frete` float NOT NULL,
  `adquirido` tinyint(1) NOT NULL,
  `url_site` varchar(100) NOT NULL,
  `em_promocao` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`id`, `user_id`, `tipo_peca`, `nome_peca`, `valor_unidade`, `valor_frete`, `adquirido`, `url_site`, `em_promocao`) VALUES
(1, 12, 'teste', 'teste', 10, 10, 0, 'a.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registered_users`
--

INSERT INTO `registered_users` (`id`, `user_name`, `display_name`, `password`, `email`) VALUES
(1, 'teste', 'Kate Winslet', '698dc19d489c4e4db73e28a713eab07b', 'kate@wince.com'),
(12, 'teste', 'teste', '202cb962ac59075b964b07152d234b70', 'anderssonweslley123@gmail.com'),
(14, 'beleco', 'beleco', '81dc9bdb52d04dc20036dbd8313ed055', 'pinoco@pinoco.vom');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pecas`
--
ALTER TABLE `pecas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pecas`
--
ALTER TABLE `pecas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;