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

/* home/index.html.twig */
class __TwigTemplate_ed55021a6063794b9a9f535f292bad04dd53c857fe8b0ed0bc79bb20ba729fba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- section 1 : Presentation -->
    <section id=\"presentation\">
        <div class=\"row\">
            <div class=\"m-auto\">
                <h1 class=\"text-center\">Je suis Damien</h1>
                <p>
                    Je developpe en php et j'aime les crabes et le travail propre et épuré.<br>
                    Actuellement en formation avec OpenClassrooms et bientot disponible.<br>
                    Suivez-moi sur mes reseaux ou contactez moi directement depuis ce site. &#128540;
                </p>
            </div>
            <div class=\"rounded profile m-auto\">
                <img class=\"card-img rounded\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.png"), "html", null, true);
        echo "\" alt=\"Card image\">
            </div>
        </div>
    </section>
    <!-- section 2 : Last Article -->
    <section class=\"article-list mb-5\" id=\"lastArticle\">
        <h2 class=\"text-center mb-5\">Derniers Articles</h2>
        <div class=\"\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"rounded media each\">
                    <div class=\"mr-3\">
                        <img class=\"rounded\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/upload/" . twig_get_attribute($this->env, $this->source, $context["article"], "logo", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" width=\"30\"
                             height=\"30\" alt=\"logo\">
                    </div>
                    <div class=\"media-body align-self-center text-truncate\">
                        <h2 class=\"each-title text-truncate\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</h2>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <p class=\"text-center card bg-alerte\">Aucun article pour le moment</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </section>
    <!-- section 3 : Contact -->
    <section id=\"contact\">
        <div class=\"jumbotron border\">
            <h2 class=\"text-center mb-5\">Me Contacter</h2>
            <div class=\"col-6 mx-auto\">
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form');
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  127 => 37,  120 => 35,  111 => 31,  104 => 27,  98 => 25,  93 => 24,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block content %}
    <!-- section 1 : Presentation -->
    <section id=\"presentation\">
        <div class=\"row\">
            <div class=\"m-auto\">
                <h1 class=\"text-center\">Je suis Damien</h1>
                <p>
                    Je developpe en php et j'aime les crabes et le travail propre et épuré.<br>
                    Actuellement en formation avec OpenClassrooms et bientot disponible.<br>
                    Suivez-moi sur mes reseaux ou contactez moi directement depuis ce site. &#128540;
                </p>
            </div>
            <div class=\"rounded profile m-auto\">
                <img class=\"card-img rounded\" src=\"{{ asset('images/avatar.png') }}\" alt=\"Card image\">
            </div>
        </div>
    </section>
    <!-- section 2 : Last Article -->
    <section class=\"article-list mb-5\" id=\"lastArticle\">
        <h2 class=\"text-center mb-5\">Derniers Articles</h2>
        <div class=\"\">
            {% for article in articles|slice(0, 5) %}
                <a href=\"{{ path('blog',{'id':article.id}) }}\" class=\"rounded media each\">
                    <div class=\"mr-3\">
                        <img class=\"rounded\" src=\"{{ asset('images/upload/' ~ article.logo) }}\" width=\"30\"
                             height=\"30\" alt=\"logo\">
                    </div>
                    <div class=\"media-body align-self-center text-truncate\">
                        <h2 class=\"each-title text-truncate\">{{ article.title }}</h2>
                    </div>
                </a>
            {% else %}
                <p class=\"text-center card bg-alerte\">Aucun article pour le moment</p>
            {% endfor %}
        </div>
    </section>
    <!-- section 3 : Contact -->
    <section id=\"contact\">
        <div class=\"jumbotron border\">
            <h2 class=\"text-center mb-5\">Me Contacter</h2>
            <div class=\"col-6 mx-auto\">
                {{ form(form) }}
            </div>
        </div>
    </section>
{% endblock %}
", "home/index.html.twig", "/Users/damien/Projet/php/Damien-millet.dev/templates/home/index.html.twig");
    }
}
