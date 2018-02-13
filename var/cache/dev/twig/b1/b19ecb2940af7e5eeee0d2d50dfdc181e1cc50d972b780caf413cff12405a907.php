<?php

/* @Club/Default/recherche.html.twig */
class __TwigTemplate_45600a2951f985e5804cb7334f4b30aaf18a4eb7bc16843251856b145f7b2aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Club/Default/recherche.html.twig", 2);
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
        $__internal_a6d541b911a9e281c2f4abe308906040a92dcfefbf2a163b6bca8d984c8adb96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d541b911a9e281c2f4abe308906040a92dcfefbf2a163b6bca8d984c8adb96->enter($__internal_a6d541b911a9e281c2f4abe308906040a92dcfefbf2a163b6bca8d984c8adb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/recherche.html.twig"));

        $__internal_594b20770779a06193fef80bf88737875a50e12dd3d65a87108509607173cabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594b20770779a06193fef80bf88737875a50e12dd3d65a87108509607173cabe->enter($__internal_594b20770779a06193fef80bf88737875a50e12dd3d65a87108509607173cabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d541b911a9e281c2f4abe308906040a92dcfefbf2a163b6bca8d984c8adb96->leave($__internal_a6d541b911a9e281c2f4abe308906040a92dcfefbf2a163b6bca8d984c8adb96_prof);

        
        $__internal_594b20770779a06193fef80bf88737875a50e12dd3d65a87108509607173cabe->leave($__internal_594b20770779a06193fef80bf88737875a50e12dd3d65a87108509607173cabe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c67eabd4df58258854c2a572167c7c04fb92af509e43f30404f25ed37fd8c01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67eabd4df58258854c2a572167c7c04fb92af509e43f30404f25ed37fd8c01e->enter($__internal_c67eabd4df58258854c2a572167c7c04fb92af509e43f30404f25ed37fd8c01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_756f92d87e1bf4539e06ec188cd074407165b96e0eb44a9ba59edfa925e37ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756f92d87e1bf4539e06ec188cd074407165b96e0eb44a9ba59edfa925e37ae9->enter($__internal_756f92d87e1bf4539e06ec188cd074407165b96e0eb44a9ba59edfa925e37ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_756f92d87e1bf4539e06ec188cd074407165b96e0eb44a9ba59edfa925e37ae9->leave($__internal_756f92d87e1bf4539e06ec188cd074407165b96e0eb44a9ba59edfa925e37ae9_prof);

        
        $__internal_c67eabd4df58258854c2a572167c7c04fb92af509e43f30404f25ed37fd8c01e->leave($__internal_c67eabd4df58258854c2a572167c7c04fb92af509e43f30404f25ed37fd8c01e_prof);

    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        $__internal_aae76c9a5836f74dca99aae9b0c550129e987e015256c0a263ac94448cc01b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae76c9a5836f74dca99aae9b0c550129e987e015256c0a263ac94448cc01b58->enter($__internal_aae76c9a5836f74dca99aae9b0c550129e987e015256c0a263ac94448cc01b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_379585bfe962abb9eb49372aabc15a4fe052dfdb2d48e24dc359f9df626fb2a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379585bfe962abb9eb49372aabc15a4fe052dfdb2d48e24dc359f9df626fb2a3->enter($__internal_379585bfe962abb9eb49372aabc15a4fe052dfdb2d48e24dc359f9df626fb2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 7
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_379585bfe962abb9eb49372aabc15a4fe052dfdb2d48e24dc359f9df626fb2a3->leave($__internal_379585bfe962abb9eb49372aabc15a4fe052dfdb2d48e24dc359f9df626fb2a3_prof);

        
        $__internal_aae76c9a5836f74dca99aae9b0c550129e987e015256c0a263ac94448cc01b58->leave($__internal_aae76c9a5836f74dca99aae9b0c550129e987e015256c0a263ac94448cc01b58_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_352a1d4609ffbeb7c42cb8fa3322d8c5703b0aadae5a8d1849c8b5306e2f1c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352a1d4609ffbeb7c42cb8fa3322d8c5703b0aadae5a8d1849c8b5306e2f1c13->enter($__internal_352a1d4609ffbeb7c42cb8fa3322d8c5703b0aadae5a8d1849c8b5306e2f1c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7f79ee3436b60bdcbb089d6fcc84ae5349e345a0c81cf9f50d6603d4d3cc8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f79ee3436b60bdcbb089d6fcc84ae5349e345a0c81cf9f50d6603d4d3cc8a5->enter($__internal_e7f79ee3436b60bdcbb089d6fcc84ae5349e345a0c81cf9f50d6603d4d3cc8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "<div class=\"big-div-club\">
    <h1>Interface club</h1>
</div>
<center>

    <h1>Recherche club par nom</h1>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form');
        echo "
    <h1>Liste des Club</h1>
</center>
    <center>
    <table table width=\"60%\" height=\"20%\" border=\"2\" align=\"center\">
        <tr>
            <th>ID club</th>
            <th>nom club</th>
            <th>mail club</th>
            <th>date creation</th>
            <th>Responsable club</th>
            <th>description club</th>
            <th>photo club</th>
        </tr>

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new Twig_Error_Runtime('Variable "club" does not exist.', 35, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 36
            echo "
            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nomC", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "mailC", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "dateCreation", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "idUser", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "descC", array()), "html", null, true);
            echo "</td>
                <td> <img src= \" ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "image", array()))), "html", null, true);
            echo "\"  width=\"15%\"!imp  height=\"15%\" ></td>
                ";
            // line 45
            if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB"))) {
                // line 50
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("club_supprime", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a></td>
                <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_club_modifier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()))), "html", null, true);
                echo "\">Modifier</a></td>
                ";
            }
            // line 53
            echo "
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </table>
    </center>






    <p class=\"important\">

    </p>
";
        
        $__internal_e7f79ee3436b60bdcbb089d6fcc84ae5349e345a0c81cf9f50d6603d4d3cc8a5->leave($__internal_e7f79ee3436b60bdcbb089d6fcc84ae5349e345a0c81cf9f50d6603d4d3cc8a5_prof);

        
        $__internal_352a1d4609ffbeb7c42cb8fa3322d8c5703b0aadae5a8d1849c8b5306e2f1c13->leave($__internal_352a1d4609ffbeb7c42cb8fa3322d8c5703b0aadae5a8d1849c8b5306e2f1c13_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Default/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 56,  169 => 53,  164 => 51,  159 => 50,  157 => 45,  153 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  125 => 36,  121 => 35,  103 => 20,  95 => 14,  86 => 13,  69 => 7,  60 => 6,  42 => 5,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \":default:test.html.twig\" %}


{% block title %}Club{% endblock %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
{% endblock %}
{% block content %}
<div class=\"big-div-club\">
    <h1>Interface club</h1>
</div>
<center>

    <h1>Recherche club par nom</h1>
    {{ form (form) }}
    <h1>Liste des Club</h1>
</center>
    <center>
    <table table width=\"60%\" height=\"20%\" border=\"2\" align=\"center\">
        <tr>
            <th>ID club</th>
            <th>nom club</th>
            <th>mail club</th>
            <th>date creation</th>
            <th>Responsable club</th>
            <th>description club</th>
            <th>photo club</th>
        </tr>

        {% for c in club %}

            <tr>
                <td>{{ c.id }}</td>
                <td>{{ c.nomC}}</td>
                <td>{{ c.mailC}}</td>
                <td>{{ c.dateCreation |date}}</td>
                <td>{{ c.idUser}}</td>
                <td>{{ c.descC}}</td>
                <td> <img src= \" {{ asset ('uploads/images/' ~ c.image) }}\"  width=\"15%\"!imp  height=\"15%\" ></td>
                {% if (is_granted('ROLE_RESPONSABLE_SUPER_ADMIN'))
                or(is_granted('ROLE_SUPER_ADMIN'))
                or(is_granted('ROLE_ADMIN'))
                or(is_granted('ROLE_RESPONSABLE_CLUB'))
                %}
                <td><a href=\"{{ path('club_supprime',{'id':c.id}) }}\">Supprimer</a></td>
                <td><a href=\"{{ path('_club_modifier',{'id':c.id}) }}\">Modifier</a></td>
                {% endif %}

            </tr>
        {% endfor %}
    </table>
    </center>






    <p class=\"important\">

    </p>
{% endblock %}

", "@Club/Default/recherche.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\ClubBundle\\Resources\\views\\Default\\recherche.html.twig");
    }
}
