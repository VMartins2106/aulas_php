-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jun-2022 às 19:03
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdclinicavet2705`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbanimal`
--

CREATE TABLE `tbanimal` (
  `CodAnimal` int(11) NOT NULL,
  `NomeAnimal` varchar(50) DEFAULT NULL,
  `CodTipo` int(11) DEFAULT NULL,
  `CodResp` int(11) DEFAULT NULL,
  `CodRaca` int(11) DEFAULT NULL,
  `DataCadastro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbatendimento`
--

CREATE TABLE `tbatendimento` (
  `CodAtendimento` int(11) NOT NULL,
  `CodAnimal` int(11) DEFAULT NULL,
  `DataAtend` varchar(10) DEFAULT NULL,
  `DiagnosticoAtend` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbracaanimal`
--

CREATE TABLE `tbracaanimal` (
  `CodRaca` int(11) NOT NULL,
  `RacaAnimal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbracaanimal`
--

INSERT INTO `tbracaanimal` (`CodRaca`, `RacaAnimal`) VALUES
(1, 'SRD'),
(2, 'Labrador'),
(3, 'Pug'),
(4, 'Angora'),
(5, 'Siamês');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbresponsavel`
--

CREATE TABLE `tbresponsavel` (
  `CodResp` int(11) NOT NULL,
  `NomeResp` varchar(50) DEFAULT NULL,
  `EndResp` varchar(50) DEFAULT NULL,
  `BairoResp` varchar(50) DEFAULT NULL,
  `CidadeResp` varchar(50) DEFAULT NULL,
  `EstadoResp` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbresponsavel`
--

INSERT INTO `tbresponsavel` (`CodResp`, `NomeResp`, `EndResp`, `BairoResp`, `CidadeResp`, `EstadoResp`) VALUES
(1, 'Rovilson', 'Rua 1', 'Pirituba', 'São Paulo', 'SP'),
(2, 'Maria', 'Rua 2', 'Centro', 'Franco da Rocha', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipoanimal`
--

CREATE TABLE `tbtipoanimal` (
  `CodTipo` int(11) NOT NULL,
  `TipoAnimal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtipoanimal`
--

INSERT INTO `tbtipoanimal` (`CodTipo`, `TipoAnimal`) VALUES
(1, 'Cachorro'),
(2, 'Gato');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD PRIMARY KEY (`CodAnimal`),
  ADD KEY `fkCodRaca` (`CodRaca`),
  ADD KEY `fkCodResp` (`CodResp`),
  ADD KEY `fkCodTipo` (`CodTipo`);

--
-- Índices para tabela `tbatendimento`
--
ALTER TABLE `tbatendimento`
  ADD PRIMARY KEY (`CodAtendimento`);

--
-- Índices para tabela `tbracaanimal`
--
ALTER TABLE `tbracaanimal`
  ADD PRIMARY KEY (`CodRaca`);

--
-- Índices para tabela `tbresponsavel`
--
ALTER TABLE `tbresponsavel`
  ADD PRIMARY KEY (`CodResp`);

--
-- Índices para tabela `tbtipoanimal`
--
ALTER TABLE `tbtipoanimal`
  ADD PRIMARY KEY (`CodTipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  MODIFY `CodAnimal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbatendimento`
--
ALTER TABLE `tbatendimento`
  MODIFY `CodAtendimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbracaanimal`
--
ALTER TABLE `tbracaanimal`
  MODIFY `CodRaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbresponsavel`
--
ALTER TABLE `tbresponsavel`
  MODIFY `CodResp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbtipoanimal`
--
ALTER TABLE `tbtipoanimal`
  MODIFY `CodTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbanimal`
--
ALTER TABLE `tbanimal`
  ADD CONSTRAINT `fkCodRaca` FOREIGN KEY (`CodRaca`) REFERENCES `tbracaanimal` (`CodRaca`),
  ADD CONSTRAINT `fkCodResp` FOREIGN KEY (`CodResp`) REFERENCES `tbresponsavel` (`CodResp`),
  ADD CONSTRAINT `fkCodTipo` FOREIGN KEY (`CodTipo`) REFERENCES `tbtipoanimal` (`CodTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
