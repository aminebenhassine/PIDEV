<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0c02199a9a733f3ff3e47d2b5a3adb79343f31b4395ff6211c58bfd00f1bee3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbeafe91746775d32d6164a4894080336124d41b51242f3669897346da9169cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeafe91746775d32d6164a4894080336124d41b51242f3669897346da9169cf->enter($__internal_bbeafe91746775d32d6164a4894080336124d41b51242f3669897346da9169cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_94aefbf0a83638822d24cba1e82bcb390be23d3e6c059a101c415a9793b0ce68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aefbf0a83638822d24cba1e82bcb390be23d3e6c059a101c415a9793b0ce68->enter($__internal_94aefbf0a83638822d24cba1e82bcb390be23d3e6c059a101c415a9793b0ce68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_bbeafe91746775d32d6164a4894080336124d41b51242f3669897346da9169cf->leave($__internal_bbeafe91746775d32d6164a4894080336124d41b51242f3669897346da9169cf_prof);

        
        $__internal_94aefbf0a83638822d24cba1e82bcb390be23d3e6c059a101c415a9793b0ce68->leave($__internal_94aefbf0a83638822d24cba1e82bcb390be23d3e6c059a101c415a9793b0ce68_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9ee52906be18cd9b2bb879dd62050430764a8a1abbe28c942506daafafd8b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9ee52906be18cd9b2bb879dd62050430764a8a1abbe28c942506daafafd8b33->enter($__internal_b9ee52906be18cd9b2bb879dd62050430764a8a1abbe28c942506daafafd8b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_361db95a2e48f593e7ff8a9030380c887b440fdf00dfe6020a0dd9c43091a391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361db95a2e48f593e7ff8a9030380c887b440fdf00dfe6020a0dd9c43091a391->enter($__internal_361db95a2e48f593e7ff8a9030380c887b440fdf00dfe6020a0dd9c43091a391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_361db95a2e48f593e7ff8a9030380c887b440fdf00dfe6020a0dd9c43091a391->leave($__internal_361db95a2e48f593e7ff8a9030380c887b440fdf00dfe6020a0dd9c43091a391_prof);

        
        $__internal_b9ee52906be18cd9b2bb879dd62050430764a8a1abbe28c942506daafafd8b33->leave($__internal_b9ee52906be18cd9b2bb879dd62050430764a8a1abbe28c942506daafafd8b33_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed7cf07580680d000dd4296136fa75fcd99655ba7b79cfffcb31f71130c6b9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7cf07580680d000dd4296136fa75fcd99655ba7b79cfffcb31f71130c6b9ee->enter($__internal_ed7cf07580680d000dd4296136fa75fcd99655ba7b79cfffcb31f71130c6b9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e4f9dd0a84d5623dae57876eb8ac58897a547067d79257dd503b840603daff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4f9dd0a84d5623dae57876eb8ac58897a547067d79257dd503b840603daff6->enter($__internal_9e4f9dd0a84d5623dae57876eb8ac58897a547067d79257dd503b840603daff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9e4f9dd0a84d5623dae57876eb8ac58897a547067d79257dd503b840603daff6->leave($__internal_9e4f9dd0a84d5623dae57876eb8ac58897a547067d79257dd503b840603daff6_prof);

        
        $__internal_ed7cf07580680d000dd4296136fa75fcd99655ba7b79cfffcb31f71130c6b9ee->leave($__internal_ed7cf07580680d000dd4296136fa75fcd99655ba7b79cfffcb31f71130c6b9ee_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_afd7ffff40f35536c7c85e7a293cff0a0ef42bc79dee29a1b3e43fca003c6cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd7ffff40f35536c7c85e7a293cff0a0ef42bc79dee29a1b3e43fca003c6cea->enter($__internal_afd7ffff40f35536c7c85e7a293cff0a0ef42bc79dee29a1b3e43fca003c6cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d939bbba093658a71473ea9d7f1c4448869bfdf8765e87f5627084a606906fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d939bbba093658a71473ea9d7f1c4448869bfdf8765e87f5627084a606906fe->enter($__internal_9d939bbba093658a71473ea9d7f1c4448869bfdf8765e87f5627084a606906fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d939bbba093658a71473ea9d7f1c4448869bfdf8765e87f5627084a606906fe->leave($__internal_9d939bbba093658a71473ea9d7f1c4448869bfdf8765e87f5627084a606906fe_prof);

        
        $__internal_afd7ffff40f35536c7c85e7a293cff0a0ef42bc79dee29a1b3e43fca003c6cea->leave($__internal_afd7ffff40f35536c7c85e7a293cff0a0ef42bc79dee29a1b3e43fca003c6cea_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\pidev00\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
