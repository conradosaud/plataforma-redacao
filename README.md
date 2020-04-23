# Plataforma de Redação
**Tecnologias utilizadas:** HTML, CSS, Javascript, Jquery, PhP e MySQL.
A plataforma faria cadastro de alunos que poderia escrever suas redações e enviar para o professor, e o professor por sua vez, receberia todas as redações, faria correções e reenviava aos alunos.
Este projeto foi desenvolvido por mim para um de meus primeiros clientes como freelancer. Este foi um protótipo do que seria a versão final que foi vendida.  
___
Este projeto acompanha também o banco de dados SQL no arquivo `redacao.sql`  
Por se tratar de um protótipo, não são todas as páginas que funcionam.
É possível escrever redações e "enviar ao professor", fica salvo no banco de dados. É possível salvar como rascunhos também e consultar seus rascunhos alvos no menu esquerdo.

Para acessar o painel do professor é só inserir `admin.php` pela URL. É possível ver apenas os alunos cadastrados, as redações que chegam ao professor não foi implementado.

O acesso ao banco de dados `model/Dao.php` é feito utilizando **singleton** (design patterns).

É um ótimo projeto para estudos, embora esteja incompleto é possível ver todo o sistema funcionando e tabalhando em conjunto com o banco de dados.



