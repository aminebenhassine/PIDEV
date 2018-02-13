<?php

/* @Evenement/Evenement/RechercheClub.html.twig */
class __TwigTemplate_b964e0d2649f0dc2e3573bbf2393ee4a36b19b08aff3691707de6d484e571bc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Evenement/Evenement/RechercheClub.html.twig", 1);
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
        $__internal_db757717c2585206b095842db2e2d205f880191ebd11d05a8a2b8f588c45a209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db757717c2585206b095842db2e2d205f880191ebd11d05a8a2b8f588c45a209->enter($__internal_db757717c2585206b095842db2e2d205f880191ebd11d05a8a2b8f588c45a209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/RechercheClub.html.twig"));

        $__internal_4f1fb448e358f89b69ea201a2d77b38b67b8f92fa76abb55d468e3ddaf73cd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1fb448e358f89b69ea201a2d77b38b67b8f92fa76abb55d468e3ddaf73cd07->enter($__internal_4f1fb448e358f89b69ea201a2d77b38b67b8f92fa76abb55d468e3ddaf73cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/RechercheClub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db757717c2585206b095842db2e2d205f880191ebd11d05a8a2b8f588c45a209->leave($__internal_db757717c2585206b095842db2e2d205f880191ebd11d05a8a2b8f588c45a209_prof);

        
        $__internal_4f1fb448e358f89b69ea201a2d77b38b67b8f92fa76abb55d468e3ddaf73cd07->leave($__internal_4f1fb448e358f89b69ea201a2d77b38b67b8f92fa76abb55d468e3ddaf73cd07_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_34d8b1119c6d26f703a1b740ed3ba5a241720c816f3d5257519b0882e92fed2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d8b1119c6d26f703a1b740ed3ba5a241720c816f3d5257519b0882e92fed2f->enter($__internal_34d8b1119c6d26f703a1b740ed3ba5a241720c816f3d5257519b0882e92fed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00ec743d1c673c251660426f046f03246309228cf43bca9bd71ede97e06537bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ec743d1c673c251660426f046f03246309228cf43bca9bd71ede97e06537bc->enter($__internal_00ec743d1c673c251660426f046f03246309228cf43bca9bd71ede97e06537bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_00ec743d1c673c251660426f046f03246309228cf43bca9bd71ede97e06537bc->leave($__internal_00ec743d1c673c251660426f046f03246309228cf43bca9bd71ede97e06537bc_prof);

        
        $__internal_34d8b1119c6d26f703a1b740ed3ba5a241720c816f3d5257519b0882e92fed2f->leave($__internal_34d8b1119c6d26f703a1b740ed3ba5a241720c816f3d5257519b0882e92fed2f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a7fc40cff24966efd08e52677a828d84f93684020dcfb19eed1affaa409e4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7fc40cff24966efd08e52677a828d84f93684020dcfb19eed1affaa409e4ff->enter($__internal_8a7fc40cff24966efd08e52677a828d84f93684020dcfb19eed1affaa409e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56e7e9092f11ce1a869049a90d730db30b9400b11e8798fe8a8c50e0c77c8d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e7e9092f11ce1a869049a90d730db30b9400b11e8798fe8a8c50e0c77c8d1a->enter($__internal_56e7e9092f11ce1a869049a90d730db30b9400b11e8798fe8a8c50e0c77c8d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_56e7e9092f11ce1a869049a90d730db30b9400b11e8798fe8a8c50e0c77c8d1a->leave($__internal_56e7e9092f11ce1a869049a90d730db30b9400b11e8798fe8a8c50e0c77c8d1a_prof);

        
        $__internal_8a7fc40cff24966efd08e52677a828d84f93684020dcfb19eed1affaa409e4ff->leave($__internal_8a7fc40cff24966efd08e52677a828d84f93684020dcfb19eed1affaa409e4ff_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3f4f590494595525eff2ae0a9a20a586c5ef69239aa7621c3597ec39bc1884b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f4f590494595525eff2ae0a9a20a586c5ef69239aa7621c3597ec39bc1884b->enter($__internal_b3f4f590494595525eff2ae0a9a20a586c5ef69239aa7621c3597ec39bc1884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2c1e3727b3299794a2d8e58a36fb70adcab02ccdfebeb6aa2da9dc8a0908bac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1e3727b3299794a2d8e58a36fb70adcab02ccdfebeb6aa2da9dc8a0908bac1->enter($__internal_2c1e3727b3299794a2d8e58a36fb70adcab02ccdfebeb6aa2da9dc8a0908bac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Recherche d'un évènement par club </h1>
    </div>
    <br>
    <br>
    <center>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start');
        echo "
        <table border=\"2\">

            <tr>
                <th> Club Organisateur </th>
                <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "idClub", array()), 'widget');
        echo "</td>
            </tr>

        </table>
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_end');
        echo "
        <br>
        <br>
        <table border=\"2\">
            <tr>
                <th> Image </th>
                <th> Titre </th>
                <th> Description </th>
                <th> Date </th>
                <th> Type </th>
                <th> Club Organisateur </th>
            </tr>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evts"]) || array_key_exists("evts", $context) ? $context["evts"] : (function () { throw new Twig_Error_Runtime('Variable "evts" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 41
            echo "                <tr>
                    <td> <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "imgEvt", array())), "html", null, true);
            echo "\" > </td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "titreE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "descE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "dateE", array()), "d-m-y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "typeE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "idClub", array()), "nomC", array()), "html", null, true);
            echo "</td>
                    <td><A HREF=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprimer_events", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "id", array()))), "html", null, true);
            echo "\" > Supprimer </A></td>
                    <td><A HREF=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifier_events", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "id", array()))), "html", null, true);
            echo "\" > Modifier </A></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </table>
    </center>
    <p class=\"important\">

    </p>
";
        
        $__internal_2c1e3727b3299794a2d8e58a36fb70adcab02ccdfebeb6aa2da9dc8a0908bac1->leave($__internal_2c1e3727b3299794a2d8e58a36fb70adcab02ccdfebeb6aa2da9dc8a0908bac1_prof);

        
        $__internal_b3f4f590494595525eff2ae0a9a20a586c5ef69239aa7621c3597ec39bc1884b->leave($__internal_b3f4f590494595525eff2ae0a9a20a586c5ef69239aa7621c3597ec39bc1884b_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/RechercheClub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 52,  168 => 49,  164 => 48,  160 => 47,  156 => 46,  152 => 45,  148 => 44,  144 => 43,  140 => 42,  137 => 41,  133 => 40,  118 => 28,  111 => 24,  103 => 19,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Recherche d'un évènement par club </h1>
    </div>
    <br>
    <br>
    <center>
        {{ form_start(form) }}
        <table border=\"2\">

            <tr>
                <th> Club Organisateur </th>
                <td>{{ form_widget(form.idClub) }}</td>
            </tr>

        </table>
        {{ form_end(form) }}
        <br>
        <br>
        <table border=\"2\">
            <tr>
                <th> Image </th>
                <th> Titre </th>
                <th> Description </th>
                <th> Date </th>
                <th> Type </th>
                <th> Club Organisateur </th>
            </tr>
            {% for evt in evts %}
                <tr>
                    <td> <img src=\"{{ asset(evt.imgEvt) }}\" > </td>
                    <td>{{ evt.titreE }}</td>
                    <td>{{ evt.descE }}</td>
                    <td>{{ evt.dateE | date('d-m-y H:i') }}</td>
                    <td>{{ evt.typeE }}</td>
                    <td>{{ evt.idClub.nomC }}</td>
                    <td><A HREF=\"{{ path('_supprimer_events',{'id': evt.id }) }}\" > Supprimer </A></td>
                    <td><A HREF=\"{{ path('_modifier_events',{'id':evt.id }) }}\" > Modifier </A></td>
                </tr>
            {% endfor %}
        </table>
    </center>
    <p class=\"important\">

    </p>
{% endblock %}", "@Evenement/Evenement/RechercheClub.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle\\Resources\\views\\Evenement\\RechercheClub.html.twig");
    }
}
