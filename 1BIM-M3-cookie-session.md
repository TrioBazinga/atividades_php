Exercício 1 - Pergunta conceitual

A diferença entre cookies e sessions é principalmente onde os dados são armazenados e quem os pode acessar. 
Os cookies são enviados e armazenados no navegador do usuário e lá permanecem até que sua respectiva duração seja excedida; além disso, eles podem ser manipulados pelo usuário, o que significa que, ele pode os modificar, excluir ou até inserir cookies falsos; para concluir, podem permanecer no navegador mesmo depois de o fechar.
Enquanto as sessions são dados armazenados no servidor, logo, o usuário normalmente não vê os dados contidos nelas, mas sim apenas o id da sessão.
Portanto, as sessions são mais seguras e confiáveis que os cookies devido principalmente ao maior nível de privacidade delas.
Logo, cookies devem ser usados em sistemas mais informais, como um site de blogs ou um jogo online na web, enquanto as sessions devem ser usadas em contextos formais e que exigem segurança, como o perfil de um aluno no site de uma escola, ou de um funcionário em uma empresa.

Exercício 2 - Pergunta de aplicação

Para manter o usuário logado, o sistema deve usar um token seguro para "lembrar" do usuário e assim fazer com que ele continue logado mesmo depois de sair do navegador, no entanto, dados como senhas e endereços devem ser armazenados com as sessions, assim haverá uma maior segurança para ambos os lados.
Para armazenar itens temporários no carrinho, o sistema deve usar principalmente cookies para evitar a frustração do usuário de perder sua lista de desejos/carrinho, mas as sessions podem ser implementadas para fazer um algoritmo ao cliente, verificando quais são seus produtos favoritos e os guardando no servidor para esse propósito.
Sobre as preferências do usuário, os cookies podem ser usados para que o cliente adicione os produtos que mais gosta aos favoritos, para que assim, ele mesmo os consulte depois, enquanto as sessions, como uma "lista escondida", formada conforme o cliente for clicando em produtos específicos ou os for adicionando no carrinho.

Exercício 3 - Pergunta de investigação 

Quando executar o arquivo pela primeira vez, a mensagem exibida será “Cookie ainda não disponível”, porque o cookie foi apenas enviado ao navegador, mas ainda não retornou ao servidor.
Após a página é atualizada, o cookie foi armazenado no navegador e enviado na nova requisição, então aparece “Valor do cookie: 1”.
Quando abrirmos as ferramentas do navegador, é possível ver o cookie chamado contador armazenado, depois de limpar os cookies e atualizar novamente, a mensagem volta a ser “Cookie ainda não disponível”, fazendo isso se reinicia o processo.
Isso acontece porque o cookie só fica disponível no $_COOKIE depois de uma nova requisição, já que ele é salvo no navegador antes de ser enviado de novo ao servidor.

Exercicio 4

As sessions são preferidas na autenticação porque aumentam a segurança, já que os dados sensíveis ficam armazenados no servidor e o cliente recebe apenas um identificador (session ID). Na manipulação de dados, elas facilitam o controle, pois o servidor gerencia as informações do usuário de forma centralizada e mais confiável. Já utilizar apenas cookies pode ser arriscado, pois eles ficam no navegador e podem ser roubados ou manipulados. Por isso, sessions são mais seguras e recomendadas para autenticação em sistemas web.