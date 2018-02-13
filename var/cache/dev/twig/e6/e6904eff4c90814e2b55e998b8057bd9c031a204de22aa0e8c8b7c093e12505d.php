<?php

/* ClubBundle:Default:index.html.twig */
class __TwigTemplate_03c6e00308982069da88db6c70a8ba1e4af5b67587e7c9047a2bc2cce8dae615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "ClubBundle:Default:index.html.twig", 1);
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
        $__internal_79ea50c171b1728e045c6f32e285ec18c06a45d9a305de5bd0fad8c1e3c7451a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ea50c171b1728e045c6f32e285ec18c06a45d9a305de5bd0fad8c1e3c7451a->enter($__internal_79ea50c171b1728e045c6f32e285ec18c06a45d9a305de5bd0fad8c1e3c7451a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:Default:index.html.twig"));

        $__internal_ce330be949d56175316e3325fe986030ad95028c11562a59e234678149d915ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce330be949d56175316e3325fe986030ad95028c11562a59e234678149d915ed->enter($__internal_ce330be949d56175316e3325fe986030ad95028c11562a59e234678149d915ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ea50c171b1728e045c6f32e285ec18c06a45d9a305de5bd0fad8c1e3c7451a->leave($__internal_79ea50c171b1728e045c6f32e285ec18c06a45d9a305de5bd0fad8c1e3c7451a_prof);

        
        $__internal_ce330be949d56175316e3325fe986030ad95028c11562a59e234678149d915ed->leave($__internal_ce330be949d56175316e3325fe986030ad95028c11562a59e234678149d915ed_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e29d6f286f66c8528d5693e1148cd3cf7f265ca58f506d0faa0abfaf5837b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e29d6f286f66c8528d5693e1148cd3cf7f265ca58f506d0faa0abfaf5837b12->enter($__internal_0e29d6f286f66c8528d5693e1148cd3cf7f265ca58f506d0faa0abfaf5837b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe8a086d09929e149f8cfd1a387d60bc87f790ea0fd00314c92ba46d19756a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8a086d09929e149f8cfd1a387d60bc87f790ea0fd00314c92ba46d19756a74->enter($__internal_fe8a086d09929e149f8cfd1a387d60bc87f790ea0fd00314c92ba46d19756a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_fe8a086d09929e149f8cfd1a387d60bc87f790ea0fd00314c92ba46d19756a74->leave($__internal_fe8a086d09929e149f8cfd1a387d60bc87f790ea0fd00314c92ba46d19756a74_prof);

        
        $__internal_0e29d6f286f66c8528d5693e1148cd3cf7f265ca58f506d0faa0abfaf5837b12->leave($__internal_0e29d6f286f66c8528d5693e1148cd3cf7f265ca58f506d0faa0abfaf5837b12_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_134d7d801b559c8ae7cd598ffae2b498710c97e47a1201e11d8fd2fea2fa6cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134d7d801b559c8ae7cd598ffae2b498710c97e47a1201e11d8fd2fea2fa6cb4->enter($__internal_134d7d801b559c8ae7cd598ffae2b498710c97e47a1201e11d8fd2fea2fa6cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_858023e7c792de3a2b3cbe50449b9a9d7be2477f7d61cecf4d7d354b30ac6fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858023e7c792de3a2b3cbe50449b9a9d7be2477f7d61cecf4d7d354b30ac6fd2->enter($__internal_858023e7c792de3a2b3cbe50449b9a9d7be2477f7d61cecf4d7d354b30ac6fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_858023e7c792de3a2b3cbe50449b9a9d7be2477f7d61cecf4d7d354b30ac6fd2->leave($__internal_858023e7c792de3a2b3cbe50449b9a9d7be2477f7d61cecf4d7d354b30ac6fd2_prof);

        
        $__internal_134d7d801b559c8ae7cd598ffae2b498710c97e47a1201e11d8fd2fea2fa6cb4->leave($__internal_134d7d801b559c8ae7cd598ffae2b498710c97e47a1201e11d8fd2fea2fa6cb4_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_14cc4475b5a6e511d2f1ea082695e2267e6565d6b242b5e2b2edd0fb67d3b55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cc4475b5a6e511d2f1ea082695e2267e6565d6b242b5e2b2edd0fb67d3b55b->enter($__internal_14cc4475b5a6e511d2f1ea082695e2267e6565d6b242b5e2b2edd0fb67d3b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_37eccfa12fde00b68ba5d8301a54a966ced5b922571d16938da7ca608490e90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37eccfa12fde00b68ba5d8301a54a966ced5b922571d16938da7ca608490e90d->enter($__internal_37eccfa12fde00b68ba5d8301a54a966ced5b922571d16938da7ca608490e90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1><b>Interface club</b></h1>
    </div>
    <center>
        ";
        // line 17
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 20
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_ajout");
            echo "\"> Ajouter un club </a></li>
        ";
        }
        // line 22
        echo "
        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_recherche");
        echo "\"> Rechercher un club </a></li>


    </center>

    <p class=\"important\">

    </p>
";
        
        $__internal_37eccfa12fde00b68ba5d8301a54a966ced5b922571d16938da7ca608490e90d->leave($__internal_37eccfa12fde00b68ba5d8301a54a966ced5b922571d16938da7ca608490e90d_prof);

        
        $__internal_14cc4475b5a6e511d2f1ea082695e2267e6565d6b242b5e2b2edd0fb67d3b55b->leave($__internal_14cc4475b5a6e511d2f1ea082695e2267e6565d6b242b5e2b2edd0fb67d3b55b_prof);

    }

    public function getTemplateName()
    {
        return "ClubBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  109 => 22,  103 => 20,  101 => 17,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1><b>Interface club</b></h1>
    </div>
    <center>
        {% if (is_granted('ROLE_RESPONSABLE_SUPER_ADMIN'))
        or(is_granted('ROLE_SUPER_ADMIN'))
        or(is_granted('ROLE_ADMIN'))  %}
        <li><a href=\"{{ path('club_ajout') }}\"> Ajouter un club </a></li>
        {% endif %}

        <li><a href=\"{{ path('club_recherche') }}\"> Rechercher un club </a></li>


    </center>

    <p class=\"important\">

    </p>
{% endblock %}





", "ClubBundle:Default:index.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\ClubBundle/Resources/views/Default/index.html.twig");
    }
}
