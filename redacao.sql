-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Tempo de geração: 23/04/2020 às 04:12
-- Versão do servidor: 10.2.31-MariaDB
-- Versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Estrutura para tabela `redacao`
--

CREATE TABLE `redacao` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ativo',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `redacao`
--

INSERT INTO `redacao` (`id`, `id_usuario`, `titulo`, `texto`, `status`, `data`) VALUES
(11, '22', 'Consumismo: felicidade maquiada', 'Vivemos em um mundo cada vez mais globalizado, no qual a dinâmica de informações é intensa e constante. A troca de ideias e mercadorias entre os mais distantes lugares tornou-se ainda mais frequente e rápida após o advento da internet. Dentro desse contexto, há um importante fator que deve ser levado em consideração: a mídia como um mecanismo de manipulação das massas.\r\n\r\nAtravés de inúmeros meios de comunicação como rádio, televisão, jornais, revistas, outdoors, internet, entre outros, a mídia tem realizado o seu trabalho de convencer as pessoas a consumir. Para isso utiliza-se de algumas artimanhas, como artistas famosos e queridos que incitam o público a comprar os produtos divulgados. O ser humano nasce e cresce vivenciando esse mundo manipulado pela mídia, e acreditando que a felicidade possa ser encontrada quando se adquire determinada marca de roupa, calçado, carro, jóia, celular ou qualquer outro produto. Divulga-se constantemente a ideia da felicidade comprada.\r\n\r\nO indivíduo que nasce nesse ambiente consumista dificilmente aprende valores interiores e subjetivos, como a amizade, o amor ao próximo, o companheirismo, o respeito, a dignidade, a honestidade que o edificam como ser pensante e emotivo. Decorre disso a dificuldade de se preencher o vazio interior, o que é comumente buscado no consumo de bens concretos e superficiais. Não há como afirmar que tais bens são dispensáveis à felicidade, porém estes não estão capacitados a trazer a realização pessoal buscada pelo homem.\r\n\r\nA partir das ideias discutidas, podemos concluir que uma das melhores maneiras de garantir a realização pessoal é combatendo o consumismo incitado pela mídia – uma vez que este proporciona uma felicidade maquiada e momentânea que não caracteriza uma realização pessoal plena e sólida – e educando nossas crianças com base em valores como a solidariedade, o amor e o respeito.', 'rascunho', '2018-08-20 13:09:20'),
(12, '22', 'A Busca', 'Jonh Locke, em um de seus escritos, disse que, ao vivermos em sociedade, somos de certa forma obrigados a nos moldar a seus contornos. Vivemos em uma sociedade capitalista, uma sociedade em que o consumo desenfreado parece ser a cada dia mais comum, seguindo uma lógica como: \"compro, logo existo\". As pessoas perderam sua individualidade, são tratadas agora simplesmente como consumidores.\r\n\r\nEsse fato é muito preocupante. As pessoas são levadas a acreditar que só poderão ser plenamente felizes se consumirem cada vez mais e mais, não percebem que felicidade e realização pessoal nada tem a ver com dinheiro ou com o próprio consumo.\r\n\r\nAté hoje nenhum cientista conseguiu desvendar os mistérios que cercam os sentimentos humanos. Talvez seja isso que nos diferencie tanto. O sentimento de realização pessoal está ligado ao fato de nos sentirmos felizes como pessoas, como indivíduos, com aquilo que somos por dentro, com nossas potencialidades, com nossa capacidade transformadora, e tudo isso não está ligado ao consumo. O consumismo não faz com que nos sintamos realizados pessoalmente; ao contrário, esse é utilizado na maioria das vezes para tapar as carências internas.\r\n\r\nMesmo nos moldando, seja de forma consciente ou de forma inconsciente, às características de nossa sociedade, não podemos nos alienar, não podemos perder nosso senso crítico.\r\n\r\nTemos que ter a ideia clara de que a realização pessoal é algo que vem de dentro para fora, e, sendo assim, não iremos encontrá-la se o único caminho em que a procurarmos for o do consumismo.', 'corrigido', '2018-08-20 16:25:34'),
(13, '22', 'A Venda da Felicidade', 'A era industrial aumentou consideravelmente a produção de bens de consumo. Agora, na era da informática, esse consumo foi até facilitado, através da internet. No quotidiano, o consumismo é estimulado e vendido como felicidade. Seria verdadeira essa relação?\r\n\r\nCom as altas taxas de desemprego e a coisificação do homem, a população fica emocionalmente fragilizada. Essa fragilidade é fruto da exclusão social e da concepção de homem como ser descartável. Em uma sociedade com uma cultura descartável, representada pela cultura de massa, o homem também o é. Além de sofrer com estressantes jornadas de trabalho, transporte longo e demorado, o homem também sofre em seu tempo livre. Ele anseia por tempo livre, mas não sabe o que fazer com ele – até o seu tempo livre é alienado.\r\n\r\nEsse é o momento oportuno para as campanhas de marketing. Impossibilitado (financeiramente) de se desenvolver pessoalmente através de estudo ou com o uso qualificado de seu tempo livre, o homem passa horas na frente da TV. Assim, o carro representa a liberdade, a cerveja representa a alegria, o remédio representa a paz. As campanhas padronizam os sentimentos e os oferecem personificados em produtos. E ainda estimulam a troca desses mesmos produtos, pouco tempo depois, por outros melhores e mais modernos.\r\n\r\nO grande erro das pessoas que se entregam ao consumismo desenfreado sem refletir é que, apesar de inúmeras tentativas, o mal-estar causado pela exclusão social, pela alienação do tempo, não pode ser aliviado pelos produtos consumidos. A felicidade e a realização pessoal não vêm embaladas e prontas para o consumo; são frutos de equilíbrio emocional, autoconhecimento e desenvolvimento pessoal. Características que são alcançadas, gradualmente, no decorrer da vida.', 'corrigido', '2018-08-20 16:26:49'),
(14, '24', 'Felicidade fast-food', 'Assim como a Páscoa associa o açúcar à felicidade, os meios de comunicação, por meio dos signos de consumo, relacionam realização pessoal ao consumismo. Segundo a filosofia, isso se denomina \"fetichismo de mercadoria\" e é, atualmente, o principal \"protagonista\" das economias em escala global.\r\n\r\nA felicidade não se limita a fórmulas prontas. Cada indivíduo é dotado de senso critico, que, aliado a suas experiências, possibilita-lhe moldar sua visão de mundo e, consequentemente, determinar os caminhos de sua felicidade. Contudo, a mídia torna-se ditatorial ao eleger o consumismo como meio de obter a realização pessoal, pois infringe o livre-arbítrio humano. Além disso, esse conceito torna-se cruel, pois a felicidade somente seria possível a aqueles que detêm poder aquisitivo.\r\n\r\nSe o caminho proposto pela publicidade fosse eficiente, os consultórios psiquiátricos não teriam um aumento no número de clientes, que elegem o Prozac como ilusória via de felicidade. Isso está relacionado ao círculo vicioso de aquisição de bens, proposto pela mídia, que favorece uma visão distorcida e efêmera de alegria. Além disso, o estado de permanente alegria é ilusório, já que a vida é pontuada de momentos felizes. A questão está na forma como cada ser humano lida com essa situação.\r\n\r\nA felicidade não é um produto que se escolhe na prateleira do supermercado e após o seu uso substitui-se por um novo. Da mesma maneira, o ser humano não é uma massa homogênea, à qual pode ser ditado um único caminho para a felicidade.', 'rascunho', '2018-08-20 13:22:08'),
(15, '24', 'Felicidade à venda', 'Há, ainda, nos dias de hoje, pessoas que acreditam que a felicidade está relacionada às posses materiais. A sociedade atual parece viver um escurecimento progressivo de suas ideias, crenças e valores, numa jornada inversa à da busca da Humanidade pela luz, descrita no mito da caverna de Platão. As pessoas parecem distanciar-se dela cada vez mais, investindo sua energia em conceitos que exigem pouquíssimo esforço intelectual, porém boa capacidade econômica: a valorização da posse em detrimento do valor humano.\r\n\r\nUm artista popular de grande sucesso, em especial entre as camadas mais simples e pobres da população, Odair José, já cantava nos anos 70 (seria mera coincidência ser essa a época dos \"milagres econômicos\" anunciados de peito estufado pela ditadura militar?): \"(...) A felicidade não existe, o que existe na vida são momentos felizes (...)\". Três décadas depois do lançamento dessa música, temos o consumo como sinônimo de felicidade, levando-nos a crer que o que existe na verdade são momentos de consumismo. Podemos possuir o último modelo, a tecnologia de ponta e a moda mais atual, mas, assim como a felicidade da música citada, tudo é efêmero. Muito em breve o guarda-roupa estará ultrapassado e a tecnologia defasada. O dinheiro se vai, os objetos se quebram, se acabam, se desgastam, e a falsa felicidade não dura muito mais que as suas representações físicas.\r\n\r\nPorém, ao observarmos a Natureza, aprendemos que a mudança é algo positivo; a adaptação a novas condições é essencial para a continuidade da vida. Facilidades do mundo moderno devem ser aproveitadas, por questão de praticidade, conforto, necessidade, e não como meios ordinários de preencher o espaço da insatisfação pessoal ou da vaidade do ser humano.', 'corrigido', '2018-08-20 16:25:20'),
(16, '29', '', '', 'rascunho', '2018-08-20 18:38:06'),
(17, '30', 'ssaaaaasassa', 'sasaashskjhsdahasjahas', 'corrigido', '2018-08-22 14:10:38'),
(18, '33', 'redes sociais', 'á cerca de dez anos, as redes sociais se tornaram uma arma de manipulação da opinião pública, em especial no âmbito político e durante os períodos das campanhas eleitorais. Isso já atingiu 48 países recentemente e o Brasil está en... - Veja mais em https://educacao.uol.com.br/bancoderedacoes/propostas/redes-sociais-e-manipulacao-politica.htm?cmpid=copiaecola', 'corrigido', '2018-08-21 00:17:06'),
(19, '35', '', '', 'ativo', '2018-10-18 21:59:18'),
(20, '36', 'ghjghjhj', 'ghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghjghjghghj', 'ativo', '2019-04-18 08:53:29'),
(21, '38', 'uma nova redação de testes', 'teste ae meu pexe só pra ver mesmo kkkk', 'ativo', '2020-04-23 00:57:28'),
(22, '38', 'Um outro teste pra ver o rascunho', 'Ainda funciona?', 'rascunho', '2020-04-23 01:03:48');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `redacao`
--
ALTER TABLE `redacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `redacao`
--
ALTER TABLE `redacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
