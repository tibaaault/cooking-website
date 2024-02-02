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

/* default/_modal_base.html.twig */
class __TwigTemplate_1327b32c8c2ad01b07d9c6e49858f3a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_modal_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_modal_base.html.twig"));

        // line 1
        echo "<div x-data=\"{ showModal: false }\" x-cloak>
    <!-- Modal -->
    <div x-show=\"showModal\" class=\"fixed z-10 inset-0 overflow-y-auto\" aria-labelledby=\"formModalLabel\" style=\"display: none;\">
        <div class=\"flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0\">
            <!-- Background overlay -->
            <div x-show=\"showModal\" class=\"fixed inset-0 bg-black opacity-50 transition-opacity\" aria-hidden=\"true\" style=\"display: none;\"></div>

            <!-- Modal content -->
            <div x-show=\"showModal\" class=\"inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 align-middle sm:max-w-lg sm:w-full\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"formModalLabel\" style=\"display: none;\">
                <div class=\"bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4\">
                    <div class=\"sm:flex sm:items-start\">
                        <!-- Modal header -->
                        <div class=\"mt-3 text-center sm:mt-0 sm:text-left w-full\">
                            <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"formModalLabel\"></h3>
                            <button @click=\"showModal = false\" type=\"button\" class=\"absolute top-0 right-0 p-2 bg-transparent text-gray-500 hover:text-gray-700 focus:outline-none\" aria-label=\"Close\">
                                <svg class=\"h-6 w-6\" stroke=\"currentColor\" fill=\"none\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Modal body -->
                        <div id=\"formModalBody\" class=\"mt-2\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/_modal_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div x-data=\"{ showModal: false }\" x-cloak>
    <!-- Modal -->
    <div x-show=\"showModal\" class=\"fixed z-10 inset-0 overflow-y-auto\" aria-labelledby=\"formModalLabel\" style=\"display: none;\">
        <div class=\"flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0\">
            <!-- Background overlay -->
            <div x-show=\"showModal\" class=\"fixed inset-0 bg-black opacity-50 transition-opacity\" aria-hidden=\"true\" style=\"display: none;\"></div>

            <!-- Modal content -->
            <div x-show=\"showModal\" class=\"inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 align-middle sm:max-w-lg sm:w-full\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"formModalLabel\" style=\"display: none;\">
                <div class=\"bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4\">
                    <div class=\"sm:flex sm:items-start\">
                        <!-- Modal header -->
                        <div class=\"mt-3 text-center sm:mt-0 sm:text-left w-full\">
                            <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"formModalLabel\"></h3>
                            <button @click=\"showModal = false\" type=\"button\" class=\"absolute top-0 right-0 p-2 bg-transparent text-gray-500 hover:text-gray-700 focus:outline-none\" aria-label=\"Close\">
                                <svg class=\"h-6 w-6\" stroke=\"currentColor\" fill=\"none\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Modal body -->
                        <div id=\"formModalBody\" class=\"mt-2\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

", "default/_modal_base.html.twig", "/Users/thibault/Code/GitHub/symfony/templates/default/_modal_base.html.twig");
    }
}
