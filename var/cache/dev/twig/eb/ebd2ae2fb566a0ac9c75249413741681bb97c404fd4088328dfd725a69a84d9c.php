<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5335ec8b26f1135b6bef20173fb8b73a9cb65aa2c214e6c1148dc36b40858f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b45fb55c85b9a4d786f4b2189680e9d8556dfe48b03d02eeac1aa0476b716629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45fb55c85b9a4d786f4b2189680e9d8556dfe48b03d02eeac1aa0476b716629->enter($__internal_b45fb55c85b9a4d786f4b2189680e9d8556dfe48b03d02eeac1aa0476b716629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2a327ad3e16dc5be08c48f0f5453852434582d24d6288450e154fde41fb740d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a327ad3e16dc5be08c48f0f5453852434582d24d6288450e154fde41fb740d2->enter($__internal_2a327ad3e16dc5be08c48f0f5453852434582d24d6288450e154fde41fb740d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45fb55c85b9a4d786f4b2189680e9d8556dfe48b03d02eeac1aa0476b716629->leave($__internal_b45fb55c85b9a4d786f4b2189680e9d8556dfe48b03d02eeac1aa0476b716629_prof);

        
        $__internal_2a327ad3e16dc5be08c48f0f5453852434582d24d6288450e154fde41fb740d2->leave($__internal_2a327ad3e16dc5be08c48f0f5453852434582d24d6288450e154fde41fb740d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8bde41998502daee48113aca0897eb82df21e832d8a25351ba972a33edd0db79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bde41998502daee48113aca0897eb82df21e832d8a25351ba972a33edd0db79->enter($__internal_8bde41998502daee48113aca0897eb82df21e832d8a25351ba972a33edd0db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e3c327f4263c2f371a415952f74414884391f67a518f75e1a723899a00b70c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3c327f4263c2f371a415952f74414884391f67a518f75e1a723899a00b70c7->enter($__internal_3e3c327f4263c2f371a415952f74414884391f67a518f75e1a723899a00b70c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3e3c327f4263c2f371a415952f74414884391f67a518f75e1a723899a00b70c7->leave($__internal_3e3c327f4263c2f371a415952f74414884391f67a518f75e1a723899a00b70c7_prof);

        
        $__internal_8bde41998502daee48113aca0897eb82df21e832d8a25351ba972a33edd0db79->leave($__internal_8bde41998502daee48113aca0897eb82df21e832d8a25351ba972a33edd0db79_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\pidev00\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
