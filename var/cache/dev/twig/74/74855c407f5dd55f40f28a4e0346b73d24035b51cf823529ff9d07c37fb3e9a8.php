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

/* exo03.html.twig */
class __TwigTemplate_aae06d99deee15ce387dfa1d2d70aa0064bd0f4af1df6f3aba811897df1542c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exo03.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exo03.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>Star70</title>
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
            h1{
                color: white;
                font-size: 70px;
                font-family: \"Adobe Hebrew\";
            }
            .resp{
                width:100%;
                height:300px;
            }
            .main{
                width: 70%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin: 0 auto;
            }
            .img{
                width: 300px;
                height:300px;
            }
            .cards{
                background-color: rgba(279,134,123,0.7);
                width: 300px;
                color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
                text-align: center;
                margin: 10px auto;

            }
            .footer{
                background-color: #ffcc00;
                text-align: center;

            }
            .messageTPetit{
                width: 80%;
                height: 100%;
                background-color: black;
                font-family: Arial;
                padding: 10px;

            }
            h3{
                text-align: center;
                font-size: 70px;
                color:red;
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
        </style>
    </head>
    <body>
        <header class=\"header\">
            <h1>Star70</h1>
        </header>
        <main class=\"main\">
            ";
        // line 92
        echo "            ";
        if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 92, $this->source); })()) >= 18)) {
            // line 93
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["starDisco"]) || array_key_exists("starDisco", $context) ? $context["starDisco"] : (function () { throw new RuntimeError('Variable "starDisco" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 94
                echo "                    <div class=\"cards\">
                        <div class=\"img\"><img src=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "img", [], "any", false, false, false, 95), "html", null, true);
                echo "\" alt=\"\" class=\"resp\"></div>
                        <div>
                            ";
                // line 98
                echo "                            <h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "nom", [], "any", false, false, false, 98), "html", null, true);
                echo "</h1>
                        </div>
                        <div>
                            <h2>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "age", [], "any", false, false, false, 101), "html", null, true);
                echo "</h2>
                        </div>
                        <div>
                            <p>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "bio", [], "any", false, false, false, 104), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "            ";
        } else {
            // line 109
            echo "                <div class=\"messageTPetit\">
                    <h3>Tu es trop petit(e) pour ecouter de la BONNE MUSIC.</h3>
                </div>
            ";
        }
        // line 113
        echo "
        </main>
        <footer class=\"footer\">
";
        // line 117
        echo "            <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"button\">Contact</a>
        </footer>

    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "exo03.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 117,  183 => 113,  177 => 109,  174 => 108,  164 => 104,  158 => 101,  151 => 98,  146 => 95,  143 => 94,  138 => 93,  135 => 92,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\"
              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
        <title>Star70</title>
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
            h1{
                color: white;
                font-size: 70px;
                font-family: \"Adobe Hebrew\";
            }
            .resp{
                width:100%;
                height:300px;
            }
            .main{
                width: 70%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin: 0 auto;
            }
            .img{
                width: 300px;
                height:300px;
            }
            .cards{
                background-color: rgba(279,134,123,0.7);
                width: 300px;
                color: whitesmoke;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
                text-align: center;
                margin: 10px auto;

            }
            .footer{
                background-color: #ffcc00;
                text-align: center;

            }
            .messageTPetit{
                width: 80%;
                height: 100%;
                background-color: black;
                font-family: Arial;
                padding: 10px;

            }
            h3{
                text-align: center;
                font-size: 70px;
                color:red;
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
        </style>
    </head>
    <body>
        <header class=\"header\">
            <h1>Star70</h1>
        </header>
        <main class=\"main\">
            {#  je declare une boucle for . qui itere sur starDisco a l'aide de 'element '       #}
            {% if age >= 18 %}
                {% for element in starDisco %}
                    <div class=\"cards\">
                        <div class=\"img\"><img src=\"{{ element.img }}\" alt=\"\" class=\"resp\"></div>
                        <div>
                            {#je viens chercher la kley de mon tableau starDisco avec element.nom pour aficher sa valeur , le nom de la personne#}
                            <h1>{{ element.nom }}</h1>
                        </div>
                        <div>
                            <h2>{{ element.age }}</h2>
                        </div>
                        <div>
                            <p>{{ element.bio }}</p>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"messageTPetit\">
                    <h3>Tu es trop petit(e) pour ecouter de la BONNE MUSIC.</h3>
                </div>
            {% endif %}

        </main>
        <footer class=\"footer\">
{#          je cree un bouton avec un lien vers la page contact en utilisant Path.#}
            <a href=\"{{ path(\"contact\")}}\" class=\"button\">Contact</a>
        </footer>

    </body>
</html>", "exo03.html.twig", "/Applications/MAMP/htdocs/cours-init-sfy/templates/exo03.html.twig");
    }
}
