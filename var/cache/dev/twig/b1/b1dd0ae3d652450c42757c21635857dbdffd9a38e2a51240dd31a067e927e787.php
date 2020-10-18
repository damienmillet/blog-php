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

/* auth/reset.twig */
class __TwigTemplate_0c74993190ef5d7267ca1cec8f274eb9251a4e9716f2646524651c670fda49b6 extends Template
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
        return "clean.layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth/reset.twig"));

        $this->parent = $this->loadTemplate("clean.layout.twig", "auth/reset.twig", 1);
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
        echo "    <form method=\"POST\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("auth/resetPassword");
        echo "\" class=\"form-signin text-center\">
        <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl();
        echo "\"><img class=\"rounded\" src=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("images/crab.png");
        echo "\" alt=\"\" width=\"100\" height=\"100\"></a>
        <h1 class=\"h3 mb-5 mt-5 font-weight-normal\">Réinitialisation de mot de passe</h1>
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"col-4 m-auto\">
            <div class=\"form-group\">
                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 10, $this->source); })()), "errors", [], "any", false, false, false, 10), "passwordEmpty", [], "any", false, false, false, 10) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 10, $this->source); })()), "errors", [], "any", false, false, false, 10), "passwordLenghtMin", [], "any", false, false, false, 10))) {
            echo " is-invalid ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 10, $this->source); })()), "values", [], "any", false, false, false, 10), "password", [], "any", false, false, false, 10)) {
            echo " is-valid ";
        }
        echo "\" placeholder=\"Choisissez un mot de passe\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 10, $this->source); })()), "values", [], "any", false, false, false, 10), "password", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
                <div class=\"invalid-feedback\">
                    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 12, $this->source); })()), "errors", [], "any", false, false, false, 12), "passwordEmpty", [], "any", false, false, false, 12)) {
            // line 13
            echo "                        Merci de bien vouloir choisir un mot de passe.
                    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 14, $this->source); })()), "errors", [], "any", false, false, false, 14), "passwordLenghtMin", [], "any", false, false, false, 14)) {
            // line 15
            echo "                        Le mot de passe doit etre composé d'un minimum de 12 caracteres.
                    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "errors", [], "any", false, false, false, 16), "passwordTwin", [], "any", false, false, false, 16)) {
            // line 17
            echo "                        Les mots de passe doivent etre identique.
                    ";
        }
        // line 19
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" id=\"password2\" name=\"password2\" class=\"form-control ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "errors", [], "any", false, false, false, 22), "password2Empty", [], "any", false, false, false, 22) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "errors", [], "any", false, false, false, 22), "password2Twin", [], "any", false, false, false, 22))) {
            echo " is-invalid ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "values", [], "any", false, false, false, 22), "password2", [], "any", false, false, false, 22)) {
            echo " is-valid ";
        }
        echo "\" placeholder=\"Choisissez un mot de passe\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 22, $this->source); })()), "values", [], "any", false, false, false, 22), "password2", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                <div class=\"invalid-feedback\">
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 24, $this->source); })()), "errors", [], "any", false, false, false, 24), "password2Empty", [], "any", false, false, false, 24)) {
            // line 25
            echo "                        Merci de bien vouloir choisir un mot de passe.
                    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 26, $this->source); })()), "errors", [], "any", false, false, false, 26), "password2Twin", [], "any", false, false, false, 26)) {
            // line 27
            echo "                        Les mots de passe doivent etre identique.
                    ";
        }
        // line 29
        echo "                </div>
            </div>
            <div class=\"mt-3\">
                <button class=\"btn btn-success btn-md btn-block\" type=\"submit\">Sauvegarder le mot de passe</button>
            </div>
            <div class=\"mt-3\">
                <a class=\"btn btn-danger btn-md btn-block\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl();
        echo "\" role=\"button\">Annuler</a>
            </div>
            <p class=\"text-muted\">&copy; 2019</p>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auth/reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 35,  140 => 29,  136 => 27,  134 => 26,  131 => 25,  129 => 24,  118 => 22,  113 => 19,  109 => 17,  107 => 16,  104 => 15,  102 => 14,  99 => 13,  97 => 12,  86 => 10,  80 => 7,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"clean.layout.twig\" %}

{% block content %}
    <form method=\"POST\" action=\"{{ url('auth/resetPassword') }}\" class=\"form-signin text-center\">
        <a href=\"{{ url() }}\"><img class=\"rounded\" src=\"{{ url('images/crab.png') }}\" alt=\"\" width=\"100\" height=\"100\"></a>
        <h1 class=\"h3 mb-5 mt-5 font-weight-normal\">Réinitialisation de mot de passe</h1>
        <input type=\"hidden\" name=\"token\" value=\"{{ token }}\">
        <div class=\"col-4 m-auto\">
            <div class=\"form-group\">
                <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control {% if session.errors.passwordEmpty or session.errors.passwordLenghtMin %} is-invalid {% elseif session.values.password %} is-valid {% endif %}\" placeholder=\"Choisissez un mot de passe\" value=\"{{ session.values.password }}\">
                <div class=\"invalid-feedback\">
                    {% if session.errors.passwordEmpty %}
                        Merci de bien vouloir choisir un mot de passe.
                    {% elseif session.errors.passwordLenghtMin %}
                        Le mot de passe doit etre composé d'un minimum de 12 caracteres.
                    {% elseif session.errors.passwordTwin %}
                        Les mots de passe doivent etre identique.
                    {% endif %}
                </div>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" id=\"password2\" name=\"password2\" class=\"form-control {% if session.errors.password2Empty or session.errors.password2Twin %} is-invalid {% elseif session.values.password2 %} is-valid {% endif %}\" placeholder=\"Choisissez un mot de passe\" value=\"{{ session.values.password2 }}\">
                <div class=\"invalid-feedback\">
                    {% if session.errors.password2Empty %}
                        Merci de bien vouloir choisir un mot de passe.
                    {% elseif session.errors.password2Twin %}
                        Les mots de passe doivent etre identique.
                    {% endif %}
                </div>
            </div>
            <div class=\"mt-3\">
                <button class=\"btn btn-success btn-md btn-block\" type=\"submit\">Sauvegarder le mot de passe</button>
            </div>
            <div class=\"mt-3\">
                <a class=\"btn btn-danger btn-md btn-block\" href=\"{{ url() }}\" role=\"button\">Annuler</a>
            </div>
            <p class=\"text-muted\">&copy; 2019</p>
        </div>
    </form>
{% endblock %}
", "auth/reset.twig", "/Users/damien/Projet/php/Damien-millet.dev/templates/auth/reset.twig");
    }
}
