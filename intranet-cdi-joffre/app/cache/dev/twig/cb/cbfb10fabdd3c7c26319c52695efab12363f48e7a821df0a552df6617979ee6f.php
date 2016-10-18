<?php

/* CdiBundle:Article:resultatRecherche.html.twig */
class __TwigTemplate_c0600b72bd356067267d8089b5c24e3846e236de9812bf30e79d43e3abf9a0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CdiBundle:Article:resultatRecherche.html.twig", 1);
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
        $__internal_42f308a17ffaf3c48d62b34ace0739cfd75aef218b8c731e8aca340f06a6612b = $this->env->getExtension("native_profiler");
        $__internal_42f308a17ffaf3c48d62b34ace0739cfd75aef218b8c731e8aca340f06a6612b->enter($__internal_42f308a17ffaf3c48d62b34ace0739cfd75aef218b8c731e8aca340f06a6612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CdiBundle:Article:resultatRecherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f308a17ffaf3c48d62b34ace0739cfd75aef218b8c731e8aca340f06a6612b->leave($__internal_42f308a17ffaf3c48d62b34ace0739cfd75aef218b8c731e8aca340f06a6612b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69cbb9ef5e76e4802ebcbd8adb02287ba83db01ec82587d0f06fabf92a95e421 = $this->env->getExtension("native_profiler");
        $__internal_69cbb9ef5e76e4802ebcbd8adb02287ba83db01ec82587d0f06fabf92a95e421->enter($__internal_69cbb9ef5e76e4802ebcbd8adb02287ba83db01ec82587d0f06fabf92a95e421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\"/>
    <style>
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
    </style>
";
        
        $__internal_69cbb9ef5e76e4802ebcbd8adb02287ba83db01ec82587d0f06fabf92a95e421->leave($__internal_69cbb9ef5e76e4802ebcbd8adb02287ba83db01ec82587d0f06fabf92a95e421_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_63607457fdfde22a65509bdbfd02ec912c763b0556aad9f46b779b63d375fdcc = $this->env->getExtension("native_profiler");
        $__internal_63607457fdfde22a65509bdbfd02ec912c763b0556aad9f46b779b63d375fdcc->enter($__internal_63607457fdfde22a65509bdbfd02ec912c763b0556aad9f46b779b63d375fdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "<section id=\"contenu\">
    ";
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "status"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "status"), "method") == "etudiant"))) {
            // line 44
            echo "        <h2 class=\"fil_ariane\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("accueil");
            echo "\">Accueil</a> > RÉSULTAT DE LA RECHERCHE</h2>
    ";
        } else {
            // line 46
            echo "        <h2 class=\"fil_ariane\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("administration");
            echo "\">Administration</a> > RÉSULTAT DE LA RECHERCHE</h2>
    ";
        }
        // line 48
        echo "    <section class=\"section\" style=\"margin-bottom: 40px; position: relative; top: -10px;\">
        <h3 style=\"margin: 0; font-size: 14px; font-weight: normal; text-transform: uppercase; margin-bottom: 5px; margin-top: -10px;\">Recherche :</h3>
        ";
        // line 50
        $this->loadTemplate("AppBundle::formulaireRecherche.html.twig", "CdiBundle:Article:resultatRecherche.html.twig", 50)->display($context);
        // line 51
        echo "    </section>
    ";
        // line 53
        echo "    ";
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 54
            echo "    <section>
        <ul>
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 57
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_voir", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">
            <li class=\"article\">
                <h4>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
                echo "</h4>
                <p>Le ";
                // line 60
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
            // line 64
            echo "        </ul>
    </section>
    ";
            // line 67
            echo "    ";
        } else {
            // line 68
            echo "    <div class=\"erreur\">
        Aucun article n'a été trouvé dans la base de données.
    </div>
    ";
        }
        // line 72
        echo "</section>

<script type=\"text/javascript\">
    document.getElementById(\"recherche_avancee\").addEventListener(\"click\", function(){
        // Afficher
        if(document.getElementById(\"champs_recherche_avancee\").style.display == \"none\"){
            document.getElementById(\"champs_recherche_avancee\").style.display = \"block\";
            document.getElementById(\"recherche_avancee\").innerHTML = \"Fermer la recherche avancée\";
        }
        
        // Cacher
        else{
            document.getElementById(\"champs_recherche_avancee\").style.display = \"none\";
            document.getElementById(\"recherche_avancee\").innerHTML = \"Recherche avancée\";
        }
    });
</script>
";
        
        $__internal_63607457fdfde22a65509bdbfd02ec912c763b0556aad9f46b779b63d375fdcc->leave($__internal_63607457fdfde22a65509bdbfd02ec912c763b0556aad9f46b779b63d375fdcc_prof);

    }

    public function getTemplateName()
    {
        return "CdiBundle:Article:resultatRecherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 72,  157 => 68,  154 => 67,  150 => 64,  138 => 60,  134 => 59,  128 => 57,  124 => 56,  120 => 54,  117 => 53,  114 => 51,  112 => 50,  108 => 48,  102 => 46,  96 => 44,  94 => 43,  91 => 42,  85 => 41,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/base.css') }}"/>*/
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
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <section id="contenu">*/
/*     {% if app.session.get('status') is defined and app.session.get('status') == 'etudiant' %}*/
/*         <h2 class="fil_ariane"><a href="{{ path('accueil') }}">Accueil</a> > RÉSULTAT DE LA RECHERCHE</h2>*/
/*     {% else %}*/
/*         <h2 class="fil_ariane"><a href="{{ path('administration') }}">Administration</a> > RÉSULTAT DE LA RECHERCHE</h2>*/
/*     {% endif %}*/
/*     <section class="section" style="margin-bottom: 40px; position: relative; top: -10px;">*/
/*         <h3 style="margin: 0; font-size: 14px; font-weight: normal; text-transform: uppercase; margin-bottom: 5px; margin-top: -10px;">Recherche :</h3>*/
/*         {% include 'AppBundle::formulaireRecherche.html.twig' %}*/
/*     </section>*/
/*     {# Si la recherche trouve des articles, on affiche la liste #}*/
/*     {% if articles %}*/
/*     <section>*/
/*         <ul>*/
/*         {% for article in articles %}*/
/*             <a href="{{ path('article_voir', {'id' : article.id}) }}">*/
/*             <li class="article">*/
/*                 <h4>{{ article.titre }}</h4>*/
/*                 <p>Le {{ article.dateParution|date('d/m/Y') }} dans {{ article.periodique.nom }}</p>*/
/*             </li>*/
/*             </a>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     </section>*/
/*     {# Si la recherche ne trouve pas d'articles #}*/
/*     {% else %}*/
/*     <div class="erreur">*/
/*         Aucun article n'a été trouvé dans la base de données.*/
/*     </div>*/
/*     {% endif %}*/
/* </section>*/
/* */
/* <script type="text/javascript">*/
/*     document.getElementById("recherche_avancee").addEventListener("click", function(){*/
/*         // Afficher*/
/*         if(document.getElementById("champs_recherche_avancee").style.display == "none"){*/
/*             document.getElementById("champs_recherche_avancee").style.display = "block";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Fermer la recherche avancée";*/
/*         }*/
/*         */
/*         // Cacher*/
/*         else{*/
/*             document.getElementById("champs_recherche_avancee").style.display = "none";*/
/*             document.getElementById("recherche_avancee").innerHTML = "Recherche avancée";*/
/*         }*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
