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

/* recette/userRecipe.html.twig */
class __TwigTemplate_82677ad30c61c2513e2d3d5b6d7ca370 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/userRecipe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/userRecipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/userRecipe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My Favourites
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"container\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto card py-4 shadow-lg rounded rounded-6\">
\t\t\t<h3 class=\"ps-4 text-center\">My Recipes</h3>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"col-xl-8 col-sm bg-secondary rounded rounded-9 mx-auto\">
\t\t<div class=\"d-flex\" style=\"height: 50px\"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 19
        if (twig_test_empty((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "\t\t\t\t\t<div class=\"col-xl-10 col-sm mb-5 mx-auto\">
\t\t\t\t\t\t<div class=\"card shadow-lg col-xl mx-auto\">
\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Aucune recette</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 29
            echo "\t\t\t\t\t<div class=\"col-xl-4 col-sm mb-5\">
\t\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showRecette", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"card-link\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg col-xl mx-auto\" style=\"background-size : contain; \">
\t\t\t\t\t\t\t\t<div style=\"height: 250px;\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "img", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class='img-fluid card-img-top mx-auto h-100 d-inline-block' alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "\" style=\"width:100%; height:auto;\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex\" style=\"height: 200px \"></div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recette/userRecipe.html.twig";
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
        return array (  149 => 42,  137 => 36,  129 => 33,  123 => 30,  120 => 29,  115 => 28,  105 => 20,  103 => 19,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Favourites
{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto card py-4 shadow-lg rounded rounded-6\">
\t\t\t<h3 class=\"ps-4 text-center\">My Recipes</h3>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"col-xl-8 col-sm bg-secondary rounded rounded-9 mx-auto\">
\t\t<div class=\"d-flex\" style=\"height: 50px\"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t<div class=\"row\">
\t\t\t\t{% if recipes is empty %}
\t\t\t\t\t<div class=\"col-xl-10 col-sm mb-5 mx-auto\">
\t\t\t\t\t\t<div class=\"card shadow-lg col-xl mx-auto\">
\t\t\t\t\t\t\t<div class=\"card-body text-center\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Aucune recette</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<div class=\"col-xl-4 col-sm mb-5\">
\t\t\t\t\t\t<a href=\"{{ path('showRecette', {'id': recipe.id }) }}\" class=\"card-link\">
\t\t\t\t\t\t\t<div class=\"card shadow-lg col-xl mx-auto\" style=\"background-size : contain; \">
\t\t\t\t\t\t\t\t<div style=\"height: 250px;\">
\t\t\t\t\t\t\t\t\t<img src=\"/img/{{ recipe.img }}\" class='img-fluid card-img-top mx-auto h-100 d-inline-block' alt=\"{{ recipe.name }}\" style=\"width:100%; height:auto;\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{ recipe.name }}</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex\" style=\"height: 200px \"></div>
</div>{% endblock %}
", "recette/userRecipe.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/recette/userRecipe.html.twig");
    }
}
