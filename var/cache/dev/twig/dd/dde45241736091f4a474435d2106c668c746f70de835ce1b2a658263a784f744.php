<?php

/* EvenementBundle:Evenement:RechercheDate.html.twig */
class __TwigTemplate_edbdf5384a1a1d5fa07cac6ba7d9f27639579a9fc733ebe87285d96ce60ec95e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":default:test.html.twig", "EvenementBundle:Evenement:RechercheDate.html.twig", 1);
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
        $__internal_0907560b4a78df464343b21322ef272f6f41b70a4158d2752fb168f4632ad882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0907560b4a78df464343b21322ef272f6f41b70a4158d2752fb168f4632ad882->enter($__internal_0907560b4a78df464343b21322ef272f6f41b70a4158d2752fb168f4632ad882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:RechercheDate.html.twig"));

        $__internal_7477d50a85ead3682109e32693cca8b6e48a57a33917e46002f58690f449a6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7477d50a85ead3682109e32693cca8b6e48a57a33917e46002f58690f449a6c3->enter($__internal_7477d50a85ead3682109e32693cca8b6e48a57a33917e46002f58690f449a6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:RechercheDate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0907560b4a78df464343b21322ef272f6f41b70a4158d2752fb168f4632ad882->leave($__internal_0907560b4a78df464343b21322ef272f6f41b70a4158d2752fb168f4632ad882_prof);

        
        $__internal_7477d50a85ead3682109e32693cca8b6e48a57a33917e46002f58690f449a6c3->leave($__internal_7477d50a85ead3682109e32693cca8b6e48a57a33917e46002f58690f449a6c3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7b5e1355cdf35978cbb4125b2bf4eebd2f4443e8af2f9a37d426e15e338173c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b5e1355cdf35978cbb4125b2bf4eebd2f4443e8af2f9a37d426e15e338173c->enter($__internal_c7b5e1355cdf35978cbb4125b2bf4eebd2f4443e8af2f9a37d426e15e338173c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_edf402402d103ec157ffc8a98ef3c3f57bd9c15a50fd8e73339294c59156a0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf402402d103ec157ffc8a98ef3c3f57bd9c15a50fd8e73339294c59156a0fd->enter($__internal_edf402402d103ec157ffc8a98ef3c3f57bd9c15a50fd8e73339294c59156a0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_edf402402d103ec157ffc8a98ef3c3f57bd9c15a50fd8e73339294c59156a0fd->leave($__internal_edf402402d103ec157ffc8a98ef3c3f57bd9c15a50fd8e73339294c59156a0fd_prof);

        
        $__internal_c7b5e1355cdf35978cbb4125b2bf4eebd2f4443e8af2f9a37d426e15e338173c->leave($__internal_c7b5e1355cdf35978cbb4125b2bf4eebd2f4443e8af2f9a37d426e15e338173c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8b106604f5cbdfec2727d6ff3961872d9b57952ed4e55aedd27600e60dad288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b106604f5cbdfec2727d6ff3961872d9b57952ed4e55aedd27600e60dad288->enter($__internal_f8b106604f5cbdfec2727d6ff3961872d9b57952ed4e55aedd27600e60dad288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c11d29ac1da8069a18fa30d2f36fc3219486cce4693e41a5c0aa087872ffa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c11d29ac1da8069a18fa30d2f36fc3219486cce4693e41a5c0aa087872ffa4e->enter($__internal_2c11d29ac1da8069a18fa30d2f36fc3219486cce4693e41a5c0aa087872ffa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }

    </style>
";
        
        $__internal_2c11d29ac1da8069a18fa30d2f36fc3219486cce4693e41a5c0aa087872ffa4e->leave($__internal_2c11d29ac1da8069a18fa30d2f36fc3219486cce4693e41a5c0aa087872ffa4e_prof);

        
        $__internal_f8b106604f5cbdfec2727d6ff3961872d9b57952ed4e55aedd27600e60dad288->leave($__internal_f8b106604f5cbdfec2727d6ff3961872d9b57952ed4e55aedd27600e60dad288_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_4dc9d901f44105c8d0c7821d90218ee49f82e0abdecbdc9b1f62069f8a00d1b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc9d901f44105c8d0c7821d90218ee49f82e0abdecbdc9b1f62069f8a00d1b9->enter($__internal_4dc9d901f44105c8d0c7821d90218ee49f82e0abdecbdc9b1f62069f8a00d1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_de204ec31495d27b87b9e9921c7315af02adf122b1c2cf78b557c2d8dc47a2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de204ec31495d27b87b9e9921c7315af02adf122b1c2cf78b557c2d8dc47a2b2->enter($__internal_de204ec31495d27b87b9e9921c7315af02adf122b1c2cf78b557c2d8dc47a2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <div class=\"big-div\">
        <h1>Recherche d'un évènement par date </h1>
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
                <th> Date </th>
                <td>";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "dateE", array()), 'widget');
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
        
        $__internal_de204ec31495d27b87b9e9921c7315af02adf122b1c2cf78b557c2d8dc47a2b2->leave($__internal_de204ec31495d27b87b9e9921c7315af02adf122b1c2cf78b557c2d8dc47a2b2_prof);

        
        $__internal_4dc9d901f44105c8d0c7821d90218ee49f82e0abdecbdc9b1f62069f8a00d1b9->leave($__internal_4dc9d901f44105c8d0c7821d90218ee49f82e0abdecbdc9b1f62069f8a00d1b9_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:RechercheDate.html.twig";
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
        <h1>Recherche d'un évènement par date </h1>
    </div>
    <br>
    <br>
    <center>
        {{ form_start(form) }}
        <table border=\"2\">

            <tr>
                <th> Date </th>
                <td>{{ form_widget(form.dateE) }}</td>
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
{% endblock %}", "EvenementBundle:Evenement:RechercheDate.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\EvenementBundle/Resources/views/Evenement/RechercheDate.html.twig");
    }
}
