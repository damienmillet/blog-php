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

/* base.html.twig */
class __TwigTemplate_a9978a9f5da68caba276f9c6d0529aeb1868d95e49724b6177a33821cd7355b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 15
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/ico.png"), "html", null, true);
        echo "\"/>
</head>
<body onload=\"document.body.style.opacity='1'\" class=\"bg-cloud\">
<header class=\"bg-cloud sticky-top mb-4\">
    <nav class=\"navbar navbar-light navbar-expand-sm\">
        <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/crab.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"\" class=\"mr-3 rounded\">
            <b>Damien Millet</b>
        </a>
        <button class=\"navbar-toggler ml-auto btn-light\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <i class=\"fas fa-ellipsis-h\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav ml-auto mt-2 mt-sm-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "#contact\">Contact</a>
                </li>
                ";
        // line 65
        echo "            </ul>
        </div>
    </nav>
</header>

<main role=\"main\" class=\"container pb-5 pt-5\">
";
        // line 72
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "    ";
        // line 74
        echo "</main>
";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "<footer class=\"bg-cloud fixed-bottom\">
    <nav class=\"navbar container navbar-expand navbar-light\">
        <div class=\"navbar-nav\">
            <ul class=\"nav\">
                ";
        // line 88
        echo "            </ul>
        </div>
        <div class=\"navbar-nav ml-auto\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"https://twitter.com/MilletDamien\">
                        <i class=\"fab fa-twitter-square\" aria-hidden=\"true\"></i>
                        <div>Twitter</div>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"https://www.linkedin.com/in/damien-millet-a3b97a174/\">
                        <i class=\"fab fa-linkedin\" aria-hidden=\"true\"></i>
                        <div>Linkedin</div>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"https://github.com/CrabThug\">
                        <i class=\"fab fa-github-square\" aria-hidden=\"true\"></i>
                        <div>Github</div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</footer>
";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 114,  222 => 75,  204 => 72,  186 => 21,  167 => 20,  155 => 115,  153 => 114,  125 => 88,  119 => 76,  117 => 75,  114 => 74,  112 => 73,  109 => 72,  101 => 65,  96 => 43,  90 => 40,  76 => 29,  72 => 28,  64 => 23,  61 => 22,  59 => 21,  55 => 20,  48 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
#}

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('images/ico.png') }}\"/>
</head>
<body onload=\"document.body.style.opacity='1'\" class=\"bg-cloud\">
<header class=\"bg-cloud sticky-top mb-4\">
    <nav class=\"navbar navbar-light navbar-expand-sm\">
        <a class=\"navbar-brand\" href=\"{{ path('blog') }}\">
            <img src=\"{{ asset('images/crab.png') }}\" width=\"30\" height=\"30\" alt=\"\" class=\"mr-3 rounded\">
            <b>Damien Millet</b>
        </a>
        <button class=\"navbar-toggler ml-auto btn-light\" type=\"button\" data-toggle=\"collapse\"
                data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <i class=\"fas fa-ellipsis-h\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav ml-auto mt-2 mt-sm-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('blog') }}\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('blog') }}#contact\">Contact</a>
                </li>
                {#               {% if session.role > 3 %}
                                   {% if session.role != 7 %}
                                       <li class=\"nav-item\">
                                           <a class=\"nav-link\" href=\"{{ path('membre') }}\">
                                               <i class=\"fas fa-user\"></i>
                                           </a>
                                       </li>
                                   {% endif %}
                                   <li class=\"nav-item\">
                                       <a class=\"nav-link\" href=\"{{ path('auth/deconnexion') }}\">
                                           <i class=\"fas fa-sign-out-alt\"></i>
                                       </a>
                                   </li>
                               {% else %}
                                   <li class=\"nav-item\">
                                       <a class=\"nav-link\" href=\"{{ path('auth/se-connecter') }}\">
                                           <i class=\"fas fa-sign-in-alt\"></i>
                                       </a>
                                   </li>
                               {% endif %}#}
            </ul>
        </div>
    </nav>
</header>

<main role=\"main\" class=\"container pb-5 pt-5\">
{#    {% include \"../templates/auth\" %}#}
    {% block content %}{% endblock %}
    {#    {{ unsetSession('referer') }}#}
</main>
{% block body %}{% endblock %}
<footer class=\"bg-cloud fixed-bottom\">
    <nav class=\"navbar container navbar-expand navbar-light\">
        <div class=\"navbar-nav\">
            <ul class=\"nav\">
                {#{% if session.role == 7 %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" #}{#href=\"{{ path('admin') }}\"#}{#>
                            <i class=\"fas fa-sliders-h\"></i>
                            <div>Administration</div>
                        </a>
                    </li>
                {% endif %}#}
            </ul>
        </div>
        <div class=\"navbar-nav ml-auto\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"https://twitter.com/MilletDamien\">
                        <i class=\"fab fa-twitter-square\" aria-hidden=\"true\"></i>
                        <div>Twitter</div>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"https://www.linkedin.com/in/damien-millet-a3b97a174/\">
                        <i class=\"fab fa-linkedin\" aria-hidden=\"true\"></i>
                        <div>Linkedin</div>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"https://github.com/CrabThug\">
                        <i class=\"fab fa-github-square\" aria-hidden=\"true\"></i>
                        <div>Github</div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</footer>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/damien/Projet/php/Damien-millet.dev/templates/base.html.twig");
    }
}
