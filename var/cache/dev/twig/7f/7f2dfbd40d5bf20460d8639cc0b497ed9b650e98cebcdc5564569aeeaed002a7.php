<?php

/* admin/index.html.twig */
class __TwigTemplate_d7036b1e999952d1babfa5f0f2e8ab0994837c71d0518c5acb738f6b361829ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59f3ec7b974c9946fe1babf6788fdcc0c676d6c70fea40ae69d7b79c3a3d7a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59f3ec7b974c9946fe1babf6788fdcc0c676d6c70fea40ae69d7b79c3a3d7a6b->enter($__internal_59f3ec7b974c9946fe1babf6788fdcc0c676d6c70fea40ae69d7b79c3a3d7a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_16ace35e656f9009e695d58129ce5bbe02c07be3a2293365e61d9648ee3dd020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ace35e656f9009e695d58129ce5bbe02c07be3a2293365e61d9648ee3dd020->enter($__internal_16ace35e656f9009e695d58129ce5bbe02c07be3a2293365e61d9648ee3dd020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  ";
        // line 4
        $this->loadTemplate("admin/partial/header.html.twig", "admin/index.html.twig", 4)->display($context);
        // line 5
        echo "</head>

<body class=\"no-skin\">
";
        // line 8
        $this->loadTemplate("admin/partial/body.html.twig", "admin/index.html.twig", 8)->display($context);
        // line 9
        echo "

";
        // line 11
        $this->loadTemplate("admin/partial/script.html.twig", "admin/index.html.twig", 11)->display($context);
        // line 12
        echo "</body>
</html>
";
        
        $__internal_59f3ec7b974c9946fe1babf6788fdcc0c676d6c70fea40ae69d7b79c3a3d7a6b->leave($__internal_59f3ec7b974c9946fe1babf6788fdcc0c676d6c70fea40ae69d7b79c3a3d7a6b_prof);

        
        $__internal_16ace35e656f9009e695d58129ce5bbe02c07be3a2293365e61d9648ee3dd020->leave($__internal_16ace35e656f9009e695d58129ce5bbe02c07be3a2293365e61d9648ee3dd020_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  43 => 11,  39 => 9,  37 => 8,  32 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  {% include \"admin/partial/header.html.twig\" %}
</head>

<body class=\"no-skin\">
{% include \"admin/partial/body.html.twig\" %}


{% include \"admin/partial/script.html.twig\" %}
</body>
</html>
", "admin/index.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\index.html.twig");
    }
}
