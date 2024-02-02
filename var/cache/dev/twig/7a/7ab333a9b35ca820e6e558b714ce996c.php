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

/* recette/newRecipe.html.twig */
class __TwigTemplate_c76101dbf262a04c635b76eba1f367f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/newRecipe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/newRecipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/newRecipe.html.twig", 1);
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

        echo "New Recipe
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
\t\t\t<h3 class=\"ps-4 text-center\">Nouvelle Recette</h3>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card p-4 shadow-lg rounded\">
\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addRecipeForm"]) || array_key_exists("addRecipeForm", $context) ? $context["addRecipeForm"] : (function () { throw new RuntimeError('Variable "addRecipeForm" does not exist.', 18, $this->source); })()), 'errors');
        echo "
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addRecipeForm"]) || array_key_exists("addRecipeForm", $context) ? $context["addRecipeForm"] : (function () { throw new RuntimeError('Variable "addRecipeForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addRecipeForm"]) || array_key_exists("addRecipeForm", $context) ? $context["addRecipeForm"] : (function () { throw new RuntimeError('Variable "addRecipeForm" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la recette"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addRecipeForm"]) || array_key_exists("addRecipeForm", $context) ? $context["addRecipeForm"] : (function () { throw new RuntimeError('Variable "addRecipeForm" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Description de la recette"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"ingredients\">
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" id=\"add-input\" class=\"btn btn-lg btn-primary\">Ajouter un ingredient</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<br/>
\t\t\t\t<div id=\"steps\">
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" id=\"add-input2\" class=\"btn btn-lg btn-primary\">Ajouter une étape</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addRecipeForm"]) || array_key_exists("addRecipeForm", $context) ? $context["addRecipeForm"] : (function () { throw new RuntimeError('Variable "addRecipeForm" does not exist.', 38, $this->source); })()), "img", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ajouter une image"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-secondary\">Créer la recette</button>
\t\t\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addRecipeForm"]) || array_key_exists("addRecipeForm", $context) ? $context["addRecipeForm"] : (function () { throw new RuntimeError('Variable "addRecipeForm" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex\" style=\"height: 200px \"></div>
</div>
<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
let counter = 0;
\$('#add-input').click(function () {
counter++;
\$('#ingredients').append('<input type=\"text\" name=\"ingredient' + counter + '\" id=\"recipe_create_ingredients p-2\" class=\"form-control\" placeholder=\"Ingrédient\" required=\"required\">' + '<input type=\"text\" name=\"qqt' + counter + '\" id=\"recipe_create_quantities\" class=\"form-control p-2\" placeholder=\"Quantité\" required=\"required\">' + '<br>');
});

let counter2 = 0;
\$('#add-input2').click(function () {
counter2++;
\$('#steps').append('<input type=\"text\" name=\"step' + counter2 + '\" id=\"recipe_create_steps\" class=\"form-control p-2\" placeholder=\"Etape\" required=\"required\">' + '<br>');
});
});
</script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recette/newRecipe.html.twig";
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
        return array (  141 => 42,  134 => 38,  117 => 24,  111 => 21,  106 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Recipe
{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto card py-4 shadow-lg rounded rounded-6\">
\t\t\t<h3 class=\"ps-4 text-center\">Nouvelle Recette</h3>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card p-4 shadow-lg rounded\">
\t\t\t\t{{ form_errors(addRecipeForm) }}
\t\t\t\t{{ form_start(addRecipeForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_row(addRecipeForm.name, {'attr': {'class': 'form-control', 'placeholder': 'Nom de la recette'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_row(addRecipeForm.description, {'attr': {'class': 'form-control', 'placeholder': 'Description de la recette'}}) }}
\t\t\t\t</div>
\t\t\t\t<div id=\"ingredients\">
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" id=\"add-input\" class=\"btn btn-lg btn-primary\">Ajouter un ingredient</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<br/>
\t\t\t\t<div id=\"steps\">
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" id=\"add-input2\" class=\"btn btn-lg btn-primary\">Ajouter une étape</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<div>
\t\t\t\t\t{{ form_row(addRecipeForm.img, {'attr': {'class': 'form-control', 'placeholder': 'Ajouter une image'}}) }}
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-secondary\">Créer la recette</button>
\t\t\t\t{{ form_end(addRecipeForm) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex\" style=\"height: 200px \"></div>
</div>
<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
let counter = 0;
\$('#add-input').click(function () {
counter++;
\$('#ingredients').append('<input type=\"text\" name=\"ingredient' + counter + '\" id=\"recipe_create_ingredients p-2\" class=\"form-control\" placeholder=\"Ingrédient\" required=\"required\">' + '<input type=\"text\" name=\"qqt' + counter + '\" id=\"recipe_create_quantities\" class=\"form-control p-2\" placeholder=\"Quantité\" required=\"required\">' + '<br>');
});

let counter2 = 0;
\$('#add-input2').click(function () {
counter2++;
\$('#steps').append('<input type=\"text\" name=\"step' + counter2 + '\" id=\"recipe_create_steps\" class=\"form-control p-2\" placeholder=\"Etape\" required=\"required\">' + '<br>');
});
});
</script>{% endblock %}
", "recette/newRecipe.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/recette/newRecipe.html.twig");
    }
}
