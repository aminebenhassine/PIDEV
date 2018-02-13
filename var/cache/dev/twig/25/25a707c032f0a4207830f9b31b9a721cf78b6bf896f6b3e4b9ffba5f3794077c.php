<?php

/* EvenementBundle:Evenement:RechercheNom.html.twig */
class __TwigTemplate_8863c7fddd2257a8065eefbab8255b3d5a4b2fb955a7b66c39abb94ed9895f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "EvenementBundle:Evenement:RechercheNom.html.twig", 1);
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
        $__internal_ddb4d145d84901cf2b70434f9d9d0d3ea3e30bd73f0b8f7ae969af05eb6455c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb4d145d84901cf2b70434f9d9d0d3ea3e30bd73f0b8f7ae969af05eb6455c4->enter($__internal_ddb4d145d84901cf2b70434f9d9d0d3ea3e30bd73f0b8f7ae969af05eb6455c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:RechercheNom.html.twig"));

        $__internal_c63b7c34bfacf951c2fb8c0083da16f0fcc9532e5a0ba488a0a80a44012b01d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63b7c34bfacf951c2fb8c0083da16f0fcc9532e5a0ba488a0a80a44012b01d4->enter($__internal_c63b7c34bfacf951c2fb8c0083da16f0fcc9532e5a0ba488a0a80a44012b01d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:RechercheNom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb4d145d84901cf2b70434f9d9d0d3ea3e30bd73f0b8f7ae969af05eb6455c4->leave($__internal_ddb4d145d84901cf2b70434f9d9d0d3ea3e30bd73f0b8f7ae969af05eb6455c4_prof);

        
        $__internal_c63b7c34bfacf951c2fb8c0083da16f0fcc9532e5a0ba488a0a80a44012b01d4->leave($__internal_c63b7c34bfacf951c2fb8c0083da16f0fcc9532e5a0ba488a0a80a44012b01d4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fb15080fb41691cf2eec6479c9cf7dba6a9d1b7b59636eda0eca6a8ed649e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb15080fb41691cf2eec6479c9cf7dba6a9d1b7b59636eda0eca6a8ed649e38->enter($__internal_2fb15080fb41691cf2eec6479c9cf7dba6a9d1b7b59636eda0eca6a8ed649e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0983f55bccfd6c305f7a00935bb840bef255f923f97ea74e83378f1a8c044bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0983f55bccfd6c305f7a00935bb840bef255f923f97ea74e83378f1a8c044bf->enter($__internal_d0983f55bccfd6c305f7a00935bb840bef255f923f97ea74e83378f1a8c044bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_d0983f55bccfd6c305f7a00935bb840bef255f923f97ea74e83378f1a8c044bf->leave($__internal_d0983f55bccfd6c305f7a00935bb840bef255f923f97ea74e83378f1a8c044bf_prof);

        
        $__internal_2fb15080fb41691cf2eec6479c9cf7dba6a9d1b7b59636eda0eca6a8ed649e38->leave($__internal_2fb15080fb41691cf2eec6479c9cf7dba6a9d1b7b59636eda0eca6a8ed649e38_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_76eff34d3c3aacd366a72412be299dffffb6482a64b484fe96d03e19a8fc8b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76eff34d3c3aacd366a72412be299dffffb6482a64b484fe96d03e19a8fc8b56->enter($__internal_76eff34d3c3aacd366a72412be299dffffb6482a64b484fe96d03e19a8fc8b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_862bf5681c8e2256d73879f7b101e4b447e72e422c9cd971e4289c450daba043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862bf5681c8e2256d73879f7b101e4b447e72e422c9cd971e4289c450daba043->enter($__internal_862bf5681c8e2256d73879f7b101e4b447e72e422c9cd971e4289c450daba043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_862bf5681c8e2256d73879f7b101e4b447e72e422c9cd971e4289c450daba043->leave($__internal_862bf5681c8e2256d73879f7b101e4b447e72e422c9cd971e4289c450daba043_prof);

        
        $__internal_76eff34d3c3aacd366a72412be299dffffb6482a64b484fe96d03e19a8fc8b56->leave($__internal_76eff34d3c3aacd366a72412be299dffffb6482a64b484fe96d03e19a8fc8b56_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f742426efa74a9ef2a31592646ee15a92666d9204bdfab8299c93ceff3cedfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f742426efa74a9ef2a31592646ee15a92666d9204bdfab8299c93ceff3cedfd->enter($__internal_7f742426efa74a9ef2a31592646ee15a92666d9204bdfab8299c93ceff3cedfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b94a35bc5394d261498fa105d848c42c60283a7f90596302e4e00f97c068765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b94a35bc5394d261498fa105d848c42c60283a7f90596302e4e00f97c068765->enter($__internal_0b94a35bc5394d261498fa105d848c42c60283a7f90596302e4e00f97c068765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Recherche d'un évènement par nom </h1>
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
                <th> Nom </th>
                <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "titreE", array()), 'widget');
        echo "</td>
            </tr>

        </table>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'form_end');
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
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evts"]) || array_key_exists("evts", $context) ? $context["evts"] : (function () { throw new Twig_Error_Runtime('Variable "evts" does not exist.', 39, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 40
            echo "                <tr>
                    <td> <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "imgEvt", array())), "html", null, true);
            echo "\"> </td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "titreE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "descE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "dateE", array()), "d-m-y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "typeE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "idClub", array()), "nomC", array()), "html", null, true);
            echo "</td>
                    <td><A HREF=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprimer_events", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "id", array()))), "html", null, true);
            echo "\" > Supprimer </A></td>
                    <td><A HREF=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifier_events", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "id", array()))), "html", null, true);
            echo "\" > Modifier </A></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </table>
    </center>
    <p class=\"important\">

    </p>
";
        
        $__internal_0b94a35bc5394d261498fa105d848c42c60283a7f90596302e4e00f97c068765->leave($__internal_0b94a35bc5394d261498fa105d848c42c60283a7f90596302e4e00f97c068765_prof);

        
        $__internal_7f742426efa74a9ef2a31592646ee15a92666d9204bdfab8299c93ceff3cedfd->leave($__internal_7f742426efa74a9ef2a31592646ee15a92666d9204bdfab8299c93ceff3cedfd_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:RechercheNom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 51,  167 => 48,  163 => 47,  159 => 46,  155 => 45,  151 => 44,  147 => 43,  143 => 42,  139 => 41,  136 => 40,  132 => 39,  117 => 27,  110 => 23,  103 => 19,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Recherche d'un évènement par nom </h1>
    </div>
    <br>
    <br>
    <center>
        {{ form_start(form) }}
        <table border=\"2\">
            <tr>
                <th> Nom </th>
                <td>{{ form_widget(form.titreE) }}</td>
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
                    <td> <img src=\"{{ asset(evt.imgEvt) }}\"> </td>
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
{% endblock %}", "EvenementBundle:Evenement:RechercheNom.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle/Resources/views/Evenement/RechercheNom.html.twig");
    }
}
