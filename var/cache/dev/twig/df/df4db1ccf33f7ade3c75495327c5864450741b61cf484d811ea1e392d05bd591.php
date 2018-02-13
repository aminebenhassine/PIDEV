<?php

/* EvenementBundle:Default:index.html.twig */
class __TwigTemplate_c72274359cf2092570bf5b9351e252ba488d46fd0b16489152c10d6de3e26007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "EvenementBundle:Default:index.html.twig", 1);
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
        $__internal_a58de63cf303600fd5ea378c25a7456d6da2a19f9654a0dd97fcf2adc6e424b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58de63cf303600fd5ea378c25a7456d6da2a19f9654a0dd97fcf2adc6e424b2->enter($__internal_a58de63cf303600fd5ea378c25a7456d6da2a19f9654a0dd97fcf2adc6e424b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:index.html.twig"));

        $__internal_8b0bf031a39347d216c67214cd28c1cbe957437682eca42da5999c2659cd0126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0bf031a39347d216c67214cd28c1cbe957437682eca42da5999c2659cd0126->enter($__internal_8b0bf031a39347d216c67214cd28c1cbe957437682eca42da5999c2659cd0126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a58de63cf303600fd5ea378c25a7456d6da2a19f9654a0dd97fcf2adc6e424b2->leave($__internal_a58de63cf303600fd5ea378c25a7456d6da2a19f9654a0dd97fcf2adc6e424b2_prof);

        
        $__internal_8b0bf031a39347d216c67214cd28c1cbe957437682eca42da5999c2659cd0126->leave($__internal_8b0bf031a39347d216c67214cd28c1cbe957437682eca42da5999c2659cd0126_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_18c954a11e0d91fe49391f9edcb3bbcd2d136df5c607c3e0dcd3fac071518c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c954a11e0d91fe49391f9edcb3bbcd2d136df5c607c3e0dcd3fac071518c70->enter($__internal_18c954a11e0d91fe49391f9edcb3bbcd2d136df5c607c3e0dcd3fac071518c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aeef1ff508df9b92ab9ce8b5391adb93ad47c34414c32b12f9a4e86652960dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeef1ff508df9b92ab9ce8b5391adb93ad47c34414c32b12f9a4e86652960dd5->enter($__internal_aeef1ff508df9b92ab9ce8b5391adb93ad47c34414c32b12f9a4e86652960dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_aeef1ff508df9b92ab9ce8b5391adb93ad47c34414c32b12f9a4e86652960dd5->leave($__internal_aeef1ff508df9b92ab9ce8b5391adb93ad47c34414c32b12f9a4e86652960dd5_prof);

        
        $__internal_18c954a11e0d91fe49391f9edcb3bbcd2d136df5c607c3e0dcd3fac071518c70->leave($__internal_18c954a11e0d91fe49391f9edcb3bbcd2d136df5c607c3e0dcd3fac071518c70_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_a22427150c5b0ca11879cff7145755da1965321094a38b14f9cf6480c10a487f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22427150c5b0ca11879cff7145755da1965321094a38b14f9cf6480c10a487f->enter($__internal_a22427150c5b0ca11879cff7145755da1965321094a38b14f9cf6480c10a487f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_478c065795ab82f09779180b2cccbf0526dd6aad1253572d7a3a4e93cfda7d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478c065795ab82f09779180b2cccbf0526dd6aad1253572d7a3a4e93cfda7d94->enter($__internal_478c065795ab82f09779180b2cccbf0526dd6aad1253572d7a3a4e93cfda7d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_478c065795ab82f09779180b2cccbf0526dd6aad1253572d7a3a4e93cfda7d94->leave($__internal_478c065795ab82f09779180b2cccbf0526dd6aad1253572d7a3a4e93cfda7d94_prof);

        
        $__internal_a22427150c5b0ca11879cff7145755da1965321094a38b14f9cf6480c10a487f->leave($__internal_a22427150c5b0ca11879cff7145755da1965321094a38b14f9cf6480c10a487f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_549a9533e7945e35d788ff4fbf379b457d23430eaa5a9ad2c56e4abd0c1a6ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549a9533e7945e35d788ff4fbf379b457d23430eaa5a9ad2c56e4abd0c1a6ceb->enter($__internal_549a9533e7945e35d788ff4fbf379b457d23430eaa5a9ad2c56e4abd0c1a6ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fec02dd57a5988b7b41ccab3d6d853157e8a9c61ca6d45ff5cef7231abbce8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec02dd57a5988b7b41ccab3d6d853157e8a9c61ca6d45ff5cef7231abbce8d0->enter($__internal_fec02dd57a5988b7b41ccab3d6d853157e8a9c61ca6d45ff5cef7231abbce8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Bienvenue dans l'interface de gestion des évenements </h1>
    </div>
    <br>
    <center>
   <h1>Que voulez-vous faire?</h1><br>
    <a href=";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ajouter_events");
        echo " > Ajouter un évenement </a><br><br>
    <a href=";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_afficher_events");
        echo " > Afficher les évenements disponibles </a><br><br>
    <a href=";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_rechercher_events_nom");
        echo " > Rechercher un évenement par nom </a><br><br>
    <a href=";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_rechercher_events_date");
        echo " > Rechercher un évenement par date </a><br><br>
    <a href=";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_rechercher_events_club");
        echo " > Rechercher un évenement par club </a><br><br>
    </center>
    <p class=\"important\">

    </p>
";
        
        $__internal_fec02dd57a5988b7b41ccab3d6d853157e8a9c61ca6d45ff5cef7231abbce8d0->leave($__internal_fec02dd57a5988b7b41ccab3d6d853157e8a9c61ca6d45ff5cef7231abbce8d0_prof);

        
        $__internal_549a9533e7945e35d788ff4fbf379b457d23430eaa5a9ad2c56e4abd0c1a6ceb->leave($__internal_549a9533e7945e35d788ff4fbf379b457d23430eaa5a9ad2c56e4abd0c1a6ceb_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":default:test.html.twig\" %}


{% block title %}Evenements{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
    <div class=\"big-div\">
        <h1>Bienvenue dans l'interface de gestion des évenements </h1>
    </div>
    <br>
    <center>
   <h1>Que voulez-vous faire?</h1><br>
    <a href={{ path('_ajouter_events')}} > Ajouter un évenement </a><br><br>
    <a href={{ path('_afficher_events')}} > Afficher les évenements disponibles </a><br><br>
    <a href={{ path('_rechercher_events_nom')}} > Rechercher un évenement par nom </a><br><br>
    <a href={{ path('_rechercher_events_date')}} > Rechercher un évenement par date </a><br><br>
    <a href={{ path('_rechercher_events_club')}} > Rechercher un évenement par club </a><br><br>
    </center>
    <p class=\"important\">

    </p>
{% endblock %}", "EvenementBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle/Resources/views/Default/index.html.twig");
    }
}
