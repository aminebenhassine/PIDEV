<?php

/* @Spotted/CRUD/listspotted.html.twig */
class __TwigTemplate_74eb91093a2f9c5bf3532db0f4807f9642bcc029e1c709a2634bb4045bc5c0fe extends Twig_Template
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
        $__internal_db0a3a8cb4039ae42c065c7fde2a1995e1ce01e69e7a4d88364fa2969b585e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0a3a8cb4039ae42c065c7fde2a1995e1ce01e69e7a4d88364fa2969b585e4e->enter($__internal_db0a3a8cb4039ae42c065c7fde2a1995e1ce01e69e7a4d88364fa2969b585e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/listspotted.html.twig"));

        $__internal_c570b2e7f128324fd743b3f5e0a043ff5aa2f1b93bff3cd729a51adef4682301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c570b2e7f128324fd743b3f5e0a043ff5aa2f1b93bff3cd729a51adef4682301->enter($__internal_c570b2e7f128324fd743b3f5e0a043ff5aa2f1b93bff3cd729a51adef4682301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Spotted/CRUD/listspotted.html.twig"));

        // line 1
        echo "<h1>Liste des spotted</h1>

<table border=\"1\">
    <tr>
        <th>
            id
        </th>
        <th>Titre Spotted publication</th>
        <th>Categorie</th>
        <th>description</th>
        <th>date</th>
        <th>note</th>

    </tr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listspotted"]) || array_key_exists("listspotted", $context) ? $context["listspotted"] : (function () { throw new Twig_Error_Runtime('Variable "listspotted" does not exist.', 15, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 16
            echo "        <tr>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "titreP", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "categorieP", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "descP", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "dateP", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "note", array()), "html", null, true);
            echo "</td>
            <td><img width=\"20%\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "image", array()))), "html", null, true);
            echo "\"/> </td>
            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_modifier_spotted", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_delete_spotted", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id", array()))), "html", null, true);
            echo "\">delete</a></td>
            <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_spotted_content", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id", array()))), "html", null, true);
            echo "\">lire la suite</a></td>


        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <i>There is no assurance here...</i>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>

";
        
        $__internal_db0a3a8cb4039ae42c065c7fde2a1995e1ce01e69e7a4d88364fa2969b585e4e->leave($__internal_db0a3a8cb4039ae42c065c7fde2a1995e1ce01e69e7a4d88364fa2969b585e4e_prof);

        
        $__internal_c570b2e7f128324fd743b3f5e0a043ff5aa2f1b93bff3cd729a51adef4682301->leave($__internal_c570b2e7f128324fd743b3f5e0a043ff5aa2f1b93bff3cd729a51adef4682301_prof);

    }

    public function getTemplateName()
    {
        return "@Spotted/CRUD/listspotted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  95 => 31,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  46 => 16,  41 => 15,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Liste des spotted</h1>

<table border=\"1\">
    <tr>
        <th>
            id
        </th>
        <th>Titre Spotted publication</th>
        <th>Categorie</th>
        <th>description</th>
        <th>date</th>
        <th>note</th>

    </tr>
    {% for m in listspotted %}
        <tr>
            <td>{{ m.id }}</td>
            <td>{{ m.titreP }}</td>
            <td>{{ m.categorieP }}</td>
            <td>{{ m.descP }}</td>
            <td>{{ m.dateP|date }}</td>
            <td>{{ m.note }}</td>
            <td><img width=\"20%\" src=\"{{ asset('uploads/images/' ~ m.image) }}\"/> </td>
            <td><a href=\"{{ path('_modifier_spotted',{'id':m.id}) }}\">Modifier</a></td>
            <td><a href=\"{{ path('_delete_spotted',{'id':m.id}) }}\">delete</a></td>
            <td><a href=\"{{ path('_spotted_content',{'id':m.id}) }}\">lire la suite</a></td>


        </tr>
    {% else %}
        <i>There is no assurance here...</i>
    {% endfor %}
</table>

", "@Spotted/CRUD/listspotted.html.twig", "C:\\wamp64\\www\\pidev00\\src\\EspritEntreAide\\SpottedBundle\\Resources\\views\\CRUD\\listspotted.html.twig");
    }
}
