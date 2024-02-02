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

/* recette/showRecette.html.twig */
class __TwigTemplate_57ca7455263529cf366c67fb88ef6d0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/showRecette.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/showRecette.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/showRecette.html.twig", 1);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Recette
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div class=\"container-fluid bg-secondary p-0\">
\t\t<div class=\"col-xl-12 col-sm border\">
\t\t\t<div class=\"d-flex\" style=\"height: 50px\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-2 col-sm bg-secondary\"></div>
\t\t\t\t<div class=\"col-xl-4 col-sm mx-auto \" style=\"height:575px\">
\t\t\t\t\t<img src=\"/img/";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 12, $this->source); })()), "img", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\" rounded \" alt=\"Responsive image\" style=\"width: 100%; height: auto;!important  \">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 col-sm text-dark bg-light\" style=\"height:575px\">
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 30px \"></div>
\t\t\t\t\t<h2 class='text-center'>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 30px \"></div>
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 30px \"></div>
\t\t\t\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t\t\t\t<h5 class=\"ps-4\">Ingrédients requis :</h5>
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingredientRecettes"]) || array_key_exists("ingredientRecettes", $context) ? $context["ingredientRecettes"] : (function () { throw new RuntimeError('Variable "ingredientRecettes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredientRecette"]) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            // line 23
            echo "\t\t\t\t\t\t\t<label class=\"ps-5\">•
\t\t\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredientRecette"], "ingredient", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tquantité :
\t\t\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredientRecette"], "quantity", [], "any", false, false, false, 26), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredientRecette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-sm bg-secondary\"></div>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto card py-4 shadow-lg rounded rounded-6\">
\t\t\t<h3 class=\"ps-4 text-center\">Description</h3>
\t\t\t<p class=\"ps-5\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"container-fluid bg-secondary\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t<h3 class=\"ps-4 mb-4 text-center\">Préparation du plat</h3>
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 47, $this->source); })()), "steps", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 48
            echo "\t\t\t\t<div class=\"card my-3\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Étape numéro
\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["step"], "step", [], "any", false, false, false, 51), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t<p class=\"card-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["step"], "detail", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Il n'y a plus qu'à déguster. Bon appétit !</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"container-fluid bg-secondary\">
\t\t\t<div class=\"col-xl-10 col-sm mx-auto text-center\">
\t\t\t\t";
        // line 65
        if ((isset($context["favorite"]) || array_key_exists("favorite", $context) ? $context["favorite"] : (function () { throw new RuntimeError('Variable "favorite" does not exist.', 65, $this->source); })())) {
            // line 66
            echo "\t\t\t\t\t<form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeFavorite");
            echo "\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger mt-3\" id=\"removeFromFavorites\">Retirer des favoris</button>
\t\t\t\t\t</form>
\t\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t\t<form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addFavorite");
            echo "\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-3\" id=\"addToFavorites\">Ajouter aux favoris</button>
\t\t\t\t\t</form>
\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76))) {
            // line 77
            echo "\t\t\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editRecette", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning mt-3\" id=\"editRecette\">Modifier la recette</button>
\t\t\t\t\t</form>
\t\t\t\t\t<form action=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteRecette");
            echo "\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger mt-3\" id=\"deleteRecette\">Supprimer la recette</button>
\t\t\t\t\t</form>
\t\t\t\t";
        }
        // line 86
        echo "\t\t\t</div>
\t\t\t<div class=\"d-flex\" style=\"height: 200px\"></div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recette/showRecette.html.twig";
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
        return array (  262 => 86,  255 => 82,  251 => 81,  245 => 78,  240 => 77,  237 => 76,  230 => 72,  225 => 71,  218 => 67,  213 => 66,  211 => 65,  200 => 56,  190 => 52,  186 => 51,  181 => 48,  177 => 47,  166 => 39,  153 => 28,  145 => 26,  140 => 24,  137 => 23,  135 => 22,  131 => 21,  123 => 16,  116 => 12,  108 => 6,  98 => 5,  78 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block javascripts %}{% endblock %}
{% block title %}Recette
{% endblock %}
{% block body %}
\t<div class=\"container-fluid bg-secondary p-0\">
\t\t<div class=\"col-xl-12 col-sm border\">
\t\t\t<div class=\"d-flex\" style=\"height: 50px\"></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-2 col-sm bg-secondary\"></div>
\t\t\t\t<div class=\"col-xl-4 col-sm mx-auto \" style=\"height:575px\">
\t\t\t\t\t<img src=\"/img/{{ recettes.img }}\" class=\" rounded \" alt=\"Responsive image\" style=\"width: 100%; height: auto;!important  \">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 col-sm text-dark bg-light\" style=\"height:575px\">
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 30px \"></div>
\t\t\t\t\t<h2 class='text-center'>{{ recettes.name }}</h2>
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 30px \"></div>
\t\t\t\t\t<div class=\"d-flex\" style=\"height: 30px \"></div>
\t\t\t\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t\t\t\t<h5 class=\"ps-4\">Ingrédients requis :</h5>
\t\t\t\t\t\t{% for ingredientRecette in ingredientRecettes %}
\t\t\t\t\t\t\t{# Utilisez ingredientRecette.idIngredient.name pour accéder au nom de l'ingrédient #}
\t\t\t\t\t\t\t<label class=\"ps-5\">•
\t\t\t\t\t\t\t\t{{ ingredientRecette.ingredient.name }},
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tquantité :
\t\t\t\t\t\t\t\t{{ingredientRecette.quantity}}</label><br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-sm bg-secondary\"></div>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto card py-4 shadow-lg rounded rounded-6\">
\t\t\t<h3 class=\"ps-4 text-center\">Description</h3>
\t\t\t<p class=\"ps-5\">{{ recettes.description }}</p>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"container-fluid bg-secondary\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto\">
\t\t\t<h3 class=\"ps-4 mb-4 text-center\">Préparation du plat</h3>
\t\t\t{% for step in recettes.steps  %}
\t\t\t\t<div class=\"card my-3\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">Étape numéro
\t\t\t\t\t\t\t{{ step.step }}</h5>
\t\t\t\t\t\t<p class=\"card-text\">{{ step.detail }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t<div class=\"card\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<h5 class=\"card-title\">Il n'y a plus qu'à déguster. Bon appétit !</h5>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"container-fluid bg-secondary\">
\t\t\t<div class=\"col-xl-10 col-sm mx-auto text-center\">
\t\t\t\t{% if favorite %}
\t\t\t\t\t<form action=\"{{ path('removeFavorite') }}\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"{{ recettes.id }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger mt-3\" id=\"removeFromFavorites\">Retirer des favoris</button>
\t\t\t\t\t</form>
\t\t\t\t{% else %}
\t\t\t\t\t<form action=\"{{ path('addFavorite') }}\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"{{ recettes.id }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mt-3\" id=\"addToFavorites\">Ajouter aux favoris</button>
\t\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t\t{% if recettes.user.id == app.user.id %}
\t\t\t\t\t<form action=\"{{ path('editRecette', {'id': recettes.id }) }}\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"{{ recettes.id }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-warning mt-3\" id=\"editRecette\">Modifier la recette</button>
\t\t\t\t\t</form>
\t\t\t\t\t<form action=\"{{ path('deleteRecette') }}\" method=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"id_recette\" value=\"{{ recettes.id }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger mt-3\" id=\"deleteRecette\">Supprimer la recette</button>
\t\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"d-flex\" style=\"height: 200px\"></div>
\t\t</div>
\t</div>
\t
{% endblock %}
", "recette/showRecette.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/recette/showRecette.html.twig");
    }
}
