<?php

/* @Spotted/CRUD/content.html.twig */
class __TwigTemplate_5b59f136996c5af58eb9f480639afdf48aac6eb77678fd82d396fa8434e90116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c090f999fa4691a61a3d4a483136e91c574ebe878ef4602032f37bf69e935e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c090f999fa4691a61a3d4a483136e91c574ebe878ef4602032f37bf69e935e0d->enter($__internal_c090f999fa4691a61a3d4a483136e91c574ebe878ef4602032f37bf69e935e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/content.html.twig"));

        $__internal_17cb57d9dbf7aa6d05b97409c924b990f7a23d4df827fe5aca8f205e3c454afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cb57d9dbf7aa6d05b97409c924b990f7a23d4df827fe5aca8f205e3c454afa->enter($__internal_17cb57d9dbf7aa6d05b97409c924b990f7a23d4df827fe5aca8f205e3c454afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/content.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listspotted"]) || array_key_exists("listspotted", $context) ? $context["listspotted"] : (function () { throw new Twig_Error_Runtime('Variable "listspotted" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 2
            echo "
<h1>";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "titreP", array()), "html", null, true);
            echo "</h1><br>
<img width=\"88%\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "image", array()))), "html", null, true);
            echo "\"/>
content : <br>
<blockquote>
    ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descP", array()), "html", null, true);
            echo "
</blockquote>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "

<div style=\"background-color: oldlace !important; height: 500px !important;border:2px solid black !important;\">
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "

    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_end');
        echo "

    <div style=\"padding: 20px !important; background-color: #C1CEC4 !important;\">
        <table border=\"1\">
            <tr>
                <th>
                    id
                </th>


            </tr>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 27, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "contentComm", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_edit_comment_spotted", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                    <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_delete_comment_spotted", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>



                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                <i>There is no comments here...</i>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </table>

    </div>
</div>";
        
        $__internal_c090f999fa4691a61a3d4a483136e91c574ebe878ef4602032f37bf69e935e0d->leave($__internal_c090f999fa4691a61a3d4a483136e91c574ebe878ef4602032f37bf69e935e0d_prof);

        
        $__internal_17cb57d9dbf7aa6d05b97409c924b990f7a23d4df827fe5aca8f205e3c454afa->leave($__internal_17cb57d9dbf7aa6d05b97409c924b990f7a23d4df827fe5aca8f205e3c454afa_prof);

    }

    public function getTemplateName()
    {
        return "@Spotted/CRUD/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  103 => 37,  92 => 31,  88 => 30,  84 => 29,  81 => 28,  76 => 27,  62 => 16,  57 => 14,  52 => 11,  42 => 7,  36 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for m in listspotted %}

<h1>{{ m.titreP }}</h1><br>
<img width=\"88%\" src=\"{{ asset('uploads/images/' ~ m.image) }}\"/>
content : <br>
<blockquote>
    {{ m.descP }}
</blockquote>

    {% endfor %}


<div style=\"background-color: oldlace !important; height: 500px !important;border:2px solid black !important;\">
    {{ form_start(form) }}

    {{ form_end(form) }}

    <div style=\"padding: 20px !important; background-color: #C1CEC4 !important;\">
        <table border=\"1\">
            <tr>
                <th>
                    id
                </th>


            </tr>
            {% for f in comments %}
                <tr>
                    <td>{{ f.contentComm }}</td>
                    <td><a href=\"{{ path('_edit_comment_spotted',{'id':f.id}) }}\">Modifier</a></td>
                    <td><a href=\"{{ path('_delete_comment_spotted',{'id':f.id}) }}\">Supprimer</a></td>



                </tr>
            {% else %}
                <i>There is no comments here...</i>
            {% endfor %}
        </table>

    </div>
</div>", "@Spotted/CRUD/content.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\SpottedBundle\\Resources\\views\\CRUD\\content.html.twig");
    }
}
