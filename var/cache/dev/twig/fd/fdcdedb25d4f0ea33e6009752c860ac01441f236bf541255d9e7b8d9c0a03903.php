<?php

/* version0/club.html.twig */
class __TwigTemplate_d9ed19d537d8e5d0bb06b7ad330cb62c72cab7a7d5f37057416a8dfca05cd149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "version0/club.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":default:test.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21029e0d7960f98c114ac8c52150040f49fe1ef421c650f984d4f63e50bc78a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21029e0d7960f98c114ac8c52150040f49fe1ef421c650f984d4f63e50bc78a8->enter($__internal_21029e0d7960f98c114ac8c52150040f49fe1ef421c650f984d4f63e50bc78a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "version0/club.html.twig"));

        $__internal_47990b0c1f7d80d62ce3e9b62376e1c2072a87fe2beb02f9ca6a0d43ef58d277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47990b0c1f7d80d62ce3e9b62376e1c2072a87fe2beb02f9ca6a0d43ef58d277->enter($__internal_47990b0c1f7d80d62ce3e9b62376e1c2072a87fe2beb02f9ca6a0d43ef58d277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "version0/club.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21029e0d7960f98c114ac8c52150040f49fe1ef421c650f984d4f63e50bc78a8->leave($__internal_21029e0d7960f98c114ac8c52150040f49fe1ef421c650f984d4f63e50bc78a8_prof);

        
        $__internal_47990b0c1f7d80d62ce3e9b62376e1c2072a87fe2beb02f9ca6a0d43ef58d277->leave($__internal_47990b0c1f7d80d62ce3e9b62376e1c2072a87fe2beb02f9ca6a0d43ef58d277_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a22a7d6d95aa3b9a026abcedaae9d3ae1c498c81de6a8d135830985685ef7fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22a7d6d95aa3b9a026abcedaae9d3ae1c498c81de6a8d135830985685ef7fc9->enter($__internal_a22a7d6d95aa3b9a026abcedaae9d3ae1c498c81de6a8d135830985685ef7fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_160d747d642d5222814958b11db5bb3bc4d919cd2c36ff0ca6a351324ba6d4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160d747d642d5222814958b11db5bb3bc4d919cd2c36ff0ca6a351324ba6d4a4->enter($__internal_160d747d642d5222814958b11db5bb3bc4d919cd2c36ff0ca6a351324ba6d4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_160d747d642d5222814958b11db5bb3bc4d919cd2c36ff0ca6a351324ba6d4a4->leave($__internal_160d747d642d5222814958b11db5bb3bc4d919cd2c36ff0ca6a351324ba6d4a4_prof);

        
        $__internal_a22a7d6d95aa3b9a026abcedaae9d3ae1c498c81de6a8d135830985685ef7fc9->leave($__internal_a22a7d6d95aa3b9a026abcedaae9d3ae1c498c81de6a8d135830985685ef7fc9_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_3246fa7607c4e2783eb2b34851758c1302044d01e546a2556bd0febc27d5acc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3246fa7607c4e2783eb2b34851758c1302044d01e546a2556bd0febc27d5acc8->enter($__internal_3246fa7607c4e2783eb2b34851758c1302044d01e546a2556bd0febc27d5acc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_706ead5ad116c4d0ab0146a8dec3071e042a09d6678d49e2260858e588827348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706ead5ad116c4d0ab0146a8dec3071e042a09d6678d49e2260858e588827348->enter($__internal_706ead5ad116c4d0ab0146a8dec3071e042a09d6678d49e2260858e588827348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_706ead5ad116c4d0ab0146a8dec3071e042a09d6678d49e2260858e588827348->leave($__internal_706ead5ad116c4d0ab0146a8dec3071e042a09d6678d49e2260858e588827348_prof);

        
        $__internal_3246fa7607c4e2783eb2b34851758c1302044d01e546a2556bd0febc27d5acc8->leave($__internal_3246fa7607c4e2783eb2b34851758c1302044d01e546a2556bd0febc27d5acc8_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_0331a039e2dd5309f028537e91b3ea79d7030c733d35f93d663f40a97650e3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0331a039e2dd5309f028537e91b3ea79d7030c733d35f93d663f40a97650e3d8->enter($__internal_0331a039e2dd5309f028537e91b3ea79d7030c733d35f93d663f40a97650e3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_92bd20637f051e7639166459d8265f3f85fc2ced897c56bb000210da8708239a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bd20637f051e7639166459d8265f3f85fc2ced897c56bb000210da8708239a->enter($__internal_92bd20637f051e7639166459d8265f3f85fc2ced897c56bb000210da8708239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1>Liste des clubs</h1>
    </div>
    liste des clubs
    <p class=\"important\">

    </p>
";
        
        $__internal_92bd20637f051e7639166459d8265f3f85fc2ced897c56bb000210da8708239a->leave($__internal_92bd20637f051e7639166459d8265f3f85fc2ced897c56bb000210da8708239a_prof);

        
        $__internal_0331a039e2dd5309f028537e91b3ea79d7030c733d35f93d663f40a97650e3d8->leave($__internal_0331a039e2dd5309f028537e91b3ea79d7030c733d35f93d663f40a97650e3d8_prof);

    }

    public function getTemplateName()
    {
        return "version0/club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Club{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div-club\">
        <h1>Liste des clubs</h1>
    </div>
    liste des clubs
    <p class=\"important\">

    </p>
{% endblock %}", "version0/club.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\version0\\club.html.twig");
    }
}
