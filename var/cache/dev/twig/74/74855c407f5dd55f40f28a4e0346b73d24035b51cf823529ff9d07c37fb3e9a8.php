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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exo03.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exo03.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exo03.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Star70";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "            <main class=\"main\">
                ";
        // line 6
        echo "                ";
        if (((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 6, $this->source); })()) >= 18)) {
            // line 7
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["starDisco"]) || array_key_exists("starDisco", $context) ? $context["starDisco"] : (function () { throw new RuntimeError('Variable "starDisco" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 8
                echo "                        <div class=\"cards\">
                            <div class=\"img\"><img src=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "img", [], "any", false, false, false, 9), "html", null, true);
                echo "\" alt=\"\" class=\"resp\"></div>
                            <div>
                                ";
                // line 12
                echo "                                <h1>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "nom", [], "any", false, false, false, 12), "html", null, true);
                echo "</h1>
                            </div>
                            <div>
                                <h2>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "age", [], "any", false, false, false, 15), "html", null, true);
                echo "</h2>
                            </div>
                            <div>
                                <p>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "bio", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                ";
        } else {
            // line 23
            echo "                    <div class=\"messageTPetit\">
                        <div class=\"tenor-gif-embed\" data-postid=\"7939307\" data-share-method=\"host\" data-width=\"30%\" data-aspect-ratio=\"0.8156028368794326\">
                            <a href=\"https://tenor.com/view/diabolo-satanas-rire-laughing-gif-7939307\">Diabolo Satanas GIF</a> from <a href=\"https://tenor.com/search/diabolo-gifs\">Diabolo GIFs</a>
                        </div>
                        <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                        <h3>Du bist zu klein, um die gute Musik zu hören..</h3>
                    </div>
                ";
        }
        // line 31
        echo "            </main>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 34
        echo "            ";
        $this->loadTemplate("Base/_footerContact.html.twig", "exo03.html.twig", 34)->display($context);
        // line 35
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  168 => 35,  165 => 34,  155 => 33,  144 => 31,  134 => 23,  131 => 22,  121 => 18,  115 => 15,  108 => 12,  103 => 9,  100 => 8,  95 => 7,  92 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Star70{% endblock %}
        {% block main%}
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
                        <div class=\"tenor-gif-embed\" data-postid=\"7939307\" data-share-method=\"host\" data-width=\"30%\" data-aspect-ratio=\"0.8156028368794326\">
                            <a href=\"https://tenor.com/view/diabolo-satanas-rire-laughing-gif-7939307\">Diabolo Satanas GIF</a> from <a href=\"https://tenor.com/search/diabolo-gifs\">Diabolo GIFs</a>
                        </div>
                        <script type=\"text/javascript\" async src=\"https://tenor.com/embed.js\"></script>
                        <h3>Du bist zu klein, um die gute Musik zu hören..</h3>
                    </div>
                {% endif %}
            </main>
        {% endblock %}
        {% block footer %}
            {% include \"Base/_footerContact.html.twig\" %}
        {% endblock %}
", "exo03.html.twig", "/Applications/MAMP/htdocs/cours-init-sfy/templates/exo03.html.twig");
    }
}
