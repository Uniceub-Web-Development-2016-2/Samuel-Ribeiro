-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26-Nov-2016 às 06:57
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardwareboss`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_comments`
--

CREATE TABLE `tb_comments` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `conteudo` text NOT NULL,
  `autor` int(11) NOT NULL,
  `data` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_comments`
--

INSERT INTO `tb_comments` (`id`, `titulo`, `conteudo`, `autor`, `data`, `post_id`) VALUES
(1, 'Samuelito', 'Samulzooooon', 1, '10/10/2015 - 10:10:20', 13),
(3, 'asd', 'asdasd', 1, 'asd', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pagina`
--

CREATE TABLE `tb_pagina` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pagina`
--

INSERT INTO `tb_pagina` (`id`, `nome`, `titulo`) VALUES
(1, 'cadastro', 'Cadastro de Usuarios'),
(2, 'lancamentos', 'Lancamentos'),
(3, 'review', 'Reviews'),
(4, 'artigos', 'Artigos'),
(5, 'games', 'Games'),
(6, 'comparacao', 'Comparacao'),
(7, 'perfil', 'Perfil de Usuario'),
(8, 'admin', 'Painel de Controle'),
(9, 'post', 'Publicacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_posts`
--

CREATE TABLE `tb_posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` int(11) NOT NULL,
  `conteudo` text NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `IsExcluido` tinyint(1) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_posts`
--

INSERT INTO `tb_posts` (`id`, `titulo`, `autor`, `conteudo`, `imagem`, `IsExcluido`, `data`, `categoria`) VALUES
(18, 'GTX 1080 TI WINDFORCE', 1, '<p>&nbsp; &nbsp; &nbsp;Um Caso de teste &eacute; um conjunto de entradas de teste, condi&ccedil;&otilde;es de execu&ccedil;&atilde;o e resultados esperados desenvolvidos para um objetivo espec&iacute;fico como, por exemplo, testar o caminho de determinado programa ou verificar o cumprimento de um requisito espec&iacute;fico. Os casos de teste para o teste funcional s&atilde;o derivados de casos de uso do objetivo do teste. <br />&nbsp; &nbsp; &nbsp;&Eacute; necess&aacute;rio desenvolver casos de teste para cada cen&aacute;rio de caso de uso. Os cen&aacute;rios de caso de uso s&atilde;o identificados atrav&eacute;s da descri&ccedil;&atilde;o dos caminhos que percorrer o fluxo b&aacute;sico e os fluxos alternativos, do in&iacute;cio ao fim, atrav&eacute;s do caso de uso. No diagrama a seguir, por exemplo, os v&aacute;rios caminhos atrav&eacute;s de um caso de uso, que refletem o fluxo b&aacute;sico e os fluxos alternativos, s&atilde;o representados com as setas. <br />&nbsp; &nbsp; &nbsp;O fluxo b&aacute;sico, representado pela linha preta e reta &eacute; o caminho mais simples atrav&eacute;s do caso de uso. Cada fluxo alternativo come&ccedil;a no fluxo b&aacute;sico e, depois, de acordo com uma condi&ccedil;&atilde;o espec&iacute;fica, &eacute; executado. Os fluxos alternativos podem retornar ao fluxo b&aacute;sico (fluxos alternativos 1 e 3), podem originar-se de outro fluxo alternativo (fluxo alternativo 2), ou podem terminar o caso de uso sem retornar a um fluxo (fluxos alternativos 2 e 4).&nbsp;</p>', '', 0, '26/11/2016 - 06:51:03', ''),
(19, 'LanÃ§amento GTX 980 TI Dragon Edition', 1, '<p>&nbsp; &nbsp; &nbsp;Um Caso de teste &eacute; um conjunto de entradas de teste, condi&ccedil;&otilde;es de execu&ccedil;&atilde;o e resultados esperados desenvolvidos para um objetivo espec&iacute;fico como, por exemplo, testar o caminho de determinado programa ou verificar o cumprimento de um requisito espec&iacute;fico. <br />&nbsp; &nbsp; &nbsp;Os casos de teste para o teste funcional s&atilde;o derivados de casos de uso do objetivo do teste. &Eacute; necess&aacute;rio desenvolver casos de teste para cada cen&aacute;rio de caso de uso. Os cen&aacute;rios de caso de uso s&atilde;o identificados atrav&eacute;s da descri&ccedil;&atilde;o dos caminhos que percorrer o fluxo b&aacute;sico e os fluxos alternativos, do in&iacute;cio ao fim, atrav&eacute;s do caso de uso. No diagrama a seguir, por exemplo, os v&aacute;rios caminhos atrav&eacute;s de um caso de uso, que refletem o fluxo b&aacute;sico e os fluxos alternativos, s&atilde;o representados com as setas. O fluxo b&aacute;sico, representado pela linha preta e reta &eacute; o caminho mais simples atrav&eacute;s do caso de uso. Cada fluxo alternativo come&ccedil;a no fluxo b&aacute;sico e, depois, de acordo com uma condi&ccedil;&atilde;o espec&iacute;fica, &eacute; executado. Os fluxos alternativos podem retornar ao fluxo b&aacute;sico (fluxos alternativos 1 e 3), podem originar-se de outro fluxo alternativo (fluxo alternativo 2), ou podem terminar o caso de uso sem retornar a um fluxo (fluxos alternativos 2 e 4).&nbsp;</p>', '', 0, '26/11/2016 - 06:53:47', ''),
(20, 'Review BlackWidow Overwrath Edition', 1, '<p>Um Caso de teste &eacute; um conjunto de entradas de teste, condi&ccedil;&otilde;es de execu&ccedil;&atilde;o e resultados esperados desenvolvidos para um objetivo espec&iacute;fico como, por exemplo, testar o caminho de determinado programa ou verificar o cumprimento de um requisito espec&iacute;fico.</p>\r\n<p>Os casos de teste para o teste funcional s&atilde;o derivados de casos de uso do objetivo do teste. &Eacute; necess&aacute;rio desenvolver casos de teste para cada cen&aacute;rio de caso de uso. Os cen&aacute;rios de caso de uso s&atilde;o identificados atrav&eacute;s da descri&ccedil;&atilde;o dos caminhos que percorrer o fluxo b&aacute;sico e os fluxos alternativos, do in&iacute;cio ao fim, atrav&eacute;s do caso de uso. No diagrama a seguir, por exemplo, os v&aacute;rios caminhos atrav&eacute;s de um caso de uso, que refletem o fluxo b&aacute;sico e os fluxos alternativos, s&atilde;o representados com as setas. O fluxo b&aacute;sico, representado pela linha preta e reta &eacute; o caminho mais simples atrav&eacute;s do caso de uso. Cada fluxo alternativo come&ccedil;a no fluxo b&aacute;sico e, depois, de acordo com uma condi&ccedil;&atilde;o espec&iacute;fica, &eacute; executado. Os fluxos alternativos podem retornar ao fluxo b&aacute;sico (fluxos alternativos 1 e 3), podem originar-se de outro fluxo alternativo (fluxo alternativo 2), ou podem terminar o caso de uso sem retornar a um fluxo (fluxos alternativos 2 e 4).&nbsp;</p>', '', 0, '26/11/2016 - 06:55:30', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genero` enum('m','f') COLLATE utf8_unicode_ci NOT NULL,
  `datanasc` text COLLATE utf8_unicode_ci NOT NULL,
  `permissao` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`id`, `usuario`, `nome`, `senha`, `email`, `genero`, `datanasc`, `permissao`) VALUES
