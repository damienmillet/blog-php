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

/* admin/articles.html.twig */
class __TwigTemplate_d21aa25d9e0b53e4a37e3892db5eaf6a9c51aff9177d20a562845cf62092c446 extends Template
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
        return "admin.layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/articles.html.twig"));

        $this->parent = $this->loadTemplate("admin.layout.twig", "admin/articles.html.twig", 1);
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
        echo "    <div>
        <a class=\"btn btn-primary mt-4\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin/ajouter-article");
        echo "\" role=\"button\">Ajouter</a>
        <input class=\"form-control mt-4\" id=\"myInput\" type=\"text\" placeholder=\"Chercher..\">
        <section class=\"article-list mt-3 pb-5\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "                <div class=\"rounded each media mySearch\">
                    <div class=\"mr-4 align-self-center\">
                        <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(("blog/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 11)));
            echo "\"><img src=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(("images/upload/" . twig_get_attribute($this->env, $this->source, $context["article"], "logo", [], "any", false, false, false, 11)));
            echo "\" class=\"rounded\" width=\"60\" height=\"60\"></a>
                    </div>
                    <div class=\"media-body align-self-center\">
                        <div class=\"row\">
                            <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(("blog/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 15)));
            echo "\">
                                <h2 class=\"each-title text-dark-blue\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
                            </a>
                            <div class=\"ml-auto\">
                                <a class=\"btn btn-primary\" href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(("admin/modifier-article/" . twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 19)));
            echo "\">Modifier</a>
                                <a class=\"btn btn-danger text-white\" data-toggle=\"modal\" data-target=\"#ModalDelete-";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 25
            $this->loadTemplate("admin/articleDelete-modal.twig", "admin/articles.html.twig", 25)->display($context);
            // line 26
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <p class=\"text-center card bg-alerte\">Aucun article pour le moment</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 29,  145 => 27,  132 => 26,  130 => 25,  122 => 20,  118 => 19,  112 => 16,  108 => 15,  99 => 11,  95 => 9,  77 => 8,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin.layout.twig\" %}

{% block content %}
    <div>
        <a class=\"btn btn-primary mt-4\" href=\"{{ path('admin/ajouter-article') }}\" role=\"button\">Ajouter</a>
        <input class=\"form-control mt-4\" id=\"myInput\" type=\"text\" placeholder=\"Chercher..\">
        <section class=\"article-list mt-3 pb-5\">
            {% for article in articles %}
                <div class=\"rounded each media mySearch\">
                    <div class=\"mr-4 align-self-center\">
                        <a href=\"{{ url('blog/article/' ~ article.id) }}\"><img src=\"{{ url('images/upload/' ~ article.logo) }}\" class=\"rounded\" width=\"60\" height=\"60\"></a>
                    </div>
                    <div class=\"media-body align-self-center\">
                        <div class=\"row\">
                            <a href=\"{{ url('blog/article/' ~ article.id) }}\">
                                <h2 class=\"each-title text-dark-blue\">{{ article.title }}</h2>
                            </a>
                            <div class=\"ml-auto\">
                                <a class=\"btn btn-primary\" href=\"{{ url('admin/modifier-article/' ~ article.id) }}\">Modifier</a>
                                <a class=\"btn btn-danger text-white\" data-toggle=\"modal\" data-target=\"#ModalDelete-{{ article.id }}\">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
                {% include 'admin/articleDelete-modal.twig' %}
            {% else %}
                <p class=\"text-center card bg-alerte\">Aucun article pour le moment</p>
            {% endfor %}
        </section>
    </div>
{% endblock %}
", "admin/articles.html.twig", "/Users/damien/Projet/php/Damien-millet.dev/templates/admin/articles.html.twig");
    }
}
