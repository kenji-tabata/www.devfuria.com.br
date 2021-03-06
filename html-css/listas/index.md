---
title:       HTML & CSS - Listas 
description: Aprenda comom criar e estilizar listas em HTML e CSS
menu:        html-elementos  
---

As listas ajudam a organizar o conteúdo, mas fazem muito mais do que isso. 

Elas são utilizadas principalmente para __criar menus__ (com a ajuda da CSS, é claro). Esses menus podem ser verticais
(que é a disposição natural das listas) ou podem ser horizontais.

O efeito horizontal é produzido com o auxílio da __propriedade float (CSS)__. Essa propriedade, quando utilizada sabiamente,
produz resultados interessantes. Ela faz os elementos flutuarem para a direita ou para a esquerda. Voltaremos a falar sobre
o float em breve.

A tag `ul` é um container que comporta os itens da lista: as tag's `li`. Em outras palavras, o `ul` é a lista e os `li`
são os itens.

`ul` significa "unordened list" (lista não ordenada): 

```html
<ul>
    <li></li>
    <li></li>
    <li></li>
</ul>
```

Há também a lista `ol` (ordened list) que é a lista ordenada:

```html
<ol>
    <li></li>
    <li></li>
    <li></li>
</ol>
```




Estilizando
---


### Criando uma lista simples

Para adicionar um marcador personalizado, você pode usar a propriedade `list-style-image`. Mas algo assim não fornece
controle sobre a posição do marcador. Em vez disso, é mais comum desativar marcadores de lista e adicionar seu marcador
personalizado como uma imagem de fundo ao elemento de lista. Você pode, utilizar as propriedades de posicionamento
da imagem de fundo para controlar exatamente o alinhamento do seu marcador pesonalizado, veja exemplo abaixo.

```html
<ul>
    <li>Read emails</li>
    <li>Write book</li>
    <li>Go shopping</li>
    <li>Cook dinner</li>
    <li>Watch Scrubs</li>
</ul>
```

```html
ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
li {
    background: url(bullet.gif) no-repeat 0 50%;
    padding-left: 30px;
}
```

O código acima resulta em...

![](simple-list.png)


### Criando uma barra vertical

Combinando o exemplo anterior com as técnicas de estilização de [links (âncoras)](/html-css/ancoras/) é possível criar
barras de navegação verticais graficamente ricas e completas com rollovers.

<p data-height="297" data-theme-id="2897" data-slug-hash="raVQKX" data-default-tab="result" data-user="flaviomicheletti" class='codepen'>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/raVQKX/'>raVQKX</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>

Começaremos com seguinte HTML:

```html
<ul>
    <li><a href="home.htm">Home</a></li>
    <li><a href="about.htm">About</a></li>
    <li><a href="services.htm">Our Services</a></li>
    <li><a href="work.htm">Our Work</a></li>
    <li><a href="news.htm">News</a></li>
    <li><a href="contact.htm">Contact</a></li>
</ul>
```

E com a seguinte CSS:

```css
a {
    display: block;
    width: 200px;
    height: 40px;
    line-height: 40px;
    color: #000;
    text-decoration: none;
    background: #94B8E9 url(images/pixy-rollover.gif) no-repeat left center;
    text-indent: 50px;
    text-transform: uppercase;
}
```

Estamos utilizando a imagem abaixo para aplicar o efeito de rollover. O exemplo é mais um retirado do livro __Criando
Páginas Web com CSS de Andy Budd__ mas a técnica é obra de Petr Stanícek e chama-se __método de Pixy__.

![](pixy-rollover.gif)

A imagem possui 400 pixel de cumprimemto. Os primeiros 200 pixels da imagem ilustram o link na posição de "descanço" e 
os 200 pixels restantes ilustra o link na posição "sobre" (hover). Veja a pseudoclasse  `a:hover`, ela desloca a imagem 
para a direita segundo a configuração de plano de fundo `background-position: right top`.

```css
a:hover, .selected a {
    background-color: #369;
    background-position: right bottom;
    color: #fff;
}
```

A classe `.selected a` ajuda a destacar o item ativo do menu. Com uma linguagem no lado do servidor ou até mesmo com 
JavaScript poderíamos facilmente alterar o menu ativo trocando o valor da propriedade `class` do elemento
HTLML.

```html
<li class="selected"><a href="services.htm">Our Services</a></li>
```

Se examinar a imagem com atenção notará que ela tem uma borda sólida em torno da imagem. Quando essas imagens forem
empilhadas verticalmente, as bordas na parte superior e inferior dobrarão, veja:

![](menu-margens.png)

Para evitar o problema, corte a linha superior alinhando as imagens de fundo com a parte inferior da âncora e, então,
reduza a altura dos links em 1 pixel:

```css
a {
    display: block;
    width: 200px;
    height: 39px;       /* diminuímos 1px */
    line-height: 39px;  /* diminuímos 1px */
    color: #000;
    text-decoration: none;
    background: #94B8E9 url(images/pixy-rollover.gif) no-repeat left bottom; /* trocamos de center para bottom */
    text-indent: 50px;
    text-transform: uppercase;
}
```

Agora, o efeito colateral é na primeira linha (na parte superior) ela não é mais exibida. Para exibí-la novamente, você
precisa redefinir a altura da primeira âncora como 40 pixels (a altura máxima da imagem). Faremos isso aplicando uma 
classe chamada `.first` ao primeiro item da lista.

```css
.first a {
    height: 40px;
    line-height: 40px;
}
```

Não se esquece de adicionar a classe ao elemento HTML, veja:

```html
<li class="first"><a href="home.htm">Home</a></li>
```

Caso queiramos destacar o primeiro item (por ele ter sido o selecionado) poderemos utilizar as duas classes juntas, veja:

```html
<li class="first selected"><a href="home.htm">Home</a></li>
```


Aqui vale um alerta, tome cuidado com exemplos antigos de CSS e que não exploram todos os poderes da CSS (no caso a CSS 3).

O exemplo acima seria válido caso a pseudoclasse `:first-child` da CSS 3 não estivesse em vigor. Ela (a pseudoclasse 
`:first-child`) aplicará o estilo apenas ao primeiro filho. Ao invés de criar uma classe extra (`.first`) utilizamos a
pseudoclasse:

```css
li:first-child a {
    height: 40px;
    line-height: 40px;
}
```

Como consequência, simplificamos o nosso HTML, pois não precisaremos anotar a classe ao elemento HTML.

```html
<li class="selected"><a href="home.htm">Home</a></li>
```
