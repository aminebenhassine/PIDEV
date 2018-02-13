<?php

/* @Club/Default/modifclub.html.twig */
class __TwigTemplate_2a56687e15bd21fe3df8c2e175c174c831dd47779cffe6d8dc232b2a3998a826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "@Club/Default/modifclub.html.twig", 1);
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
        $__internal_116319193b8ed9d0343dbfbfbb2af438ae6f30bfe91dc1bba9c31d0dc10438e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116319193b8ed9d0343dbfbfbb2af438ae6f30bfe91dc1bba9c31d0dc10438e2->enter($__internal_116319193b8ed9d0343dbfbfbb2af438ae6f30bfe91dc1bba9c31d0dc10438e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/modifclub.html.twig"));

        $__internal_7e20d2b2c8b83c4e15a2da5b06d0ae861b4de6bacdb443f19a0b01b8cf256e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e20d2b2c8b83c4e15a2da5b06d0ae861b4de6bacdb443f19a0b01b8cf256e9f->enter($__internal_7e20d2b2c8b83c4e15a2da5b06d0ae861b4de6bacdb443f19a0b01b8cf256e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Club/Default/modifclub.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_116319193b8ed9d0343dbfbfbb2af438ae6f30bfe91dc1bba9c31d0dc10438e2->leave($__internal_116319193b8ed9d0343dbfbfbb2af438ae6f30bfe91dc1bba9c31d0dc10438e2_prof);

        
        $__internal_7e20d2b2c8b83c4e15a2da5b06d0ae861b4de6bacdb443f19a0b01b8cf256e9f->leave($__internal_7e20d2b2c8b83c4e15a2da5b06d0ae861b4de6bacdb443f19a0b01b8cf256e9f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b073bf45a8bc91babbe8c541b98060eee5cc28cd0871af4939aa8100607d851c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b073bf45a8bc91babbe8c541b98060eee5cc28cd0871af4939aa8100607d851c->enter($__internal_b073bf45a8bc91babbe8c541b98060eee5cc28cd0871af4939aa8100607d851c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e60d0105ef08aae0e518024cace6ad8fa854a88216899ed33045956bd95acb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60d0105ef08aae0e518024cace6ad8fa854a88216899ed33045956bd95acb5f->enter($__internal_e60d0105ef08aae0e518024cace6ad8fa854a88216899ed33045956bd95acb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club";
        
        $__internal_e60d0105ef08aae0e518024cace6ad8fa854a88216899ed33045956bd95acb5f->leave($__internal_e60d0105ef08aae0e518024cace6ad8fa854a88216899ed33045956bd95acb5f_prof);

        
        $__internal_b073bf45a8bc91babbe8c541b98060eee5cc28cd0871af4939aa8100607d851c->leave($__internal_b073bf45a8bc91babbe8c541b98060eee5cc28cd0871af4939aa8100607d851c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fe91f415a8a0693673ec9feacc360cd9aa805ab73eeb9f7faeb7e451b67e4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe91f415a8a0693673ec9feacc360cd9aa805ab73eeb9f7faeb7e451b67e4b8->enter($__internal_2fe91f415a8a0693673ec9feacc360cd9aa805ab73eeb9f7faeb7e451b67e4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_516cf7db829c4e31431ab981f131711aea62acb9d896bdbe59ba0cd153b7abcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516cf7db829c4e31431ab981f131711aea62acb9d896bdbe59ba0cd153b7abcf->enter($__internal_516cf7db829c4e31431ab981f131711aea62acb9d896bdbe59ba0cd153b7abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_516cf7db829c4e31431ab981f131711aea62acb9d896bdbe59ba0cd153b7abcf->leave($__internal_516cf7db829c4e31431ab981f131711aea62acb9d896bdbe59ba0cd153b7abcf_prof);

        
        $__internal_2fe91f415a8a0693673ec9feacc360cd9aa805ab73eeb9f7faeb7e451b67e4b8->leave($__internal_2fe91f415a8a0693673ec9feacc360cd9aa805ab73eeb9f7faeb7e451b67e4b8_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e2e85627a1a1fc83fcfe78316656e8394d0143dc888792f3f32b4112d694868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2e85627a1a1fc83fcfe78316656e8394d0143dc888792f3f32b4112d694868->enter($__internal_4e2e85627a1a1fc83fcfe78316656e8394d0143dc888792f3f32b4112d694868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b319dbd50f9feea4dcc38555934f9174a12c9fb699528fa9826de499a8c199f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b319dbd50f9feea4dcc38555934f9174a12c9fb699528fa9826de499a8c199f2->enter($__internal_b319dbd50f9feea4dcc38555934f9174a12c9fb699528fa9826de499a8c199f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div-club\">
        <h1>Ajouter un club</h1>
    </div>
    <center>
        <fieldset>
            ";
        // line 18
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 19
            echo "
                <table>
                    <tr>
                        ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_start');
            echo "
                    <tr>
                        <td>Nom de club:</td>
                        <td>";
            // line 25
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "nomC", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Mail de club:</td>
                        <td>";
            // line 30
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "mailC", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Responsable de club :</td>
                        <td>";
            // line 35
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "idUser", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Description  de club :</td>
                        <td>";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "descC", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Date de Creation de club :</td>
                        <td>";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "dateCreation", array()), 'widget');
            echo " </td>
                    </tr>

                    <tr>
                        <td>Photo de club :</td>
                        <td>";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "image", array()), 'widget');
            echo " </td>
                    </tr>




                    <tr>
                        <td>Valider votre Modification :</td>
                        <td>";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "Ajouter", array()), 'widget');
            echo " </td>
                    </tr>


                    ";
            // line 62
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'form_end');
            echo "
                    </tr>
                </table>
            ";
        }
        // line 66
        echo "        </fieldset>

    </center>

    <p class=\"important\">

    </p>
";
        
        $__internal_b319dbd50f9feea4dcc38555934f9174a12c9fb699528fa9826de499a8c199f2->leave($__internal_b319dbd50f9feea4dcc38555934f9174a12c9fb699528fa9826de499a8c199f2_prof);

        
        $__internal_4e2e85627a1a1fc83fcfe78316656e8394d0143dc888792f3f32b4112d694868->leave($__internal_4e2e85627a1a1fc83fcfe78316656e8394d0143dc888792f3f32b4112d694868_prof);

    }

    public function getTemplateName()
    {
        return "@Club/Default/modifclub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  173 => 62,  166 => 58,  155 => 50,  147 => 45,  139 => 40,  131 => 35,  123 => 30,  115 => 25,  109 => 22,  104 => 19,  102 => 18,  95 => 13,  86 => 12,  69 => 6,  60 => 5,  42 => 4,  11 => 1,);
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
        <h1>Ajouter un club</h1>
    </div>
    <center>
        <fieldset>
            {% if is_granted('ROLE_RESPONSABLE_SUPER_ADMIN') or is_granted('ROLE_ADMIN')or is_granted('ROLE_RESPONSABLE_CLUB') or is_granted('ROLE_SUPER_ADMIN') %}

                <table>
                    <tr>
                        {{ form_start(form) }}
                    <tr>
                        <td>Nom de club:</td>
                        <td>{{ form_widget(form.nomC) }} </td>
                    </tr>

                    <tr>
                        <td>Mail de club:</td>
                        <td>{{ form_widget(form.mailC) }} </td>
                    </tr>

                    <tr>
                        <td>Responsable de club :</td>
                        <td>{{ form_widget(form.idUser) }} </td>
                    </tr>

                    <tr>
                        <td>Description  de club :</td>
                        <td>{{ form_widget(form.descC) }} </td>
                    </tr>

                    <tr>
                        <td>Date de Creation de club :</td>
                        <td>{{ form_widget(form.dateCreation) }} </td>
                    </tr>

                    <tr>
                        <td>Photo de club :</td>
                        <td>{{ form_widget(form.image) }} </td>
                    </tr>




                    <tr>
                        <td>Valider votre Modification :</td>
                        <td>{{ form_widget(form.Ajouter) }} </td>
                    </tr>


                    {{ form_end(form) }}
                    </tr>
                </table>
            {% endif %}
        </fieldset>

    </center>

    <p class=\"important\">

    </p>
{% endblock %}





", "@Club/Default/modifclub.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\ClubBundle\\Resources\\views\\Default\\modifclub.html.twig");
    }
}
