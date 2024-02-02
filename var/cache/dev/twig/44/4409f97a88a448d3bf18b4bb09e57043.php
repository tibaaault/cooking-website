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

/* recette/editRecipe.html.twig */
class __TwigTemplate_8cf8999d58f92cf4d9f9e61d921aa2d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/editRecipe.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/editRecipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/editRecipe.html.twig", 1);
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

        echo "Modifier la recette
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
\t\t\t<h3 class=\"ps-4 text-center\">Modifier la Recette</h3>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card p-4 shadow-lg rounded\">
\t\t\t\t";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["editRecipeForm"]) || array_key_exists("editRecipeForm", $context) ? $context["editRecipeForm"] : (function () { throw new RuntimeError('Variable "editRecipeForm" does not exist.', 18, $this->source); })()), 'errors');
        echo "
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editRecipeForm"]) || array_key_exists("editRecipeForm", $context) ? $context["editRecipeForm"] : (function () { throw new RuntimeError('Variable "editRecipeForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        echo "
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editRecipeForm"]) || array_key_exists("editRecipeForm", $context) ? $context["editRecipeForm"] : (function () { throw new RuntimeError('Variable "editRecipeForm" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Nom de la recette"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editRecipeForm"]) || array_key_exists("editRecipeForm", $context) ? $context["editRecipeForm"] : (function () { throw new RuntimeError('Variable "editRecipeForm" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Description de la recette"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<div id=\"ingredients\">
\t\t\t\t\t<p class=\"label\">Ingrédients</p>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 29, $this->source); })()), "ingredientsRecette", [], "any", false, false, false, 29));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 30
            echo "\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ingredient";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Ingrédient\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ingredient"], "ingredient", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"qqt";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Quantité\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "quantity", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t</div>
\t\t\t\t<button type=\"button\" id=\"add-input\" class=\"btn btn-lg btn-primary\">Ajouter un ingredient</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<br/>
\t\t\t\t<div id=\"steps\">
\t\t\t\t\t<p class=\"label\">Étapes</p>
\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 46, $this->source); })()), "steps", [], "any", false, false, false, 46));
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
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 47
            echo "\t\t\t\t\t\t<input type=\"text\" name=\"step";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"Etape\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["step"], "detail", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
