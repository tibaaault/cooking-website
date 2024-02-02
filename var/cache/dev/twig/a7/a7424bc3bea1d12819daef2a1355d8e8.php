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
class __TwigTemplate_35abe972ba5fdc6d96a9a2ed8534f04b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'main' => [$this, 'block_main'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
\t\t";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "\t</head>

\t<body>
\t\t<!-- Navbar -->
\t\t<nav
\t\t\tclass=\"navbar navbar-expand-lg navbar-light bg-body-tertiary py-4\">
\t\t\t<!-- Container wrapper -->
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- Navbar brand -->
\t\t\t\t<a class=\"navbar-brand me-2\" href=\"/\">
\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cook.png"), "html", null, true);
        echo "\" height=\"40\" alt=\"MDB Logo\" loading=\"lazy\" style=\"margin-top: -1px;\"/>
\t\t\t\t</a>

\t\t\t\t<!-- Toggle button -->
\t\t\t\t<button data-mdb-collapse-init class=\"navbar-toggler\" type=\"button\" data-mdb-target=\"#navbarButtonsExample\" aria-controls=\"navbarButtonsExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</button>

\t\t\t\t<!-- Collapsible wrapper -->
\t\t\t\t<div
\t\t\t\t\tclass=\"collapse navbar-collapse\" id=\"navbarButtonsExample\">
\t\t\t\t\t<!-- Left links -->
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">La cuisine de Thibault</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">Listing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/recipe/new\">Add Recipe</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/recipe/user\">My Recipes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/user/favorites\">My Favourites</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Left links -->
\t\t\t\t\t";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "\t\t\t\t\t\t<a href=\"/logout\">
\t\t\t\t\t\t\t<button data-mdb-ripple-init type=\"button\" class=\"btn btn-link px-3 me-2\">
\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<a href=\"/login\">
\t\t\t\t\t\t\t\t<button data-mdb-ripple-init type=\"button\" class=\"btn btn-link px-3 me-2\">
\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"/register\">
\t\t\t\t\t\t\t\t<button data-mdb-ripple-init type=\"button\" class=\"btn btn-primary me-3\">
\t\t\t\t\t\t\t\t\tSign up for free
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t<!-- Collapsible wrapper -->
\t\t\t</div>
\t\t\t<!-- Container wrapper -->
\t\t</nav>
\t\t<!-- Navbar -->
\t\t<header
\t\t\tclass=\"bg-secondary\">
\t\t\t";
        // line 101
        echo "\t\t\t<div class=\"col-xl-12 text-center mx-auto bg-light\">
\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cook.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height:30dvh!important\">
\t\t\t</div>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 106
        $this->displayBlock('main', $context, $blocks);
        // line 110
        echo "\t\t</main>

\t\t";
        // line 115
        echo "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "\t\t\t<!-- Font Awesome -->
\t\t\t<link
\t\t\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\"/>
\t\t\t<!-- MDB -->
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css\" rel=\"stylesheet\"/>
\t\t\t";
        // line 20
        echo "

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "\t\t <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" crossorigin=\"anonymous\"></script>

\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 107
        echo "\t\t\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  282 => 107,  271 => 108,  268 => 107,  258 => 106,  245 => 25,  235 => 24,  223 => 20,  213 => 11,  203 => 10,  185 => 6,  173 => 115,  169 => 110,  167 => 106,  160 => 102,  157 => 101,  148 => 93,  132 => 79,  124 => 73,  122 => 72,  118 => 70,  106 => 60,  104 => 59,  82 => 40,  69 => 29,  67 => 24,  64 => 23,  62 => 10,  57 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">

\t\t{% block stylesheets %}
\t\t\t<!-- Font Awesome -->
\t\t\t<link
\t\t\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\"/>
\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\"/>
\t\t\t<!-- MDB -->
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css\" rel=\"stylesheet\"/>
\t\t\t{# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/> #}


\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" crossorigin=\"anonymous\"></script>

\t\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
\t\t{% endblock %}
\t</head>

\t<body>
\t\t<!-- Navbar -->
\t\t<nav
\t\t\tclass=\"navbar navbar-expand-lg navbar-light bg-body-tertiary py-4\">
\t\t\t<!-- Container wrapper -->
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- Navbar brand -->
\t\t\t\t<a class=\"navbar-brand me-2\" href=\"/\">
\t\t\t\t\t<img src=\"{{asset(\"img/cook.png\")}}\" height=\"40\" alt=\"MDB Logo\" loading=\"lazy\" style=\"margin-top: -1px;\"/>
\t\t\t\t</a>

\t\t\t\t<!-- Toggle button -->
\t\t\t\t<button data-mdb-collapse-init class=\"navbar-toggler\" type=\"button\" data-mdb-target=\"#navbarButtonsExample\" aria-controls=\"navbarButtonsExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<i class=\"fas fa-bars\"></i>
\t\t\t\t</button>

\t\t\t\t<!-- Collapsible wrapper -->
\t\t\t\t<div
\t\t\t\t\tclass=\"collapse navbar-collapse\" id=\"navbarButtonsExample\">
\t\t\t\t\t<!-- Left links -->
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">La cuisine de Thibault</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">Listing</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/recipe/new\">Add Recipe</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/recipe/user\">My Recipes</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/user/favorites\">My Favourites</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Left links -->
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<a href=\"/logout\">
\t\t\t\t\t\t\t<button data-mdb-ripple-init type=\"button\" class=\"btn btn-link px-3 me-2\">
\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t<a href=\"/login\">
\t\t\t\t\t\t\t\t<button data-mdb-ripple-init type=\"button\" class=\"btn btn-link px-3 me-2\">
\t\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"/register\">
\t\t\t\t\t\t\t\t<button data-mdb-ripple-init type=\"button\" class=\"btn btn-primary me-3\">
\t\t\t\t\t\t\t\t\tSign up for free
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<!-- Collapsible wrapper -->
\t\t\t</div>
\t\t\t<!-- Container wrapper -->
\t\t</nav>
\t\t<!-- Navbar -->
\t\t<header
\t\t\tclass=\"bg-secondary\">
\t\t\t{# <div class=\"d-flex\" style=\"height: 50px\"></div> #}
\t\t\t<div class=\"col-xl-12 text-center mx-auto bg-light\">
\t\t\t\t<img class=\"img-fluid\" src=\"{{asset(\"img/cook.png\")}}\" alt=\"\" style=\"height:30dvh!important\">
\t\t\t</div>
\t\t</header>
\t\t<main>
\t\t\t{% block main %}
\t\t\t\t{% block body %}{% endblock %}

\t\t\t{% endblock %}
\t\t</main>

\t\t{# <footer class=\"bg-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead\">Test</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</footer> #}
\t</body>
</html>
", "base.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/base.html.twig");
    }
}
