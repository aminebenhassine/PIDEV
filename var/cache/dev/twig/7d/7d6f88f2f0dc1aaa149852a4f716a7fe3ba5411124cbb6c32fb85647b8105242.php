<?php

/* @Evenement/Evenement/modifier.html.twig */
class __TwigTemplate_34ca81578159682aa35008e184c4ab9c3582e9395e0de86defc3b07956b58638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Evenement/Evenement/modifier.html.twig", 1);
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
        $__internal_9a2da5b0932e2b81527a977c7d618b16f8629a99c26b248afcaf1266f98fb593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2da5b0932e2b81527a977c7d618b16f8629a99c26b248afcaf1266f98fb593->enter($__internal_9a2da5b0932e2b81527a977c7d618b16f8629a99c26b248afcaf1266f98fb593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/modifier.html.twig"));

        $__internal_b6281614a542be9655a19dcb812dc54818f616f530f793457d3a6c119964d9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6281614a542be9655a19dcb812dc54818f616f530f793457d3a6c119964d9ea->enter($__internal_b6281614a542be9655a19dcb812dc54818f616f530f793457d3a6c119964d9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a2da5b0932e2b81527a977c7d618b16f8629a99c26b248afcaf1266f98fb593->leave($__internal_9a2da5b0932e2b81527a977c7d618b16f8629a99c26b248afcaf1266f98fb593_prof);

        
        $__internal_b6281614a542be9655a19dcb812dc54818f616f530f793457d3a6c119964d9ea->leave($__internal_b6281614a542be9655a19dcb812dc54818f616f530f793457d3a6c119964d9ea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c07b87c69829dc2ed13a8b67c38f6d448f6f766b1d68bd43b886f6aef255e590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07b87c69829dc2ed13a8b67c38f6d448f6f766b1d68bd43b886f6aef255e590->enter($__internal_c07b87c69829dc2ed13a8b67c38f6d448f6f766b1d68bd43b886f6aef255e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25cca4a0a0a4d1f7473bd0c1271b735b3e39f8dd6b1713a47122373a66e7df6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25cca4a0a0a4d1f7473bd0c1271b735b3e39f8dd6b1713a47122373a66e7df6c->enter($__internal_25cca4a0a0a4d1f7473bd0c1271b735b3e39f8dd6b1713a47122373a66e7df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_25cca4a0a0a4d1f7473bd0c1271b735b3e39f8dd6b1713a47122373a66e7df6c->leave($__internal_25cca4a0a0a4d1f7473bd0c1271b735b3e39f8dd6b1713a47122373a66e7df6c_prof);

        
        $__internal_c07b87c69829dc2ed13a8b67c38f6d448f6f766b1d68bd43b886f6aef255e590->leave($__internal_c07b87c69829dc2ed13a8b67c38f6d448f6f766b1d68bd43b886f6aef255e590_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_e508da893d09a958c94e593705c7943e621a21f105a1b77df52169f2f5841d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e508da893d09a958c94e593705c7943e621a21f105a1b77df52169f2f5841d42->enter($__internal_e508da893d09a958c94e593705c7943e621a21f105a1b77df52169f2f5841d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c5259d4b78e1aa198e0dc6a8c620e0742434030c9dbceff28a1bd6ae6ba8a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5259d4b78e1aa198e0dc6a8c620e0742434030c9dbceff28a1bd6ae6ba8a5d->enter($__internal_3c5259d4b78e1aa198e0dc6a8c620e0742434030c9dbceff28a1bd6ae6ba8a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_3c5259d4b78e1aa198e0dc6a8c620e0742434030c9dbceff28a1bd6ae6ba8a5d->leave($__internal_3c5259d4b78e1aa198e0dc6a8c620e0742434030c9dbceff28a1bd6ae6ba8a5d_prof);

        
        $__internal_e508da893d09a958c94e593705c7943e621a21f105a1b77df52169f2f5841d42->leave($__internal_e508da893d09a958c94e593705c7943e621a21f105a1b77df52169f2f5841d42_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_9a280be18dfdfb91bcd775688721badc69a97cc30af0591250705efd31609b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a280be18dfdfb91bcd775688721badc69a97cc30af0591250705efd31609b46->enter($__internal_9a280be18dfdfb91bcd775688721badc69a97cc30af0591250705efd31609b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2a714278a8f5847a5d49a7f1f0cf40468b2f70b3555d3afa3112d1b45be710a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a714278a8f5847a5d49a7f1f0cf40468b2f70b3555d3afa3112d1b45be710a6->enter($__internal_2a714278a8f5847a5d49a7f1f0cf40468b2f70b3555d3afa3112d1b45be710a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Ajouter un évèenement</h1>
    </div>
    <div>
        <center>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "
            <table border=\"2\">
                <tr>
                    <th> Titre </th>
                    <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "titreE", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th> Description </th>
                    <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "descE", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th> Date </th>
                    <td>";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "dateE", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th> Type </th>
                    <td>";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "typeE", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th> Lien vers une Image descriptive (optionnel) </th>
                    <td>";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "imgEvt", array()), 'widget');
        echo "</td>
                </tr>
            </table>
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </center>
    </div>

    <p class=\"important\">

    </p>
";
        
        $__internal_2a714278a8f5847a5d49a7f1f0cf40468b2f70b3555d3afa3112d1b45be710a6->leave($__internal_2a714278a8f5847a5d49a7f1f0cf40468b2f70b3555d3afa3112d1b45be710a6_prof);

        
        $__internal_9a280be18dfdfb91bcd775688721badc69a97cc30af0591250705efd31609b46->leave($__internal_9a280be18dfdfb91bcd775688721badc69a97cc30af0591250705efd31609b46_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  137 => 38,  130 => 34,  123 => 30,  116 => 26,  109 => 22,  102 => 18,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Ajouter un évèenement</h1>
    </div>
    <div>
        <center>
            {{ form_start(form) }}
            <table border=\"2\">
                <tr>
                    <th> Titre </th>
                    <td>{{ form_widget(form.titreE) }}</td>
                </tr>
                <tr>
                    <th> Description </th>
                    <td>{{ form_widget(form.descE) }}</td>
                </tr>
                <tr>
                    <th> Date </th>
                    <td>{{ form_widget(form.dateE) }}</td>
                </tr>
                <tr>
                    <th> Type </th>
                    <td>{{ form_widget(form.typeE) }}</td>
                </tr>
                <tr>
                    <th> Lien vers une Image descriptive (optionnel) </th>
                    <td>{{ form_widget(form.imgEvt) }}</td>
                </tr>
            </table>
            {{ form_end(form) }}
        </center>
    </div>

    <p class=\"important\">

    </p>
{% endblock %}", "@Evenement/Evenement/modifier.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle\\Resources\\views\\Evenement\\modifier.html.twig");
    }
}
