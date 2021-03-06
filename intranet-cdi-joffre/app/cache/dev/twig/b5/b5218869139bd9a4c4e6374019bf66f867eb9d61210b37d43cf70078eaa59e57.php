<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_56282c46b1ab18956b8bc6c2acce74720fb1545ba1d155bf0678d8cdc7d2a9fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21d89f0787dec743a6ae21dd019b5cf45488a5a1ed1145c59deb65191d338b74 = $this->env->getExtension("native_profiler");
        $__internal_21d89f0787dec743a6ae21dd019b5cf45488a5a1ed1145c59deb65191d338b74->enter($__internal_21d89f0787dec743a6ae21dd019b5cf45488a5a1ed1145c59deb65191d338b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d89f0787dec743a6ae21dd019b5cf45488a5a1ed1145c59deb65191d338b74->leave($__internal_21d89f0787dec743a6ae21dd019b5cf45488a5a1ed1145c59deb65191d338b74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1adc910adeb626e6469057254af5d8d6f8d7bc1b15babe278be2aef7f4a4ca5 = $this->env->getExtension("native_profiler");
        $__internal_c1adc910adeb626e6469057254af5d8d6f8d7bc1b15babe278be2aef7f4a4ca5->enter($__internal_c1adc910adeb626e6469057254af5d8d6f8d7bc1b15babe278be2aef7f4a4ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c1adc910adeb626e6469057254af5d8d6f8d7bc1b15babe278be2aef7f4a4ca5->leave($__internal_c1adc910adeb626e6469057254af5d8d6f8d7bc1b15babe278be2aef7f4a4ca5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11ecdeac23affaee1287cbba8f4b6914733b02553093c73f7aa3b908b5c5dd2e = $this->env->getExtension("native_profiler");
        $__internal_11ecdeac23affaee1287cbba8f4b6914733b02553093c73f7aa3b908b5c5dd2e->enter($__internal_11ecdeac23affaee1287cbba8f4b6914733b02553093c73f7aa3b908b5c5dd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_11ecdeac23affaee1287cbba8f4b6914733b02553093c73f7aa3b908b5c5dd2e->leave($__internal_11ecdeac23affaee1287cbba8f4b6914733b02553093c73f7aa3b908b5c5dd2e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b89d2f2e4e43eb410d351ea1deee137ff5df6d0a30e313487b97443684fd54bd = $this->env->getExtension("native_profiler");
        $__internal_b89d2f2e4e43eb410d351ea1deee137ff5df6d0a30e313487b97443684fd54bd->enter($__internal_b89d2f2e4e43eb410d351ea1deee137ff5df6d0a30e313487b97443684fd54bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b89d2f2e4e43eb410d351ea1deee137ff5df6d0a30e313487b97443684fd54bd->leave($__internal_b89d2f2e4e43eb410d351ea1deee137ff5df6d0a30e313487b97443684fd54bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
