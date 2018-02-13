<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_89fb9a45f51f49d5af574942310dcaf0059ff1fd7a118b07085879ec809a26c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45c241a0a29ddef1b0c0166009947761ea57e9da7e575ea50f9500932a15a8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c241a0a29ddef1b0c0166009947761ea57e9da7e575ea50f9500932a15a8dc->enter($__internal_45c241a0a29ddef1b0c0166009947761ea57e9da7e575ea50f9500932a15a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_354e070f8c84766f7548d492652e7bb1212b4d92263fb495984d2d6ec056e872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354e070f8c84766f7548d492652e7bb1212b4d92263fb495984d2d6ec056e872->enter($__internal_354e070f8c84766f7548d492652e7bb1212b4d92263fb495984d2d6ec056e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45c241a0a29ddef1b0c0166009947761ea57e9da7e575ea50f9500932a15a8dc->leave($__internal_45c241a0a29ddef1b0c0166009947761ea57e9da7e575ea50f9500932a15a8dc_prof);

        
        $__internal_354e070f8c84766f7548d492652e7bb1212b4d92263fb495984d2d6ec056e872->leave($__internal_354e070f8c84766f7548d492652e7bb1212b4d92263fb495984d2d6ec056e872_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc032dee965b770b01c34d439c751b526140b596c287774bfd911bd18b2ed05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc032dee965b770b01c34d439c751b526140b596c287774bfd911bd18b2ed05e->enter($__internal_bc032dee965b770b01c34d439c751b526140b596c287774bfd911bd18b2ed05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05edccda6cc6aeaac031b514aeb1f0a59b023c14650c732d54197248086bda96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05edccda6cc6aeaac031b514aeb1f0a59b023c14650c732d54197248086bda96->enter($__internal_05edccda6cc6aeaac031b514aeb1f0a59b023c14650c732d54197248086bda96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_05edccda6cc6aeaac031b514aeb1f0a59b023c14650c732d54197248086bda96->leave($__internal_05edccda6cc6aeaac031b514aeb1f0a59b023c14650c732d54197248086bda96_prof);

        
        $__internal_bc032dee965b770b01c34d439c751b526140b596c287774bfd911bd18b2ed05e->leave($__internal_bc032dee965b770b01c34d439c751b526140b596c287774bfd911bd18b2ed05e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7a3e19a849ce804dd5084fd53eab2ddedf15d6b1f87af703d873a7440222024f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3e19a849ce804dd5084fd53eab2ddedf15d6b1f87af703d873a7440222024f->enter($__internal_7a3e19a849ce804dd5084fd53eab2ddedf15d6b1f87af703d873a7440222024f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a86f0db522203b2f6c2ef4980ebfe558661b0290af497072ba2c40428a8ff0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86f0db522203b2f6c2ef4980ebfe558661b0290af497072ba2c40428a8ff0bd->enter($__internal_a86f0db522203b2f6c2ef4980ebfe558661b0290af497072ba2c40428a8ff0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a86f0db522203b2f6c2ef4980ebfe558661b0290af497072ba2c40428a8ff0bd->leave($__internal_a86f0db522203b2f6c2ef4980ebfe558661b0290af497072ba2c40428a8ff0bd_prof);

        
        $__internal_7a3e19a849ce804dd5084fd53eab2ddedf15d6b1f87af703d873a7440222024f->leave($__internal_7a3e19a849ce804dd5084fd53eab2ddedf15d6b1f87af703d873a7440222024f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8086fca78611d6bcc5ca8c1d98dfc79488e9971c859649e97d0aa8081a293215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8086fca78611d6bcc5ca8c1d98dfc79488e9971c859649e97d0aa8081a293215->enter($__internal_8086fca78611d6bcc5ca8c1d98dfc79488e9971c859649e97d0aa8081a293215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be65a303749ca9c2130a1bec30b50188fd952dca33cc000835507f3783b4d10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be65a303749ca9c2130a1bec30b50188fd952dca33cc000835507f3783b4d10a->enter($__internal_be65a303749ca9c2130a1bec30b50188fd952dca33cc000835507f3783b4d10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_be65a303749ca9c2130a1bec30b50188fd952dca33cc000835507f3783b4d10a->leave($__internal_be65a303749ca9c2130a1bec30b50188fd952dca33cc000835507f3783b4d10a_prof);

        
        $__internal_8086fca78611d6bcc5ca8c1d98dfc79488e9971c859649e97d0aa8081a293215->leave($__internal_8086fca78611d6bcc5ca8c1d98dfc79488e9971c859649e97d0aa8081a293215_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\pidev00\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