(1, 'admin', 'Samuel', 'admin', 'admin@hb.com.br', 'm', '19/06/1995', 0),
(10, 'samuelrds', 'samuel', 'samuel', 'samuel_ribeirosantos@hotmail.com', 'm', '29/06/1999', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vga`
--

CREATE TABLE `tb_vga` (
  `id` int(11) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `gpu` varchar(250) NOT NULL,
  `technology` varchar(250) NOT NULL,
  `transistors` varchar(250) NOT NULL,
  `bandwidth` varchar(250) NOT NULL,
  `gpuclock` varchar(250) NOT NULL,
  `memoryclock` varchar(250) NOT NULL,
  `boostclock` varchar(250) NOT NULL,
  `shaders` varchar(250) NOT NULL,
  `memorytype` varchar(250) NOT NULL,
  `memorysize` varchar(250) NOT NULL,
  `buswidth` varchar(250) NOT NULL,
  `releasedate` varchar(250) NOT NULL,
  `minimumpowersupply` varchar(250) NOT NULL,
  `recommendedpowersupply` varchar(250) NOT NULL,
  `driver` varchar(250) NOT NULL,
  `io` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `imagem` longblob NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_vga`
--

INSERT INTO `tb_vga` (`id`, `brand`, `model`, `gpu`, `technology`, `transistors`, `bandwidth`, `gpuclock`, `memoryclock`, `boostclock`, `shaders`, `memorytype`, `memorysize`, `buswidth`, `releasedate`, `minimumpowersupply`, `recommendedpowersupply`, `driver`, `io`, `website`, `imagem`, `nome`) VALUES
(3, 'Zotac', 'ZT-P10800C-10P', 'GP101', '16nm', '7200M', '320.3 GB/s', '1683 Mhz', '1251 Mhz', '1823 MHz', '256 Bit', '', '8192 MB', '256 Bit', 'May 7, 2016', '500w', '600w', '372.70', '-', 'Nvidia GTX 1080 AMP', '', 'Nvidia GTX 1080 AMP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comments`
--
ALTER TABLE `tb_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pagina`
--
ALTER TABLE `tb_pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_vga`
--
ALTER TABLE `tb_vga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comments`
--
ALTER TABLE `tb_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_pagina`
--
ALTER TABLE `tb_pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_vga`
--
ALTER TABLE `tb_vga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
