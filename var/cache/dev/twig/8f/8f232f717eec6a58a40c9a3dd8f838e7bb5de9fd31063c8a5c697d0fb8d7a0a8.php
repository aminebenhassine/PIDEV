<?php

/* SpottedBundle:Default:index.html.twig */
class __TwigTemplate_ee107cf8ab2c9d5742172d5aedb431b076224cb323d0f93bfa69c7aeb3fde398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "SpottedBundle:Default:index.html.twig", 1);
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
        $__internal_c78096031cc8801383b0b17582f31bbe575f6de8cf43bcd45618462f825d2807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78096031cc8801383b0b17582f31bbe575f6de8cf43bcd45618462f825d2807->enter($__internal_c78096031cc8801383b0b17582f31bbe575f6de8cf43bcd45618462f825d2807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SpottedBundle:Default:index.html.twig"));

        $__internal_7e17f23ba96a39c0b9b782fde3b6c45a81cd41e821b21a04e2a9f684f70d3369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e17f23ba96a39c0b9b782fde3b6c45a81cd41e821b21a04e2a9f684f70d3369->enter($__internal_7e17f23ba96a39c0b9b782fde3b6c45a81cd41e821b21a04e2a9f684f70d3369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SpottedBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78096031cc8801383b0b17582f31bbe575f6de8cf43bcd45618462f825d2807->leave($__internal_c78096031cc8801383b0b17582f31bbe575f6de8cf43bcd45618462f825d2807_prof);

        
        $__internal_7e17f23ba96a39c0b9b782fde3b6c45a81cd41e821b21a04e2a9f684f70d3369->leave($__internal_7e17f23ba96a39c0b9b782fde3b6c45a81cd41e821b21a04e2a9f684f70d3369_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_522f4f74518f073f8a4424caea414481a28b9992eb3347b96f790a95b0c12d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522f4f74518f073f8a4424caea414481a28b9992eb3347b96f790a95b0c12d23->enter($__internal_522f4f74518f073f8a4424caea414481a28b9992eb3347b96f790a95b0c12d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2af38af046f6df06f62e15b03136eea00d56634986baee1996d0796090d18e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2af38af046f6df06f62e15b03136eea00d56634986baee1996d0796090d18e0->enter($__internal_c2af38af046f6df06f62e15b03136eea00d56634986baee1996d0796090d18e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_c2af38af046f6df06f62e15b03136eea00d56634986baee1996d0796090d18e0->leave($__internal_c2af38af046f6df06f62e15b03136eea00d56634986baee1996d0796090d18e0_prof);

        
        $__internal_522f4f74518f073f8a4424caea414481a28b9992eb3347b96f790a95b0c12d23->leave($__internal_522f4f74518f073f8a4424caea414481a28b9992eb3347b96f790a95b0c12d23_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_936ca26219de66d48a5673f05714b76a369ef9c85d316ceededce2224b193f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936ca26219de66d48a5673f05714b76a369ef9c85d316ceededce2224b193f11->enter($__internal_936ca26219de66d48a5673f05714b76a369ef9c85d316ceededce2224b193f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_534eba048d1b484a564b8ec29b95bfbbd636e1f82dbbf16501ec893e9be51ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534eba048d1b484a564b8ec29b95bfbbd636e1f82dbbf16501ec893e9be51ad4->enter($__internal_534eba048d1b484a564b8ec29b95bfbbd636e1f82dbbf16501ec893e9be51ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_534eba048d1b484a564b8ec29b95bfbbd636e1f82dbbf16501ec893e9be51ad4->leave($__internal_534eba048d1b484a564b8ec29b95bfbbd636e1f82dbbf16501ec893e9be51ad4_prof);

        
        $__internal_936ca26219de66d48a5673f05714b76a369ef9c85d316ceededce2224b193f11->leave($__internal_936ca26219de66d48a5673f05714b76a369ef9c85d316ceededce2224b193f11_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4bd98626823f290ce4a3ddc68c642d7df537fe7fc4a563893593eaa768efada7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd98626823f290ce4a3ddc68c642d7df537fe7fc4a563893593eaa768efada7->enter($__internal_4bd98626823f290ce4a3ddc68c642d7df537fe7fc4a563893593eaa768efada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b7119753b9d1a43e1a28b3057a444f8df76a0832dd366c9d0dcb7f1a9c205cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7119753b9d1a43e1a28b3057a444f8df76a0832dd366c9d0dcb7f1a9c205cf5->enter($__internal_b7119753b9d1a43e1a28b3057a444f8df76a0832dd366c9d0dcb7f1a9c205cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Bienvenue dans l'interface de spotted</h1>
    </div>
    <br>
    <center>
        <h1>Que voulez-vous faire?</h1><br>
        <a href=";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ajout_spotted");
        echo " > Ajouter un spotted </a><br><br>
        <a href=";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_list_spotted");
        echo " > List Spotted </a><br><br>
    </center>
    <p class=\"important\">

    </p>
";
        
        $__internal_b7119753b9d1a43e1a28b3057a444f8df76a0832dd366c9d0dcb7f1a9c205cf5->leave($__internal_b7119753b9d1a43e1a28b3057a444f8df76a0832dd366c9d0dcb7f1a9c205cf5_prof);

        
        $__internal_4bd98626823f290ce4a3ddc68c642d7df537fe7fc4a563893593eaa768efada7->leave($__internal_4bd98626823f290ce4a3ddc68c642d7df537fe7fc4a563893593eaa768efada7_prof);

    }

    public function getTemplateName()
    {
        return "SpottedBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  103 => 19,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Bienvenue dans l'interface de spotted</h1>
    </div>
    <br>
    <center>
        <h1>Que voulez-vous faire?</h1><br>
        <a href={{ path('_ajout_spotted')}} > Ajouter un spotted </a><br><br>
        <a href={{ path('_list_spotted')}} > List Spotted </a><br><br>
    </center>
    <p class=\"important\">

    </p>
{% endblock %}", "SpottedBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\SpottedBundle/Resources/views/Default/index.html.twig");
    }
}
