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