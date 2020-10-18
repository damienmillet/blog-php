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
class __TwigTemplate_695c03f9c2638d37ff3b2a73b60b97ff9c43112a3506047139b5400fbd2872a2 extends Template
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
        echo "
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
                <img class=\"card-img-top\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avatar.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Envie d'en savoir plus ?</p>
                    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("resources/Cv.pdf"), "html", null, true);
        echo "\" class=\"btn btn-primary\" target=\"_blank\">Lire mon cv</a>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 : Last Article -->
    <section class=\"article-list mb-5\" id=\"lastArticle\">
        <h2 class=\"text-center mb-5\">Derniers Articles</h2>
        <div class=\"\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 29, $this->source); })()), 0, 5));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(("blog/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 30)));
            echo "\" class=\"rounded media each\">
                    <div class=\"mr-3\">
                        <img class=\"rounded\" ";
            // line 32
            echo " width=\"30\"
                             height=\"30\" alt=\"logo\">
                    </div>
                    <div class=\"media-body align-self-center text-truncate\">
                        <h2 class=\"each-title text-truncate\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</h2>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                <p class=\"text-center card bg-alerte\">Aucun article pour le moment</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </section>
    <!-- section 3 : Contact -->
    <section id=\"contact\">
        <div class=\"jumbotron border\">
            <h2 class=\"text-center mb-5\">Me Contacter</h2>
            <form method=\"POST\" action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact-mail");
        echo "\" class=\"col-6 m-auto\">
                <div class=\"form-group\">
                    <label>
                        ";
        // line 52
        echo "</label>
                    <div class=\"invalid-feedback\">
                        ";
        // line 59
        echo "                    </div>
                </div>
                <div class=\"form-group\">
                    <label>
                        <input class=\"form-control";
        // line 63
        echo "\"
                               type=\"text\" name=\"mail\" placeholder=\"Votre email..\" value=\"";
        // line 64
        echo "\">
                    </label>
                    <div class=\"invalid-feedback\">
                        ";
        // line 72
        echo "                    </div>
                </div>
                <div class=\"form-group\">
                    <label>
                        <textarea
                                class=\"form-control";
        // line 77
        echo "\"
                                name=\"content\"
                                placeholder=\"Laisser un message..\">";
        // line 79
        echo "</textarea>
                    </label>
                    <div class=\"invalid-feedback\">
                       ";
        // line 87
        echo "                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-dark justify-content-center\">
                </div>
            </form>
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
        return array (  182 => 87,  177 => 79,  173 => 77,  166 => 72,  161 => 64,  158 => 63,  152 => 59,  148 => 52,  142 => 48,  134 => 42,  127 => 40,  118 => 36,  112 => 32,  106 => 30,  101 => 29,  89 => 20,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
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
                <img class=\"card-img-top\" src=\"{{ asset('images/avatar.png') }}\" alt=\"Card image\">
                <div class=\"card-body\">
                    <p class=\"card-text\">Envie d'en savoir plus ?</p>
                    <a href=\"{{ asset('resources/Cv.pdf') }}\" class=\"btn btn-primary\" target=\"_blank\">Lire mon cv</a>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 : Last Article -->
    <section class=\"article-list mb-5\" id=\"lastArticle\">
        <h2 class=\"text-center mb-5\">Derniers Articles</h2>
        <div class=\"\">
            {% for article in articles|slice(0, 5) %}
                <a href=\"{{ path('blog/article/' ~ article.id) }}\" class=\"rounded media each\">
                    <div class=\"mr-3\">
                        <img class=\"rounded\" {#src=\"{{ path('images/upload/' ~ article.logo) }}\"#} width=\"30\"
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
            <form method=\"POST\" action=\"{{ path('contact-mail') }}\" class=\"col-6 m-auto\">
                <div class=\"form-group\">
                    <label>
                        {#<input class=\"form-control{% if session.errors.nameEmpty or session.errors.nameLenghtMin %} is-invalid {% endif %}{% if session.values.name %} is-valid {% endif %}\" type=\"text\" name=\"name\" placeholder=\"Votre nom..\" value=\"{{ session.values.name }}\">
                    #}</label>
                    <div class=\"invalid-feedback\">
                        {#{% if session.errors.nameEmpty %}
                            L'identifiant n'a pas été renseigné.
                        {% elseif session.errors.nameLenghtMin %}
                            Merci de renseigner un nom de plus de 3 caracteres
                        {% endif %}#}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label>
                        <input class=\"form-control{#{% if session.errors.mailEmpty or session.errors.mailValid %} is-invalid {% endif %}{% if session.values.mail %} is-valid {% endif %}#}\"
                               type=\"text\" name=\"mail\" placeholder=\"Votre email..\" value=\"{#{{ session.values.mail }}#}\">
                    </label>
                    <div class=\"invalid-feedback\">
                        {#{% if session.errors.mailEmpty %}
                            Merci de bien vouloir renseigner votre email.
                        {% elseif session.errors.mailValid %}
                            Le mail n'est pas conforme.
                        {% endif %}#}
                    </div>
                </div>
                <div class=\"form-group\">
                    <label>
                        <textarea
                                class=\"form-control{#{% if session.errors.contentEmpty or session.errors.contentLenghtMin %} is-invalid {% endif %}{% if session.values.content %} is-valid {% endif %}\"#}\"
                                name=\"content\"
                                placeholder=\"Laisser un message..\">{#{{ session.values.content }}#}</textarea>
                    </label>
                    <div class=\"invalid-feedback\">
                       {# {% if session.errors.contentEmpty %}
                            N'oubliez pas d'ecrire un message &#128517;
                        {% elseif session.errors.contentLenghtMin %}
                            Nombre de caracteres min 15
                        {% endif %}#}
                    </div>
                </div>
                <div class=\"text-center\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-dark justify-content-center\">
                </div>
            </form>
        </div>
    </section>
{% endblock %}
", "home/index.html.twig", "/Users/damien/Projet/php/Damien-millet.dev/templates/home/index.html.twig");
    }
}
