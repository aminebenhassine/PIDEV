<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf7d45a091fd43d41052341793089a8e70ac24030e8a73c06f8ebedb46198c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_61645db317a4140091c90b8272dea55f54a76ff09efecc5a63f5d103ebd10316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61645db317a4140091c90b8272dea55f54a76ff09efecc5a63f5d103ebd10316->enter($__internal_61645db317a4140091c90b8272dea55f54a76ff09efecc5a63f5d103ebd10316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_61837ef4ad07f0ef4cbaf6f571081e7d280fbfbf6648f44c6cce38f1dc6fbf03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61837ef4ad07f0ef4cbaf6f571081e7d280fbfbf6648f44c6cce38f1dc6fbf03->enter($__internal_61837ef4ad07f0ef4cbaf6f571081e7d280fbfbf6648f44c6cce38f1dc6fbf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61645db317a4140091c90b8272dea55f54a76ff09efecc5a63f5d103ebd10316->leave($__internal_61645db317a4140091c90b8272dea55f54a76ff09efecc5a63f5d103ebd10316_prof);

        
        $__internal_61837ef4ad07f0ef4cbaf6f571081e7d280fbfbf6648f44c6cce38f1dc6fbf03->leave($__internal_61837ef4ad07f0ef4cbaf6f571081e7d280fbfbf6648f44c6cce38f1dc6fbf03_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_286f3883df1c8f54ef7e7324d8579cdd66379765edf3eccab453c5b5a625c544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286f3883df1c8f54ef7e7324d8579cdd66379765edf3eccab453c5b5a625c544->enter($__internal_286f3883df1c8f54ef7e7324d8579cdd66379765edf3eccab453c5b5a625c544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46507c1ac49a90c981c30b229eb4d6d92d2c37d1cc6af2bfac62ea2ffee8fa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46507c1ac49a90c981c30b229eb4d6d92d2c37d1cc6af2bfac62ea2ffee8fa78->enter($__internal_46507c1ac49a90c981c30b229eb4d6d92d2c37d1cc6af2bfac62ea2ffee8fa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46507c1ac49a90c981c30b229eb4d6d92d2c37d1cc6af2bfac62ea2ffee8fa78->leave($__internal_46507c1ac49a90c981c30b229eb4d6d92d2c37d1cc6af2bfac62ea2ffee8fa78_prof);

        
        $__internal_286f3883df1c8f54ef7e7324d8579cdd66379765edf3eccab453c5b5a625c544->leave($__internal_286f3883df1c8f54ef7e7324d8579cdd66379765edf3eccab453c5b5a625c544_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37d4ed7d75f0007994959d3d364b26edc79c2d9eec55b0ec98b5f29d7b9effff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d4ed7d75f0007994959d3d364b26edc79c2d9eec55b0ec98b5f29d7b9effff->enter($__internal_37d4ed7d75f0007994959d3d364b26edc79c2d9eec55b0ec98b5f29d7b9effff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ebdf6b3472ebdfee698b55d6bb6ab57538a177aa64bfd4f3c4ba0623820ab89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebdf6b3472ebdfee698b55d6bb6ab57538a177aa64bfd4f3c4ba0623820ab89->enter($__internal_7ebdf6b3472ebdfee698b55d6bb6ab57538a177aa64bfd4f3c4ba0623820ab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ebdf6b3472ebdfee698b55d6bb6ab57538a177aa64bfd4f3c4ba0623820ab89->leave($__internal_7ebdf6b3472ebdfee698b55d6bb6ab57538a177aa64bfd4f3c4ba0623820ab89_prof);

        
        $__internal_37d4ed7d75f0007994959d3d364b26edc79c2d9eec55b0ec98b5f29d7b9effff->leave($__internal_37d4ed7d75f0007994959d3d364b26edc79c2d9eec55b0ec98b5f29d7b9effff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_130b256961c067528604e59fe1486138058b58fe3723cf9162a383dc008e0e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130b256961c067528604e59fe1486138058b58fe3723cf9162a383dc008e0e58->enter($__internal_130b256961c067528604e59fe1486138058b58fe3723cf9162a383dc008e0e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc3deaabbd3120be9b054811d78909cd5eb0bcb875d6e876dcdb221c0d4882ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3deaabbd3120be9b054811d78909cd5eb0bcb875d6e876dcdb221c0d4882ee->enter($__internal_fc3deaabbd3120be9b054811d78909cd5eb0bcb875d6e876dcdb221c0d4882ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fc3deaabbd3120be9b054811d78909cd5eb0bcb875d6e876dcdb221c0d4882ee->leave($__internal_fc3deaabbd3120be9b054811d78909cd5eb0bcb875d6e876dcdb221c0d4882ee_prof);

        
        $__internal_130b256961c067528604e59fe1486138058b58fe3723cf9162a383dc008e0e58->leave($__internal_130b256961c067528604e59fe1486138058b58fe3723cf9162a383dc008e0e58_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\pidev00\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