\t\t\t\t\t\t<br>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t</div>
\t\t\t\t<button type=\"button\" id=\"add-input2\" class=\"btn btn-lg btn-primary\">Ajouter une étape</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editRecipeForm"]) || array_key_exists("editRecipeForm", $context) ? $context["editRecipeForm"] : (function () { throw new RuntimeError('Variable "editRecipeForm" does not exist.', 54, $this->source); })()), "img", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Ajouter une image"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-secondary\">Modifier la recette</button>
\t\t\t\t";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["editRecipeForm"]) || array_key_exists("editRecipeForm", $context) ? $context["editRecipeForm"] : (function () { throw new RuntimeError('Variable "editRecipeForm" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex\" style=\"height: 200px \"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let counter = ";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 67, $this->source); })()), "ingredientsRecette", [], "any", false, false, false, 67)), "html", null, true);
        echo ";
    \$('#add-input').click(function () {
        counter++;
        \$('#ingredients').append('<div class=\"row\"><div class=\"col-xl-6\"><input type=\"text\" name=\"ingredient' + counter + '\" id=\"recipe_create_ingredients p-2\" class=\"form-control\" placeholder=\"Ingrédient\" required=\"required\"></div>' + '<div class=\"col-xl-6\"><input type=\"text\" name=\"qqt' + counter + '\" id=\"recipe_create_quantities\" class=\"form-control \" placeholder=\"Quantité\" required=\"required\"></div></div>' + '<br>');
    });

    let counter2 = ";
        // line 73
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipe"]) || array_key_exists("recipe", $context) ? $context["recipe"] : (function () { throw new RuntimeError('Variable "recipe" does not exist.', 73, $this->source); })()), "steps", [], "any", false, false, false, 73)), "html", null, true);
        echo ";
    \$('#add-input2').click(function () {
        counter2++;
        \$('#steps').append('<input type=\"text\" name=\"step' + counter2 + '\" id=\"recipe_create_steps\" class=\"form-control p-2\" placeholder=\"Etape\" required=\"required\">' + '<br>');
    });
});
</script></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recette/editRecipe.html.twig";
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
        return array (  254 => 73,  245 => 67,  233 => 58,  226 => 54,  220 => 50,  200 => 47,  183 => 46,  175 => 40,  154 => 35,  146 => 32,  142 => 30,  125 => 29,  117 => 24,  111 => 21,  106 => 19,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la recette
{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t<div class=\"col-xl-10 col-sm mx-auto card py-4 shadow-lg rounded rounded-6\">
\t\t\t<h3 class=\"ps-4 text-center\">Modifier la Recette</h3>
\t\t</div>
\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t</div>
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-md-8\">
\t\t\t<div class=\"card p-4 shadow-lg rounded\">
\t\t\t\t{{ form_errors(editRecipeForm) }}
\t\t\t\t{{ form_start(editRecipeForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_row(editRecipeForm.name, {'attr': {'class': 'form-control', 'placeholder': 'Nom de la recette'}}) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_row(editRecipeForm.description, {'attr': {'class': 'form-control', 'placeholder': 'Description de la recette'}}) }}
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<div id=\"ingredients\">
\t\t\t\t\t<p class=\"label\">Ingrédients</p>
\t\t\t\t\t{% for ingredient in recipe.ingredientsRecette %}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"ingredient{{ loop.index }}\" class=\"form-control\" placeholder=\"Ingrédient\" required=\"required\" value=\"{{ ingredient.ingredient.name }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"qqt{{ loop.index }}\" class=\"form-control\" placeholder=\"Quantité\" required=\"required\" value=\"{{ ingredient.quantity }}\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" id=\"add-input\" class=\"btn btn-lg btn-primary\">Ajouter un ingredient</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<br/>
\t\t\t\t<div id=\"steps\">
\t\t\t\t\t<p class=\"label\">Étapes</p>
\t\t\t\t\t{% for step in recipe.steps %}
\t\t\t\t\t\t<input type=\"text\" name=\"step{{ loop.index }}\" class=\"form-control\" placeholder=\"Etape\" required=\"required\" value=\"{{ step.detail }}\">
\t\t\t\t\t\t<br>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<button type=\"button\" id=\"add-input2\" class=\"btn btn-lg btn-primary\">Ajouter une étape</button>
\t\t\t\t<div class=\"d-flex\" style=\"height: 50px \"></div>
\t\t\t\t<div>
\t\t\t\t\t{{ form_row(editRecipeForm.img, {'attr': {'class': 'form-control', 'placeholder': 'Ajouter une image'}}) }}
\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t\t<button type=\"submit\" class=\"btn btn-lg btn-secondary\">Modifier la recette</button>
\t\t\t\t{{ form_end(editRecipeForm) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"d-flex\" style=\"height: 200px \"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let counter = {{ recipe.ingredientsRecette|length }};
    \$('#add-input').click(function () {
        counter++;
        \$('#ingredients').append('<div class=\"row\"><div class=\"col-xl-6\"><input type=\"text\" name=\"ingredient' + counter + '\" id=\"recipe_create_ingredients p-2\" class=\"form-control\" placeholder=\"Ingrédient\" required=\"required\"></div>' + '<div class=\"col-xl-6\"><input type=\"text\" name=\"qqt' + counter + '\" id=\"recipe_create_quantities\" class=\"form-control \" placeholder=\"Quantité\" required=\"required\"></div></div>' + '<br>');
    });

    let counter2 = {{ recipe.steps|length }};
    \$('#add-input2').click(function () {
        counter2++;
        \$('#steps').append('<input type=\"text\" name=\"step' + counter2 + '\" id=\"recipe_create_steps\" class=\"form-control p-2\" placeholder=\"Etape\" required=\"required\">' + '<br>');
    });
});
</script></script>{% endblock %}
", "recette/editRecipe.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/recette/editRecipe.html.twig");
    }
}
