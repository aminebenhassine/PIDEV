<?php

/* admin/partial/body_ajout_club.html.twig */
class __TwigTemplate_93a8ec59455789258fd331f2822d2a8559e90ba03c9a4d46b5f5e08b0152d448 extends Twig_Template
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
        $__internal_f2f1e91ec0f1a20e02f1c8ae256f29a81a03b4fdec9e2c4875355ee3e3498e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f1e91ec0f1a20e02f1c8ae256f29a81a03b4fdec9e2c4875355ee3e3498e16->enter($__internal_f2f1e91ec0f1a20e02f1c8ae256f29a81a03b4fdec9e2c4875355ee3e3498e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/body_ajout_club.html.twig"));

        $__internal_b753970f4c99de69e0298ed7c665fb3519d7bb2a2d6245f278da22785b57c03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b753970f4c99de69e0298ed7c665fb3519d7bb2a2d6245f278da22785b57c03e->enter($__internal_b753970f4c99de69e0298ed7c665fb3519d7bb2a2d6245f278da22785b57c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partial/body_ajout_club.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("admin/partial/top-header.html.twig", "admin/partial/body_ajout_club.html.twig", 2)->display($context);
        // line 3
        echo "
<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    ";
        // line 9
        $this->loadTemplate("admin/partial/sidebar.html.twig", "admin/partial/body_ajout_club.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"main-content\">
        <div class=\"main-content-inner\">
            ";
        // line 13
        $this->loadTemplate("admin/partial/breadcrumbs.html.twig", "admin/partial/body_ajout_club.html.twig", 13)->display($context);
        // line 14
        echo "


            <div class=\"page-content\">
                <div class=\"ace-settings-container\" id=\"ace-settings-container\">
                    <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                        <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                    </div>

                    <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <div class=\"pull-left\">
                                    <select id=\"skin-colorpicker\" class=\"hide\">
                                        <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                        <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                        <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                        <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-add-container\">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->
                <div class=\"page-header\">
                    <h1>
                        Ajout Club 2

                    </h1>
                </div><!-- /.page-header -->
                <fieldset>
                    ";
        // line 91
        if (((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_SUPER_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RESPONSABLE_CLUB")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 92
            echo "
                        <table>
                            <tr>
                                ";
            // line 95
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'form_start');
            echo "
                            <tr>
                                <td>Nom de club:</td>
                                <td>";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 98, $this->getSourceContext()); })()), "nomC", array()), 'widget');
            echo " </td>
                            </tr>

                            <tr>
                                <td>Mail de club:</td>
                                <td>";
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "mailC", array()), 'widget');
            echo " </td>
                            </tr>

                            <tr>
                                <td>Responsable de club :</td>
                                <td>";
            // line 108
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 108, $this->getSourceContext()); })()), "idUser", array()), 'widget');
            echo " </td>
                            </tr>

                            <tr>
                                <td>Description  de club :</td>
                                <td>";
            // line 113
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 113, $this->getSourceContext()); })()), "descC", array()), 'widget');
            echo " </td>
                            </tr>

                            <tr>
                                <td>Date de Creation de club :</td>
                                <td>";
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 118, $this->getSourceContext()); })()), "dateCreation", array()), 'widget');
            echo " </td>
                            </tr>
                            <tr>
                                <td>Photo de Club :</td>
                                <td>";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 122, $this->getSourceContext()); })()), "image", array()), 'row');
            echo " </td>
                            </tr>


                            <tr>
                                <td>Valider votre inscription :</td>
                                <td>";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "Ajouter", array()), 'widget');
            echo " </td>
                            </tr>


                            ";
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->getSourceContext()); })()), "image", array()), 'row');
            echo "

                            ";
            // line 134
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'form_end');
            echo "

                        </table>
                    ";
        }
        // line 138
        echo "                </fieldset>


            </div>
        </div>
    </div>


    ";
        // line 146
        $this->loadTemplate("admin/partial/footer.html.twig", "admin/partial/body_ajout_club.html.twig", 146)->display($context);
        // line 147
        echo "




    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->


";
        
        $__internal_f2f1e91ec0f1a20e02f1c8ae256f29a81a03b4fdec9e2c4875355ee3e3498e16->leave($__internal_f2f1e91ec0f1a20e02f1c8ae256f29a81a03b4fdec9e2c4875355ee3e3498e16_prof);

        
        $__internal_b753970f4c99de69e0298ed7c665fb3519d7bb2a2d6245f278da22785b57c03e->leave($__internal_b753970f4c99de69e0298ed7c665fb3519d7bb2a2d6245f278da22785b57c03e_prof);

    }

    public function getTemplateName()
    {
        return "admin/partial/body_ajout_club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 147,  216 => 146,  206 => 138,  199 => 134,  194 => 132,  187 => 128,  178 => 122,  171 => 118,  163 => 113,  155 => 108,  147 => 103,  139 => 98,  133 => 95,  128 => 92,  126 => 91,  47 => 14,  45 => 13,  40 => 10,  38 => 9,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% include \"admin/partial/top-header.html.twig\" %}

<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    {% include \"admin/partial/sidebar.html.twig\" %}

    <div class=\"main-content\">
        <div class=\"main-content-inner\">
            {% include \"admin/partial/breadcrumbs.html.twig\" %}



            <div class=\"page-content\">
                <div class=\"ace-settings-container\" id=\"ace-settings-container\">
                    <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                        <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                    </div>

                    <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <div class=\"pull-left\">
                                    <select id=\"skin-colorpicker\" class=\"hide\">
                                        <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                        <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                        <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                        <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-add-container\">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->
                <div class=\"page-header\">
                    <h1>
                        Ajout Club 2

                    </h1>
                </div><!-- /.page-header -->
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
                                <td>Photo de Club :</td>
                                <td>{{ form_row(form.image) }} </td>
                            </tr>


                            <tr>
                                <td>Valider votre inscription :</td>
                                <td>{{ form_widget(form.Ajouter) }} </td>
                            </tr>


                            {{ form_row(form.image) }}

                            {{ form_end(form) }}

                        </table>
                    {% endif %}
                </fieldset>


            </div>
        </div>
    </div>


    {% include \"admin/partial/footer.html.twig\" %}





    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->


", "admin/partial/body_ajout_club.html.twig", "C:\\wamp64\\www\\pidev00\\app\\Resources\\views\\admin\\partial\\body_ajout_club.html.twig");
    }
}
