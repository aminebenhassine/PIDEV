<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_8593b0bf5111e5c9935022404bd5033b8acf79734ca775798d3a7cc5bd92d9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53894d9a695995fd180fa7ed730650ed7f0102133aef2a826567a5645e675867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53894d9a695995fd180fa7ed730650ed7f0102133aef2a826567a5645e675867->enter($__internal_53894d9a695995fd180fa7ed730650ed7f0102133aef2a826567a5645e675867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_eb6c9a44c581d65c99a83e51fed98f707a72c989fb3594a962999ab78fdd14c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6c9a44c581d65c99a83e51fed98f707a72c989fb3594a962999ab78fdd14c6->enter($__internal_eb6c9a44c581d65c99a83e51fed98f707a72c989fb3594a962999ab78fdd14c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53894d9a695995fd180fa7ed730650ed7f0102133aef2a826567a5645e675867->leave($__internal_53894d9a695995fd180fa7ed730650ed7f0102133aef2a826567a5645e675867_prof);

        
        $__internal_eb6c9a44c581d65c99a83e51fed98f707a72c989fb3594a962999ab78fdd14c6->leave($__internal_eb6c9a44c581d65c99a83e51fed98f707a72c989fb3594a962999ab78fdd14c6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5912190480a39200f92231599005591026737284cdeeba061b32d12b1d14271a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5912190480a39200f92231599005591026737284cdeeba061b32d12b1d14271a->enter($__internal_5912190480a39200f92231599005591026737284cdeeba061b32d12b1d14271a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc8144b349878c9835cfb00ab9be55b6191600251e33aa9d8597ad6c2ab90dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8144b349878c9835cfb00ab9be55b6191600251e33aa9d8597ad6c2ab90dbc->enter($__internal_bc8144b349878c9835cfb00ab9be55b6191600251e33aa9d8597ad6c2ab90dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_bc8144b349878c9835cfb00ab9be55b6191600251e33aa9d8597ad6c2ab90dbc->leave($__internal_bc8144b349878c9835cfb00ab9be55b6191600251e33aa9d8597ad6c2ab90dbc_prof);

        
        $__internal_5912190480a39200f92231599005591026737284cdeeba061b32d12b1d14271a->leave($__internal_5912190480a39200f92231599005591026737284cdeeba061b32d12b1d14271a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
