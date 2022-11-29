-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 13:47
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jornal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fale_conosco`
--

CREATE TABLE `fale_conosco` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefone` int(11) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fale_conosco`
--

INSERT INTO `fale_conosco` (`id`, `nome`, `idade`, `email`, `telefone`, `endereco`, `mensagem`) VALUES
(24, 'Gustavo', 19, 'gustavo@hotmail.com', 8181, 'Rua 12', 'Gostei da última matéria'),
(25, 'José', 30, 'jose@gmail.com', 8181, 'Rua 30', 'Não gostei da última matéria'),
(26, 'André', 40, 'andre@email.com', 8383, 'Rua Elogio n 30', 'Brasil já é Hexa'),
(33, 'Maria', 60, 'maria@email.com', 8383, 'Rua Maria 30', 'Voltei a usar máscara'),
(34, 'Conceição', 40, 'ceicamaria30@email.com', 838383, 'Rua João Pessoa 40', 'Está chovendo muito na minha cidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `materia` text NOT NULL,
  `d_h` varchar(50) NOT NULL,
  `fonte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `titulo`, `subtitulo`, `materia`, `d_h`, `fonte`) VALUES
(30, 'Seleção faz último treino antes da estreia; veja escalação', 'Seleção Brasileira', 'A seleção brasileira encerrou nessa quarta-feira a preparação para a estreia na Copa do Mundo 2022, contra a Sérvia. O duelo acontece às 16h (de Brasília) desta quinta-feira, no estádio Lusail.\r\n\r\nMais uma vez, o técnico Tite restringiu o acesso da imprensa e não mostrou a escalação que utilizará na partida. Os jornalistas puderam acompanhar apenas os primeiros 15 minutos de atividade, de aquecimento, no estádio Grand Hamad.', 'Quinta-feira, 24 de novembro de 2022', 'https://ge.globo.com/futebol/selecao-brasileira/noticia/2022/11/24/escalacao-da-selecao-veja-o-time-da-estreia-contra-a-servia.ghtml'),
(31, 'Média móvel de casos conhecidos de Covid passa de 20 mil por dia', 'Total de casos conhecidos desde o início da pandemia é de 35.121.301, segundo dados reunidos pelo consórcio de veículos de imprensa.', 'O Brasil registrou 102 novas mortes pela Covid-19 nas últimas 24 horas, nesta quarta-feira (23), chegando a 689.325 desde o início da pandemia. Com isso, a média móvel de mortes nos últimos 7 dias é de 73, com variação de +50% em relação aos últimos 7 dias, segundo dia com tendência de alta.\r\n\r\nJá a média móvel de casos conhecidos passou de 20 mil pela primeira vezdesde 1º de setembro. ', 'Quinta-feira, 24 de novembro de 2022', 'https://g1.globo.com/saude/coronavirus/noticia/2022/11/23/brasil-registra-102-novas-mortes-por-covid-media-movel-de-casos-conhecidos-passa-de-20-mil-por-dia.ghtml'),
(32, '4 fatores que impedem que Brasil vire potência no turismo apesar do potencial', 'Estudo analisou fatores que emperram o desenvolvimento nacional do setor, que poderia dar contribuição na criação de empregos.', '1 - Imagem ruim no exterior\r\nViolência, corrupção, ambiente hostil para mulheres e para o público LGBTQ+, somados à deterioração nos últimos anos da imagem do país em campos como meio ambiente e a gestão da pandemia do coronavírus, não criam um cenário muito atraente para turistas considerarem o Brasil como destino, afirma Panosso Netto.\r\n\r\n2 - Falta de continuidade em políticas e planejamento\r\n\"Políticas de turismo específicas precisam ser baseadas em um processo de planejamento contínuo\", diz o estudo.\r\nPara um desenvolvimento mais sustentável do setor é preciso que o Ministério do Turismo e a Embratur tenham grande qualidade técnica, com um planejamento de longo prazo.\r\n\r\n3 - Qualidade dos serviços varia muito\r\nA falta de maior profissionalização na parte de serviços é algo constantemente apontado como problemático. \"Esse é um dos itens mais criticados pelos profissionais do setor\", afirma Panosso Netto.\r\n\r\n4 - Transporte aéreo e deslocamento\r\nSegundo a pesquisa, embora o ambiente entre 2000 e 2019 no mercado aéreo \"tenha melhorado a oferta e a competição nas rotas principais, especialmente aquelas conectando as capitais dos Estados e grandes centros urbanos, o acesso regional ainda é caro e, na maioria dos casos, insatisfatório\".', 'Quinta-feira, 24 de novembro de 2022', 'https://g1.globo.com/turismo-e-viagem/noticia/2022/11/24/4-fatores-que-impedem-que-brasil-vire-potencia-no-turismo-apesar-do-potencial.ghtml'),
(79, 'Ataque a escolas em Aracruz: o que se sabe e o que falta esclarecer', 'Disparos ocorreram em Escola Estadual de Ensino Fundamental e Médio (EEFM) Primo Bitti e em uma escola particular na mesma região. Três pessoas morreram e onze ficaram feridas.', 'Um ataque a duas escolas deixou três mortos e outros onze feridos em Aracruz, no Espírito Santo, nesta sexta-feira (25). Os disparos aconteceram em duas escolas de um bairro afastado do centro da cidade. Não há informação da identidade do atirador e ele está foragido. As aulas na rede municipal foram suspensas.', 'Sexta-feira, 25 de novembro de 2022', 'https://g1.globo.com/es/espirito-santo/noticia/2022/11/25/ataque-a-escolas-em-aracruz-o-que-se-sabe-e-o-que-falta-esclarecer.ghtml'),
(80, 'Piscina natural e degrau surgem ao mesmo tempo em faixa de areia alargada em Balneário Camboriú', 'Ambos os fenômenos ocorrem na Barra Sul, e prefeitura afirma que fazem parte do processo natural de acomodação.', 'A faixa de areia da Praia Central em Balneário Camboriú, no Litoral Norte, voltou a ter desníveis nesta sexta-feira (25). Desta vez, e a poucos dias de completar um ano da conclusão da obra de alargamento, um degrau e uma lagoa se formaram ao mesmo tempo na região da Barra Sul.\r\n\r\nAmbos os fenômenos já tinham ocorrido, separadamente, nos últimos dois meses.', 'Sexta-feira, 25 de novembro de 2022', 'https://g1.globo.com/sc/santa-catarina/noticia/2022/11/25/piscina-natural-e-degrau-surgem-ao-mesmo-tempo-em-faixa-de-areia-alargada-em-balneario-camboriu.ghtml'),
(83, 'Risco de chuva forte em quase todo o Brasil', 'Estados têm risco de queda de granizo e ventania forte. Sobe para 7 o número de estados com alerta vermelho', 'Atenção para o risco de chuva forte nas capitais Florianópolis, Curitiba, São Paulo, Rio de Janeiro, Belo Horizonte, Vitória, Goiânia, Brasília, Palmas, Manaus, Boa Vista, Macapá, Belém, Salvador, Teresina, Aracaju, Maceió.\r\nAlerta especial: perigo de temporais e chuva muito volumosa com grande potencial para transtornos como enchentes, deslizamentos de terra e alagamentos no litoral norte do Rio de Janeiro, no litoral sul paulista e Vale do Ribeira (SP), no litoral do Paraná e no litoral norte de Santa Catarina.', 'Terça-feira, 29 de novembro de 2022', 'https://www.climatempo.com.br/noticia/2022/11/29/risco-de-chuva-forte-em-quase-todos-brasil-8384#G1-FEED-user-sel-13,editorial,2e417409-9d60-4c06-81dc-204ce428904d'),
(86, 'Telescópio James Webb observa duas das galáxias mais distantes já encontradas', 'A galáxia GLASS-z12, formada cerca de 350 milhões de anos após o Big Bang, pode mudar a forma como os astrônomos entendem a formação de estrelas no início do universo', 'O telescópio espacial James Webb observou uma das primeiras galáxias formadas após o Big Bang, cerca de 350 milhões de anos após o início do universo.\r\n\r\nEsta, chamada GLASS-z12, e outra galáxia formada cerca de 450 milhões de anos após o Big Bang, foram encontradas durante o verão, logo após o poderoso telescópio espacial começar suas observações infravermelhas do cosmos.\r\n\r\nA capacidade do Webb de olhar mais profundamente no universo do que outros telescópios está revelando aspectos anteriormente ocultos do universo, incluindo galáxias incrivelmente distantes, como essas duas descobertas.\r\n\r\nA descoberta pode mudar a forma como os astrônomos entendem a galáxia e a formação de estrelas nos primeiros dias do universo.', 'Terça-feira, 29 de novembro de 2022', 'https://www.cnnbrasil.com.br/tecnologia/telescopio-james-webb-observa-duas-das-galaxias-mais-distantes-ja-encontradas/'),
(89, 'Brasil vence a Suíça e garante vaga nas oitavas da Copa do Mundo', 'Casemiro fez o gol na vitória por 1 a 0, no estádio 974, em Doha, no Catar', 'Não foi fácil, mas o Brasil garantiu a classificação para as oitavas de final da Copa do Mundo com uma rodada de antecedência ao vencer a Suíça por 1 a 0, nesta segunda-feira, no estádio 974. Em uma partida mais amarrada do que a estreia contra a Sérvia, a Seleção teve dificuldades sem Neymar e foi marcar apenas aos 37 minutos do segundo tempo, com um belo gol de Casemiro. A equipe de Tite segue com 100% de aproveitamento após duas rodadas no Mundial do Catar.', 'Terça-feira, 29 de novembro de 2022', 'https://ge.globo.com/futebol/copa-do-mundo/jogo/28-11-2022/brasil-suica.ghtml');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fale_conosco`
--
ALTER TABLE `fale_conosco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fale_conosco`
--
ALTER TABLE `fale_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
