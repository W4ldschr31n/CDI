<?php

/* CdiBundle:Article:liste.html.twig */
class __TwigTemplate_7a9fc5eb6f9235b5888dcbbf0148330ebab4d5f4da80b45d1b3eeb9af7a29bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:liste.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c8e58d12fda21357212ba2146ac5e5ec266e2e2ac84fb76bb18eb94c82f100e = $this->env->getExtension("native_profiler");
        $__internal_2c8e58d12fda21357212ba2146ac5e5ec266e2e2ac84fb76bb18eb94c82f100e->enter($__internal_2c8e58d12fda21357212ba2146ac5e5ec266e2e2ac84fb76bb18eb94c82f100e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8e58d12fda21357212ba2146ac5e5ec266e2e2ac84fb76bb18eb94c82f100e->leave($__internal_2c8e58d12fda21357212ba2146ac5e5ec266e2e2ac84fb76bb18eb94c82f100e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36cd9c5578c882729be66028b6c73151fb9bce784e974b8cafb2983c40f1aa71 = $this->env->getExtension("native_profiler");
        $__internal_36cd9c5578c882729be66028b6c73151fb9bce784e974b8cafb2983c40f1aa71->enter($__internal_36cd9c5578c882729be66028b6c73151fb9bce784e974b8cafb2983c40f1aa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <style>
        ul{
            list-style: none;
            padding: 0;
        }
        
        .article{
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 8px;
            background-color: #E8E8E8;
            color: black;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        .article h4{
            font-size: 13px;
            text-transform: uppercase;
            margin: 0;
            color: black;
        }

        .article:hover{
            background-color: #D9D9D9;
        }
        
        .article p{
            font-size: 12px;
            margin: 0;
            margin-top: 4px;
        }

        .pagination{
            color: black;
            background-color: #E8E8E8;
            font-family: Arial;
            padding: 3px;
        }

        .pagination:hover{
            font-weight: bold;
        }
    </style>
";
        
        $__internal_36cd9c5578c882729be66028b6c73151fb9bce784e974b8cafb2983c40f1aa71->leave($__internal_36cd9c5578c882729be66028b6c73151fb9bce784e974b8cafb2983c40f1aa71_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f195e90f50cc6907aa0434eb5c11d284ba1e744a7023c96a8364352cba99559 = $this->env->getExtension("native_profiler");
        $__internal_9f195e90f50cc6907aa0434eb5c11d284ba1e744a7023c96a8364352cba99559->enter($__internal_9f195e90f50cc6907aa0434eb5c11d284ba1e744a7023c96a8364352cba99559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <section id=\"contenu\">
    <h2 class=\"fil_ariane\"><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("administration");
        echo "\">Administration</a> > RÉSULTAT DE LA RECHERCHE</h2>
    <ul>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 56
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
            <li class=\"article\">
                <h4>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h4>
                <p>Le ";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateParution", array()), "d/m/Y"), "html", null, true);
            echo " dans ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "periodique", array()), "nom", array()), "html", null, true);
            echo "</p>
            </li>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </ul>

    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPage"]) ? $context["nbPage"] : $this->getContext($context, "nbPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            echo "        <a class=\"pagination\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_liste", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </section>
";
        
        $__internal_9f195e90f50cc6907aa0434eb5c11d284ba1e744a7023c96a8364352cba99559->leave($__internal_9f195e90f50cc6907aa0434eb5c11d284ba1e744a7023c96a8364352cba99559_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 68,  141 => 66,  137 => 65,  133 => 63,  121 => 59,  117 => 58,  111 => 56,  107 => 55,  102 => 53,  99 => 52,  93 => 51,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <style>*/
/*         ul{*/
/*             list-style: none;*/
/*             padding: 0;*/
/*         }*/
/*         */
/*         .article{*/
/*             width: 100%;*/
/*             padding: 10px 15px;*/
/*             margin-bottom: 8px;*/
/*             background-color: #E8E8E8;*/
/*             color: black;*/
/*             -webkit-box-sizing: border-box;*/
/*             -moz-box-sizing: border-box;*/
/*             box-sizing: border-box;*/
/*         }*/
/*         */
/*         .article h4{*/
/*             font-size: 13px;*/
/*             text-transform: uppercase;*/
/*             margin: 0;*/
/*             color: black;*/
/*         }*/
/* */
/*         .article:hover{*/
/*             background-color: #D9D9D9;*/
/*         }*/
/*         */
/*         .article p{*/
/*             font-size: 12px;*/
/*             margin: 0;*/
/*             margin-top: 4px;*/
/*         }*/
/* */
/*         .pagination{*/
/*             color: black;*/
/*             background-color: #E8E8E8;*/
/*             font-family: Arial;*/
/*             padding: 3px;*/
/*         }*/
/* */
/*         .pagination:hover{*/
/*             font-weight: bold;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <section id="contenu">*/
/*     <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > RÉSULTAT DE LA RECHERCHE</h2>*/
/*     <ul>*/
/*         {% for article in articles %}*/
/*             <a href="{{ path('article_voir', {'id' : article.id}) }}">*/
/*             <li class="article">*/
/*                 <h4>{{ article.titre }}</h4>*/
/*                 <p>Le {{ article.dateParution|date('d/m/Y') }} dans {{ article.periodique.nom }}</p>*/
/*             </li>*/
/*             </a>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/*     {% for i in range(1, nbPage) %}*/
/*         <a class="pagination" href="{{ path('article_liste', {'page' : i }) }}">{{ i }}</a>*/
/*     {% endfor %}*/
/*     </section>*/
/* {% endblock %}*/
