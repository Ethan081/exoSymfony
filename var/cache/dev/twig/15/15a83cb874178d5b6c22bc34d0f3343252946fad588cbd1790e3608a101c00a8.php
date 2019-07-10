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

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "        <main class=\"main\">
            <div class=\"paragraphe\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium ad cupiditate, delectus dolore dolores dolorum eligendi exercitationem,
                    fuga hic incidunt modi nisi nulla obcaecati placeat quaerat quam saepe soluta veniam?
                Accusantium animi asperiores aut debitis eos eum eveniet explicabo fuga id
                    illo impedit itaque iure magnam minus, molestiae, officia quibusdam quo repellat repellendus
                    sed similique sit soluta tempora vel veritatis.
                Aperiam dolore ducimus esse eveniet ex nesciunt nostrum officia rem,
                    repellat voluptatem? Aliquam animi consequuntur, culpa dicta esse fuga harum nihil odio repellat,
                    sit temporibus tenetur vel velit veritatis, vero!
                Aperiam assumenda atque consectetur cum dolorem doloribus harum libero maiores modi,
                    molestias perspiciatis quam quas quibusdam quidem quisquam quo repellat sequi totam. Accusamus ad
                    aperiam, molestiae necessitatibus quidem tenetur voluptate.
                </p>
            </div>
        </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "    <footer class=\"footer\">
    ";
        // line 27
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exo03");
        echo "\" class=\"button\">Acceuil</a>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  109 => 27,  106 => 25,  96 => 24,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"base.html.twig\" %}

{% block main%}
        <main class=\"main\">
            <div class=\"paragraphe\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusantium ad cupiditate, delectus dolore dolores dolorum eligendi exercitationem,
                    fuga hic incidunt modi nisi nulla obcaecati placeat quaerat quam saepe soluta veniam?
                Accusantium animi asperiores aut debitis eos eum eveniet explicabo fuga id
                    illo impedit itaque iure magnam minus, molestiae, officia quibusdam quo repellat repellendus
                    sed similique sit soluta tempora vel veritatis.
                Aperiam dolore ducimus esse eveniet ex nesciunt nostrum officia rem,
                    repellat voluptatem? Aliquam animi consequuntur, culpa dicta esse fuga harum nihil odio repellat,
                    sit temporibus tenetur vel velit veritatis, vero!
                Aperiam assumenda atque consectetur cum dolorem doloribus harum libero maiores modi,
                    molestias perspiciatis quam quas quibusdam quidem quisquam quo repellat sequi totam. Accusamus ad
                    aperiam, molestiae necessitatibus quidem tenetur voluptate.
                </p>
            </div>
        </main>
{% endblock %}

{% block footer %}
    <footer class=\"footer\">
    {# je cree un bouton avec un lien vers la page exo03 en utilisant Path.#}
        <a href=\"{{ path(\"exo03\")}}\" class=\"button\">Acceuil</a>
    </footer>
{% endblock %}

", "contact.html.twig", "/Applications/MAMP/htdocs/cours-init-sfy/templates/contact.html.twig");
    }
}
