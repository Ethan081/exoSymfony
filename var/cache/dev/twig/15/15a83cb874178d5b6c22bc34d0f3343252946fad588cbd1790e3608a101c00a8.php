<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact.html.twig */
class __TwigTemplate_a561a487e4946646933ae216ef7c4c5b0bf3695f564b66b06a9e11b384e2d74e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr_FR\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>Contact</title>
        <style>
            body{
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                background-image: url(\"https://images8.alphacoders.com/423/423217.jpg\");

                background-position: center;
                background-size: cover;
                height:100vh;
            }
            .header{
                background-color: #F5871F;
                text-align: center;

            }
            .main{
                width: 70%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin: 0 auto;
            }
            .footer{
                background-color: #ffcc00;
                text-align: center;

            }
            h1{
                color: white;
                font-size: 70px;
                font-family: \"Adobe Hebrew\";
            }
            p{
                color: white;
                font-size: 20px;
                font-family: \"Hobo Std\";

            }
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 10px;
                margin: 20px;
            }
            .paragraphe{
                background-color: rgba(0,0,0,0.5);
                width: 80%;
                padding: 20px;
                border-radius: 10px;
            }
        </style>

    </head>
    <body>
        <header class=\"header\">
            <h1>Contact</h1>
        </header>
        <main class=\"main\">
            <div class=\"paragraphe\">
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium ad cupiditate, delectus dolore dolores dolorum eligendi exercitationem,
                    fuga hic incidunt modi nisi nulla obcaecati placeat quaerat quam saepe soluta veniam?
                </span><span>Accusantium animi asperiores aut debitis eos eum eveniet explicabo fuga id
                    illo impedit itaque iure magnam minus, molestiae, officia quibusdam quo repellat repellendus
                    sed similique sit soluta tempora vel veritatis.
                </span><span>Aperiam dolore ducimus esse eveniet ex nesciunt nostrum officia rem,
                    repellat voluptatem? Aliquam animi consequuntur, culpa dicta esse fuga harum nihil odio repellat,
                    sit temporibus tenetur vel velit veritatis, vero!
                </span><span>Aperiam assumenda atque consectetur cum dolorem doloribus harum libero maiores modi,
                    molestias perspiciatis quam quas quibusdam quidem quisquam quo repellat sequi totam. Accusamus ad
                    aperiam, molestiae necessitatibus quidem tenetur voluptate.</span>
                </p>
            </div>


        </main>
        <footer class=\"footer\">
";
        // line 94
        echo "
                <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exo03");
        echo "\" class=\"button\">Acceuil</a>


        </footer>

    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 95,  137 => 94,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr_FR\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>Contact</title>
        <style>
            body{
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                background-image: url(\"https://images8.alphacoders.com/423/423217.jpg\");

                background-position: center;
                background-size: cover;
                height:100vh;
            }
            .header{
                background-color: #F5871F;
                text-align: center;

            }
            .main{
                width: 70%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin: 0 auto;
            }
            .footer{
                background-color: #ffcc00;
                text-align: center;

            }
            h1{
                color: white;
                font-size: 70px;
                font-family: \"Adobe Hebrew\";
            }
            p{
                color: white;
                font-size: 20px;
                font-family: \"Hobo Std\";

            }
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 10px;
                margin: 20px;
            }
            .paragraphe{
                background-color: rgba(0,0,0,0.5);
                width: 80%;
                padding: 20px;
                border-radius: 10px;
            }
        </style>

    </head>
    <body>
        <header class=\"header\">
            <h1>Contact</h1>
        </header>
        <main class=\"main\">
            <div class=\"paragraphe\">
                <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium ad cupiditate, delectus dolore dolores dolorum eligendi exercitationem,
                    fuga hic incidunt modi nisi nulla obcaecati placeat quaerat quam saepe soluta veniam?
                </span><span>Accusantium animi asperiores aut debitis eos eum eveniet explicabo fuga id
                    illo impedit itaque iure magnam minus, molestiae, officia quibusdam quo repellat repellendus
                    sed similique sit soluta tempora vel veritatis.
                </span><span>Aperiam dolore ducimus esse eveniet ex nesciunt nostrum officia rem,
                    repellat voluptatem? Aliquam animi consequuntur, culpa dicta esse fuga harum nihil odio repellat,
                    sit temporibus tenetur vel velit veritatis, vero!
                </span><span>Aperiam assumenda atque consectetur cum dolorem doloribus harum libero maiores modi,
                    molestias perspiciatis quam quas quibusdam quidem quisquam quo repellat sequi totam. Accusamus ad
                    aperiam, molestiae necessitatibus quidem tenetur voluptate.</span>
                </p>
            </div>


        </main>
        <footer class=\"footer\">
{#            je cree un bouton avec un lien vers la page exo03 en utilisant Path.#}

                <a href=\"{{ path(\"exo03\")}}\" class=\"button\">Acceuil</a>


        </footer>

    </body>
</html>", "contact.html.twig", "/Applications/MAMP/htdocs/cours-init-sfy/templates/contact.html.twig");
    }
}
