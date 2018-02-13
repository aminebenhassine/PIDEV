<?php

/* @Evenement/Evenement/afficher.html.twig */
class __TwigTemplate_e8720c149b3a5db66bfe9351504280378f8a80d1f9f2c14b270149edede0c299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Evenement/Evenement/afficher.html.twig", 1);
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
        $__internal_11b7b77dd4730d2c52005d348155f1af1106555b5767a77805872d420d92f069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b7b77dd4730d2c52005d348155f1af1106555b5767a77805872d420d92f069->enter($__internal_11b7b77dd4730d2c52005d348155f1af1106555b5767a77805872d420d92f069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/afficher.html.twig"));

        $__internal_6f63fbd1d1a066cc4ffd6240b8b0bfd35980dfbe94c93efe06fc230b290eada0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f63fbd1d1a066cc4ffd6240b8b0bfd35980dfbe94c93efe06fc230b290eada0->enter($__internal_6f63fbd1d1a066cc4ffd6240b8b0bfd35980dfbe94c93efe06fc230b290eada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b7b77dd4730d2c52005d348155f1af1106555b5767a77805872d420d92f069->leave($__internal_11b7b77dd4730d2c52005d348155f1af1106555b5767a77805872d420d92f069_prof);

        
        $__internal_6f63fbd1d1a066cc4ffd6240b8b0bfd35980dfbe94c93efe06fc230b290eada0->leave($__internal_6f63fbd1d1a066cc4ffd6240b8b0bfd35980dfbe94c93efe06fc230b290eada0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff01005080dded129286a43971df34f1f1f954993ad8f72237387b200514deb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff01005080dded129286a43971df34f1f1f954993ad8f72237387b200514deb0->enter($__internal_ff01005080dded129286a43971df34f1f1f954993ad8f72237387b200514deb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1298b530a4aa3f992dc6f5ed0cf7c856d9dc381344ff22c477cf4d397345f78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1298b530a4aa3f992dc6f5ed0cf7c856d9dc381344ff22c477cf4d397345f78c->enter($__internal_1298b530a4aa3f992dc6f5ed0cf7c856d9dc381344ff22c477cf4d397345f78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_1298b530a4aa3f992dc6f5ed0cf7c856d9dc381344ff22c477cf4d397345f78c->leave($__internal_1298b530a4aa3f992dc6f5ed0cf7c856d9dc381344ff22c477cf4d397345f78c_prof);

        
        $__internal_ff01005080dded129286a43971df34f1f1f954993ad8f72237387b200514deb0->leave($__internal_ff01005080dded129286a43971df34f1f1f954993ad8f72237387b200514deb0_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e5ce29f48b0fd32a265c434c182158dfb15c95525778fb736fb4de2896666a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5ce29f48b0fd32a265c434c182158dfb15c95525778fb736fb4de2896666a2->enter($__internal_0e5ce29f48b0fd32a265c434c182158dfb15c95525778fb736fb4de2896666a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_77559517d43303e5ff0444cbe96b4e37b34263943367a1a01712e44738238058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77559517d43303e5ff0444cbe96b4e37b34263943367a1a01712e44738238058->enter($__internal_77559517d43303e5ff0444cbe96b4e37b34263943367a1a01712e44738238058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_77559517d43303e5ff0444cbe96b4e37b34263943367a1a01712e44738238058->leave($__internal_77559517d43303e5ff0444cbe96b4e37b34263943367a1a01712e44738238058_prof);

        
        $__internal_0e5ce29f48b0fd32a265c434c182158dfb15c95525778fb736fb4de2896666a2->leave($__internal_0e5ce29f48b0fd32a265c434c182158dfb15c95525778fb736fb4de2896666a2_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_92530ae8d598db0e8992be226ff79f1626dbafce2dc0132592c4a60b13456f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92530ae8d598db0e8992be226ff79f1626dbafce2dc0132592c4a60b13456f88->enter($__internal_92530ae8d598db0e8992be226ff79f1626dbafce2dc0132592c4a60b13456f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_551ec618b71778f2b17bfc0de4f78243ffe3fa839400ed115d521c7285abdc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551ec618b71778f2b17bfc0de4f78243ffe3fa839400ed115d521c7285abdc3e->enter($__internal_551ec618b71778f2b17bfc0de4f78243ffe3fa839400ed115d521c7285abdc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Liste des évènements</h1>
    </div>
    <center>
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evts"]) || array_key_exists("evts", $context) ? $context["evts"] : (function () { throw new Twig_Error_Runtime('Variable "evts" does not exist.', 26, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evt"]) {
            // line 27
            echo "                <tr>
                    <td> <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "imgEvt", array())), "html", null, true);
            echo "\"> </td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "titreE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "descE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "dateE", array()), "d-m-y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "typeE", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "idClub", array()), "nomC", array()), "html", null, true);
            echo "</td>
                    <td><A HREF=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_supprimer_events", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "id", array()))), "html", null, true);
            echo "\" > Supprimer </A></td>
                    <td><A HREF=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifier_events", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["evt"], "id", array()))), "html", null, true);
            echo "\" > Modifier </A></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </table>
    </center>
    <p class=\"important\">

    </p>
";
        
        $__internal_551ec618b71778f2b17bfc0de4f78243ffe3fa839400ed115d521c7285abdc3e->leave($__internal_551ec618b71778f2b17bfc0de4f78243ffe3fa839400ed115d521c7285abdc3e_prof);

        
        $__internal_92530ae8d598db0e8992be226ff79f1626dbafce2dc0132592c4a60b13456f88->leave($__internal_92530ae8d598db0e8992be226ff79f1626dbafce2dc0132592c4a60b13456f88_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 38,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  114 => 27,  110 => 26,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Liste des évènements</h1>
    </div>
    <center>
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
{% endblock %}", "@Evenement/Evenement/afficher.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle\\Resources\\views\\Evenement\\afficher.html.twig");
    }
}
