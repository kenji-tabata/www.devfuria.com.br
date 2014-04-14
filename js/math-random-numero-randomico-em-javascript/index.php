<?php
/**
 * Como gerar números aleatórios em Javascript!
 */
require "../../core/boot.php";
$pagina = $model->getPagina("/js/math-random-numero-randomico-em-javascript/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body class="receitas-body">
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Matéria -->
        <div class="container">
            <div class="row">

                <!-- Título -->
                <div class="receitas-header" id="content">
                    <div class="container">
                        <h1>Como gerar números aleatórios em Javascript!</h1>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">

                        <p>A função <code>random()</code> do objeto <code>Math</code> retorna um número pseudo-aleatório.</p>

                        <pre><code class="language-javascript">Math.random();</code></pre>

                        <blockquote>
                            A função <code>Math.random()</code> retorna um ponto flutuante, número
                            pseudo-aleatório no intervalo <strong>[0, 1)</strong>, isto é, de 0 (inclusive) até 1, mas
                            não incluindo 1 (exclusive) e que você pode, em seguida, dimensionar para o intervalo desejado.
                            <small>Fonte:
                                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random" title="link-externo">
                                    Mozilla Developer Network / Math.random()</a></small>
                        </blockquote>

                        <p>Em outras palavras, a função retornará um número entre 0 e 1 (podendo incluir o 0 mas não o 1),
                            veja os resultados:</p>
                        <pre><code class="no-highlight">0.5824683890332182
0.15599339785628574
0.19135110741912686
0.4996250046384343
0.0008728340690463687
</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Como gerar um número randômico entre 2 números!</h2>
                        </div>

                        <p>Para gerarmos números aleatórios inteiros, devemos utilizar a função <code>Math.floor</code>
                            que arredonda para baixo o ponto flutuante.</p>

                        <pre><code class="language-javascript">Math.floor(Math.random());</code></pre>

                        <p>O código acima gera sempre o valor <code>0</code>, então para obter números aleatórios até o
                            limite máximo de 5, por exemplo, devemos multiplicar pelo número desejado (no caso 5).</p>

                        <pre><code class="language-javascript">Math.floor(Math.random() * 5);</code></pre>

                        <p>O código acima irá gerar <code>0, 1, 2, 3 e 4</code></p>

                        <p>Para incluir o número 5 (nosso limite maximo) nos resultados precisamos somar com 1.</p>

                        <pre><code class="language-javascript">Math.floor(Math.random() * (5 + 1));</code></pre>

                        <p>O código acima irá gerar <code>0, 1, 2, 3, 4 e 5</code></p>

                        <p>Agora podemos estabelecer um limite mínimo, por exemplo, <code>3</code>. </p>

                        <p>Então precisaremos somar <code>3</code> no resultado final (cuidado! eu disse  somar no resultado final).</p>

                        <pre><code class="language-javascript">Math.floor(Math.random() * (5 + 1) + 3);</code></pre>

                        <p>O código acima irá gerar <code>3, 4, 5, 6, 7 e 8</code></p>

                        <p>
                            Conseguimos um limite mínimo (<code>3</code>), mas estoramos o limite máximo (<code>5</code>).
                            Podemos resolver isso subtraindo o valor mínimo (<code>3</code>) do valor máximo (<code>5</code>).
                        </p>

                        <pre><code class="language-javascript">Math.floor(Math.random() * (5 - 3 + 1) + 3);</code></pre>

                        <p>O código acima irá gerar <code>3, 4 e 5</code></p>

                        <p>
                            Mas queremos transformar isso em uma função reutilizá-vel, então podemos substituir
                            o valor <code>5</code> pela variável <code>max</code> e o valor <code>3</code>pela variável
                            <code>min</code>.
                        </p>

                        <pre><code class="language-javascript">Math.floor(Math.random() * (max - min + 1) + min);</code></pre>

                        <p>Agora é só criar a função...</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}</code></pre>

                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Como gerar um número randômico até um valor máximo qualquer!</h2>
                        </div>

                        <p>Se nossa preocupação fosse apenas um teto máximo para o número aleatório, bastaria simplificar
                            nossa função para...</p>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">function getRandomInt(max) {
    return Math.floor(Math.random() * max + 1)
}</code></pre>
                        </div>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Como gerar um número randômico entre 0 e 1!</h2>
                            <p>Booleanos.</p>
                        </div>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">Math.floor(Math.random() * 2);</code></pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Como gerar um número randômico entre 0 e 256!</h2>
                            <p>Bytes ou Octet</p>
                        </div>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">Math.floor(Math.random() * 256);</code></pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Como gerar um número randômico entre 0 e 65536!</h2>
                            <p>Range dos inteiros positivos.</p>
                        </div>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">Math.floor(Math.random() * 65536);</code></pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2>Como gerar um número randômico entre -32768 e 65536!</h2>
                            <p>Range dos inteiros incluindo os negativos.</p>
                        </div>

                        <div class="code">
                            <h6>Javascript</h6>
                            <pre><code class="language-javascript">Math.floor(Math.random() * 65536) - 32768;</code></pre>
                        </div>
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/refers/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>