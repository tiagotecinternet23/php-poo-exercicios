# Exercícios de PHP com POO

## Exercício 3

- Aplique pelo menos um `namespace` visando organizar o acesso às classes existentes.
- Faça a configuração necessária para que o **Composer** gerencie o carregamento automático (autoload) de todas as classes do seu exercício.
- Faça os ajustes necessários no arquivo **index.php** para que seja possível usar o autoload de classes
- Crie uma nova classe chamada **Web** herdando os recursos da classe **Programacao**.
    - Coloque nela apenas um método construtor contendo um comando `echo 'Livros de Programação Web'`
    - Faça o **Composer** atualizar a lista de classes do autoload.
- Volte para a **index.php**, faça a chamada desta classe e crie um objeto para ela.
- Dê um `var_dump` neste objeto

---

## Exercício 2

1. Analise o diagrama abaixo:

![Diagrama 2](/diagramas/02.png)

2. Implemente a subclasse **Tecnico** (herdando tudo da superclasse **Livro**) e adicione também suas próprias propriedades e métodos.
**Obs.: veja que a propriedade `formato` é um array com valores pré-definidos**.

3. Implemente as subclasses **Programacao** e **Didatico** (herdando tudo da subclasse **Tecnico**) e adicione também suas próprias propriedades e métodos.

4. Na index.php, crie alguns objetos do tipo `Tecnico`, `Programação` e `Didático` e atribua alguns valores a eles. Em seguida, mostre alguns destes dados usando tags HTML.


---

## Exercício 1

1. Crie um novo repositório chamado **php-poo-exercicios**

2. Coloque dentro dele a pasta **diagramas** (disponível na Rede em UC7)

3. Analise o diagrama abaixo e implemente a classe `Livro` no PHP

![Diagrama 1](/diagramas/01.png)

4. Crie um arquivo `index.php`, importe a classe e crie **pelo menos um objeto** a partir dela, definindo um título, autor e número de páginas.

5. Mostre os dados na página usando tags HTML da maneira que preferir.