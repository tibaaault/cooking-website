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

/* default/index.html.twig */
class __TwigTemplate_8e6da9684ae34c12b828a9850610bcc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3
        echo "    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the input field
            const searchInput = document.getElementById('search');

            // Add event listener to the input field for any input change
            searchInput.addEventListener('input', function () {
                filterRecipes();
            });

            // Function to filter recipes based on the search term
            function filterRecipes() {
                // Get the search term
                const searchTerm = searchInput.value.toLowerCase();

                // Get all recipe cards
                const recipeCards = document.querySelectorAll('.col-xl-4.col-sm.mb-5');

                // Loop through each recipe card
                recipeCards.forEach(function (card) {
                    // Get the recipe name from the card
                    const recipeName = card.querySelector('.card-title').innerText.toLowerCase();

                    // Check if the recipe name contains the search term
                    if (recipeName.includes(searchTerm)) {
                        // If it does, display the card
                        card.style.display = 'block';
                    } else {
                        // If not, hide the card
                        card.style.display = 'none';
                    }
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 41
        echo "\tAccueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 45
        echo "\t<div class=\"container-fluid  bg-light\">
\t\t<div class=\"d-flex\" style=\"height:50px\"></div>
\t\t<div class='row'>
\t\t\t<div class=\"col-xl-3 col-sm\">
\t\t\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t\t\t<h1>Filtres
\t\t\t\t\t\t<i class=\"fas fa-filter fa-fw\"></i>
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 20px;\"></div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" id=\"search\" placeholder=\"Rechercher un article\" aria-label=\"SearchBar\" aria-describedby=\"button-search\"/>
\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" id=\"searchButton\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-8 col-sm bg-secondary rounded rounded-9 mx-auto\">
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px\"></div>
\t\t\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 67
            echo "\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm mb-5\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRecette", ["id" => twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"card-link\">
\t\t\t\t\t\t\t\t\t<div class=\"card shadow-lg col-xl-12 mx-auto\" style=\"height: 350px;\">
\t\t\t\t\t\t\t\t\t\t<div style=\"height: 250px;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "img", [], "any", false, false, false, 71), "html", null, true);
            echo "\" class='img-fluid card-img-top mx-auto h-100 d-inline-block' alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "name", [], "any", false, false, false, 71), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</h5>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return array (  205 => 81,  192 => 74,  184 => 71,  178 => 68,  173 => 67,  169 => 66,  146 => 45,  136 => 44,  125 => 41,  115 => 40,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the input field
            const searchInput = document.getElementById('search');

            // Add event listener to the input field for any input change
            searchInput.addEventListener('input', function () {
                filterRecipes();
            });

            // Function to filter recipes based on the search term
            function filterRecipes() {
                // Get the search term
                const searchTerm = searchInput.value.toLowerCase();

                // Get all recipe cards
                const recipeCards = document.querySelectorAll('.col-xl-4.col-sm.mb-5');

                // Loop through each recipe card
                recipeCards.forEach(function (card) {
                    // Get the recipe name from the card
                    const recipeName = card.querySelector('.card-title').innerText.toLowerCase();

                    // Check if the recipe name contains the search term
                    if (recipeName.includes(searchTerm)) {
                        // If it does, display the card
                        card.style.display = 'block';
                    } else {
                        // If not, hide the card
                        card.style.display = 'none';
                    }
                });
            }
        });
    </script>
{% endblock %}

{% block title %}
\tAccueil
{% endblock %}

{% block main %}
\t<div class=\"container-fluid  bg-light\">
\t\t<div class=\"d-flex\" style=\"height:50px\"></div>
\t\t<div class='row'>
\t\t\t<div class=\"col-xl-3 col-sm\">
\t\t\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t\t\t<h1>Filtres
\t\t\t\t\t\t<i class=\"fas fa-filter fa-fw\"></i>
\t\t\t\t\t</h1>
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 20px;\"></div>
\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" id=\"search\" placeholder=\"Rechercher un article\" aria-label=\"SearchBar\" aria-describedby=\"button-search\"/>
\t\t\t\t\t\t<button class=\"btn btn-outline-secondary\" type=\"button\" id=\"searchButton\">
\t\t\t\t\t\t\t<i class=\"fas fa-search\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-8 col-sm bg-secondary rounded rounded-9 mx-auto\">
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px\"></div>
\t\t\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t{% for recette in recettes %}
\t\t\t\t\t\t\t<div class=\"col-xl-4 col-sm mb-5\" id=\"{{ recette.name }}\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('showRecette', {'id': recette.id}) }}\" class=\"card-link\">
\t\t\t\t\t\t\t\t\t<div class=\"card shadow-lg col-xl-12 mx-auto\" style=\"height: 350px;\">
\t\t\t\t\t\t\t\t\t\t<div style=\"height: 250px;\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"img/{{ recette.img }}\" class='img-fluid card-img-top mx-auto h-100 d-inline-block' alt=\"{{ recette.name }}\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ recette.name }}</h5>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "default/index.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/default/index.html.twig");
    }
}
