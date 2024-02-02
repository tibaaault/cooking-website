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

/* default/_flash_messages.html.twig */
class __TwigTemplate_fc510812ca41645eb3b45f0208269e66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_flash_messages.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "flashes", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "            <div class=\"relative px-4 py-3 mb-4 border rounded ";
                echo (((                // line 5
$context["type"] == "success")) ? ("border-green-400 bg-green-100 text-green-700") : ((((                // line 6
$context["type"] == "error")) ? ("border-red-400 bg-red-100 text-red-700") : ((((                // line 7
$context["type"] == "warning")) ? ("border-yellow-400 bg-yellow-100 text-yellow-700") : ("border-blue-400 bg-blue-100 text-blue-700"))))));
                // line 9
                echo "\" role=\"alert\">

                <button type=\"button\" class=\"absolute top-0 bottom-0 right-0 px-4 py-3 focus:outline-none\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <svg class=\"h-6 w-6 text-gray-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                    </svg>
                </button>

                <i class=\"fas fa-info-circle\"></i>

                ";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_flash_messages.html.twig";
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
        return array (  88 => 23,  82 => 22,  73 => 19,  61 => 9,  59 => 7,  58 => 6,  57 => 5,  55 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div>
    {% for type, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"relative px-4 py-3 mb-4 border rounded {{ 
                type == 'success' ? 'border-green-400 bg-green-100 text-green-700' : 
                type == 'error' ? 'border-red-400 bg-red-100 text-red-700' : 
                type == 'warning' ? 'border-yellow-400 bg-yellow-100 text-yellow-700' : 
                'border-blue-400 bg-blue-100 text-blue-700' 
            }}\" role=\"alert\">

                <button type=\"button\" class=\"absolute top-0 bottom-0 right-0 px-4 py-3 focus:outline-none\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <svg class=\"h-6 w-6 text-gray-600\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                    </svg>
                </button>

                <i class=\"fas fa-info-circle\"></i>

                {{ message|trans }}
            </div>
        {% endfor %}
    {% endfor %}
</div>

", "default/_flash_messages.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/default/_flash_messages.html.twig");
    }
}
