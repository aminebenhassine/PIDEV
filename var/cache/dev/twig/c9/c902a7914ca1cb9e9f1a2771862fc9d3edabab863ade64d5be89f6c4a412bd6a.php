<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_555e8ff27681089862236ebfd49d4f0202c7ae9a72a885bd5e89b695fac94e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d9c269717daee2edae520506083f3521996ea872c2de291254396135403be5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9c269717daee2edae520506083f3521996ea872c2de291254396135403be5a->enter($__internal_8d9c269717daee2edae520506083f3521996ea872c2de291254396135403be5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e6ca08d5748ddb4743eed043dcfd7095fcf676abaef0427b27172a91b0287d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ca08d5748ddb4743eed043dcfd7095fcf676abaef0427b27172a91b0287d7b->enter($__internal_e6ca08d5748ddb4743eed043dcfd7095fcf676abaef0427b27172a91b0287d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9c269717daee2edae520506083f3521996ea872c2de291254396135403be5a->leave($__internal_8d9c269717daee2edae520506083f3521996ea872c2de291254396135403be5a_prof);

        
        $__internal_e6ca08d5748ddb4743eed043dcfd7095fcf676abaef0427b27172a91b0287d7b->leave($__internal_e6ca08d5748ddb4743eed043dcfd7095fcf676abaef0427b27172a91b0287d7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4cd035da906d931bf91256d34861c4f87b39648d07ac4ccedba6ddc45a39fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4cd035da906d931bf91256d34861c4f87b39648d07ac4ccedba6ddc45a39fda->enter($__internal_b4cd035da906d931bf91256d34861c4f87b39648d07ac4ccedba6ddc45a39fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a50b7d5dd32b8e0b86fddd90aaf8eb7655dbd6366c9323ee2d5198a1eeb7ff8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50b7d5dd32b8e0b86fddd90aaf8eb7655dbd6366c9323ee2d5198a1eeb7ff8e->enter($__internal_a50b7d5dd32b8e0b86fddd90aaf8eb7655dbd6366c9323ee2d5198a1eeb7ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a50b7d5dd32b8e0b86fddd90aaf8eb7655dbd6366c9323ee2d5198a1eeb7ff8e->leave($__internal_a50b7d5dd32b8e0b86fddd90aaf8eb7655dbd6366c9323ee2d5198a1eeb7ff8e_prof);

        
        $__internal_b4cd035da906d931bf91256d34861c4f87b39648d07ac4ccedba6ddc45a39fda->leave($__internal_b4cd035da906d931bf91256d34861c4f87b39648d07ac4ccedba6ddc45a39fda_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfd1de5a3e72d135c1ed5734ed0e60f5830b4092eb05407609e7526596277b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd1de5a3e72d135c1ed5734ed0e60f5830b4092eb05407609e7526596277b2d->enter($__internal_dfd1de5a3e72d135c1ed5734ed0e60f5830b4092eb05407609e7526596277b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18151f2af37c79af896b3e0529e6f56c39e3116901bf5d4fd5137251c5bacb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18151f2af37c79af896b3e0529e6f56c39e3116901bf5d4fd5137251c5bacb0d->enter($__internal_18151f2af37c79af896b3e0529e6f56c39e3116901bf5d4fd5137251c5bacb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_18151f2af37c79af896b3e0529e6f56c39e3116901bf5d4fd5137251c5bacb0d->leave($__internal_18151f2af37c79af896b3e0529e6f56c39e3116901bf5d4fd5137251c5bacb0d_prof);

        
        $__internal_dfd1de5a3e72d135c1ed5734ed0e60f5830b4092eb05407609e7526596277b2d->leave($__internal_dfd1de5a3e72d135c1ed5734ed0e60f5830b4092eb05407609e7526596277b2d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4004727b1afeb42e2532d2401c6521b995317d885318c9260f6af11814e24e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4004727b1afeb42e2532d2401c6521b995317d885318c9260f6af11814e24e2->enter($__internal_c4004727b1afeb42e2532d2401c6521b995317d885318c9260f6af11814e24e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8eb0d9f88ad83a77e032d2ef7f95b3a1347e6a889e4b1772807b6dce807cbc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb0d9f88ad83a77e032d2ef7f95b3a1347e6a889e4b1772807b6dce807cbc33->enter($__internal_8eb0d9f88ad83a77e032d2ef7f95b3a1347e6a889e4b1772807b6dce807cbc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8eb0d9f88ad83a77e032d2ef7f95b3a1347e6a889e4b1772807b6dce807cbc33->leave($__internal_8eb0d9f88ad83a77e032d2ef7f95b3a1347e6a889e4b1772807b6dce807cbc33_prof);

        
        $__internal_c4004727b1afeb42e2532d2401c6521b995317d885318c9260f6af11814e24e2->leave($__internal_c4004727b1afeb42e2532d2401c6521b995317d885318c9260f6af11814e24e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\pidev00\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
