<?php

/* @Evenement/Evenement/ajout.html.twig */
class __TwigTemplate_b2602df0b773677e7e7e61ab74257cf852d5087bf2450527ed75131d7d2ddf47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Evenement/Evenement/ajout.html.twig", 1);
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
        $__internal_2588b67522191a0a266359c5ef74e197aeaa272ac9a011906973825fd45d72b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2588b67522191a0a266359c5ef74e197aeaa272ac9a011906973825fd45d72b6->enter($__internal_2588b67522191a0a266359c5ef74e197aeaa272ac9a011906973825fd45d72b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/ajout.html.twig"));

        $__internal_15ec3e34c479deda0d476c0f6bb6ca492640b7238debcb2dc98e41c36ff5079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ec3e34c479deda0d476c0f6bb6ca492640b7238debcb2dc98e41c36ff5079d->enter($__internal_15ec3e34c479deda0d476c0f6bb6ca492640b7238debcb2dc98e41c36ff5079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Evenement/Evenement/ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2588b67522191a0a266359c5ef74e197aeaa272ac9a011906973825fd45d72b6->leave($__internal_2588b67522191a0a266359c5ef74e197aeaa272ac9a011906973825fd45d72b6_prof);

        
        $__internal_15ec3e34c479deda0d476c0f6bb6ca492640b7238debcb2dc98e41c36ff5079d->leave($__internal_15ec3e34c479deda0d476c0f6bb6ca492640b7238debcb2dc98e41c36ff5079d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c944db00bbe12abbf91da1c3ffdf325e423f28d9b82030c165275d2ea41e63d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c944db00bbe12abbf91da1c3ffdf325e423f28d9b82030c165275d2ea41e63d6->enter($__internal_c944db00bbe12abbf91da1c3ffdf325e423f28d9b82030c165275d2ea41e63d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efd0195c1cc032d2aea215a6b5fecda07f112cef20058a7f8639427c6da4d872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd0195c1cc032d2aea215a6b5fecda07f112cef20058a7f8639427c6da4d872->enter($__internal_efd0195c1cc032d2aea215a6b5fecda07f112cef20058a7f8639427c6da4d872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_efd0195c1cc032d2aea215a6b5fecda07f112cef20058a7f8639427c6da4d872->leave($__internal_efd0195c1cc032d2aea215a6b5fecda07f112cef20058a7f8639427c6da4d872_prof);

        
        $__internal_c944db00bbe12abbf91da1c3ffdf325e423f28d9b82030c165275d2ea41e63d6->leave($__internal_c944db00bbe12abbf91da1c3ffdf325e423f28d9b82030c165275d2ea41e63d6_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_c45e8197d463a391c2798571d4812d85d6f48cbe90755a2b857f7ffec235fb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45e8197d463a391c2798571d4812d85d6f48cbe90755a2b857f7ffec235fb4f->enter($__internal_c45e8197d463a391c2798571d4812d85d6f48cbe90755a2b857f7ffec235fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13d833986431661a4de4feb152643cb5927f2af1f4501c2e91b725329b2ea2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d833986431661a4de4feb152643cb5927f2af1f4501c2e91b725329b2ea2ec->enter($__internal_13d833986431661a4de4feb152643cb5927f2af1f4501c2e91b725329b2ea2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_13d833986431661a4de4feb152643cb5927f2af1f4501c2e91b725329b2ea2ec->leave($__internal_13d833986431661a4de4feb152643cb5927f2af1f4501c2e91b725329b2ea2ec_prof);

        
        $__internal_c45e8197d463a391c2798571d4812d85d6f48cbe90755a2b857f7ffec235fb4f->leave($__internal_c45e8197d463a391c2798571d4812d85d6f48cbe90755a2b857f7ffec235fb4f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_27185dcec8ca1692c873033d55d4db0db0b9afa469220b7b9e2e4d63372179b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27185dcec8ca1692c873033d55d4db0db0b9afa469220b7b9e2e4d63372179b3->enter($__internal_27185dcec8ca1692c873033d55d4db0db0b9afa469220b7b9e2e4d63372179b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eb66087dd872685407f341fabbd5c569bc2f891cb5c6136ea9ce26264330c40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb66087dd872685407f341fabbd5c569bc2f891cb5c6136ea9ce26264330c40d->enter($__internal_eb66087dd872685407f341fabbd5c569bc2f891cb5c6136ea9ce26264330c40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Ajouter un évènement</h1>
    </div>
    <div>
    <center>
    ";
        // line 18
        if ((((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ETUDIANT"))) {
            // line 23
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_start');
            echo "
        <table border=\"2\">
            <tr>
                <th> Titre </th>
                <td>";
            // line 27
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "titreE", array()), 'widget');
            echo "</td>
            </tr>
            <tr>
                <th> Description </th>
                <td>";
            // line 31
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "descE", array()), 'widget');
            echo "</td>
            </tr>
            <tr>
                <th> Date </th>
                <td>";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "dateE", array()), 'widget');
            echo "</td>
            </tr>
            <tr>
                <th> Type </th>
                <td>";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "typeE", array()), 'widget');
            echo "</td>
            </tr>
            <tr>
                <th> Club Organisateur </th>
                <td>";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "idClub", array()), 'widget');
            echo "</td>
            </tr>
            <tr>
                <th> Lien vers une Image descriptive (optionnel) </th>
                <td>";
            // line 47
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "imgEvt", array()), 'widget');
            echo "</td>
            </tr>
        </table>
        ";
            // line 50
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'form_end');
            echo "
        ";
        } else {
            // line 51
            echo " <P color=\"RED\">Vous ne pouvez pas ajouter d'evenements, merci de contacter votre administrateur systeme ou de s'inscrire</P>
        ";
        }
        // line 53
        echo "    </center>
    </div>

    <p class=\"important\">

    </p>
";
        
        $__internal_eb66087dd872685407f341fabbd5c569bc2f891cb5c6136ea9ce26264330c40d->leave($__internal_eb66087dd872685407f341fabbd5c569bc2f891cb5c6136ea9ce26264330c40d_prof);

        
        $__internal_27185dcec8ca1692c873033d55d4db0db0b9afa469220b7b9e2e4d63372179b3->leave($__internal_27185dcec8ca1692c873033d55d4db0db0b9afa469220b7b9e2e4d63372179b3_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  158 => 51,  153 => 50,  147 => 47,  140 => 43,  133 => 39,  126 => 35,  119 => 31,  112 => 27,  104 => 23,  102 => 18,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Ajouter un évènement</h1>
    </div>
    <div>
    <center>
    {% if is_granted('ROLE_RESPONSABLE_SUPER_ADMIN')
    or is_granted('ROLE_ADMIN')
    or is_granted('ROLE_RESPONSABLE_CLUB')
    or is_granted('ROLE_SUPER_ADMIN')
    or is_granted('ROLE_ETUDIANT') %}
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
                <th> Club Organisateur </th>
                <td>{{ form_widget(form.idClub) }}</td>
            </tr>
            <tr>
                <th> Lien vers une Image descriptive (optionnel) </th>
                <td>{{ form_widget(form.imgEvt) }}</td>
            </tr>
        </table>
        {{ form_end(form) }}
        {% else %} <P color=\"RED\">Vous ne pouvez pas ajouter d'evenements, merci de contacter votre administrateur systeme ou de s'inscrire</P>
        {% endif %}
    </center>
    </div>

    <p class=\"important\">

    </p>
{% endblock %}", "@Evenement/Evenement/ajout.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle\\Resources\\views\\Evenement\\ajout.html.twig");
    }
}
